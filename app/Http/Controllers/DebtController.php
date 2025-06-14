<?php

namespace App\Http\Controllers;

use App\Debts\CollectionAgency;
use App\Debts\DebtCollectionService;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collector = new DebtCollectionService();
        $owedAmount = 500.0;
        $collectedAmount = $collector->collectDebt(new CollectionAgency());

        return view('debts.index', [
            'owed' => $owedAmount,
            'collected' => $collectedAmount,
            'fee' => CollectionAgency::FEE,
        ]);
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
