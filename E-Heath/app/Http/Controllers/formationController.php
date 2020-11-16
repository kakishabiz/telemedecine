<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Cour;
class formationController extends Controller
{
    //
     public function index()
    {
    	$idUser=1;
    	$requet=DB::table('apprenants_cours')
                ->where('apprenant_id','=',$idUser)->get();
        $requet=json_decode(json_encode($requet), true);
        
    	return view('pages.cours',compact('requet'));
    }
     public function affichierCour()
    {   
        $idUser=1;
        $cours=DB::table('cours')
                ->where('idUser','=',$idUser)->get();
        $user=DB::table('users')
                ->where('id','=',$idUser)->get();
        $cours=json_decode(json_encode($cours), true);
        $user=json_decode(json_encode($user), true);
        $user=$user['0'];
        return view('pages.cour',compact('cours','user'));
    }
   
}
