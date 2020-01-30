<?php
/**
 * file name: opilased.php;
 * author: Hanna-Liisa Vilms;
 * date: 29.01.2020;
 */

//Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
echo date('d.m.Y G:i' , time());
echo '<br>';
echo '<hr>';
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
echo '<br>';
echo '<hr>';

//Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev
$kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$paev = date('d');
$kuu =  $kuud[date('n')];
$aasta = date('Y');

echo $paev.'.'.$kuu.' '.$aasta.' '.$nadal[$nadalapaevaNr];
echo '<br>';
echo '<hr>';

//Leia mitu päeva on jäänud järgmise jaanipäevani.
// Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!
$aeg = time();
$jaaniPaev = mktime(0, 0, 0, 6, 24, date('Y'));
$vaheSekund = $jaaniPaev - $aeg;
$vahePaev = round($vaheSekund/ (60 * 60 *24) , 0);
$valjund = date('Y ').'aasta jaanipäevani on jäänud '.$vahePaev.' päeva!';
echo $valjund;
echo '<br>';
echo '<hr>';


//Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem.
// Kuva mõlema sünnikuupäevad ning vahe aastates.

$temaSynna1980 = mktime(0, 0, 0, 11, 6, 1980);
$temaSynna2020 = mktime(0,0,0,11,6,date('Y'));
$temaVanusSekundites = $temaSynna2020 - $temaSynna1980;
$temaValjund = date('d.m.Y', $temaSynna2020);

$minuSynna1999 = mktime(0,0,0, 12,23,1999);
$minuSynna2020 = mktime(0,0,0,12,23, date('Y'));
$minuVanusSekundites = $minuSynna2020 - $minuSynna1999;
$minuValjund = date('d.m.Y', $minuSynna2020);

$vaheSekundites = $temaVanusSekundites - $minuVanusSekundites;

echo 'Tema sünnipäev on '.$temaValjund.'<br>';
echo 'Minu sünnipäev on '.$minuValjund.'<br>';
echo 'Vahe aastates on: '.round(abs($vaheSekundites) / (60*60*24*30.4*12),0).'<br>';

if($vaheSekundites > 0) {
    echo 'Tema on vanem<br>';
} else if($vaheSekundites < 0) {
    echo 'Mina olen vanem<br>';
} else {
    echo 'Oleme sama vanad<br>';
}
echo '<hr>';

//Leia, kas sul on järgmine aasta juubel?
$minuVanusAastades = round($minuVanusSekundites / (60*60*24*30.4*12),0);
echo $minuVanusAastades.'<br>';
$juubel = $minuVanusAastades % 5;
echo $juubel.'<br>';
if($juubel = 0) {
    echo 'On juubel<br>';
} else {
    echo 'Ei ole juubel<br>';
}
echo '<hr>';

//Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”,
// 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”
echo date("h:i a");
$morningTime = "08:00:00";
$dayTime = "13:00:00";
$eveningTime = "17:00:00";
$currentTime = date("h:i a");
echo '<br>';
if($currentTime > $morningTime and $currentTime < $dayTime) {
    echo "Tere hommikust!<br>";
} else if ($currentTime > $dayTime and $currentTime < $eveningTime) {
    echo "Tere päevast!<br>";
} else if ($currentTime > $eveningTime) {
    echo "Tere õhtust!<br>";
}
echo '<hr>';


