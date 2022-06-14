@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
    <section class="relative h-72 bg-[#E5C02B] z-0">
        <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/header_consult.png')}}" alt="Consult"/>
        <div class="absolute top-20 left-20 lg:left-80 px-6 py-3">
        	<p class="text-5xl font-semibold text-white">Lubey</p>
			<h2 class="text-7xl font-semibold text-white">CONSULTING</h2>
    	</div>
    </section>

    <section class="container relative mx-auto px-6 z-10">
        <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 px-10">
				<h3 class="text-4xl text-blue-800 font-light leading-10">
					<span class="font-semibold">Neues Zeitalter</span> - <br />
					Digitalisierung der Entsorgung und Abrechnung
				</h3>
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
                <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/consult.png')}}" alt="Lubey Trade"/>
            </div>
        </div>
    </section>

    <section class="container  mx-auto mt-10 px-6 pt-10 px-5">
        <h3 class="text-5xl text-center text-blue-800 before-line2">
            Alle Vorteile im Überblick
        </h3>
    </section>

    <section class="container mx-auto px-6 pt-10 pb-6 px-24">
        <div id="accordion-collapse" data-accordion="open">
            <h2 id="accordion-collapse-heading-1">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 rounded-t-xl border border-b-0 border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span>Accordion Flowbite 1</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2">
                        Accordion Flowbite 1 <br />
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span>Accordion Flowbite 2</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        Accordion Flowbite 2 <br />
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span>Accordion Flowbite 3</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        Accordion Flowbite 3 <br />
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- COL 3 -->
    <section class="container mx-auto px-6 mt-14 mb-14 px-0 lg:px-24">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 h-full lg:h-80 text-white">
            <div class="relative bg-gradient-to-b from-[#92CD6B] to-[#4DB069] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h2 class="relative text-3xl font-semibold z-10 mb-3">INDIVIDUAL</h2>
                <button class="relative bottom-5 z-10 bg-green-400/50 hover:text-white py-2 px-12 text-lg font-semibold mt-5 border rounded">
                    Erfahren Sie mehr
                </button>
                <div class="absolute bottom-0 right-0 z-0" >
                    <img class="w-[21rem]" src="{{asset('img/frontend/group1_col3.png')}}" alt="group1"/>
                </div>
            </div>
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
        </div>
    </section>
@endsection
