<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>AI Market | Kontaktoa</title>
    <link rel="icon" href="../irudiak/IKONOAK/favicon_dark.svg" media="(prefers-color-scheme: dark)">
    <link rel="icon" href="../irudiak/IKONOAK/favicon_light.svg" media="(prefers-color-scheme: light)">
    <script src="https://kit.fontawesome.com/83f15f6aab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css.css">
    </linkrel>
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
    <div class="kontaktua">
        <div class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d375.34188198830094!2d-2.18120071344725!3d43.05354558108277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd50365ee96e9269%3A0x967b005b094dd634!2sC.%20Urdaneta%2C%206%2C%2020240%20Ordizia%2C%20Guip%C3%BAzcoa!5e1!3m2!1ses!2ses!4v1729588843286!5m2!1ses!2ses"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="helbidea">
            <h2>Helbidea</h2>
            <div><i class="fa-solid fa-location-dot"></i> C. Urdaneta, 6, 20240 Ordizia,
                Guipuzkoa</div>
            <div><i class="fa-solid fa-envelope"></i> administrazioa@iamarket.com</div>
            <div><i class="fa-solid fa-phone"></i> +34 623 34 76 34</div>
        </div>

        <div class="infoForm">
            <h2>Kontaktua</h2>
            <form>
                <label for="name">Izena</label><span class="required">*</span><br>
                <input class="kont" type="text" id="name" required><br>
                <label for="surname">Abizena</label><br>
                <input class="kont" type="text" id="surname"><br>
                <label for="mail">Posta elektronikoa</label><span class="required">*</span><br>
                <input class="kont" type="email" id="mail" placeholder="mail@adibidea.com" required><br>
                <label for="tel">Telefonoa</label><br>
                <input class="kont" type="tel" id="tel" placeholder="123 45 67 89"><br>
                <label for="longtext">Gaia</label><span class="required">*</span><br>
                <textarea class="kont" id="longtext" placeholder="Idatzi zure arazoa..." required></textarea>
                <input class="botoiak" type="submit" value="Bidali"><input class="botoiak" type="reset" value="Ezabatu">

            </form>
        </div>
    </div>
    <footer>
        <?php require_once "../footer.php"; ?>
    </footer>
</body>

</html>