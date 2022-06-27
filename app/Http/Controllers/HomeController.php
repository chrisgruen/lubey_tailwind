<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller {


    public function __construct() {
        //$this->middleware('auth');
    }


    public function index() {
        return view('index');
    }


    public function getHomeScreen() {
        return view("bay." . App::getLocale() . ".home");
    }

    public function getContent($contentName) {
        if (view()->exists("content." . App::getLocale() . "." . $contentName)) {
            return view("content." . App::getLocale() . "." . $contentName);
        } else {
            abort(404);
        }
    }

    public function getSignin() {
        return view('user.signin');
    }

    public function getSignUpStep1() {
        //$user = new User();
        //$company = new Company();
        return view('registration.signupStep1');
    }

    public function postSignin(Request $request) {
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:4'
        ]);
        dd('User signin: ',$request->all());

        /*
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $this->checkPremium(Auth::company());
            if (Auth::check() && (!Auth::company()->agb_accepted_at || (Auth::company()->agb_accepted_at && strtotime(Auth::company()->agb_accepted_at) < strtotime(config('trade.date_gtc_accept')))) && config('trade.check_gtc_accept'))
                return redirect()->route('company.' . __('company.gtc_updated'));
            return redirect()->intended(route('bay.index'));
        } else {
            $was_redirected = false;
            if (redirect()->intended(route('user.signin'))->getTargetUrl() != route('user.signin'))
                $was_redirected = true;
            return view('user.signin', array('attempt' => true, 'was_redirected' => $was_redirected));
        }
        */
    }

    public function postSignUpStep1(Request $request) {

        $this->validate($request, [
            'salutation'    => 'required',
            'firstname'     => 'required',
            'lastname'      => 'required',
            'email'         => 'email|required|unique:users|confirmed',
            'password'      => 'required|min:6|confirmed',
            'zipcode'       => 'required',
            'city'          => 'required',
            'street'        => 'required',
            'street_number' => 'required',
            'company'       => 'required',
            'country_code'  => 'required',
            'accept_privacy'  => 'required'
        ],
            ['accept_privacy.required' => 'Bitte bestätigen Sie, dass Sie die Datenschutzerklärung gelesen haben.']
        );

        return view('registration.passedStep1');
    }

    public function subscribe_newsletter(Request $request)
    {

        $this->validate($request, [
            'email' => 'email|required',
            'accept_privacy' => 'accepted'
            //'g-recaptcha-response' => 'required|captcha'
        ],
            ['accept_privacy.accepted' => 'Bitte bestätigen Sie, dass Sie die Datenschutzerklärung gelesen haben.']
        );

        dd($request->all());
    }
}
