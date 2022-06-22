@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
	<section class="h-40 lg:h-72 bg-cover bg-hconsult z-0">
		<div class="container mx-auto px-5 pt-10 lg:pt-20">
			<p class="text-3xl lg:text-5xl font-semibold text-white">Lubey</p>
			<h2 class="text-4xl lg:text-7xl font-semibold text-white">CONSULT</h2>
		</div>
    </section>

    <section class="container relative mx-auto px-6 mt-10 xl:-mt-10 z-10 h-full mb-0">
        <div class="flex items-center flex-wrap">
            <div class="w-full md:w-1/2 px-0 lg:px-5 xl:pt-8">
				<h3 class="text-3xl lg:text-4xl text-blue-800 font-light leading-10">
					<span class="font-semibold">Expertise vorort</span> - <br />
					Unsere Abfall-Experten unterstützen Sie mit kompetenter Beratung in Ihrem Betrieb
				</h3>
				<p class="mt-5">
					Lubey bietet speziell für mittlere und große Unternehmen
					Beratungsleistungen von der Prozessoptimierung in Betrieben, bis zur Vermarktung
					von Abfällen an. Erfahrene Experten unterstützen Sie Vorort an Ihren
					Standorten rund um das Thema Entsorgung und Nachhaltigkeit.
					Dabei beraten wir Sie nicht nur zu Umweltaspekten, Sicherheit und
					Abfallrechtlichen Bestimmungen, sondern auch zu den ökonomischen
					Potentialen, die in Ihrem Abfall stecken.
				</p>
				<div class="mt-10">
    				<a href="#" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white text-left rounded mb-3 py-3 px-5 text-lg hover:text-white hover:bg-blue-800">
                        <span class="font-semibold mr-1">Jetzt</span>Beratungstermin vereinbaren!
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/Consult3.png')}}" alt="Lubey Trade"/>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#EFC313] to-[#FCDA50] mt-0">
        <div class="container mx-auto px-6 pt-0 pb-0 px-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                <div class="hidden xl:block pt-0 px-20">
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
                                <h4 class="text-xl font-semibold mb-4">Erkennung von Digitalisierungspotential </h4>
                                <p>
                                    Wir analysieren mit Ihnen Ihre Zielsetzungen, vorhandene Bestandssysteme, deren Schnittstellen und die Bedürfnisse der Anwender für optimale Prozesse.
									So beraten wir Sie exakt zu dem, was Sie wirklich benötigen und können gleich die passende Lösung dazu entwickeln.
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-none w-14 h-14">
                                <img src="{{asset('img/frontend/check_white.png')}}" width="36" alt="Check"/>
                            </div>
                            <div class="mb-8">
                                <h4 class="text-xl font-semibold mb-4">Mehr Nachhaltigkeit mit automatisierten CO² Bilanzen</h4>
                                <p>
                                    Wir helfen Ihnen die passende Lösung zu finden oder zu entwickeln, um eigene
									C02 Emissionen messen, verringern und künftig sogar in Geschäftsprozessen einpreisen zu können
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
                    	Gesetzliche Bestimmungen effizienter erfüllen
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2">
                    	Unsere Experten unterstützen Sie mit kompetenter Beratung zum Einhalten von gesetzlichen und betrieblichen Abfall-Bestimmungen und bei der Analyse und Optimierung von Entsorgungsprozessen. Wir erkennen Risiken und Potentiale und beraten Sie in der gesamten Prozesskette Ihrer Stoffströme, von der Abfallerzeugung bis zur Abfallvermarktung.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span>Ausschreibungen zu Wertstoffen und Entsorgungs-Dienstleistungen meistern</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        Machen Sie mit uns Ihre Abfallentsorgung zum Profitcenter. Wir bringen unsere langjährige Erfahrung mit der Betreibung Deutschlands erster Handelsplattform für alle Abfallfraktionen in Ihr Unternehmen ein. Wir beraten Sie bis ins kleinste Detail zu Ausschreibungskriterien, Vermarktungsanalysen und Vertragsbestandteilen. Das macht Ihre Vergaben sicher und wirtschaftlich erfolgreicher. Wir verstehen unsere Leistung als Begleitberatung im Bereich Business Deveopment.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span>
                    	Erkennung von Digitalisierungspotentialen
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                       	Heutige und künftige Ansprüche an Belegführung, digitale Vernetzung und sichere Prozessketten werden immer höher. Auch Nachhaltigkeitsaspekte verlangen nach guten digitalen Konzepten. Wir begleiten Sie in Ihrer digitalen Transformation und erkennen für Sie die Potentiale zur Optimierung Ihrer Prozessketten. Wir helfen Ihnen komplexe Prozesse
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-4">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                    <span>
                    	Mehr Nachhaltigkeitsaspekte integrieren
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                       	Wir helfen Ihnen eigene Nachhaltigkeits-Standards zu entwickeln und damit auch ökonomische Vorteile zu erzielen. Zum Beispiel mit Lösungen für automatisierte C02-Bilanzen oder ähnlichen komplexen Berechnungen.  Mit Lubey können Sie
						Nachhaltigkeitsaspekte in einem standardisierten Verfahren (Scope 1-3 Level) für Ihr Unternehmen entwickeln und ausbauen.
						Wir helfen Ihnen mit digitalen Lösungen, um eigene C02 Emissionen messen, verringern und künftig sogar in Geschäftsprozessen einpreisen zu können.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto mt-0 lg:mt-5">
        <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 px-10">
                <h3 class="text-4xl text-blue-800 font-light leading-10">
                    <span class="font-semibold">Lubey Individual</span> - <br />
                    Wo Standard aufhört, fängt Zufriedenheit an
                </h3>
                <p class="mt-5">
                    Wir sind überzeugt, dass erfolgreiche Software Lösungen nur individuell entwickelt werden können.
					Wir entwickeln für Sie die Lösung die Ihnen hilft Prozesse zu meistern und um sich im Markt zu differenzieren.
                </p>
                <div class="mt-10">
                    <a href="#" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white rounded mb-3 py-3 px-5 text-left hover:text-white hover:bg-blue-800">
                        <span class="font-semibold mr-1">JETZT</span> einen Beratungstermin vereinbaren
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
                <a href="{{route('content.page',['pageID'=>'individual'])}}" class="relative inline-block bottom-5 z-10 bg-green-400/50 hover:text-white mt-5 py-2 px-12 text-lg font-semibold border rounded">
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
