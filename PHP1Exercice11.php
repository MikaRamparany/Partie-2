<h1> Exercice 11</h1>

Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.

<h2> Résultat </h2> 

<?php


$date = '06-02-2023'; // si le séparateur est "-" la date est européenne (soit Jour mois ) si le séparateur est "/" c'est une date américaine (soit mois et Jour)
echo strftime('%A %d %B %Y', strtotime($date));
