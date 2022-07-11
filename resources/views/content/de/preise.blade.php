@extends('layouts.frontend_tailwind')
@section('title')
    @lang('messages.prices')
@endsection
@section('description')Faire Preise und eine transparente Gestaltung der Vermarktung. Nutzen Sie Ihre Chance mit Lubey.@endsection

@section('content')
	<section class="h-38 md:h-54 bg-blue-800">
		<div class="container mx-auto px-6 py-10 text-white">
			<h2 class="text-3xl md:text-5xl font-semibold">Lubey AG</h2>
			<h2 class="text-2xl md:text-3xl">Preise</h2>
		</div>
    </section>

    <section class="container mx-auto my-5 p-5">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-7">
        	<!-- Lubey Trade -->
            <div>
                <h2 class="text-3xl font-semibold text-blue-800">Lubey Trade</h2>
                <h4 class="text-lg font-semibold mb-10">Funktionsumfang</h4>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Ausschreiben von längerfristigen Entsorgungsverträgen per E-Vergabe
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        mehrere Abfallstoffe gleichzeitig als Lose vermarkten
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Spot-Auktion zur schnellen Vermarktung von kleineren Abfallmengen mit Sofortkaufmöglichkeit
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Bestpreisauktion mit Ampel- oder Rangfolgenmechanismus
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Auktionieren von Abfällen per Effektivpreis oder Aufschlag bzw. Abschlag auf einen festgelegten Index
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Festlegen einer Preisgrenze als Schutz vor ungewollten Geboten
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Stellen von Anforderungskriterien an den Entsorger
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        strukturierte und standardisierte Eingabemasken zur Stoffbeschreibung
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        unterschiedliche Möglichkeiten zur Festlegung von Abhol- und Lieferbedingungen sowie Gebindestellung
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Umsetzung des 4-Augen-Prinzips bei der E-Vergabe
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Automatische Generierung von Vertragsunterlagen (Vertragsbedingungen, Angebotsbedingungen und Leistungsverzeichnis)
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Revisionssichere Reports
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Vergaberechtskonforme Vergabe für öffentlich-rechtliche Anbieter
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Automatische Mitteilungen im Nutzerkonto und per Mail
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Schnelle und einfache Suchfunktion mit Umkreissuche per Postleitzahl sowie Speicherungsmöglichkeiten
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Festlegung von Favoriten
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Bewertung und Sperrung von Mitgliedern
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Unterkonten für Mitarbeiter
                    </p>
                </div>
                <div>
                	<p class="text-lg font-semibold mb-2">Registrierung und Nutzung</p>
                	<p>Das Erstellen eines Nutzerkontos sowie dessen monatliche Nutzung ist kostenlos</p>
                </div>
                <div class="mt-5">
                	<p class="text-lg font-semibold mb-2">E-Vergaben und Spot-Auktionen</p>
                	<p class="mb-2">Für die Erstellung von E-Vergaben und Spot-Auktionen fallen für den Anbieter auf Lubey Trade keinerlei Kosten an.</p>
                	<p class="mb-2">Nach erfolgreichem Abschluss eines Hauptvertrages wird von der Lubey AG ein Transaktionsentgelt erhoben. Der Anbieter kann bei der Vergabeerstellung entscheiden, ob er dieses selber zahlt, oder ob der Bieter es zu zahlen hat.</p>
                	<p class="mb-2">Der Nutzer erhält hierzu eine Rechnung.</p>
                </div>
                <div class="mt-5">
                	<p class="text-lg font-semibold mb-2">Berechnung und Höhe des Transaktionsentgeltes</p>
                	<p class="mb-2">Bei E-Vergaben und Spot-Aktionen beträgt das Transaktionsentgelt 1,9 Prozent des sich ergebenden Gesamtgeschäftsvolumens, allerdings fällt immer ein Mindesttransaktionsentgelt pro angefangene Tonne an. Dieses steht in Abhängigkeit zur Klassifizierung des jeweiligen Stoffes sowie der angebotenen Menge (siehe Tabelle). Das Gesamtgeschäftsvolumen entspricht dabei dem gebotenen Preis.</p>
                	<p class="mb-2">Bei öffentlich-rechtlichen Vergaben entspricht das Gesamtgeschäftsvolumen dem geschätzten Netto-Gesamtwerts des jeweiligen Loses.</p>
                	<p class="mb-2">Bei Vergaben mit mehreren Losen wird das Transaktionsentgelt pro Los berechnet.</p>

                    <div class="w-full relative overflow-x-auto">
                        <table class="table-auto mt-5">
                            <thead>
                            <tr class="border-b">
                                <th class="text-left w-1/2 px-2 align-bottom">Angebotene Menge pro E-Auktion bzw. pro Los</th>
                                <th class="text-left px-2 align-bottom">Mindesttransaktionsentgelt pro angefangene Tonne bei Standardstoffklassen</th>
                                <th class="text-left px-2 align-bottom">Mindesttransaktionsentgelt pro angefangene Tonne bei Sonderstoffklassen</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="px-2 whitespace-nowrap">0 bis 24 t</td>
                                <td class="px-2 whitespace-nowrap">4,95 €</td>
                                <td class="px-2 whitespace-nowrap">1,95 €</td>
                            </tr>
                            <tr>
                                <td class="px-2 whitespace-nowrap">24,01 bis 100 t</td>
                                <td class="px-2 whitespace-nowrap">3,95 €</td>
                                <td class="px-2 whitespace-nowrap">1,45 €</td>
                            </tr>
                            <tr>
                                <td class="px-2 whitespace-nowrap">100,01 bis 1000 t</td>
                                <td class="px-2 whitespace-nowrap">2,95 €</td>
                                <td class="px-2 whitespace-nowrap">1,15 €</td>
                            </tr>
                            <tr>
                                <td class="px-2 whitespace-nowrap">1000,01 bis 5000 t</td>
                                <td class="px-2 whitespace-nowrap">1,95 €</td>
                                <td class="px-2 whitespace-nowrap">0,85 €</td>
                            </tr>
                            <tr>
                                <td class="px-2 whitespace-nowrap">ab 5000 t</td>
                                <td class="px-2 whitespace-nowrap">1,70 €</td>
                                <td class="px-2 whitespace-nowrap">0,55 €</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="text-xs mt-2">Preise gültig für Auktionen und Vergaben mit Veröffentlichung ab dem 25.11.2019<br />Alle hier aufgeführten Preise sind Netto-Preise.</div>
               		<div class="mt-5">
               			Folgende Stoffklassen sind Sonderstoffklassen:
               			<ol class="list-decimal ml-5 mt-2">
                          <li>Bauschutt- und Baumischabfälle</li>
                          <li>Bioabfälle</li>
                          <li>Gipsabfälle</li>
                          <li>Reifen</li>
                          <li>Siedlungsabfälle</li>
                          <li>Stäube/Aschen/Schlacken/Schlämme</li>
                        </ol>
               		</div>
                </div>
            </div>

            <!-- Lubey Connect -->
            <div>
                <h2 class="text-1xl lg:text-3xl font-semibold text-blue-800">Lubey Connect</h2>
                <h4 class="text-lg font-semibold mb-10">Funktionsumfang für abfallerzeugende Unternehmen</h4>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Verwalten der Unternehmenstruktur (Regionen mit Märkten, Filialen oder Werken sowie dazugehörige Mitarbeiter)
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Verträge einsehen und bearbeiten
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Entsorgungsaufträge auslösen
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Entsorgungsrechnungen einsehen und empfangen
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Statistiken zu Abfällen abrufen und darstellen lassen
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Plausibilitätesprüfung der Rechnungen
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        stichprobenartige Prüfungen von Belegen (z.B. Wiegescheine)
                    </p>
                </div>
                <div class="flex text-lg font-semibold mb-5">
                	Funktionsumfang für Entsorger(ohne Premium-Paket)
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                        Entsorgungsaufträge empfangen
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                       	ZUGFeRD-Rechnungen an Lubey Connect senden (Info: Hierfür bedarf es der Verwendung von eigener Software.)
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                       	eigene Rechnungen einsehen
                    </p>
                </div>
                <div class="flex text-lg font-semibold mb-5">
                	Optionales Premium-Paket für Entsorger (kostenpflichtig)
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                       	Statistiken zu Abfällen abrufen und darstellen lassen
                    </p>
                </div>
                <div class="flex">
                    <div class="flex-none w-12 h-12">
                        <img src="{{asset('img/frontend/Check.png')}}" width="30" alt="Check"/>
                    </div>
                    <p class="text-gray-600 mb-8">
                       	ZUGFeRD-Rechungen in Lubey Connect schreiben und versenden
                    </p>
                </div>
                <div>
                	<p class="text-lg font-semibold mb-2">Registrierung und Nutzung für abfallerzeugende Unternehmen</p>
                	<p>Mit erfolgreicher Zuschlagserteilung bei einer E-Vergabe* in Lubey Trade wird für das abfallerzeugende Unternehmen ein Lubey Connect Konto angelegt. Die Zugangsdaten werden per E-Mail zugesendet. Das Konto enthält alle vertrags- und entsorgungsrelevanten Informationen aus der E-Vergabe (z.B. Stoffstandorte, Entsorger und Entsorgungsverträge). Die monatliche Nutzung des Lubey Connect Kontos ist kostenlos. Es fällt lediglich ein Verwaltungsentgelt pro Entsorgungsvertrag entsprechend der Lubey Connect Preisliste an. Dieses Entgelt ist gestaffelt nach der Anzahl der Entsorgungsverträge eines abfallerzeugenden Unternehmens und wird für die Zeit des Entsorgungsvertrages monatlich erhoben.</p>
                	<div class="text-xs mt-2">*vorausgesetzt, der Erzeuger wünscht ein Entsorgungs- und Abrechnungsmanagement über Lubey Connect</div>
                </div>
                <div class="mt-5">
                	<p class="text-lg font-semibold mb-2">Registrierung und Nutzung für Entsorger</p>
                	<p>Sobald ein Entsorger den Zuschlag für eine Vergabe* auf Lubey Trade erhalten hat, wird für ihn automatisch ein Lubey Connect Konto mit allen Entsorgungsverträgen angelegt. Die Zugangsdaten erhält er per E-Mail. Die monatliche Nutzung von Lubey Connect, ohne die Premium Funktionen, ist für den Entsorger kostenlos. Optional kann er die Premium Funktionen für 4,90 Euro (monatlich) hinzubuchen.</p>
                	<div class="text-xs mt-2">*vorausgesetzt, der Erzeuger wünscht ein Entsorgungs- und Abrechnungsmanagement über Lubey Connect</div>
                	<p class="mt-2">Preise auf Anfrage.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

