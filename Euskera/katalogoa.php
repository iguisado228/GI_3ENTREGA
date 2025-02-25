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

    <div id="saskia" class="lehioa">
        <div class="lehioa-contenido">
            <a href="#" class="itxi">&times;</a>
            <h2 class="lehioa">Saskia</h2>
            <h3>Saskia hutsik dago</h3>
        </div>
    </div>

    <div class="general">
        <div class="sidebar">
            <ul class="prod">
                <form>
                    <li>
                        <label for="modeloa">
                            <h3 class="pm">Produktu mota:</h3>
                        </label>
                        <select name="modeloa" id="modeloa">
                            <option value="../mugikorra">Mugikorra</option>
                            <option value="ordenagailua">Ordenagailua</option>
                            <option value="aurikularra">Aurkilarra</option>
                            <option value="monitorea">Monitorea</option>
                        </select> <br><br>
                    </li>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item1">
                            <label class="accordion-title" for="item1">
                                <h3>Marka:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" id=Samsung name="samsung" value="samsung" />
                                <label for="samsung">Samsung</label><br>
                                <input type="checkbox" id="hp" name="hp" />
                                <label for="hp">HP</label><br>
                                <input type="checkbox" id="asus" name="asus" />
                                <label for="asus">Asus</label><br>
                                <input type="checkbox" id=Samsung name="alurin" value="alurin" />
                                <label for="alurin">Alurin</label><br>
                                <input type="checkbox" id="lenovo" name="lenovo" />
                                <label for="hp">Lenovo</label><br>
                                <input type="checkbox" id="apple" name="apple" />
                                <label for="apple">Apple</label><br>
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
                                <input type="checkbox" name="intel" id="intel" />
                                <label for="intel">Intel</label> <br>
                                <input type="checkbox" name="ryzen" id="ryzen" />
                                <label for="ryzen">Ryzen </label> <br>
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
                                <h3>Tamaina (pulgadaka):</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="1" id="1" />
                                <label for="1">6-7</label> <br>
                                <input type="checkbox" name="2" id="2" />
                                <label for="2">7-8</label> <br>
                                <input type="checkbox" name="3" id="3" />
                                <label for="3">9-10</label> <br>
                                <input type="checkbox" name="4" id="4" />
                                <label for="4">10-11</label> <br>
                                <input type="checkbox" name="5" id="5" />
                                <label for="5">11-12</label> <br>
                                <input type="checkbox" name="6" id="6" />
                                <label for="6">12-13</label> <br>
                                <input type="checkbox" name="7" id="7" />
                                <label for="7">13-14</label> <br>
                                <input type="checkbox" name="8" id="8" />
                                <label for="8">14-15</label> <br>
                                <input type="checkbox" name="9" id="9" />
                                <label for="9">15-16</label> <br>
                                <input type="checkbox" name="10" id="10" />
                                <label for="10">16-17</label> <br>
                            </div>
                        </div>
                    </li><br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item4">
                            <label class="accordion-title" for="item4">
                                <h3>Sistema eragilea:</h3>
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
                                <input type="checkbox" name="macos" id="macos" />
                                <label for="macos">MacOS</label> <br>
                                <input type="checkbox" name="windows" id="windows" />
                                <label for="windows">Windows</label> <br>
                            </div>
                        </div>
                    </li> <br>
                    <li>
                        <div class="accordion-item">
                            <input type="checkbox" class="check" id="item5">
                            <label class="accordion-title" for="item5">
                                <h3>Prezioa:</h3>
                            </label>
                            <div class="accordion-content">
                                <input type="checkbox" name="merkea" id="merkea" />
                                <label for="merkea">Merkea (0€-150€)</label> <br>
                                <input type="checkbox" name="aukerakoa" id="aukerakoa" />
                                <label for="aukerakoa">Aukerakoa (150€-250€)</label> <br>
                                <input type="checkbox" name="garestia" id="garestia" />
                                <label for="garestia">Garestia (250€-500€)</label> <br>
                                <input type="checkbox" name="luxuzkoa" id="luxuzkoa" />
                                <label for="luxuzkoa">Luxuzkoa (500€+)</label> <br>
                                <br>
                            </div>
                        </div><br><br>
                    </li>

                    <input class="botoiaez" type="reset" id="ezabatu" value="Ezabatu" />


                </form>
            </ul>
        </div>
        <div id="produktua1">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MONITOREAK/2.1.Produktua.png" />
            <p><b>Marka:</b>Alurin</p>
            <p><b>Modeloa:</b>CoreVision 100</p>
            <p><b>Prezioa:</b> 85€ </p>
        </div>
        <div id="produktua2">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/1.2.Produktua.png" />
            <p><b>Marka:</b> HP</p>
            <p><b>Modeloa:</b> 15-FD0079NS</p>
            <p><b>Prezioa:</b> 498€ </p>
        </div>
        <div id="produktua3">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/1.XIAOMI REDMI NOTE 13 1.png" />
            <p><b>Marka:</b>Xiaomi</p>
            <p><b>Modeloa:</b>Redmi Note 13</p>
            <p><b>Prezioa:</b>164,94€ </p>
        </div>
        <div id="produktua4">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/3.1.Produktua.png" />
            <p><b>Marka:</b>Lenovo</p>
            <p><b>Modeloa:</b>IdeaPad Gaming 3 15IAH7</p>
            <p><b>Prezioa:</b> 699€ </p>
        </div>
        <div id="produktua5">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/AURIKULARRAK/1.AirPods 4 1.png" />
            <p><b>Marka:</b>Apple</p>
            <p><b>Modeloa:</b>AirPods 4 </p>
            <p><b>Prezioa:</b> 149€ </p>
        </div>
        <div id="produktua6">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/6.OnePlus Nord 4 1.png" />
            <p><b>Marka:</b>Oneplus</p>
            <p><b>Modeloa:</b>Nord 4</p>
            <p><b>Prezioa:</b> 519€ </p>
        </div>
        <div id="produktua7">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/5.1.Produktua.png" />
            <p><b>Marka:</b>Medion</p>
            <p><b>Modeloa:</b>Erazer Crawler E30e</p>
            <p><b>Prezioa:</b> 649€ </p>
        </div>
        <div id="produktua8">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/7.Galaxy Z Fold 6 1.png" />
            <p><b>Marka:</b>Samsung</p>
            <p><b>Modeloa:</b>Galaxy Z Fold6</p>
            <p><b>Prezioa:</b>1701€</p>
        </div>
        <div id="produktua9">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/ORDENAGAILUAK/9.1.Produktua.png" />
            <p><b>Marka:</b>PcCom</p>
            <p><b>Modeloa:</b>Revolt 3050</p>
            <p><b>Prezioa:</b> 538€ </p>
        </div>

    </div>
    <footer>
        <?php require_once "../footer.php"; ?>
    </footer>
</body>

</html>