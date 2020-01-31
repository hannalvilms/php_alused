<?php
/**
 * file name: index.php;
 * author: Hanna-Liisa Vilms;
 * date: 31.01.2020;
 */
require 'functions.php';

$menu = array(
    'Avaleht' => 'index',
    'Portfoolio' => 'portfoolio',
    'Kaart' => 'kaart',
    'Kontakt' => 'kontakt'
);
pageMenu($menu);
if($_SERVER['SCRIPT_NAME'] == $_SERVER['REQUEST_URI']){
    echo '<h2>Avaleht</h2>';
    echo 'Hello world!'
} else {
    pageContent($_GET['leht'], $menu);
}