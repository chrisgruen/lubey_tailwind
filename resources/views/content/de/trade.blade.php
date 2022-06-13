@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
    <section class="relative h-72 bg-header-trade z-0">
        <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/header_trade.png')}}" alt="Trade"/>
        <div class="absolute top-20 left-20 lg:left-80 px-6 py-3">
        	<p class="text-5xl font-semibold text-white">Lubey</p>
			<h2 class="text-7xl font-semibold text-white">TRADE</h2>
    	</div>
    </section>

    <section class="container relative mx-auto px-6 margin-to-top z-10 mb-0">
        <div class="flex items-center flex-wrap mb-0">
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
            			<a href="#" class="bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
            				mehr erfahren
            			</a>
            		</div>
            	</div>
            	<div class="w-52 mt-10 lg:mt-0 text-left">
            		<img src="{{asset('img/frontend/branche2.png')}}" alt="Handel" width="200"/>
            		<div class="mt-7">
            			<h3 class="text-lg font-semibold">Handel</h3>
            			<p class="mb-7 mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
            			<a href="#" class="bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
            				mehr erfahren
            			</a>
            		</div>
            	</div>
            	<div class="w-52 mt-10 lg:mt-0 text-left">
            		<img src="{{asset('img/frontend/branche3.png')}}" alt="Handel" width="200"/>
            		<div class="mt-7">
            			<h3 class="text-lg font-semibold">Industrie</h3>
            			<p class="mb-7 mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
            			<a href="#" class="bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
            				mehr erfahren
            			</a>
            		</div>
            	</div>
            	<div class="w-52 mt-10 lg:mt-0 text-left">
            		<img src="{{asset('img/frontend/branche4.png')}}" alt="Handel" width="200"/>
            		<div class="mt-7">
            			<h3 class="text-lg font-semibold">Entsorger</h3>
            			<p class="mb-7 mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
            			<a href="#" class="bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
            				mehr erfahren
            			</a>
            		</div>
            	</div>
            	<div class="w-52 mt-10 lg:mt-0 text-left">
            		<img src="{{asset('img/frontend/branche5.png')}}" alt="Handel" width="200"/>
            		<div class="mt-7">
            			<h3 class="text-lg font-semibold">Energieerzeuger</h3>
            			<p class="mb-7 mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
            			<a href="#" class="bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
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

            <div class="flex items-center mt-5">
                <div class="flex-none w-20 mr-12">
                    <img src="{{asset('img/frontend/Alttextilien.png')}}"  alt="Check"/>
                </div>
                <div class="flex-initial w-full relative overflow-x-auto ">
                    <table class="w-full text-base text-left text-white">
                        <thead class="text-lg font-light bg-transparent">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-2xl">
                                    Los 1
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Textilien
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    40.000 Tonnen
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    29.04.2022 | 12:00 Uhr
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <button class="bg-transparent text-white hover:text-white py-2 px-4 mt-5 border">
                                        Details anzeigen
                                    </button>
                                </th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </section>


	<br /><br /><br />
@endsection
