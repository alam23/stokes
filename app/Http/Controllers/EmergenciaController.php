<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmergenciaController extends Controller
{
    public function index()
    {

        return view('emergencias.index');
    }

}
