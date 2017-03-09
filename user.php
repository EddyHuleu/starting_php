<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>



<?php
if (isset($_GET['nom']) && isset($_GET['age'])) :
?>
Bonjour, <?= $_GET['nom']; ?>

Tu as <?= $_GET['age'];?> ans.

<?php endif ?>

<?php
if (isset($_POST['nom']) && isset($_POST['age'])) :
	?>
Bonjour, <?= $_POST['nom']; ?>.
Tu as <?= $_POST['age']; ?> ans.
	<? endif; ?>
</body>
</html>


