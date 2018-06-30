<?php
if(isset($_POST['submit']))
{
	$username =htmlentities(trim($_POST['username']));
	$password =htmlentities(trim($_POST['password']));
	$repeatpassword =htmlentities(trim($_POST['repeatpassword']));
	if($username&&$password&&$repeatpassword)
	{

	}else echo"Veuillez bien complèter tout les champs !";
}









?>

<form method="POST" action="register.php">
<p>Votre pseudo :</p>
<input type="text" name"username">
<p>Votre Mot De Passe :</p>
<input type="password" name="password">
<p>Retaper votre Mot De Passe</p>
<input type="password" name="repeatpassword"><br><br>
<input type="submit" value="S'inscrire" name="submit">
</form>