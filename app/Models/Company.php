<?php

namespace App\Models;

use Alloc\Allocation;
//use App\Traits\Loggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Traits\HasRoles;

class Company extends Authenticatable {
    use Notifiable, HasRoles;

    protected $fillable = [
        'zipcode', 'address', 'city', 'address', 'company', 'phonenumber', 'faxnumber',
        'zipcode', 'address', 'city', 'address', 'company', 'phonenumber',
        'company_type', 'company_sector', 'company_register_id', 'company_court', 'ceo_name', 'ustid', 'cashflow',
        'employees', 'foundingyear', 'paymenttypes', 'isPremium', 'mobilenumber', 'paymenttarget', 'bank', 'bic', 'iban', 'producernumber', 'disposalnumber',
        'disposalcompanynumber', 'transportlicensenumber', 'authKeyMail', 'authKeyPost', 'registrationState',
        'canTransport', 'faxnumber', 'customer_id', 'circle_id', 'country_code', 'street', 'street_number', 'uuid',
        'rb_name', 'rb_city', 'rb_zipcode', 'nuts_code_id', 'companyURL', 'publicEmail', 'typeOfContractingAuthority', 'mainActivity','destatis_id','destatis_type'
    ];

    //
    protected $guard_name = 'web';
    public static $roles = array('producer', 'collector', 'recycler', 'disposer', 'transporter', 'admin','federation');
    public $company_types = array('onemanbusiness', 'ug', 'cokg', 'gmbh', 'ag');
    public static $registrationStates = array('new', 'mail_send', 'mail_verified','roles_selected','review', 'review_ok', 'review_failed', 'snailmail_send', 'snailmail_failed', 'confirmed');
    public static $destatis_types = array('01' => 'Oberste Bundesbehörde', '02' => 'Obere, mittlere oder untere Bundesbehörde', '03' => 'Körperschaft des öffentlichen Rechts auf Bundesebene', '04' => 'Anstalt des öffentlichen Rechts auf Bundesebene', '05' => 'Stiftung des öffentlichen Rechts auf Bundesebene', '06' => 'Sonstiger Auftraggeber auf Bundesebene', '07' => 'Oberste Landesbehörde', '08' => 'Obere, mittlere oder untere Landesbehörde', '09' => 'Körperschaft des öffentlichen Rechts auf Landesebene', '10' => 'Anstalt des öffentlichen Rechts auf Landesebene', '11' => 'Stiftung des öffentlichen Rechts auf Landesebene', '12' => 'Sonstiger Auftraggeber auf Landesebene', '13' => 'Kommunalbehörde', '14' => 'Körperschaft des öffentlichen Rechts auf Kommunalebene', '15' => 'Anstalt des öffentlichen Rechts auf Kommunalebene', '16' => 'Stiftung des öffentlichen Rechts auf Kommunalebene', '17' => 'Sonstiger Auftraggeber auf Kommunalebene', '18' => 'Sonstiger Auftraggeber');

    public static $defaultSettingsArray = [
        'default_storageType' => 'tank',
        'default_unit' => 'tons',
        'loading_times_auction' => null,
        'loading_times_allocation' => null,
        'delivery_radius_auction' => null,
        'delivery_radius_allocation' => null,
        'delivery_costs_auction' => null,
        'delivery_costs_per_unit_auction' => null,
        'delivery_costs_per_unit_unit_auction' => null,
        'delivery_costs_allocation' => null,
        'delivery_costs_per_unit_allocation' => null,
        'delivery_costs_per_unit_unit_allocation' => null,
        'payment_intervall_allocation' => null,
        'payment_intervall_scope_allocation' => null,
        'payment_intervall_auction' => null,
        'payment_intervall_scope_auction' => null,
        'skonto_percent_auction' => null,
        'skonto_percent_allocation' => null,
        'skonto_days_auction' => null,
        'skonto_days_allocation' => null,
        'skonto_credit_percent_allocation' => null,
        'skonto_credit_days_allocation' => null,
        'payment_target_auction' => null,
        'payment_target_allocation' => null,
        'payment_target_credit_allocation' => null,
        'accessibility_auction' => null,
        'accessibility_allocation' => null,
        'reaction_time_allocation_trigger' => null,
        'reaction_time_allocation_hours' => null,
        'reaction_time_auction_trigger' => null,
        'reaction_time_auction_hours' => null,
        'container_disposition_pickup_allocation' => null,
        'container_condition_pickup_allocation' => null,
        'container_costs_pickup_allocation' => null,
        'container_costs_price_pickup_allocation' => null,
        'container_disposition_pickup_auction' => null,
        'container_condition_pickup_auction' => null,
        'container_costs_pickup_auction' => null,
        'container_costs_price_pickup_auction' => null,
        'container_disposition_delivery_allocation' => null,
        'container_condition_delivery_allocation' => null,
        'container_costs_delivery_allocation' => null,
        'container_costs_price_delivery_allocation' => null,
        'container_disposition_delivery_auction' => null,
        'container_condition_delivery_auction' => null,
        'container_costs_delivery_auction' => null,
        'container_costs_price_delivery_auction' => null,
        'loading_tech_allocation' => null,
        'loading_costs_allocation' => null,
        'loading_costs_per_unit_allocation' => null,
        'loading_costs_per_unit_unit_allocation' => null,
        'loading_tech_auction' => null,
        'loading_costs_auction' => null,
        'loading_costs_per_unit_auction' => null,
        'loading_costs_per_unit_unit_auction' => null,
        'weigh_costs_allocation' => null,
        'weigh_costs_per_unit_allocation' => null,
        'weigh_costs_per_unit_unit_allocation' => null,
        'weigh_costs_auction' => null,
        'weigh_costs_per_unit_auction' => null,
        'weigh_costs_per_unit_unit_auction' => null,
        'pickup_intervall_allocation' => null,
        'pickup_intervall_auction' => null,
        'pickup_intervall_scope_allocation' => null,
        'pickup_intervall_scope_auction' => null,
        'delivery_intervall_allocation' => null,
        'delivery_intervall_auction' => null,
        'delivery_intervall_scope_allocation' => null,
        'delivery_intervall_scope_auction' => null,
    ];

    protected $casts= [
        'settings' => AsArrayObject::class,
    ];

    public static function boot() {
        parent::boot();
        static::deleting(function (Company $company) { // before delete() method call this
            Log::info('deleting related Models');
            $company->users->each(function (User $user) {
                $user->delete();
            });
            $company->auctions->each(function (Auction $auction) {
                $auction->delete();
            });
            $company->allocations->each(function (Allocation $allocation) {
                $allocation->delete();
            });
        });
    }


    public function getModelName() {
        return $this->company;
    }

    public function employees() {
        return $this->hasMany('App\User', 'company_id');
    }

    public function users() {
        return $this->hasMany('App\User');
    }

    public function nutsCode() {
        return $this->belongsTo('Alloc\NutsCode');
    }

    public function bills() {
        return $this->hasMany('App\Bill');
    }

    public function auctions() {
        return $this->hasMany('App\Auction');
    }

    public function allocations() {
        return $this->hasMany('Alloc\Allocation');
    }

    public function lotBiddings() {
        return $this->hasMany('Alloc\LotBiddings');
    }

    public function documents() {
        return $this->hasMany('App\Document');
    }

    public function divisions() {
        return $this->hasMany('App\Division');
    }

    public function federation() {
        return $this->belongsToMany('App\Federation','federation_companies');
    }

    public function isFederation(){
        return $this->hasRole('federation');
    }

    public static function createNewCustomerId() {
        $lastCustomerId = self::max('customer_id');

        if (is_null($lastCustomerId)) {
            return Settings::where('setting', 'customer_numbers_starts_by')->first()->setting_value;
        } else {
            return ++$lastCustomerId;
        }
    }

    public function getCustomerId() {

        if (!isset($this->customer_id) || !$this->customer_id || empty($this->customer_id)) {
            $this->customer_id = null;
            return "Neukunde";
        }

        $customer_id = str_pad($this->customer_id, 10, '0', STR_PAD_LEFT);
        return $customer_id;
    }

    public function isConfirmed() {
        return $this->registrationState === 'confirmed' ? true : false;
    }

    /**
     * @return Collection
     */
    public static function getCountryCodes() {
        $countrycodes = [
            (object)['name' => 'Germany', 'alpha2' => 'DE', 'alpha3' => 'DEU'],
            (object)['name' => 'Austria', 'alpha2' => 'AT', 'alpha3' => 'AUT'],
            (object)['name' => 'Belgium', 'alpha2' => 'BE', 'alpha3' => 'BEL'],
            (object)['name' => 'Bulgaria', 'alpha2' => 'BG', 'alpha3' => 'BGR'],
            (object)['name' => 'Croatia', 'alpha2' => 'HR', 'alpha3' => 'HRV'],
//            (object)['name' => 'Cyprus', 'alpha2' => 'CY', 'alpha3' => 'CYP'],
            (object)['name' => 'CzechRepublic', 'alpha2' => 'CZ', 'alpha3' => 'CZE'],//Czech Republic
            (object)['name' => 'Denmark', 'alpha2' => 'DK', 'alpha3' => 'DNK'],
            (object)['name' => 'Estonia', 'alpha2' => 'EE', 'alpha3' => 'EST'],
            (object)['name' => 'Finland', 'alpha2' => 'FI', 'alpha3' => 'FIN'],
            (object)['name' => 'France', 'alpha2' => 'FR', 'alpha3' => 'FRA'],
            (object)['name' => 'Greece', 'alpha2' => 'GR', 'alpha3' => 'GRC'],
            (object)['name' => 'Hungary', 'alpha2' => 'HU', 'alpha3' => 'HUN'],
            //        (object)['name' => 'Ireland', 'alpha2' => 'IE', 'alpha3' => 'IRL'],
            (object)['name' => 'Italy', 'alpha2' => 'IT', 'alpha3' => 'ITA'],
            (object)['name' => 'Latvia', 'alpha2' => 'LV', 'alpha3' => 'LVA'],
            (object)['name' => 'Lithuania', 'alpha2' => 'LT', 'alpha3' => 'LTU'],
            //          (object)['name' => 'Luxembourg', 'alpha2' => 'LU', 'alpha3' => 'LUX'],
            //          (object)['name' => 'Malta', 'alpha2' => 'MT', 'alpha3' => 'MLT'],
            (object)['name' => 'Netherlands', 'alpha2' => 'NL', 'alpha3' => 'NLD'],
            (object)['name' => 'Poland', 'alpha2' => 'PL', 'alpha3' => 'POL'],
            (object)['name' => 'Portugal', 'alpha2' => 'PT', 'alpha3' => 'PRT'],
            (object)['name' => 'Romania', 'alpha2' => 'RO', 'alpha3' => 'ROU'],
            (object)['name' => 'Slovakia', 'alpha2' => 'SK', 'alpha3' => 'SVK'],
            (object)['name' => 'Slovenia', 'alpha2' => 'SI', 'alpha3' => 'SVN'],
            (object)['name' => 'Spain', 'alpha2' => 'ES', 'alpha3' => 'ESP'],
            (object)['name' => 'Sweden', 'alpha2' => 'SE', 'alpha3' => 'SWE'],
            (object)['name' => 'GreatBritain', 'alpha2' => 'GB', 'alpha3' => 'GBR'],
            (object)['name' => 'China', 'alpha2' => 'CN', 'alpha3' => 'GBR'],
            //        (object)['name' => 'HongKong', 'alpha2' => 'HK', 'alpha3' => 'GBR'],
            (object)['name' => 'India', 'alpha2' => 'IN', 'alpha3' => 'GBR'],
            (object)['name' => 'Israel', 'alpha2' => 'IL', 'alpha3' => 'GBR'],
            (object)['name' => 'Malaysia', 'alpha2' => 'MY', 'alpha3' => 'GBR'],
            (object)['name' => 'Macedonia', 'alpha2' => 'MK', 'alpha3' => 'GBR'],
            (object)['name' => 'Switzerland', 'alpha2' => 'CH', 'alpha3' => 'GBR'],
            (object)['name' => 'Serbia', 'alpha2' => 'RS', 'alpha3' => 'GBR'],
            (object)['name' => 'Tunisia', 'alpha2' => 'TN', 'alpha3' => 'GBR'],
            (object)['name' => 'Turkey', 'alpha2' => 'TR', 'alpha3' => 'GBR'],
            (object)['name' => 'UnitedStates', 'alpha2' => 'US', 'alpha3' => 'GBR'],
            (object)['name' => 'Ukraine', 'alpha2' => 'UA', 'alpha3' => 'GBR'],
            (object)['name' => 'Belarus', 'alpha2' => 'BY', 'alpha3' => 'GBR'],

        ];
        $countries = new Collection();
        foreach ($countrycodes as $code) {
            $countries->push((object)$code);
        }
        return $countries;
    }

    public function setNutsCode() {
        $geo = Geo::query()->where('zipcode', $this->zipcode)->where('country_code',$this->country_code)->first();
        if ($geo) {
            $this->nuts_code_id = $geo->nuts_code_id;
            $this->save();
        } else {
            throw  ValidationException::withMessages(['no nutscode for userid ' . $this->id . ' and zipcode ' . $this->zipcode]);
        }
    }
    public function get_country() {
        $countries = Company::getCountryCodes();
        //dump($this->country_code);
        $country = $countries->where('alpha2', strtoupper($this->country_code))->first();
        if ($country)
            return strtolower($country->name);

    }

    public function getSettingsAttribute($value) {
        return json_decode($value,true);
    }

    public function setSettingsAttribute($value) {
        if (!is_null($value))
            $value = json_encode($value);

        $this->attributes['settings'] = $value;
    }

    public function loading_times() {
        return $this->hasMany('App\LoadingTimes');
    }
}

