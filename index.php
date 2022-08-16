<!DOCTYPE html>
<html>
    <head>
        <title>Sklep</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="menu.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            /* body{
                display:grid;
                background: #ECEFF1;
                grid-template-columns: 12;
            }

            .menu{
                display: flex;
                justify-content: space-evenly;
                grid-column-start: 4;
                grid-column-end: 14;
            }

            img[alt="logo"]{
                height: 90px;
                grid-column-start: 1;
                grid-column-end: 4;
            }

            .szukanie{
                width:495px;
                border: 1px solid black;
                border-right: 0px;
            }

            .szukaj{
                background: #FF5A00;
                height: 90px;
                width: 180px;
            }

            .zaloguj{
                background: #FF5A00;
                width: 180px;
            }

            img[alt="koszyk"]{
                width: 90px;
                height: 80px;
            } */

            body{
                background: rgb(10, 21, 24);
            }

            .wyszukiwanie-l{
                border: 1px solid black;
                border-right: 0px;
                height: 90px;
                padding: 0;
                display: flex;
            }

            .wyszukiwanie-r{
                border-top: 1px solid black;
                border-bottom: 1px solid black;
                height: 90px;
            }

            .szukaj{
                height: 90px;
                background: #FF5A00;
            }

            .menu{
                display: flex;
                align-items: center;
                margin-right: 10px;
            }

            img[alt="koszyk"]{
                width: 100%;
                height: 100%;
            }

            .zaloguj{
                height: 90px;
                background: #FF5A00;
            }

            input[placeholder="szukaj"]{
                width: 200%;
                height: 100%;
                position: absolute;
            }

            .produkty2 .oferta:hover form input{
                color: black;
            }

            .dod_produkt{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
                flex-wrap: wrap;
            }

            .dod_produkt span{
                text-align: center;
                color: white;
            }

            .dod_produkt input[type="checkbox"]{
                align-self: center;
            }

            .oferta{
                display: flex;
            }

            .oferta span{
                color: hsl(217, 15%, 83%);
            }

            .oferta img{
                max-width: 200px;
                max-height: 200px;
                margin: 10px;
            }

            .oferta > div:nth-child(2){
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
            }

            .oferta > div > span:nth-child(1){
                font-weight: bold;
                font-size: 120%;
                color: hsl(217, 15%, 83%);
            }

            .oferta div span:nth-child(3){
                font-weight: bold;
                font-size: 170%;
            }

            .oferta span s{
                color: gray;
            }

            .oferta > div > span:last-child{
                color: lime;
            }

            .produkty{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-evenly;
                width: 80%;
                margin: auto;
            }

            .register{
                display: flex;
                flex-direction: column;
                align-content: center;
                flex-wrap: wrap;
            }

            .produkty2{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-evenly;
                width: 500px;
                margin:auto;
            }

            .czy_edit{
                align-self: center;
                margin-left: 50px;
            }

            .menu-hover-fill{
                margin-left: 15px;
            }

            .dod_produkt div{
                display: flex;
                flex-direction: column;
            }

            .login{
                justify-content: center;
            }

            .moj_profil{
                display: flex;
                justify-content: center;
                color: whitesmoke;
            }

            .moj_profil input{
                background: rgb(10, 21, 24);
            }

            .nie_zarejestrowani{
                display: flex;
                justify-content: space-evenly;       
            }

            .nie_zarejestrowani input{
                background: rgb(10, 21, 24);
                color:hsl(217, 15%, 83%);
            }

            .po_kat{
                display: flex;
                justify-content: space-evenly;
                
            }

            .po_kat input{
                background: rgb(10, 21, 24);
                color:hsl(217, 15%, 83%);
            }

        </style>
    
    </head>

    <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php    


    function strona_menu(){
        echo "<ul class='menu-hover-fill flex flex-col items-start leading-none text-2xl uppercase space-y-4'>";
        echo   "<li><a href='?page=home' data-text='home'>home</a></li>";
        echo   "<li><a href='?page=login' data-text='login'>login</a></li>";
        echo   "<li><a href='?page=register' data-text='register'>register</a></li>";
        echo   "<li><a href='?page=moje_produkty' data-text='moje produkty'>moje produkty</a></li>";
        echo   "<li><a href='?page=koszyk' data-text='koszyk'>koszyk</a></li>";
        echo "</ul>";
    }

    function strona_wyszukiwarka(){
        echo "<div class='wyszukiwarka'>";
        echo "<form method='POST' action='index.php'>";
        echo "<input type='text' name='wysz' placeholder='wyszukuj'> <input type='submit' name='wyszukiwarka' value='🔍'>";
        echo "</form>";
        echo "</div>";
        echo "<div><form method='POST' action='index.php'><input type='submit' name='wysz_po_kategoriach' value='kategorie ←'></form></div>";
    }
                

        /* dodwanie produktu */

            //sztuki*
            //kategoria/e [radio]*
            //cena jednostkowa*
            //marza {%} *
            //data waznosci *
            //sql injection *
            //opcje dostawy [radio]
            //opcja "licytacja"
            //polecana oferta [opcjonalnie]
            //wystawianie faktury VAt [bool]
            //opis
            //zdjecie miniaturka [link]
            //stan [radio]
            //ilosc dostepnych

        /* profil sprzedjacego */

            //potrafi zmienic haslo
            //ok - przy register automatyczne generowanie hasla minimum 8 znakow + 1 znak specjalny i tez pozniej jako walidacja
            //ok - autoryzacja profilu [przez]
            //nie ma mozliwosci usuniecia konta [moze tylko admin]
            //ok - "twoj profil"
            //ok - koszyk z data waznosci
            //ok - wyszukiwarka + po kategorie
            //ok - ma widziec ile dostepnych sztuk
            //czas bycia w koszyku [w zaleznosci czy ma premium]
            //cena w brutto
            //haszowanie hasla automatyczne dzieki db sql
            //nazwa
            //osoba prywatna/firma
            //kontakt
            //osoby polecajacego go {%}
            //zgodnosc z opisem [x.x/5]
            //obsluga kupujacego [x.x/5]
            //koszt wysylki
            //opis
            //przedmioty sprzedajacego
            //wyruzniona oferta [na gorze]

            //ostatni etap
            
            //interfejs wlasciciela/menadzera
            // -> stan towarow [co zostalo kupione, zrealizowane, wyslane]
            // -> inwentaryzacja [ile czego, co i jak {wszystko co nie wyslane}]
            //caly obrot biznesu [ile kasy wplynelo, jaka marza, jaka strata, koszty, zysk {w przedziale czasowym, tydzien, miesiac, rok, calosc}]
            //statystyki uzytkownikow [kto kupil najwiecej, kto najczescie, kto nic nie kupowal, najwiecej wydali itd]
            

            $link=@mysqli_connect("localhost","root","","sklep");
            
            function strona_register($czy=0){
                if($czy){
                    echo "<h2 style='color: red;'>Zle dane</h2>";
                }
                echo "<form method='POST' action='index.php' class='register my-form'>";
                echo "<input type='text' name='imie' placeholder='Imie' required>";
                echo "<input type='text' name='nazwisko' placeholder='Nazwisko' required>";
                echo "<input type='email' name='email' placeholder='email' required>";
                echo "<input type='text' name='login' placeholder='login' required>";
                echo "<div><input type='password' name='haslo' placeholder='haslo' class='register_haslo' value='".generuj_haslo()."' onchange='sprawdzenie(1,0)' required><input type='checkbox' name='odkryj' class='odkryj'><label for='odkryj' onclick='podglad(0)'>podglad</label></div>";
                echo "<div><input type='password' name='haslo1' placeholder='haslo' class='register_haslo' onchange='sprawdzenie(0,1)' required><input type='checkbox' name='odkryj' class='odkryj'><label onclick='podglad(1)' for='haslo1'>podglad</label></div>";
                echo "<input type='checkbox' name='rodo' class='rodo'><label for='rodo' class='rodo'>Rodo</label>";
                echo "<input type='submit' name='register' value='register' class='button'>";
                echo "</form>";
            }

            function get_sprzedawca_id($login, $haslo){
                global $link;
                $query_get_spzedawca_id="SELECT id FROM `uzytkownicy` WHERE login='$login' and haslo='$haslo';";
                $result=mysqli_query($link,$query_get_spzedawca_id);
                $tab=$result->fetch_assoc();
                return $tab["id"];
            }

            function get_sprzedawca($id_sprzedawca){
                global $link;
                $query_get_spzedawca="SELECT * FROM `uzytkownicy` WHERE id='$id_sprzedawca'";
                $result=mysqli_query($link, $query_get_spzedawca);
                $tab=$result->fetch_assoc();
                return $tab;
            }

            function strona_logowanie($czy=0){
                if($czy){
                    echo "<h2 style='color: red;'>Zle dane</h2>";
                }
                echo "<form method='POST' action='index.php' class='login my-form'>";
                echo "<input type='text' name='login' placeholder='login' required>";
                echo "<div><input type='password' name='haslo' placeholder='haslo' class='register_haslo' required><input type='checkbox' name='odkryj' class='odkryj'><label onclick='podglad(0)' for='haslo'>podglad</label></div>";
                echo "<input type='submit' name='zaloguj' value='zaloguj'>";
                echo "</form>";
            }

            function strona_dod_pordukt(){
                echo "<form method='POST' action='index.php' class='dod_produkt'>";
                echo "<span>name</span><input type='text' name='name' require><br>";
                echo "<span>ilosc</span><input type='number' name='ilosc' require><br>";
                echo "<span>cena</span><input type='number' name='cena' require><br>";
                echo "<span>marza</span><input type='number' name='marza' require><br>";
                echo "<span>data waznosci</span><input type='date' name='data_waznosci' require><br>";
                echo "<span>licytacja</span><input type='checkbox' name='licytacja'><br>";
                echo "<span>Darmowa dostawa</span><input type='checkbox' name='wystawianie_faktury_vat'><br>";
                echo "<textarea rows='8' columns='40' name='opis' require></textarea><br>";
                echo "<span>link do zjdecia/miniaturki</span><input type='text' name='zdjecie'><br>";
                echo "<span style='font-size:150%;'>Kategorie</span>";
                echo "<div>";
                echo "<span>elektornika</span><input type='checkbox' name='elektornika'>";
                echo "<span>moda</span><input type='checkbox' name='moda'>";
                echo "<span>dom_i_ogrod</span><input type='checkbox' name='dom_i_ogrod'>";
                echo "<span>supermarket</span><input type='checkbox' name='supermarket'>";
                echo "<span>dziecko</span><input type='checkbox' name='dziecko'>";
                echo "<span>uroda</span><input type='checkbox' name='uroda'>";
                echo "<span>zdrowie</span><input type='checkbox' name='zdrowie'>";
                echo "<span>kultura_i_rozrywka</span><input type='checkbox' name='kultura_i_rozrywka'>";
                echo "<span>sport_i_turystyka</span><input type='checkbox' name='sport_i_turystyka'>";
                echo "<span>motoryzacja</span><input type='checkbox' name='motoryzacja'>";
                echo "</div><br>";
                echo "<input type='submit' name='dodaj' value='dodaj'><br>";
                echo "</form>";
            }

            function strona_edytuj($id){
                $produkt=select_produkt($id);
                echo "<form method='POST' action='index.php' class='edit_produkt'>";
                echo "<input type='hidden' name='id' value='".$id."'>";
                echo "<span>name</span><input type='text' name='name' value='".$produkt["nazwa"]."' require><br>";
                echo "<span>ilosc</span><input type='number' name='ilosc' value='".$produkt["ilosc"]."' require><br>";
                echo "<span>cena</span><input type='number' name='cena' value='".$produkt["cena"]."' require><br>";
                echo "<span>marza</span><input type='number' name='marza' value='".$produkt["marza"]."' require><br>";
                echo "<span>data waznosci</span><input type='date' name='data_waznosci' value='".$produkt["data_waznosci"]."'require><br>";
                echo "<span>licytacja</span><input type='checkbox' name='licytacja'><br><script>document.getElementsByTagName('input')[7].checked=";
                if($produkt["licytacja"]){echo "true";}else{echo "false";}
                echo "</script>";
                echo "<span>Darmowa dostawa</span><input type='checkbox' name='wystawianie_faktury_vat'><br><script>document.getElementsByTagName('input')[8].checked=";
                if($produkt["wystawianie_faktury_vat"]){echo "true";}else{echo "false";}
                echo "</script>";
                echo "<textarea rows='8' columns='40' name='opis' require>".$produkt["opis"]."</textarea><br>";
                echo "<span>link do zjdecia/miniaturki</span><input type='text' name='zdjecie' value='".$produkt["zdjecie_miniaturka"]."'><br>";
                echo "<input type='submit' name='aktualizuj' value='aktualizuj'><br>";
                echo "<input type='submit' name='usun' value='usun'><br>";
                echo "</form>";
            }

            function strona_edit_kategoria($id){
                $kategorie=get_kategoria($id+1);
                // print_r($kategorie);
                echo "<form action='index.php' method='POST'>";
                echo "<span>elektornika</span><input type='checkbox' name='elektornika'>";
                echo "<span>moda</span><input type='checkbox' name='moda'>";
                echo "<span>dom_i_ogrod</span><input type='checkbox' name='dom_i_ogrod'>";
                echo "<span>supermarket</span><input type='checkbox' name='supermarket'>";
                echo "<span>dziecko</span><input type='checkbox' name='dziecko'>";
                echo "<span>uroda</span><input type='checkbox' name='uroda'>";
                echo "<span>zdrowie</span><input type='checkbox' name='zdrowie'>";
                echo "<span>kultura_i_rozrywka</span><input type='checkbox' name='kultura_i_rozrywka'>";
                echo "<span>sport_i_turystyka</span><input type='checkbox' name='sport_i_turystyka'>";
                echo "<span>motoryzacja</span><input type='checkbox' name='motoryzacja'>";
                echo "<input type='hidden' name='id' value='".$id."'>";
                echo "<input type='submit' name='aktualizuj_kat' value='edytuj'>";
                echo "<script>document.getElementsByTagName('input')[1].checked=";
                if($kategorie["elektronika"]){echo "true";}else{echo "false";}
                echo ";";
                echo "document.getElementsByTagName('input')[2].checked=";
                if($kategorie["moda"]){echo "true";}else{echo "false";}
                echo ";";
                echo "document.getElementsByTagName('input')[3].checked=";
                if($kategorie["dom_i_ogrod"]){echo "true";}else{echo "false";}
                echo ";";
                echo "document.getElementsByTagName('input')[4].checked=";
                if($kategorie["supermarket"]){echo "true";}else{echo "false";}
                echo ";";
                echo "document.getElementsByTagName('input')[5].checked=";
                if($kategorie["dziecko"]){echo "true";}else{echo "false";}
                echo ";";
                echo "document.getElementsByTagName('input')[6].checked=";
                if($kategorie["uroda"]){echo "true";}else{echo "false";}
                echo ";";
                echo "document.getElementsByTagName('input')[7].checked=";
                if($kategorie["zdrowie"]){echo "true";}else{echo "false";}
                echo ";";
                echo "document.getElementsByTagName('input')[8].checked=";
                if($kategorie["kultura_i_rozrywka"]){echo "true";}else{echo "false";}
                echo ";";
                echo "document.getElementsByTagName('input')[9].checked=";
                if($kategorie["sport_i_turystyka"]){echo "true";}else{echo "false";}
                echo ";";
                echo "document.getElementsByTagName('input')[10].checked=";
                if($kategorie["motoryzacja"]){echo "true";}else{echo "false";}
                echo "</script>";
                echo "</form>";
            }

            function strona_produktu($id){
                $produkt=select_produkt($id);
                echo "<div class='produkty'>";
                echo "<div class='oferta'>";
                echo "<img src='".$produkt["zdjecie_miniaturka"]."' alt='Brak zdjecia!'>";
                echo "<div>";
                echo "<span class='nazwa'>".$produkt["nazwa"]."</span>";
                echo "<div><span>od ".get_sprzedawca($produkt["id_sprzedawca"])["imie"]." ".get_sprzedawca($produkt["id_sprzedawca"])["nazwisko"]."</span></div>";
                echo "<p>".$produkt["opis"]."</p>";
                echo "<form method='POST' action='index.php'><input type='text' name='id' value='".$produkt["id"]."' hidden><input value='1' style='color: black !important' type='number' name='ilosc' onchange='if(this.value>".$produkt["ilosc_dostepnych"]."){this.value=".$produkt["ilosc_dostepnych"].";} if(this.value<1){this.value=1;}'><input type='submit' style='color: black !important' name='do_koszyka' value='Do koszyka'></form>";
                echo "</div>";

                echo "</div>";
            }

            // function strona_przejdz_dalej(){
            //     echo "<form class='przejdz_dalej'><input type='submit' name='dalej'";
            // }

            function add_produkt($name, $ilosc, $id_sprzedawca, $cena, $marza, $data_warzonsci, $licytacja, $wystawianie_faktury_vat, $opis, $zdjecie){
                global $link;
                $query_add_produkt="INSERT INTO `produkty` (`id`, `nazwa`, `ilosc`, `ilosc_dostepnych`, `id_sprzedawca`, `cena`, `marza`, `data_waznosci`, `licytacja`, `wystawianie_faktury_vat`, `opis`, `zdjecie_miniaturka`) VALUES (NULL, '$name', '$ilosc', '$ilosc', '$id_sprzedawca', '$cena', '$marza', '$data_warzonsci', '$licytacja', '$wystawianie_faktury_vat', '$opis', '$zdjecie')";
                mysqli_query($link, $query_add_produkt);
            }

            function add_kategoria($id_produktu, $x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8, $x9, $x10){
                global $link;
                $query_add_kategoria="INSERT INTO `kategorie` (`id_produktu`, `elektronika`, `moda`, `dom_i_ogrod`, `supermarket`, `dziecko`, `uroda`, `zdrowie`, `kultura_i_rozrywka`, `sport_i_turystyka`, `motoryzacja`) VALUES ('$id_produktu'-1, '$x1', '$x2', '$x3', '$x4', '$x5', '$x6', '$x7', '$x8', '$x9', '$x10')";
                mysqli_query($link,$query_add_kategoria);
            }

            function add_opcje_dostawy($id_produktu, $x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8){
                global $link;
                $query_add_opcje_dostawy="INSERT INTO `opcje_dostawy` (`id_produktu`, `paczkomat_inpost`, `orlen`, `poczta_polska`, `ruch`, `zabka`, `lewiatan`, `abc`, `odbior_osobisty`) VALUES ('$id_produktu', '$x1', '$x2', '$x3', '$x4', '$x5', '$x6', '$x7', '$x8')";
                mysqli_query($link, $query_add_opcje_dostawy);
            }

            function select_produkt($id){
               global $link;
               $query_select_produkt="SELECT * FROM `produkty` WHERE id='$id'";
               $result=mysqli_query($link, $query_select_produkt);
               $tab=$result->fetch_assoc();
               return $tab; 
            }

            function select_produkty_all(){
                global $link;
                $query_select_produkty_all="SELECT * FROM `produkty` LIMIT 255";
                $result=mysqli_query($link, $query_select_produkty_all);
                while($row=$result->fetch_assoc())
                {
                    $tab[] = $row;
                }
                return $tab;
            }

            function select_produkty_current($id_sprzedawca){
                global $link;
                $query_select_produkty_current="SELECT * FROM `produkty` WHERE id_sprzedawca='$id_sprzedawca'";
                $result=mysqli_query($link, $query_select_produkty_current);
                while($row=$result->fetch_assoc())
                {
                    $tab[] = $row;
                }
                if(!isset($tab)){
                    return NULL;
                }                
                return $tab;
            }

            function inwentaryzacja($id){
                echo "<div style='display: flex;'>";
                
                echo "</div>";
            }

            function generuj_haslo(){
                $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 8)), 0, 8);
                $s=$s.substr(str_shuffle("!@#$%^&*();><|}{?"), 0, 1);
                $s=str_shuffle($s);
                return $s;
            }

            function usun_przedmiot($id){
                global $link;
                $query_usun_przedmiot="UPDATE `produkty` SET `widocznosc` = '1' WHERE `produkty`.`id` = $id";
                mysqli_query($link,$query_usun_przedmiot);
                // $query_usun_przedmiot_z_kategorii="UPDATE `kategorie` SET `widocznosc` = `1` WHERE `id_produktu` = $id";
                // mysqli_query($link,$query_usun_przedmiot_z_kategorii);
            }

            function minus_dostepne($id_produktu, $ilosc=NULL){
                global $link;
                if($ilosc==NULL){
                    $ilosc=1;
                }
                $query_minus_dostepne="UPDATE `produkty` SET `ilosc_dostepnych` = ilosc_dostepnych - $ilosc WHERE `produkty`.`id` = $id_produktu;";
                mysqli_query($link,$query_minus_dostepne);
            }

            function register_uzytkownik($imie, $nazwisko, $email, $login, $haslo){
                global $link;
                $query_register_uzytkownik_czek="SELECT * FROM `uzytkownicy` WHERE email='$email' or (imie='$imie' AND nazwisko='$nazwisko')";
                $result=mysqli_query($link, $query_register_uzytkownik_czek);
                while($row=$result->fetch_assoc())
                {
                    $tab[] = $row;
                }
                if(!isset($tab)){
                    $query_register_uzytkownik="INSERT INTO `uzytkownicy` (`Id`, `imie`, `nazwisko`, `email`, `login`, `haslo`, `premium`,  `zarejestrowany`) VALUES (NULL, '$imie', '$nazwisko', '$email', '$login', '$haslo', '0', '0')";
                    mysqli_query($link, $query_register_uzytkownik);
                    return 1;
                }
                else
                {
                    return 0;
                }
            }

            function change_to_zarejestrowani($id){
                global $link;
                $query_change_to_zarejestrowany="UPDATE `uzytkownicy` SET `zarejestrowany` = '1' WHERE `uzytkownicy`.`Id` = '$id'";
                mysqli_query($link, $query_change_to_zarejestrowany);
            }

            function login_uzytkownik($login, $haslo){
                global $link;
                $query_login_uzytkownik="SELECT * FROM `uzytkownicy` WHERE login='$login' AND haslo='$haslo' AND zarejestrowany=1;";
                $result=mysqli_query($link,$query_login_uzytkownik);
                while($row=$result->fetch_assoc())
                {
                    $tab[] = $row;
                }
                if(!isset($tab)){
                    return 0;
                }
                else
                {
                    return 1;
                }
            }

            

            function get_kategoria($id){
                global $link;
                $query_get_kategoria="SELECT * FROM `kategorie` WHERE id_produktu='$id'";
                $result=mysqli_query($link,$query_get_kategoria);
                $tab=$result->fetch_assoc();
                return $tab;
            }


            function wypisz_produkty($id_sprzedawca=NULL){
                if($id_sprzedawca==NULL){
                    echo "<div class='produkty'>";
                    if(select_produkty_all()!=NULL){
                        foreach(select_produkty_all() as $key => $value){
                            if($value["widocznosc"]!=1 and $value["ilosc_dostepnych"]>0){
                                echo "<div class='oferta'>";
                                echo "<img src='".$value["zdjecie_miniaturka"]."' alt='error' onclick='window.location.href=".'"'."?item=".$value["id"].'"'."'>";
                                echo "<div>";
                                echo "<span>".$value["nazwa"]."</span>";
                                echo "<span>".get_sprzedawca($value["id_sprzedawca"])["imie"]." ".get_sprzedawca($value["id_sprzedawca"])["nazwisko"]."</span>";
                                echo "<span>".round(($value["cena"]+($value["cena"]*$value["marza"]/100)),2)."zł</span>";
                                if($value["wystawianie_faktury_vat"]){
                                    echo "<span>Darmowa dostawa</span>";
                                }
                                else
                                {
                                    echo "<span><s>Darmowa dostawa</s></span>";
                                }
                                echo "</div>";
                                echo "</div>";
                            }
                            
                        }
                    }
                    echo "</div>";
                }
                else
                {
                    echo "<div class='produkty2'>";
                    if(select_produkty_current($id_sprzedawca)!=NULL){
                        foreach(select_produkty_current($id_sprzedawca) as $key => $value){
                            if($value["widocznosc"]!=1)
                            {
                                echo "<div class='oferta'>";
                                echo "<img src='".$value["zdjecie_miniaturka"]."' alt='error'>";
                                echo "<div>";
                                echo "<span>".$value["nazwa"]."</span>";
                                echo "<span>".get_sprzedawca($value["id_sprzedawca"])["imie"]." ".get_sprzedawca($value["id_sprzedawca"])["nazwisko"]."</span>";
                                echo "<span>".round(($value["cena"]+($value["cena"]*$value["marza"]/100)),2)."zł</span>";
                                if($value["wystawianie_faktury_vat"]){
                                    echo "<span>Darmowa dostawa</span>";
                                }
                                else
                                {
                                    echo "<span><s>Darmowa dostawa</s></span>";
                                }
                                echo "</div>";
                                echo "<form method='POST' action='index.php' class='czy_edit'>";
                                echo "<input type='hidden' name='id' value='".$value["id"]."'>";
                                echo "<input type='submit' name='edytuj' value=' edytuj wartosci '>";
                                echo "<input type='submit' name='zmien_kat' value='edytuj kategorie'>";
                                echo "</form>";
                                echo "</div>";
                            }
                            
                        }
                    }
                    else{
                        echo "<h1>Brak produktow</h1>";
                    }
                    echo "</div>";
                    echo "<form action='index.php' method='POST'><input type='submit' name='dod_produkt' value='dodaj produkt'></form>";
                    
                }
            }

            function aktualizuj_kategorie($id, $x1, $x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10){
                global $link;
                $id=$id+1;
                $query_aktualizuj_kategorie="UPDATE `kategorie` SET `elektronika`='$x1',`moda`='$x2',`dom_i_ogrod`='$x3',`supermarket`='$x4',`dziecko`='$x5',`uroda`='$x6',`zdrowie`='$x7',`kultura_i_rozrywka`='$x8',`sport_i_turystyka`='$x9',`motoryzacja`='$x10' WHERE id_produktu='$id'";
                mysqli_query($link, $query_aktualizuj_kategorie);
            }

            function aktualizuj($id, $name, $cena, $marza, $data, $licytacja, $vat, $opis, $zdjecie){
                global $link;
                $query_aktualizuj="UPDATE `produkty` SET `nazwa` = '$name', `cena` = '$cena', `marza` = '$marza', `data_waznosci` = '$data', `licytacja` = '$licytacja', `wystawianie_faktury_vat` = '$vat', `opis` = '$opis', `zdjecie_miniaturka` = '$zdjecie' WHERE `produkty`.`id` = '$id'";
                mysqli_query($link,$query_aktualizuj);
                echo "<form id='dalej1'><input type='submit'></form>";
                echo "<script>document.getElementById('dalej1').submit(); </script>";
            }

            function r_mail($mail){
                $header = "From: m.borkowski.2005@gmail.com \nContent-Type:".
                            ' text/plain;charset="UTF-8"'.
                            "\nContent-Transfer-Encoding: 8bit";
                $to = "$mail";
                $subject = "Potwierdzenie registracji";
                $message = "4 0 8 9";
                mail($to, $subject, $message, $header);
            }

            function wypisz_by_kategoria($kat){
                // echo $kat;
                global $link;
                $query_wypisz_by_kat="SELECT id_produktu FROM `kategorie` WHERE $kat=1";
                $result=mysqli_query($link, $query_wypisz_by_kat);
                while($row=$result->fetch_assoc())
                {
                    $tab[] = $row;
                }
                if(!isset($tab)){
                    echo "<h1>Brak Produktów</h1>";
                    return 0;
                }
                // var_dump($tab);
                echo "<div class='produkty2'>";
                foreach($tab as $value1){
                    $as=$value1["id_produktu"];
                    // echo $as;
                    $query2="SELECT * FROM `produkty` WHERE id='$as'";
                    $result1=mysqli_query($link, $query2);
                    $value=$result1->fetch_assoc();
                    // var_dump($value);
                    if($value["widocznosc"]!=1 and $value["ilosc_dostepnych"]>0){
                        echo "<div class='oferta'>";
                        echo "<img src='".$value["zdjecie_miniaturka"]."' alt='error'>";
                        echo "<div>";
                        echo "<span>".$value["nazwa"]."</span>";
                        echo "<span>".get_sprzedawca($value["id_sprzedawca"])["imie"]." ".get_sprzedawca($value["id_sprzedawca"])["nazwisko"]."</span>";
                        echo "<span>".round(($value["cena"]+($value["cena"]*$value["marza"]/100)),2)."zł</span>";
                        if($value["wystawianie_faktury_vat"]){
                            echo "<span>Darmowa dostawa</span>";
                        }
                        else
                        {
                            echo "<span><s>Darmowa dostawa</s></span>";
                        }
                        echo "</div>";
                        echo "</div>";
                    }
                

            }
            echo "</div>";
        }

            function wypisz_by_like($like){
                global $link;
                $query_by_like="SELECT * FROM `produkty` WHERE opis LIKE '%".$like."%';";
                $result=mysqli_query($link,$query_by_like);
                while($row=$result->fetch_assoc())
                {
                    $tab[] = $row;
                }
                if(!isset($tab)){
                    return 0;
                }
                echo "<div class='produkty2'>";
                foreach($tab as $value){
                    if($value["widocznosc"]!=1 and $value["ilosc_dostepnych"]>0){
                        echo "<div class='oferta'>";
                        echo "<img src='".$value["zdjecie_miniaturka"]."' alt='error'>";
                        echo "<div>";
                        echo "<span>".$value["nazwa"]."</span>";
                        echo "<span>".get_sprzedawca($value["id_sprzedawca"])["imie"]." ".get_sprzedawca($value["id_sprzedawca"])["nazwisko"]."</span>";
                        echo "<span>".round(($value["cena"]+($value["cena"]*$value["marza"]/100)),2)."zł</span>";
                        if($value["wystawianie_faktury_vat"]){
                            echo "<span>Darmowa dostawa</span>";
                        }
                        else
                        {
                            echo "<span><s>Darmowa dostawa</s></span>";
                        }
                        echo "</div>";
                        echo "</div>";
                    }

                }
                echo "</div>";
            }

            function kupuje($id){
                global $link;
                $query_kupuje_i="INSERT INTO `kupione`(`id`, `id_produktu`, `id_profilu`, `data`, `ilosc`, `stan`) SELECT null, id_produktu, id_profilu, now(), ilosc, 0 FROM koszyk WHERE id_profilu=$id";
                mysqli_query($link, $query_kupuje_i);
                $query_kupuje_d="DELETE FROM `koszyk` WHERE `koszyk`.`id_profilu` = $id";
                mysqli_query($link, $query_kupuje_d);
            }

            
            function strona_profil(){
                echo "<div class='moj_profil'>";
                echo "<p>Imie: ".$_COOKIE["imie"]." | Nazwisko: ".$_COOKIE["nazwisko"]." | Email: ".$_COOKIE["email"]."</p>";
                echo "<span>&nbsp; &nbsp;</span>";
                echo  "<form method='POST' action='index.php'><input type='submit' name='change_haslo' value='change haslo'></form>";
                echo "</div>";
            }

            function set_changed_password($id){
                global $link;
                $query_set_change_password1="DELETE FROM `change_password_request` WHERE `change_password_request`.`id` = $id";
                mysqli_query($link, $query_set_change_password1);
                echo "dzialasz?".$id;
                $query_set_change_password2="UPDATE `uzytkownicy` SET `haslo` = 'STANDART$id' WHERE `uzytkownicy`.`Id` = $id";
                mysqli_query($link, $query_set_change_password2);
            }

            function add_change_haslo_request($id){
                global $link;
                $query_add_request="INSERT INTO `change_password_request` (`id`, `id_profilu`) VALUES (NULL, '$id')";
                mysqli_query($link, $query_add_request);
            }

            function standard_password($id){
                echo "<h3>New password: </h3><h1>STANDARD".$id."</h1>";
            }

            function strona_admin(){
                global $link;
                $query_uzytkownicy_niezarejestrowani="SELECT id,imie, nazwisko, email FROM `uzytkownicy` WHERE zarejestrowany = 0";
                $result=mysqli_query($link, $query_uzytkownicy_niezarejestrowani);
                echo "<h2 style='text-align:center;color:white;'>Potwierdzenie rejestracjii</h2>";
                echo "<div class='nie_zarejestrowani'>";
                while($row=$result->fetch_assoc()){
                    $tab[] = $row;
                }
                if(!isset($tab)){
                    echo "<h5 style='text-align:center;color:white;'>Brak uzytkownikow do zarejestrowania</h5>";
                }else{
                    foreach($tab as $value){
                        echo "<form method='POST' action='index.php'>";
                        foreach($value as $key=>$value1){
                            if($key=="id"){
                                echo "<input type='text' name='".$key."' value='".$value1."' hidden>";
                            }else{
                                echo "<input type='text' name='".$key."' value='".$value1."' readonly>";
                            }
                            
                        }
                        echo "<input type='submit' name='udana_rejestracja' value='✔️'>";
                        echo "</form>";
                    }
                }
                echo "</div>";
                echo "<h2 style='text-align:center;color:white;'>Zmiana hasla na standart</h2>";
                $query_resquest_hasla="SELECT * FROM `change_password_request`";
                $result2 = mysqli_query($link, $query_resquest_hasla);
                while($row2=$result2->fetch_assoc()){
                    $tab2[] = $row2;
                }
                if(!isset($tab2)){
                    echo "<h5 style='text-align:center;color:white;'>Brak uzytkownikow do przywrocenia hasla</h5>";
                }else{
                    echo "<div class='nie_zarejestrowani'>";
                    foreach($tab2 as $value2){
                        echo "<form method='POST' action='index.php'>";
                        $uzyt=get_sprzedawca($value2["id_profilu"]);
                        foreach($value2 as $key2=>$value3){
                            
                            
                            if($key2=="id"){
                                echo "<input type='text' name='".$key2."' value='".$value3."' hidden>";
                            }else{
                                echo "<input type='text' name='imie' value='".$uzyt["imie"]."' readonly>";
                                echo "<input type='text' name='nazwisko' value='".$uzyt["nazwisko"]."' reaconly>";
                                echo "<input type='text' name='id_profilu' value='".$value3."' hidden>";
                            }
                        }
                        
                        
                        echo "<input type='submit' name='ok_request_change_password' value='✔️'>";
                        echo "</form>";
                    }
                    echo "</div>";
                }
            }

            function usun_z_koszyka($id){
                global $link;
                $query_usun_z_koszyka="DELETE FROM `koszyk` WHERE `koszyk`.`id` = $id";
                mysqli_query($link,$query_usun_z_koszyka);
            }

            function strona_kategorie(){
                global $link;
                $query_s_kategorie="SELECT * FROM kategorie LIMIT 1";
                $result=mysqli_query($link, $query_s_kategorie);
                $row=$result->fetch_assoc();
                echo "<form method='POST' action='index.php' class='po_kat'>";
                foreach($row as $key=>$value){
                    if($key!="id_produktu"){
                        if($key!="id"){
                        echo "<input type='submit' name='wybrana_kategoria' value='".$key."'>";
                        }
                    }
                }
                echo "</form>";
            }

            function do_koszyka($ilosc, $id_profilu, $id_produktu){
                global $link;
                $query_add_to_koszyk="INSERT INTO `koszyk` (`id`, `id_profilu`, `id_produktu`, `ilosc`) VALUES (NULL, '$id_profilu', '$id_produktu', '$ilosc')";
                mysqli_query($link, $query_add_to_koszyk);
                $query2="UPDATE `produkty` SET `ilosc_dostepnych` = ilosc_dostepnych-$ilosc WHERE `produkty`.`id` = $id_produktu";
                mysqli_query($link,$query2);
            }

            function getStan($intStan){
                if($intStan==0){
                    return 'kupiony';
                }else
                if($intStan==1){
                    return 'zrealizowany';
                }else{
                    return 'wyslany';
                }
            }

            function strona_kupione($id){
                global $link;
                $query_select_kupione="SELECT kupione.* FROM kupione, produkty WHERE produkty.id_sprzedawca=$id and kupione.id_produktu=produkty.id";
                $r=mysqli_query($link, $query_select_kupione);
                $laczny_hajs=0;
                $cena_marza=0;
                while($row=$r->fetch_assoc()){
                    $tab[] = $row;
                }
                if(!isset($tab)){
                    echo "<h2>Brak kupionych produktów</h2>";
                    return;
                }
                echo "<div style='display: flex; flex-direction: column;'>";
                foreach($tab as $v){
                    $p=select_produkt($v["id_produktu"]);
                    $cena_marza+=($p["cena"]*($p["marza"]/100));
                    $laczny_hajs+=$cena_marza+$p["cena"];
                    echo "<div style='display:flex;'><span> Name: ".$p["nazwa"]." Ilosc: ".$v["ilosc"]." Data: ".$v["data"]." Stan: ".getStan($v["stan"])."</span> <form method='POST' action='index.php'><input type='hidden' name='id' value='".$v["id"]."'><input type='submit' value='kolejny stan' name='k_stan'></form></div>";
                }
                echo "<br><p>Calosc wplaconych pieniedzy: $laczny_hajs <br> Calosc zyskana przez marze: $cena_marza </p></div>";
            }

            function strona_inwentaryzacja($id){
                global $link;
                echo "<div>";
                $query_inwentaryzacja_count="SELECT count(ilosc) as ilosc FROM `produkty` WHERE id_sprzedawca=$id and widocznosc=0";
                $r=mysqli_query($link, $query_inwentaryzacja_count);
                $row=$r->fetch_assoc();
                if(!isset($row)){
                    echo "<h2>Brak kupionych produktów</h2></div>";
                    return;
                }
                echo "Ilosc kupionych produktow: ".$row["ilosc"]."<br>"."</div>";
            }

            function strona_koszyk(){
                global $link;
                $id_profilu=$_COOKIE["id"];
                $query_koszyk1="SELECT id,id_produktu, ilosc FROM koszyk WHERE id_profilu = $id_profilu";
                $result=mysqli_query($link, $query_koszyk1);
                while($row=$result->fetch_assoc()){
                    $tab[] = $row;
                }
                if(!isset($tab)){
                    echo "<h2>Brak produkow w koszyku</h2>";
                    return;
                }
                echo "<div class='produkty2'>";
                foreach($tab as $value1){
                    $value=select_produkt($value1["id_produktu"]);
                    if($value["widocznosc"]!=1 and $value1["ilosc"]>0){
                        echo "<div class='oferta'>";
                        echo "<img src='".$value["zdjecie_miniaturka"]."' alt='error'>";
                        echo "<div>";
                        echo "<span>".$value["nazwa"]."</span>";
                        echo "<span>".get_sprzedawca($value["id_sprzedawca"])["imie"]." ".get_sprzedawca($value["id_sprzedawca"])["nazwisko"]."</span>";
                        echo "<span>".round(($value["cena"]+($value["cena"]*$value["marza"]/100)),2)."zł</span>";
                        if($value["wystawianie_faktury_vat"]){
                            echo "<span>Darmowa dostawa</span>";
                        }
                        else
                        {
                            echo "<span><s>Darmowa dostawa</s></span>";
                        }
                        echo "<span>".$value1["ilosc"]."</span>";
                        echo "</div>";
                        echo "<form method='POST' action='index.php' style='display:flex;align-items:center;'><input type='submit' name='usun_z_koszyka' value='🗑' style='height:50%; width:50px; font-size:70px;padding-bottom:70px;'><input type='text' name='id' value='".$value1["id"]."' hidden></form>";
                        echo "</div>";
                    }
                }
                echo "</div>";
            }



            /*zdazenia i co ma sie teraz wyswietlac na stronie*/

            // r_mail("m.b.cba.pl@wp.pl");

            strona_menu();
            strona_wyszukiwarka();
            if(isset($_POST["register"])){
                if(isset($_POST["imie"]) and isset($_POST["nazwisko"]) and isset($_POST["email"]) and isset($_POST["login"]) and isset($_POST["haslo"])){
                    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                        register_uzytkownik($_POST["imie"],$_POST["nazwisko"],$_POST["email"],$_POST["login"],$_POST["haslo"]);
                        //register_uzytkownik($_POST["imie"],$_POST["nazwisko"],$_POST["email"],$_POST["login"],$_POST["haslo"]);
                        
                        strona_logowanie();
                    }
                }else{
                    strona_register(1);
                }
                
            }else
            if(isset($_POST["zaloguj"])){
                if(isset($_POST["login"]) and isset($_POST["haslo"])){
                    if(login_uzytkownik($_POST["login"], $_POST["haslo"])){
                        $dane_sprzedawca=get_sprzedawca(get_sprzedawca_id($_POST["login"],$_POST["haslo"]));
                        echo "<form method='POST' action='login.php' name='dalej1' id='dalej1'>";
                        echo "<input type='hidden' name='imie' value='".$dane_sprzedawca["imie"]."'>";
                        echo "<input type='hidden' name='nazwisko' value='".$dane_sprzedawca["nazwisko"]."'>";
                        echo "<input type='hidden' name='email' value='".$dane_sprzedawca["email"]."'>";
                        echo "<input type='hidden' name='id' value='".$dane_sprzedawca["Id"]."'>";
                        echo "<input type='submit' name='dalej' value='dalej' id='dalej'>";
                        echo "<script>document.getElementById('dalej1').submit(); </script>";
                        echo "</form>";
                    }else{
                        strona_logowanie(1);
                    }
                }
            }else
            if(!isset($_COOKIE['id']) and $_GET["page"]!="register"){
                strona_logowanie();
            }else
            if(isset($_GET["item"])){
                strona_produktu($_GET["item"]);
            }else
            if(isset($_GET["page"])){
                if($_GET["page"]=="koszyk"){
                    strona_koszyk();
                    echo "<form method='POST' action='index.php' style='
                    display: flex;
                    justify-content: center;
                '><input type='submit' value='Kupuje' name='kupuje'></form>";
                    strona_profil();
                }else
                if($_GET["page"]=="home"){
                    echo "<form id='dalej1'><input type='submit'></form>";
                    echo "<script>document.getElementById('dalej1').submit(); </script>";
                }else
                if($_GET["page"]=="login"){
                    strona_logowanie();
                }else
                if($_GET["page"]=="register"){
                    strona_register();
                }else
                if($_GET["page"]=="moje_produkty"){
                    wypisz_produkty($_COOKIE["id"]);
                    inwentaryzacja($_COOKIE["id"]);
                }
            }else
            if(isset($_POST["usun_z_koszyka"])){
                usun_z_koszyka($_POST["id"]);
                wypisz_produkty();
                strona_profil();
            }else
            if(isset($_POST["dodaj"])){
                $id_sprzedawca=$_COOKIE["id"];
                if(isset($_POST["licytacja"])){
                    $licytacja=1;
                }else{$licytacja=0;}
                if($_POST["wystawianie_faktury_vat"]){
                    $wystawianie_faktury_vat=1;
                }else{$wystawianie_faktury_vat=0;}
                @add_produkt($_POST["name"],$_POST["ilosc"],$id_sprzedawca,$_POST["cena"],$_POST["marza"],$_POST["data_waznosci"],$licytacja,$wystawianie_faktury_vat,$_POST["opis"],$_POST["zdjecie"]);
                if(isset($_POST["elektronika"])){
                    $x1=1;
                }else{$x1=0;}
                if(isset($_POST["moda"])){
                    $x2=1;
                }else{$x2=0;}
                if(isset($_POST["dom_i_ogrod"])){
                    $x3=1;
                }else{$x3=0;}
                if(isset($_POST["supermarket"])){
                    $x4=1;
                }else{$x4=0;}
                if(isset($_POST["dziecko"])){
                    $x5=1;
                }else{$x5=0;}
                if(isset($_POST["uroda"])){
                    $x6=1;
                }else{$x6=0;}
                if(isset($_POST["zdrowie"])){
                    $x7=1;
                }else{$x7=0;}
                if(isset($_POST["kultura_i_rozrywka"])){
                    $x8=1;
                }else{$x8=0;}
                if(isset($_POST["sport_i_turystyka"])){
                    $x9=1;
                }else{$x9=0;}
                if(isset($_POST["motoryzacja"])){
                    $x10=1;
                }else{$x10=0;}
                add_kategoria((mysqli_insert_id($link)+1),$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10);
                echo "<form id='dalej1'></form><script>document.getElementById('dalej1').submit(); </script>";
            }else
            if(isset($_POST["aktualizuj"])){
                if(isset($_POST["licytacja"])){
                    $licytacja=1;
                }else{$licytacja=0;}
                if(isset($_POST["wystawianie_faktury_vat"]))
                {
                    $wystawianie_faktury_vat=1;
                }else{$wystawianie_faktury_vat=0;}
                aktualizuj($_POST["id"], $_POST["name"], $_POST["cena"],$_POST["marza"], $_POST["data_waznosci"], $licytacja, $wystawianie_faktury_vat, $_POST["opis"], $_POST["zdjecie"]);
            }else
            if(isset($_POST["zmien_kat"])){
                strona_edit_kategoria($_POST["id"]);
            }else
            if(isset($_POST["dod_produkt"])){
                strona_dod_pordukt();
            }else
            if(isset($_POST["aktualizuj_kat"])){
                if(isset($_POST["elektronika"])){
                    $x1=1;
                }else{$x1=0;}
                if(isset($_POST["moda"])){
                    $x2=1;
                }else{$x2=0;}
                if(isset($_POST["dom_i_ogrod"])){
                    $x3=1;
                }else{$x3=0;}
                if(isset($_POST["supermarket"])){
                    $x4=1;
                }else{$x4=0;}
                if(isset($_POST["dziecko"])){
                    $x5=1;
                }else{$x5=0;}
                if(isset($_POST["uroda"])){
                    $x6=1;
                }else{$x6=0;}
                if(isset($_POST["zdrowie"])){
                    $x7=1;
                }else{$x7=0;}
                if(isset($_POST["kultura_i_rozrywka"])){
                    $x8=1;
                }else{$x8=0;}
                if(isset($_POST["sport_i_turystyka"])){
                    $x9=1;
                }else{$x9=0;}
                if(isset($_POST["motoryzacja"])){
                    $x10=1;
                }else{$x10=0;}
                // var_dump($_POST);
                aktualizuj_kategorie($_POST["id"],$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10);
                echo "<form id='dalej1'></form><script>document.getElementById('dalej1').submit(); </script>";
            }else
            if(isset($_POST["change_haslo"])){
                if($_COOKIE["id"]!=0){
                    add_change_haslo_request($_COOKIE["id"]);
                    standard_password($_COOKIE["id"]);
                }else{
                    strona_admin();
                }
                wypisz_produkty();
                strona_profil();
            }else
            if(isset($_POST["ok_request_change_password"])){
                if($_COOKIE["id"]==0){
                    set_changed_password($_POST["id"]);
                }
                strona_admin();
                wypisz_produkty();
                strona_profil();
            }else
            if(isset($_POST["udana_rejestracja"])){
                change_to_zarejestrowani($_POST["id"]);
                strona_admin();
                wypisz_produkty();
                strona_profil();
            }else
            if(isset($_POST["usun"])){
                usun_przedmiot($_POST["id"]);
                echo "<form id='dalej1'></form><script>document.getElementById('dalej1').submit(); </script>";
            }else
            if(isset($_POST["edytuj"])){
                strona_edytuj($_POST["id"]);
            }else
            if(isset($_POST["moje_konto"])){
                wypisz_produkty($_COOKIE["id"]);         
            }else
            if(isset($_POST["wyszukiwarka"])){
                wypisz_by_like($_POST["wysz"]);
                strona_profil();
            }else
            if(isset($_POST["k_stan"])){
                $id_k_stan=$_POST["id"];
                $query_k_stan="UPDATE `kupione` SET `stan`=stan+1 WHERE id = $id_k_stan";
                mysqli_query($link, $query_k_stan);
                if($_COOKIE["id"]==0){
                    strona_admin();
                }
                wypisz_produkty();
                strona_profil();
                strona_kupione($_COOKIE["id"]);
                strona_inwentaryzacja($_COOKIE["id"]);
            }else
            if(isset($_POST["kupuje"])){
                kupuje($_COOKIE["id"]);
                if($_COOKIE["id"]==0){
                    strona_admin();
                }
                wypisz_produkty();
                strona_profil();
            }else
            if(isset($_POST["koszyk"])){
                strona_koszyk();
                echo "<form method='POST' action='index.php' style='
                display: flex;
                justify-content: center;
            '><input type='submit' value='Kupuje' name='kupuje'></form>";
                strona_profil();
            }else
            if(isset($_POST["do_koszyka"])){
                do_koszyka($_POST["ilosc"], $_COOKIE["id"], $_POST["id"]);
                wypisz_produkty();
                strona_profil();
            }else
            if(isset($_POST["wysz_po_kategoriach"])){
                strona_kategorie();
                wypisz_produkty();
                strona_profil();
            }else
            if(isset($_POST["wybrana_kategoria"])){
                // echo $_POST["wybrana_kategoria"];
                wypisz_by_kategoria($_POST["wybrana_kategoria"]);         
                // wypisz_produkty();
                strona_profil();
            }else
            if(isset($_COOKIE["id"])){
                if($_COOKIE["id"]==0){
                    strona_admin();
                }
                wypisz_produkty();
                strona_profil();
                strona_kupione($_COOKIE["id"]);
                strona_inwentaryzacja($_COOKIE["id"]);
            }else{
                // strona_register();
                echo "<br>";
                strona_logowanie();
            }
            
        ?>
        <!-- <form method="POST" action="index.php">
            <input type="submit" name="moje_konto" value="moje_produkty">
        </form>
         -->

        <script>
            function sprawdzenie(ktory, ja){
                if(document.getElementsByClassName("register_haslo")[ja].value==document.getElementsByClassName("register_haslo")[ktory].value){
                    document.getElementsByClassName("register_haslo")[ja].style="border: 1px solid lime";                    document.getElementsByClassName("register_haslo")[ja].style="border: 1px solid lime";
                    document.getElementsByClassName("register_haslo")[ktory].style="border: 1px solid lime";
                }
                else
                {
                    document.getElementsByClassName("register_haslo")[ja].style="border: 1px solid red;";
                    document.getElementsByClassName("register_haslo")[ktory].style="border: 1px solid red;";
                }
            }

            function podglad(ktory){
                if(document.getElementsByClassName("register_haslo")[ktory].type=="text")
                {
                    document.getElementsByClassName("register_haslo")[ktory].type="password";
                    document.getElementsByClassName("odkryj")[ktory].checked=false;
                }else{
                    document.getElementsByClassName("register_haslo")[ktory].type="text";
                    document.getElementsByClassName("odkryj")[ktory].checked=true;
                }
            }
        </script>
        <!-- <script src="http://proveskill.pl/api/lestar_api.js"></script>

        <script>
            let x = Lestar.createObject(1,false)[0];
            x.set('id',2);
            x.createName('koko');
            x.add('name','lol');
            

            let ilosc_enemy=2;

            let Enemys = Lestar.createObject(ilosc_enemy);
            Enemys[0].createName('zombie');
            Enemys[1].createName('warrior');

            Lestar.showAllInArrayToConsole(Enemys);

        </script> -->
        <script>
        label = document.querySelector('.my-form label.rodo');
        checkbox = document.querySelector('.my-form input.rodo');
const btns = document.querySelectorAll('.my-form input.button');

if(btns[0]!=null){
    btns[0].disabled=true;
}


label.addEventListener("click", eventBox);
function eventBox() {
  const checked = checkbox.checked;
  for (const btn of btns) {
    checked ? (btn.disabled = true) : (btn.disabled = false);
    checked ? (checkbox.checked = false) : (checkbox.checked = true);
  }
};



</script>
   
    </body>
</html>