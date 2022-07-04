@extends('layouts.frontend_tailwind')
@section('title')
    @lang('messages.news')
@endsection

@section('content')
<div class="min-h-screen">
    <section class="h-38 md:h-54 bg-blue-800">
        <div class="container mx-auto px-6 py-10 text-white">
            <h2 class="text-3xl md:text-5xl font-semibold">Lubey AG</h2>
            <h2 class="text-2xl md:text-3xl">Newsletter - Anmeldung</h2>
        </div>
    </section>

    <section class="container mx-auto my-5 p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-3xl">Anmeldung zum Newsletter</h3>
                <p class="my-3">
                    Vielen Dank für Ihr Interesse an unserem Newsletter.<br>
                    Leider gab es einen Fehler bei der Anmeldung. Bitte versuchen Sie es erneut.
                </p>
                <div class="w-full md:w-1/2 p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 h-auto" role="alert">
                    invalid
                </div>
                <a href="{{route('content.page',['pageID'=>'home'])}}" class="inline-block mt-5 text-blue-500 hover:text-blue-800 hover:underline">
                   >> Zur Newsletter-Anmeldung
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
