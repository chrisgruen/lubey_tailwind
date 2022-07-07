@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
	<section class="h-40 lg:h-72 bg-cover bg-hconnect z-0">
		<div class="container mx-auto px-5 pt-10 lg:pt-20">
			<p class="text-3xl lg:text-5xl font-semibold text-white">Lubey</p>
			<h2 class="text-4xl lg:text-7xl font-semibold text-white">CONNECT</h2>
		</div>
    </section>

    <section class="container relative mx-auto h-auto px-6 mt-10 xl:-mt-60 z-10 h-full mb-0">
        <div class="flex items-center flex-wrap xl:pt-36">
            <div class="w-full md:w-1/2 px-0 xl:px-14 mb-16 xl:mb-0" >
				<h3 class="text-3xl lg:text-4xl text-blue-800 font-light leading-10">
					<span class="font-semibold">Neues Zeitalter</span> - <br />
					Digitalisierung der Entsorgung und Abrechnung
				</h3>
				<p class="mt-5">
					„Connect“ digitalisiert die direkte Entsorgung und deren Abrechnung.
					Durch die Automatisierung kann die Zusammenarbeit
					zwischen Entsorgern und Erzeuger vereinfacht
					und weitaus effizienter gemacht werden.
				</p>
				<p class="mt-5">
					Connect ist in der Lage alle Entsorgungsaufträge,
					die mit Lubey Trade zustande gekommen sind, verwalten, auslösen und
 					automatisiert abrechnen zu können.
					Zusätzlich sind Erzeuger und Entsorger direkt über die Lösung
					vernetzt und können auf einfachem Wege kommunizieren.
				</p>
				<div class="mt-10 mb-10 xl:mb-0">
    				<a href="https://outlook.office365.com/owa/calendar/LubeyAG@lubey.ag/bookings/" target="_blank" class="bg-[#51ADE6] border border-blue-300 text-white rounded mb-3 py-3 px-7 text-lg hover:text-white hover:bg-blue-800">
                        <span class="font-semibold">Jetzt</span> Beratungstermin vereinbaren!
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/Frau_01.png')}}" alt="Lubey Trade"/>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#8E5BA0] to-[#482E51] text-white margin-to-top2 mt-0 pb-16 h-auto">
        <div class="container mx-auto px-6 pt-10 pb-0 px-5">
			<h2 class="text-3xl lg:text-5xl text-center">So funktioniert's</h2>
			<p class="text-center mt-5">
				Erfahren Sie anhand eines kurzen Videos wie einfach heute schon digitales und intelligentes Abfallmanagement geht
			</p>
			<div class="w-full xl:w-4/5 mx-auto bg-blue-100 mt-10 xl:mt-20">
    			<div class="relative h-0 overflow-hidden max-w-full w-full mt-10" style="padding-bottom: 56.25%">
                	<iframe
                		src="https://www.youtube.com/embed/Lu-9pwrvawk"
                		frameborder="0"
                		allowfullscreen
                		class="absolute top-0 left-0 w-full h-full">
            		</iframe>
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
                    	Für jedes Unternehmen die richtige Struktur
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2">
                        Connect ist in der Lage alle Entsorgungsaufträge, die mit Trade zustande gekommen sind, verwalten, auslösen und automatisiert abrechnen zu können.
                        Zusätzlich sind Erzeuger und Entsorger direkt über die Lösung vernetzt und können auf einfachem Wege kommunizieren.
                    </p>
                    <p class="mb-2">
                        Optional kann dies so weit ausgebaut werden, dass durch intelligente und flexible Abholauslösungen und Vernetzung mit Fahrern des Entsorgers oder seiner beauftragten Logistikpartnern Leerfahrten, bzw. Umsonst-Fahrten ganzer Fahrzeugflotten vermieden werden können.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span>Alle Entsorgungsaufträge im Blick behalten</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        Alle wichtigen Daten des über Trade geschlossenen Vertrages werden automatisch auf Connect übertragen. Mit Connect kann man direkt seine Entsorgungsaufträge einsehen, den aktuellen Status der Entsorgung prüfen, Entsorgungsrechnungen bzw. -gutschriften aufrufen und übersichtlich darstellen lassen.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span>
                    	Vollelektronisch Rechnungen bzw. Gutschriften übermitteln
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        Rechnungen und Gutschriften können entweder direkt in Connect erstellt oder mit bereits vorhandenen Softwarelösungen an die Lösung und damit an den Zahlungs- oder Gutschriften-Empfänger übermittelt werden. Durch die Automatisierung ist keine manuelle Erfassung mehr nötig, was kürzere Bearbeitungszeiten mit sich bringt und die Effizienz steigert.
                    </p>
                    <p class="mb-2">
                        Der Erzeuger kann mit Connect seine administrativen Prozesse und Belegflüsse vereinfachen und vor allem vereinheitlichen, in dem alle mit Trade abgewickelten Geschäftsabschlüsse als standardisierte E-Rechnung im X-Format, bzw. ZUGFeRD-Format vom Entsorgungsunternehmen künftig eingehen.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-4">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                    <span>
                    	Per Knopfdruck Entsorgungen auslösen
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                       	Connect hilft dabei Informationsverluste und Missverständnisse bei der Auslösung von Entsorgungsvorgängen zu vermeiden. Mit der Lösung wird dies dahingehend vereinfacht, dass mit nur einem Klick die Entsorgung für einen Abfall ausgelöst werden kann.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-5">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                    <span>
                    	Für jedes Unternehmen die richtige Struktur
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                       	Mit der Lösung kann die individuelle Struktur des Unternehmens abgebildet werden. So können Regionen oder Werke mit Mitarbeitern zugeordnet werden.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-6">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-6" aria-expanded="false" aria-controls="accordion-collapse-body-6">
                    <span>
                    	Mehr Sicherheit durch Überprüfung von Rechnungen, Gutschriften und Belegen
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                       	Connect übernimmt die automatisierte Plausibilitätsprüfung von allen Rechnungen bzw. Gutschriften. Sollten vertragliche Abweichungen festgestellt werden, so wird dies mitgeteilt. Darüber hinaus werden stichprobenartige Prüfungen der Rechnungen, Gutschriften und Belege durchgeführt. Je nach Bedarf kann Connect entweder nur die Dokumentenprüfung mit Übersendung einer monatlichen Zahlungsdatei übernehmen oder eine automatische Verbuchung beim Unternehmen durchführen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
            <div class="px-10">
                <img src="{{asset('img/frontend/Lubey_Softwarebox_Anzug.png')}}" alt="Monitoring"/>
            </div>
            <div class="px-5 xl:px-10">
                <h2 class="text-3xl text-blue-800 mt-16 lg:mt-0">
                    <span class="font-semibold">Maßgeschneiderte Lösungen - </span> <br />
                    So individuell wie Ihr Unternehmen
                </h2>
                <div class="flex items-center flex-wrap my-20">
                    <div class="w-full">
                        <div class="flex">
                            <div class="flex-none w-14 h-14">
                                <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                            </div>
                            <div class="text-gray-600 mb-8 pr-20">
                                <h4 class="text-blue-800 text-lg font-semibold">Facility-Management System 1</h4>
                                <p class="text-gray-600">
                                    Sie wollen das Abfallmanagement Ihrer Standorte, Einzelhandelsfilialen oder Werke optimal zentral verwalten?
                                    Dann können wir die für Sie passende Lösung auf der Basis von Lubey Connect entwickeln.
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-none w-14 h-14">
                                <img src="{{asset('img/frontend/Check.png')}}" width="36" alt="Check"/>
                            </div>
                            <div class="text-gray-600 mb-8 pr-20">
                                <h4 class="text-blue-800 text-lg font-semibold">Facility-Management System 2</h4>
                                <p class="text-gray-600">
                                    Sie möchten sich enger mit Ihren Partnern vernetzen und, zum Beispiel durch in Rahmenvereinbarungen festgelegten Konditionen Dienstleistungen lokal durch Ihre Mitarbeiter beauftragen, so entwickeln wir Ihnen die passende Lösung dazu.
                                </p>
                            </div>
                        </div>
                        <div class="flex mt-8">
                            <div class="flex-none w-14 h-14"></div>
                            <a href="{{route('content.page',['pageID'=>'individual'])}}" class="bg-white border border-blue-800 text-blue-800  rounded mb-3 py-3 px-5 text-lg hover:text-white hover:bg-blue-800">
                                Erfahren Sie mehr
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- COL 3 -->
    <section class="container mx-auto px-6 mt-0 mb-14 px-0 lg:px-24">
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
            <div class="relative bg-gradient-to-b from-[#4EAAE3] to-[#07468F] h-80 lg:h-full pl-10 pt-20 z-0">
                <h3>Lubey</h3>
                <h2 class="relative text-3xl font-semibold z-10 mb-3">Trade</h2>
                <a href="{{route('content.page',['pageID'=>'trade'])}}" class="relative inline-block bottom-5 z-10 bg-blue-800/50 hover:text-white hover:bg-blue-800 mt-5 py-2 px-12 text-lg font-semibold border rounded">
                    Erfahren Sie mehr
                </a>
                <div class="absolute bottom-0 right-0 z-0" >
                    <img class="w-[17.5rem]" src="{{asset('img/frontend/group2_col3.png')}}" alt="group1"/>
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

    <div class="container mx-auto mt-16">
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-3 px-5 lg-px-24 py-20">
            <div class="col-span-4 pr-10">
                <img src="{{asset('img/frontend/Entsorgungsunternehmen.png')}}" alt="Entsorgungsunternehmen"/>
            </div>
            <div class="col-span-2">
                <h2 class="text-3xl text-blue-800 mt-16 lg:mt-0">
                	Für Entsorgungsunternehmen
            	</h2>
                <p class="mt-10">
                    Lubey Connect bietet bietet Entsorgungsunternehmen einzigartige Chancen effizienter und vernetzter im Einsatzgebiet zu agieren.
                </p>
                <div class="mt-10">
                    <a href="{{route('content.page',['pageID'=>'trade_disposer'])}}" class="bg-white border border-blue-800 text-blue-800  rounded mb-3 py-3 px-5 texg-lg hover:text-white hover:bg-blue-800">
                        Erfahren Sie mehr
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
