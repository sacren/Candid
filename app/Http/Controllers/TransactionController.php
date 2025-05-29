<?php

namespace App\Http\Controllers;

use App\Accounts\Transaction;
use App\Enums\Status;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Create and process transactions
        $transactions = [];
        $transactions[] = (new Transaction(100, 'Cash Transaction'))
            ->setStatus(Status::PENDING)
            ->addTax(8)
            ->applyDiscount(10);
        $transactions[] = (new Transaction(200, 'Bank Transaction'))
            ->setStatus(Status::DECLINED)
            ->addTax(8)
            ->applyDiscount(15);
        $transactions[] = (new Transaction(300, 'Credit Transaction'))
            ->setStatus(Status::PAID)
            ->addTax(16)
            ->applyDiscount(20);

        return view('transactions.index', compact('transactions'));
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
    public function show(string $id)
    {
        //
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
