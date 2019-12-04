<?php
$tijd = explode(" ", $argv[1]);
    foreach ($tijd as $teidInt) {
$lastChr = substr($teidInt, -1);
    switch($lastChr) {
    case "s":
$s = (int)$teidInt;
    break;
    case "m":
$m = (int)$teidInt * 60;
    break;
    case "u":
$u = (int)$teidInt * 60 * 60;
    break;case "d":
$d = (int)$teidInt * 60 * 60 * 24;
    break;}
}
$totaal = $s + $m + $u + $d;
echo "$totaal seconden".PHP_EOL;