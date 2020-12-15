<?php
/**
 * Template Name: Gut zu Wissen Page
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

    <!-- INTRO
	================================================== -->
    <section id="gut-zu-wissen-intro" class="color-dark-grey page_top" style="padding-bottom: 0"  >
        <div class="container">
        <h1>Gut zu wissen</h1>
        <p style="font-size:1.4em">
                Auf einer Radreise hat man die einzigartige Gelegenheit wunderbar zu entschleunigen, dem hektischen Alltag der Großstadt zu entkommen und die Seele auf dem Bike baumeln zu lassen. Zwischen den Etappen Stopps warten wunderschöne Landschaften und zahlreiche Geschichten auf euch. Um diese genießen zu können, ist eine gewisse Vorbereitung auf die Reise unausweichlich und verschönert euch den Urlaub.
                </p>
                        <p style="font-size:1.4em">
                Wir haben uns Gedanken darüber gemacht und euch nochmal verbildlicht was wir euch bieten, was ihr vergessen könntet und welche Dinge aus unserer Sicht nicht fehlen sollten.
              </p>
                        <p style="font-size:1.4em">
                Bei Fragen und Anregungen schreibt uns gern an <a href="mailto:urlaub@cargobike-adventures.de"><span style="color:blue">urlaub@cargobike-adventures.de</span></a> und wir kommen auf euch zurück
            </p>
       </div>
    </section>
    <!-- introduction -->

    
    <!-- akordion
	================================================== -->
    <section id="section-faq-akordion" class="color-dark-grey" >
        <div class="container">
            <div class="panel-group" id="accordion">
                 <!-- container -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            Rund um das Bike
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                        <p style="font-size:1.2em">
                            Wir statten die Bikes außerdem mit einigen Annehmlichkeiten für eure Reise aus. Zur Grundausstattung gehören neben StVZO-konformer Beleuchtung auch ein Rückspiegel, ein fest installiertes, sowie ein extra ABUS Fahrradschloss und je Vermietung eine Luftpumpe dazu.
                        </p>
                        <p style="font-size:1.2em">
                                    Die Reichweite deiner Akkus variiert je nach Stärke der Unterstützung. Die maximale Reichweite beim schwächsten Modus „Eco“ beträgt ca. 200km. Danach rollt das Lastenrad natürlich weiter, ihr müsst dann aber ohne motorische Unterstützung auskommen.
                        </p>
                        <p style="font-size:1.2em">
                                    Um die Akkus von nahezu 0% auf 100% aufzuladen benötigt ihr ca. 3 Std. Zeit. Ihr könnt die Akkus vom Bike entfernen und sie an einer Steckdose laden, oder aber auch das Bike direkt mit dem Strom verbinden – so werden beide Akkus nacheinander geladen und man spart sich das Geschleppe. Auch die stärksten Regengüsse können den Cargobikes und der Elektronik nichts anhaben, ein Tauchgang im Bach kann aber zu einem selbstverschuldetem Ausfall führen - wir raten dringend davon ab es zu versuchen.
                        </p>
                        <p style="font-size:1.2em">
                                    Solltet Ihr selbst keine besitzen, geben wir euch 2 Ortlieb Fahrradtaschen für den Gepäckträger mit. Diese bieten mit je 20 Litern Volumen einiges an zusätzlichem Stauraum, sind komplett wasserdicht und abnehmbar. Je nachdem ob und wenn ja, wie viele Kinder ihr mitnehmt, bleibt euch in der vorderen Box noch einiges an Stauraum zum Transport von privaten Gegenstände frei zur Verfügung.
                        </p>
                        <p style="font-size:1.2em">
                                    Solltet ihr Extrawünsche haben dann lasst es uns wissen. Am Ende des Tages ist fast nichts unmöglich.        
                        </p>

                        </div>
                    </div>
                </div>
                <!-- container -->
                
                <!-- container -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            Urlaub mit Kindern
                            </a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <h3>Urlaub mit Kindern im Cargobike, geht das überhaupt? Und wenn ja, wie viele!?</h3>
                          
                            <p style="font-size:1.2em">
                            Grundsätzlich sei gesagt, dass eine Radreise mit den Kleinen absolut möglich ist. Mit einem unserer Riese & Müller Load75 E-Cargobikes kann man bis zu 3 Kinder mitnehmen. Das kommt natürlich auch auf deren Größe und Aktivität an – Platz ist genügend vorhanden! Es lassen sich bis zu 3 Kindersitze plus Gurte verbauen. Aus eigener Erfahrung und derer befreundeter Eltern hat sich gezeigt, dass die Kids im Bike sogar, wie auch im Auto, entspannt schlafen können. Hierzu empfehlen wir die Mitnahme von Nackenhörnchen und, je nach Temperatur, auch von Decken für die Kleinen. Während ihr fahrt und in die Pedale tretet bewegen sich die Kinder schließlich kaum. Als 5 köpfige Familie, bestehend aus 2 Erwachsenen plus 3 Kindern, könnt ihr mit 2 Cargobikes losziehen. In einem Bike verstauen wir sämtliche Ausrüstung, im anderen werden die Kids transportiert - so steht dem Abenteuer nichts mehr im Weg.
                            </p>    
                        </div>
                    </div>
                </div>
                 <!-- container -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            Urlaub mit Hund
                            </a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p style="font-size:1.2em">
                            Gar kein Problem, wir lieben Vierbeiner! Allerdings dürfen Hunde nicht mit in das Innenzelt. Im Vorzelt, den sogenannten Apsiden, können es sich eure Liebsten gemütlich machen. So niedlich die Pfoten eures Liebsten auch sind, sie beschädigen den Zeltboden und führen zu hohen Reparaturkosten. In der Transportbox selbst solltet ihr nur darauf achten, dass Ihr leicht zu beschädigende Dinge wie Transporthüllen etc. zum Beispiel mit einer reißfesten Decke schützt.
                            </p>
                        <p style="font-size:1.2em">
                            Wir bitten wir euch, bei einer Buchung anzugeben, dass ihr eure Fellnase mit in den Urlaub nehmt. Im Anschluss an eure Reise werden das Zelt und Bike gründlich gereinigt, damit die nächsten Abenteurer auch eine schöne Zeit haben.
                            </p>
                        <p style="font-size:1.2em">
                            Solltet Ihr Fragen rund um das Thema Radreisen mit Hund haben dann schreibt uns gerne an: <a href="mailto:urlaub@cargobike-adventures.de><span style="color:blue">urlaub@cargobike-adventures.de</span></a>
                            </p>
                        </div>
                    </div>
                </div>

                 <!-- container -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                            Routenplanung & Navigation
                            </a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                        <p style="font-size:1.2em">
                        Wohin können wir? Wo gibt’s die schönsten Strecken? Wie weit kommen wir an einem Tag oder in einer Woche? Viele von Euch werden viele Fragen im Kopf haben – wir versuchen sie für Euch im Vorhinein zu beantworten. Ob ihr euch nämlich an bekannten Radwegen wie dem Berlin-Kopenhagen Radweg oder dem Havelradweg orientieren wollt, auf eigene Faust quer Feld ein tourt oder von uns individuell beraten werden wollt, der Weg ist das Ziel und die Genugtuung eines Aktivurlaubs gibt euch Recht.
                        </p>
                        <p style="font-size:1.2em">
                        An unseren Bikes könnt ihr eure Handys mittels der entsprechenden Halterung befestigen und einen Routenplaner (z.B. Komoot) laufen lassen. So verpasst ihr keine Abzweigung und bleibt immer auf dem richtigen Pfad.
                        </p>
                        </div>
                    </div>
                </div>
                 <!-- container -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                            Sicherheit & Versicherung
                            </a>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p style="font-size:1.2em">
                            Was passiert im Falle eines Diebstahls oder wenn ich einen Unfall mit dem Rad baue? Da haben wir in Zusammenarbeit mit der ENRA Fahrradversicherung ein tolles Angebot für euch. In einer Standardbuchung seid ihr in jedem Falle gegen Diebstahl, Teilediebstahl und Vandalismus abgesichert. Soll es noch ein bisschen mehr sein und Ihr wünscht euch das Rundum-sorglos-Paket für euer Abenteuer? Dann bucht das Premium Paket. Neben der Diebstahlversicherung beinhaltet der Extra Service u.a. Eine 24/7 Hotline, wo ihr Unfall-, Pannen- und Sturzschäden melden könnt und euch am Ort des Geschehens geholfen wird. Der Pickup Service* im Premium Paket gilt europaweit und transportiert euch zum Start oder Tagesetappe oder zur nächstgelegenen Werkstatt.
                            </p>
                            <p style="font-size:1.2em">
                            2 Schlösser – bitte in jedem Fall über Nacht beide verwenden und das Fahrrad an einen befestigten Gegenstand, möglichst in Zeltnähe, anschließen.
                            </p>
                            <p style="font-size:1.2em">
                            <span style="font-size: 0.7em">* Ausführliche Informationen zum Umfang der Premium Versicherung findet ihr in den AGBs</span>
                            </p>
                        </div>
                    </div>
                </div>

                 <!-- container -->
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                            Rund um das Bike
                            </a>
                        </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p style="font-size:1.2em">
                            Wir statten die Bikes außerdem mit einigen Annehmlichkeiten für eure Reise aus. Zur Grundausstattung gehören neben StVZO-konformer Beleuchtung auch ein Rückspiegel, ein fest installiertes, sowie ein extra ABUS Fahrradschloss und je Vermietung eine Luftpumpe dazu.
                            <p style="font-size:1.2em">
                            Die Reichweite deiner Akkus variiert je nach Stärke der Unterstützung. Die maximale Reichweite beim schwächsten Modus „Eco“ beträgt ca. 200km. Danach rollt das Lastenrad natürlich weiter, ihr müsst dann aber ohne motorische Unterstützung auskommen.
                            </p>
                            <p style="font-size:1.2em">
                            Um die Akkus von nahezu 0% auf 100% aufzuladen benötigt ihr ca. 3 Std. Zeit. Ihr könnt die Akkus vom Bike entfernen und sie an einer Steckdose laden, oder aber auch das Bike direkt mit dem Strom verbinden – so werden beide Akkus nacheinander geladen und man spart sich das Geschleppe. Auch die stärksten Regengüsse können den Cargobikes und der Elektronik nichts anhaben, ein Tauchgang im Bach kann aber zu einem selbstverschuldetem Ausfall führen - wir raten dringend davon ab es zu versuchen.
                            </p>
                            <p style="font-size:1.2em">
                            Solltet Ihr selbst keine besitzen, geben wir euch 2 Ortlieb Fahrradtaschen für den Gepäckträger mit. Diese bieten mit je 20 Litern Volumen einiges an zusätzlichem Stauraum, sind komplett wasserdicht und abnehmbar. Je nachdem ob und wenn ja, wie viele Kinder ihr mitnehmt, bleibt euch in der vorderen Box noch einiges an Stauraum zum Transport von privaten Gegenstände frei zur Verfügung.
                            </p>
                            <p style="font-size:1.2em">
                            Solltet ihr Extrawünsche haben dann lasst es zu uns wissen. Am Ende des Tages ist fast nichts unmöglich.
                            </p>
                        </div>
                    </div>
                </div>

                 <!-- container -->
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                            Camping: Zelt
                            </a>
                        </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p style="font-size:1.2em">
                            Viele denken bei Camping Urlaub an kleine Zelte, ungemütliche Sitzpositionen auf dem Boden und Rückenschmerzen von dünnen Matten. Wir von Cargobike Adventures schicken euch in einen komfortablen Aktivurlaub. Mit unseren E-Cargobikes könnt ihr eine große Menge an Camping Equipment mit in den Urlaub nehmen und müsst so auf keine Annehmlichkeiten in der schönsten Zeit des Jahres verzichten.
                            </p>
                            <p style="font-size:1.2em">
                            Wir haben uns dazu entschlossen, keine klassischen Zelte mit Gestänge zu verleihen sondern hier voll auf Innovation, Robustheit und Langlebigkeit zu setzen. Wir geben euch ein extrem robustes, aufblasbares Zelt des in Hamburg sitzenden Herstellers Heimplanet inklusive Pumpe mit. Ihr schließt die Pumpe an das Ventil des Zeltbogens an, pumpt ca. eine Minute und das Zelt steht. Heringe sichern das Zelt vom Wegfliegen - schon habt ihr euer Eigenheim für die Nacht aufgebaut. Schaut euch um, es gibt viel zu entdecken und das Zelt ist ein echter Hingucker.
                            </p>
                            <p style="font-size:1.2em">
                            Wir haben bereits ein sogenanntes Groundsheet, also einen extra Boden an das Zelt angebracht. So wird der Zeltboden vor übermäßiger Abnutzung geschützt und die Lebensdauer erhöht.
                            </p>
                        </div>
                    </div>
                </div>

                 <!-- container -->
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                            Schlafsack
                            </a>
                        </h4>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p style="font-size:1.2em">
                            Bitte denkt daran, dass Schlafsäcke nicht Standard bei einer Buchung sind!
                            </p>
                            <p style="font-size:1.2em">
                            Wir können keine Schlafsäcke als Leihartikel anbieten. Die ständige Reinigung würde die Modelle extrem schnell altern lassen und sich absolut mit unserer Idee von umweltbewusstem Handeln im Allgemeinen beißen. Hier sind wir dabei, mit Herstellern an Lösungen zu arbeiten um euch gute Konditionen für entsprechende Produkte anzubieten. Solltet ihr vorab eine Beratung zum Thema brauchen dann sagt uns Bescheid, wir helfen euch gerne und kompetent weiter. Bitte denkt also an Decken oder einen eigenen Schlafsack wenn ihr aufbrecht. Neben dem Schlafsack empfiehlt es sich, ein eigenes Kissen dabei zu haben. Da ihr weniger auf das Gewicht achten müsst, könnt ihr ruhig eure Kuschelkissen von zu Hause einpacken. Solltet ihr ohnehin mit dem Gedanken einer Neuanschaffung (z.B. auch für Wandertouren) spielen, informiert euch im Fachgeschäft was es für Modelle am Markt gibt und testet euch durch – nur so findet ihr euren Favoriten. Bei den Kollegen von Globetrotter in Steglitz z.B. kann man sich prima in verschiedene Modelle reinlegen um den geeigneten Schlafsack zu finden.
                            </p>
                        </div>
                    </div>
                </div>

                   <!-- container -->
                   <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" style="font-size: 24px !important">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                            Isomatten
                            </a>
                        </h4>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p style="font-size:1.2em">
                            Ähnlich wie bei den Schlafsäcken verhält es sich auch mit den Isomatten. Die Produkte sind sensibel in der Handhabung und definieren sich außerdem als hygienisch relevant. Wir wollen daher keine Isomatten als Leihartikel anbieten, haben aber auch hier eine Lösung für euch parat. Gemeinsam mit dem Anbieter VAUDE bieten wir euch ausgewählte Modelle zum Kauf an. Eine Beratung geben wir euch gerne, schaut mal im Shop vorbei und kontaktiert uns bei Fragen und Anregungen.
                            </p>
                            <p style="font-size:1.2em">
                            Da wir neben Rad Enthusiasten auch Outdoor erfahren sind, haben wir euch vom Anbieter VAUDE Modelle rausgesucht, die wir euch zum Kauf anbieten. Schaut dazu gerne mal ab Anfang 2021 in unserem Shop vorbei.
                            </p>
                            <p style="font-size:1.2em">
                            Wir statten euch, je nach Wunsch, mit Isomatten für euren Trip aus. Aus hygienischen Gründen bitten wir euch, Bettbezügen zu verwenden. Wir säubern und desinfizieren die Leihmodelle nach jeder Vermietung, mit eurer Hilfe schaffen wir aber eine deutlich längere Lebensdauer und können nachhaltiger denken.
                            </p>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </section>
  <!-- INTRO
	================================================== -->

 

<?php
get_footer();
?>
