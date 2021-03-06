@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
	<section class="h-40 lg:h-72 bg-cover bg-htrade-5 z-0">
		<div class="container mx-auto px-5 pt-10 lg:pt-20">
			<h2 class="text-3xl lg:text-5xl font-semibold text-white">Lubey<span class="text-4xl lg:text-7xl font-semibold">TRADE</span><br />
                <span class="font-light">für Entsorgungsunternehmen</span>
            </h2>
		</div>
    </section>

    <section class="container relative mx-auto -mt-48 px-6 z-10 mb-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 h-full xl:h-[60rem]">
            <div class="pt-64 pr-0 lg:pr-10">
                <h3 class="text-3xl lg:text-4xl text-blue-800 font-light leading-10 mb-10">
                    <span class="font-semibold">Mit Lubey TRADE</span> - Lernen Sie die Vorteile als Entsorger für Abfälle kennen
                </h3>
                <div class="flex">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div>
                        <h3 class="text-lg text-blue-800 font-semibold">Einfacher Zugriff auf alle Stoffe</h3>
                        <p class="mb-8">
                            Abfälle aus Handel und Industrie oder EU-Vergaben der öffentlichen Hand, bei uns finden Sie alles.
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
                            Bei uns können Sie sicher sein, dass zu jedem Geschäftsabschluss ein rechtsverbindlicher Vertrag zustande kommt.
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
                           	Lubey ist vollkommen unabhängig und frei von Einflüssen Dritter.
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
                    <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/person_disposer.png')}}" alt="Lubey Trade"/>
                    <div class="relative w-full border border-blue-800 rounded-md px-10 pt-28 pb-14 text-center text-blue-800 text-lg">
                        <img class="absolute top-4 left-1/2 transform -translate-x-1/2" src="{{asset('img/frontend/kommas.png')}}" width="100" alt="Check"/>
                        Angesichts der immer größer werdenden Stoffmengen in der Kreislaufwirtschaft müssen sich die Entsorgerbetriebe des Handels für eine umweltgerechte Abfallverwertung zu nutzen.
                        Langfristig betrachtet, wird diese Herausforderung allerdings nur durch ein starkes Netzwerk mit kompetenten Handelspartnern zu bewältigen sein.
                    	<p class="text-xs mt-5 italic">Sandra Fischer, Geschäftsleitung<br />Schatz Umwelt GmbH</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-20 mx-auto bg-subtrade-1 bg-cover bg-htrade-sub4">
        <div class="py-10">
            <div class="relative container mx-auto px-6 my-10">
            	<div class="hidden xl:block xl:absolute z-20 w-[35rem] bottom-0 left-32">
            		<img class="object-cover h-full min-w-full" src="{{asset('img/frontend/trade_entsorger1.png')}}" alt="Lubey Trade"/>
        		</div>
        		<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 text-white">
                    <div class="h-full lg:h-full">

                    </div>
                    <div class="col-span-2">
                    	<h2 class="text-3xl lg:text-4xl font-semibold py-5">Erhöhen Sie Ihre Reichweite mit Lubey</h2>
                    	<h3 class="text-3xl font-light">Zugriff auf europaweite Vergaben</h3>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mt-10 text-white">
                    <div class="h-full lg:h-full px-10 py-7 rounded">

                    </div>
                    <div class="relative bg-white text-blue-800 h-full lg:h-full px-10 py-7 rounded">
                        <img src="{{asset('img/frontend/Check.png')}}" width="45" alt="Check"/>
                        <h3 class="text-xl my-3 font-semibold">
                            Online auch per Umkreissuche
                        </h3>
                        <p>
                            (Miri) Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
                        </p>
                    </div>
                    <div class="relative bg-white text-blue-800 h-full lg:h-full px-10 py-7 rounded">
                        <img src="{{asset('img/frontend/Check.png')}}" width="45" alt="Check"/>
                        <h3 class="text-xl my-3 font-semibold">
                            Benachrichtigung bei Auftragzuschlag
                        </h3>
                        <p>
                            (Miri) Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 mt-10 gap-5 h-full lg:h-64 text-white ">
                    <div class="relative h-full lg:h-full px-10 py-7 rounded">

                    </div>
                    <div class="relative text-blue-800 h-full lg:h-full px-10 py-7 rounded">

                    </div>
                    <div class="relative bg-white text-blue-800 h-full lg:h-full px-10 py-7 rounded">
                        <img src="{{asset('img/frontend/Check.png')}}" width="45" alt="Check"/>
                        <h3 class="text-xl my-3 font-semibold">
                            Benachrichtigung bei Auftragzuschlag
                        </h3>
                        <p>
                            (Miri) Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

	@include('content.de.partials.table')

	<section class="container mx-auto w-full lg:w-[60rem] px-5 mt-10 xl:mt-20">
        <h2 class="text-3xl text-center text-blue-800 font-semibold">
           So funktioniert's
        </h2>
        <p class="text-center mx-auto mt-7 w-full lg:w-1/2">
           	Die fünf Schritte der E-Vergabe mit Auktion auf Lubey Trade
        </p>
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
        <div class="grid grid-cols-1 lg:grid-cols-2 my-10 px-0 lg:px-36">
        	<div>
        		<div class="flex my-10">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div class="pr-5 md:pr-20">
                        <h3 class="text-lg text-blue-800 font-semibold">Registrierung</h3>
                        <p class="mb-15">
                            E-Vergabe Veröffentlichung<br />
                            Bei Veröffentlichung auf Lubey.de ist die Vergabe sofort für Sie einsehbar. Auf Wunsch mit Benachrichtigung.
                        </p>
                    </div>
                </div>
                <div class="flex my-10">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div class="pr-5 md:pr-20">
                        <h3 class="text-lg text-blue-800 font-semibold">Gleichberechtigte Teilnahme</h3>
                        <p class="mb-15">
                            Uneingeschränkte Teilnahme, es gelten gleiche Chancen für Alle.
                        </p>
                    </div>
                </div>
                <div class="flex my-10">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div class="pr-5 md:pr-20">
                        <h3 class="text-lg text-blue-800 font-semibold">Erstgebot</h3>
                        <p class="mb-15">
                            Teilnahme erklären, Anforderungen beantworten und Gebot in Rekordzeit abgeben.
                        </p>
                    </div>
                </div>
                <div class="flex my-10">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div class="pr-5 md:pr-20">
                        <h3 class="text-lg text-blue-800 font-semibold">Persönlicher Support</h3>
                        <p class="mb-15">
                            In allen Prozess-Schritten können Sie Ihre Fragen an uns richten. Ganz persönlich am Telefon.
                        </p>
                    </div>
                </div>
            </div>
            <div>
            	<div class="flex my-10">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div class="pr-5 md:pr-20">
                        <h3 class="text-lg text-blue-800 font-semibold">Zulassungsprüfung</h3>
                        <p class="mb-15">
                            Gegebenenfalls können Sie unkompliziert Nachforderungen beantworten.
                        </p>
                    </div>
                </div>
                <div class="flex my-10">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div class="pr-5 md:pr-20">
                        <h3 class="text-lg text-blue-800 font-semibold">verdeckte E-Auktion</h3>
                        <p class="mb-15">
                            Sie sehen nun Ihren Bieter-Rang und Sie können, beliebig oft, weitere Gebote abgegeben.
                        </p>
                    </div>
                </div>
                <div class="flex my-10">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div class="pr-5 md:pr-20">
                        <h3 class="text-lg text-blue-800 font-semibold"> Faire Chance im Wettbewerb</h3>
                        <p class="mb-15">
                            Die verdeckte E-Auktion versetzt Sie in die Lage durch Nachbesserung Ihres Gebotes sich auf Rang 1 zu setzen.
                        </p>
                    </div>
                </div>
                <div class="flex my-10">
                    <div class="flex-none w-14 h-14">
                        <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                    </div>
                    <div class="pr-5 md:pr-20">
                        <h3 class="text-lg text-blue-800 font-semibold">Zuschlag</h3>
                        <p class="mb-15">
                            Sie können, Kraft Ihres Gebotes und durch Ihre Leistungen langfristige Aufträge und Partner gewinnen. Alles wird über rechtsverbindliche Verträge abgewickelt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 text-center">
			<a href="{{route('user.signin')}}" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white text-lg text-left rounded mb-3 py-3 px-6 hover:text-white hover:bg-blue-800">
                <span class="font-semibold mr-1">Jetzt</span> Anmelden und erleben wie einfach es geht!
            </a>
        </div>
	</section>

	<!--  Video -->
	<section class="container mx-auto w-full lg:w-[60rem] px-5 mt-5">
        <h2 class="text-3xl text-center text-blue-800 font-semibold">
           So funktioniert's
        </h2>
        <p class="text-center mx-auto mt-7 w-full lg:w-1/2">
            Erfahren Sie anhand eines kurzen Videos wie einfach es ist, sich an mit Lubey Trade erstellten Vergaben zu beteiligen.
        </p>
        <div class="relative h-0 overflow-hidden max-w-full w-full mt-10" style="padding-bottom: 56.25%">
        	<iframe
        		src="https://www.youtube.com/embed/J7r8GXwSBZ4"
        		frameborder="0"
        		allowfullscreen
        		class="absolute top-0 left-0 w-full h-full"
        	></iframe>
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#4FAAE3] to-blue-800 text-white mt-20">
        <div class="container mx-auto text-center px-6 pt-10 pb-10 px-5">
            <h2 class="text-3xl lg:text-5xl font-semibold">
               Werden Sie JETZT <img class="inline w-80" src="{{asset('img/frontend/muellionaer1.png')}}" alt="muellionaer"/>
            </h2>
            <p class="text-xl lg:text-3xl mx-auto text-center w-2/3 mt-7">
                Registrieren Sie sich auf Lubey.de <span>bis zum 30.06.2022</span>
                und erhalten Sie ein kleines Müllionär-Präsent
            </p>
            <a href="{{route('user.signup.registrieren')}}" class="inline-flex mt-5 bg-[#51ADE6] border border-blue-300 text-white text-left rounded mb-3 py-2 px-5 text-lg hover:text-white hover:bg-blue-800">
                Registrieren
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

    @include('content.de.partials.market_prices')
@endsection
