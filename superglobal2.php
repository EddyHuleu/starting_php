<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>superglobal</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php

//EXO 2:

//On créer une page superglobal2.php, passer d'une page a l'autre, les variables nom prenom et age grace aux sessions ses variable auront été définis directement dans le code il faudra afficher.
session_start();

echo $_SESSION['nom'].'</br>'; 
echo $_SESSION['prenom'].'</br>';
echo $_SESSION['age'].'</br>';

?>
</body>
</html>



