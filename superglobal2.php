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

session_start();

echo $_SESSION['nom'].'</br>'; 
echo $_SESSION['prenom'].'</br>';
echo $_SESSION['age'].'</br>';

$_COOKIE['pseudo'] = $_POST['pseudo'];
$_COOKIE['password'] = $_POST['password'];

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

setcookie('pseudo', $pseudo);
setcookie('password', $password);

echo '</br>Cookie pseudo est : '.$pseudo.'</br>';
echo '</br>Cookie password est : '.$password.'</br>';


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



