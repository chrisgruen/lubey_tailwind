@extends('layouts.frontend_tailwind')
@section('title')
    @lang('messages.what_is_lubey')
@endsection
@section('description')Die Lubey AG ist ein unabhängiger Dienstleister zur Digitalisierung der Entsorgungswirtschaft.@endsection
@section('content')
	<section class="h-38 md:h-54 bg-blue-800">
		<div class="container mx-auto px-6 py-10 text-white">
			<h2 class="text-3xl md:text-5xl font-semibold">Lubey AG</h2>
			<h2 class="text-2xl md:text-3xl">Lösungsanbieter für digitale Entsorgung</h2>
		</div>
    </section>

    <section class="container mx-auto my-5 p-5">
        <div class="mb-5">
            <div class="col-md-8 text-left">
                <h3 id="lubey_ag" class="text-blue-800 text-3xl font-semibold">Die Lubey AG</h3>
                <p class="mt-7">
                	Die Lubey AG ist ein unabhängiger Dienstleister mit Sitz in Halle (Saale), welcher innovative Produkte zur digitalen Vermarktung von Abfällen und zur
                    Automatisierung des Entsorgungsmanagements sowie eine Beratung zu Optimierungspotentialen im Entsorgungsbereich anbietet.
                </p>
                <p class="mt-5">
                	Hinter den Dienstleistungen steht ein kompetentes Team. Dieses bringt branchenspezifisches Know-how und langjährige Berufserfahrungen aus den unterschiedlichsten
                    Bereichen in das Unternehmen ein. Geführt wird die Aktiengesellschaft von einem Vorstand, der durch einen renommierten Aufsichtsrat überwacht
                    wird.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-7 text-center">
            <div>
                <img class="inline-block" src="{{asset('img/normal/Bild-Vorstand-Laemmerhirt-469x316.jpg')}}" alt="Dr. Michael Lämmerhirt"/>
                <p class="mt-2 leading-4">
                    <span class="font-semibold">Dr. Michael Lämmerhirt</span><br />
                   	Vorstandsvorsitzender
               	</p>
            </div>
            <div>
                <img class="inline-block" src="{{asset('img/normal/Bild-Vorstand-Peinhardt-469x316.jpg')}}" alt="Ulrich Peinhardt"/>
                <p class="mt-2 leading-4">
                    <span class="font-semibold">Ulrich Peinhardt</span><br />
                   	Vorstand
               	</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mt-7">
            <div>
                <img src="{{asset('img/normal/Bild-Aufsichtsrat-Althaus-469x316.jpg')}}" alt="Dieter Althaus"/>
                <p class="mt-2 leading-4">
                    <span class="font-semibold">Dieter Althaus</span><br />
                   	Aufsichtsratsvorsitzender
               	</p>
               	<ul class="leading-5 mt-2 list-disc ml-4">
                    <li>Vice President Governmental Affairs Magna Europe</li>
                    <li>Ministerpräsident von Thüringen a.D. (2003 bis 2009)</li>
                    <li>ehem. Kultusminister (1992 bis 1999)</li>
                    <li>ehem. Mitglied des Thüringer Landtages (1990 bis 2010)</li>
                    <li>Ehrensenator des Europäischen Wirtschaftsforum e.V.</li>
                </ul>
            </div>
            <div>
                <img src="{{asset('img/normal/Bild-Aufsichtsrat-Floether-469x316.jpg')}}" alt="Prof. Dr. Lucas Flöther"/>
                <p class="mt-2 leading-4">
                    <span class="font-semibold">Prof. Dr. Lucas Flöther</span><br />
                   	stellv. Aufsichtsratsvorsitzender
               	</p>
               	<ul class="leading-5 mt-2 list-disc ml-4">
                    <li>Partner der Kanzlei „Flöther & Wissing“</li>
                    <li>Rechtsanwalt</li>
                    <li>Fachanwalt für Insolvenzrecht</li>
                    <li>Sanierungsexperte und Insolvenzverwalter</li>
                    <li>Sprecher des Gravenbrucher Kreises – Vereinigung der führenden Insolvenzverwalter Deutschlands</li>
                    <li>Vorsitzender des Ausschusses Insolvenzrecht der Bundesrechtsanwaltskammer</li>
                    <li>seit 2001 Lehrbeauftragter für Vollstreckungs- und Insolvenzrecht bzw. Zivilprozessrecht der Martin-Luther-Universität Halle-Wittenberg</li>
                    <li>Honorarprofessor der Martin-Luther-Universität Halle-Wittenberg für das Fachgebiet Bürgerliches Recht und Insolvenzrecht</li>
                    <li>Herausgeber des Handbuchs zum Konzerninsolvenzrecht (C.H. Beck)</li>
                </ul>
            </div>
            <div>
                <img src="{{asset('img/normal/Bild-Aufsichtsrat-Winter-469x316.jpg')}}" alt="Achim Winter"/>
                <p class="mt-2 leading-4">
                    <span class="font-semibold">Achim Winter</span><br />
                   	Aufsichtsrat
               	</p>
               	<ul class="leading-5 mt-2 list-disc ml-4">
                    <li>Gründer, ehem. Vorstandsvorsitzender und heutiger Aufsichtsratsvorsitzender der CCR Logistics Systems AG</li>
                    <li>Netzwerker & Lobbyist der RLG (national & international), Reverse Logistics Group</li>
                    <li>ehem. beratender Spezialist für das Europäische Parlament im Bereich der Kreislaufwirtschaft</li>
                </ul>
            </div>
        </div>

        <div class="mt-16">
        	<h3 class="text-blue-800 text-xl font-semibold">Forschung und Entwicklung</h3>
        	<p class="mt-5">Die Lubey AG versteht sich als Innovationstreiber und beteiligt sich aus diesem Grund an zahlreichen Forschungs- und Entwicklungs-Vorhaben.</p>
    	</div>

    	<div class="grid grid-cols-1 lg:grid-cols-2 gap-5 my-10">
            <div>
                <p>Als Beitrag zur Nachhaltigkeit und zum Umweltschutz ist die Recyclingfähigkeit von Kunststoffen ein wichtiger Bestandteil. Zur besseren und einfacheren Analyse
                    von Kunststoffgemischen entwickelt die Lubey AG in Kooperation mit dem Fraunhofer Institut ein
                    automatisiertes Druck-Schmelz-Analyseverfahren für Kunststoffe und Kunststoffgemische (DSV).<br>Dieses Vorhaben wird gefördert durch das Land Sachsen-Anhalt und Mitteln aus dem EFRE.</p>
                <p class="mt-5">Projektzeitraum: 01.11.2019 - 30.04.2022</p>
            </div>
            <div class="px-5 lg:px-20">
                <a href="{{ url('/FuE_DSV_Plakat.pdf') }}" target="_blank">
                	<img src="{{asset('img/normal/efre.jpg')}}" alt="Europäischer Fond für regionale Entwicklung - Sachsen-Anhalt"/>
            	</a>
            </div>
        </div>
    </section>
@endsection

