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
                                <h3>Prozesagailua:</h3>
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
                                <h3>Tamaina (pulgadaka):</h3>
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
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/1.XIAOMI REDMI NOTE 13 1.png" />
            <p><b>Marka:</b>Xiaomi</p>
            <p><b>Modeloa:</b>Redmi Note 13</p>
            <p><b>Prezioa:</b> 164,94€ </p>
        </div>
        <div id="produktua2">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/2.iPhone 13 1.png" />
            <p><b>Marka:</b> Apple</p>
            <p><b>Modeloa:</b> iPhone 13</p>
            <p><b>Prezioa:</b> 472,52€ </p>
        </div>
        <div id="produktua3">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/3.Samsung Galaxy Z Flip 6 1.png" />
            <p><b>Marka:</b>Samsung</p>
            <p><b>Modeloa:</b>Galaxy Z Flip 6</p>
            <p><b>Prezioa:</b>164,94€ </p>
        </div>
        <div id="produktua4">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/4.Redmi Note 13 Pro 5G 1.png" />
            <p><b>Marka:</b>Xiaomi</p>
            <p><b>Modeloa:</b>Redmi Note 13 Pro</p>
            <p><b>Prezioa:</b> 528,99€ </p>
        </div>
        <div id="produktua5">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/5.Realme 12 Pro+5G 1.png" />
            <p><b>Marka:</b>Realme</p>
            <p><b>Modeloa:</b>Realme 12 Pro+5G </p>
            <p><b>Prezioa:</b> 399,00€ </p>
        </div>
        <div id="produktua6">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/6.OnePlus Nord 4 1.png" />
            <p><b>Marka:</b>Oneplus</p>
            <p><b>Modeloa:</b>Nord 4</p>
            <p><b>Prezioa:</b> 519,48€ </p>
        </div>
        <div id="produktua7">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/7.Galaxy Z Fold 6 1.png" />
            <p><b>Marka:</b>Samsung</p>
            <p><b>Modeloa:</b>Galaxy Z Fold 6</p>
            <p><b>Prezioa:</b> 1.701,93€ </p>
        </div>
        <div id="produktua8">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/8.iPhone 12 1.png" />
            <p><b>Marka:</b>Apple</p>
            <p><b>Modeloa:</b>iPhone 12</p>
            <p><b>Prezioa:</b>426</p>
        </div>
        <div id="produktua9">
            <img id="argazkia" src="../irudiak/PRODUKTUAK/MUGIKORRAK/9.POCO X6 Pro 5G 1.png" />
            <p><b>Marka:</b>POCO</p>
            <p><b>Modeloa:</b>X6 Pro 5G</p>
            <p><b>Prezioa:</b> 323,95€ </p>
        </div>

    </div>
    <footer>
        <?php require_once "../footer.php"; ?>
    </footer>

</body>

</html>