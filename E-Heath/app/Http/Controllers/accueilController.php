<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Cour;
class accueilController extends Controller
{
    //
     public function index()
    {
    	$idUser=1;
    	$requet=DB::table('apprenants_cours')
                ->where('apprenant_id','=',$idUser)->get();
        $user=DB::table('users')
                ->where('id','=',$idUser)->get();
        $requet=json_decode(json_encode($requet), true);
        $user=json_decode(json_encode($user), true);
        $user=$user['0'];
    	return view('index',compact('requet','user'));
    }
}
