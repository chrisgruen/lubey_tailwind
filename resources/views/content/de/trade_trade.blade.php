@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
	<section class="h-40 lg:h-72 bg-cover bg-htrade-5 z-0">
		<div class="container mx-auto px-5 pt-10 lg:pt-20">
			<h2 class="text-3xl lg:text-5xl font-semibold text-white">Lubey<span class="text-4xl lg:text-7xl font-semibold">TRADE</span><br />
                <span class="font-light">für den Handel</span>
            </h2>
		</div>
    </section>

    <section class="container relative mx-auto -mt-48 px-6 z-10 mb-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 h-full xl:h-[60rem]">
            <div class="pt-64 pr-0 lg:pr-10">
                <h3 class="text-3xl lg:text-4xl text-blue-800 font-light leading-10 mb-10">
                    <span class="font-semibold">Mit Lubey TRADE</span> - Profitieren Sie als Einzelhändler jetzt noch mehr von dem Wert Ihrer Wertstoffe
                </h3>
                <div class="flex">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div>
                        <h3 class="text-lg text-blue-800 font-semibold">Beste Preise dank der verdeckten E-Auktion</h3>
                        <p class="mb-8">
                            Der innovative Versteigerungsmechanismus auf Lubey Trade ermöglicht bessere Preise am Markt.
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div>
                        <h3 class="text-lg text-blue-800 font-semibold">Per Knopfdruck standardisierte Verträge</h3>
                        <p class="mb-8">
                            Mit der E-Vergabe auf Lubey Trade werden alle Vertragsunterlagen generiert. Alle Vertragsbedingungen und das Leistungsverzeichnis.
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
                           	Lubey ist unabhängig, frei von externem Einfluss und an kein Entsorgungsunternehmen gebunden.
                        </p>
                    </div>
                </div>
                <div class="mt-10 mb-10 xl-mb-0">
                    <a href="{{route('user.signin')}}" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white rounded mb-3 py-3 px-5 hover:text-white hover:bg-blue-800">
                        <span class="font-semibold mr-1">Jetzt</span> Anmelden und erleben wie einfach es geht!
                    </a>
                </div>
            </div>
            <div class="relative pt-0 mx-auto w-full">
                <div class="xl:absolute w-full xl-w-[36rem] top-10 xl-top-0 xl-left-10 z-20">
                    <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/person_trade.png')}}" alt="Lubey Trade"/>
                    <div class="relative w-full border border-blue-800 rounded-md px-10 pt-28 pb-14 text-center text-blue-800 text-lg">
                        <img class="absolute top-4 left-1/2 transform -translate-x-1/2" src="{{asset('img/frontend/kommas.png')}}" width="100" alt="Check"/>
                        Wir stehen für Regionalität bei unseren Produkten, aber auch wenn es um die Optimierung in der Abfallverwertung geht, möchten wir auf regionale Partner setzen und nachhaltig agieren.
                        Mit Lubey konnten wir unsere Entsorgungsprozesse optimieren, und einen lokalen Entsorger finden und das auch noch zum besten Preis.
                    	<p class="text-xs mt-5 italic">Pascal Kneuer, Inhaber REWE Nürnberg<br />Boxdorf, Heroldsberg & Erlangen</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-20 mx-auto bg-subtrade-1 mt-24 bg-cover bg-htrade-sub2">
        <div class="py-16">
            <h2 class="text-3xl lg:text-5xl p-5 text-white text-center">
                Mit Lubey Connect
            </h2>
            <h2 class="text-2xl lg:text-3xl px-5 text-white text-center font-light">
                vollautomatisiertes Abfallmanagement für den Einzelhandel
            </h2>

            <div class="container mx-auto px-6 mt-14 mb-14 px-0 lg:px-24">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 h-full lg:h-64 text-white">
                    <div class="relative bg-white text-blue-800 h-full lg:h-full px-10 py-7 rounded">
                        <img src="{{asset('img/frontend/Check.png')}}" width="45" alt="Check"/>
                        <h3 class="text-xl my-3 font-semibold">
                            Stets den Überblick behalten
                        </h3>
                        <p>
                            Mit Lubey Connect können alle Entsorgungsaufträge eingesehen, der aktuelle Status der Entsorgung geprüft, Entsorgungsrechnungen bzw. -gutschriften aufgerufen und übersichtlich dargestellt werden.
                        </p>
                    </div>
                    <div class="relative bg-white text-blue-800 h-full lg:h-full px-10 py-7 rounded">
                        <img src="{{asset('img/frontend/Check.png')}}" width="45" alt="Check"/>
                        <h3 class="text-xl my-3 font-semibold">
                            Vollautomatisch Entsorgungen auslösen
                        </h3>
                        <p>
							Mit Lubey Connect können per Knopfdruck  Entsorgungen für Abfälle ausgelöst werden, ganz einfach über den Browser oder die Lubey Connect App.
                        </p>
                    </div>
                    <div class="relative bg-white text-blue-800 h-full lg:h-full px-10 py-7 rounded">
                        <img src="{{asset('img/frontend/Check.png')}}" width="45" alt="Check"/>
                        <h3 class="text-xl my-3 font-semibold">
                            Digitales Abrechnungsmanagement
                        </h3>
                        <p>
							Mit Lubey Connect  erfolgt ein automatisiertes Abrechnungsmanagement. Eine manuelle Erfassung ist für den Einzelhändler nicht mehr nötig.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!--  Video -->
	<section class="container mx-auto w-full lg:w-[60rem] px-5 mt-20">
        <h2 class="text-3xl text-center text-blue-800 font-semibold">
           So wird's gemacht
        </h2>
        <div class="relative h-0 overflow-hidden max-w-full w-full mt-10" style="padding-bottom: 56.25%">
        	<iframe
        		src="https://www.youtube.com/embed/J7r8GXwSBZ4"
        		frameborder="0"
        		allowfullscreen
        		class="absolute top-0 left-0 w-full h-full"
        	></iframe>
        </div>
    </section>

    <section class="container relative mx-auto px-5 py-10 mb-0">
        <div class="w-full md:w-2/3 mx-auto mt-12">
            <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/Lubey_Trade_Anbieter.png')}}" alt="Lubey Trade Anbieter" />
        </div>

        <div class="mt-10 text-center">
			<a href="{{route('user.signin')}}" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white text-lg text-left rounded mb-3 py-3 px-6 hover:text-white hover:bg-blue-800">
                <span class="font-semibold mr-1">Jetzt</span> Anmelden und erleben wie einfach es geht!
            </a>
        </div>
	</section>

    <!-- COL 3 -->
    <section class="container mx-auto px-6 mt-14 mb-14 px-0 lg:px-24">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 h-full lg:h-80 text-white">
            <div class="relative bg-gradient-to-b from-[#92CD6B] to-[#4DB069] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h2 class="relative text-3xl font-semibold z-10 mb-3">INDIVIDUAL</h2>
                <a href="{{route('content.page',['pageID'=>'individual'])}}" class="relative inline-block bottom-5 z-10 bg-green-400/50 hover:text-white hover:bg-[#719F55] mt-5 py-2 px-12 text-lg font-semibold border rounded">
                    Erfahren Sie mehr
                </a>
                <div class="absolute bottom-0 right-0 z-0" >
                    <img class="w-[21rem]" src="{{asset('img/frontend/group1_col3.png')}}" alt="group1"/>
                </div>
            </div>
            <div class="relative bg-gradient-to-b from-[#8C589E] to-[#482F51] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h2 class="relative text-3xl font-semibold z-10 mb-3">CONNECT</h2>
                <a href="{{route('content.page',['pageID'=>'connect'])}}" class="relative inline-block bottom-5 z-10 bg-purple-500/50 hover:text-white hover:bg-[#70477E] mt-5 py-2 px-12 text-lg font-semibold border rounded">
                    Erfahren Sie mehr
                </a>
                <div class="absolute bottom-0 right-0 z-0">
                    <img class="w-80" src="{{asset('img/frontend/group3_col3.png')}}"  alt="group3"/>
                </div>
            </div>
            <div class="relative bg-gradient-to-b from-[#EEC114] to-[#FCD850] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h3 class="relative text-3xl font-semibold z-10 mb-3">CONSULTING</h3>
                <a href="{{route('content.page',['pageID'=>'consult'])}}" class="relative inline-block bottom-5 z-10 bg-yellow-400/50 hover:text-white hover:bg-[#BA9811] mt-5 py-2 px-12 text-lg font-semibold border rounded">
                    Erfahren Sie mehr
                </a>
                <div class="absolute bottom-0 right-0 z-0">
                    <img class="w-[20rem]" src="{{asset('img/frontend/group4_col3.png')}}" alt="group4"/>
                </div>
            </div>
        </div>
    </section>

	@include('content.de.partials.table')

    @include('content.de.partials.market_prices')
@endsection
