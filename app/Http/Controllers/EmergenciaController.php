<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmergenciaController extends Controller
{
    public function index()
    {
        $patient = auth()->user();
        return view('emergencias.index', compact('patient'));
    }

    public function update(Request $request)
    {
        $notification = 'Estaremos ahi en breves momentos. Recibirá una llamada cuando estemos cerca de la zona.';
        return redirect('/emergencia')->with(compact('notification'));
    }
}
