<?php
//$date = strftime("%A %e %B %Y %H:%M");
//echo ''.$date.'';

//echo time();
//echo mktime(15, 34, 12, 03, 2, 2016);

$mai = mktime(0, 0, 0, 5, 16, 2016);
$jour = time();
$calcul = ($jour-$mai)/86400;
echo 'Le nombre de jour entre aujourd\'hui et le 16 mai est '.$calcul.'';


?>