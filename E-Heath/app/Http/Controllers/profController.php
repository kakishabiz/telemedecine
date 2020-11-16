<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Cour;
class profController extends Controller
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
    	return view('pages/professeur/index',compact('requet','user'));
    }
     public function affichierCours()
    {
        $idUser=1;
        $requet=DB::table('apprenants_cours')
                ->where('apprenant_id','=',$idUser)->get();
        $requet=json_decode(json_encode($requet), true);
        $user=DB::table('users')
                ->where('id','=',$idUser)->get();
        $requet=json_decode(json_encode($requet), true);
        $user=json_decode(json_encode($user), true);
        $user=$user['0'];
        return view('pages.professeur.cours',compact('requet','user'));
    }
     public function newReunion(){
        $idUser=1;
        $user=DB::table('users')
                ->where('id','=',$idUser)->get();
        $user=json_decode(json_encode($user), true);
        $user=$user['0'];
        return view('pages.professeur.newreunion','user');
    }
    public function storeReunion()
    {   
        $idProf=1;
        DB::TABLE('reunions')->INSERT([
                    'libelle'=>$_POST['libelle'],
                    'date'=>$_POST['date'],
                    'heure'=>$_POST['heure'],
                    'prof_id'=>$idProf,
                    'med_id'=>1,
                    'etu_id'=>1,
                ]);
        $enregistrementReussi="Entregistrement Reussi";
        return view('pages.professeur.newreunion');
    }
    public function affichierReunion()
    {   
        $idUser=1;
        $requet=DB::table('reunions')
                ->where('prof_id','=',$idUser)->get();
        $requet=json_decode(json_encode($requet), true);
        $user=DB::table('users')
                ->where('id','=',$idUser)->get();
        $requet=json_decode(json_encode($requet), true);
        $user=json_decode(json_encode($user), true);
        $user=$user['0'];
        return view('pages.professeur.reunions',compact('requet','user'));
    }
     public function affichierCourProf()
    {   
        $idUser=1;
        $cours=DB::table('cours')
                ->where('idUser','=',$idUser)->get();
        $user=DB::table('users')
                ->where('id','=',$idUser)->get();
        $cours=json_decode(json_encode($cours), true);
        $user=json_decode(json_encode($user), true);
        $user=$user['0'];
        return view('pages.professeur.cour',compact('cours','user'));
    }
}
