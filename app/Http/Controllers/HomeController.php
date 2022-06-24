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
