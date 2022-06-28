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
            <h2 class="text-2xl md:text-3xl">Login</h2>
        </div>
    </section>

    <section class="container mx-auto my-5 p-5">
        <h2 class="text-3xl text-center text-blue-800 mb-5 mt-5">
            @lang('messages.login_lubey_trade')
        </h2>

        @if(count($errors) > 0)
            <div class="w-full lg:w-1/3 mx-auto p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 h-auto" role="alert">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="w-full lg:w-1/3 mx-auto mt-5">
            <form class="bg-white px-0 py-0 mb-4 h-full" action="{{ route('user.signin') }}" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Benutzer
                    </label>
                    <input name="email" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Ihre E-Mail-Adresse">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Passwort
                    </label>
                    <input type="password" name="password" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  placeholder="************">
                </div>
                <div class="flex items-center justify-between">
                    <div></div>
                    <button type="submit" class="bg-white border border-blue-800 text-lg text-blue-800  rounded mb-3 py-1 px-5 hover:text-white hover:bg-blue-800">
                        Anmelden
                    </button>
                </div>
                @csrf()
            </form>

            @if($attempt==true || Session::get('message'))
                <div id="reset-box" class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <div class="text-sm font-semibold leading-2">@lang('auth.failed')</div>
                    <p class="text-xs my-2">@lang('messages.sendNewPassword')</p>
                    <form class="px-0 py-0 mb-4 h-full" action="{{ route('user.passwordReset') }}" method="post">
                        <div class="mb-4">
                            <label class="hidden block text-gray-700 text-sm font-bold mb-2" for="email">
                                Benutzer
                            </label>
                            <input name="email" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Ihre E-Mail-Adresse">
                        </div>
                        <div class="flex items-center justify-between">
                            <div></div>
                            <button type="submit" class="bg-white border border-blue-800 text-sm text-blue-800  rounded py-1 px-5 hover:text-white hover:bg-blue-800">
                                @lang('messages.sendPassword')
                            </button>
                        </div>
                        @csrf()
                    </form>
                    @if(Session::has('message'))
                        <div class="bg-red-100 border border-red-400 p-2" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                </div>
            @endif

            <div class="border-t border-b border-gray-300 mt-7 py-2">
                <a class="text-blue-500 hover:text-blue-800"
                   href="https://connect.lubey.de" target="_blank">@lang('messages.signin_connect') <i class="fal fa-arrow-square-right"></i>
                </a>
            </div>

        </div>
        <div class="w-full lg:w-1/2 mx-auto mt-10">
            <h3 class="text-lg text-blue-800 text-center">
                Nutzen Sie die Chance und digitalisieren Sie Ihre Entsorgung.<br />
                <a href="{{route('user.signup.registrieren') }}" class="text-blue-500 hover:text-blue-800 whitespace-nowrap">>> hier registrieren</a>
            </h3>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        @if($attempt==true || Session::get('message'))
        var scroll_element = document.getElementById("reset-box");
        scroll_element.scrollIntoView();
        @endif
    </script>
@endpush
