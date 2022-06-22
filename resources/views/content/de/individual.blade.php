@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
	<section class="h-40 lg:h-72 bg-cover bg-hdigit z-0">
		<div class="container mx-auto px-5 pt-10 lg:pt-20">
			<p class="text-3xl lg:text-5xl font-semibold text-white">Lubey</p>
			<h2 class="text-4xl lg:text-7xl font-semibold text-white">INDIVIDUAL</h2>
		</div>
    </section>

    <section class="container relative mx-auto mt-10 xl:-mt-20 px-6 z-10 mb-20">
        <div class="flex items-center flex-wrap">
            <div class="w-full md:w-1/2 px-0 lg:px-14 xl:pt-24">
				<h3 class="text-3xl lg:text-4xl text-blue-800 font-light leading-10">
					<span class="font-semibold">Digitale Lösungen</span> - Wo Standard aufhört, fängt Zufriedenheit an
				</h3>
				<p class="mt-5">
					Wir sind überzeugt, dass erfolgbringende Software Lösungen nur individuell entwickelt werden können.
					Jedes Unternehmen ist einzigartig und in seinem jeweiligen eigenen Prozess der digitalen Transformation.
					Wir analysieren mit Ihnen Ihre Zielsetzungen, vorhandene Bestandssysteme, deren Schnittstellen und die Bedürfnisse der Anwender für optimale Prozesse.
					So beraten wir Sie exakt dem, was Sie wirklich benötigen und entwickeln die Lösung passende Lösung dazu.
				</p>
				<div class="mt-10">
    				<a href="#" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white text-left rounded mb-3 py-3 px-5 text-lg hover:text-white hover:bg-blue-800">
                        <span class="font-semibold mr-1">Jetzt</span>Beratungstermin vereinbaren!
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
                                <h4 class="text-xl font-semibold mb-4">Integration in Bestandssysteme</h4>
                                <p>
                                    wir entwickeln für Sie Anwendungen, die fließend in bestehende Prozesse eingebunden werden können, unter Berücksichtigung Ihrer Kundenbedürfnisse.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto mt-20 px-5">
        <h2 class="text-3xl text-blue-800 font-light text-center">
            <span class="font-semibold">Raus aus dem Chaos</span> - Mit unseren Lösungen <br />
            sind Inkompatibilität & Hoher Personalaufwand Geschichte
        </h2>
    </div>

    <div class="container mx-auto mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-3 px-5">
            <div class="col-span-2">
                <h2 class="text-3xl font-semibold mb-5 text-blue-800">IST-Situation</h2>
                <p>
                	Wer kennt das nicht: Viele unserer Auftraggeber klagen über Lösungen die in die Jahre gekommen sind und über Inkompatibilität Ihrer Anwendungen.
					Der Arbeitsaufwand und Prozessfluss wird nicht immer digitaler und einfacher, sondern bestenfalls hybrid und meist immer träger.
					Gleichzeitig werden eigene Anforderungen und gesetzliche Pflichten aber auch die Kundenerwartungen immer komplexer.
					Man behilft sich oft mit dem Erstellen und Versenden von Tabellen oder einfach mit doppelten Arbeitsaufwand.
					Das bindet unnötig Zeit und Personalressourcen.
                </p>
            </div>
            <div class="col-span-4">
                <img src="{{asset('img/frontend/individual_ist.png')}}" width="w-full" alt="Lubey Ist"/>
            </div>
        </div>
    </div>

    <div class="container mx-auto my-20">
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-3 h-full xl:h-[28rem] px-5">
            <div class="relative col-span-4 px-5 xl:px-20">
                <div class="relative xl:absolute top-0 xl:-top-16 xl:right-16">
                    <img class="w-full xl:h-[32rem]" src="{{asset('img/frontend/individual_lubey.png')}}" alt="mit Lubey"/>
                </div>
            </div>
            <div class="col-span-2">
                <h2 class="text-3xl font-semibold mb-5 text-blue-800">MIT Lubey</h2>
                <p>
					Wir beraten Sie, wie Sie Ihre Bestandsysteme optimieren, zentralisieren und effizienter nutzen.
					Egal, ob eine Schnittstellen fehlt oder eine ganze ERP Lösung, wir entwickeln es für Sie maßgescheidert.
                </p>
                <div class="mt-10 text-lg">
                    <a href="#" class="bg-[#51ADE6] border border-blue-300 text-white rounded mb-3 py-3 px-5 hover:text-white hover:bg-blue-800">
                        <span class="font-semibold">JETZT</span> Termin vereinbaren
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- CO2 Bilanz -->
    <section class="lg:h-[22rem] bg-gradient-to-r from-[#58B56E] to-[#95CF6D] pb-20 pl-5 lg:pl-10">
        <div class="container mx-auto">
            <div class="flex items-center flex-wrap text-white">
                <div class="w-full md:w-2/3 mt-12 pr-5 lg:pr-10">
                    <h2 class="text-3xl lg:text-5xl font-semibold">CO²-Bilanz</h2>
                    <p class="text-xl lg:text-3xl font-light mt-3">Automatisierung komplexer Berechnungen</p>
                    <p class="mt-3">
                        Mit Lubey CO²-Bilanz können Sie Nachhaltigkeitsaspekte in einem standartisierten Verfahren (Scope3 Level)
                        für Ihr Unternehmen entwickeln und ausbauen.
                    </p>
                    <p class="mt-4">
                        Wir helfen Ihnen digitale Lösungen, um eigene CO² Emissionen messen,
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

    <div class="container mx-auto mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
            <div class="px-10">
                <img src="{{asset('img/frontend/individual_lubey_loesung.png')}}" alt="Lubey Lösung"/>
            </div>
            <div class="px-10 mt-10 lg:mt-0">
                <h2 class="text-3xl text-blue-800">
                    <span class="font-semibold">Abfall Management</span> - mit vielen Standorten <br />
                </h2>
                <p class="mt-16">
                    Egal welche Branche; Viele Standorte = viele Dienstleister = vielfältige Prozesse und Formate.
					Oft fehlen in der Verwaltung wichtige Daten und Belege zur zentralen Auswertung,
                </p>
            </div>
        </div>
    </div>

    <section class="container mx-auto mt-10 pt-5 xl-pt-10 px-5">
    	<div class="flex items-center py-4">
    		<div class="flex-grow h-px bg-gray-400"></div>
    		<span class="flex-shrink text-blue-800 text-3xl lg:text-5xl px-6">Alle Vorteile im Überblick</span>
            <div class="flex-grow h-px bg-gray-400"></div>
        </div>
    </section>

    <section class="container mx-auto px-6 pt-10 pb-6 px-5 lg:px-24">
        <div id="accordion-collapse" data-accordion="open">
            <h2 id="accordion-collapse-heading-1">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 rounded-t-xl border border-b-0 border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span>
                    	Lösungen, immer maßgeschneidert für Ihre Bedürfnisse.
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2">
                        Unser Motto: Von der Stange gibt es bei uns nicht! Schildern Sie uns Ihre Herausforderung und wir kümmern uns um die richtige Lösung. Egal, ob Sie eine bessere Schnittstelle zwischen Ihren digitalen Bestandssystemen brauchen oder eine Neues ERP System, wir helfen Ihnen mit für Sie maßgeschneiderten Lösungen und machen Sie damit einzigartiger, erfolgreicher und agiler im Markt. Wir verstehen nicht nur viel von Software, sondern auch von Abfällen, Wertstoffen und deren Kreislauf. Denn digitale Entsorgung ist unser Metier.
						Deshalb hört unsere Beratung nicht nach der Software auf. Wir können Erzeuger auch zur richtigen Abfallbehandlung vor Ort, Abfall-Vermarktung und Prozessoptimierung mit Ihren Dienstleistern beraten. Entsorgungsunternehmen vertrauen uns, weil wir Ihre Prozesse bis ins kleinste Detail kennen.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span>Hohe Fach-Kompetenz in allen Entsorgungs-Prozessen</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        dito letzter Block Punkt 1, Ergänzend: Mit den Erfahrungen von unserem Handelsplatz Lubey Trade, kennen wir die Prozesse, Chancen und Herausforderungen sowohl von der Erzeugerseite, als auch aus der Perspektive des Entsorgers und Verwerters.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span>
                    	Wir helfen Ihnen sich im Markt zu differenzieren
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        Automatisierte Lösungen, zugeschnitten nach Ihren Bedürfnissen, machen Sie nicht nur agiler im Markt und effizienter in Ihren Prozessen, Ihre Geschäftspartner und Mitarbeiter werden es vor allem auch beachten und zu schätzen wissen. Digitale Kompetenz und Exzellenz macht wird Sie vom Wettbewerb unterscheiden und für künftige Partner und Mitarbeiter attraktiver machen.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-4">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                    <span>
                    	Wir verstehen uns als Schnellboot in Sachen Software Entwicklung
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                       	Auch wenn unsere Lösungen individuell für Sie entwickelt werden und quasi ein Unikat darstellen, bedeutet das nicht, dass sie lange auf die Lieferung warten müssen. In der Regel sind unsere Lösungen in 3-4 Monaten Einsatzbereit. Umso klarer Sie Ihren IST- und Soll-Zustand beschreiben können, desto zielorientierter und schneller können wir für Sie entwickeln.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-5 mt-20">
        <h2 class="text-3xl text-blue-800 text-center mb-16 font-light">
            <span class="font-semibold">Die Zukunft auf Ihre Bedürfnisse angestimmt</span> - mit unseren Lösungen<br />
            sind Inkompatibilität & Hoher Personalaufwand Geschichte
        </h2>
        <div class="mt-10 text-lg text-center px-5">
            <a href="#" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white rounded mb-3 py-3 px-5 text-left hover:text-white hover:bg-blue-800">
                <span class="font-semibold mr-1">JETZT</span> einen Beratungstermin vereinbaren
            </a>
        </div>
    </div>

    <!-- COL 3 -->
    <section class="container mx-auto px-6 mt-20 mb-14 px-0 lg:px-24">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 h-full lg:h-80 text-white">
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
@endsection
