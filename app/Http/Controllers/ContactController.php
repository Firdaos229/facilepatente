<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function envoyermessage(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Envoi de l'email
        Mail::send([], [], function ($message) use ($request) {
            $message->from('contact@gmail.com', 'Site Web')
                ->replyTo($request->email)
                ->to('contact@gmail.com')
                ->html($request->message);
        });

        // Redirection avec un message de succès
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }

    public function destroycompte()
    {
        $user = Auth::user();
      
 
        $user->delete();
 
        return redirect('/')->with('success', 'Compte supprimé');
    
    }


     //Mise a jour infos compte
     public function update(Request $request)
     {
         // Validation des données
         $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
             'email' => 'required|email|unique:users,email,' . Auth::id(),
             'numero' => 'required|unique:users,numero,' . Auth::id(),
             'password' => 'nullable|min:8|confirmed',  // La confirmation de mot de passe est optionnelle
         ]);
     
         // Si la validation échoue, on redirige avec les erreurs
         if ($validator->fails()) {
             return redirect()->route('profile')
                              ->withErrors($validator)
                              ->withInput();
         }
     
         // Récupérer l'utilisateur connecté
         $user = Auth::user();
     
         // Mise à jour des informations de l'utilisateur
         $user->name = $request->name;
         $user->email = $request->email;
         $user->numero = $request->numero;
         
         // Si un mot de passe est donné, on le hash et on le met à jour
         if ($request->password) {
             $user->password = Hash::make($request->password);
         }
     
         // Sauvegarder les modifications
         $user->save();
     
         // Rediriger avec un message de succès
         return redirect()->back()->with('success', 'Profil mis à jour avec succès');
     }
}
