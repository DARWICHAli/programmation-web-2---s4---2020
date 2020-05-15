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

		<form method ="post" class="se_connecter">
			<caption>Se Connecter<caption>
			<div>
				<label for="email"></label>
				<input id = "email" name="email" type="text" placeholder="* E-mail"/>
			</div>
			<div>
				<label for="password"></label>
				<input id = "paswd" name= "password" type="password" placeholder="* Mot de passe"/>
			</div>
			<button id= "button_sign"type="button">Me Connecter</button>
		</form>

	</section>
	<?php include '../templates/footer.php';  ?>
</body>
<script src="signin.js"></script>
</html>
