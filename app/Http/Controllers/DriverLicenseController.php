<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriverLicense;

class DriverLicenseController extends Controller
{
    public function create()
    {
        return view('driver-licenses.create'); // Affiche le formulaire
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
            'payment_options' => 'nullable|array',
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
            'payment_options' => $validated['payment_options'] ?? [],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return redirect()->route('driver-licenses.create')->with('success', 'Formulaire soumis avec succès !');
    }

}
