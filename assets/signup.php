<!DOCTYPE html>
<html lang="">
<head>
	<title>SignUp</title>
</head>
<body>
	<div class="">
		<?php include '../templates/navbar.php'; ?>
		<img src="#" alt="logo">
	</div>
	<?php include '../templates/aside.php'; ?>
    <?php include '../form.php'?>
		<section class="creer_compte">
			<form method="post">
					<div>
						<label for="nom"></label>
						<input id="nom" type="text" name="nom" placeholder="* Nom"/>
					</div>
					<div>
						<label for="prenom"></label>
						<input id="prenom" type="text" name="prenom" placeholder="* Prénom"/>
					</div>
					<div>
						<label for="E-mail"></label>
                        <input id= "email" type="text" name="email"  placeholder="* E-mail"/>
					</div>
					<div>
						<label for="Password"></label>
                        <input id = "paswd" type="password" name= "paswd" placeholder="* mot de pass"/>
					</div>
					<div>
						<label for="Password"></label>
                        <input id = "paswd1" type="password" name="paswd1" placeholder="* mot de pass pour verifier"/>

					</div>
					<button id="button_sign" type="submit">Créer mon compte</button>
			</form>
		</section>

	<?php include '../templates/footer.php';  ?>
</body>
<script src="signup.js"></script>
</html>
