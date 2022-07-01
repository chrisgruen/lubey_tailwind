<?php
namespace App\Http\Controllers;

use App\Models\ChartData;
use App\Models\ChartFamiliy;
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
            $catalog = ChartFamiliy::get()->toTree()->first();
            return view("content." . App::getLocale() . "." . $contentName,['allocations' => $allocations, 'chart_families' => $catalog]);
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

    public function getChartData(Request $request) {
        //  dd($request->all());
        $response = array('status' => 'error', 'message' => 'failure');
        if ($request->has('chartid')) {
            $response['status'] = 'ok';
            $chart_data = array();
            $data = ChartData::query()->where('chart_family_id', $request->input('chartid'))->get();
            foreach ($data as $item) {
                $chart_data[] = array('date' => date('Y/m/d', strtotime($item->date)), 'small' => $item->low, 'large' => $item->high);
            }
            $response['data'] = $chart_data;
        }
        return response((json_encode($response)))->header('Content-Type', 'application/json');
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
