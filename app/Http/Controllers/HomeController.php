<?php
namespace App\Http\Controllers;

use App\Models\Allocation;
//use Alloc\AllocationAttendance;
use App\Notifications\User\PasswordResetNotification;
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
            $allocations = Allocation::getRandomAllocations('disposal');
            //dump($allocations);
            return view("content." . App::getLocale() . "." . $contentName,['allocations' => $allocations]);
        } else {
            abort(404);
        }
    }

    public function getDashboard() {
        /*
        $own_allocations = new Collection();
        $attending_allocations = new Collection();
        if (Auth::check()) {
            $own_allocations = Allocation::query()->where('company_id', Auth::company()->id)->whereIn('state', ['new', 'first_offer', 'qualification', 'running', 'post_qualification'])->get();
            $attending_allocations = AllocationAttendance::query()->where('company_id', Auth::company()->id)->with(['allocation', 'allocation.lots'])->whereHas('allocation', function ($query) {
                $query->whereIn('state', ['running', 'qualification', 'first_offer', 'post_qualification']);
            })->get();
        }
        */
        return view('bay.index');
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
