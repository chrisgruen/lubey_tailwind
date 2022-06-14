@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
    <section class="relative h-72 bg-header-digit z-0">
        <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/header_individual.png')}}" alt="Individual"/>
        <div class="absolute top-20 left-20 lg:left-80 px-6 py-3">
        	<p class="text-5xl font-semibold text-white">Lubey</p>
			<h2 class="text-7xl font-semibold text-white">INDIVIDUAL</h2>
    	</div>
    </section>

    <section class="container relative mx-auto px-6 z-10">
        <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 px-10">
				<h3 class="text-4xl text-blue-800 font-light leading-10">
					<span class="font-semibold">Digitale Lösungen</span> - Wo Standards <br />
					aufhören, fängt Zufriedenheit an<br />
				</h3>
				<p class="mt-5">
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
					At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
				<p class="mt-5">
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
					At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
				<div class="mt-10">
    				<a href="#" class="bg-[#51ADE6] border border-blue-300 text-white rounded mb-3 py-3 px-3 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                        Jetzt Beratungstermin vereinbaren!
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/digit.png')}}" alt="Lubey Trade"/>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#94CE6D] to-[#53B36E] text-white margin-to-top2 mt-0">
        <div class="container mx-auto px-6 pt-0 pb-0 px-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 text-white">
                <div class="pt-0 px-20">
                    <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/anzug_background.png')}}" alt="Lubey Anzug" />
                </div>
                <div class="py-20">
                    <h2 class="text-3xl">
                        Maßgeschneiderte Lösungen - <br />
                        So individuell wie Ihr Unternehmen
                    </h2>
                    <div class="flex items-center flex-wrap mt-10">
                        <div class="flex">
                            <div class="flex-none w-14 h-14">
                                <img src="{{asset('img/frontend/check_white.png')}}" width="36" alt="Check"/>
                            </div>
                            <div class="mb-8">
                                <h4 class="text-xl font-semibold mb-4">Überschrift</h4>
                                <p>
                                    Digitalisierung Ihrer Prozesse und Vernetzung Ihrer Anwendungen.
                                    Verwalten Sie Ihre Standorte, Projekte, Lieferanten und Kunden.
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-none w-14 h-14">
                                <img src="{{asset('img/frontend/check_white.png')}}" width="36" alt="Check"/>
                            </div>
                            <div class="mb-8">
                                <h4 class="text-xl font-semibold mb-4">Überschrift</h4>
                                <p>
                                    Digitalisierung Ihrer Prozesse und Vernetzung Ihrer Anwendungen.
                                    Verwalten Sie Ihre Standorte, Projekte, Lieferanten und Kunden.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COL 3 -->
    <section class="container mx-auto px-6 mt-14 mb-14 px-0 lg:px-24">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 h-full lg:h-80 text-white">
            <div class="relative bg-gradient-to-b from-[#4EAAE3] to-[#07468F] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h2 class="relative text-3xl font-semibold z-10 mb-3">Trade</h2>
                <button class="relative bottom-5 z-10 bg-blue-800/50 hover:text-white py-2 px-12 text-lg font-semibold mt-5 border rounded">
                    Erfahren Sie mehr
                </button>
                <div class="absolute bottom-0 right-0 z-0" >
                    <img class="w-[17.5rem]" src="{{asset('img/frontend/group2_col3.png')}}" alt="group1"/>
                </div>
            </div>
            <div class="relative bg-gradient-to-b from-[#8C589E] to-[#482F51] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h2 class="relative text-3xl font-semibold z-10 mb-3">CONNECT</h2>
                <button class="relative bottom-5 z-10 bg-purple-500/50 hover:text-white py-2 px-5 text-lg font-semibold mt-5 border rounded">
                    Erfahren Sie mehr
                </button>
                <div class="absolute bottom-0 right-0 z-0">
                    <img class="w-80" src="{{asset('img/frontend/group3_col3.png')}}"  alt="group3"/>
                </div>
            </div>
            <div class="relative bg-gradient-to-b from-[#EEC114] to-[#FCD850] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h3 class="relative text-3xl font-semibold z-10 mb-3">CONSULTING</h3>
                <button class="relative bottom-5 z-10 bg-yellow-400/50 hover:text-white py-2 px-12 text-lg font-semibold mt-5 border rounded">
                    Erfahren Sie mehr
                </button>
                <div class="absolute bottom-0 right-0 z-0">
                    <img class="w-[20rem]" src="{{asset('img/frontend/group4_col3.png')}}" alt="group4"/>
                </div>
            </div>
        </div>
    </section>
@endsection
