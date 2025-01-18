<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>AI Market | Catalogue</title>
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
                <a class="left" href="norGara_EN.html">About us</a>
                <div class="subnav left active">
                    <button class="subnavbtn">Catalogue <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="katalogoa_EN.html"><b>All products |</b></a>
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
    <div class="general">
        <div class="sidebar">
            <ul class="prod">
                <form>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item1">
                            <label class="accordion-title" for="item1">
                                <h3>Brand:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" id=Samsung name="samsung" value="samsung" />
                                <label for="samsung">Samsung</label><br>
                                <input type="checkbox" id="xiaomi" name="xiaomi" />
                                <label for="xiaomi">Xiaomi</label><br>
                                <input type="checkbox" id="realme" name="realme" />
                                <label for="realme">Realme</label><br>
                                <input type="checkbox" id="apple" name="apple" />
                                <label for="apple">Apple</label><br>
                                <input type="checkbox" id="oneplus" name="oneplus" />
                                <label for="oneplus">OnePlus</label><br>
                            </div>
                        </div>
                    </li>
                    <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item2">
                            <label class="accordion-title" for="item2">
                                <h3>Processor:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="snapdragon" id="snapdragon" />
                                <label for="snapdragon">Snapdragon</label> <br>
                                <input type="checkbox" name="chip" id="chip" />
                                <label for="chip">Chip</label> <br>
                                <input type="checkbox" name="qualcomm" id="qualcomm" />
                                <label for="qualcomm">Qualcomm</label> <br>
                                <input type="checkbox" name="dimensity" id="dimensity" />
                                <label for="dimensity">Dimensity</label> <br>
                            </div>
                        </div>
                    </li> <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item3">
                            <label class="accordion-title" for="item3">
                                <h3>Size (inches):</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="1" id="1" />
                                <label for="1">6-7</label> <br>
                                <input type="checkbox" name="2" id="2" />
                                <label for="2">7-8</label> <br>
                            </div>
                        </div>
                    </li><br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item4">
                            <label class="accordion-title" for="item4">
                                <h3>Operating system:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="android" id="android" />
                                <label for="android">Android</label> <br>
                                <input type="checkbox" name="miui" id="miui" />
                                <label for="miui">MIUI</label> <br>
                                <input type="checkbox" name="oxygenos" id="oxygenos" />
                                <label for="oxygenos">OxygenOs</label> <br>
                                <input type="checkbox" name="ios" id="ios" />
                                <label for="ios">IOS</label> <br>
                            </div>
                        </div>
                    </li> <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item5">
                            <label class="accordion-title" for="item5">
                                <h3>Prize:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="merkea" id="merkea" />
                                <label for="merkea">Cheap (0€-150€)</label> <br>
                                <input type="checkbox" name="aukerakoa" id="aukerakoa" />
                                <label for="aukerakoa">Bargain (150€-250€)</label> <br>
                                <input type="checkbox" name="garestia" id="garestia" />
                                <label for="garestia">Expensive (250€-500€)</label> <br>
                                <input type="checkbox" name="luxuzkoa" id="luxuzkoa" />
                                <label for="luxuzkoa">Luxury (500€+)</label> <br>
                                <br>
                            </div>
                        </div><br><br>
                    </li>

                    <input class="botoiaez" type="reset" id="ezabatu" value="Delete" />


                </form>
            </ul>
        </div>
        <div id="produktua1">
            <img id="argazkia" src="irudiak/PRODUKTUAK/MUGIKORRAK/1.XIAOMI REDMI NOTE 13 1.png" />
            <p><b>Brand:</b>Xiaomi</p>
            <p><b>Model:</b>Redmi Note 13</p>
            <p><b>Price:</b> 164,94€ </p>
        </div>
        <div id="produktua2">
            <img id="argazkia" src="irudiak/PRODUKTUAK/MUGIKORRAK/2.iPhone 13 1.png" />
            <p><b>Brand:</b> Apple</p>
            <p><b>Model:</b> iPhone 13</p>
            <p><b>Price:</b> 472,52€ </p>
        </div>
        <div id="produktua3">
            <img id="argazkia" src="irudiak/PRODUKTUAK/MUGIKORRAK/3.Samsung Galaxy Z Flip 6 1.png" />
            <p><b>Brand:</b>Samsung</p>
            <p><b>Model:</b>Galaxy Z Flip 6</p>
            <p><b>Price:</b>164,94€ </p>
        </div>
        <div id="produktua4">
            <img id="argazkia" src="irudiak/PRODUKTUAK/MUGIKORRAK/4.Redmi Note 13 Pro 5G 1.png" />
            <p><b>Brand:</b>Xiaomi</p>
            <p><b>Model:</b>Redmi Note 13 Pro</p>
            <p><b>Price:</b> 528,99€ </p>
        </div>
        <div id="produktua5">
            <img id="argazkia" src="irudiak/PRODUKTUAK/MUGIKORRAK/5.Realme 12 Pro+5G 1.png" />
            <p><b>Brand:</b>Realme</p>
            <p><b>Model:</b>Realme 12 Pro+5G </p>
            <p><b>Price:</b> 399,00€ </p>
        </div>
        <div id="produktua6">
            <img id="argazkia" src="irudiak/PRODUKTUAK/MUGIKORRAK/6.OnePlus Nord 4 1.png" />
            <p><b>Brand:</b>Oneplus</p>
            <p><b>Model:</b>Nord 4</p>
            <p><b>Price:</b> 519,48€ </p>
        </div>
        <div id="produktua7">
            <img id="argazkia" src="irudiak/PRODUKTUAK/MUGIKORRAK/7.Galaxy Z Fold 6 1.png" />
            <p><b>Brand:</b>Samsung</p>
            <p><b>Model:</b>Galaxy Z Fold 6</p>
            <p><b>Price:</b> 1.701,93€ </p>
        </div>
        <div id="produktua8">
            <img id="argazkia" src="irudiak/PRODUKTUAK/MUGIKORRAK/8.iPhone 12 1.png" />
            <p><b>Brand:</b>Apple</p>
            <p><b>Model:</b>iPhone 12</p>
            <p><b>Price:</b>426</p>
        </div>
        <div id="produktua9">
            <img id="argazkia" src="irudiak/PRODUKTUAK/MUGIKORRAK/9.POCO X6 Pro 5G 1.png" />
            <p><b>Brand:</b>POCO</p>
            <p><b>Model:</b>X6 Pro 5G</p>
            <p><b>Price:</b> 323,95€ </p>
        </div>

    </div>
    <footer>
        <?php require_once "footer.php"; ?>
    </footer>

</body>

</html>