<?php
/**
 * file name: ruumala.php;
 * author: Hanna-Liisa Vilms;
 * date: 29.01.2020;
 */

$kera = $_GET['kera'];
$koonus_r = $_GET['koonuse_raadius'];
$koonus_h = $_GET['koonuse_korgus'];
$silinder_r = $_GET['silindri_raadius'];
$silinder_h = $_GET['silindri_korgus'];
//ruumalade arvutamine
$kera_ruumala = 4/3*3.14*pow($kera,3);
$silindri_ruumala = 3.14*pow($koonus_r, 2)*$silinder_h;
$koonuse_ruumala = 3.14*pow($koonus_r, 2)*($koonus_h/3);

echo 'Kera ruumala on: '.$kera_ruumala.'<br>';
echo 'Koonuse ruumala on: '.$koonuse_ruumala.'<br>';
echo 'Silindri ruumala on: '.$silindri_ruumala.'<br>';
