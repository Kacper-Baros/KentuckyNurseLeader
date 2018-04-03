<?php

namespace App\Http\Controllers;


use DB;
use Auth;
use Mail;
use Session;
use App\User;
use Illuminate\Http\Request;
use App\Mail\EmailVerification;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function board()
    {
        return view('board');
    }

    public function memberslist()
    {
        return view('memberslist');
    }

    public function president()
    {
        return view('president');
    }
    
    public function legislative()
    {
        return view('legislative');
    }
    
    public function strategic_plan()
    {
        return view('strategic_plan');
    }
    
    public function key_priorities()
    {
        return view('key_priorities');
    }
    
    public function districts()
    {
        return view('districts');
    }
    
    public function district_ohio_valley()
    {
        return view('district_ohio_valley');
    }
    
    public function district_twin_lakes()
    {
        return view('district_twin_lakes');
    }
    
    public function district_blue_grass()
    {
        return view('district_blue_grass');
    }
    
    public function district_cumberland()
    {
        return view('district_cumberland');
    }
    
    public function bylaws_committee()
    {
        return view('bylaws_committee');
    }
    
    public function legislative_committee()
    {
        return view('legislative_committee');
    }
    
    public function membership_committee()
    {
        return view('membership_committee');
    }
    
    public function programs_committee()
    {
        return view('programs_committee');
    }
    
    public function scholarship_committee()
    {
        return view('scholarship_committee');
    }
    
    public function contact(Request $request)
    {
        return view('contact');
    }
    
    public function legal()
    {
        return view('legal');
    }
    
    public function privacy()
    {
        return view('privacy');
    }
    
    public function sitemap()
    {
        return view('sitemap');
    }
    
    public function user_subscription()
    {
        return view('user_subscription');
    }

    public function classify_user()
    {
        if (Auth::check() && Auth::user()->verified == NULL)
        {
            return view('activate');
        }
        if(Auth::check() && Auth::user()->membership_level == "1")
        {
            return view('subscription_admin');
        }
        // if(Auth::check() && Auth::User()->plan_expired())
        // {
        //     return view('subscription_renew');
        // }
        // if(Auth::check() && Auth::User()->plan_on_going())
        // {
        //     return view('user_subscription');
        // }
        return view('subscription_new');
    }

    public function resendemail()
    {
        $user = Auth::User();
        // After creating the user send an email with the random token generated in the create method above
        $email = new EmailVerification(new User(['email_token' => $user->email_token, 'name' => $user->name]));
        Mail::to($user->email)->send($email);
        DB::commit();
        Session::flash('message', 'We have sent you a verification email!');
        return view('activate');
    }

}
