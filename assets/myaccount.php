<!DOCTYPE html>
<html>
<head>
	<title>My account</title>
</head>
<body>
	<div class="">
		<?php include '../templates/navbar.php'; ?>
		<?php include 'accbar.php'; ?>
		<img src="#" alt="logo">
	</div>
	<?php include '../templates/aside.php'; ?>
	<div class="">
		<img src="#">
		<p id="prenom">prenom :</p>
		<p  id="nom">nom :</p>
		<p>E-mail :</p><p id="email"></p>
		<select id="mylist">
			<option></option>
			<option>prenom</option>
			<option>nom</option>
		</select>
		<button id="button_sign" type="button">changer</button>
		<p>change to: <input type="text" id="Val" size="20"></p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	</div>

	<?php include '../templates/footer.php'; ?>
</body>
<script src="myaccount.js"></script>
</html>
