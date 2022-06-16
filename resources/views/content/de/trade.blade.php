@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
	<section class="h-40 md:h-72 bg-header-trade z-0 bg-cover bg-htrade">
		<div class="container mx-auto px-6 pt-10 md:pt-20">
			<p class="text-3xl md:text-5xl font-semibold text-white">Lubey</p>
			<h2 class="text-4xl md:text-7xl font-semibold text-white">TRADE</h2>
		</div>
    </section>

    <section class="container relative mx-auto px-6 mt-10 xl:-mt-48 z-10 mb-0">
        <div class="flex items-center flex-wrap mb-0">
            <div class="w-full md:w-1/2 px-14">
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
                <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/Character_01.png')}}" alt="Lubey Trade"/>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-blue-800 to-[#4FAAE3] text-white mt-0">
		<div class="container mx-auto px-6 pt-10 pb-6 px-5">
            <h2 class="text-center text-3xl text-white">
            	Nutzen Sie die Lubey TRADE <span class="font-semibold">für Vorteile Ihrer Branche</span>
            </h2>
            <div class="flex flex-wrap justify-center space-x-12 my-16">
            	<div class="w-52 mt-10 lg:mt-0 text-left">
            		<img src="{{asset('img/frontend/branche1.png')}}" alt="Städte & Kommunen" width="200"/>
            		<div class="mt-7">
            			<h3 class="text-lg font-semibold">Städte & Kommunen</h3>
            			<p class="mb-7 mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
            			<a href="{{route('content.page',['pageID'=>'trade_1'])}}" class="bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
            				mehr erfahren
            			</a>
            		</div>
            	</div>
            	<div class="w-52 mt-10 lg:mt-0 text-left">
            		<img src="{{asset('img/frontend/branche2.png')}}" alt="Handel" width="200"/>
            		<div class="mt-7">
            			<h3 class="text-lg font-semibold">Handel</h3>
            			<p class="mb-7 mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
            			<a href="{{route('content.page',['pageID'=>'trade_2'])}}" class="bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
            				mehr erfahren
            			</a>
            		</div>
            	</div>
            	<div class="w-52 mt-10 lg:mt-0 text-left">
            		<img src="{{asset('img/frontend/branche3.png')}}" alt="Handel" width="200"/>
            		<div class="mt-7">
            			<h3 class="text-lg font-semibold">Industrie</h3>
            			<p class="mb-7 mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
            			<a href="{{route('content.page',['pageID'=>'trade_3'])}}" class="bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
            				mehr erfahren
            			</a>
            		</div>
            	</div>
            	<div class="w-52 mt-10 lg:mt-0 text-left">
            		<img src="{{asset('img/frontend/branche4.png')}}" alt="Handel" width="200"/>
            		<div class="mt-7">
            			<h3 class="text-lg font-semibold">Entsorger</h3>
            			<p class="mb-7 mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
            			<a href="{{route('content.page',['pageID'=>'trade_4'])}}" class="bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
            				mehr erfahren
            			</a>
            		</div>
            	</div>
            	<div class="w-52 mt-10 lg:mt-0 text-left">
            		<img src="{{asset('img/frontend/branche5.png')}}" alt="Handel" width="200"/>
            		<div class="mt-7">
            			<h3 class="text-lg font-semibold">Energieerzeuger</h3>
            			<p class="mb-7 mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
            			<a href="{{route('content.page',['pageID'=>'trade_5'])}}" class="bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
            				mehr erfahren
            			</a>
            		</div>
            	</div>
            </div>
		</div>
	</section>

    <section class="container mx-auto px-6 mt-20">
            <h2 class="text-3xl text-center text-blue-800 font-semibold">
               So funktioniert's
            </h2>
            <p class="text-center mx-auto mt-7 w-1/2">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
            <div class="w-full md:w-2/3 mx-auto mt-12">
                <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/Lubey_Trade_Anbieter.png')}}" alt="Lubey Trade Anbieter" />
            </div>
    </section>

	<!-- table Vergaben -->
    <section class="bg-gradient-to-b from-blue-800 to-[#4FAAE3] text-white mt-20">
        <div class="container mx-auto px-6 pt-10 pb-6 px-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 h-full mt-4 text-white border-b pb-10">
                <div class="px-10">
                    <h2 class="text-3xl font-semibold">Ausgewählte Vergaben</h2>
                </div>
                <div class="h-full">
                    <a href="#" class="bg-[#51ADE6] border border-blue-300 text-white text-lg rounded mb-3 py-3 px-3 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                        Jetzt Anmelden und mehr Vergaben ansehen!
                    </a>
                </div>
            </div>

            <div class="flex items-center mt-0 border-b">
                <div class="flex-none w-20 mr-12">
                    <img src="{{asset('img/frontend/Alttextilien.png')}}"  alt="Check"/>
                </div>
                <div class="flex-initial w-full relative overflow-x-auto ">
                    <table class="w-full text-base text-left text-white">
                        <thead class="text-lg font-light bg-transparent">
                            <tr>
                                <th scope="col" class="px-6 pt-1 pb-5 text-2xl">
                                    Los 1
                                </th>
                                <th scope="col" class="px-6 pt-1 pb-5">
                                    Textilien
                                </th>
                                <th scope="col" class="px-6 pt-1 pb-5">
                                    40.000 Tonnen
                                </th>
                                <th scope="col" class="px-6 pt-1 pb-5">
                                    29.04.2022 | 12:00 Uhr
                                </th>
                                <th scope="col" class="px-6 pt-1 pb-5 text-right" colspan="2">
                                    <button class="bg-transparent text-white hover:text-white py-2 px-4 mt-5 border">
                                        Details anzeigen
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-transparent border-t">
                                <td class="px-6 py-4 align-top">
                                    AVV 200110
                                </td>
                                <td class="px-6 py-4 align-top w-60">
                                    Alttextilien, namentlich Bekleidung und Schuhe
                                </td>
                                <td class="px-6 py-4 align-top">
                                    200.000 Tonnen
                                </td>
                                <td class="px-6 py-4 align-top">
                                   DE 29664, Walsrode
                                </td>
                            </tr>
                            <tr class="bg-transparent">
                                <td class="px-6 py-4 align-top">
                                    AVV 200110
                                </td>
                                <td class="px-6 py-4 align-top">
                                    Alttextilien, namentlich Bekleidung und Schuhe
                                </td>
                                <td class="px-6 py-4 align-top">
                                    200.000 Tonnen
                                </td>
                                <td class="px-6 py-4 align-top">
                                    DE 29640, Schneverdingen
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex items-center mt-0 mb-7 border-b">
                <div class="flex-none w-20 mr-12">
                    <img src="{{asset('img/frontend/Altholz.png')}}"  alt="Check"/>
                </div>
                <div class="flex-initial w-full relative overflow-x-auto ">
                    <table class="w-full text-base text-left text-white">
                        <thead class="text-lg font-light bg-transparent">
                        <tr>
                            <th scope="col" class="px-6 pt-1 pb-5 text-2xl">
                                Los 2
                            </th>
                            <th scope="col" class="px-6 pt-1 pb-5">
                                Textilien
                            </th>
                            <th scope="col" class="px-6 pt-1 pb-5">
                                40.000 Tonnen
                            </th>
                            <th scope="col" class="px-6 pt-1 pb-5">
                                29.04.2022 | 12:00 Uhr
                            </th>
                            <th scope="col" class="px-6 pt-1 pb-5 text-right" colspan="2">
                                <button class="bg-transparent text-white hover:text-white py-2 px-4 mt-5 border">
                                    Details anzeigen
                                </button>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-transparent border-t">
                            <td class="px-6 py-4 align-top">
                                AVV 200110
                            </td>
                            <td class="px-6 py-4 w-60 align-top">
                                Alttextilien, namentlich Bekleidung und Schuhe
                            </td>
                            <td class="px-6 py-4 align-top">
                                200.000 Tonnen
                            </td>
                            <td class="px-6 py-4 align-top">
                                DE 29664, Walsrode
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
            <div class="relative bg-gradient-to-b from-[#EEC114] to-[#FCD850] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h3 class="relative text-3xl font-semibold z-10 mb-3">CONSULTING</h3>
                <a href="{{route('content.page',['pageID'=>'consult'])}}" class="relative inline-block bottom-5 z-10 bg-yellow-400/50 hover:text-white mt-5 py-2 px-12 text-lg font-semibold border rounded">
                    Erfahren Sie mehr
                </a>
                <div class="absolute bottom-0 right-0 z-0">
                    <img class="w-[20rem]" src="{{asset('img/frontend/group4_col3.png')}}" alt="group4"/>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#4FAAE3] to-blue-800 text-white mt-20">
        <div class="container mx-auto text-center px-6 pt-10 pb-10 px-5">
            <h2 class="text-5xl font-semibold">
               Werden Sie JETZT <img class="inline w-80" src="{{asset('img/frontend/muellionaer1.png')}}" alt="muellionaer"/>
            </h2>
            <p class="text-3xl mx-auto text-center w-2/3 mt-7">
                Registrieren Sie sich auf Lubey.de <span>bis zum 30.06.2022</span>
                und erhalten Sie ein kleines Müllionär-Präsent
            </p>
            <button class="bg-transparent hover:text-white py-3 px-8 mt-5 border rounded text-xl">
                Registrieren
            </button>
        </div>
    </section>
    
	<section class="container mx-auto px-6 my-20">
    	<h2 class="text-3xl text-blue-800 text-center">
    		Aktuelle Marktpreise
		</h2>
    </section>
@endsection
