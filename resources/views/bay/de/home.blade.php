@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
    <!--Hero-->
    <section id="start-slider" class="relative" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-80 sm:h-80 md:h-80 xl:h-128 2xl:h-128">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out bg-slide-1 bg-cover bg-hslider-1" data-carousel-item >
        		<div class="flex flex-row">
        			<div class="container mx-auto px-6 mt-7 xl:mt-20">
        				<h2 class="text-3xl xl:text-5xl font-semibold text-white">Die ZUKUNFT <br />der Entsorgung ist digital.</h2>
        				<p class="text-xl xl:text-3xl text-3xl font-light mt-3 text-white">Unabhängig, transparent und sicher.</p>
        				<p class="text-xl xl:text-3xl text-3xl font-light mt-3 text-white">intelligent, vernetzt, digital.</p>
        				<a href="{{route('content.page',['pageID'=>'trade'])}}" class="inline-block bg-transparent text-lg text-white hover:text-white font-semibold py-3 px-5 mt-5 border rounded">
            				Erfahren Sie mehr
            			</a>
        			</div>
        		</div>
        	</div>
        	
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out bg-slide-1 bg-cover bg-hslider-2" data-carousel-item >
        		<div class="flex flex-row">
        			<div class="container mx-auto px-6 mt-7 md:mt-20">
        				<h2 class="text-3xl xl:text-5xl font-semibold text-white">Lubey Connect</h2>
        				<p class="text-xl xl:text-3xl text-3xl font-light mt-3 text-white">Intelligentes und vernetztes Abfallmanagement</p>
        				<a href="{{route('content.page',['pageID'=>'connect'])}}" class="inline-block bg-transparent text-lg text-white hover:text-white font-semibold py-3 px-5 mt-5 border rounded">
            				Erfahren Sie mehr
            			</a>
        			</div>
        		</div>
        	</div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out bg-slide-1 bg-cover bg-hslider-3" data-carousel-item >
        		<div class="flex flex-row">
        			<div class="container mx-auto px-6 mt-7 md:mt-20">
        				<h2 class="text-3xl xl:text-5xl font-semibold text-white">Digitale Lösungen</h2>
        				<p class="text-xl xl:text-3xl text-3xl font-light mt-3 text-white">Individuell entwickelte Software rund um die Entsorgung</p>
        				<a href="{{route('content.page',['pageID'=>'consult'])}}" class="inline-block bg-transparent text-lg text-white hover:text-white font-semibold py-3 px-5 mt-5 border rounded">
            				Erfahren Sie mehr
            			</a>
        			</div>
        		</div>
        	</div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out bg-slide-1 bg-cover bg-hslider-4" data-carousel-item >
        		<div class="flex flex-row">
        			<div class="container mx-auto px-6 mt-7 md:mt-20">
        				<h2 class="text-3xl xl:text-5xl font-semibold text-white">Lubey Consult</h2>
        				<p class="text-xl xl:text-3xl text-3xl font-light mt-3 text-white">Beratungsleistungen zur Abfallentsorgung</p>
        				<p class="text-xl xl:text-3xl text-3xl font-light mt-3 text-white">Vermarktung und Software</p>
        				<a href="{{route('content.page',['pageID'=>'digit'])}}" class="inline-block bg-transparent text-lg text-white hover:text-white font-semibold py-3 px-5 mt-5 border rounded">
            				Erfahren Sie mehr
            			</a>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="hidden md:inline-block w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="hidden md:inline-block w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="hidden md:inline-block w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="hidden md:inline-block w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        </div>
        <!-- Slider controls -->
        {{--  <div class="container mx-auto flex relative">
              <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
          <span
              class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                                                                                                              d="M15 19l-7-7 7-7"></path></svg>
              <span class="hidden">Previous</span>
          </span>
              </button>
              <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
          <span
              class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                                                                                                              d="M9 5l7 7-7 7"></path></svg>
              <span class="hidden">Next</span>
          </span>
              </button>
          </div>--}}
    </section>

    <!-- Features -->
    <section class="container mx-auto px-6 mt-20">
        <div class="flex justify-center flex-wrap mb-5">
            <h2 class="text-3xl text-center text-blue-800 font-light mb-8">
                Lubey entwickelt <span class="font-semibold">maßgeschneiderte</span><br />
                <span class="font-semibold">Softwarelösungen</span> rund um das Thema Entsorgung
            </h2>
        </div>
        <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2">
            	<div class="flex">
            		<div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                  	</div>
                    <p class="text-gray-600 mb-8">
                        Digitalisierung Ihrer Prozesse und Vernetzung Ihrer Anwendungen.
                        Verwalten Sie Ihre Standorte, Projekte, Lieferanten und Kunden.
                    </p>
                </div>
                <div class="flex">
            		<div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                  	</div>
                    <p class="text-gray-600 mb-8">
                        Stellen Sie sicher, dass alle Ihre Beschaffungen und Vermarktungen Ihren Unternehmensrichtlinien und strukturierten Kriterien entsprechen.
                    </p>
                </div>
                <div class="flex">
            		<div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                  	</div>
                    <p class="text-gray-600 mb-8">
                        Zentrale Verwaltung Ihrer lokalen Standorte und Optimierung deren technischer (u./o. administrativer) Prozesse.
                    </p>
                </div>

                <div class="flex mt-8">
            		<div class="flex-none w-14 h-14"></div>
                    <a href="{{route('content.page',['pageID'=>'individual'])}}" class="bg-white border border-blue-800 text-lg text-blue-800  rounded mb-3 py-2 px-5 hover:text-white hover:bg-blue-800">
                        Erfahren Sie mehr
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{asset('img/frontend/Lubey_Softwarebox_Anzug.png')}}" alt="Monitoring"/>
            </div>
        </div>
    </section>

    <section class="lg:h-[22rem] bg-gradient-to-r from-[#58B56E] to-[#95CF6D] pb-20 pl-10">
        <div class="container mx-auto">
            <div class="flex items-center flex-wrap text-white">
                <div class="w-full md:w-2/3 mt-12 pr-10">
                    <h2 class="text-5xl font-semibold">CO2-Bilanz</h2>
                    <p class="text-3xl font-light mt-3">Automatisierung komplexer Berechnungen</p>
                    <p class="mt-3">
                        Mit Lubey CO2-Bilanz können Sie Nachhaltigkeitsaspekte in einem standartisierten Verfahren (Scope3 Level)
                        für Ihr Unternehmen entwickeln und ausbauen.
                    </p>
                    <p class="mt-4">
                        Wir helfen Ihnen digitale Lösungen, um eigene CO2 Emissionen messen,
                        verringern und künftig sogar in Geschäftsprozessen einpreisen zu können.
                    </p>
                </div>
                <div class="w-full md:w-1/3 mt-12">
                    <img src="{{asset('img/frontend/Recycle.png')}}" alt="Recycle" width="200"/>
                    <button class="bg-transparent hover:text-white py-2 px-4 mt-5 text-lg border rounded">
                        Erfahren Sie mehr
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-6 mt-12">
        <h1 class="text-3xl md:text-8xl text-center text-blue-800 font-bold mb-8">
           Lubey Trade
        </h1>
        <h2 class="text-center text-xl md:text-3xl text-blue-800 font-semibold">
            Der Handelplatz für alle Abfälle und Sekundärrohstoffe
        </h2>
    </section>

    <section class="container mx-auto px-6 mt-20">
        <div class="flex flex-wrap justify-center space-x-12">
            <div class="text-center">
                <img src="{{asset('img/frontend/Altpapier.png')}}" alt="Altpapier" width="110"/>
                <div class="mt-4 text-blue-800">Altpapier</div>
            </div>
            <div class="text-center">
                <img src="{{asset('img/frontend/Altmetall.png')}}" alt="Altmetall" width="110"/>
                <div class="mt-4 text-blue-800">Altmetall</div>
            </div>
            <div class="text-center">
                <img src="{{asset('img/frontend/Altholz.png')}}" alt="Altholz" width="110"/>
                <div class="mt-4 text-blue-800">Altholz</div>
            </div>
            <div class="text-center">
                <img src="{{asset('img/frontend/Schrotte.png')}}" alt="Schrotte" width="110"/>
                <div class="mt-4 text-blue-800">Schrotte</div>
            </div>
            <div class="text-center">
                <img src="{{asset('img/frontend/Kunststoffe.png')}}" alt="Kunststoffe" width="110"/>
                <div class="mt-4 text-blue-800">Kunststoffe</div>
            </div>
            <div class="text-center">
                <img src="{{asset('img/frontend/Altoel.png')}}" alt="Altoel" width="110"/>
                <div class="mt-4 text-blue-800">Altöl</div>
            </div>
            <div class="text-center">
                <img src="{{asset('img/frontend/Alttextilien.png')}}" alt="Alttextilien" width="110"/>
                <div class="mt-4 text-blue-800">Alttextilien</div>
            </div>
            <div class="text-center">
                <img src="{{asset('img/frontend/Container.png')}}" alt="Container" width="110"/>
                <div class="mt-4 text-blue-800">Diverse</div>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-6 mt-14">
        <h2 class="text-center text-3xl text-blue-800 font-light">
            Digitale <span class="font-semibold">Werkstoffvermarktung</span> mit Lubey TRADE
        </h2>
        <div class="flex flex-wrap items-center mt-5">
        	<div class="w-full lg:w-1/4">
        		<div class="flex mt-8">
                	<div class="flex-none w-14 h-14">
                		<img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                	</div>
                	<div class="flex-initial">
                		<h2 class="text-blue-800 text-xl font-semibold">Strukturierte Vergabe mit wenigen Klicks</h2>
                		<p>Automatisierte Stoffbeschreibungen, alle Angebotsbedingungen und Fristen mit nur wenigen Mausklicks erstellt.</p>
                	</div>
                </div>
                <div class="flex mt-8">
                	<div class="flex-none w-14 h-14">
                		<img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                	</div>
                	<div class="flex-initial">
                		<h2 class="text-blue-800 text-xl font-semibold">Beste Preise dank der E-Auktion</h2>
                		<p>Dynamisches Beschaffungssystem mit verdeckter E-Auktion sorgt für mehr Wettbewerb und faire Preise.</p>
                	</div>
                </div>
    		</div>
    		<div class="w-full lg:w-2/4">
        		<img class="mx-auto" src="{{asset('img/frontend/Lubey_Trade_Cloud.png')}}" alt="Cloud" width="500"/>
    		</div>
    		<div class="w-full lg:w-1/4">
        		<div class="flex mt-8">
                	<div class="flex-none w-14 h-14">
                		<img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                	</div>
                	<div class="flex-initial">
                		<h2 class="text-blue-800 text-xl font-semibold">Handelsplatz für alle Abfälle und Wertstoffe</h2>
                		<p>Gute und strukturierte Kalkulations-Grundlage. Der Bieter kann unbegrenzt viele Gebote abgeben (bis zum Zuschlag)</p>
                	</div>
                </div>
                <div class="flex mt-8">
                	<div class="flex-none w-14 h-14">
                		<img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                	</div>
                	<div class="flex-initial">
                		<h2 class="text-blue-800 text-xl font-semibold">Ideales Tool für den Entsorger</h2>
                		<p>schneller Zugriff auf alle Stoffe, automatische Benachrichtigungen und Umkreissuche, Rechtsverbindliche Verträge.</p>
                	</div>
                </div>
    		</div>
        </div>
    </section>

    <section class="container mx-auto px-6 mt-14">
        <h2 class="text-center text-3xl text-blue-800 font-light">
            Wählen Sie hier <span class="font-semibold">Ihre Branche</span> aus und <br />
            erfahren Sie mehr relevante Informationen
        </h2>
        <div class="flex flex-wrap mt-20">
            <div class="flex-col w-full xl:w-1/5 mt-10 lg:mt-0 text-left">
				<img src="{{asset('img/frontend/branche1.png')}}" alt="Städte & Kommunen" width="200"/>
                <div class="mt-7">
                    <h3 class="text-lg font-semibold text-blue-800">Städte & Kommunen</h3>
                    <p class="mb-7 mt-4 pr-5">Für Vergaben der öffentlichen Hand</p>
                    <a href="{{route('content.page',['pageID'=>'trade_1'])}}" class="bg-white border border-blue-800 text-blue-800  rounded  py-2 px-4 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                        mehr erfahren
                    </a>
                </div>
            </div>
            <div class="flex-col w-full xl:w-1/5 mt-10 lg:mt-0 text-left">
				<img src="{{asset('img/frontend/branche2.png')}}" alt="Handel" width="200"/>
                <div class="mt-7">
                    <h3 class="text-lg font-semibold text-blue-800">Handel</h3>
                    <p class="mb-7 mt-4 pr-5">Abfallvermarktungen im Einzelhandel</p>
                    <a href="{{route('content.page',['pageID'=>'trade_2'])}}" class="bg-white border border-blue-800 text-blue-800  rounded  py-2 px-4 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                        mehr erfahren
                    </a>
                </div>
            </div>
            <div class="flex-col w-full xl:w-1/5 mt-10 lg:mt-0 text-left">
				<img src="{{asset('img/frontend/branche3.png')}}" alt="Industrie" width="200"/>
                <div class="mt-7">
                    <h3 class="text-lg font-semibold text-blue-800">Industrie</h3>
                    <p class="mb-7 mt-4 pr-5">Industrie-Abfälle zum Profitcenter machen</p>
                    <a href="{{route('content.page',['pageID'=>'trade_3'])}}" class="bg-white border border-blue-800 text-blue-800  rounded  py-2 px-4 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                        mehr erfahren
                    </a>
                </div>
            </div>
            <div class="flex-col w-full xl:w-1/5 mt-10 lg:mt-0 text-left">
				<img src="{{asset('img/frontend/branche4.png')}}" alt="Entsorger" width="200"/>
                <div class="mt-7">
                    <h3 class="text-lg font-semibold text-blue-800">Entsorger</h3>
                    <p class="mb-7 mt-4 pr-5">schneller Stoffstrom-Zugriff für Entsorgungsunternehmen</p>
                    <a href="{{route('content.page',['pageID'=>'trade_4'])}}" class="bg-white border border-blue-800 text-blue-800  rounded  py-2 px-4 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                        mehr erfahren
                    </a>
                </div>
            </div>
            <div class="flex-col w-full xl:w-1/5 mt-10 lg:mt-0 text-left">
                <img src="{{asset('img/frontend/branche5.png')}}" alt="Energieerzeuger" width="200"/>
                <div class="mt-7">
                    <h3 class="text-lg font-semibold text-blue-800">Energieerzeuger</h3>
                    <p class="mb-7 mt-4 pr-5">Schneller Zugriff auf Ersatz-Brennstoffe und Rohstoffe</p>
                    <a href="{{route('content.page',['pageID'=>'trade_5'])}}" class="bg-white border border-blue-800 text-blue-800  rounded  py-2 px-4 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                        mehr erfahren
                    </a>
                </div>
            </div>
        </div>
    </section>

	<section class="h:full xl:h-[30rem] bg-[#1C77B7] mt-32 z-0">
		<div class="container h-full mx-auto z-10">
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-0 h-full text-white">
				<div class="relative h-full px-10 py-20">
					<h2 class="text-3xl md:text-5xl font-semibold">Forschung & Entwicklung</h2>
                    <p class="text-3xl font-light mt-3">Zum Beispiel das Kunststoff Analyse Projekt gemeinsam mit Fraunhofer Institut</p>
                    <button class="bg-transparent hover:text-white py-2 px-4 mt-5 border rounded">
                        Erfahren Sie mehr
                    </button>
				</div>
				<div class="hidden xl:block relative h-full">
					<div class="absolute bottom-0 right-1 w-3/4 z-20" >
              			<img class="w-full z-0" src="{{asset('img/frontend/Forschung2.png')}}" alt="group1"/>
              		</div>
				</div>
			</div>
        </div>
	</section>

    <section class="container mx-auto px-6 mt-14 mb-14 px-0 lg:px-24">
        <div class="grid grid-cols-1 xl:grid-cols-4 gap-0 h-full xl:h-[26rem] text-white">
          <div class="relative bg-gradient-to-b from-[#92CD6B] to-[#4DB069] h-80 xl:h-full p-5 z-0">
          	<h3>Lubey</h3>
          	<h2 class="relative text-3xl font-semibold z-10">INDIVIDUAL</h2>
          	<p class="relative mt-3 z-10">maßgeschneiderte Software Lösungen</p>
          	<div class="absolute bottom-0 w-64 z-0" >
          		<img class="w-full z-0" src="{{asset('img/frontend/group1.png')}}" alt="group1"/>
          	</div>
              <a href="{{route('content.page',['pageID'=>'digit'])}}" class="absolute inline-block bottom-5 right-5 z-10 bg-green-400/50 hover:text-white py-2 px-12 text-lg font-semibold mt-5 border rounded">
                  Erfahren Sie mehr
              </a>
      	  </div>
          <div class="relative bg-gradient-to-b from-[#4EAAE3] to-[#07468F] h-80 xl:h-full p-5">
          	<h3>Lubey</h3>
          	<h2 class="relative text-3xl font-semibold z-10">TRADE</h2>
          	<p class="relative mt-3 z-10">der Handelsplatz für digitale Wertstoff Vermarktung</p>
          	<div class="absolute bottom-0 w-64 z-0" >
          		<img class="w-full" src="{{asset('img/frontend/group2.png')}}" alt="group2"/>
          	</div>
              <a href="{{route('content.page',['pageID'=>'trade'])}}" class="absolute inline-block bottom-5 right-5 z-10 bg-blue-800/50 hover:text-white py-2 px-12 text-lg font-semibold mt-5 border rounded">
                  Erfahren Sie mehr
              </a>
      	  </div>
          <div class="relative bg-gradient-to-b from-[#8C589E] to-[#482F51] h-80 xl:h-full p-5">
          	<h3>Lubey</h3>
          	<h2 class="relative text-3xl font-semibold z-10">CONNECT</h2>
          	<p class="relative mt-3 z-10">intelligentes und vernetztes Abfall-Management</p>
          	<div class="absolute bottom-0 w-64 z-0" >
          		<img class="w-full" src="{{asset('img/frontend/group3.png')}}" alt="group3"/>
          	</div>
              <a href="{{route('content.page',['pageID'=>'connect'])}}" class="absolute inline-block bottom-5 right-5 z-10 bg-purple-500/50 hover:text-white py-2 px-12 text-lg font-semibold mt-5 border rounded">
                  Erfahren Sie mehr
              </a>
      	  </div>
          <div class="relative bg-gradient-to-b from-[#EEC114] to-[#FCD850] h-80 xl:h-full p-5">
          	<h3>Lubey</h3>
          	<h3 class="relative text-3xl font-semibold z-10">CONSULTING</h3>
          	<p class="relative mt-3 z-10">Beratungsleistungen zur Entsorgung und Vermarktung von Abfällen </p>
          	<div class="absolute bottom-0 w-64 z-0" >
          		<img class="w-full" src="{{asset('img/frontend/group4.png')}}" alt="group4"/>
          	</div>
              <a href="{{route('content.page',['pageID'=>'consult'])}}" class="absolute inline-block bottom-5 right-5 z-10 bg-yellow-400/50 hover:text-white py-2 px-12 text-lg font-semibold mt-5 border rounded">
                  Erfahren Sie mehr
              </a>
      	  </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#4FAAE3] to-blue-800 text-white">
		<div class="container mx-auto px-6 pt-10 pb-6 px-5">
    		<div class="flex items-center py-4">
        		<div class="flex-grow h-px bg-white"></div> 
        		<span class="flex-shrink text-3xl font-semibold px-6">NEWSLETTER</span>
                <div class="flex-grow h-px bg-white"></div>
            </div>
    		<div class="flex flex-wrap mx-auto items-baseline mt-12 w-full lg:w-10/12">
    			<div class="w-full md:w-2/5 px-10 mb-10 lg:mb-0">
    				Ihr E-Mail Adresse<br />
    				<input type="text" value="tbone" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-gray-700" placeholder="E-Mail-Adresse eintragen... "/>
                	<div class="flex mt-4">
            			<div class="flex-none">
                      		<input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                      	</div>
                      	<p class="text-white text-xs">
    						Mit meiner Anmeldung zu dem personalisierten Newsletter willige ich ein, dass personalisierte Nutzungsprofile erstellt werden, um die Ansprache, Informationen und Angebote besser auf meine persönlichen Interessen anzupassen.
                      	</p>
                    </div>
                    <div class="flex mt-4">
            			<div class="flex-none">
                      		<input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                      	</div>
                      	<p class="text-white text-xs">
    						Ich habe die Datenschutzlinien gelesen und stimme Ihnen zu.
                      	</p>
                    </div>
                    <button class="bg-transparent text-white hover:text-white py-2 px-4 mt-5 border rounded">abbonieren</button>
    			</div>
    			<div class="w-full md:w-3/5 px-10">
    				<div>Lubey Newsletter mit auf meine Bedürfnisse zugeschnittenen <br />Informationen rund um die Themen</div>
    				   				
    				<div class="overflow-x-scroll">
                        <div class="w-[32rem] flex space-x-4 mt-5">
                        	<div class="flex-none w-24">
                        		<span>Lubey</span><br />
                        		<span class="text-lg">Produkte</span>
                        	</div>
                        	<div class="flex-initial w-48">
                        		<div class="form-check">
                        		  <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                        		  <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                        			Connect
                        		  </label>
                        		</div>
                        		<div class="form-check mr-10">
                        		  <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                        		  <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                        			Trade
                        		  </label>
                        		</div>
                        	</div>
                        	<div class="flex-initial">
                        		<div class="form-check">
                        		  <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                        		  <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                        			Digitale Lösungen
                        		  </label>
                        		</div>
                        		<div class="form-check mr-10">
                        		  <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                        		  <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                        			Consulting
                        		  </label>
                        		</div>
                        	</div>
                        </div>
                        <div class="w-[32rem] flex space-x-4 mt-5">
                        	<div class="flex-none w-24">
                        		<span>Lubey</span><br />
                        		<span class="text-lg">Trade</span>
                        	</div>
                        	<div class="flex-initial w-48">
                        		<div class="form-check">
                        		  <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                        		  <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                        			Städte & Kommunen
                        		  </label>
                        		</div>
                        		<div class="form-check mr-10">
                        		  <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                        		  <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                        			Handel
                        		  </label>
                        		</div>
                        	</div>
                        	<div class="flex-initial">
                        		<div class="form-check">
                        		  <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                        		  <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                        			Industrie
                        		  </label>
                        		</div>
                        		<div class="form-check mr-10">
                        		  <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                        		  <label class="form-check-label inline-block text-white" for="flexCheckDefault">
                        			Entsorger
                        		  </label>
                        		</div>
                        	</div>
                        </div>
    				</div>
    			</div>
    		</div>
		</div>
	</section>

@endsection
