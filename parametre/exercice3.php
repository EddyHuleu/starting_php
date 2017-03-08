<?php
if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])){
	echo 'Date debut: ' . $_GET['dateDebut'] . ' Date Fin: ' . $_GET['dateFin'] . ' ';
}else{
   echo 'Il faut renseigner la date du debut et la date de fin !';
}
?>