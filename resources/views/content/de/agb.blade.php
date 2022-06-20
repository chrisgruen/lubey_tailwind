@extends('layouts.frontend_tailwind')
@section('title')
    @lang('messages.agb')
@endsection
@section('description')Die allgemeinen Geschäftsbedingungen der Lubey AG.@endsection
@section('content')
	<section class="h-38 md:h-54 bg-blue-800">
		<div class="container mx-auto px-6 py-10 text-white">
			<h2 class="text-3xl md:text-5xl font-semibold">Lubey AG</h2>
			<h2 class="text-2xl md:text-3xl">Allgemeine Geschäftsbedingungen</h2>
		</div>
    </section>

    <section class="container mx-auto my-5 p-5">
        <div class="row justify-content-center ">
            <p>
                Auf Lubey Trade gelten für alle Nutzer die AGB der Lubey AG. Je nach Rechtsgrundlage wird allerdings bei Vergaben unterschieden, ob sie an das Vergaberecht gebunden oder frei von vergaberechtlichen Bestimmungen ist.
            </p>
            <p class="mt-3">
                <a href="#agb" class="text-blue-500 hover:text-blue-800 hover:underline">Hier</a> gelangen Sie zu den AGB für Lubey Trade.<br>
                <a href="#agbvst" class="text-blue-500 hover:text-blue-800 hover:underline">Hier</a> gelangen Sie zu den AGB für Lubey Trade unter Anwendung vergaberechtlicher Bestimmungen.
            </p>
            <h2 id="agb" class="mt-5 text-xl font-semibold text-blue-800" >Allgemeine Geschäftsbedingungen der Lubey AG<br>für die Nutzung von Lubey Trade durch gewerbetreibende
                und öffentlich-rechtliche Entsorgungsträger, soweit keine vergaberechtlichen Bestimmungen Anwendung finden<br>
                <i class="small">(AGB) Stand 01.02.2022</i></h2>

            {{--
            <h4 class="mb-3">Übersicht</h4>
            <div class="ol-agbs" id="agb">
                <ol class="list-decimal ml-4 my-5">
                    <li>Präambel</li>
                    <li>Allgemeines und Anwendungsbereich der AGB</li>
                    <li>Gegenstand der Online-Plattform</li>
                    <li>Beziehungen zwischen den Nutzern des Online-Marktplatzes und der Lubey AG als Betreiberin des Online-Marktplatzes
                        <ol class="list-decimal ml-4 my-5">
                            <li>Vertragsgegenstand („Nutzungsvertrag“)</li>
                            <li>Vertragsschluss</li>
                            <li>Registrierung und Nutzerkonto</li>
                            <li>Transaktionsentgelt</li>
                            <li>Pflichten des Nutzers</li>
                            <li>Vertragsstrafe</li>
                            <li>Prüfungs- und Korrekturrechte der Lubey AG</li>
                            <li>Interventionsrechte der Lubey AG</li>
                            <li>Schadenersatzpflicht der Nutzer; Ausschluss von Nutzern</li>
                            <li>Zugangs- und Verfügungsbeschränkungen hinsichtlich der Nutzung des Online-Marktplatzes</li>
                            <li>Haftung der Lubey AG</li>
                            <li>Haftungsausschluss für Angaben der Nutzer</li>
                            <li>Kommunikation zwischen den Nutzern und der Lubey AG als Betreiberin des Online-Marktplatzes</li>
                            <li>Zahlungsbedingungen und Verzug</li>
                            <li>Lizenzvereinbarungen, Urheber- und Nutzungsrechte</li>
                        </ol>
                    </li>
                    <li>Beziehungen der Nutzer des Online-Marktplatzes untereinander
                        <ol class="list-decimal ml-4 my-5">
                            <li>Vertragsgegenstand („Hauptvertrag“)</li>
                            <li>Pflichten der Nutzer beim Einstellen von Angeboten und Gesuchen</li>
                            <li>Pflichten der Bieter</li>
                            <li>Vertragsbestimmungen und Vertragsbestandteile der über den Online-Marktplatz zwischen den Nutzern geschlossenen Verträgein Hauptverträgen</li>
                            <li>Zustandekommen der Hauptverträge</li>
                            <li>Vertragsabwicklung durch die Nutzer</li>
                            <li>Abbruch von Auktionen auf Antrag der Nutzer und Rücknahme von Geboten</li>
                        </ol>
                    </li>
                    <li>Bewertungen</li>
                    <li>Datenschutz</li>
                    <li>Änderungsvorbehalt</li>
                </ol>
            </div>
--}}
            <h4 class="mb-3 mt-5  text-lg font-semibold">1. Präambel </h4>
            <p class="mt-3">
                Die „Lubey AG“ mit Sitz in Halle/Saale, Deutschland (nachfolgend „Lubey AG“ oder „Betreiber“ genannt) bietet gewerblichen Nutzern (nachfolgend „Nutzer“ genannt) und öffentlich- rechtlichen Entsorgungsträgern (die nach Landesrecht zur Entsorgung von Abfällen verpflichteten juristischen Personen des öffentlichen Rechts, in der Regel kommunale Körperschaften) cloudbasierte Softwarelösungen an. Dies umfasst die Nutzung von Lubey Trade (nachfolgend „Online-Marktplatz“ oder „Lubey Trade“), worüber Abfälle zur Entsorgung und Sekundärrohstoffe zur Verwertung angeboten sowie erworben werden können.
            </p>
            <h4 class="mb-3 mt-5  text-lg font-semibold">2. Allgemeines und Anwendungsbereich</h4>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Die folgenden Allgemeinen Geschäftsbedingungen (nachfolgend „AGB“ genannt) gelten für die Geschäftsbeziehungen zwischen der Lubey AG und dem Nutzer von Lubey Trade (nachfolgend: „Nutzungsvertrag“) sowie für das Zustandekommen der Verträge zwischen den Nutzern dieses Marktplatzes („Hauptverträge“). Maßgeblich ist die jeweils zum Zeitpunkt des Vertragsabschlusses geltende Fassung dieser AGB. Die nachfolgenden AGB finden keine Anwendung bei Nutzung von Lubey Trade, soweit die vergaberechtlichen Bestimmungen Anwendung finden. Für öffentlich-rechtliche Anbieter von Abfällen und Sekundärrohstoffen gelten gesonderte Vertragsbedingungen (AGB-VSt). Für Nutzer, die Bieter in Verfahren sind, die den vergaberechtlichen Bestimmungen unterliegen, gelten gesonderte Teilnahmebedingungen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die AGB gelten für sämtliche Dienstleistungen, die auf Lubey Trade angeboten werden, aber nicht dem öffentlichen Vergaberecht unterliegen. Alle kostenpflichtigen Angebote sind als solche gekennzeichnet.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Die AGB regeln konkret die Bereitstellung der Dienstleistungen auf Lubey Trade sowie deren Inanspruchnahme. Nur bei Einbeziehung dieser AGB ist die Lubey AG zu einer Geschäftsbeziehung mit dem Nutzer bereit. Abweichende Geschäftsbedingungen des Nutzers sowie Änderungen und Ergänzungen sind nur gültig, wenn diese von der Lubey AG schriftlich anerkannt wurden. Dies gilt auch, wenn den AGB des Nutzers nicht ausdrücklich widersprochen worden ist.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Falls sich die Bedingungen in verschiedenen Dokumenten widersprechen, gelten die Regelungen in folgender Reihenfolge:
            </p>
                <ol class="mb-3">
                    <li>Regelungen des Nutzungsvertrages einschließlich dieser AGB,</li>
                    <li>Leistungsbeschreibung und Preisangaben des Hauptvertrages,</li>
                    <li>jeweils geltende gesetzliche Regelungen.</li>
                </ol>
            <p class="mt-3">
                <span class="text-important">(5)</span>&nbsp;
                Die Lubey AG ist berechtigt ihre Rechte und/oder Pflichten aus dem Nutzungsvertrag auf einen oder mehrere Dritte übertragen (Vertrags- und/oder Schuldübernahme, Abtretung). Dem Nutzer steht für den Fall der Vertrags- und/oder Schuldübernahme nicht das Recht zu, den Vertrag zu kündigen.
            </p>
            <p class="mt-3">
                <span class="text-important">(6)</span>&nbsp;
                Der Nutzungsvertrag und die Hauptverträge unterliegen vorbehaltlich zwingender internationalprivatrechtlicher Vorschriften dem Recht der Bundesrepublik Deutschland unter Ausschluss des UN-Kaufrechts. Ausschließlicher Gerichtsstand für alle Streitigkeiten aus dem Nutzungsvertrag ist der Geschäftssitz der Lubey AG. Die Befugnis der Lubey AG, auch das Gericht an einem anderen gesetzlichen Gerichtsstand anzurufen, bleibt hiervon unberührt.
            </p>
            <p class="mt-3">
                <span class="text-important">(7)</span>&nbsp;
                Die Nutzer haben bei der Nutzung von Lubey Trade neben diesen AGB das jeweils geltende Recht (insbesondere sämtliche abfallrechtlichen Regelwerke) einzuhalten. Dies gilt insbesondere im Hinblick auf die von den Nutzern im Rahmen der Einstellung von Angeboten gemachten Angaben.
            </p>
            <p class="mt-3">
                <span class="text-important">(8)</span>
                Die Vertragssprache der Nutzungsverträge ist Englisch, sofern der Nutzer kein deutsches Unternehmen ist.  Ist der Nutzer ein deutsches Unternehmen, ist die Vertragssprache der Nutzungsverträge Deutsch. Bei Auslegungszweifeln ist jedoch in jedem Fall der deutsche Wortlaut dieser AGB maßgebend.
            </p>

            <h4 class="mb-3 mt-5  text-lg font-semibold">3. Gegenstand Lubey Trade, dem Online-Marktplatz</h4>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Lubey Trade ist ein Online-Marktplatz zum Abschluss von Verträgen über den Kauf von Abfällen und Sekundärrohstoffen sowie über die Erbringung spezifischer IT-Dienstleistungen hinsichtlich der Abwicklung von Entsorgungs- und Verwertungsdienstleistungen. In diesen AGB gelten als Sekundärrohstoffe aus Abfällen gewonnene Stoffe, die das Ende der Abfalleigenschaft nach den Bestimmungen des § 5 des Kreislaufwirtschaftsgesetzes (KrWG) und einschlägiger Verordnungen erreicht haben. Nach § 5 Abs. 1 KrWG endet die Abfalleigenschaft eines Stoffes oder Gegenstandes, wenn er ein Verwertungsverfahren durchlaufen hat und so beschaffen ist, dass
            </p>
            <ol class="list-decimal ml-4 my-5">
                <li>er üblicherweise für bestimmte Zwecke verwendet wird,</li>
                <li>ein Markt für ihn oder eine Nachfrage nach ihm besteht,</li>
                <li>er alle für seine jeweilige Zweckbestimmung geltenden technischen Anforderungen sowie alle Rechtsvorschriften und anwendbaren Normen für Erzeugnisse erfüllt sowie </li>
                <li>seine Verwendung insgesamt nicht zu schädlichen Auswirkungen auf Mensch oder Umwelt führt. </li>
            </ol>
            <p class="mt-3">
                In diesen AGB sind Abfälle solche im Sinne des § 3 KrWG, d. h. Stoffe oder Gegenstände, derer sich ihr Besitzer entledigt, entledigen will oder entledigen muss. Abfälle zur Verwertung sind Abfälle, die verwertet werden; Abfälle, die nicht verwertet werden, sind Abfälle zur Beseitigung.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Der Betrieb des Online-Marktplatzes ist keine Maklertätigkeit im Sinne der §§ 93 ff. Handelsgesetzbuch. Die Lubey AG ist im zivilrechtlichen Sinne kein Makler, sondern lediglich Betreiber des Online-Marktplatzes www.lubey.de und technischer Dienstleister.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Der Betrieb des Online-Marktplatzes stellt eine Maklertätigkeit im abfallrechtlichen Sinne nach § 3 Abs. 13 KrWG dar. Die Lubey AG ist unter der Nummer NV0200025 als Makler und Händler für ungefährliche und gefährliche Abfälle zugelassen.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Auf dem Online-Marktplatz veröffentlichte Angebote und sonstige Inhalte von Nutzern stellen nicht die Meinung der Lubey AG dar und werden grundsätzlich nicht von der Lubey AG auf ihre Rechtmäßigkeit, Richtigkeit und Vollständigkeit überprüft.
            </p>
            <p class="mt-3">
                <span class="text-important">(5)</span>&nbsp;
                Der Online-Marktplatz bietet den Nutzern zwei unterschiedliche Varianten von Vermarktungswegen an. Zum einen die „Spot-Auktion“, die sich dadurch auszeichnet, dass alle bei Lubey AG registrierten Unternehmen, deren allgemeine Eignung bereits im Rahmen der Registrierung abgefragt wurde, unmittelbar an der elektronischen Auktion teilnehmen können (nachfolgend „Spot-Auktion“ genannt) und zum andern die als privatrechtliche „E-Vergabe“ (nachfolgend „E-Vergabe“ genannt) bezeichnete Variante. Die E-Vergabe orientiert sich am Ablauf der öffentlichen Ausschreibung mit elektronischer Auktion für öffentliche Auftraggeber, ohne allerdings an die vergaberechtlichen Bestimmungen, insbesondere die dortigen Formvorschriften und Fristen gebunden zu sein. Die Bieter haben daher im Rahmen eines ersten Angebotes ihre spezielle Eignung nach den Vorgaben des Anbieters nachzuweisen und nur die als geeignet bewerteten Bieter werden zur Teilnahme an der anschließenden elektronischen Auktion zugelassen. Beide Varianten Spot-Auktion und E-Vergabe werden nachfolgend als „Vermarktungen“ bezeichnet. Die öffentliche Ausschreibung/offenes Verfahren mit elektronischer Auktion für öffentliche Auftraggeber unterliegt nicht den vorliegenden AGB.
            </p>

            <h4 class="mb-3 mt-5  text-lg font-semibold">4. Beziehungen zwischen den Nutzern des Online-Marktplatzes und der Lubey AG als Be-treiber des Online-Marktplatzes („Nutzungsvertrag“)</h4>
            <h5 class="mt-2 mb-0 font-semibold">4.1 Gegenstand Nutzungsvertrag und Laufzeit </h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Der Nutzungsvertrag begründet das Rechtsverhältnis zwischen dem Nutzer („Anbieter“ und „Bieter“) des Online-Marktplatzes und der Lubey AG. Die Lubey AG stellt lediglich den Online-Marktplatz zur Verfügung, auf welchem Abfälle und Sekundärrohstoffe sowie Entsorgungs-, Verwertungs-, Sammel- und Transportdienstleistungen von den Nutzern angeboten und gesucht werden können, sowie damit im Zusammenhang stehende Serviceangebote.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Lubey AG entsorgt keine Abfälle oder verwertet Sekundärrohstoffe und erbringt keine der sonstigen vermittelten Leistungen. Die ordnungsgemäße Erfüllung der vermittelten Leistung als solche gehört nicht zu den Vertragspflichten der Lubey AG.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Gegenstand des zwischen dem Nutzer und der Lubey AG geschlossenen Nutzungsvertrages ist somit nur das Recht des Nutzers zur nicht ausschließlichen, nicht übertragbaren Nutzung der Dienstleistungen von Lubey AG gemäß diesen AGB sowie der Leistungsbeschreibung und den Preisangaben. Die Preisangaben sind unter dem Menüpunkt „Preise“ auf der Internetseite www.lubey.de abrufbar.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Der Nutzungsvertrag wird auf unbestimmte Zeit geschlossen. Lubey AG und der Nutzer sind jedoch berechtigt, den Nutzungsvertrag mit einer Frist von drei Monaten zum Ende eines Vertragsjahres zu kündigen, erstmalig jedoch nach Ablauf von zwei Vertragsjahren. Die Kündigung ist schriftlich zu erklären. Mit der Beendigung des Nutzungsvertrages endet der Zugang des Nutzers zum Online-Marktplatz. Dies hat jedoch keinen Einfluss auf bereits abgeschlossene Hauptverträge.
            </p>
            <p class="mt-3">
                <span class="text-important">(5)</span>&nbsp;
                Der Nutzer ist nicht berechtigt, dieselben Zugangsdaten gleichzeitig oder mehrfach für den Zugang zu den Dienstleistungen zu nutzen, soweit dem Nutzer dieses Recht nicht ausdrücklich durch die Lubey AG eingeräumt worden ist.
            </p>
            <p class="mt-3">
                <span class="text-important">(6)</span>&nbsp;
                Die Lubey AG behält sich alle Ansprüche aus unbefugter Nutzung von Dienstleistungen durch den Nutzer vor, insbesondere urheberrechtliche Ansprüche und Schadenersatzansprüche. Dabei wird explizit auf eine mögliche strafrechtliche Verantwortlichkeit für die vorgenannten Handlungen hingewiesen.
            </p>
            <p class="mt-3">
                <span class="text-important">(7)</span>&nbsp;
                Die Lubey AG ist bemüht, die auf dem Online-Marktplatz angebotenen Dienstleistungen fortlaufend zu optimieren. Dazu kann die Lubey AG unter Berücksichtigung der jeweiligen Interessen beispielsweise Funktionen oder Merkmale („Features“) hinzufügen oder entfernen oder zusätzliche oder neue Beschränkungen für die auf dem Online-Marktplatz angebotenen Dienstleistungen einführen.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.2 Vertragsschluss</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Sämtliche Dienstleistungsangebote der Lubey AG sind freibleibend. Sollte es sich um verbindliche Angebote handeln, dann werden diese auch ausdrücklich als solche durch die Lubey AG ausgewiesen. Die Präsentation von Dienstleistungen der Lubey AG im Internet und in Prospekten, Katalogen und Broschüren dient lediglich der Information des Nutzers. Sie stellt kein verbindliches Angebot durch die Lubey AG dar.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Durch die Registrierung auf dem Online-Marktplatz gibt der Nutzer ein verbindliches Vertragsangebot zum Abschluss eines Nutzungsvertrages ab. Mit der Abgabe eines Vertragsangebots erklärt sich der Nutzer vollumfänglich mit der Einbeziehung der im jeweiligen Zeitpunkt des Vertragsabschlusses geltenden AGB, der Leistungsbeschreibung und den Preisen der Lubey AG einverstanden und bestätigt dies durch Setzen eines Häkchens im Kästchen „Ich habe die AGB gelesen und stimme ihnen zu“. Mit der Anerkennung und Einbeziehung der AGB erkennt der Nutzer insbesondere auch seine Pflichten im Verhältnis zu den anderen Nutzern im Hinblick auf das Zustandekommen der Hauptverträge an (Ziff. 5 dieser AGB).
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Die Annahme durch die Lubey AG kann durch Übersendung einer Bestätigung oder die Freischaltung des Nutzerkontos geschehen. Die Lubey AG ist nicht zur Annahme des Angebotes und zum Abschluss eines Nutzungsvertrages verpflichtet. Die Annahme unterbleibt insbesondere, wenn der Nutzer nicht über entsprechende Voraussetzungen (z. B. Nachweis als Entsorgungsfachbetrieb) verfügt.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.3 Registrierung und Nutzerkonto</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Um die Dienste des Online-Marktplatzes in Anspruch nehmen zu können, müssen sich die Nutzer auf dem Online-Marktplatz registrieren und damit ein Nutzerkonto anlegen. Zur Registrierung ist die Angabe von unterschiedlichen Daten erforderlich. Neben allgemeinen Geschäftsdaten wie Geschäftsanschrift, E-Mail-Adresse und Telefonnummer müssen u. a. auch die für die Entsorgung von Abfall oder Verwertung von Sekundärrohstoffen in dem jeweiligen Land erforderlichen Informationen bzw. Dokumente (z. B. Erzeuger-Nummer, Zertifikat Entsorgungsfachbetrieb oder die Transportgenehmigung) angegeben und hochgeladen werden. Die gemachten Angaben und hochgeladenen Dokumente sind nach Eingabe zu bestätigen. Nach dieser Bestätigung wird dem Nutzer eine E-Mail an die von ihm angegebene E-Mail-Adresse zugesandt. Der Nutzer muss daraufhin seine E-Mail-Adresse bestätigen. Nach erfolgreicher Bestätigung wird dem Nutzer ein Aktivierungsschlüssel per Post an den Geschäftssitz des registrierten Unternehmens zugesandt. Nach Eingabe dieses persönlichen Aktivierungsschlüssels im Nutzerkonto des Nutzers wird das Konto freigeschaltet.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Anmeldung ist nur juristischen Personen, Personengesellschaften und unbeschränkt geschäftsfähigen natürlichen Personen erlaubt und darf nur von einer vertretungsberechtigten natürlichen Person vorgenommen werden, die namentlich genannt werden muss. Bei der Anmeldung natürlicher Personen dürfen nur einzelne Personen als Inhaber des Nutzerkontos angegeben werden. Der Nutzer kann zusätzlich Mitarbeiterkonten für einzelne Mitarbeiter anlegen. Ein Mitarbeiter mit eigenem Nutzerkonto handelt rechtsverbindlich im Namen und in Vertretung des Nutzers.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Der Nutzer verpflichtet sich, den Zugang über das Nutzerkonto gegen die unbefugte Nutzung durch Dritte ausreichend zu schützen. Die Weitergabe des Passwortes ist nicht zulässig. In jedem Fall haftet der Nutzer für sein pflichtwidriges Verhalten, welches eine unbefugte Benutzung des Zugangs zu den registrierungspflichtigen Bereichen schuldhaft ermöglicht.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Das Nutzerkonto ist nicht übertragbar. Dies gilt nicht für den Fall der Rechtsnachfolge durch Umfirmierung, Verschmelzung oder ähnliche Vorgänge mit Ausnahme des Erbfalls bei natürlichen Personen. Die Rechtsnachfolge ist der Lubey AG durch geeignete Dokumente nachzuweisen.
            </p>
            <p class="mt-3">
                <span class="text-important">(5)</span>&nbsp;
                Für die Registrierung und die dauerhafte Nutzung der Nutzerkonten wird kein Entgelt erhoben.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.4 Transaktionsentgelt</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Für die Dienstleistungen, die zum Abschluss eines Hauptvertrages führen, erhebt die Lubey AG ein Transaktionsentgelt. Für den Fall, dass kein Hauptvertrag zustande kommt, weil keine Gebote abgegeben wurden, fällt kein Transaktionsentgelt an.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Der Nutzer der ein Angebot anbietet "Anbieter" kann bei der Erstellung der Vergabe entscheiden, ob er das Transaktionsentgelt selber zahlt, oder ob der Nutzer der auf dieses Angebot bietet („Bieter“) und den Zuschlag erhält, das Transaktionsentgelt zahlen muss.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Die Höhe des Transaktionsentgelts richtet sich nach den jeweils aktuellen Preisangaben. Sofern nicht ausdrücklich ausgewiesen, ist die Umsatzsteuer in den Preisen nicht enthalten. Die Umsatzsteuer wird am Tag der Rechnungsstellung in der gesetzlich geltenden Höhe in der Rechnung gesondert ausgewiesen. Die Höhe des Transaktionsentgelts hängt von dem der Transaktion zu Grunde liegenden Volumen in Tonnen (Menge der zum Kauf angebotenen oder zur Verwertung oder Beseitigung angebotenen Abfälle oder Sekundärrohstoffe oder Volumen der angebotenen Sammel- oder Beförderungsleistung) sowie vom Auktionserlös ab. Dabei werden die etwaigen in der Auktion aufgeführten Nebenkosten (z. B. Gebinde-, Verlade-, Wiegekos-ten) bei der Berechnung des Transaktionsentgelts nicht berücksichtigt.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Die Zahlung des Transaktionsentgelts bestimmt sich nach Ziffer 4.14 dieser AGB.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.5 Allgemeine Pflichten des Nutzers</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Die im Rahmen des Registrierungsprozesses erforderlichen Daten und Nachweise sind vom Nutzer wahrheitsgemäß und vollständig anzugeben.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Der Nutzer ist verpflichtet, die im Registrierungsprozess abgefragten Nachweise in deutlich lesbarer Form einzustellen. Die Freischaltung des Nutzerkontos erfolgt erst nach Einstellung der Nachweise gemäß Ziff. 4.3 Abs. 1.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Ändern sich nach der Anmeldung die angegebenen Daten, so ist der Nutzer verpflichtet, die Angaben in seinem Nutzerkonto unverzüglich zu aktualisieren. Dies gilt insbesondere auch für die einzustellenden Nachweise, diese sind fortlaufend auf dem aktuellen Stand zu halten.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Es ist verboten, Artikel oder Dienstleistungen, deren Angebot, Verkauf oder Erwerb gegen gesetzliche Vorschriften bzw. öffentlich-rechtliche Genehmigungen des Nutzers, die Rechte Dritter oder gegen die guten Sitten verstoßen, auf dem Online-Marktplatz anzubieten oder anzunehmen.
            </p>
            <p class="mt-3">
                <span class="text-important">(5)</span>&nbsp;
                Im Falle des Abschlusses eines Dauerauftrages über die Entsorgung von gefährlichen Abfällen sind die beteiligten Nutzer verpflichtet, der Lubey AG monatlich die tatsächlich gelieferten bzw. übernommenen Abfallmengen mitzuteilen, damit die Lubey AG ihre abfallrechtlichen Pflichten als Makler, insbesondere ihre Registerpflichten gemäß § 49 Abs. 3 KrWG, erfüllen kann. Sofern Lubey AG darüber hinaus Pflichten dadurch entstehen, dass der Abfall oder die Sekundärrohstoffe über die Grenzen Deutschlands hinaus entsorgt bzw. verwertet werden, weisen die Nutzer die Lubey AG hierauf unverzüglich schriftlich hin.
            </p>
            <p class="mt-3">
                <span class="text-important">(6)</span>
                Der Nutzer trägt die Sorge dafür, dass alle von ihm übermittelten Daten unschädlich für die Server der Lubey AG sind und die eingebrachten sowie mit Rechnern der Lubey AG in Berührung kommenden Daten durch entsprechend hierzu geeigneter Programme auf das Nichtvorhandensein von Malware geprüft werden.
            </p>
            <p class="mt-3">
                <span class="text-important">(7)</span>&nbsp;
                Der Online-Marktplatz darf nicht zu vertragsfremden Zwecken missbraucht werden. Als Missbrauch gilt insbesondere
            </p>
            <ol class="list-decimal ml-4 my-5">
                <li>die Nutzung der Dienstleistungen unter Vorspiegelung einer falschen Identität des Nutzers, sei es gegenüber der Lubey AG oder gegenüber anderen Nutzern,</li>
                <li>die Anbahnung von Geschäften außerhalb des Online-Marktplatzes,</li>
                <li>der Versand von Werbenachrichten („Spam“), soweit der jeweilige Empfänger sich nicht zuvor mit dem Empfang ausdrücklich einverstanden erklärt hat,</li>
                <li>das Einstellen oder Versenden von Inhalten, die eine Beleidigung (§ 185 StGB), üble Nachrede (§ 186 StGB), Verleumdung (§ 187 StGB), Verunglimpfung (§ 189 StGB), Volksverhetzung (§ 130 StGB), Nachstellung (§ 238 StGB), Nötigung (§ 240 StGB) oder Bedrohung (§ 241 StGB) enthalten oder in sonstiger Weise strafrechtlich verboten sind,</li>
                <li>die Einstellung oder der Versand von Text-, Bild-, Video-, Audio- oder anderen Dateien unter Verstoß gegen Urheber-, Marken-, Namens-, Wettbewerbs- oder Persönlichkeitsrechte,</li>
                <li>die Verwendung personenbezogener Daten anderer Nutzer, soweit die betreffenden anderen Nutzer der konkreten Art der Verwendung nicht zuvor ausdrücklich zugestimmt haben; dies gilt insbesondere für die Verwendung zu kommerziellen Zwecken,</li>
                <li>die Manipulation der Produkte, Dienstleistungen, Server oder Rechner der Lubey AG oder von ihr beauftragter Dritter durch technische Vorrichtungen, Eingriffe oder sonstige Maßnahmen oder Daten.</li>
            </ol>
            <p class="mt-3">
                <span class="text-important">(8)</span>&nbsp;
                Bei einem Verstoß gegen die in Abs. 1 bis 8 genannten Pflichten oder einem Missbrauch nach Abs. 9 ist die Lubey AG berechtigt, die Erbringung von Leistungen einzustellen und den Nutzungsvertrag außerordentlich zu kündigen. Die Kündigung ist schriftlich zu erklären.
            </p>
            <p class="mt-3">
                <span class="text-important">(9)</span>&nbsp;
                Sollten dem Nutzer Störungen bzw. Probleme in den Rechenzentren von der Lubey AG bekanntwerden, dann hat er die Lubey AG unverzüglich darüber zu unterrichten.
            </p>
            <p class="mt-3">
                <span class="text-important">(10)</span>&nbsp;
                Sobald ein Nutzer im Rahmen der vom ihm begehrten Leistungen Ausfuhr- bzw. Exportbeschränkungen (z. B. Embargos) unterliegt, ist dieser für die Einhaltung der außenwirtschaftsrechtlichen Bestimmungen verantwortlich. Die Lubey AG ist nach dem Erkennen von Verstößen zur außerordentlichen Kündigung des Nutzungsvertrages berechtigt. Die Kündigung ist schriftlich zu erklären.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.6 Vertragsstrafe</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Sofern der Nutzer schuldhaft gegen eine der in Ziff. 4.5 genannten Pflichten verstößt, verspricht der Nutzer der Lubey AG unter Ausschluss der Annahme eines Fortsetzungszusammenhangs im Rahmen von Ziff. 4.6 Abs. 2 die Zahlung einer Vertragsstrafe.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Vertragsstrafe beträgt
            </p>
            <ol class="list-decimal ml-4 my-5">
                <li>bei Verstößen gegen Pflichten gemäß Ziff. 4.5 Abs. 1, 3 bis 7 im Falle der vorsätzlichen oder grob fahrlässigen Begehung EUR 50.000,00 und im Falle der fahrlässigen Begehung EUR 25.000,00;</li>
                <li>bei Verstößen gegen Ziff. 4.5 Abs. 8 bzw. bei einem Missbrauch im Sinne von Ziff. 4.5 Abs. 9 im Falle der vorsätzlichen oder grob fahrlässigen Begehung EUR 25.000,00 und im Falle der fahrlässigen Begehung EUR 12.500,00.</li>
            </ol>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Die Lubey AG ist berechtigt, die Vertragsstrafe neben der Erfüllung und als Mindestbetrag eines vom Nutzer nach den gesetzlichen Vorschriften geschuldeten Schadensersatzes zu verlangen. Davon unberührt bleibt die Geltendmachung weiterer Schäden.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.7 Prüfungs- und Korrekturrechte der Lubey AG</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Die Lubey AG ist zur Einhaltung ihrer abfallrechtlichen Pflichten als Makler berechtigt, die Angaben und Nachweise der Nutzer zu prüfen und gegebenenfalls weitere Nachweise von dem Nutzer zu verlangen. Insbesondere kann die Lubey AG vom Nutzer verlangen, eine Erklärung der jeweils zuständigen Abfallbehörde über die Korrektheit der Einstufung der betreffenden Abfälle bzw. über das Erreichen des Abfallendes im Falle der Vermarktung von Sekundärrohstoffen vorzulegen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Lubey AG ist berechtigt, von dem Nutzer, der ein Angebot in Bezug auf Abfälle oder Sekundärrohstoffe eingestellt hat, eine Korrektur der Angaben zu verlangen. Dies gilt insbesondere in Bezug auf die vom Nutzer angegebene Abfallschlüsselnummer nach der Abfallverzeichnisverordnung oder vergleichbaren Systemen zur Klassifizierung von Abfällen, wenn sich die vom Nutzer gewählte Zuordnung als offensichtlich unzutreffend erweist, vom Nutzer nicht hinreichend mit Nachweisen belegt werden kann oder im Widerspruch zur Auffassung einer zuständigen Abfallbehörde steht.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Die Lubey AG kann offensichtliche Fehler in den Stammdaten der Nutzer korrigieren. Im Falle einer Korrektur wird die Lubey AG den betreffenden Nutzer per E-Mail oder fernmündlich über die Korrektur informieren.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.8 Interventionsrechte der Lubey AG</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Die Lubey AG hat als Betreiber des Online-Marktplatzes und in ihrer abfallrechtlichen Funktion als Makler das Recht, zur Vermeidung von Verstößen gegen abfallrechtliche Bestimmungen und sonstige Gesetze oder diese AGB noch nicht beendete Vermarktungen auch ohne Zustimmung der betroffenen Nutzer nach billigem Ermessen zu beenden. Zudem kann die Lubey AG in dem Fall, dass sie einen Nutzer nach Ziff. 4.7 dieser AGB zur Korrektur seiner Angaben auffordert, die betreffende Vermarktungen bis zur Vornahme der Korrektur unterbrechen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Im Falle des Abbruchs einer noch nicht beendeten Vermarktung durch die Lubey AG wird die Lubey AG den Nutzer, der das Angebot eingestellt hat, per E-Mail an die bei der Registrierung hinterlegte Kontaktadresse über den Abbruch der Vermarktungen informieren.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Schadenersatzansprüche der betroffenen Nutzer gegenüber der Lubey AG infolge des Abbruchs oder der Unterbrechung („Anhalten“) einer Vermarktung (z.B. von Abfällen) bestehen nur unter den Voraussetzungen nach Ziff. 4.11 dieser AGB.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.9 Schadenersatzpflicht der Nutzer; Ausschluss von Nutzern</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Der Nutzer haftet der Lubey AG für Schäden aus Verstößen gegen die Bestimmungen dieser AGB, soweit der Nutzer diese zu vertreten hat, und nach den gesetzlichen Bestimmungen. Das gilt insbesondere für fehlerhafte oder irreführende Angaben bei der Registrierung und der Einstellung von Angeboten sowie für falsche oder abgelaufene Nachweise und Dokumente.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Lubey AG ist berechtigt, Nutzer, die gegen die Pflichten dieser AGB oder gesetzliche Bestimmungen verstoßen, vorübergehend oder im Sinne einer außerordentlichen Kündigung dauerhaft von der Nutzung des Online-Marktplatzes auszuschließen oder sonstige Maßnahmen zu ergreifen, die geeignet sind, einen Verstoß zu beenden oder zukünftigen Verstößen des betreffenden Nutzers vorzubeugen. Vor einem dauerhaften Ausschluss von der Nutzung des Online-Marktplatzes wird die Lubey AG den betreffenden Nutzer abmahnen. Die Erklärung des vorübergehenden oder dauerhaften Ausschlusses seitens der Lubey AG erfolgt per E-Mail. Zu einem dauerhaften Ausschluss im Sinne einer außerordentlichen Kündigung können insbesondere führen
            </p>
            <ol class="list-decimal ml-4 my-5">
                <li>vorsätzlich oder grob fahrlässig falsche Angaben oder Nachweise bei der Registrierung;</li>
                <li>vorsätzlich oder grob fahrlässig falsche oder irreführende Angaben oder Nachweise und Dokumente bei Angeboten;</li>
                <li>Angebote, die darauf zielen, gegen abfallrechtliche oder sonstige gesetzliche Bestimmungen zu verstoßen oder diese zu umgehen;</li>
                <li>Angebote, deren Ausführung objektiv unmöglich ist;</li>
                <li>Angebote, die darauf zielen, einem Wettbewerber einen Nachteil zuzufügen;</li>
                <li>der Abschluss von Verträgen, die über die Lubey AG angebahnt worden sind, außerhalb des Online-Marktplatzes bzw. unter Umgehung der Lubey AG;</li>
                <li>die Einstellung von Angeboten, zu deren Erfüllung der Nutzer bei Einstellung des Angebotes objektiv nicht in der Lage oder nicht berechtigt ist;</li>
                <li>der trotz Mahnung und angemessener Fristsetzung unterbliebene Ausgleich von Geldforderungen der Lubey AG aus dem Nutzungsvertrag.</li>
            </ol>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Der Nutzer stellt die Lubey AG, ihre Angestellten, Vertreter und Mitarbeiter schadlos und stellt sie von Ansprüchen Dritter auf erstes Anfordern frei, die im Zusammenhang mit der Verwendung der Dienste durch den Nutzer oder dem schuldhaften Verstoß gegen diese Nutzungsbedingungen gemäß diesen AGB entstehen, einschließlich aller Ansprüche und Kosten aufgrund von Verlusten, Schäden, Gerichtsverfahren und Anwaltskosten.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.10 Zugangs- und Verfügungsbeschränkungen hinsichtlich der Nutzung des Online-Marktplatzes</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Die Lubey AG übernimmt keine Garantie für die technische Verfügbarkeit des Online-Marktplatzes. Die Erreichbarkeit des Online-Marktplatzes kann aufgrund von technischen oder sonstigen Problemen, die nicht im Einflussbereich der Lubey AG liegen (u. a. höhere Gewalt, Verschulden Dritter), sowie geplante Wartungsarbeiten etc. vorübergehend nicht gegeben sein.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Lubey AG kann den Zugang zum Online-Marktplatz vorübergehend einstellen oder beschränken, sofern die Sicherheit des Netzbetriebes, die Aufrechterhaltung der Netzintegrität, insbesondere die Vermeidung schwerwiegender Störungen des Netzes, der Interoperabilität der Dienste und datenschutzrechtliche Anforderungen dies erfordern.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Die Lubey AG wird erforderliche Wartungsarbeiten am Online-Marktplatz, soweit dies möglich ist, in nutzungsarmen Zeiten durchführen. Sind längere vorübergehende Leistungseinstellungen oder -beschränkungen von Bedarf, dann wird die Lubey AG die Nutzer über Art, Ausmaß und Dauer der Beeinträchtigung drei Tage zuvor unterrichten, soweit dies den Umständen nach objektiv möglich ist und die Unterrichtung die Beseitigung bereits eingetretener Unterbrechungen nicht verzögern würde.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Dem Nutzer ist bekannt, dass alle Leistungen der Lubey AG Änderungen aufgrund von technischen Neuentwicklungen sowie möglichen gesetzlichen und/oder behördlichen Neuregelungen unterliegen. Der Online-Marktplatz kann daher von der Lubey AG dem jeweiligen technischen Entwicklungsstand angepasst werden.
            </p>
            <p class="mt-3">
                <span class="text-important">(5)</span>&nbsp;
                Im Falle einer Zurverfügungstellung von kostenfreien Zusatzleistungen durch die Lubey AG hat der Nutzer auf deren Erbringung keinen Erfüllungsanspruch. Hinsichtlich der Einstellung der unentgeltlichen Leistungen wird Lubey AG den Nutzer im Voraus informieren.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.11 Haftung der Lubey AG</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Soweit sich aus diesen AGB nichts anderes ergibt, haftet die Lubey AG als Betreiber des On-line-Marktplatzes den Nutzern bei einer Verletzung von vertraglichen und außervertraglichen Pflichten für das eigene Handeln sowie das Handeln ihrer gesetzlichen Vertreter oder Erfüllungsgehilfen. Sie haftet unbeschränkt für Vorsatz oder Fahrlässigkeit bei der Verletzung des Lebens, des Körpers oder der Gesundheit und für Vorsatz und grobe Fahrlässigkeit bei allen sonstigen Schäden. Bei Schäden infolge der Verletzung von Pflichten, deren Erfüllung die ordnungsgemäße Durchführung des Vertrags überhaupt erst ermöglichen und auf deren Erfüllung der Nutzer daher vertraut und auch vertrauen darf (Kardinalpflichten), haftet die Lubey AG darüber hinaus auch für einfache Fahrlässigkeit, jedoch der Höhe nach begrenzt auf den bei Vertragsschluss vorhersehbaren und vertragstypischen Schaden. Im Übrigen ist die Haftung ausgeschlossen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Lubey AG haftet nicht für Schäden, die den Nutzern aufgrund einer eingeschränkten Verfügbarkeit des Online-Marktplatzes infolge von technischen oder sonstigen Problemen, die nicht im Einflussbereich der Lubey AG liegen (u. a. höhere Gewalt, Verschulden Dritter), sowie geplante Wartungsarbeiten etc. entstehen.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Die Lubey AG haftet bei einer eigenen Verletzung öffentlich-rechtlicher Bestimmungen und insbesondere abfallrechtlicher Bestimmungen nur gegenüber den jeweils zuständigen Überwachungsbehörden. Eine Haftung gegenüber den Nutzern des Online-Marktplatzes aus der Verletzung öffentlich-rechtlicher und insbesondere abfallrechtlicher Bestimmungen ist ausgeschlossen, soweit diesen Bestimmungen nicht ausdrücklich drittschützende Wirkung zukommt und ihre Verletzung kausal für einen Schaden der Nutzer ist.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.12 Haftungsausschluss für Angaben der Nutzer</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Die auf dem Online-Marktplatz eingestellten Angebote werden von den Nutzern erstellt und sind für die Lubey AG im Verhältnis zu den Nutzern fremde Inhalte. Die Lubey AG macht sich den Inhalt der Angebote und insbesondere die Angabe zur Beschaffenheit, Menge und Gefährlichkeit von Abfällen und Sekundärrohstoffen im Verhältnis zu den Nutzern nicht zu eigen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Für die Lubey AG besteht im Verhältnis zu den Nutzern keine Pflicht, die Inhalte der von den Nutzern eingestellten Angebote auf deren Rechtmäßigkeit zu prüfen.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Der Nutzer trägt für sämtliche von ihm übermittelten Daten mitsamt deren Inhalt die alleinige Verantwortung. Für alle Schäden, welche Dritten aufgrund einer Verletzung der gesetzlichen oder in diesen AGB festgelegten Pflichten des Nutzers entstehen, ist dieser alleine verantwortlich.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Die Nutzer sind im Rahmen der über den Online-Marktplatz zwischen ihnen geschlossenen Hauptverträge selbst zur Einhaltung der relevanten abfallrechtlichen und sonstigen anwendbaren gesetzlichen Bestimmungen und zur Durchführung und Abwicklung der geschlossenen Hauptverträge verantwortlich.  Den Nutzern ist bekannt, dass es für bestimmte Abfälle Sonderpflichten (Andienungspflichten oder Überlassungspflichten) gibt. Die Nutzer informieren sich eigenständig über den Umfang solcher Sonderpflichten.
            </p>
            <p class="mt-3">
                <span class="text-important">(5)</span>&nbsp;
                Erlangt die Lubey AG durch eine Anzeige oder auf andere Weise Kenntnis von fehlerhaften oder eventuell rechtswidrigen Angeboten, wird sie diese Angebote prüfen und im Falle des begründeten Verdachts eines rechtswidrigen Angebots oder fehlerhafter Angaben gegebenenfalls Maßnahmen nach Ziff. 4.7 und 4.8 dieser AGB ergreifen.
            </p>
            <p class="mt-3">
                <span class="text-important">(6)</span>&nbsp;
                Die Absätze 1 bis 3 gelten für die von Nut-zern abgegebenen Bewertungen gemäß Ziff. 6. dieser AGB entsprechend.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.13 Kommunikation zwischen den Nutzern und der Lubey AG als Betreiber des Online-Marktplatzes</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Sämtliche das Nutzungsverhältnis betreffenden Erklärungen sind schriftlich oder in Textform (Brief, Fax oder E-Mail) unter den im Impressum des Online-Marktplatzes genannten Kontaktdaten der Lubey AG abzugeben.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Der Nutzer hat dafür Sorge zu tragen, dass die im Zuge der Registrierung angegebenen Kontaktdaten und -personen stets aktuell sind.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Die Lubey AG kann den registrierten Nutzern im Zusammenhang mit der Nutzung des Online-Marktplatzes Mitteilungen zu ihrem Nutzungsverhältnis und zur Nutzung der Dienste zukommen lassen.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.14 Zahlungsbedingungen und Verzug</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Die Zahlungsmöglichkeiten für die Transaktionsentgelte können zwischen den einzelnen Dienstleistungen variieren. Das durch die Lubey AG erhobene Transaktionsentgelt bei Abschluss eines Hauptvertrages, der eine einmalige Transaktion enthält, wird vollständig mit Abschluss des Hauptvertrages fällig. Übersteigt die Höhe des Transaktionsentgeltes jedoch EUR 40.000,00, werden mit Abschluss des Hauptvertrages nur 70% des Transaktionsentgeltes fällig. Die verbleibenden 30 % des Transaktionsentgeltes werden mit der vollständigen Erfüllung des Hauptvertrages fällig.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Lubey AG stellt jedem Nutzer eine elektronische Rechnung über das jeweilige Transaktionsentgelt per E-Mail bereit. Verlangt der Nutzer eine Versendung der Rechnung auf dem Postweg, ist die Lubey AG berechtigt, hierfür pro Rechnung einen Betrag in Höhe von EUR 2,50 für den Versand innerhalb von Deutschland und ein angemessenes Entgelt für den Versand ins Ausland zu berechnen.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Nach der vollständigen Erfüllung des Hauptvertrages werden die in Rechnung gestellten Volumen des zur Beseitigung angebotenen Abfalls bzw. des gehandelten Sekundärrohstoffs mit dem tatsächlich entstandenem Gesamtvolumen abgeglichen. Wurden weniger Abfälle beseitigt bzw. Sekundärrohstoffe gehandelt, als in Rechnung gestellt, wird die Lubey AG eine korrigierte Endrechnung erstellen. Rückzahlungen durch die Lubey AG erfolgen jedoch nur, sofern der Rückzahlungsbetrag eine Bagatellgrenze von EUR 500,00 überschreitet. Darüber hinaus ist bei einem Transaktionsentgelt über EUR 40.000,00 eine Rückzahlung der bereits vom Nutzer geleisteten 70 % des Transaktionsentgeltes ausgeschlossen.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Mit Ablauf der Zahlungsfrist oder – sofern eine Zahlungsfrist nicht ausdrücklich angegeben ist – nach Ablauf von 2 Wochen ab Zugang der Rechnung kommt der Nutzer auch ohne Mahnung in Zahlungsverzug. In diesen Fällen ist das geschuldete Entgelt mit 9 Prozentpunkten über dem jeweiligen Basiszinssatz zu verzinsen. Durch einen Zahlungsverzug entstehende Kosten und damit verbundene Mehraufwendungen wie Porto, Mahngebühren etc. trägt der Nutzer, es sei denn, ihn trifft kein Verschulden. Die Lubey AG ist berechtigt, für jede nach Eintritt des Verzugs versandte Mahnung eine pauschale Gebühr von EUR 5,00 zu berechnen. Dem Nutzer wird der Nachweis gestattet, ein Schaden oder eine Wertminderung sei überhaupt nicht entstanden oder wesentlich niedriger als die Pauschale. Der Lubey AG bleibt der Nachweis eines höheren Verzugsschadens ausdrücklich vorbehalten. Gleichfalls bleibt der Lubey AG die Geltendmachung weiterer Ansprüche auf Grund eines Zahlungsverzuges vorbehalten.
            </p>
            <p class="mt-3">
                <span class="text-important">(5)</span>&nbsp;
                Die Lubey AG ist unbeschadet des Kündigungsrechtes nach Ziff. 4.9 Abs. 2 dieser AGB berechtigt, die Durchführung vertraglicher Leistungspflichten bzw. mehrerer, zeitlich und sachlich miteinander verbundener Hauptverträge teilweise oder ganz einzustellen, wenn der Nutzer mit der Zahlung der geschuldeten Entgelte in Verzug gerät. Die Lubey AG kann in diesem Fall die Zahlung bzw. Teilzahlung gegen Leistung verlangen. Darüber hinausgehende Schadensersatzansprüche bleiben davon unberührt.
            </p>
            <p class="mt-3">
                <span class="text-important">(6)</span>&nbsp;
                Ungeachtet abweichender Bestimmungen dieser AGB wird die Lubey AG gegenüber dem Nutzer im Falle von kostenpflichtigen Dienstleistungen erst nach vollständiger Entrichtung des vereinbarten Entgeltes ihre Leistungen erbringen.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">4.15 Lizenzvereinbarungen, Urheber- und Nutzungsrechte</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Der Nutzer darf den Online-Marktplatz nur im Rahmen des gewählten Umfanges und nur bei Zustimmung zu diesen AGB nutzen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die von der Lubey AG zur Verfügung gestellten Dienstleistungen sind urheberrechtlich oder durch sonstige Schutzrechte (unter anderem Marken- und Patentrecht) geschützt und dürfen ohne vorherige schriftliche Einwilligung nicht für vertragsfremde Zwecke genutzt werden. Sollte die Lubey AG dem Nutzer die Nutzung von grafischen Elementen, Bildern, Texten, Animationen, Designvorlagen ausdrücklich gestatten, erhält der Nutzer das Recht, diese Inhalte für die Dauer der jeweiligen Vertragsbeziehung zu nutzen.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Die Lubey AG hat grundsätzlich keinen Anspruch auf die Nutzung von Daten, Anwendungen und Informationen des Nutzers. Rechte und Pflichten hieraus unterfallen dessen ausschließlicher Verantwortung. Das Nähere regelt die Datenschutzerklärung.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Soweit ein Nutzer Bilder oder Textbausteine Dritter nutzt, etwa zur Beschreibung der Abfälle oder Sekundärrohstoffe, hat er das Urheberrecht zu berücksichtigen.
            </p>

            <h4 class="mb-3 mt-5  text-lg font-semibold">5. Beziehungen der Nutzer des Online-Marktplatzes untereinander</h4>
            <h5 class="mt-2 mb-0 font-semibold">5.1 Gegenstand Hauptvertrag</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Der Hauptvertrag begründet das Rechtsverhältnis zwischen den Nutzern des Online-Marktplatzes, die ein Angebot für Abfälle oder Sekundärrohstoffe oder ein Angebot für Entsorgungs-, Verwertungs-, Sammlungs-, Beförderungs- oder sonstige Abfall- bzw. Sekundärrohstoffbewirtschaftungsleistungen (Makeln, Handeln) als Vermarktungen einstellen („Anbieter“) und den Nutzern, die im Rahmen der Vermarktungen auf die jeweiligen Angebote erfolgreich bieten („Bieter“). Die Lubey AG ist nicht Partei des Hauptvertrages.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Nutzer sind im Rahmen der Hauptverträge selbst zur Einhaltung der relevanten abfallrechtlichen und sonstigen gesetzlichen Bestimmungen und zur Durchführung und Abwicklung der geschlossenen Hauptverträge verantwortlich. Dies gilt insbesondere auch im Hinblick auf die zulässige Entsorgungsart der Abfälle.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">5.2 Pflichten der Anbieter</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Der Anbieter ist bei der Einstellung eines Angebots verpflichtet, die betreffenden Abfälle oder Sekundärrohstoffe oder die zu erbringende Entsorgungs-, Verwertungs- oder Transportdienstleistung vollständig und präzise zu beschreiben. Insbesondere ist der Anbieter verpflichtet, die korrekte Abfallschlüsselnummer gemäß der Anlage zur Abfallverzeichnisverordnung zu wählen oder eine vergleichbare Zuordnung nach den einschlägigen gesetzlichen Bestimmungen zu treffen und Nachweise über die Beschaffenheit und Zusammensetzung der Sekundärrohstoffe bzw. Abfälle, wie z. B. die Deklarationsanalyse, einzustellen. Zudem sind in Bezug auf Abfälle und Sekundärrohstoffe insbesondere Angaben über die Menge in Tonnen (1 t = 1 Mg = 1.000 kg), die Zusammensetzung, den Anteil von Störstoffen, die Abmessungen/Korngröße und die Verpackung. Bei nachträglichen Mengenänderungen ist Ziffer 5.6 dieser AGB zu beachten. Der Anbieter kann auch Bilder sowie Dokumente (Analysen, Prüfzeugnisse, Skizzen, etc.) bis zu einer Größe von je 2 Megabyte hochladen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Im Falle der Vermarktung von Sekundärrohstoffen trägt der Anbieter die Gewähr dafür, dass die betreffenden Stoffe tatsächlich das Abfallende gemäß den einschlägigen gesetzlichen Bestimmungen erreicht haben. Anderenfalls sind die Stoffe als Abfälle zu bezeichnen und entsprechend zu entsorgen.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Der Anbieter ist bei der Einstellung eines Angebots verpflichtet, die wesentlichen Vertragsinhalte anzugeben. Dazu zählen insbesondere die Lieferbedingungen, die Adresse für Abholung/Lieferung und die Zahlungsbedingungen. Will der Nutzer, der ein Angebot einstellt, seine AGB zum Bestandteil des Hauptvertrages machen, hat er diese dem Angebot beizufügen und den Bietern vor Abgabe eines Gebotes die Möglichkeit zur Einsichtnahme und zum Download der AGB zu gewähren. Die AGB sind vom Bieter vor Abgabe eines Gebots zu bestätigen.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Der Anbieter hat die Vorschriften zur Teilnahme am elektronischen Geschäftsverkehr gemäß § 312i des Bürgerlichen Gesetzbuches (BGB) und insbesondere die sich daraus ergebenden Informationspflichten zu beachten. Auf der Internetseite des Online-Marktplatzes werden die Bieter, im Sinne des § 312i BGB informiert. Diese Information durch die Lubey AG erfolgt unter Ausschluss jeglicher Gewährleistung und Haftung. Dies gilt nicht, soweit die Lubey AG nach Ziffer 4.11 dieser AGB haftet.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">5.3 Pflichten der Bieter </h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Die Bieter haben sich vor Abgabe eines Gebotes/vor Zustimmung darüber zu vergewissern, dass die vom Anbieter gemachten Angaben plausibel sind und den Tatsachen entsprechen.
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Bieter haben im Falle des Verdachtes, dass ein Angebot gegen abfallrechtliche oder sonstige gesetzliche Vorschriften verstößt oder im Sinne der Ziff. 4.5 Abs. 9, 4.9 Abs. 2 gegen diese AGB verstößt, unverzüglich die Lubey AG zu informieren.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">5.4 Vertragsbestimmungen und Vertragsbestandteile in Hauptverträgen</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Die bei der Einstellung von Angeboten gemachten Angaben der Nutzer, insbesondere zu Art, Beschaffenheit, Eigenschaften, Störstoffen, Menge, Abmessung/Korngröße und Verpackung der Abfälle oder Sekundärrohstoffe und zu Lieferbedingungen, Abhol- oder Lieferadressen werden zu wesentlichen Bestandteilen der Hauptverträge und gelten als zugesicherte Eigenschaften.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Beteiligten erhalten nach Abschluss der Vermarktungen eine Bestätigung der Lubey AG mit den wesentlichen, auf dem Online-Marktplatz hinterlegten Vertragsinhalten.
            </p>

            <h5 id="5.5" class="mt-4">5.5 Zustandekommen der Hauptverträge bei der E-Vergabe</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Mit der E-Vergabe lassen sich mehrere Abfallstoffe bzw. Sekundärrohstoffe gleichzeitig vom Anbieter vermarkten. Durch die Einstellung eines Angebotes für Abfälle oder Sekundärrohstoffe oder einer Entsorgungs-, Verwertungs- oder Beförderungsleistung auf dem Online-Marktplatz gibt der Anbieter ein verbindliches Angebot für einen Hauptvertrag ab. Die Bieter haben anschließend im Rahmen eines ersten Angebotes ihre spezielle Eignung nach den Vorgaben des Anbieters nachzuweisen. Nur die Bieter, welche die Vorgaben des Anbieters erfüllen, werden zur elektronischen Auktion zugelassen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Im Rahmen der elektronischen Auktion bestimmt der Anbieter eine Frist, in der die zugelassenen Bieter verdeckte Gebote abgeben können („Angebotsdauer“). Dem Bieter wird nach Abgabe eines Gebotes mitgeteilt, auf welchem Rang er liegt. Der Bieter hat die Möglichkeit, sein Gebot nachzubessern, um seinen Rang zu verbessern.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Der Hauptvertrag kommt mit dem Bieter zustande, der vom Anbieter nach billigem Ermessen ausgewählt wird.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Der Anbieter ist darüber hinaus berechtigt, eine Preisgrenze festzulegen. Das Angebot steht dann unter der aufschiebenden Bedingung, dass die Preisgrenze des Anbieters erreicht wird. Erreicht der Bieter die Preisgrenze nicht, kann er maximal den zweiten Rang belegen. Sofern die Preisgrenze während der Angebotsdauer trotz Nachbesserung der Gebote nicht erreicht wird, hat der Anbieter die Möglichkeit, binnen 48 Stunden ab Ende der Angebotsdauer, dem höchstbietenden Bieter den Zuschlag anzubieten. Dieser Bieter hat daraufhin die Möglichkeit das Zuschlagsangebot innerhalb 48 Stunden ab Absendung des Zuschlagangebotes anzunehmen.
            </p>
            <p class="mt-3">
                <span class="text-important">(5)</span>&nbsp;
                Der Anbieter ist für die Angebotsdauer an den Bestand des Angebotes gebunden. Er erkennt den im Falle eines erfolgreichen Gebotes dadurch zustande kommenden Preis als verbindlich an und haftet dem Bieter, der erfolgreich auf das Angebot bietet für die Verfügbarkeit und Erfüllung des Angebotes.
            </p>
            <p class="mt-3">
                <span class="text-important">(6)</span>&nbsp;
                Bei vorzeitiger Beendigung des Angebots durch den Anbieter kommt zwischen diesem und dem zum Zeitpunkt der Beendigung höchstbietenden Bieter ein Vertrag zustande, es sei denn, der Anbieter war nach Ziff. 5.8 dieser AGB dazu berechtigt, das Angebot zurückzunehmen.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">5.6 Zustandekommen der Hauptverträge bei der Spot-Auktion</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Bei Spot-Auktionen können hingegen alle bei Lubey AG registrierten Unternehmen, deren allgemeine Eignung bereits im Rahmen der Registrierung abgefragt wurde, unmittelbar an der elektronischen Auktion teilnehmen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Neben der Möglichkeit der elektronischen Auktion entsprechend Ziff. 5.5 der AGB kann der Anbieter bei einer Spot-Auktion auch einen Sofortkaufpreis festlegen. Bei Angeboten zum Sofortkaufpreis kommt der Hauptvertrag mit der Annahme des Sofortkaufpreises durch einen Bieter zustande. Auch im Falle eines Sofortkaufpreises gelten Ziff. 5.5 Abs. 5 und 6 entsprechend.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Der Hauptvertrag kommt mit dem Bieter zustande, der
            </p>
            <ol class="list-decimal ml-4 my-5">
                <li>bei einem Angebot von Abfällen oder Sekundärrohstoffen den höchsten Preis bei Ablauf der Auktion geboten hat;</li>
                <li>bei einem Angebot zur Durchführung von Entsorgungs- oder Transportdienstleistungen den niedrigsten Preis bei Abschluss der Auktion geboten hat.</li>
            </ol>

            <h5 class="mt-2 mb-0 font-semibold">5.7 Erfüllung Hauptvertrag</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Die Abwicklung der Hauptverträge ist allein Angelegenheit der beteiligten Nutzer. Die Abwicklung erfolgt nach den zum Bestandteil der Verträge gewordenen Vereinbarungen und Geschäftsbedingungen der beteiligten Nutzer, nach dem allgemeinen Vertragsrecht sowie nach den abfallrechtlichen und sonstigen einschlägigen gesetzlichen Bestimmungen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Nachträgliche Vertragsänderungen haben die beteiligten Nutzer bilateral zu klären und gegebenenfalls zu dokumentieren. Dies gilt insbesondere für den Fall, dass sich die vereinbarten Mengen im Nachhinein ändern.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>
                Die Lubey AG ist über nachträgliche Mengenänderungen unverzüglich zu informieren und die entsprechenden Dokumente sind ihr unverzüglich vorzulegen, um ihre abfallrechtlichen Pflichten als Makler erfüllen zu können.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>
                Die Vertragssprache der Hauptverträge ist Englisch, sofern nicht beide Nutzer deutsche Unternehmen sind.
            </p>

            <h5 class="mt-2 mb-0 font-semibold">5.8 Abbruch von Vermarktungen auf Antrag der Nutzer und Rücknahme von Geboten</h5>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Die Rücknahme eines Angebots („Abbruch der Vermarktungen“) durch den Anbieter ist nur möglich, wenn ein berechtigter Grund vorliegt. Ein berechtigter Grund liegt insbesondere vor, wenn bei dem Anbieter die Voraussetzungen einer Anfechtung wegen Irrtums gemäß § 119 BGB vorliegen oder wenn ihm die Erfüllung der vertraglichen Pflicht unmöglich ist. Der Antrag auf Rücknahme eines Angebots ist von dem Nutzer unverzüglich nach Eintreten bzw. Bekanntwerden des Rücknahme- bzw. Abbruchgrundes per E-Mail bei der Lubey AG unter Darlegung des berechtigten Grundes zu stellen. Die Lubey AG entscheidet über die Rücknahme (den „Ab-bruch“) nach Prüfung der Begründung nach billigem Ermessen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Für die Rücknahme eines Gebotes durch einen Bieter gilt Abs. 1 entsprechend.
            </p>

            <h4 class="mb-3 mt-5  text-lg font-semibold">6. Bewertungen</h4>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Nach der Durchführung einer Transaktion können sich die beteiligten Nutzer gegenseitig und öffentlich zugänglich auf der Grundlage von objektiven und transparenten Kriterien bewerten. Die Bewertungen werden von der Lubey AG nicht überprüft und können unzutreffend oder irreführend sein.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Die Nutzer sind verpflichtet, in den abgegebenen Bewertungen ausschließlich wahrheitsgemäße Angaben zu machen. Die Bewertungen müssen sachlich gehalten sein und dürfen keine Schmähkritik enthalten.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Jede zweckwidrige Nutzung des Bewertungssystems ist verboten. Insbesondere ist es untersagt:
            </p>
            <ol class="list-decimal ml-4 my-5">
                <li>sich selbst zu bewerten oder eine Selbst-bewertung durch Dritte abgeben zu lassen,</li>
                <li>in Bewertungen Umstände einfließen zu lassen, die nicht mit der Abwicklung der betreffenden Transaktion in Zusammenhang stehen,</li>
                <li>Bewertungen zu einem anderen Zweck zu verwenden als zum Handel auf dem Online-Marktplatz,</li>
                <li>andere Nutzer durch Drohung mit der Abgabe oder Nichtabgabe einer Bewertung zu einer Handlung, Duldung oder Unterlassung zu nötigen.</li>
            </ol>

            <h4 class="mb-3 mt-5  text-lg font-semibold">7. Datenschutz</h4>
            <p class="mt-3">
                Die Daten der Nutzer werden nach Beendigung des Nutzungsvertrages unter Berücksichtigung der gesetzlichen Aufbewahrungsfristen gelöscht.
            </p>

            <h4 class="mb-3 mt-5  text-lg font-semibold">8. Änderungsvorbehalt</h4>
            <p class="mt-3">
                <span class="text-important">(1)</span>&nbsp;
                Bei Vorliegen eines berechtigten Interesses der Lubey AG können die AGB jederzeit geändert und an neue Umstände angepasst werden. Ein berechtigtes Interesse liegt insbesondere dann vor, wenn die Gesetzeslage sich ändert oder eine höchstrichterliche Rechtsprechung erfolgt, aber auch bei veränderten Marktgegebenheiten, bei einer Währungsumstellung oder bei ähnlichen Ereignissen.
            </p>
            <p class="mt-3">
                <span class="text-important">(2)</span>&nbsp;
                Änderungen dieser AGB werden dem Nutzer per E-Mail oder über das Nutzerkonto sechs Wochen vor Inkrafttreten der Änderung ausdrücklich mitgeteilt. Sofern der Nutzer der Änderung innerhalb von sechs Wochen widerspricht, gelten die AGB in der bisherigen Form weiter. Bei Widerspruch des Nutzers behält Lubey AG sich das Recht vor, den Nutzungsvertrag zum Ende des laufenden Kalenderjahres zu kündigen (Sonderkündigungsrecht). Die AGB gelten in der geänderten Fassung als vereinbart, wenn der Nutzer nicht innerhalb der Sechs-Wochen-Frist widerspricht oder den Nutzungsvertrag zum Ende des laufenden Kalenderjahres kündigt (Sonderkündigungsrecht). Die Lubey AG verpflichtet sich, den Nutzer mit Beginn der Frist auf sein Widerspruchsrecht und die Folgen weiterer Nutzung der Dienstleistungen in der Mitteilung über die Änderung der AGB besonders hinzuweisen.
            </p>
            <p class="mt-3">
                <span class="text-important">(3)</span>&nbsp;
                Eine Änderung der AGB kann unbeschadet der Möglichkeit gemäß Abs. 1 auch im Verhältnis zu einzelnen Nutzern mittels eines Änderungsvertrages herbeigeführt werden.
            </p>
            <p class="mt-3">
                <span class="text-important">(4)</span>&nbsp;
                Die Absätze 1 bis 3 gelten für Änderungen der Leistungsbeschreibung und der Preisangaben entsprechend.
            </p>
        </div>

        {{-- VERGABE AGB  --}}
        <div class="row justify-content-center content-list mt-5">
                <h2 id="agbvst" class="mt-5 text-xl font-semibold text-blue-800">Allgemeine Geschäftsbedingungen der Lubey AG<br>für die Nutzung von Lubey Trade durch öffentlich-rechtliche Entsorgungsträger
                    als
                    Vergabestellen <i>(AGB-VSt) Stand 01.02.2022</i></h2>

                <ul class="mt-4 list-unstyled">
                    <li><h4 class="mb-3 mt-5  text-lg font-semibold">1. Präambel</h4>
                        <p class="mt-3">Die Lubey AG mit Sitz in Halle (Saale), Deutschland, (nachfolgend „Lubey AG“ oder „Betreiber“ genannt) bietet öffentlich-rechtlichen Entsorgungsträgern (Städte, Landkreise, Gemeinden und deren Gesellschaften – nachfolgend „Vergabestellen“ genannt) die Nutzung Lubey Trade von   (nachfolgend „Online-Marktplatz“ oder „Lubey Trade“ genannt) zur Durchführung eines vergaberechtskonformen Ausschreibungsverfahrens mit elektronischer Auktion (§§ 25,26 VgV bzw. § 18 UVgO) zur Entsorgung/Verwertung von Abfällen und Sekundärrohstoffen sowie ggf. einschließlich Transportdienstleistungen auf Grundlage der nachfolgenden allgemeinen Geschäftsbedingungen an.</p>
                    </li>
                    <li><h4 class="mb-3 mt-5  text-lg font-semibold">2. Allgemeines und Anwendungsbereich der AGB</h4>
                        <ol class="brackets">
                            <li>Die folgenden allgemeinen Geschäftsbedingungen für die Nutzung von Lubey Trade durch öffentlich-rechtliche Vergabestelle (nachfolgend „AGB-VSt“ genannt) gelten für die Geschäftsbeziehungen zwischen der Lubey AG und der Vergabestelle als Nutzer von Lubey Trade (nachfolgend: „Nutzungsvertrag“) als Vergabeplattform zur Durchführung eines vergaberechtskonformen Ausschreibungsverfahrens mit elektronischer Auktion zur Verwertung/Entsorgung von Abfällen und Sekundärrohstoffen ggf. einschließlich Transportdienstleistungen.</li>
                            <li>Die AGB-VSt regeln die Rechte und Pflichten der Vergabestelle als Nutzer und der Lubey AG als Betreiber von Lubey Trade zur Durchführung
                                einer
                                vergaberechtskonformen Ausschreibung mit elektronischer Auktion. Nur bei Einbeziehung dieser AGB-VSt ist die Lubey AG zu einer
                                Geschäftsbeziehung mit
                                der Vergabestelle bereit. Abweichende Geschäftsbedingungen der Vergabestelle sowie Änderungen und Ergänzungen sind nur gültig, wenn diese von
                                der Lubey
                                AG schriftlich anerkannt wurden. Dies gilt auch, wenn den AGB der Vergabestelle nicht ausdrücklich widersprochen worden ist.
                            </li>
                            <li>Diese AGB-VSt betreffen ausschließlich die Nutzung der Vergabeplattform durch die Vergabestelle. Sie entfalten keinerlei Wirkung auf das Zustandekommen der Verträge und die vertragliche Abwicklung zwischen der Vergabestelle und dem letztendlich bezuschlagten Bieter („Hauptverträge“).<br>
                                Die Vergabestelle hat für die Nutzung von Lubey Trade ein Transaktionsentgelt gem. nachstehender Ziffer 4.3. an die Lubey AG zu bezahlen. Dies gilt nicht, wenn das Ausschreibungsverfahren beendet wird, ohne dass ein Zuschlag erteilt wird, es sei denn, die Vergabestelle beendet die Ausschreibung, ohne dass hierfür ein wichtiger Grund nach den vergaberechtlichen Bestimmungen vorliegt (siehe 4.3 (1)).
                            </li>
                            <li>Für sämtliche Rechtsbeziehungen der Parteien gilt das Recht der Bundesrepublik Deutschland unter Ausschluss des UN-Kaufrechts. Ausschließlicher
                                Gerichtsstand für alle Streitigkeiten aus diesem Vertrag ist der Geschäftssitz der Lubey AG. Die Befugnis der Lubey AG, das Gericht an einem
                                anderen
                                gesetzlichen Gerichtsstand anzurufen, bleibt hiervon unberührt.
                            </li>
                            <li>Die Vergabestelle und die Lubey AG haben bei der Nutzung und dem Betrieb von Lubey Trade neben diesen AGB-VSt das geltende Recht, die
                                vergaberechtlichen Bestimmungen einschließlich etwaiger Landesvergabegesetze und insbesondere sämtliche abfallrechtlichen Regelwerke der EU, des
                                Bundes
                                und der einzelnen Bundesländer einzuhalten. Dies gilt insbesondere im Hinblick auf die von der Vergabestelle im Rahmen der Einstellung von
                                Angeboten
                                gemachten Angaben.
                            </li>
                            <li>Die Vertragssprache ist Deutsch.</li>
                        </ol>
                    <li><h4 class="mb-3 mt-5  text-lg font-semibold">3. Gegenstand von Lubey Trade, dem Online-Marktplatz</h4>
                        <ol class="brackets">
                            <li>Lubey Trade ist ein Online-Marktplatz zum Abschluss von Verträgen über den Kauf von Abfällen und
                                Sekundärrohstoffen sowie
                                über die Erbringung von Entsorgungsdienstleistungen. Als Sekundärrohstoffe gelten aus Abfällen gewonnene Stoffe, die das Ende der
                                Abfalleigenschaft nach den Bestimmungen des § 5 des Kreislaufwirtschaftsgesetzes (KrWG) und einschlägiger Verordnungen erreicht haben. Nach § 5
                                Abs. 1
                                KrWG endet die Abfalleigenschaft eines Stoffes oder Gegenstandes, wenn er ein Verwertungsverfahren durchlaufen hat und so beschaffen ist, dass

                                <ol class="list-decimal ml-4 my-5">
                                    <li>er üblicherweise für bestimmte Zwecke verwendet wird,</li>
                                    <li>ein Markt für ihn oder eine Nachfrage nach ihm besteht,</li>
                                    <li>er alle für seine jeweilige Zweckbestimmung geltenden technischen Anforderungen sowie alle Rechtsvorschriften und anwendbaren Normen für
                                        Erzeugnisse
                                        erfüllt sowie
                                    </li>
                                    <li>seine Verwendung insgesamt nicht zu schädlichen Auswirkungen auf Mensch oder Umwelt führt.</li>
                                </ol>
                                <p class="mt-3">Gem. § 5 Abs. 2 KrWG kann die Bundesregierung durch Rechtsverordnung mit Zustimmung des Bundesrates nach Maßgabe der in Absatz 1 genannten
                                    Anforderungen die
                                    Bedingungen näher bestimmen, unter denen für bestimmte Stoffe und Gegenstände die Abfalleigenschaft endet. Abfälle sind solche im Sinne des
                                    § 3
                                    KrWG, d.h.
                                    Stoffe oder Gegenstände, deren sich ihr Besitzer entledigt, entledigen will oder entledigen muss. Abfälle zur Verwertung sind Abfälle, die
                                    verwertet
                                    werden;
                                    Abfälle, die nicht verwertet werden, sind Abfälle zur Beseitigung.</p>
                            </li>
                            <li>Der Betrieb des Online-Marktplatzes ist keine Maklertätigkeit im Sinne der §§ 93 ff. Handelsgesetzbuch (HGB). Die Lubey AG ist im
                                zivilrechtlichen Sinne
                                kein Makler, sondern lediglich Betreiber des Online-Marktplatzes und technischer Dienstleister.
                            </li>
                            <li>Der Betrieb des Online-Marktplatzes stellt eine Maklertätigkeit im abfallrechtlichen Sinne nach § 3 Abs. 13 KrWG dar. Die Lubey AG ist unter der
                                Nr.
                                NVO200025 als Makler und Händler für ungefährliche und gefährliche Abfälle zugelassen.
                            </li>
                            <li>Auf dem Online-Marktplatz veröffentlichte Angebote und sonstige Inhalte von Nutzern stellen nicht die Meinung der Lubey AG dar und werden
                                grundsätzlich
                                nicht von der Lubey AG auf ihre Rechtmäßigkeit, Richtigkeit und Vollständigkeit überprüft.
                            </li>
                            <li>Der Online-Marktplatz der Lubey AG enthält einen gesonderten Bereich speziell für öffentliche Auftraggeber im Sinne des Vergaberechts zur
                                Durchführung
                                von öffentlichen Ausschreibungen (unterhalb des EU-Schwellenwertes) bzw. offenen Verfahren (bei EU-Ausschreibungen) jeweils mit elektronischer
                                Auktion
                                für die Vergabe von Aufträgen zur Vermarktung/Entsorgung von Abfällen und Sekundärrohstoffen ggf. einschließlich Transportdienstleistungen.
                                Durch das
                                standardisierte Verfahren und die strukturierte Benutzerführung wird der Vergabestelle die genaue stoffliche Deklaration erleichtert und
                                zugleich
                                gewährleistet, dass die vergaberechtlichen Bestimmungen einschließlich der jeweiligen Landesvergabegesetze eingehalten werden, soweit die
                                Vergabestelle
                                die nach der vergaberechtlichen Bestimmung zwingend von ihr zu erbringenden Aufgaben, wie z. B. diskriminierungsfreie Festlegung des
                                Vergabegegenstandes, Festlegung der Eignungskriterien und Zuschlagskriterien sowie Durchführung der Eignungs- und Angebotswertung vor dem Start
                                der
                                elektronischen Auktion, ordnungsgemäß durchführt.
                            </li>
                        </ol>
                    </li>
                    <li><h4 class="mb-3 mt-5  text-lg font-semibold">4. Beziehung zwischen der Vergabestelle als Nutzerin des Online-Marktplatzes und der Lubey AG als Betreiber des Online-Marktplatzes</h4>
                        <ul class="list-unstyled">
                            <li><h5 class="mt-2 mb-0 font-semibold">4.1 Vertragsgegenstand (Nutzungsvertrag)/Vertragsschluss</h5>
                                <ol class="brackets">
                                    <li>Der Nutzungsvertrag begründet das Rechtsverhältnis zwischen der Vergabestelle und der Lubey AG zur Nutzung des Online-Marktplatzes als
                                        Vergabeplattform.
                                        Die Lubey AG stellt lediglich den Online-Marktplatz zur Verfügung, auf welchem Abfälle und Sekundärrohstoffe ggf. einschließlich
                                        Transportdienstleistungen von der Vergabestelle angeboten und von den interessierten Unternehmen gesucht werden können.
                                    </li>
                                    <li>Die Pflichten der Lubey AG beschränken sich auf die Bereitstellung des Online-Marktplatzes als Vergabeplattform und der Serviceangebote
                                        in diesem
                                        Zusammenhang. Insbesondere entsorgt die Lubey AG keine Abfälle oder Sekundärrohstoffe und erbringt keine der sonstigen vermittelten
                                        Leistungen. Die
                                        ordnungsgemäße Erfüllung der vermittelten Leistungen als solche gehört nicht zur den Vertragspflichten der Lubey AG.
                                    </li>
                                    <li>Gegenstand des zwischen der Vergabestelle und der Lubey AG geschlossenen Nutzungsvertrages ist das Recht der Vergabestelle zur Nutzung
                                        des
                                        Online-Marktplatzes <u>lubey.de</u> als Vergabeplattform zur Durchführung von vergaberechtskonformen Ausschreibungen mittels
                                        öffentlicher Ausschreibung
                                        bzw. offenen Verfahren mit elektronischer Auktion auf Grundlage dieser AGB-VSt.
                                    </li>
                                    <li>Durch die Registrierung auf dem Online-Marktplatz im Bereich für öffentliche Auftraggeber gibt die Vergabestelle ein verbindliches
                                        Vertragsangebot für
                                        einen Nutzungsvertrag ab. Mit der Abgabe eines Vertragsangebotes/der Registrierung erklärt sich der Nutzer vollumfänglich mit der
                                        Einbeziehung der im
                                        jeweiligen Zeitpunkt des Vertragsabschlusses geltenden AGB-VSt der Lubey AG einverstanden und bestätigt dies durch das Setzen eines
                                        Häkchens im Kästchen
                                        „Ich habe die AGB gelesen und stimme ihnen zu“.
                                    </li>
                                    <li>Die Annahme des Nutzungsvertrages durch die Lubey AG kann durch Übersendung einer Bestätigung oder die Freischaltung eines Nutzerkontos
                                        für die
                                        Vergabestelle geschehen. Die Lubey AG behält sich das Recht vor, die Annahme des Vertrages abzulehnen. Dies ist u. a. der Fall, wenn die
                                        Vergabestelle
                                        aufgrund landesspezifischer Bestimmungen oder Vergabegesetze nicht berechtigt ist, eine elektronische Auktion nach § 18 UVgO
                                        durchzuführen. Ein Anspruch
                                        auf Abschluss eines Nutzungsvertrages besteht nicht.
                                    </li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mb-0 font-semibold">4.2 Registrierung und Nutzerkonto</h5>
                                <ol class="brackets">
                                    <li>Die Nutzung des Online-Marktplatzes ist nicht ohne Registrierung möglich. Um die Dienste des Online-Marktplatzes in Anspruch nehmen zu
                                        können, müssen
                                        sich sowohl die Vergabestelle als auch potentielle Bieter auf dem Online-Marktplatz registrieren und damit ein Nutzerkonto anlegen.
                                        Lediglich die
                                        Einsicht und das Herunterladen der Ausschreibungsunterlagen sind aus vergaberechtlichen Gründen potentiellen Bietern auch ohne
                                        Registrierung möglich.
                                        Zur Abgabe eines Angebotes ist jedoch die Registrierung auch dieser Bieter notwendig. Zur Registrierung ist die Angabe von
                                        unterschiedlichen Daten
                                        erforderlich. Neben dem Namen und der Anschrift des öffentlichen Auftraggebers sind auch die E-Mail-Adresse und Telefonnummer sowie der
                                        verantwortliche
                                        Mitarbeiter anzugeben. Die Angaben sind nach Eingabe zu bestätigen. Nach dieser Bestätigung wird der Vergabestelle eine E-Mail an die
                                        von ihr angegebene
                                        E-Mail-Adresse zugesandt. Die Vergabestelle muss daraufhin ihre E-Mail-Adresse bestätigen. Nach erfolgreicher Bestätigung wird der
                                        Vergabestelle ein
                                        Aktivierungsschlüssel per Post an den Geschäftssitz der Vergabestelle zugesandt. Nach Eingang dieses persönlichen Aktivierungsschlüssels
                                        im Nutzerkonto der
                                        Vergabestelle
                                        wird das Konto freigeschaltet. Die Vergabestelle kann zusätzlich Mitarbeiterkonten für einzelne Mitarbeiter anlegen. Ein Mitarbeiter mit
                                        eigenem
                                        Nutzerkonto handelt rechtsverbindlich im Namen und in Vertretung der Vergabestelle.
                                    </li>
                                    <li>Die Vergabestelle verpflichtet sich, den Zugang über das Nutzerkonto gegen die unbefugte Nutzung durch Dritte ausreichend zu schützen.
                                        Dies gilt auch
                                        für Mitarbeiterkonten. Die Weitergabe des Passwortes ist nicht zulässig. In jedem Fall haftet der Nutzer für sein pflichtwidriges
                                        Verhalten, welches
                                        eine unbefugte Benutzung des Zugangs zu den registrierungspflichtigen Bereichen schuldhaft ermöglicht.
                                    </li>
                                    <li>Das Nutzerkonto ist grundsätzlich nicht übertragbar. Dies gilt nicht für den Fall der Rechtsnachfolge durch Umfirmierung, Verschmelzung
                                        oder ähnliche
                                        Vorgänge. Die Rechtsnachfolge ist der Lubey AG durch geeignete Dokumente nachzuweisen.
                                    </li>
                                    <li>Für die Registrierung und die dauerhafte Nutzung der Nutzerkonten wird kein Entgelt erhoben. Abgesehen von der Erklärung des
                                        Einverständnisses mit
                                        diesen AGB-VSt ist die Registrierung mit keinen weiteren Verpflichtungen verbunden.
                                    </li>
                                    <li>Nach der erfolgreichen Registrierung hat der Nutzer Zugang zu seinem persönlichen Nutzerkonto. Dieses Nutzerkonto kann auch für
                                        nachfolgende
                                        Ausschreibungen genutzt werden. Eine erneute Registrierung ist nicht erforderlich.
                                    </li>
                                    <li>Die Registrierung potentieller Bieter erfolgt in ähnlicher Form jedoch ohne postalische Zustellung des Aktivierungsschlüssels, so dass
                                        den Bietern
                                        die
                                        Angebotsfrist uneingeschränkt zur Verfügung steht.
                                    </li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mb-0 font-semibold">4.3 Transaktionsentgelt</h5>
                                <ol class="brackets">
                                    <li>Soweit auf Grundlage der durchgeführten elektronischen Auktion ein Zuschlag erteilt wird, ist die Vergabestelle verpflichtet, für die Nutzung des Online-Marktplatzes und die Durchführung der öffentlichen Ausschreibung/des offenen Verfahrens mit elektronischer Auktion an die Lubey AG ein Transaktionsentgelt zu bezahlen. Für den Fall, dass kein Vertragsschluss zustande kommt, weil kein annehmbares Angebot abgegeben wurde, oder die Ausschreibung aus einem wichtigen Grund aufgehoben wurde, entfällt die Transaktionsgebühr. Hebt die Vergabestelle die Ausschreibung auf, bzw. beendet diese, ohne dass hierfür ein wichtiger Grund nach den vergaberechtlichen Bestimmungen vorliegt, schuldet die Vergabestelle der Lubey AG eine pauschale Aufwandsentschädigung in Höhe von 50%  des bei Auftragserteilung ansonsten entstandenen Transaktionsentgeltes, es sei denn, die Vergabestelle weist nach, dass der Lubey AG bis zur Beendigung der Ausschreibung ein geringerer Aufwand entstanden ist. Ebenso ist die Lubey AG berechtigt, einen höheren Aufwand nachzuweisen. Wird ein geringerer bzw. höherer Aufwand nachgewiesen, schuldet die Vergabestelle anstelle der pauschalen Aufwandsentschädigung eine Entschädigung für den nachgewiesenen Aufwand.
                                    </li>
                                    <li>Für die Bieter ist die Teilnahme an der öffentlichen Ausschreibung/dem offenen Verfahren mit elektronischer Auktion kostenlos.
                                    </li>
                                    <li>Die Höhe des zu entrichtenden Transaktionsentgelts richtet sich nach den jeweils aktuellen Preisangaben, die auf der Internetseite des Online-Marktplatzes unter dem Menüpunkt „Preise“ (<a href="http://www.lubey.de">lubey.de</a>/preise) einsehbar sind. Die Höhe des Transaktionsentgeltes hängt von dem der Transaktion zugrundeliegenden Volumen in Tonnen (Menge der zum Kauf angebotenen oder zur Verwertung oder Beseitigung angebotener Abfälle oder Sekundärrohstoffe ggf. einschließlich Transportleistungen) sowie vom geschätzten Gesamtnettoauftragswert des zu vergebenden Auftrages bzw. des zu vergebenden Loses eines Auftrages ab. Dabei werden die etwaigen in der der öffentlichen Ausschreibung/dem offenen Verfahren mit elektronischer Auktion aufgeführten Nebenkosten (z. B. Gebinde-, Verlade-, Wiege- und Lieferkosten) bei der Berechnung des Transaktionsentgeltes nicht berücksichtigt. Sofern nicht ausdrücklich ausgewiesen, ist die Mehrwertsteuer bzw. Umsatzsteuer in den Preisen nicht enthalten. Die Mehrwertsteuer bzw. Umsatzsteuer wird am Tage der Rechnungsstellung in der gesetzlich geltenden Regel in der Rechnung gesondert ausgewiesen.
                                    </li>
                                    <li>Das Transaktionsentgelt wird mit Zuschlagserteilung der Vergabestelle an den erfolgreichen Bieter und Rechnungsstellung durch Lubey Ag zur Zahlung fällig.
                                    </li>
                                    <li>Die Lubey Ag stellt der Vergabestelle eine elektronische Rechnung über das Transaktionsentgelt per E-Mail zu. Verlangt die Vergabestelle eine Versendung der Rechnung auf dem Postweg, ist die Lubey AG berechtigt, hierfür pro Rechnung einen Betrag in Höhe von 2,50 € zzgl. Umsatzsteuer zu berechnen.</li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mb-0 font-semibold">4.4 Pflichten der Vergabestelle</h5>
                                <ol class="brackets">
                                    <li>Die im Rahmen des Registrierungsprozesses erforderlichen Daten und ggf. Nachweise sind von der Vergabestelle wahrheitsgemäß und
                                        vollständig anzugeben.
                                    </li>
                                    <li>Die Vergabestelle ist nach den vergaberechtlichen Bestimmungen verpflichtet, die von ihr als notwendig erachteten Eignungskriterien
                                        und diesbzgl.
                                        Nachweise sowie sonstige ggf. nach landesvergaberechtlichen Bestimmungen erforderlichen Erklärungen, die von den Bietern zu erfüllen
                                        bzw. abzugeben
                                        sind, festzulegen. Durch die strukturierte Benutzerführung der Vergabeplattform der Lubey AG wird der Vergabestelle die Erfüllung
                                        dieser Aufgaben durch
                                        entsprechende Vorschläge erleichtert. Die Lubey AG übernimmt insoweit jedoch keine Rechtsberatung. Die Vergabestelle bleibt für die
                                        vergaberechtliche
                                        Zulässigkeit der von ihr gestellten Eignungsanforderungen und die Einhaltung etwaiger landesrechtlicher Vergabebestimmungen selbst
                                        verantwortlich. Auch
                                        die Festlegung der Zuschlagskriterien obliegt alleine der Vergabestelle, wobei aufgrund der Besonderheiten der elektronischen
                                        Auktion alleine der Preis
                                        als alleiniges Zuschlagskriterium zweckmäßig und bei einer Ausschreibung über die Vergabeplattform der Lubey AG technisch möglich
                                        ist. Die Vergabestelle
                                        hat jedoch die Möglichkeit bei Abfällen und Sekundärrohstoffen, bei denen sie eine Zahlung seitens der Bieter erwartet, einen
                                        Mindestpreis und bei
                                        Abfällen und Sekundärrohstoffen, bei denen sie eine Zuzahlung durch die Vergabestelle erwartet, einen Höchstpreis festzulegen.
                                    </li>
                                    <li>Des Weiteren ist die Vergabestelle nach den vergaberechtlichen Bestimmungen verpflichtet, die Eignungsprüfung und Wertung der ersten
                                        Angebote
                                        (Erstgebote) durchzuführen. Auch hierin wird die Vergabestelle durch die strukturierte Benutzerführung der Vergabeplattform der
                                        Lubey AG unterstützt.
                                        Sämtliche Entscheidungen sind jedoch allein von der Vergabestelle zu treffen.
                                    </li>
                                    <li>Die Vergabestelle ist auch im Übrigen verpflichtet, all ihre nach den vergaberechtlichen Bestimmungen als Auftraggeber obliegenden
                                        Aufgaben
                                        durchzuführen und Entscheidungen zu treffen, die erforderlich sind, um ein vergaberechtskonformes Verfahren durchzuführen. Dies gilt
                                        insbesondere auch
                                        für die Beantwortung von Bieteranfragen, soweit sie nicht alleine den technischen Ablauf der elektronischen Auktion auf der
                                        Vergabeplattform der Lubey
                                        AG betreffen. Bei etwaigen Rügen von Bietern muss die Vergabestelle eine Entscheidung darüber treffen, ob der Rüge abgeholfen wird
                                        oder nicht.
                                    </li>
                                    <li>Die Vergabestelle ist verpflichtet, zu liefernde Abfälle oder Sekundärrohstoffe sowie die ggf. zu erbringenden
                                        Transportdienstleistungen vollständig und
                                        präzise zu beschreiben. Insbesondere ist die Vergabestelle verpflichtet, die korrekte Abfallschlüsselnummer gemäß der Anlage zur
                                        Abfallverzeichnisverordnung zu wählen und ggf. Nachweise über die Beschaffenheit und Zusammensetzung der Sekundärrohstoffe bzw.
                                        Abfälle, wie z. B. die
                                        Deklarationsanalyse, soweit erforderlich einzustellen. Die Vergabestelle ist bei der Vermarktung von Sekundärrohstoffen insbesondere
                                        dafür
                                        verantwortlich, dass die betreffenden Stoffe tatsächlich das Abfallende nach den abfallrechtlichen Vorgaben gem. § 5 KrWG erreicht
                                        haben und mit den für
                                        Stoffe/Produkte geltenden gesetzlichen Bestimmungen im Einklang stehen. Andernfalls sind die Stoffe als Abfälle zu bezeichnen und
                                        entsprechend der
                                        Abfallverzeichnisverordnung von der Vergabestelle einzustufen. Die Vergabestelle ist des Weiteren dafür verantwortlich, dass keine
                                        Artikel oder
                                        Dienstleistungen, deren Angebot, Verkauf oder Erwerb gegen gesetzliche Vorschriften bzw. öffentlich-rechtliche Genehmigungen, die
                                        Rechte Dritter oder
                                        gegen die guten Sitten verstoßen, auf dem Online-Marktplatz durch die Vergabestelle angeboten werden.
                                    </li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mb-0 font-semibold">4.5 Spezielle Pflichten der Vergabestelle bzgl. der Nutzung der Vergabeplattform</h5>

                                <ol class="brackets">
                                    <li>Die Vergabestelle trägt die Sorge dafür, dass alle von ihr übermittelten Daten unschädlich für die Server der Lubey AG sind und die
                                        eingebrachten sowie
                                        mit Rechnern der Lubey AG in Berührung kommenden Daten durch entsprechende hierzu geeignete Programme auf das Nichtvorhandensein von
                                        Malware geprüft
                                        werden.
                                    </li>
                                    <li>Der Online-Marktplatz darf nicht zu vertragsfremden Zwecken missbraucht werden. Als Missbrauch gilt insbesondere
                                        <ol class="list-decimal ml-4 my-5">
                                            <li>die Nutzung der Dienste unter Vorspiegelung einer falschen Identität des Nutzers, sei es gegenüber der Lubey AG oder gegenüber
                                                anderen Nutzern,
                                            </li>
                                            <li>die Anbahnung von Geschäften außerhalb des Online-Marktplatzes,</li>
                                            <li>der Versand von Werbenachrichten („Spam“), soweit der jeweilige Empfänger sich nicht zuvor mit dem Empfang ausdrücklich
                                                einverstanden erklärt hat,
                                            </li>
                                            <li>das Einstellen oder Versenden von Inhalten, die eine Beleidigung (§ 185 StGB), üble Nachrede (§ 186 StGB), Verleumdung (§ 187
                                                StGB),
                                                Verunglimpfung (§
                                                189 StGB), Volksverhetzung (§ 130 StGB), Nachstellung (§ 238 StGB), Nötigung (§ 240 StGB) oder Bedrohung (§ 241 StGB) enthalten
                                                oder
                                                in sonstiger Weise
                                                strafrechtlich verboten sind,
                                            </li>
                                            <li>die Einstellung oder der Versand von Text-, Bild-, Video-, Audio- oder anderen Dateien unter Verstoß gegen Urheber-, Marken-,
                                                Namens-, Wettbewerbs- oder
                                                Persönlichkeitsrechte,
                                            </li>
                                            <li>die Verwendung personenbezogener Daten anderer Nutzer, soweit die betreffenden anderen Nutzer der konkreten Art der Verwendung
                                                nicht
                                                zuvor ausdrücklich
                                                zugestimmt haben; Dies gilt insbesondere für die Verwendung zu kommerziellen Zwecken,
                                            </li>
                                            <li>die Manipulation der Produkte, Dienstleistungen, Server oder Rechner der Lubey AG oder von ihr beauftragter Dritter durch
                                                technische
                                                Vorrichtungen,
                                                Eingriffe oder sonstige Maßnahmen oder Daten.
                                            </li>
                                        </ol>
                                    </li>
                                    <li>Bei einem Verstoß gegen die in Absatz (1) genannten Pflichten oder einem Missbrauch nach Absatz (2) ist die Lubey AG berechtigt, den
                                        mit der
                                        Vergabestelle bestehenden Nutzungsvertrag im Hinblick auf künftige Ausschreibungen zu kündigen und die Leistungen bei laufenden
                                        Ausschreibungen
                                        einzustellen, soweit dies nach den vergaberechtlichen Bestimmungen zulässig und möglich ist.
                                    </li>
                                    <li>Sollten der Vergabestelle Störungen oder Probleme in den Rechenzentren von der Lubey AG bekannt werden, hat sie die Lubey AG
                                        baldmöglichst darüber zu
                                        unterrichten.
                                    </li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mb-0 font-semibold">4.6 Vertragsstrafe</h5>
                                <ol class="brackets">
                                    <li>Sofern die Vergabestelle schuldhaft gegen eine der in Ziff. IV. 5. Absatz (1) und (2) genannten Pflichten verstößt, verspricht die
                                        Vergabestelle der
                                        Lubey AG unter Ausschluss der Annahme eines Fortsetzungszusammenhangs im Rahmen von Ziff. IV. 6. Absatz (2) die Zahlung einer
                                        Vertragsstrafe.
                                    </li>
                                    <li>Die Vertragsstrafe beträgt bei Verstößen gegen Ziff. IV. 5. Absatz (1) bzw. einem Missbrauch im Sinne von Ziff. IV. 5. Absatz (2) im
                                        Falle der
                                        vorsätzlichen oder grob fahrlässigen Begehung € 25.000 und im Falle der fahrlässigen Begehung € 12.500.
                                    </li>
                                    <li>Die Lubey AG ist berechtigt, die Vertragsstrafe neben der Erfüllung und als Mindestbetrag eines von der Vergabestelle nach den
                                        gesetzlichen Vorschriften
                                        geschuldeten Schadenersatzes zu verlangen. Davon unberührt bleibt die Geltendmachung darüber hinausgehender weiterer Schäden.
                                    </li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mb-0 font-semibold">4.7 Prüfungsrechte der Lubey AG</h5>
                                <ol class="brackets">
                                    <li>Die Lubey AG ist – soweit dies zur Einhaltung ihrer abfallrechtlichen Pflichten als Makler erforderlich ist – berechtigt, die
                                        Angaben und Nachweise der
                                        Vergabestelle zu prüfen, soweit sie Anhaltspunkte dafür hat, dass die Einstufung der betreffenden Abfälle nach der
                                        Abfallverzeichnisverordnung bzw. über
                                        das Erreichen des Abfallendes gem. § 5 KrWG im Falle der Vermarktung von Sekundärrohstoffen zutreffend sind.
                                        <p class="mt-3">Die Lubey AG wird in diesem Falle die Vergabestelle auffordern, entsprechende Nachweise für ihre Einordnung vorzulegen oder
                                            entsprechende
                                            Korrekturen
                                            vorzunehmen.</p>
                                    </li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mb-0 font-semibold">4.8 Zugangs- und Verfügungsbeschränkungen hinsichtlich der Nutzung des Online-Marktplatzes</h5>
                                <ol class="brackets">
                                    <li>Die Lubey AG übernimmt keine Garantie für technische Verfügbarkeit des Online-Marktplatzes. Die Erreichbarkeit des
                                        Online-Marktplatzes kann aufgrund von
                                        technischen oder sonstigen Problemen, die nicht im Einflussbereich der Lubey AG liegen (u. a. höhere Gewalt, Verschulden Dritter),
                                        sowie geplante
                                        Wartungsarbeiten etc. vorübergehend nicht gegeben sein.
                                    </li>
                                    <li>Die Lubey AG kann den Zugang zum Online-Marktplatz vorübergehend einstellen oder beschränken, sofern die Sicherheit des
                                        Netzbetriebes, die
                                        Aufrechterhaltung der Netzintegrität, insbesondere die Vermeidung schwerwiegender Störungen des Netzes, der Interoperabilität der
                                        Dienste und
                                        datenschutzrechtlicher Anforderungen dies erfordern.
                                    </li>
                                    <li>Die Lubey AG wird erforderliche Wartungsarbeiten am Online-Marktplatz, soweit dies möglich ist, in nutzungsarmen Zeiten durchführen.
                                        Sind längere
                                        vorübergehende Leistungseinstellungen oder –beschränkungen erforderlich, dann wird die Lubey AG die Nutzer über Art, Ausmaß und
                                        Dauer der
                                        Beeinträchtigung drei Tage zuvor unterrichten, soweit dies den Umständen nach objektiv möglich ist und die Unterrichtung die
                                        Beseitigung bereits
                                        eingetretener Unterbrechungen nicht verzögern würde.
                                    </li>
                                    <li>Soweit Störungen oder Nichtverfügbarkeit des Online-Marktplatzes gemäß vorgenannten Absätzen (1) bis (3) eintreten sollten, wird die
                                        Lubey AG mit der
                                        Vergabestelle – ggf. unter Einholung eines Rechtsrates – abstimmen, inwieweit aus vergaberechtlicher Sicht die Verlängerung von
                                        Fristen oder die
                                        Aufhebung oder Wiederholung des Ausschreibungsverfahrens erforderlich ist.
                                    </li>
                                    <li>Der Vergabestelle ist bekannt, dass alle Leistungen der Lubey AG Änderungen aufgrund von technischen Neuentwicklungen sowie
                                        möglichen gesetzlichen
                                        und/oder behördlichen Neuregelungen unterliegen. Der Online-Marktplatz kann daher von der Lubey AG dem jeweiligen technischen
                                        Entwicklungsstand
                                        angepasst werden.
                                    </li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mb-0 font-semibold">4.9 Haftung der Lubey AG</h5>
                                <ol class="brackets">
                                    <li>Soweit sich aus diesen AGB nichts anderes ergibt, haftet die Lubey AG als Betreiber des Online-Marktplatzes den Nutzern bei einer
                                        Verletzung von
                                        vertraglichen und außervertraglichen Pflichten für das eigene Handeln sowie das Handeln ihrer gesetzlichen Vertreter oder
                                        Erfüllungsgehilfen. Sie haftet
                                        für Vorsatz oder Fahrlässigkeit bei der Verletzung des Lebens, des Körpers oder der Gesundheit und für Vorsatz und grobe
                                        Fahrlässigkeit bei allen
                                        sonstigen Schäden. Bei Schäden infolge der Verletzung von Pflichten, deren Erfüllung die ordnungsgemäße Durchführung des Vertrags
                                        überhaupt erst
                                        ermöglichen und auf deren Erfüllung der Nutzer daher vertraut und auch vertrauen darf („Kardinalpflichten“), haftet die Lubey AG
                                        auch für
                                        Fahrlässigkeit, jedoch der Höhe nach begrenzt auf den bei Vertragsschluss vorhersehbaren und vertragstypischen Schaden, es sei denn,
                                        es handelt sich um
                                        Schadensersatzansprüche des Nutzers aus einer Verletzung des Lebens, des Körpers oder der Gesundheit.
                                    </li>

                                    <li>Die Lubey AG haftet nicht für Schäden, die den Nutzern aufgrund einer eingeschränkten Verfügbarkeit des Online-Marktplatzes infolge
                                        von technischen oder
                                        sonstigen Problemen, die nicht im Einflussbereich der Lubey AG liegen (u.a. höhere Gewalt, Verschulden Dritter), sowie geplante
                                        Wartungsarbeiten etc.
                                        entstehen.
                                    </li>

                                    <li>Die Lubey AG haftet bei einer eigenen Verletzung öffentlich-rechtlicher Bestimmungen und insbesondere abfallrechtlicher Bestimmungen
                                        nur gegenüber den
                                        Überwachungsbehörden. Eine Haftung gegenüber den Nutzern des Online-Marktplatzes aus der Verletzung öffentlich-rechtlicher und
                                        insbesondere
                                        abfallrechtlicher Bestimmungen ist ausgeschlossen, soweit diesen Bestimmungen nicht ausdrücklich drittschützende Wirkung zukommt und
                                        ihre Verletzung
                                        kausal für einen Schaden der Nutzer ist.
                                    </li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mb-0 font-semibold">4.10 Haftungsausschluss für Angaben der Nutzer (Vergabestelle und Bieter)</h5>
                                <ol class="brackets">
                                    <li>Die auf dem Online-Marktplatz eingestellten Angebote werden von den Nutzern erstellt und sind für die Lubey AG im Verhältnis zu den
                                        Nutzern fremde
                                        Inhalte. Die Lubey AG macht sich den Inhalt der Angebote und insbesondere die Angabe zur Beschaffenheit, Menge und Gefährlichkeit
                                        von Abfällen und
                                        Sekundärrohstoffen im Verhältnis zu den Nutzern nicht zu eigen.
                                    </li>
                                    <li>Für die Lubey AG besteht keine Möglichkeit und im Verhältnis zu den Nutzern keine Pflicht, die Inhalte der von den Nutzern
                                        eingestellten Angebote auf
                                        deren Rechtmäßigkeit zu prüfen.
                                    </li>
                                    <li>Der Nutzer trägt für sämtliche von ihm übermittelten Daten mitsamt deren Inhalt die alleinige Verantwortung. Für alle Schäden,
                                        welche Dritten aufgrund
                                        einer Verletzung der gesetzlichen oder in diesen AGB festgelegten Pflichten des Nutzers entstehen, ist dieser alleine
                                        verantwortlich.
                                    </li>
                                    <li>Die Nutzer sind im Rahmen der über den Online-Marktplatz zwischen ihnen geschlossenen Verträge („Hauptverträge“) selbst zur
                                        Einhaltung der relevanten
                                        abfallrechtlichen und sonstigen gesetzlichen Bestimmungen und zur Durchführung und Abwicklung der geschlossenen Verträge
                                        verantwortlich. Die Lubey AG
                                        weist darauf hin, dass in einigen Bundesländern für bestimmte gefährliche Abfälle Andienungspflichten gegenüber staatlichen
                                        Institutionen bzw.
                                        Gesellschaften bestehen, die von den Nutzern zu berücksichtigen sind. Darüber hinaus ist die gegenüber den öffentlich-rechtlichen
                                        Entsorgungsträgern
                                        bestehende Überlassungspflicht für Abfälle zur Beseitigung zu berücksichtigen.
                                    </li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mb-0 font-semibold">4.11 Kommunikation zwischen der Vergabestelle und der Lubey AG als Betreiber des Online-Marktplatzes</h5>
                                <ol class="brackets">
                                    <li>Sämtliche das Nutzungsverhältnis betreffenden Erklärungen sind schriftlich oder in Textform (Brief, Fax oder E-Mail) unter den im
                                        Impressum des
                                        Online-Marktplatzes genannten Kontaktdaten der Lubey AG abzugeben.
                                    </li>
                                    <li>Die Vergabestelle hat dafür Sorge zu tragen, dass die im Zuge der Registrierung angegebenen Kontaktdaten und -personen stets aktuell
                                        sind.
                                    </li>
                                    <li>Die Lubey AG kann der Vergabestelle und den registrierten Bietern im Zusammenhang mit der Nutzung des Online-Marktplatzes
                                        Mitteilungen zu ihrem
                                        Nutzungsverhältnis und zur Nutzung der Dienste zukommen lassen.
                                    </li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mb-0 font-semibold">4.12 Lizenzvereinbarungen, Urheber- und Nutzungsrechte</h5>
                                <ol class="brackets">
                                    <li>Die Vergabestelle darf den Online-Marktplatz nur im Rahmen des gewählten Umfanges und nur bei Zustimmung zu diesen AGB nutzen.</li>

                                    <li>Die von der Lubey AG zur Verfügung gestellten Dienstleistungen sind urheberrechtlich oder durch sonstige Schutzrechte (unter anderem
                                        Marken- und
                                        Patentrecht) geschützt und dürfen ohne vorherige schriftliche Einwilligung nicht für vertragsfremde Zwecke genutzt werden. Sollte
                                        die Lubey AG der
                                        Vergabestelle die Nutzung von grafischen Elementen, Bildern, Texten, Animationen, Designvorlagen ausdrücklich gestatten, erhält die
                                        Vergabestelle das
                                        Recht, diese Inhalte für die Dauer der jeweiligen Vertragsbeziehung zu nutzen.
                                    </li>

                                    <li>Die Lubey AG hat grundsätzlich keinen Anspruch auf die Nutzung von Daten, Anwendungen und Informationen der Vergabestelle. Rechte
                                        und Pflichten hieraus
                                        unterfallen deren ausschließlicher Verantwortung. Das Nähere regelt die Datenschutzerklärung.
                                    </li>

                                    <li>Soweit die Vergabestelle Bilder oder Textbausteine Dritter nutzt, etwa zur Beschreibung der Abfälle oder Sekundärrohstoffe, hat sie
                                        das Urheberrecht zu
                                        berücksichtigen.
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </li>
                    <li><h4 class="mb-3 mt-5  text-lg font-semibold">5. Beziehungen der Nutzer des Online-Marktplatzes untereinander</h4>
                        <ul class="list-unstyled">
                            <li><h5 class="mt-2 mb-0 font-semibold">5.1 Vertragsgegenstand („Hauptvertrag“)</h5>
                                <ol class="brackets">
                                    <li>Der Hauptvertrag (z. B. Entsorgungsvertrag, Beförderungsvertrag) begründet das Rechtsverhältnis zwischen den Nutzern des
                                        Online-Marktplatzes, die ein
                                        Angebot für Abfälle oder Sekundärrohstoffe ggf. mit Transportdienstleistungen einstellen („Vergabestelle“) und den Nutzern, die im
                                        Rahmen der
                                        Ausschreibung mit elektronischer Auktion auf die jeweiligen Angebote erfolgreich bieten („Bieter“) und den Zuschlag erhalten.
                                    </li>
                                    <li>Die Lubey AG bietet selbst keine Artikel an und wird nicht Vertragspartei der ausschließlich zwischen den Nutzern dieses
                                        Marktplatzes geschlossenen
                                        Verträge („Hauptverträge“). Für das Zustandekommen des Hauptvertrages gelten die gesetzlichen Bestimmungen, insbesondere auch die
                                        vergaberechtlichen
                                        Bestimmungen.
                                    </li>

                                    <li>Die Nutzer sind im Rahmen der über den Online-Marktplatz zwischen ihnen geschlossenen Verträge („Hauptverträge“) selbst zur
                                        Einhaltung der relevanten
                                        abfallrechtlichen und sonstigen gesetzlichen Bestimmungen und zur Durchführung und Abwicklung der geschlossenen Verträge
                                        verantwortlich. Dies gilt
                                        insbesondere auch im Hinblick auf die zulässige Entsorgungsart nach der Abfallhierarchie gemäß §§ 6 ff. KrWG und die in einigen
                                        Bundesländern für
                                        bestimmte gefährliche Abfälle bestehenden Andienungspflichten gegenüber staatlichen Institutionen bzw. Gesellschaften.
                                    </li>
                                </ol>
                            </li>
                            <li><h5 class="mt-2 mv font-semibold">5.2 Abbruch, Unterbrechung oder Zurückversetzung von Ausschreibungen mit elektronischer Auktion</h5>
                                <ol class="brackets">
                                    <li>Nur die Vergabestelle ist berechtigt, das Ausschreibungsverfahren mit elektronischen Auktionen abzubrechen, das Verfahren also
                                        vorzeitig zu beenden. Die
                                        Vergabestelle hat hierbei die vergaberechtlichen Bestimmungen zu beachten und ist für ihre Entscheidung alleine verantwortlich.
                                    </li>

                                    <li>Soweit ein Bieter nach den vergaberechtlichen Bestimmungen ein Nachprüfungsverfahren vor einer Vergabekammer einleitet oder ein
                                        anderes gerichtliches
                                        Verfahren einleitet, kann es je nach Entscheidung der Vergabekammer oder des Gerichts zu einer Unterbrechung, Zurückversetzung oder
                                        auch zum Abbruch des
                                        Verfahrens kommen.
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </li>
                    <li><h4 class="mb-3 mt-5  text-lg font-semibold">6. Datenschutz</h4>
                        <p class="mt-3">Die Daten der Nutzer werden nach Beendigung des Vertragsverhältnisses unter Berücksichtigung der gesetzlichen Aufbewahrungsfristen
                            gelöscht. Weitere
                            Informationen zum Datenschutz finden Sie unter <a href="{{route('content.page',['pageID'=>'datenschutz'])}}">www.lubey.de/datenschutz</a>.</p>
                    </li>
                </ul>
            </div>
    </section>
@endsection

