@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
	<section class="h-40 md:h-72 bg-header-trade z-0 bg-cover bg-hconsult">
		<div class="container mx-auto px-6 pt-10 md:pt-20">
			<p class="text-3xl md:text-5xl font-semibold text-white">Lubey</p>
			<h2 class="text-4xl md:text-7xl font-semibold text-white">CONSULTING</h2>
		</div>
    </section>

    <section class="container relative mx-auto px-6 mt-10 xl:-mt-0 z-10">
        <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 px-14">
				<h3 class="text-4xl text-blue-800 font-light leading-10">
					<span class="font-semibold">Neues Zeitalter</span> - <br />
					Digitalisierung der Entsorgung und Abrechnung
				</h3>
				<p class="mt-5">
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
					At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
				<div class="mt-10">
    				<a href="#" class="bg-[#51ADE6] border border-blue-300 text-white rounded mb-3 py-3 px-5 tracking-wider text-lg hover:text-white hover:bg-blue-800">
                        JETZT einen Beratungstermin vereinbaren!
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/consult.png')}}" alt="Lubey Trade"/>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#EFC313] to-[#FCDA50] margin-to-top2 mt-0">
        <div class="container mx-auto px-6 pt-0 pb-0 px-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                <div class="pt-0 px-20">
                    <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/Consult2.png')}}" alt="Lubey Anzug" />
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
                        <div class="flex mt-8">
                            <div class="flex-none w-14 h-14"></div>
                            <a href="{{route('content.page',['pageID'=>'individual'])}}" class="bg-transparent border border-blue-800 text-blue-800  rounded mb-3 py-3 px-3 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                                Erfahren Sie mehr
                            </a>
                        </div>
                    </div>
                </div>
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
                    <a href="#" class="bg-[#51ADE6] border border-blue-300 text-white rounded mb-3 py-3 px-5 tracking-wider text-lg hover:text-white hover:bg-blue-800">
                        JETZT einen Beratungstermin vereinbaren!
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2 mt-10">
                <img class="w-96" src="{{asset('img/frontend/lubey_box.png')}}" alt="Lubey Trade"/>
            </div>
        </div>
    </section>

    <!-- COL 3 -->
    <section class="container mx-auto px-6 mt-14 mb-14 px-0 lg:px-24">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 h-full lg:h-80 text-white">
            <div class="relative bg-gradient-to-b from-[#92CD6B] to-[#4DB069] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h2 class="relative text-3xl font-semibold z-10 mb-3">INDIVIDUAL</h2>
                <a href="{{route('content.page',['pageID'=>'digit'])}}" class="relative inline-block bottom-5 z-10 bg-green-400/50 hover:text-white mt-5 py-2 px-12 text-lg font-semibold border rounded">
                    Erfahren Sie mehr
                </a>
                <div class="absolute bottom-0 right-0 z-0" >
                    <img class="w-[21rem]" src="{{asset('img/frontend/group1_col3.png')}}" alt="group1"/>
                </div>
            </div>
            <div class="relative bg-gradient-to-b from-[#4EAAE3] to-[#07468F] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h2 class="relative text-3xl font-semibold z-10 mb-3">Trade</h2>
                <a href="{{route('content.page',['pageID'=>'trade'])}}" class="relative inline-block bottom-5 z-10 bg-blue-800/50 hover:text-white mt-5 py-2 px-12 text-lg font-semibold border rounded">
                    Erfahren Sie mehr
                </a>
                <div class="absolute bottom-0 right-0 z-0" >
                    <img class="w-[17.5rem]" src="{{asset('img/frontend/group2_col3.png')}}" alt="group1"/>
                </div>
            </div>
            <div class="relative bg-gradient-to-b from-[#8C589E] to-[#482F51] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h2 class="relative text-3xl font-semibold z-10 mb-3">CONNECT</h2>
                <a href="{{route('content.page',['pageID'=>'connect'])}}" class="relative inline-block bottom-5 z-10 bg-purple-500/50 hover:text-white mt-5 py-2 px-12 text-lg font-semibold border rounded">
                    Erfahren Sie mehr
                </a>
                <div class="absolute bottom-0 right-0 z-0">
                    <img class="w-80" src="{{asset('img/frontend/group3_col3.png')}}"  alt="group3"/>
                </div>
            </div>
        </div>
    </section>
@endsection
