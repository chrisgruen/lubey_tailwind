<?php
namespace App\Http\Controllers;

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
    
    public function getSignUpStep1() {
        //$user = new User();
        //$company = new Company();
        return view('registration.signupStep1');
    }
}