<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsuranceController extends Controller
{

    public function index()
    {

        return view('insurance.personal');
    }

    public function fview()
    {
        return view('insurance.f_insurance');
    }
}
