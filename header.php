<?php

function headerSortu () {
    ?><header>
        <div class="header">
            <a href="hasiera.html"><img class="logo" src="irudiak/IKONOAK/LOGO.svg" alt="Logoa" height="150px"
                    padding="8px" class="center"></a>
        </div>
    </header>
    <div class="sticky">
        <div class="navbar">
            <div class="left">
                <a class="left active" href="hasiera.html">Hasiera</a>
                <a class="left" href="norGara.html">Nor gara</a>
                <div class="subnav left">
                    <button class="subnavbtn">Katalogoa <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="katalogoa.html"><b>Produktu guztiak |</b></a>
                        <a href="katalogoaMugikorrak.html">Mugikorrak</a>
                        <a href="katalogoaOrdenagailuak.html">Ordenagailuak</a>
                        <a href="katalogoaMonitoreak.html">Monitoreak</a>
                        <a href="katalogoaAurikularrak.html">Aurikularrak</a>
                    </div>
                </div>
                <a class="left" href="prodSaldu.html">Zure produktuak saldu</a>
                <a class="left" href="kontaktua.html">Kontaktua</a>
            </div>
            <div class="right">
                <a class="right">
                    <form action="buscar.php" method="GET">
                        <input type="search" name="query" placeholder="Bilatu...">
                    </form>
                </a>
                <a class="right" href="#saskia"><i class="fa-solid fa-cart-shopping"></i></a>
                <a class="right" href="#saioHasiera"><i class="fa-solid fa-user"></i></a>
                <a class="hizkuntza hiz right" href="hasiera_EN.html"><img src="irudiak/IKONOAK/uk.png"></a>

            </div>
        </div>
    </div>

<?php
}
?>