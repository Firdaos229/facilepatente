<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // Afficher la liste des cours
    public function index()
    {
        $courses = Course::all();
        return view('dashboard.courses.index', compact('courses'));
    }

    // Ajouter un cours
    public function create()
    {
        return view('dashboard.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'total_courses' => 'required|integer',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('public/courses');
            // Vous pouvez maintenant enregistrer $imagePath dans votre base de données
            
        $imagePath = $request->file('image')->store('courses_images', 'public');
        }

        Course::create([
            'title' => $request->title,
            'image' => $imagePath,
            'total_courses' => $request->total_courses,
        ]);

        return redirect()->back()->with('success', 'Il tuo corso è stato aggiunto con successo.');
    }

    // Modifier un cours
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('dashboard.courses.update', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
            'total_courses' => 'required|integer',
        ]);

        $course = Course::findOrFail($id);
        $course->title = $request->title;
        $course->total_courses = $request->total_courses;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses_images', 'public');
            $course->image = $imagePath;
        }

        $course->save();


        return redirect()->back()->with('success', 'Corso aggiornato con successo.');
    }

    // Supprimer un cours
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('index')
            ->with('success', 'Il corso è stato eliminato con successo.');
    }
}
