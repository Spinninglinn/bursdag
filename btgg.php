<?php
$ip = $_SERVER['REMOTE_ADDR'];
$file = 'btgg-besok.txt';
// Åpne filen for å få tilgang til innholdet
$current = file_get_contents($file);
// Legg til ny IP til innholdet
$current .= $ip . "\n";
// Skriv tilbake til filen
file_put_contents($file, $current);
?>