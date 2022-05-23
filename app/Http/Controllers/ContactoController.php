<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto.index');
    }

    public function store()
    {
        $correo = new ContactMailable;
        Mail::to('paulot73@hotmail.com')->send($correo);
        return "mensaje enviado";
    }
}
