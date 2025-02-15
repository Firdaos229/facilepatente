<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterSetting;

class FooterController extends Controller
{
    public function edit()
    {
        $footer = FooterSetting::first(); // Récupérer la première ligne (on suppose qu'il n'y en a qu'une)
        return view('dashboard.footer_settings', compact('footer'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $footer = FooterSetting::first();
        if (!$footer) {
            $footer = new FooterSetting();
        }

        $footer->update($request->all());

        return redirect()->route('footer.edit')->with('success', 'Informazioni aggiornate con successo.');
    }
}
