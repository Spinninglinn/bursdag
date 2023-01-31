<?php

// Hent besøkendes IP-adresse
$visitor_ip = $_SERVER['REMOTE_ADDR'];

// Åpne en fil for skriving
$file = fopen("visitor_ips.txt", "a");

// Skriv IP-adressen til filen
fwrite($file, $visitor_ip . "\n");

// Lukk filen
fclose($file);

?>