<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Djoudi\Bigbluebutton\Contracts\Meeting;
use BigBlueButton\Parameters\JoinMeetingParameters;
use Illuminate\Http\Request;

class rejoindreReunionController extends Controller
{
    /**
     *@var \Djoudi\Bigbluebutton\Contracts\Meeting
     */
    protected $meeting;

    public function __construct(Meeting $meeting)
    {
        $this->meeting = $meeting;
    }
    /**
     *  Join a bigbluebutton meeting
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function inmeet(Request $request)
    {
        $meetingParams = new JoinMeetingParameters($request->idmeeting,$request->matricule,'supersecretpw');
        $meetingParams->setRedirect(true);
        $meetingUrl = $this->meeting->join($meetingParams);
       var_dump($meetingUrl);

       //redirect::to($meetingUrl)->send();
    }


}