@extends('layouts.backend_tailwind')
@section('title')
    @lang('messages.registration')
@endsection
@section('content')
    <section class="container mx-auto my-5 p-5">
        <h1 class="text-3xl font-semibold">@lang('messages.registration')</h1>
        <div class="mt-2">
        	 <p class="my-2">@lang('registration.thankYouForYourRegistration')</p>
        	 <p class="my-2">@lang('registration.shortlyYouWillReceiveAnEmail')</p>
             <p class="my-2">@lang('registration.chooseRoleToFinishRegistration')</p>
		</div>
    </section>
@endsection