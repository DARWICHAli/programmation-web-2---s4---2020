<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$pass = $_POST['paswd'];
$email = $_POST['email'];
if($nom && $prenom && $pass && $email){
        //var_dump($email);
        //var_dump($nom , $prenom ,$pass , $email);
        try {
                //var_dump($nom , $prenom ,$pass , $email);
                $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/database.db');
                $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE ,PDO::FETCH_ASSOC);
                $pdo->setAttribute( PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
                $pdo->query(
                        'CREATE TABLE IF NOT EXISTS message (
                                id INTEGER PRIMARY KEY AUTOINCREMENT,
                                nom VARCHAR(50) NOT NULL,
                                prenom VARCHAR(50) NOT NULL,
                                email VARCHAR(50) NOT NULL ,
                                password VARCHAR(50) NOT NULL
                        )'
                );
                //var_dump($nom , $prenom ,$email , $pass);
                $statement = $pdo->prepare(
                        'INSERT INTO message (nom , prenom ,email ,password) VALUES (:nom ,:prenom ,:email,:password)'
                );
               // var_dump($nom , $prenom ,$email , $pass);
                $statement->bindValue('nom' , $nom, PDO:: PARAM_STR);
                $statement->bindValue('prenom' , $prenom, PDO:: PARAM_STR);
                $statement->bindValue('email' , $email, PDO:: PARAM_STR);
                $statement->bindValue('password' , $pass, PDO:: PARAM_STR);
                $statement->execute();
               // var_dump($email);
        } catch(PDOException $exception){
                var_dump($exception);
        }
}
?>

