<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CoursController extends Controller
{
    // Récupération des cours
    public function index()
    {
        $cours = Cours::with('images')
            ->orderby('id', 'desc')
            ->paginate(12);

        return view('dashboard.courses.index', compact('cours'));
    }

    // Création d'un nouveau cours
    public function create()
    {
        return view('dashboard.courses.create');
    }

    // Stockage d'un nouveau cours
    public function store(Request $request)
    {
        $slug = (string) Str::uuid();

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'total_courses' => ['required', 'integer', 'min:1'],
        ]);

        $cours = new Cours();
        $cours->title = $request->title;
        $cours->total_courses = $request->total_courses;
        $cours->slug = $slug;
        $cours->save();

        if ($request->hasFile('image')) {
            $uploadedImages = [];

            foreach ($request->file('image') as $file) {
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $ext;

                // Déplacement le fichier vers le dossier de destination
                $file->storeAs('storage/uploads/', $filename);

                // Enregistrement du chemin du fichier dans le tableau
                $uploadedImages[] = $filename;

                // stocker dans la base de données pour chaque image
                images::create([
                    'cours_id' => $cours->id,
                    'filename' => 'uploads/' . $filename,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Il tuo corso è stato aggiunto con successo.');
    }

    // Affichage des informations d'un cours
    public function show($id)
    {
        $cours = Cours::with('images')->findOrFail($id);
        return view('dashboard.courses.update', compact('cours'));
    }

    // Modification d'un cours

    public function edit($id)
    {
        $cours = Cours::findOrFail($id);
        return view('dashboard.courses.update', compact('cours'));
    }

    // Mise à jour d'un cours
    public function update(Request $request, Cours $cours)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'total_courses' => ['required', 'integer', 'min:1'],
        ]);

        $cours->title = $request->title;
        $cours->total_courses = $request->total_courses;
        $cours->save();

        return redirect()->back()->with('success', 'Corso aggiornato con successo.');
    }

    // Modification des images d'un cours
    public function editImage(Cours $cours)
    {
        $images = Images::where('cours_id', $cours->id)->get();
        return view('dashboard.courses.editimage', compact('images', 'cours'));
    }

    // Mise à jour de l'image d'un cours
    public function updateImage(Request $request, Images $image)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,tif,tiff|max:5120',
        ]);

        if ($image->filename && Storage::disk('public')->exists($image->filename)) {
            Storage::disk('public')->delete($image->filename);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('storage/uploads/', $filename);
        }

        $image->update(['filename' => 'uploads/' . $filename]);

        return redirect()->back()->with('success', 'Immagine aggiornata con successo.');
    }

    // Suppression d'un cours
    public function destroy(Cours $cours)
    {
        // Supprimer les images associées au cours
        $cours->images()->delete();

        // Supprimer le cours
        $cours->delete();

        return redirect()->route('displayCourses')
            ->with('success', 'Il corso è stato eliminato con successo.');
    }
}
