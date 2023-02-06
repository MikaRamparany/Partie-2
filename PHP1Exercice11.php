<h1> Exercice 11</h1>

Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de
caractère représentant une date.

<h2> Résultat </h2>

<?php
// header('Content-Type: text/html; charset=UTF-8');

// $locale = 'fr_fra.UTF-8';


//strftime est une fonction native de PHP qui est déprécié depuis php 8.1 car rely on C library. New method is to use php call IntlDateFormatter
//https://www.php.net/manual/en/function.strftime.php
// https://www.php.net/manual/en/intldateformatter.format.php

$date = '06-02-2023'; // si le séparateur est "-" la date est européenne (soit Jour mois ) si le séparateur est "/" c'est une date américaine (soit mois et Jour)
setlocale(LC_ALL, 'fr_FR', 'fr', 'fr', 'fra', 'fr_FR@euro');
echo "Aujourd'hui nous sommes le " . strftime('%A %d %B %Y', strtotime($date));

?>

<br> <br>
Solution 2 : <br>

<br>

<?php
$fmt = new IntlDateFormatter(
    "fr_FR",
        IntlDateFormatter::FULL, IntlDateFormatter::NONE,
    'Etc/UTC', IntlDateFormatter::GREGORIAN,
    'EEEE, dd MMMM y'
);
$date = new DateTime('2018-02-23');
echo $fmt->format($date);

$date = new DateTime('06-02-2023');
echo $fmt->format($date);