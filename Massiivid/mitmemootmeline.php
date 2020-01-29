<?php
/**
 * file name: mitmemootmeline.php;
 * author: Hanna-Liisa Vilms;
 * date: 29.01.2020;
 */

//Tekita mitmemõõtmeline massiiv raamatu andmete hoidmiseks.
// Loo massiiv vähemalt kolmele raamatule – pealkiri, autor, žanr, ilmumisaasta.

$raamatud = array(
    '1.raamat'=>array
        ('pealkiri'=>'Tõde ja Õigus',
        'autor'=>'A.H.Tammsaare',
        'žanr'=>'draama',
        'ilmumisaasta'=>'1926'),
    '2.raamat'=>array
        ('pealkiri'=>'Kevade',
        'autor'=>'O.Luts',
        'žanr'=>'draama',
        'ilmumisaasta'=>'1912'),
    '3.raamat'=>array
        ('pealkiri'=>'Rehepapp',
        'autor'=>'A.Kivirähk',
        'žanr'=>'romaan',
        'ilmumisaasta'=>'2000')
);

// Ülesandeks on kuvada kõik raamatud tähestikulises järjekorras ning
// kui palju on raamatuid kokku.

foreach ($raamatud as $raamat=>$andmed){
    echo "$raamat - ";
    foreach($andmed as $detailid){
        echo "$detailid ";
    }
    echo "<br>";
};

array_multisort($raamatud);

echo "<pre>";
echo print_r($raamatud);
echo "</pre>";


$kokku = count($raamatud);
echo 'Raamatuid on kokku '.$kokku.'.<br>';

