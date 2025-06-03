<?php

namespace App\Http\Controllers;

use App\Appliances\Toaster;
use App\Appliances\ToasterDeluxe;
use Illuminate\Http\Request;

class ToasterController extends Controller
{
    /**
     * Get the deluxe toaster with butter.
     *
     * @return ToasterDeluxe
     */
    private function getDeluxeToaster(): ToasterDeluxe
    {
        $toaster = new ToasterDeluxe();
        $toaster->addSlice('Cinnamon');
        $toaster->addSlice('Blueberry');
        $toaster->addSlice('Plain');
        return $toaster;
    }

    /**
     * Get the basic toaster.
     *
     * @return Toaster
     */
    private function getBasicToaster(): Toaster
    {
        $toaster = new Toaster();
        $toaster->addSlice('Single');
        $toaster->addSlice('Double');
        $toaster->addSlice('Triple');
        return $toaster;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('toasters.index', [
            'slices' => $this->getBasicToaster()->toast(),
            'butter_slices' => $this->getDeluxeToaster()->toastWithButter(),
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
