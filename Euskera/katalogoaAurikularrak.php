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
                                <input type="checkbox" name="alurin" id="alurin" />
                                <label for="alurin">Alurin</label> <br>
                                <input type="checkbox" name="msi" id="msi" />
                                <label for="msi">MSI</label> <br>
                                <input type="checkbox" name="lg" id="lg" />
                                <label for="lg">LG</label> <br>
                                <input type="checkbox" name="asus" id="asus" />
                                <label for="asus">Asus</label> <br>
                                <input type="checkbox" name="aoc" id="aoc" />
                                <label for="aoc">AOC</label> <br>
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
            <img id="argazkia" src="../irudiak/PRODUKTUAK/AURIKULARRAK/1.AirPods 4 1.png" />
            <p><b>Marka:</b>Apple</p>
            <p><b>Modeloa:</b>AirPods 4</p>
            <p><b>Prezioa:</b> 149€ </p>
        </div>
        <div id="produktua2">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/AURIKULARRAK/2.AirPods Pro 2ª Generación 1.png" />
            <p><b>Marka:</b>Apple</p>
            <p><b>Modeloa:</b>AirPods Pro 2ª Gen.</p>
            <p><b>Prezioa:</b> 223,99€ </p>
        </div>
        <div id="produktua3">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/AURIKULARRAK/3.AirPods 2ªGeneración 1.png" />
            <p><b>Marka:</b>Apple</p>
            <p><b>Modeloa:</b>AirPods 2ª Gen.</p>
            <p><b>Prezioa:</b>94€ </p>
        </div>
        <div id="produktua4">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/AURIKULARRAK/4.AirPods 3ªGeneración 2 1.png" />
            <p><b>Marka:</b>Apple</p>
            <p><b>Modeloa:</b>AirPods 3ª Gen.</p>
            <p><b>Prezioa:</b> 125,40€ </p>
        </div>
        <div id="produktua5">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/AURIKULARRAK/5.AirPods Max 1.png" />
            <p><b>Marka:</b>Apple</p>
            <p><b>Modeloa:</b>AirPods Max</p>
            <p><b>Prezioa:</b> 403,99€ </p>
        </div>
        <div id="produktua5">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/LASTER.svg" />

        </div>
    </div>

    <footer>
        <?php require_once "../footer.php"; ?>
    </footer>
</body>

</html>