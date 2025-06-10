<?php

namespace App\Http\Controllers;

use App\Fields\Checkbox;
use App\Fields\Radio;
use App\Fields\Text;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = [
            'text' => new Text('Text'),
            'checkbox' => new Checkbox('Checkbox'),
            'radio' => new Radio('Radio'),
        ];

        $fields = collect($list)->mapWithKeys(function ($field, $key) {
            return [$key => $field->render()];
        })->all();

        return view('fields.index', compact('fields'));
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
