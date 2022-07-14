<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function getSignin()
    {
        return view('user.signin', ['attempt' => false]);
    }

    public function getLogout() {
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
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
            'company' => 'required|unique:companies',
            'country_code' => 'required',
            'accept_privacy' => 'required'
        ],
            ['accept_privacy.required' => 'Bitte bestätigen Sie, dass Sie die Datenschutzerklärung gelesen haben.']
        );
        
        $premiumDefault = intval($this->getSystemSettings('premium_default'));
        
        if ($premiumDefault > 0) {
            $isPremium = 1;
        } else {
            $isPremium = 0;
        }
        
        $user = new User([
            'email'      => $request->input('email'),
            'salutation' => $request->input('salutation'),
            'firstname'  => $request->input('firstname'),
            'lastname'   => $request->input('lastname'),
            'password'   => bcrypt($request->input('password')),
        ]);       
        
        $company = new Company([
            'zipcode'             => $request->input('zipcode'),
            'city'                => $request->input('city'),
            'address'             => $request->input('street') . " " . $request->input('street_number'),
            'street'              => $request->input('street'),
            'street_number'       => $request->input('street_number'),
            'company'             => $request->input('company'),
            'ceo_name'            => $request->input('ceo_name'),
            'country_code'        => $request->input('country_code'),
            'faxnumber'           => $request->input('faxnumber', ''),
            'company_court'       => $request->input('company_court'),
            'company_register_id' => $request->input('company_register_id'),
            'ustid'               => $request->input('ustid'),
            'isPremium'           => $isPremium,
            'authKeyPost'         => $this->randomReadbleKey(8),
            'authKeyMail'         => $this->randomReadbleKey(8),
            'uuid'                => $this->unique_uuid('companies'),
            'phonenumber'         => $request->input('phonenumber'),
            'mobilenumber'         => $request->input('mobilenumber'),
            'faxnumber'         => $request->input('faxnumber'),
            'registrationState'   => 'new',            
        ]);

        $company->save();
               
        $user->company_id = $company->id;
        $user->save();
       
        /*
        $user->syncPermissions(User::$permissions);
               
        if ($isPremium) {
            $premium_to = date('Y-m-d', (time() + $premiumDefault * 86400));
            $premium = new PremiumData([
                'company_id'   => $company->id,
                'status'       => 1,
                'premium_from' => date('Y-m-d'),
                'premium_to'   => $premium_to,
            ]);
            $premium->save();
        }
        */
        
        Auth::login($user);
        return view('registration.passedStep1', ['step' => 1, 'links' => false]);
    }
}
