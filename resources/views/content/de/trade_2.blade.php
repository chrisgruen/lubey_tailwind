@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
	<section class="h-40 md:h-72 bg-header-trade z-0 bg-cover bg-htrade-5">
		<div class="container mx-auto px-6 pt-10 md:pt-20">
			<h2 class="text-3xl md:text-5xl font-semibold text-white">Lubey<span class="text-4xl md:text-7xl font-semibold">TRADE</span><br />
                <span class="font-light">für den Handel</span>
            </h2>
		</div>
    </section>

    <section class="container relative mx-auto -mt-48 px-6 z-10 mb-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
            <div class="pt-64">
                <h3 class="text-4xl text-blue-800 font-light leading-10 mb-10">
                    <span class="font-semibold">Mit Lubey TRADE</span> - Lernen Sie <br />
                    die Vorteile als Entsorger für Abfälle kennen
                </h3>
                <div class="flex">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div>
                        <h3 class="text-lg text-blue-800 font-semibold">Einfacher Zugriff auf alle Stoffe</h3>
                        <p class="mb-8">
                            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div>
                        <h3 class="text-lg text-blue-800 font-semibold">Rechtsverbindliche Verträge</h3>
                        <p class="mb-8">
                            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div>
                        <h3 class="text-lg text-blue-800 font-semibold">100% faire Vermarktung</h3>
                        <p class="mb-8">
                            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
                <div class="mt-10">
                    <a href="#" class="bg-[#51ADE6] border border-blue-300 text-white rounded mb-3 py-3 px-3 tracking-wider hover:text-white hover:bg-blue-800">
                        <span class="uppercase font-semibold">Jetzt</span> Anmelden und erleben wie einfach es geht!
                    </a>
                </div>
            </div>
            <div class="relative pt-0 mx-auto w-full">
                <div class="absolute z-20 w-[36rem] top-0 left-10">
                    <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/person_trade.png')}}" alt="Lubey Trade"/>
                    <div class="w-full border border-blue-800 rounded-md px-10 py-16 text-blue-800 text-lg">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br /><br /><br /><br />
@endsection
