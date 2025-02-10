<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SerialNumber;

class SerialNumberController extends Controller
{
    public function showForm()
    {
        return view('check_serial');
    }

    public function checkSerial(Request $request)
    {
        $serialNumber = $request->input('serial_number');
        $valid = SerialNumber::where('serial_number', $serialNumber)->exists();

        if ($valid) {
            return back()->with('success', 'Il tuo numero di serie è valido.');
        } else {
            return back()->with('error', 'Il tuo numero di serie non è valido.');
        }
    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
