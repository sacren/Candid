<?php

namespace App\Http\Controllers;

use App\Billings\Bill;
use App\Billings\Customer;
use App\Billings\Invoice;
use App\Billings\ProcessInvoice;
use App\Contracts\BillingInterface;
use Illuminate\Http\Request;
use NumberFormatter;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bill = new Bill();
        $invoice = new Invoice();
        $invoice->amount = 5000;
        $classEarly = Invoice::getClassEarly();
        $classLate = Invoice::getClassLate();
        unset($invoice->amount);
        $results = $invoice->process('payment', 'email');
        $staticResults = Invoice::process('sms');
        $billName = $bill->getInstanceName();
        $invoiceName = $invoice->getInstanceName();
        $billObject = $bill->getObject();
        $invoiceObject = $invoice->getObject();
        $parentClass = Invoice::getClassBySelf();
        $childClass = Invoice::getClassByStatic();

        return view('billings.index', compact(
            'bill',
            'invoice',
            'classEarly',
            'classLate',
            'results',
            'staticResults',
            'billName',
            'invoiceName',
            'billObject',
            'invoiceObject',
            'parentClass',
            'childClass'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BillingInterface $billing)
    {
        $invoice = (new ProcessInvoice())();
        $customer = new Customer('John Doe', 30);

        // Format amount with NumberFormatter
        $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
        $invoice['formatted_amount'] = $formatter->formatCurrency($invoice['amount'], 'USD');

        return view($billing->getViewName(), compact('invoice', 'customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
