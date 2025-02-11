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


}
