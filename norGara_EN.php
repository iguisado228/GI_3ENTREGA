<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>AI Market | Nor gara</title>
    <link rel="icon" href="irudiak/IKONOAK/favicon_dark.svg" media="(prefers-color-scheme: dark)">
    <link rel="icon" href="irudiak/IKONOAK/favicon_light.svg" media="(prefers-color-scheme: light)">
    <script src="https://kit.fontawesome.com/83f15f6aab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css.css">
    </linkrel>
</head>

<body>
    <header>
        <div class="header">
            <a href="hasiera_EN.html"><img class="logo" src="irudiak/IKONOAK/LOGO.svg" alt="Logoa" height="150px"
                    padding="8px" class="center"></a>
        </div>
    </header>
    <div class="sticky">
        <div class="navbar">
            <div class="left">
                <a class="left" href="hasiera_EN.html">Home</a>
                <a class="left active" href="norGara_EN.html">About us</a>
                <div class="subnav left">
                    <button class="subnavbtn">Catalogue <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="katalogoa_EN.html"><b>All Products |</b></a>
                        <a href="katalogoaMugikorrak_EN.html">Mobile phones</a>
                        <a href="katalogoaOrdenagailuak_EN.html">Laptops</a>
                        <a href="katalogoaMonitoreak_EN.html">Screens</a>
                        <a href="katalogoaAurikularrak_EN.html">Headphones</a>
                    </div>
                </div>
                <a class="left" href="prodSaldu_EN.html">Sell your products</a>
                <a class="left" href="kontaktua_EN.html">Contact us</a>
            </div>
            <div class="right">
                <a class="right">
                    <form action="buscar.php" method="GET">
                        <input type="search" name="query" placeholder="Search...">
                    </form>
                </a>
                <a class="right" href="#saskia"><i class="fa-solid fa-cart-shopping"></i></a>
                <a class="right" href="#saioHasiera"><i class="fa-solid fa-user"></i></a>
                <a class="hizkuntza hiz right" href="hasiera.html"><img src="irudiak/IKONOAK/ikurriña.png"></a>

            </div>
        </div>
    </div>
    <div id="saioHasiera" class="lehioa">
        <div class="lehioa-contenido">
            <a href="#" class="itxi">&times;</a>
            <h2 class="lehioa">Sign in</h2>
            <form>
                <label for="erabiltzailea">User name:</label>
                <input class="sesioHasiera" type="text" id="erabiltzailea" name="erabiltzailea" required><br><br>
                <label for="pasahitza">Password:</label>
                <input class="sesioHasiera" type="password" id="pasahitza" name="pasahitza" required><br><br>
                <button type="submit">Sign in</button>
            </form>
        </div>
    </div>
    <div id="saskia" class="lehioa">
        <div class="lehioa-contenido">
            <a href="#" class="itxi">&times;</a>
            <h2 class="lehioa">Cart</h2>
            <h3>Your cart is empty</h3>
        </div>
    </div>
    <div class="norGara">
        <div class="hisIrudia">
            <img class="norGaraIrudiak" src="irudiak/NOR GARA/LOKALA.png">
        </div>
        <div class="historiaIzenb">
            <h2 class="historia">History</h2>
        </div>
        <div class="historia">
            <p class="historia">
                In 2022, Iraitz Guisado and Ane Soto founded IA Market with a clear goal: to give used mobile phones a
                second life and reduce the environmental impact of electronic devices.
            <p class="historia">

                The two friends observed that millions of phones were discarded each year, even though many could be
                repaired and reused. With this idea in mind, they created IA Market, a company that buys, repairs, and
                sells second-hand or refurbished mobile phones at affordable prices.</p>
            <p class="historia">
                Iraitz, an expert in hardware, used his curiosity about hardware and software to quickly diagnose issues
                with devices and optimize repairs. Ane, experienced in sustainability, took charge of creating a
                business model based on the principles of a circular economy.</p>
            <p class="historia">
                Today, IA Market not only offers mobile phones at lower prices but also helps reduce electronic waste
                and promotes more responsible consumption. Each phone sold is a step towards a more sustainable
                future.<br>
            </p>
        </div>
        <div class="helIrudia">
            <img class="norGaraIrudiak" src="irudiak/NOR GARA/HELBURUAK.png" width="80%">
        </div>
        <div class="helburuakIzenb">
            <h2 class="helburuak">Goals</h2>
        </div>
        <div class="helburuak">
            <p class="helburuak">
                At IA Market, our mission is clear: to reduce the environmental impact of technology by giving used
                mobile phones a new life. We buy, repair, and sell refurbished devices to promote more responsible and
                accessible consumption.</p>
            <p class="helburuak">
                We believe in a circular economy, where products can be reused instead of ending up as electronic waste.
                Additionally, we work to make technology more accessible to everyone by offering high-quality mobile
                phones at fair prices, all while contributing to a more sustainable future.
            </p>
        </div>
    </div>
    <footer>
        <?php require_once "footer.php"; ?>
    </footer>
</body>

</html>