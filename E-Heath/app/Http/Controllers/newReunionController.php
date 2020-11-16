<?php

namespace App\Http\Controllers;

use BigBlueButton\Parameters\JoinMeetingParameters;
use Djoudi\Bigbluebutton\Contracts\Meeting;
use BigBlueButton\Parameters\CreateMeetingParameters;
use BigBlueButton\BigBlueButton;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Reunion;
use JoisarJignesh\Bigbluebutton\Facades;
class newReunionController extends Controller
{
    //


    protected $meeting;

    public function __construct(Meeting $meeting){
        $this->meeting = $meeting;

    }


     public function index(Request $request)
    {
        $matricule=$request->matricule;
        //dd($matricule);
    	return view('pages.newreunion',compact('matricule'));
    }
    public function store(Request $request)
    {	
            $meetingId=substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(6/strlen($x)) )),1,6);
            $meetingParams = new CreateMeetingParameters($meetingId, $_POST['libelle']);
            $meetingParams->setDuration(60);
            $meetingParams->setModeratorPassword('supersecretpww');
    
            if ($this->meeting->create($meetingParams)) {
                // Meeting was created

                $med_id=1;
                    $meetingParams = new JoinMeetingParameters($meetingId,$_POST['matricule'],'supersecretpww');
                 $meetingParams->setRedirect(true);
                 $meetingUrl = $this->meeting->join($meetingParams);
        	DB::TABLE('reunions')->INSERT([
                        'idmeeting'=>$meetingId,
                        'libelle'=>$_POST['libelle'],
        				'date'=>$_POST['date'],
        				'heure'=>$_POST['heure'],
                        'med_id'=>$med_id,
                        'description'=>"null",
        				'prof_id'=>1,
                        'url'=>$meetingUrl,
        			]);

        	$estOk=1;
        	return view('pages.newreunion',['estOk'=>1]);
            }
            else
            {
                $estOK=0;
                return view('pages.newreunion',['estOk'=>0]);

            }
    }

  
}
