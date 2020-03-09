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
					<input type="text" placeholder="Nom"/>
					<input type="text" placeholder="Prénom"/>
					<input type="email" placeholder="E-mail"/>
					<input type="password" placeholder="mot de passe"/>
					<button type="send">Créer mon compte</button>
			</form>
		</section>



	<?php include '../templates/footer.php';  ?>
</body>
</html>
