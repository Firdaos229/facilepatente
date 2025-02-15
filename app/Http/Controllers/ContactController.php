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
                ->subject('Nuovo messaggio di contatto')
                ->html('<p><strong>Nome :</strong> ' . $request->name . '</p>
                        <p><strong>E-mail :</strong> ' . $request->email . '</p>
                        <p><strong>Telefono :</strong> ' . $request->phone . '</p>
                        <p><strong>Messaggio :</strong> ' . nl2br(e($request->message)) . '</p>');
        });

        // Envoi de l'email
        Mail::send([], [], function ($message) use ($request) {
            $message->from('contact@gmail.com', 'Facile Patente') // L'adresse e-mail de l'expéditeur
                ->replyTo($request->email) // L'email de réponse sera celui de l'utilisateur qui a soumis le formulaire
                ->to('contact@gmail.com') // Destinataire de l'email (vous-même)
                ->subject('Nuovo messaggio di contatto') // Sujet de l'email
                ->html('<p><strong>Nome :</strong> ' . $request->name . '</p>
                <p><strong>Cognome :</strong> ' . $request->lastname . '</p>
                <p><strong>Indirizzo :</strong> ' . $request->address . '</p>
                <p><strong>Classe patente :</strong> ' . $request->address . '</p> <!-- Assurez-vous que le champ sélectionné ici correspond à la licence choisie -->
                <p><strong>Telefono :</strong> ' . $request->phone . '</p>
                <p><strong>Paese :</strong> ' . $request->village . '</p>
                <p><strong>Metodo di pagamento :</strong> ' . implode(", ", $request->pagamento ?? []) . '</p>
                <p><strong>E-mail :</strong> ' . $request->email . '</p>
                <p><strong>Messaggio :</strong> ' . nl2br(e($request->message)) . '</p>');
        });


        return redirect()->route('contact')->with('success', 'Il tuo messaggio è stato inviato con successo!');
    }

    public function markAsRead($id)
    {
        $message = Message::findOrFail($id);
        $message->status = 'read';
        $message->save();

        return redirect()->back()->with('success', 'Messaggio contrassegnato come letto.');
    }

    public function delete($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();


        return redirect()->back()->with('success', 'Messaggio eliminato.');
    }
}
