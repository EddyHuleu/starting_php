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

//EXO 1:

//Faire une page html permettant de donner a l'utilisateur son userAgent son adresse ip et le nom du serveur

echo 'Nom du serveur : '.$_SERVER["SERVER_NAME"];
echo "</br>";
echo 'Nom du navigateur : '.   $_SERVER["HTTP_USER_AGENT"];
echo "</br>";
echo 'Nom de l\'utilisateur : '.  $_SERVER['SERVER_ADDR']. "</br>";

//EXO 2:

//On créer une page superglobal2.php, passer d'une page a l'autre, les variables nom prenom et age grace aux sessions ses variable auront été définis directement dans le code il faudra afficher.

session_start();

$_SESSION['nom'] = 'Huleu';
$_SESSION['prenom'] = 'Eddy';
$_SESSION['age']= 19;


?>

<form action="superglobal2.php" method="post">
<p>Votre login : <input type="text" name="pseudo" /></p>
<p>Votre password : <input type="text" name="password" /></p>
<p><input type="submit" value="OK"></p>
</form>


<a href="superglobal2.php">SuperGlobal2</a><br/>
</body>
</html>



