<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

        // Enregistrer le message en base de données
        Message::create($validated);

        // Envoi de l'email
        Mail::send([], [], function ($message) use ($request) {
            $message->from('contact@gmail.com', 'Facile Patente')
                ->replyTo($request->email) // Correction ici !
                ->to('contact@gmail.com')
                ->subject('Nouveau message de contact')
                ->html('<p><strong>Nom :</strong> ' . $request->name . '</p>
                        <p><strong>Email :</strong> ' . $request->email . '</p>
                        <p><strong>Téléphone :</strong> ' . $request->phone . '</p>
                        <p><strong>Message :</strong> ' . nl2br(e($request->message)) . '</p>');
        });

        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès !');
    }

    public function markAsRead($id)
    {
        $message = Message::findOrFail($id);
        $message->status = 'read'; 
        $message->save();

        return redirect()->back()->with('success', 'Message marqué comme lu.');
    }

    public function delete($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->back()->with('success', 'Message supprimé.');
    }
}
