<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>AI Market | Katalogoa</title>
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
    
    <div class="general">
        <div class="sidebar">
            <ul class="prod">
                <form>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item1">
                            <label class="accordion-title" for="item1">
                                <h3>Marka:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" id="acer" name="acer" />
                                <label for="acer">Acer</label><br>
                                <input type="checkbox" id=alurin name="alurin"/>
                                <label for="alurin">Alurin</label><br>
                                <input type="checkbox" id="apple" name="apple" />
                                <label for="apple">Apple</label><br>
                                <input type="checkbox" id="asus" name="asus" />
                                <label for="asus">Asus</label><br>
                                <input type="checkbox" id="dell" name="dell" />
                                <label for="dell">Dell</label><br>
                                <input type="checkbox" id="hp" name="hp" />
                                <label for="hp">HP</label><br>
                                <input type="checkbox" id="lenovo" name="lenovo" />
                                <label for="hp">Lenovo</label><br>
                                <input type="checkbox" id=medion name="medion"/>
                                <label for="medion">Medion</label><br>
                                <input type="checkbox" id="msi" name="msi" />
                                <label for="msi">MSI</label><br>
                                <input type="checkbox" id="pccom" name="pccom" />
                                <label for="pccom">PcCom</label><br>
                               
                            </div>
                        </div>
                    </li>
                    <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item2">
                            <label class="accordion-title" for="item2">
                                <h3>Prozesagailua:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="applegpu" id="applegpu" />
                                <label for="applegpu">Apple GPU</label> <br>
                                <input type="checkbox" name="inteli5" id="inteli5" />
                                <label for="inteli5">Intel I5</label> <br>
                                <input type="checkbox" name="inteli7" id="inteli7" />
                                <label for="inteli7">Intel I7</label> <br>
                                <input type="checkbox" name="ryzen5" id="ryzen5" />
                                <label for="ryzen5">Ryzen 5</label> <br>
                                <input type="checkbox" name="ryzen7" id="ryzen7" />
                                <label for="ryzen7">Ryzen 7</label> <br>
                            </div>
                        </div>
                    </li> <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item3">
                            <label class="accordion-title" for="item3">
                                <h3>Memoria:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="1tb16gb" id="1tb16gb" />
                                <label for="1tb16gb">1TB SSD-16GB RAM</label> <br>
                                <input type="checkbox" name="512gb16gb" id="512gb16gb" />
                                <label for="512gb16gb">512GB SSD-16GB RAM</label> <br>
                                <input type="checkbox" name="512gb8gb" id="512gb8gb" />
                                <label for="512gb8gb">512GB SSD-8GB RAM</label> <br>
                                <input type="checkbox" name="256gb16gb" id="256gb16gb" />
                                <label for="256gb16gb">256GB SSD-16GB RAM</label> <br>
                                <input type="checkbox" name="256gb8gb" id="256gb8gb" />
                                <label for="256gb8gb">256GB SSD-8GB RAM</label> <br>
                            </div>
                        </div>
                    </li> <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item4">
                            <label class="accordion-title" for="item4">
                                <h3>Tamaina (pulgadaka):</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="15.6" id="15.6" />
                                <label for="15.6">15,6</label> <br>
                            </div>
                        </div>
                    </li><br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item5">
                            <label class="accordion-title" for="item5">
                                <h3>Sistema eragilea:</h3>
                            </label>
                            <div class="accordion-content">
                               
                                <input type="checkbox" name="macos" id="macos" />
                                <label for="macos">MacOS</label> <br>
                                <input type="checkbox" name="windows10" id="windows10" />
                                <label for="windows10">Windows 10</label> <br>
                                <input type="checkbox" name="windows11" id="windows11" />
                                <label for="windows11">Windows 11</label> <br>
                            </div>
                        </div>
                    </li> <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item6">
                            <label class="accordion-title" for="item6">
                                <h3>Prezioa:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="merkea" id="merkea" />
                                <label for="merkea">Merkea (0€-250€)</label> <br>
                                <input type="checkbox" name="aukerakoa" id="aukerakoa" />
                                <label for="aukerakoa">Aukerakoa (250€-500€)</label> <br>
                                <input type="checkbox" name="garestia" id="garestia" />
                                <label for="garestia">Garestia (500€-800€)</label> <br>
                                <input type="checkbox" name="luxuzkoa" id="luxuzkoa" />
                                <label for="luxuzkoa">Luxuzkoa (800€+)</label> <br>
                                <br>
                            </div>
                        </div><br><br>
                    </li>
 
                    <input class="botoiaez" type="reset" id="ezabatu" value="Ezabatu" />
 
 
                </form>
            </ul>
        </div>
        <div id="produktua1">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/1.2.Produktua.png" />
            <p><b>Marka:</b> HP</p>
            <p><b>Modeloa:</b> FD0079NS</p>
            <p><b>Prezioa:</b> 498€ </p>
        </div>
        <div id="produktua2">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/2.1.Produktua.png" />
            <p><b>Marka:</b> Alurin</p>
            <p><b>Modeloa:</b>  Go Start N24</p>
            <p><b>Prezioa:</b> 239€ </p>
        </div>
        <div id="produktua3">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/3.1.Produktua.png" />
            <p><b>Marka:</b> Lenovo</p>
            <p><b>Modeloa:</b> IdeaPad Gaming 3 15IAH7</p>
            <p><b>Prezioa:</b> 699€</p>
        </div>
        <div id="produktua4">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/4.1.Produktua.png" />
            <p><b>Marka:</b> Apple</p>
            <p><b>Modeloa:</b> MacBook Air Apple M3</p>
            <p><b>Prezioa:</b> 1179€</p>
        </div>
        <div id="produktua5">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/5.1.Produktua.png" />
            <p><b>Marka:</b> Medion</p>
            <p><b>Modeloa:</b> Erazer Crawler E30e</p>
            <p><b>Prezioa:</b> 649€</p>
        </div>
        <div id="produktua6">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/6.1.Produktua.png" />
            <p><b>Marka:</b> Asus</p>
            <p><b>Modeloa:</b> TUF Gaming F15 FX506LH-HN042</p>
            <p><b>Prezioa:</b> 627€</p>
        </div>
        <div id="produktua7">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/7.1.Produktua.png" />
            <p><b>Marka:</b> MSI</p>
            <p><b>Modeloa:</b> Modern 15 B7M-243XES</p>
            <p><b>Prezioa:</b> 509€</p>
        </div>
        <div id="produktua8">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/8.1.Produktua.png" />
            <p><b>Marka:</b> Acer</p>
            <p><b>Modeloa:</b> Gaming Nitro V 15 ANV15-51</p>
            <p><b>Prezioa:</b> 859€</p>
        </div>
        <div id="produktua9">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/9.1.Produktua.png" />
            <p><b>Marka:</b> PcCom</p>
            <p><b>Modeloa:</b> Revolt 3050</p>
            <p><b>Prezioa:</b> 538€ </p>
        </div>
 
    </div>
    <footer>
        <?php require_once "../footer.php"; ?>
    </footer>

</body>

</html>