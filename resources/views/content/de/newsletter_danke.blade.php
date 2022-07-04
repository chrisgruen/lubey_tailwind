@extends('layouts.frontend_tailwind')
@section('title')
    @lang('messages.news')
@endsection

@section('content')
<div class="min-h-screen">
    <section class="h-38 md:h-54 bg-blue-800">
        <div class="container mx-auto px-6 py-10 text-white">
            <h2 class="text-3xl md:text-5xl font-semibold">Lubey AG</h2>
            <h2 class="text-2xl md:text-3xl">Anmeldung zum Newsletter</h2>
        </div>
    </section>

    <section class="container mx-auto my-5 p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-3xl">Anmeldung zum Newsletter</h3>
                <p class="my-3">
                    Vielen Dank für Ihr Interesse an unserem Newsletter.<br>
                    In Kürze erhalten Sie eine E-Mail von newsletter@lubey.de mit einem Bestätigungslink um die Anmeldung abzuschließen.
                </p>
            </div>
        </div>
    </section>
</div>
@endsection
