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

if(strpos($_SERVER["SERVER_NAME"], 'Firefox') !== false)
        $SERVER_NAME = 'Mozilla Firefox';
    elseif(strpos($_SERVER["SERVER_NAME"], 'Opera') !== false)
        $SERVER_NAME = 'Opera';
    elseif(strpos($_SERVER["SERVER_NAME"], 'Netscape') !== false)
        $SERVER_NAME = 'Netscape';
    elseif(strpos($_SERVER["SERVER_NAME"], 'Konqueror') !== false)
        $SERVER_NAME = 'Konqueror';
    elseif(strpos($_SERVER["SERVER_NAME"], 'MSIE') !== false)
        $SERVER_NAME = 'Internet Explorer / Avant Browser';
    else
        $SERVER_NAME = '(navigateur inconnu)';
 
    //UTILISATION
    echo $SERVER_NAME;
    echo $_SERVER["REMOTE_ADDR"];

//EXO 2:

//On créer une page superglobal2.php, passer d'une page a l'autre, les variables nom prenom et age grace aux sessions ses variable auront été définis directement dans le code il faudra afficher.

session_start();

$_SESSION['nom'] = 'Huleu';
$_SESSION['prenom'] = 'Eddy';
$_SESSION['age']= 19;

?>
<a href="superglobal2.php">SuperGlobal2</a><br/>
</body>
</html>



