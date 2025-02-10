<?php

namespace App\Http\Controllers;

use App\Models\User;
class AdminController extends Controller
{

     // Affiche la page d'information "À propos"
 
 





    public function all(){
    
        $userall =User::where('is_admin', false)->paginate(20);
     
        return view('dashboard.listeuser', compact( 'userall'));
    }

    public function destroy($id)
    {
      


        $uses = User::where('id', $id)->first();
               if ($uses) {
                     $uses->delete();
            return redirect()->back()->with('success', 'Compte supprimé avec succés ');
        } else {

          
                return redirect()->back()->with('error', 'Utilisateur non trouvé');
            
        }
    }


    


}
