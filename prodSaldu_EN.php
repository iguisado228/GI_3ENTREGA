<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>AI Market | Zure produktuak saldu</title>
    <link rel="icon" href="irudiak/IKONOAK/favicon_dark.svg" media="(prefers-color-scheme: dark)">
    <link rel="icon" href="irudiak/IKONOAK/favicon_light.svg" media="(prefers-color-scheme: light)">
    <script src="https://kit.fontawesome.com/83f15f6aab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css.css">
    </linkrel>
</head>

<body>
<?php require_once "headerEN.php";
    echo createheader();
    ?>
        <div class="formularioa">
            <div class="produktua">
                <h2 id="formularioa">Fill this form with your product's info</h2>
                <br>
                <form action="/action_page.php">
                    <label for="modeloa">Product type:</label><br>
                    <select name="modeloa" id="mota">
                        <option value="mugikorra">Mobile phone</option>
                        <option value="ordenagailua">Laptop</option>
                        <option value="aurikularra">Headphone</option>
                        <option value="monitorea">Screen</option>
                    </select> <br>
                    <label for="marka">Brand:</label><br>
                    <input type="text" name="marka" id="marka" /><br>
                    <label for="modeloa">Model:</label><br>
                    <input type="text" name="modeloa" id="modeloa" /><br>
                    <label for="memoria">Memory:</label><br>
                    <input type="text" name="Memoria" id="memoria" /><br>
                    <label for="kolorea">Color:</label><br>
                    <input type="color" name="kolorea" id="kolorea" /><br>
                    <label for="erosketaData">Date of purchase:</label><br>
                    <input type="date" name="erosketaData" id="erosketaData" /><br>
                    <br>
                    <input type="submit" class="botoiak1" value="Send">
                </form>
            </div>

            <div class="hornitzailea">
                <h2 id="formularioa">Fill this form with your info</h2>
                <br>
                <form action="/action_page.php"></form>
                <label for="izena">Name:</label><br>
                <input type="text" name="izena" id="izena" /><br>
                <label for="abizena">Surname:</label><br>
                <input type="text" name="abizena" id="abizena" /><br>
                <label for="postaElektronikoa">E-mail:</label><br>
                <input type="email" name="postaElektronikoa" id="postaElektronikoa"
                    placeholder="example@gmail.com" /><br>
                <label for="helbidea">Adress:</label><br>
                <input type="text" name="helbidea" id="helbidea" /><br>
                <label for="telefonoZenbakia">Phone number:</label><br>
                <input type="tel" name="telefonoZenbakia" id="telefonoZenbakia" /><br>
                <br><br><br>
                <input type="submit" class="botoiak1" value="Send">
                </form>
            </div>
        </div>
        <footer>
            <div class="footer">
                <div class="footerra">
                    <div class="footlogo"><img src="irudiak/IKONOAK/LOGO txuria.svg" width="100px"></div>
                    <div class="foothelb footleft"><i class="fa-solid fa-location-dot"></i> C. Urdaneta, 6, 20240
                        Ordizia,
                        Guipuzkoa</div>
                    <div class="footmail footleft"><i class="fa-solid fa-envelope"></i> administrazioa@iamarket.com
                    </div>
                    <div class="foottel footleft"><i class="fa-solid fa-phone"></i> +34 623 34 76 34</div>
                </div>
                <div class="footrights"><i class="fa-solid fa-copyright"></i> 2024 AI MARKET S.L.</div>

            </div>
        </footer>
    </body>

</html>

</body>

</html>