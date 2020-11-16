<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Reunion;
class reunionController extends Controller
{
    //
    public function index()
    {	
    	$idUser=1;
    	$requet=DB::table('reunions')
                ->where('med_id','=',$idUser)->get();
        $requet=json_decode(json_encode($requet), true);
    	return view('pages.reunions',compact('requet'));
    }
}
