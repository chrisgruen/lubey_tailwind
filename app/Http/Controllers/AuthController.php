<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function getSignin()
    {
        return view('user.signin', ['attempt' => false]);
    }

    public function getSignUpStep1()
    {
        //$user = new User();
        //$company = new Company();
        return view('registration.signupStep1');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            /*
            $this->checkPremium(Auth::company());
            if (Auth::check() && (!Auth::company()->agb_accepted_at || (Auth::company()->agb_accepted_at && strtotime(Auth::company()->agb_accepted_at) < strtotime(config('trade.date_gtc_accept')))) && config('trade.check_gtc_accept'))
                return redirect()->route('company.' . __('company.gtc_updated'));
            */
            return redirect()->intended(route('bay.index'));
        } else {
            $was_redirected = false;
            if (redirect()->intended(route('user.signin'))->getTargetUrl() != route('user.signin'))
                $was_redirected = true;
            return view('user.signin', ['attempt' => true, 'was_redirected' => $was_redirected]);
        }
    }

    public function passwordReset(Request $request)
    {

        $user = User::where('email', '=', $request->email)->first();
        $ret_val = array('status' => 'false', 'class' => 'danger', 'message' => trans('messages.noUserKnown'));

        if ($user) {
            //update Password
            $new_password = str_random(8);
            $user->password = bcrypt($new_password);
            $ret_val['status'] = true;
            $ret_val['class'] = 'success';
            $user->save();
            $user->notify(new PasswordResetNotification($new_password));
            //Mail::to($user->email, $user->firstname . ' ' . $user->lastname)->send(new PasswordResetMail($user, $new_password));
            $ret_val['message'] = trans('messages.passwordSent');
        }

        return redirect()->route('user.signin')->with('message', $ret_val['message']);
        //return response(json_encode($ret_val))->header('Content-Type', 'application/json');
    }

    public function postSignUpStep1(Request $request)
    {

        $this->validate($request, [
            'salutation' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email|required|unique:users|confirmed',
            'password' => 'required|min:6|confirmed',
            'zipcode' => 'required',
            'city' => 'required',
            'street' => 'required',
            'street_number' => 'required',
            'company' => 'required',
            'country_code' => 'required',
            'accept_privacy' => 'required'
        ],
            ['accept_privacy.required' => 'Bitte bestätigen Sie, dass Sie die Datenschutzerklärung gelesen haben.']
        );

        return view('registration.passedStep1');
    }
}
