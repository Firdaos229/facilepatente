<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Message;

class ContactController extends Controller
{
    public function index()
{
    $messages = Message::all();
    return view('dashboard.admin.messages', compact('messages'));
}

    
    
    
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required|max:15',
        'message' => 'required',
    ]);

    // Si la validation passe, on enregistre le message
    Message::create($validated);

    // Retourne vers la page de contact avec un message de succès
    return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès!');
}

}
