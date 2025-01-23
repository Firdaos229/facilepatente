<?php

namespace App\Http\Controllers;

use App\Models\footer;
use App\Models\publicite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Publicites extends Controller
{
 

    public function create()
    {
    
        return view('dashboard.createpub');
    }

 
    public function store(Request $request)
    {
   
        
       
        $request->validate([
           
            'image' => 'required', 
           
           
       
            
        ]);

        //Ajout direct de l'image dans le dossier storage de public
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        
            $lien = $file->move('storage/publicites/', $filename);
        

        }
        


        publicite::create([
           
            'image' => 'publicites/' . $filename,
        ]);

  
    
        return redirect()->route('createpub')->with('success', 'Nouvelle publicité ajoutée');
    }

 
//Gestion des images de publicités


public function allimages()
{
    $publicites = Publicite::all();
 
    return view('dashboard.pubs', compact('publicites'));
}


public function updateimagepub(Request $request, $id)
{
    $request->validate([
        'image' => 'required',
    ]);

    $publicite = Publicite::findOrFail($id);

   
     // Supprime l'ancienne image du stockage
     if ($publicite->image && Storage::disk('public')->exists($publicite->image)) {
        Storage::disk('public')->delete($publicite->image);
    }

    if ($request->hasFile('image')) {

        $file = $request->file('image');
        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
    
        $lien = $file->move('storage/publicites/', $filename);
    

    }
    



    $publicite->update([ 'image' => 'publicites/' . $filename]);

    return redirect()->back()->with('success', 'Publicité mise à jour avec succès');
}


//Supprimer pub 

public function destroy($id)
{
    $publicite = Publicite::findOrFail($id);

    // Supprimer l'image du stockage
    if ($publicite->image && Storage::disk('public')->exists($publicite->image)) {
        Storage::disk('public')->delete($publicite->image);
    }

    $publicite->delete();

    return redirect()->back()->with('success', 'Publicité supprimée avec succès');
}




}
