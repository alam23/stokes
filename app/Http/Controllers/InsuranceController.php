<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeguroPersonal;
use DB;

class InsuranceController extends Controller
{

    public function index()
    {

        $segpers = DB::table('seguro_personals')
                ->where('user_id','=',auth()->id())
                ->get();

        return view('insurance.personal',array ('segpers'=> $segpers));
    }

    public function fview()
    {
        list($segfam) = DB::table('seguro_personals')
                ->where('user_id','=',auth()->id())
                ->get('familia_id');
        
        $segpers = DB::table('seguro_personals')
                ->where('familia_id','=',$segfam->familia_id)
                ->get();
        return view('insurance.f_insurance',array ('segpers'=> $segpers));
    }
}