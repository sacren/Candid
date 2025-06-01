<?php

namespace App\Http\Controllers;

use App\Appliances\Toaster;
use Illuminate\Http\Request;

class ToasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toaster = new Toaster();
        $toaster->addSlice('Cinnamon');
        $toaster->addSlice('Blueberry');
        $toaster->addSlice('Plain');

        $slices = $toaster->getSlices();

        return view('toasters.index', compact('slices'));
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
