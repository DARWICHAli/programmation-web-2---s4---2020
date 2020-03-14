<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>
	<div class="">
		<?php include '../templates/navbar.php'; ?>
		<?php include 'accbar.php'; ?>
		<img src="#" alt="logo">
	</div>
	<?php include '../templates/aside.php'; ?>
		<section class="creer_compte">
			<form>
				<caption>Créer votre compte<caption>
					<input type="text" placeholder="* Nom"/>
					<input type="text" placeholder="* Prénom"/>
					<input id= "email" type="text" placeholder="* E-mail"/>
					<input id = "paswd" type="password" placeholder="* mot de pass"/>
					<input id = "paswd1" type="password" placeholder="* mot de pass pour verifier"/>
					<button id="button_sign" type="button">Créer mon compte</button>
			</form>
		</section>



	<?php include '../templates/footer.php';  ?>
</body>
<script src="signup.js"></script>
</html>
