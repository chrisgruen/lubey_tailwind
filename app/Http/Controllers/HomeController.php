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

    public function getChartData_old(Request $request) {
        // dd($request->all());
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

    public function getChartData(Request $request) {
        $response = array('status' => 'error', 'message' => 'failure');
        if ($request->has('chartid')) {
            $response['status'] = 'ok';
            $chart_data = [];
            $data = ChartData::query()->where('chart_family_id', $request->input('chartid'))->orderBy('date')->latest()->take(12)->get();
            foreach ($data as $item) {
                $chart_data[] = [
                                'labels' => date('m/Y', strtotime($item->date)),
                                'small' => $item->low,
                                'large' => $item->high,
                            ];
            }
            $response['data'] = $chart_data;
        }
        return response((json_encode($response)))->header('Content-Type', 'application/json');
    }


    public function subscribe_newsletter(Request $request) {

        $this->validate($request, [
            'email'                => 'email|required',
            'accept_privacy' =>'accepted'
            //'g-recaptcha-response' => 'required|captcha'
        ],
            ['accept_privacy.accepted' => 'Bitte bestätigen Sie, dass Sie die Datenschutzerklärung gelesen haben.']
        );

        //dd($request->all());
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, config('trade.newsletter_subscription_url'));
        curl_setopt($ch, CURLOPT_POST, 1);

        $err_message = 'Fehler';
        $extras = '<Produkte>';
        $extras .= $request->has('product_connect') ? 'Connect,' : '';
        $extras .= $request->has('product_trade') ? 'Trade,' : '';
        $extras .= $request->has('product_individual') ? 'Digitale Lösungen,' : '';
        $extras .= $request->has('product_individual') ? 'Consulting, ' : '';
        $extras .= ' <Trade>';
        $extras .= $request->has('trade_commune') ? 'Städte & Kommunen,' : '';
        $extras .= $request->has('trade_trade') ? 'Handel,' : '';
        $extras .= $request->has('trade_industry') ? 'Industrie,' : '';
        $extras .= $request->has('trade_disposer') ? 'Entsorger,' : '';

        dd($extras);
        $data = [
            'url_ok' => 'https://lubey.de/ok',
            'url_error' => 'https://lubey.de/error', 'email' => $request->input('email'),
            'extra1' => $extras,
        ];

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $server_output = curl_exec($ch);
        $curl_info = curl_getinfo($ch);
        curl_close($ch);
        preg_match("!\r\n(?:location|URI): *(.*?) *\r\n!", $server_output, $matches);
        if (count($matches) > 1) {
            $url = $curl_info['redirect_url'];
            if ($url == 'https://lubey.de/ok') {
                return redirect()->route('content.page', ['pageID' => 'newsletter_danke']);
            } else {
                parse_str(parse_url($url, PHP_URL_QUERY), $errors);

                $err_message = '';
                foreach($errors as $error) {
                    $err_message .= $error ."<br />";
                }
                return view('content.de.newsletter_fehler', ['error' => $err_message]);
            }
        }
        return redirect()->route('content.page', ['pageID' => 'newsletter_fehler'])->with('error', $err_message);
    }
}
