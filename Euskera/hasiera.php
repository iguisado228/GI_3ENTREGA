<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">
    <title>AI Market</title>
    <link rel="icon" href="/../irudiak/IKONOAK/favicon_dark.svg" media="(prefers-color-scheme: dark)">
    <link rel="icon" href="/../irudiak/IKONOAK/favicon_light.svg" media="(prefers-color-scheme: light)">

    <script src="https://kit.fontawesome.com/83f15f6aab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css.css" />

</head>

<body>
    <?php require_once "header.php"; 
    echo headerSortu();
    ?>
    <div id="saioHasiera" class="lehioa">
        <div class="lehioa-contenido">
            <a href="#" class="itxi">&times;</a>
            <h2 class="lehioa">Saioa Hasi</h2>
            <form>
                <label for="erabiltzailea">Erabiltzailea:</label>
                <input class="sesioHasiera" type="text" id="erabiltzailea" name="erabiltzailea" required><br><br>
                <label for="pasahitza">Pasahitza:</label>
                <input class="sesioHasiera" type="password" id="pasahitza" name="pasahitza" required><br><br>
                <button type="submit">Saioa Hasi</button>
            </form>
        </div>
    </div>
    <div id="saskia" class="lehioa">
        <div class="lehioa-contenido">
            <a href="#" class="itxi">&times;</a>
            <h2 class="lehioa">Saskia</h2>
            <h3>Saskia hutsik dago</h3>
        </div>
    </div>
    <img class="deskontuak" src="../irudiak/DESKONTUAK/Deskontuak.png" alt="deskontuak">
    <div class="produktuak">
        <h1>Azken produktuak</h1>
    </div>
    <div class="imagenes">
        <div class="imagen" id="imagen1">
            <a href="katalogoaOrdenagailuak.php" class="../irudiak">
                <img src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/1.1Produktua.png" alt="Imagen 1">
            </a>
            <p class="deskribapena">HP 15-FD0079NS</p>
        </div>
        <div class="imagen" id="imagen2">
            <a href="katalogoaMugikorrak.php" class="../irudiak">
                <img src="../irudiak/PRODUKTUAK/MUGIKORRAK/1.XIAOMI REDMI NOTE 13 1.png" alt="Imagen 2">
            </a>
            <p class="deskribapena">Redmi Note 13</p>
        </div>
        <div class="imagen" id="imagen3">
            <a href="katalogoaMonitoreak.php" class="../irudiak">
                <img src="../irudiak/PRODUKTUAK/MONITOREAK/1.1.Produktua.png" alt="Imagen 3">
            </a>
            <p class="deskribapena">MSI G24C4 E2</p>
        </div>
        <div class="imagen" id="imagen4">
            <a href="katalogoaAurikularrak.php" class="../irudiak">
                <img src="../irudiak/PRODUKTUAK/AURIKULARRAK/4.AirPods 3ªGeneración 2.png" alt="Imagen 4">
            </a>
            <p class="deskribapena">AirPods 3ªGen</p>
        </div>
    </div>
    <div class="produktuak">
        <h1>Albisteak</h1>
    </div>
    <div class="albisteak">
        <div class="albisteIrudia1">
            <img src="../irudiak/ALBISTEAK/20241023124623_adimen-artifiziala-dls-zu_amp_w1200.jpg" width="100%">
        </div>
        <div class="izenburua1">
            <h2>EAEko entitateen % 12k darabilte Adimen Artifiziala, Euskadin hasiberria den arloa</h2>
        </div>
        <div class="laburpena1">
            <h5>Euskadiko Adimen Artifizialaren Zentroak (BAIC) teknologia horren lehen diagnostikoa
                egin du. Emandako
                datuen arabera, gutxienez 89 enpresa ari dira AA garatzen, eta eskariari erantzuteko nahikoa ez badira
                ere, 908 pertsonak dute arlo horren inguruko prestakuntzaren bat.</h5>
        </div>
        <div class="albistea1">
            <p>Autonomia Erkidegoan (EAE), entitateen %12,2k Adimen Artifizialeko (AA) sistemak erabiltzen
                dituzte, sektoreak hastapenetan egon arren hazkunde nabarmena erakusten du. Euskadiko Adimen
                Artifizialaren Zentroak (BAIC) 2023ko diagnostiko bat argitaratu du, non AAren ekosistemaren egoera
                aztertzen den. BAIC, 2021ean sortua, 700 eragilek osatzen dute, erakunde publiko, enpresa eta
                prestakuntza-zentroen artean.</p>

            <p>Txostenaren arabera, EAE Estatuaren batez bestekoaren gainetik dago, eta AAren erabilera Erresuma Batua,
                Frantzia edo Alemaniaren parekoa da. Administrazio publikoetan erabilera handiagoa da (%16,4), eta
                enpresen artean 89k AA soluzioak eskaintzen dituzte, iaz 105 milioi euroko fakturazioa lortuz.</p>

            <p>Bestalde, AA hezkuntza eskaintza gora egiten ari da, urtero 900 pertsona espezializatuz, baina oraindik
                ez dira nahikoa eskaerari erantzuteko. Ikerketa alorrean 1.200 profesional ari dira lanean, eta 21
                Datuak Prozesatzeko Zentro eta 6 errendimendu altuko konputazio-zentro daude Euskadin.</p>

            <p>Mikel Jauregi Industria sailburuak AA "iraultza historikoa" dela azpimarratu du, eta euskal industriaren
                nazioarteko lehiakortasuna hobetzeko tresna gisa kokatu du.</p>
        </div>
    </div>
    <div class="albisteak">
        <div class="albisteIrudia2">
            <img src="../irudiak/ALBISTEAK/20241018105413_urko-esnaola_foto610x342.jpg" width="100%">
        </div>
        <div class="izenburua2">
            <h2>Urko Esnaola, Tecnalia: "Robotak edonork programatzea, hori da erronka nagusia"</h2>
        </div>
        <div class="laburpena2">
            <h5>Tecnaliaren robot berrienak ezagutu ditugu ikerketa zentroak Gipuzkoako Zientzia eta Teknolgia Parkean
                duen egoitzan. Urko Esnaola robotika-proiektuetarako zuzendaria: "Irudimenik aurreratuenak ere ez daki
                robotika noraino hel litekeen".</h5>
        </div>
        <div class="albistea2">
            <p>The Business Research Companyren proiekzioen arabera, nazioarteko robotika industriak 120.000 milioi euro
                eragingo du aurten eta 2028an bikoiztu egingo da negozio-bolumena. Europako Batasunean bakarrik, %68ko
                hazkundea espero dute sektorean aurten eta Euskal Herrian Tecnaliada ikerketa robotikoaren
                erreferenteetako bat. Ikerketa zentroak Gipuzkoako Zientzia eta Teknolgia Parkean duen egoitzan hartu
                gaitu Urko Esnaola Tecnaliako robotika-proiektuetarako zuzendariak.</p>

            <p>Hiru robot aurkeztu dizkigu Esnaolak: Robotnik enpresarekin batera garatu duten eta aeronautikarako
                piezak leuntzen dituen Thomas robota, errealitate birtualeko betaurrekak erabiliz leuntzea
                automatizatzeko gai den beso robotikoa, eta NextStage, bitrozeramikak era autonomoan eta ahots aginduz
                muntatzeko gai den humanoidea (baita euskaraz ere).</p>

            <p>Azken urteetan urrats handiak egin ditugu", azaldu du Esnaolak, "eta oso toki onean gaude nazioarteko
                lehian". Etorkizuneko erronka "erraztasuna" dela nabarmendu du Esnaolak, robota "edonork" programa
                dezan: "Inteligentzian egin behar dugu lan, bisio eta adimen artifizialean, gizaki eta roboten arteko
                komunikazioa erraz dezagun". "Aukeraz beteriko" etorkizuna marraztu du Tecnaliako
                robotika-proiektuetarako zuzendariak: "Irudimenik aurreratuenak ere ez daki robotika noraino hel
                litekeen".</p>
        </div>
    </div>

    <footer>
        <?php require_once "../footer.php"; ?>
    </footer>


</body>

</php>