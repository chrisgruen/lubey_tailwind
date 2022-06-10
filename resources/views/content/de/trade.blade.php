@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
    <section class="relative h-72 bg-[#135395] z-0">
        <div class="absolute top-20 left-20 lg:left-80 px-6 py-3">
        	<p class="text-5xl font-semibold text-white">Lubey</p>
			<h2 class="text-7xl font-semibold text-white">TRADE</h2>
    	</div>
    </section>
    
    <section class="container relative mx-auto px-6 margin-to-top z-10">
        <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 px-10">
				<h3 class="text-4xl text-blue-800 font-light leading-10">
					<span class="font-semibold">Mit Lubey TRADE</span> - macht den <br />
					Handel mit Abfällen einfacher,<br />
					effizienter und sicherer
				</h3>
				<p class="mt-5">
					Darüber hinaus lassen sich gute wirtschaftliche Effekte erzielen. Über unterschiedliche Vermarktungswege und Vermarktungsformen
					findet jedes abfallerzeugende Unternehmen den richtigen Entsorger. Folgende Highlights erwarten den Nutzer bei Lubey Trade:
				</p>
				<div class="mt-10">
    				<a href="#" class="bg-[#51ADE6] border border-blue-300 text-white rounded mb-3 py-3 px-3 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                        Jetzt Anmelden und erleben wie einfach es geht!
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{asset('img/frontend/Character_01.png')}}" alt="Lubey Trade"/>
            </div>
        </div>
    </section>
@endsection