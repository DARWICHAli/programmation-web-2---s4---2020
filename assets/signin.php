<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>
<body>
	<div class="">
		<?php include '../templates/navbar.php'; ?>
		<?php include 'accbar.php'; ?>
		<img src="#" alt="logo">
	</div>
	<?php include '../templates/aside.php'; ?>
	<section class="se_connecter">

		<form class="se_connecter">
			<caption>Se Connecter<caption>
			<input id = "email" type="email" placeholder="* E-mail"/>
			<input id = "paswd" type="password" placeholder="* Mot de passe"/>
			<button id= "button_sign"type="button">Me Connecter</button>
		</form> 
	</section>
	<?php include '../templates/footer.php';  ?>
</body>
<script src="signin.js"></script>
</html>
