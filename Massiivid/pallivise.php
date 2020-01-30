<?php
/**
 * file name: pallivise.php;
 * author: Hanna-Liisa Vilms;
 * date: 29.01.2020;
 */


//Pallivise – sul on üks massiiv nimedega ja teine palliviske tulemustega.
/* Ülesande lahendamiseks tuleb sul natuke googeldada, leia: */

$nimed = array('Martin','Hardi','Juhan','Tiina','Sirje','Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);


//* osalejate arv (count)
$osalejad = count($nimed);
echo 'Osalejaid on '.$osalejad.'.<br>';
echo '<hr>';

// * keskmine palliviske tulemus (array_sum jt.)
$keskmine = (array_sum($pallivisked))/count($nimed);
echo 'Keskmine tulemus on '.$keskmine.'.<br>';
echo '<hr>';

//* parim tulemus (max)
$max = max($pallivisked);
echo 'Parim tulemus on '.$max.'.<br>';
echo '<hr>';

//* parima tulemuse visanud õpilase nimi (array_keys)

echo 'Parima tulemuse saanud õpilane on '.$.'.<br>';
echo '<hr>';

