<?php

namespace App\Http\Controllers;

use App\Billings\Bill;
use App\Billings\Invoice;
use App\Billings\NamedObject;
use App\Billings\ProcessInvoice;
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
        $parentClass = Invoice::getClassBySelf();
        $childClass = Invoice::getClassByStatic();

        return view('billings.index', compact(
            'bill',
            'invoice',
            'classEarly',
            'classLate',
            'results',
            'staticResults',
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
    public function show(NamedObject $billing)
    {
        $invoice = (new ProcessInvoice())();

        // Format amount with NumberFormatter
        $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
        $invoice['formatted_amount'] = $formatter->formatCurrency($invoice['amount'], 'USD');

        return view($billing->getViewName(), compact('invoice'));
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
