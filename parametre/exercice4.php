<?php
if (isset($_GET['langage']) AND isset($_GET['serveur'])){
	echo 'Le language: ' . $_GET['langage'] . 'Le serveur: ' . $_GET['serveur'] . ' ';
}else{
   echo 'Il n\'y a aucun language et serveur  !';
}
?>