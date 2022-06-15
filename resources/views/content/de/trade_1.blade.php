@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
	<section class="h-40 md:h-72 bg-header-trade z-0 bg-cover bg-htrade-5">
		<div class="container mx-auto px-6 pt-10 md:pt-20">
			<h2 class="text-3xl md:text-5xl font-semibold text-white">Lubey<span class="text-4xl md:text-7xl font-semibold">TRADE</span><br />
                <span class="font-light">für Städte & Kommunen</span>
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
                    <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/person_commune.png')}}" alt="Lubey Trade"/>
                    <div class="relative w-full border border-blue-800 rounded-md px-10 pt-28 pb-14 text-blue-800 text-lg">
                        <img class="absolute top-4 left-1/2 transform -translate-x-1/2" src="{{asset('img/frontend/kommas.png')}}" width="100" alt="Check"/>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-header-trade mt-20 mx-auto bg-subtrade-1 mt-20">
        {{--
        <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/headers/subheader_1.png')}}" alt="Trade"/>
        --}}
        <div class="pt-20 pb-16">
            <h2 class="text-5xl text-white text-center">
                Erhöhen Sie Ihre Reichweite mit Lubey
            </h2>
            <h2 class="text-3xl text-white text-center font-light">
                Zugriff auf europaweite Vergaben
            </h2>

            <div class="container mx-auto px-6 mt-14 mb-14 px-0 lg:px-24">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 h-full lg:h-64 text-white">
                    <div class="relative bg-white text-blue-800 h-full lg:h-full px-10 py-7 rounded">
                        <img src="{{asset('img/frontend/Check.png')}}" width="45" alt="Check"/>
                        <h3 class="text-xl my-3 font-semibold">
                            Erstellen von Suchaufträgen
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
                        </p>
                    </div>
                    <div class="relative bg-white text-blue-800 h-full lg:h-full px-10 py-7 rounded">
                        <img src="{{asset('img/frontend/Check.png')}}" width="45" alt="Check"/>
                        <h3 class="text-xl my-3 font-semibold">
                            Online auch per Umkreissuche
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
                        </p>
                    </div>
                    <div class="relative bg-white text-blue-800 h-full lg:h-full px-10 py-7 rounded">
                        <img src="{{asset('img/frontend/Check.png')}}" width="45" alt="Check"/>
                        <h3 class="text-xl my-3 font-semibold">
                            Benachrichtigung bei Auftragzuschlag
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <br /><br /><br /><br />
@endsection
