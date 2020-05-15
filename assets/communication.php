<!DOCTYPE html>
<html>
<head>
	<title>Communication</title>
	<link rel="stylesheet" type="text/css" href="/adarwich/programmation-web-2---s4---2020/assets/communication.css">
</head>
<body>
	<div class="">
		<?php include '../templates/navbar.php'; ?>
		<?php include 'accbar.php'; ?>
		<img src="#" alt="logo">
	</div>
	<?php include '../templates/aside.php'; ?>
	<div class="annonce">
		<div class="">
			<img src="an_lol.jpg">
		</div>
		<div class="">
			<p>description</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	</p>
		</div>
        <section id="comments_display">
            $messages = $pdo->query('SELECT * FROM message')->fechAll();
        </section>

	</div>
	<div class="annonce">
		<img src="an_lol.jpg">
		<p>description</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	</p>
	</div>
    <section id="display_annonce">
        <?php
        $annonces = $pdo->query(
                'SELECT * FROM annoce'
        )->fetchAll();
        
        foreach ($annonces as $annonce){
        ?>
            <div>
                <img src="an_lol.jpg">
                <p><?php echo $annonce['prenom'];?></p>
                <p><?php echo $annonce['message'];?></p>
            </div>
        <?php
        }
        ?>
    </section>
    <div class="creer_annonce">
        <div>
            <label for="Prenom"></label>
            <input id = "prename" type="text" name= "prename" />
        </div>
        <div>
            <label for="message"></label>
            <textarea id="message" name="message"></textarea>
        </div>
        <button type="send">Envoyer</button>
    </div>

	<?php include '../templates/footer.php'; ?>
    <?php include '../form2.php'; ?>

</body>
</html>
