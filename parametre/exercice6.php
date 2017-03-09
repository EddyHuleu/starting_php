<?php
if (isset($_GET['batiment']) AND isset($_GET['salle'])){
	echo 'Batiment: ' . $_GET['batiment'] . 'Salle: ' . $_GET['salle'] . ' ';
}else{
   echo 'Vous devez donner le numéro du Batiment et de la salle  !';
}
?>