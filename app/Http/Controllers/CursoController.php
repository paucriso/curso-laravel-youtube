<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::find($id);
        //compact($curso);  eso crea un array  ['curso' => $curso]
        return view('cursos.show', ['course' => $course]);
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $course = new Course;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->save();
        return redirect()->route('cursos.show', $course->id);
    }

    public function edit($id)
    {   
        $course = Course::find($id);

        return view('cursos.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;
        $course->save();

        return redirect()->route('cursos.show', $course->id);
    }
}
