<?php
/**
 * file name: oppeaine.php;
 * author: Hanna-Liisa Vilms;
 * date: 29.01.2020;
 */

// Õppeained – koosta vähemalt 5 õppeaine nimetusega massiiv.
// Sinu ülesandeks on see php funktsiooni sort() abil sorteerida kasvavas
// järjekorras ning kuvada ridade kaupa.

$oppeained = array('Eesti keel','Matemaatika','Kehaline','Kunst','Muusika');

ksort($oppeained);

$oppeainedArv= count($oppeained);

echo 'Õppeaineid on '.$oppeainedArv.'<br>';
echo 'Need on:<br>';
for($i = 0; $i < $oppeained; $i++){
    echo $oppeained[$i].'<br>';
}

echo '<hr>';
