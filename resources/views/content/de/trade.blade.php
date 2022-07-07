@extends('layouts.frontend_tailwind')
@section('description')Bei Lubey Trade trifft sich die gesamte Branche. Hier können Sie kostenlose E-Vergaben und Auktionen erstellen, um den Bestpreis für Ihre Stoffe zu erzielen.@endsection
@section('content')
    <section class="h-40 lg:h-72 bg-cover bg-htrade z-0">
        <div class="container mx-auto px-5 pt-10 lg:pt-20">
            <p class="text-3xl lg:text-5xl font-semibold text-white">Lubey</p>
            <h2 class="text-4xl lg:text-7xl font-semibold text-white">TRADE</h2>
        </div>
    </section>

    <section class="container relative mx-auto h-full px-6 mt-10 xl:-mt-40 z-10 h-full mb-0">
        <div class="flex items-center flex-wrap">
            <div class="w-full md:w-1/2 px-0 lg:px-14">
                <h3 class="text-3xl lg:text-4xl text-blue-800 font-light leading-10">
                    <span class="font-semibold">Lubey TRADE</span> - macht den
                    Handel mit Abfällen einfacher,
                    effizienter und sicherer
                </h3>
                <p class="mt-5">
                    Darüber hinaus lassen sich gute wirtschaftliche Effekte erzielen. Über unterschiedliche Vermarktungswege und Vermarktungsformen
                    findet jedes abfallerzeugende Unternehmen den richtigen Entsorger. Folgende Highlights erwarten den Nutzer bei Lubey Trade:
                </p>
                <div class="mt-10 mb-10 xl:mb-0">
                    <a href="{{route('user.signin')}}" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white text-left rounded mb-3 py-3 px-5 text-lg hover:text-white hover:bg-blue-800">
                        <span class="font-semibold mr-1">Jetzt</span>Anmelden und erleben wie einfach es geht!
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/Character_01.png')}}" alt="Lubey Trade"/>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-blue-800 to-[#4FAAE3] text-white mt-0">
        <div class="container mx-auto py-16 px-0">
            <h2 class="text-center text-3xl text-white">
                Nutzen Sie die Lubey TRADE <span class="font-semibold">für Vorteile Ihrer Branche</span>
            </h2>

            <div class="flex flex-wrap mt-16">
                <div class="relative w-full lg:w-1/5 mb-10 lg:mb-0 px-2 pb-10 flex flex-col">
                    <img class="object-cover" src="{{asset('img/frontend/branche1.png')}}" alt="Städte & Kommunen" />
                    <div class="mt-7">
                        <h3 class="text-lg font-semibold">Städte & Kommunen</h3>
                        <p class="mb-7 mt-4">Für Vergaben der öffentlichen Hand</p>
                        <a href="{{route('content.page',['pageID'=>'trade_communes'])}}" class="absolute bottom-3 inline-block bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
                            mehr erfahren
                        </a>
                    </div>
                </div>
                <div class="relative w-full lg:w-1/5 mb-10 lg:mb-0 px-2 pb-10 flex flex-col">
                    <img class="object-cover" src="{{asset('img/frontend/branche2.png')}}" alt="Handel" />
                    <div class="mt-7">
                        <h3 class="text-lg font-semibold">Handel</h3>
                        <p class="mb-7 mt-4">Abfallvermarktungen im Einzelhandel</p>
                        <a href="{{route('content.page',['pageID'=>'trade_trade'])}}" class="absolute bottom-3 inline-block bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
                            mehr erfahren
                        </a>
                    </div>
                </div>
                <div class="relative w-full lg:w-1/5 mb-10 lg:mb-0 px-2 pb-10 flex flex-col">
                    <img class="object-cover" src="{{asset('img/frontend/branche3.png')}}" alt="Industrie" />
                    <div class="mt-7">
                        <h3 class="text-lg font-semibold">Industrie</h3>
                        <p class="mb-7 mt-4">Industrie-Abfälle zum Profitcenter machen</p>
                        <a href="{{route('content.page',['pageID'=>'trade_industry'])}}" class="absolute bottom-3 inline-block bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
                            mehr erfahren
                        </a>
                    </div>
                </div>
                <div class="relative w-full lg:w-1/5 mb-10 lg:mb-0 px-2 pb-10 flex flex-col">
                    <img class="object-cover" src="{{asset('img/frontend/branche4.png')}}" alt="Entsorger" />
                    <div class="mt-7">
                        <h3 class="text-lg font-semibold">Entsorger</h3>
                        <p class="mb-7 mt-4">schneller Stoffstrom-Zugriff für Entsorgungsunternehmen</p>
                        <a href="{{route('content.page',['pageID'=>'trade_disposer'])}}" class="absolute bottom-3 inline-block bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
                            mehr erfahren
                        </a>
                    </div>
                </div>
                <div class="relative w-full lg:w-1/5 mb-10 lg:mb-0 px-2 pb-10 flex flex-col">
                    <img class="object-cover" src="{{asset('img/frontend/branche5.png')}}" alt="Energieerzeuger" />
                    <div class="mt-7">
                        <h3 class="text-lg font-semibold">Energieerzeuger</h3>
                        <p class="mb-7 mt-4 pr-5">Schneller Zugriff auf Ersatz-Brennstoffe und Rohstoffe</p>
                        <a href="{{route('content.page',['pageID'=>'trade_energy'])}}" class="absolute bottom-3 inline-block bg-transparent border border-white text-white  rounded  py-2 px-4 tracking-wider hover:text-white hover:bg-blue-800">
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
        <p class="text-center mx-auto mt-7 w-full lg:w-1/2">
            Die Schritte einer E-Vergabe mit dem dynamischen Beschaffungs-System der verdeckten E-Auktion sind hier zusammengefasst.
        </p>
        <div class="w-full md:w-2/3 mx-auto mt-12">
            <img class="object-cover h-full min-w-full" src="{{asset('img/frontend/Lubey_Trade_Anbieter.png')}}" alt="Lubey Trade Anbieter" />
        </div>
    </section>

    @include('content.de.partials.table')

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
                    	Für jedes Unternehmen die richtige Vermarktungsform
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2">
                        Lubey Trade kann Branchenübergreifend eingesetzt werden und bietet branchenunabhängig allen Teilnehmern effizientere Abfall-Vermarktungen und meist wirtschaftlich bessere Ergebnisse. Egal, ob Einzelhandel, Industrie-Erzeuger, Pharmakonzern oder Sammler und Sortierer, alle können, je nach Stoffstrom und Mengen, große Vorteile erzielen.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span>Komplexe Vermarktungen per E-Vergabe ganz leicht bewältigen</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        Selbst inhaltlich komplexeste Ausschreibungen können durch Intuitive und komfortable Bedienung mittels automatisierten Vorauswahlen in kürzester Zeit mit wenigen Mausklicks unkompliziert erstellt werden und die Abfallrechtlichen Bestimmungen und Gesetze sind dabei automatisch schon berücksichtigt und auf dem neuesten Stand. Die mit Lubey Trade erstellten und veröffentlichten Vergaben werden alle in einer einheitlichen und gut strukturierten Form abgebildet. Bieter schätzen die mit der Lubey Trade Lösung erstellte einheitliche Struktur, müssen diese doch nicht, wie sonst üblich, sich durch die unterschiedlichsten Vergabe-Stile arbeiten.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span>
                    	Mit der verdeckten E-Auktion zu besseren Preisen
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        Die Vermarktung endet in einer verdeckten E-Auktion. Diese dynamische Beschaffungsmethode ist dem Erstgebot angeschlossen und wird nach mehrtägigem Auktionsprozess durch  durch die Zuschlagprüfung des Erzeugers abgeschlossen. In der verdeckten E-Auktion können die Bieter nur Ihre Rangabfolge einsehen und ihr Erstgebot beliebig verbessern. Hier entsteht, je nach Anzahl teilnehmender Bieter und Anzahl der Gebote, eine hohe Dynamik durch anonymen Wettbewerb, was wiederum zu meist wirtschaftlich besseren Preisen führt. Jeder zugelassene Bieter hat die Möglichkeit sich im anonymen Wettbewerb  sich mit seinem Gebot auf die höchste Rangfolge der Auktion zu katapultieren und diese ggbf. zu halten.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-4">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                    <span>
                    	Per Knopfdruck standardisierte Verträge
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        Alle Vertragsbestandteile und Leistungsbeschreibungen werden automatisch erstellt und sind zum Abschluss der Vergabe-Erstellung  einsehbar. Diese können vor Veröffentlichung geprüft, übernommen, gänzlich oder in Teilen weggelassen oder ergänzt werden. Die Struktur dieser Verträge wurde mit führenden, praktizierenden Fachanwälten im Vergaberecht erarbeitet. Die Inhalte sind treffend und klar formuliert. Der Erzeuger spart sich ggbf. bisherige externe Dienstleistungen und viel Zeit.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-5">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                    <span>
                    	Alle Details zusammengefasst in revisionssicheren Reports
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        Lubey Trade dokumentiert dem Erzeuger automatisch im „Sales Cockpit“ alle wesentlichen Ergebnisse der Vergabe. Prüfergebnisse, Nachweise, Erstgebote, E-Auktions Gebote un  Preisschritte werden übersichtlich und revisionssicher festgehalten.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-6">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-6" aria-expanded="false" aria-controls="accordion-collapse-body-6">
                    <span>
                    	Die Stoffe finden, die man sucht
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                        Der Bieter kann mit Lubey Trade mit wenigen Mausklicks an unterschiedlichen E-Vergaben teilnehmen, Gebote abgeben und (mit der E-Auktion) nachbessern. Er kann zudem in Rekordzeit alle wesentlichen Bestandteile erfassen und hat dadurch eine ideale Voraussetzung für seine Kalkulation. Von der privat-rechtlichen Vergaben aus Industrie und Handel bis zur großen EU-Vergabe der öffentlichen Hand.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-7">
                <button type="button" class="flex justify-between items-center p-5 w-full text-xl text-left text-gray-500 border border-gray-200 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-7" aria-expanded="false" aria-controls="accordion-collapse-body-7">
                    <span>
                    	Weitere Highlights
                	</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-7">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2">
                    <ul class="list-decimal pl-5">
                        <li>
                            <span class="font-semibold">Vergaberechtskonforme E-Vergabe</span><br />
                            Trade ist so konzipiert, dass die Vergabegesetze, die bei öffentlich-rechtlichen Ausschreibungen von Abfällen und Wertstoffen zu beachten sind, erfüllt werden. Auch hochkomplexen EU-Vergaben können über Trade durchgeführt werden.
                        </li>
                        <li>
                            <span class="font-semibold">Stoffpreise per Festpreis oder Indexkopplung</span><br />
                            Der Erzeuger kann bei Ausschreibungserstellung auswählen, ob der Stoff als Festpreis oder als indexbasierter Preis angeboten und abgerechnet wird. Diese Möglichkeit bietet allen Beteiligten das größtmögliche Maß an Sicherheit.
                        </li>
                        <li>
                            <span class="font-semibold">Auto-Fehler-Indikationen</span><br />
                            Das System macht den Anwender aufmerksam auf Fehler bei der Eingabe. Daher kommt es nur sehr selten zu Anwendungsfehlern. Dieser Sicherheitsaspekt hat zum Beispiel bei betriebsinternen Verfahrens-Fristen eine sehr hohe Relevanz.
                        </li>
                        <li>
                            <span class="font-semibold">CO² Footprints mit einbeziehen</span><br />
                            CO² Footprints können wahlweise zum Bestandteil der Vermarktung gemacht und auch eingepreist werden. Dies beinhaltet die Bemessung von CO² Emissionen des Transportes, als auch (optional) die Verrechnung von CO² Emissionen (Gutschriften) in der thermischen Verwertung.
                        </li>
                        <li>
                            <span class="font-semibold">Revisionssichere Dokumentation</span><br />
                            Die Lösung dokumentiert automatisch im „Sales Cockpit“ alle wesentlichen Ergebnisse der Vergabe und E-Auktion (Gebote, Preisschritte etc) übersichtlich und revisionssicher. Der Report ist jederzeit abrufbar.
                        </li>
                        <li>
                            <span class="font-semibold">automatische und selektive Veröffentlichung</span><br />
                        </li>
                    </ul>
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

    <section class="bg-gradient-to-b from-[#4FAAE3] to-blue-800 text-white my-20">
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

    @include('content.de.partials.market_prices')
@endsection
