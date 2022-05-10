<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('cursos.index');
    }

    public function show($curso)
    {
        //compact($curso);  eso crea un array  ['curso' => $curso]
        return view('cursos.show', ['curso' => $curso]);
    }

    public function create()
    {
        return view('cursos.create');
    }
}
