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
<?php require_once "headerEN.php";
    echo createheader();
    ?>
    
    <div class="kontaktua">
        <div class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d375.34188198830094!2d-2.18120071344725!3d43.05354558108277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd50365ee96e9269%3A0x967b005b094dd634!2sC.%20Urdaneta%2C%206%2C%2020240%20Ordizia%2C%20Guip%C3%BAzcoa!5e1!3m2!1ses!2ses!4v1729588843286!5m2!1ses!2ses"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="helbidea">
            <h2>Adress</h2>
            <div><i class="fa-solid fa-location-dot"></i> C. Urdaneta, 6, 20240 Ordizia,
                Guipuzkoa</div>
            <div><i class="fa-solid fa-envelope"></i> administrazioa@iamarket.com</div>
            <div><i class="fa-solid fa-phone"></i> +34 623 34 76 34</div>
        </div>

        <div class="infoForm">
            <h2>Contact form:</h2>
            <form>
                <label for="name">Name</label><span class="required">*</span><br>
                <input class="kont" type="text" id="name" required><br>
                <label for="surname">Surname</label><br>
                <input class="kont" type="text" id="surname"><br>
                <label for="mail">E-mail</label><span class="required">*</span><br>
                <input class="kont" type="email" id="mail" placeholder="mail@example.com" required><br>
                <label for="tel">Phone number</label><br>
                <input class="kont" type="tel" id="tel" placeholder="123 45 67 89"><br>
                <label for="longtext">Subject</label><span class="required">*</span><br>
                <textarea class="kont" id="longtext" placeholder="Write..." required></textarea>
                <input class="botoiak" type="submit" value="Send"><input class="botoiak" type="reset" value="Delete">

            </form>
        </div>
    </div>
    <footer>
        <?php require_once "../footer.php"; ?>
    </footer>
</body>

</html>