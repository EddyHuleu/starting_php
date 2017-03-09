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


echo 'Cookie pseudo est : '.$_COOKIE['pseudo'].'</br>';
echo 'Cookie password est : '.$_COOKIE['password'].'';

//EXO 4:

//Sur superglobal2.php recuperer les info du cookie crée a l'exo 3 et l'afficher

?>

<?php
//EXO3:

//Faire un formulaire qui permet de recuperer un login et un mot de passe de l'utilisateur a la validation du formulaire stocker les informations dans un cookie

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

setcookie('pseudo', $pseudo);
setcookie('password', $password);
?>

<?php

//EXO 5:

//modifier contenue cookie, si existe afficher formulaire pour modif cookie

if(isset($_COOKIE['pseudo'],$_COOKIE['password'])){
$cookiepseudo = $_COOKIE['pseudo'];
$cookiepassword = $_COOKIE['password'];
	echo '<form action="" method="post">
<input type="text" name="pseudo" value="'.$cookiepseudo.'">
<input type="password" name="password" value="'.$cookiepassword.'">
<input type="submit" value="OK">
</form>';
}

?>

</body>
</html>



