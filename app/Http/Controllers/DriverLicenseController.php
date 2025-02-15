<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriverLicense;

class DriverLicenseController extends Controller
{
    public function index()
    {
        $driverLicense = DriverLicense::all();
        return view('dashboard.admin.driver-license', compact('driverLicense'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|string',
            'license_class' => 'required|string',
            'phone' => 'required|string|max:15',
            'village' => 'required|string',
            'payment_option' => 'required|string', 
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Sauvegarder les données dans la base de données
        DriverLicense::create([
            'name' => $validated['name'],
            'lastname' => $validated['lastname'],
            'address' => $validated['address'],
            'license_class' => $validated['license_class'],
            'phone' => $validated['phone'],
            'village' => $validated['village'],
            'payment_option' => $validated['payment_option'], 
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return redirect()->route('course-detail')->with('success', 'Modulo inviato con successo!');
    }

    public function markAsRead($id)
    {
        $message = DriverLicense::findOrFail($id);
        $message->status = 'read';
        $message->save();

        return redirect()->back()->with('success', 'Messaggio contrassegnato come letto.');
    }

    public function delete($id)
    {
        $message = DriverLicense::findOrFail($id);
        $message->delete();

        return redirect()->back()->with('success', 'Messaggio eliminato.');
    }
}

