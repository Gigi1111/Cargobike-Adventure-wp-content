<?php
/**
 * Template Name: Datenschutz Page
 */
$prelaunch_price    = get_post_meta(11, 'prelaunch_price', true);
$launch_price       = get_post_meta(11, 'launch_price', true);
$final_price        = get_post_meta(11, 'final_price', true);
$course_url         = get_post_meta(11, 'course_url', true);
$button_text        = get_post_meta(11, 'button_text', true);
$optin_text         = get_post_meta(11, 'optin_text', true);
$optin_button_text    = get_post_meta(11, 'optin_button_text', true);
//post, key, true means single false set

//greetings
$greetings_content  = get_field('greetings_content');
$greeting_slideshow_1  = get_field('greeting_slideshow_1');
$greeting_slideshow_2  = get_field('greeting_slideshow_2');
$greeting_slideshow_3  = get_field('greeting_slideshow_3');

$news_content  = get_field('news_content');

// advanced Custom Fields
$premium_service_feature_image   = get_field('premium_service_feature_image');
$premium_service_section_title   = get_field('premium_service_section_title');
$premium_service_section_desc    = get_field('premium_service_section_description');
$reason_1_title         = get_field('reason_1_title');
$reason_1_desc          = get_field('reason_1_description');
$reason_2_title         = get_field('reason_2_title');
$reason_2_desc          = get_field('reason_2_description');
$reason_3_title         = get_field('reason_3_title');
$reason_3_desc          = get_field('reason_3_description');


$who_feature_image      = get_field('who_feature_image');
$who_section_title      = get_field('who_section_title');
$who_section_body      = get_field('who_section_body');


$features_section_image      = get_field('features_section_image');
$features_section_title      = get_field('features_section_title');
$features_section_body      = get_field('features_section_body');

$twitter    = get_post_meta(11, 'twitter', true);
$facebook       = get_post_meta(11, 'facebook', true);
$instagram        = get_post_meta(11, 'instagram', true);

$brand_logo    			= get_field('header_logo');
$brand_name       = get_field('header_brand_name');

// column mid ; besonders
$md_section_title      = get_field('md_section_title');
$md_section_body      = get_field('md_section_body');
$col_image_1      = get_field('col_image_1');
$col_content_1      = get_field('col_content_1');
$col_image_2      = get_field('col_image_2');
$col_content_2      = get_field('col_content_2');
$col_image_3      = get_field('col_image_3');
$col_content_3      = get_field('col_content_3');
$col_image_4      = get_field('col_image_4');
$col_content_4      = get_field('col_content_4');
$col_image_5      = get_field('col_image_5');
$col_content_5      = get_field('col_content_5');

// slideshow; camping equipments
$equipment_slideshow_title      = get_field('equipment_slideshow_title');
$equipment_slideshow_sub      = get_field('equipment_slideshow_sub');
// item
$equipment_slideshow_item_title_1      = get_field('equipment_slideshow_item_title_1');
$equipment_slideshow_item_description_1      = get_field('equipment_slideshow_item_description_1');
$equipment_slideshow_item_image_1      = get_field('equipment_slideshow_item_image_1');
// item
$equipment_slideshow_item_title_2      = get_field('equipment_slideshow_item_title_2');
$equipment_slideshow_item_description_2      = get_field('equipment_slideshow_item_description_2');
$equipment_slideshow_item_image_2      = get_field('equipment_slideshow_item_image_2');
// item
$equipment_slideshow_item_title_3      = get_field('equipment_slideshow_item_title_3');
$equipment_slideshow_item_description_3      = get_field('equipment_slideshow_item_description_3');
$equipment_slideshow_item_image_3      = get_field('equipment_slideshow_item_image_3');
// item
$equipment_slideshow_item_title_4      = get_field('equipment_slideshow_item_title_4');
$equipment_slideshow_item_description_4      = get_field('equipment_slideshow_item_description_4');
$equipment_slideshow_item_image_4      = get_field('equipment_slideshow_item_image_4');
// item
$equipment_slideshow_item_title_5      = get_field('equipment_slideshow_item_title_5');
$equipment_slideshow_item_description_5      = get_field('equipment_slideshow_item_description_5');
$equipment_slideshow_item_image_5      = get_field('equipment_slideshow_item_image_5');

// slideshow; bikes
$bike_slideshow_title      = get_field('bike_slideshow_title');
$bike_slideshow_sub      = get_field('bike_slideshow_sub');
// item
$bike_slideshow_item_title_1      = get_field('bike_slideshow_item_title_1');
$bike_slideshow_item_description_1      = get_field('bike_slideshow_item_description_1');
$bike_slideshow_item_image_1      = get_field('bike_slideshow_item_image_1');
// item
$bike_slideshow_item_title_2      = get_field('bike_slideshow_item_title_2');
$bike_slideshow_item_description_2      = get_field('bike_slideshow_item_description_2');
$bike_slideshow_item_image_2      = get_field('bike_slideshow_item_image_2');
get_header();
?>


    <!-- HERO
    ================================================== -->
    <section id="hero">
            <div class="container clearfix">
                <!-- The video -->
                <video autoplay muted loop id="videoPlayer" poster="<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/image-relax.jpg">
                    <source src="<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/cargobike_hero_reel.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay">
                     <?php
                        get_template_part( 'template-parts/hero', 'content' );
                        ?>
                </div>

                
            </div>
            <!-- container -->
    </section>



    <!-- INTRO
	================================================== -->
    <section id="gut-zu-wissen-intro" class="color-dark-grey" style="padding-bottom: 0" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 ">
                    <h1>Datenschutz<wbr>erklärung</h1>
                    <h3>Verantwortlicher für die Datenverarbeitung ist:</h3>
                    <p style="font-size:1.1em">
                        Johannes Weyers<br>
                        Bouchéstr. 12 | Halle 20<br>
                        12435 Berlin<br>
                        ​​​​​​​Deutschland<br>
                        info@more-cargobike.de
                    </p>
                    <p style="font-size:1.4em">
                        Wir freuen uns über Ihr Interesse an unserer Webseite. Der Schutz Ihrer Privatsphäre ist für uns sehr wichtig. Nachstehend informieren wir Sie ausführlich über den Umgang mit Ihren Daten.
                    </p>
                </div>
            </div>
       </div>
    </section>
    <!-- introduction -->

    
    <!-- akordion
	================================================== -->
    <section id="section-faq-akordion" class="color-dark-grey" style="padding: 40px 0;">
        <div class="container">
            <div class="panel-group" id="accordion">
                 <!-- container -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"  style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            1. Zugriffsdaten und Hosting
                            </a>
                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                        <p style="font-size:1.3em">
                        Sie können unsere Webseiten besuchen, ohne Angaben zu Ihrer Person zu machen. Bei jedem Aufruf einer Webseite speichert der Webserver lediglich automatisch ein sogenanntes Server-Logfile, das z.B. den Namen der angeforderten Datei, Ihre IP-Adresse, Datum und Uhrzeit des Abrufs, übertragene Datenmenge und den anfragenden Provider (Zugriffsdaten) enthält und den Abruf dokumentiert.
                        </p>
                        <p style="font-size:1.3em">
                        Diese Zugriffsdaten werden ausschließlich zum Zwecke der Sicherstellung eines störungsfreien Betriebs der Seite sowie der Verbesserung unserer Online-Präsenz ausgewertet. Dies dient gemäß Art. 6 Abs. 1 S. 1 lit. f DSGVO der Wahrung unserer im Rahmen einer Interessensabwägung überwiegenden berechtigten Interessen an einer korrekten Darstellung unserer Online-Präsenz. Alle Zugriffsdaten werden spätestens sieben Tage nach Ende Ihres Seitenbesuchs gelöscht.
                            </p>
                            <p style="font-size:1.3em">
                            Die Dienste zum Hosting und zur Darstellung der Webseite werden teilweise durch unsere Dienstleister im Rahmen einer Verarbeitung in unserem Auftrag erbracht. Soweit im Rahmen der vorliegenden Datenschutzerklärung nichts anderes erläutert wird, werden alle Zugriffsdaten sowie alle Daten, die in dafür vorgesehenen Formularen auf dieser Webseite erhoben werden, auf ihren Servern verarbeitet. Bei Fragen zu unseren Dienstleistern und der Grundlage unserer Zusammenarbeit mit ihnen wenden Sie sich bitte an die in dieser Datenschutzerklärung beschriebenen Kontaktmöglichkeit. Unsere Dienstleister sitzen in den USA. Für die liegt kein Angemessenheitsbeschluss der Europäischen Kommission vor. Unsere Zusammenarbeit mit Ihnen stützt sich auf die folgende Garantie: Standarddatenschutzklauseln der Europäischen Kommission.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- container -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"  style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            2. Datenerhebung und -verwendung bei Kontaktaufnahme
                            </a>
                        </h3>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                        <p style="font-size:1.3em">
                        Wir erheben personenbezogene Daten, wenn Sie uns diese bei einer Kontaktaufnahme mit uns (z.B. per Kontaktformular oder E-Mail) freiwillig mitteilen. Pflichtfelder werden als solche gekennzeichnet, da wir in diesen Fällen die Daten zwingend zur Bearbeitung Ihrer Kontaktaufnahme benötigen und Sie ohne deren Angabe die Kontaktaufnahme nicht versenden können. Welche Daten erhoben werden, ist aus den jeweiligen Eingabeformularen ersichtlich. Wir verwenden die von ihnen mitgeteilten Daten zur Bearbeitung Ihrer Anfragen gemäß Art. 6 Abs. 1 S. 1 lit. b DSGVO. Nach vollständiger Abwicklung Ihrer Kundenanfrage werden Ihre Daten gelöscht, sofern Sie nicht ausdrücklich in eine weitere Nutzung Ihrer Daten gemäß Art. 6 Abs. 1 S. 1 lit. a DSGVO eingewilligt haben oder wir uns eine darüber hinausgehende Datenverwendung vorbehalten, die gesetzlich erlaubt ist und über die wir Sie in dieser Erklärung informieren.
                           </p>
                           
                        </div>
                    </div>
                </div>
                <!-- container -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"  style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            3. Cookies und weitere Technologien
                            </a>
                        </h3>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <h3>3.1 Allgemeine Informationen</h3>
                        <p style="font-size:1.3em">
                        Um den Besuch unserer Webseite attraktiv zu gestalten und die Nutzung bestimmter Funktionen zu ermöglichen, verwenden wir auf verschiedenen Seiten Technologien einschließlich sogenannter Cookies. Cookies sind kleine Textdateien, die automatisch auf Ihrem Endgerät gespeichert werden. Einige der von uns verwendeten Cookies werden nach Ende der Browser-Sitzung, also nach Schließen Ihres Browsers, wieder gelöscht (sog. Sitzungs-Cookies). Andere Cookies verbleiben auf Ihrem Endgerät und ermöglichen uns, Ihren Browser beim nächsten Besuch wiederzuerkennen (persistente Cookies).
Wir verwenden solche Technologien, die für die Nutzung bestimmter Funktionen unserer Webseite (z. B. Präferenzeinstellungen der Webseite) zwingend erforderlich sind. Durch diese Technologien werden IP-Adresse, Zeitpunkt des Besuchs, Geräte- und Browser-Informationen sowie Informationen zu Ihrer Nutzung unserer Webseite (z.B. Informationen zu Ihren Präferenzen) erhoben und verarbeitet. Dies dient im Rahmen einer Interessensabwägung überwiegenden berechtigten Interessen an einer optimierten Darstellung unseres Angebots gemäß Art. 6 Abs. 1 S. 1 lit. f DSGVO.
                            </p>
                            <p style="font-size:1.3em">
                            Zudem verwenden wir Technologien zu Erfüllung der rechtlichen Verpflichtungen, denen wir unterliegen (z.B. um Einwilligungen in die Verarbeitung Ihrer personenbezogenen Daten nachweisen zu können) sowie zu Webanalyse und Online-Marketing. Weitere Informationen hierzu einschließlich der jeweiligen Rechtsgrundlage für die Datenverarbeitung finden Sie in den nachfolgenden Abschnitten dieser Datenschutzerklärung.

Die Cookie-Einstellungen für Ihren Browser finden Sie unter den folgenden Links: <a href="https://support.microsoft.com/de-de/microsoft-edge/cookies-in-microsoft-edge-l%C3%B6schen-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank">Microsoft Edge™</a> / <a href="https://support.apple.com/de-de/guide/safari/sfri11471/12.0/mac/10.14" target="_blank">Safari™</a>  / <a href="https://support.google.com/chrome/answer/95647?hl=de&hlrm=en" target="_blank">Chrome™ </a> / <a href="https://support.mozilla.org/de/products/firefox/protect-your-privacy/cookies" target="_blank">Firefox™ </a> / <a href="https://help.opera.com/de/latest/web-preferences/#cookies" target="_blank">Opera™ </a> Alternativ können Sie auch folgenden Link aufrufen: . Bei der Nichtannahme von Cookies kann die Funktionalität unserer Webseite eingeschränkt sein.
                            </p>
                            <br>
                            <h3>3.2 Einsatz des Jimdo Consent Manager Tool zur Verwaltung von Einwilligungen</h3>
                            <p style="font-size:1.3em">
                            Auf unserer Webseite setzen wir das Jimdo Consent Manager Tool ein, um Sie über die Cookies und die anderen Technologien zu informieren, die wir auf unserer Webseite verwenden, sowie Ihre gegebenenfalls erforderliche Einwilligung in die Verarbeitung Ihrer personenbezogenen Daten durch diese Technologien einzuholen, zu verwalten und zu dokumentieren. Dies ist gemäß Art. 6 Abs. 1 S. 1 lit. c DSGVO zur Erfüllung unserer rechtlichen Verpflichtung gemäß Art. 7 Abs. 1 DSGVO erforderlich, Ihre Einwilligung in die Verarbeitung Ihrer personenbezogenen Daten nachweisen zu können, der wir unterliegen. Das Jimdo Consent Manager Tool ist ein Angebot der Jimdo GmbH, Stresemannstrasse 375, 22761 Hamburg, Deutschland ("Jimdo"). Nach Abgabe Ihrer Cookie-Erklärung auf unserer Webseite speichert der Webserver von Jimdo Ihre IP-Adresse, Datum und Uhrzeit Ihrer Erklärung, Browser-Informationen, Sprache und URL von der die Erklärung gesendet wurde sowie Informationen zu Ihrem Einwilligungsverhalten. Zudem wird ein Cookie eingesetzt, das die Informationen zu Ihrem Einwilligungsverhalten enthält. Ihre Daten werden nach 365 Tagen gelöscht, sofern Sie nicht ausdrücklich in eine weitere Nutzung Ihrer Daten gemäß Art. 6 Abs. 1 S. 1 lit. a DSGVO eingewilligt haben oder wir uns eine darüber hinausgehende Datenverwendung vorbehalten, die gesetzlich erlaubt ist und über die wir Sie in dieser Erklärung informieren.
                            </p>
                           
                        </div>
                    </div>
                </div>
                 <!-- container -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"  style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            4. Einsatz von Cookies und anderen Technologien zu Webanalyse und Werbezwecken
                            </a>
                        </h3>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p style="font-size:1.3em">
                            Soweit Sie hierzu Ihre Einwilligung nach Art. 6 Abs. 1 S. 1 lit. a DSGVO erteilt haben, verwenden wir auf unserer Webseite die nachfolgenden Cookies und andere Technologien von Drittanbietern. Nach Zweckfortfall und Ende des Einsatzes der jeweiligen Technologie durch uns werden die in diesem Zusammenhang erhobenen Daten gelöscht. Sie können Ihre Einwilligung jederzeit mit Wirkung für die Zukunft widerrufen. Weitere Informationen zu Ihren Widerrufsmöglichkeiten finden Sie in dem Abschnitt "Cookies und weitere Technologien". Weitere Informationen einschließlich der Grundlage unserer Zusammenarbeit mit den einzelnen Anbietern finden Sie bei den einzelnen Technologien. Bei Fragen zu den Anbietern und der Grundlage unserer Zusammenarbeit mit ihnen wenden Sie sich bitte an die in dieser Datenschutzerklärung beschriebenen Kontaktmöglichkeit.
                            </p>
                            <br>
                          <h3>Einsatz von Google-Diensten</h3>
                          <p style="font-size:1.3em">
                        Wir verwenden die nachfolgend dargestellten Technologien der Google Ireland Ltd., Gordon House, Barrow Street, Dublin 4, Irland („Google“). Die durch die Google Technologien automatisch erhobenen Informationen über Ihre Nutzung unserer Webseite werden in der Regel an einen Server der Google LLC, 1600 Amphitheatre Parkway Mountain View, CA 94043, USA übertragen und dort gespeichert. Für die USA liegt kein Angemessenheitsbeschluss der Europäischen Kommission vor. Unsere Kooperation stützt sich auf Standarddatenschutzklauseln der Europäischen Kommission. Sofern Ihre IP-Adresse über die Google Technologien erhoben wird, wird sie vor der Speicherung auf den Servern von Google durch die Aktivierung der IP-Anonymisierung gekürzt. Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google übertragen und dort gekürzt. Soweit bei der einzelnen Technologien nichts Abweichendes angeben ist, erfolgt die Datenverarbeitung auf Grundlage einer für die jeweilige Technologie geschlossenen Vereinbarung zwischen gemeinsam Verantwortlichen gemäß Art. 26 DSGVO. Weitergehende Informationen über die Datenverarbeitung durch Google finden Sie in den <a href="https://policies.google.com/privacy?hl=de" target="_blank">Datenschutzhinweisen von Google</a>.
                       </p>
                       <br>
                       <h3> Google Analytics</h3>
                       <p style="font-size:1.3em">
                        Zum Zweck der Webseitenanalyse werden mit Google Analytics Daten (IP-Adresse, Zeitpunkt des Besuchs, Geräte- und Browser-Informationen sowie Informationen zu Ihrer Nutzung unserer Webseite) automatisch erhoben und gespeichert, aus denen unter Verwendung von Pseudonymen Nutzungsprofile erstellt werden. Hierzu können Cookies eingesetzt werden. Ihre IP-Adresse wird grundsätzlich nicht mit anderen Daten von Google zusammengeführt. Die Datenverarbeitung erfolgt auf Grundlage einer Vereinbarung über die Auftragsverarbeitung durch Google.
                        </p>
                        <br>
                        <h3> Google Maps</h3>
                        <p style="font-size:1.3em">
                        Zur visuellen Darstellung von geographischen Informationen werden durch Google Maps Daten über Ihre Nutzung der Maps-Funktionen, insbesondere die IP-Adresse sowie Standortdaten, erhoben, an Google übermittelt und anschließend von Google verarbeitet. Wir haben keinen Einfluss auf diese anschließende Datenverarbeitung.
                         </p>

                        </div>
                    </div>
                </div>
                 <!-- container -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"  style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                            5. Kontaktmöglichkeiten und Ihre Rechte
                            </a>
                        </h3>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                        <p style="font-size:1.3em">
                        Als Betroffener haben Sie folgende Rechte:
                          </p>
                          <p style="font-size:1.3em">
                            <ul>
                                <li style="font-size:1.3em">
                                gemäß Art. 15 DSGVO das Recht, in dem dort bezeichneten Umfang Auskunft über Ihre von uns verarbeiteten personenbezogenen Daten zu verlangen;
                                </li>
                                <li style="font-size:1.3em">
                                gemäß Art. 16 DSGVO das Recht, unverzüglich die Berichtigung unrichtiger oder Vervollständigung Ihrer bei uns gespeicherten personenbezogenen Daten zu verlangen;
                                </li>
                                <li style="font-size:1.3em">
                                gemäß Art. 17 DSGVO das Recht, die Löschung Ihrer bei uns gespeicherten personenbezogenen Daten zu verlangen, soweit nicht die weitere Verarbeitung
                                    <ul>
                                        <li style="font-size:1em">zur Ausübung des Rechts auf freie Meinungsäußerung und Information;
                                        </li>
                                        <li style="font-size:1em">zur Erfüllung einer rechtlichen Verpflichtung;
                                        </li>
                                        <li style="font-size:1em">aus Gründen des öffentlichen Interesses oder
                                        </li>
                                        <li style="font-size:1em">zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen erforderlich ist;
                                        </li>
                                    </ul>
                                </li>
                                <li style="font-size:1.3em">
                                gemäß Art. 18 DSGVO das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen, soweit
                                
                                    <ul>
                                        <li style="font-size:1em">die Richtigkeit der Daten von Ihnen bestritten wird;
                                        </li>
                                        <li style="font-size:1em">die Verarbeitung unrechtmäßig ist, Sie aber deren Löschung ablehnen;
                                        </li>
                                        <li style="font-size:1em">wir die Daten nicht mehr benötigen, Sie diese jedoch zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen benötigen oder
                                        </li>
                                        <li style="font-size:1em">Sie gemäß Art. 21 DSGVO Widerspruch gegen die Verarbeitung eingelegt haben;
                                        </li>
                                    </ul>
                                </li>
                                <li style="font-size:1.3em">
                                gemäß Art. 20 DSGVO das Recht, Ihre personenbezogenen Daten, die Sie uns bereitgestellt haben, in einem strukturierten, gängigen und maschinenlesebaren Format zu erhalten oder die Übermittlung an einen anderen Verantwortlichen zu verlangen;
                                </li>
                                <li style="font-size:1.3em">
                                gemäß Art. 77 DSGVO das Recht, sich bei einer Aufsichtsbehörde zu beschweren. In der Regel können Sie sich hierfür an die Aufsichtsbehörde Ihres üblichen Aufenthaltsortes oder Arbeitsplatzes oder unseres Unternehmenssitzes wenden.
                                </li>
                            </ul>
                          </p>
                          <p style="font-size:1.3em">
                          Bei Fragen zur Erhebung, Verarbeitung oder Nutzung Ihrer personenbezogenen Daten, bei Auskünften, Berichtigung, Einschränkung oder Löschung von Daten sowie Widerruf erteilter Einwilligungen oder Widerspruch gegen eine bestimmte Datenverwendung wenden Sie sich bitte direkt an uns über die Kontaktdaten in unserem Impressum.
                          </p>
                          <br>
                       <h3>Widerspruchsrecht</h3>
                          <p style="font-size:1.3em">
                          Soweit wir zur Wahrung unserer im Rahmen einer Interessensabwägung überwiegenden berechtigten Interessen personenbezogene Daten wie oben erläutert verarbeiten, können Sie dieser Verarbeitung mit Wirkung für die Zukunft widersprechen. Erfolgt die Verarbeitung zu Zwecken des Direktmarketings, können Sie dieses Recht jederzeit wie oben beschrieben ausüben. Soweit die Verarbeitung zu anderen Zwecken erfolgt, steht Ihnen ein Widerspruchsrecht nur bei Vorliegen von Gründen, die sich aus Ihrer besonderen Situation ergeben, zu.
                        </p>
                        <p style="font-size:1.3em">
                        Nach Ausübung Ihres Widerspruchsrechts werden wir Ihre personenbezogenen Daten nicht weiter zu diesen Zwecken verarbeiten, es sei denn, wir können zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die Ihre Interessen, Rechte und Freiheiten überwiegen, oder wenn die Verarbeitung der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen dient

Dies gilt nicht, wenn die Verarbeitung zu Zwecken des Direktmarketings erfolgt. Dann werden wir Ihre personenbezogenen Daten nicht weiter zu diesem Zweck verarbeiten.
                          </p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
  <!-- INTRO
	================================================== -->

      <!-- quote
    ================================================== -->
    <!-- <section id="introduction" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6 left">
                    <blockquote class="wp-block-quote is-style-large">
                    <span class="" style="font:bold 84px / 5px 'Noe Display'">“</span>
                        <p> <?php echo $news_content; ?></p>
                        <cite class=""><a href="https://www.tagesspiegel.de/" onclick="javascript:window.open('https://www.tagesspiegel.de/'); return false;">Tagesspiegel</a></cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section> -->

     

  

   

<?php
get_footer();
?>
