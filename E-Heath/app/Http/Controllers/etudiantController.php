<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Cour;
class etudiantController extends Controller
{
    //
     public function index()
    {
    	$idUser=1;
    	$requet=DB::table('apprenants_cours')
                ->where('apprenant_id','=',$idUser)->get();
        $requet=json_decode(json_encode($requet), true);
        
    	return view('pages.etudiant',compact('requet'));
    }
}
