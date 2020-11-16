<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\User;
use App\models\Reunions;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

// use App\Http\Controllers\Auth\Route;
class UserController extends Controller {

 // -------------------- [ user registration view ] -------------
    public function index() {
        return view('registration');
    }

// --------------------- [ Register user ] ----------------------
    public function userPostRegistration(Request $request) {

        // validate form fields
        $request->validate([
                'firstname'        =>      'required|max:10',
                'lastname'         =>      'required|max:10',
                // 'sexe'              =>      'required',
                'email'             =>      'required|email',
                'password'          =>      'required|min:6',
                'confirm_password'  =>      'required|same:password',
                'role'             =>        'required|max:20'
            ]);

        $input          =           $request->all();

        // if validation success then create an input array

      $user=  DB::TABLE('users')->INSERT([
                        'firstname'=>$_POST['firstname'],
                        'email'=>$_POST['email'],
                        'lastname'=>$_POST['lastname'],
                        'role'=>$_POST['role'],
                        'password'=>Hash::make($_POST['password']),
    
                    ]);
    

        // if registration success then return with success message
        if(!is_null($user)) {
            return back()->with('success', 'You have registered successfully.');
        }

        // else return with error message
        else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
        }
    }



// -------------------- [ User login view ] -----------------------
    public function userLoginIndex() {
        return view('login');
    }


// --------------------- [ User login ] ---------------------
    public function userPostLogin(Request $request) {

        $request->validate([
            "email"           =>    "required|email",
            "password"        =>    "required|min:6"
        ]);

        $userCredentials = $request->only('email', 'password');

        // check user using auth function
        if (Auth::attempt($userCredentials)) {
            return redirect()->intended('dashboard');
        }

        else {
            return back()->with('error', 'Whoops! invalid username or password.');
        }
    }


// ------------------ [ User Dashboard Section ] ---------------------
    public function redirectTo() {
        
            $user = Auth::user();
            switch(true) {
                case $user->role=='medecin':
                    return redirect('/etudiant');
               
                case $user->role=='etudiant':
                    return view('/etudiant');
                case $user->role=='professeur':
                {
                            $idUser=1;
                $requet=DB::table('reunions')
                ->where('med_id','=',$idUser)->get();
            $requet=json_decode(json_encode($requet), true);
                    return view('pages.reunions',compact('requet'));
                }
                default:
                    return '/account';
            
        }

        return redirect::to("user-login")->withError('Oopps! You do not have access');
    }


// ------------------- [ User logout function ] ----------------------
public function logout(Request $request ) {
    $request->session()->flush();
    Auth::logout();
    return Redirect('user-login');
    }
}
