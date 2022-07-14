@extends('layouts.frontend_tailwind')
@section('title')
    @lang('messages.login')
@endsection
@section('description')
    Suchen Sie nach den neuesten Vergaben und Auktionen bei Lubey Trade und finden Sie attraktive Angebote.
@endsection
@section('content')
    <section class="h-38 md:h-54 bg-blue-800">
        <div class="container mx-auto px-6 py-10 text-white">
            <h2 class="text-3xl md:text-5xl font-semibold">Lubey AG</h2>
            <h2 class="text-2xl md:text-3xl">Registrieren</h2>
        </div>
    </section>

    <section class="container mx-auto mb-10 p-5">
        <div class="container mx-auto py-5 pb-6 px-5 lg:px-24">
            <div class="w-full mx-auto">
                <h4 class="text-xl text-blue-800 mb-5 mt-5">
                    Erst wenn alle Zulassungsvoraussetzungen erfüllt sind, können Sie am Handel bei Lubey Trade teilnehmen. Bei der Registrierung müssen Sie unter anderem Angaben zu Ihrem Unternehmen oder zu Ihrer Einrichtung machen.
                </h4>
            </div>
            <div id="accordion-collapse" data-accordion="open">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex justify-between items-center p-2 w-full text-xl text-left text-gray-500 rounded-t-lg border border-b-0 border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                    <span class="text-blue-800">
                    	Weitere Informationen zum Zulassungsprozess <i class="fas fa-chevron-right icon-small"></i>
                	</span>
                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 pt-10">
                        <div class="w-full text-center mb-5 lg:mb-0">
                            <img class="inline-block" src="{{ url('/img/icons_svg/icon-9.svg') }}" width="60px" alt="Icon_1">
                            <h2 class="text-3xl text-blue-800 font-semibold mt-2">Profil</h2>
                            <p>Erstellen und bestätigen  Sie Ihr persönliches Profil.</p>
                        </div>
                        <div class="w-full text-center mb-5 lg:mb-0">
                            <img class="inline-block" src="{{ url('/img/icons_svg/icon-10.svg') }}" width="60px" alt="Icon_1">
                            <h2 class="text-3xl text-blue-800 font-semibold mt-2">Rolle</h2>
                            <p>Beantworten Sie wenige Fragen und legen Sie so Ihre Rolle fest.</p>
                        </div>
                        <div class="w-full text-center mb-5 lg:mb-0">
                            <img class="inline-block" src="{{ url('/img/icons_svg/icon-11.svg') }}" width="60px" alt="Icon_1">
                            <h2 class="text-3xl text-blue-800 font-semibold mt-2">Überprüfung</h2>
                            <p>Wir überprüfen Ihre Handelsberechtigung und senden Ihnen den Aktivierungsschlüssel per Post zu</p>
                        </div>
                        <div class="w-full text-center mb-5 lg:mb-0">
                            <img class="inline-block" src="{{ url('/img/icons_svg/icon-12.svg') }}" width="60px" alt="Icon_1">
                            <h2 class="text-3xl text-blue-800 font-semibold mt-2">Aktivierung</h2>
                            <p>Durch Eingabe des Aktivierungsschlüssels wird Ihr Profil aktiviert.</p>
                        </div>
                    </div>
                    <p class="mt-7">
                        Bei der Registrierung müssen Sie unter anderem Angaben zu Ihrem Unternehmen oder zu Ihrer Einrichtung machen. Entsprechend Ihrer Rolle sind verschiedene Nachweise bzw. Dokumente zu erbringen. So muss z. B. ein Erzeuger von Abfall seine Erzeugernummer oder der Sammler von Abfall seine Sammlernummer verpflichtend angeben sowie diesbezügliche amtliche Nachweise erbringen. Erst nach Erfüllung der Zulassungsvoraussetzungen wird die Handelsberechtigung erteilt und ein Unternehmen darf bei Lubey Trade mit Abfällen und Sekundärrohstoffen handeln.
                    </p>
                    <p class="mt-7">
                        Alle Bedingungen zum Handel auf Lubey Trade entnehmen Sie bitte unseren derzeit gültigen allgemeinen Geschäftsbedingungen. Die gesetzlichen Grundlagen zum Handel sowie zum Umgang mit Sekundärrohstoffen und Abfällen sind im Gesetz zur Neuordnung des Kreislaufwirtschafts- und Abfallrechts geregelt. Je nach Stoffklasse können weitere gesetzliche Bedingungen hinzukommen.
                    </p>
                </div>
            </div>
        </div>

        @if(count($errors) > 0)
            <div class="w-full md:w-1/2 mx-auto p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 h-auto" role="alert">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="w-full lg:w-1/2 mx-auto mt-5">
            <form class="bg-white px-0 py-5 mb-4 h-full" action="{{ route('user.signup.Step1') }}" method="post" >
                {{-- @honeypot --}}
                <div class="text-lg font-semibold mb-3">@lang('messages.personalData')</div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="salutation">
                        @lang('messages.selectSalutation')
                    </label>
                    <select name="salutation" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value=""> ---------- </option>
                        <option value="female" @if(old('salutation') == 'female') selected @endif >@lang('messages.mrs')</option>
                        <option value="male" @if(old('salutation') == 'male') selected @endif>@lang('messages.mr')</option>
                    </select>
                    <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                        Bitte Anrede auswählen
                    </p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="firstname">
                        @lang('messages.your_firstname')
                    </label>
                    <input type="text" name="firstname" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('firstname')}}">
                    <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                        Bitte Vorname eintragen
                    </p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="lastname">
                        @lang('messages.your_lastname')
                    </label>
                    <input type="text" name="lastname" name="lastname" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('lastname')}}">
                    <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                        Bitte Nachame eintragen
                    </p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="email">
                        E-Mail
                    </label>
                    <input type="email" name="email" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('email')}}">
                    <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                        Bitte Email eintragen
                    </p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="email_confirmation">
                        @lang('messages.emailConfirm')
                    </label>
                    <input type="email" name="email_confirmation" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('email_confirmation')}}">
                    <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                        Bitte Email eintragen
                    </p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="password">
                        @lang('messages.password')
                    </label>
                    <input type="password" name="password" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  placeholder="************" value="">
                    <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                        Bitte Passwort eintragen
                    </p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="password_confirmation">
                        @lang('messages.passwordConfirmation')
                    </label>
                    <input type="password" name="password_confirmation" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  placeholder="************" value="">
                    <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                        Bitte Passwort-Bestätigung eintragen
                    </p>
                </div>

                <div class="text-lg font-semibold mb-3">@lang('messages.businessData')</div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="company">
                        @lang('messages.companyName')
                    </label>
                    <input type="text" name="company" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('company')}}">
                    <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                        Bitte Unternehmen eintragen
                    </p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="ceo_name">
                        @lang('messages.ceoName')
                    </label>
                    <input type="text" name="ceo_name" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('ceo_name')}}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="company_register_id">
                        @lang('messages.registerID')
                    </label>
                    <input type="text" name="company_register_id" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('company_register_id')}}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="company_court">
                        @lang('messages.court')
                    </label>
                    <input type="text" name="company_court" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('company_court')}}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="ustid">
                        @lang('messages.taxID')
                    </label>
                    <input type="text" name="ustid" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('ustid')}}">
                </div>

                <div class="mb-3 font-semibold">@lang('messages.location')</div>

                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
                        <label class="block text-gray-700 text-sm mb-1" for="street">
                            @lang('messages.street')
                        </label>
                        <input type="text" name="street" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('street')}}">
                        <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                            Bitte Straße eintragen
                        </p>
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <label class="block text-gray-700 text-sm mb-1" for="street_number">
                            @lang('messages.street_number')
                        </label>
                        <input type="text" name="street_number" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('street_number')}}">
                        <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                            Bitte Hausnummer eintragen
                        </p>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="country_code">
                        @lang('messages.country')
                    </label>
                    <select name="country_code" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value=""> ---------- </option>
                        @foreach(\App\Models\Company::getCountryCodes() as $country)
                            <option value="{{strtolower($country->alpha2)}}" @if(old('country_code') == strtolower($country->alpha2)) selected @endif >
                                @lang('countries.'.strtolower($country->name))
                            </option>
                        @endforeach
                    </select>
                    <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                        Bitte Land angeben
                    </p>
                </div>

                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block text-gray-700 text-sm mb-1" for="zipcode">
                            @lang('messages.zipcode')
                        </label>
                        <input type="text" name="zipcode" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('zipcode')}}">
                        <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                            Bitte PLZ angeben
                        </p>
                    </div>
                    <div class="w-full md:w-2/3 px-3">
                        <label class="block text-gray-700 text-sm mb-1" for="city">
                            @lang('messages.city')
                        </label>
                        <input type="text" name="city" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('city')}}">
                        <p class="invisible peer-invalid:visible text-sm text-red-700 font-light">
                            Bitte Ort angeben
                        </p>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="phonenumber">
                        @lang('messages.phonenumber')
                    </label>
                    <input type="text" name="phonenumber" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('phonenumber')}}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="mobilenumber">
                        @lang('messages.mobilenumber')
                    </label>
                    <input type="text" name="mobilenumber" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('mobilenumber')}}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-1" for="faxnumber">
                        @lang('messages.faxnumber')
                    </label>
                    <input type="text" name="faxnumber" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('faxnumber')}}">
                </div>

                <div class="mb-4">
                    <input type="checkbox" name="accept_privacy" required class="peer mr-2 leading-tight" value="1">
                    <label class="block text-gray-500 font-bold" for="accept_privacy">
                        Ich habe die
                        <a class="text-blue-500 hover:underline hover:text-blue-800 whitespace-nowrap" href="{{route('content.page',['pageID'=>'datenschutz'])}}">Datenschutzerklärung</a>
                        gelesen und stimme ihnen zu
                    </label>
                    <p class="block peer-checked:hidden  text-sm text-red-700 font-light">
                        Bitte bestätigen Sie, dass Sie die Datenschutzerklärung gelesen haben.
                    </p>
                </div>

                <div class="mb-4">
                    <a class="text-blue-500 hover:underline hover:text-blue-800 whitespace-nowrap" href="{{route('content.page',['pageID'=>'agb'])}}">@lang('messages.general_terms_and_conditions')
                        <i class="fas fa-chevron-right icon-small" aria-hidden="true"></i>
                    </a><br/>
                    <a class="text-blue-500 hover:underline hover:text-blue-800 whitespace-nowrap" href="{{route('content.page',['pageID'=>'teilnahmebedingungen'])}}">@lang('messages.terms_of_participation')
                        <i class="fas fa-chevron-right icon-small" aria-hidden="true"></i>
                    </a><br/>
                    <a class="text-blue-500 hover:underline hover:text-blue-800 whitespace-nowrap" href="{{route('content.page',['pageID'=>'datenschutz'])}}">@lang('messages.privacy')
                        <i class="fas fa-chevron-right icon-small" aria-hidden="true"></i>
                    </a><br/>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div></div>
                    <button type="submit" class="bg-white border border-blue-800 text-lg text-blue-800  rounded mb-3 py-1 px-5 hover:text-white hover:bg-blue-800">
                        @lang('messages.register')
                    </button>
                </div>
                @csrf()
            </form>
            <p class="mb-5">
                Entsprechend Ihrer Rolle sind verschiedene Nachweise bzw. Dokumente zu erbringen. So muss z. B. ein Erzeuger von Abfall seine Erzeugernummer oder der Sammler von Abfall seine Sammlernummer verpflichtend angeben sowie diesbezügliche amtliche Nachweise erbringen. Erst nach Erfüllung der Zulassungsvoraussetzungen wird die Handelsberechtigung erteilt und ein Unternehmen darf bei Lubey Trade mit Abfällen und Sekundärrohstoffen handeln.
            </p>
            <p class="mb-2">
                Alle Bedingungen zum Handel bei Lubey Trade entnehmen Sie bitte unseren derzeit gültigen allgemeinen Geschäftsbedingungen. Die gesetzlichen Grundlagen zum Handel sowie zum Umgang mit Sekundärrohstoffen und Abfällen sind im Gesetz zur Neuordnung des Kreislaufwirtschafts- und Abfallrechts geregelt. Je nach Stoffklasse können weitere gesetzliche Bedingungen hinzukommen.
            </p>
        </div>
    </section>
@endsection

@push('scripts')
    <script>

    </script>
@endpush



