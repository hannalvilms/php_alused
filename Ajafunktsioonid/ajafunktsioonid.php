<?php
/**
 * file name: opilased.php;
 * author: Hanna-Liisa Vilms;
 * date: 29.01.2020;
 */

//Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
echo date('d.m.Y G:i' , time());

//Kuva tänane eestikeelne nädalapäev, N: kolmapäev
$nadal = array(
    '1' => 'esmaspäev',
    '2' => 'teisipäev',
    '3' => 'kolmapäev',
    '4' => 'neljapäev',
    '5' => 'reede',
    '6' => 'laupäev',
    '7' => 'pühapäev'
);
$aeg = time();
$nadalapaevaNr=date('N',$aeg);
echo $nadal[$nadalapaevaNr];
echo '<hr>';
//Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev

//Leia mitu päeva on jäänud järgmise jaanipäevani.
// Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!

//Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem.
// Kuva mõlema sünnikuupäevad ning vahe aastates.

//Maailmalõpp saabub 29.02.2016! Las PHP otsustab, kas see on võimalik.

//Leia, kas sul on järgmine aasta juubel?

//Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”,
// 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”