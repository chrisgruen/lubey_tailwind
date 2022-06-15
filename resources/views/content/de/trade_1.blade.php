@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
    <section class="relative h-72 bg-header-trade z-0">
        <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/headers/trade_1.png')}}" alt="Trade"/>
        <div class="absolute top-14 left-20 lg:left-80 px-6 py-3">
            <h2 class="text-5xl font-semibold text-white">Lubey<span class="text-7xl font-semibold">TRADE</span><br />
                <span class="font-light">für Städte & Kommunen</span>
            </h2>
        </div>
    </section>
    <br /><br /><br /><br />
@endsection
