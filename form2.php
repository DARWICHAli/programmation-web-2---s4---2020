<?php
$prenom = $_POST['prenom'];
$message = $_POST['message'];
    try {
        $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/database.db');
        $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE ,PDO::FETCH_ASSOC);
        $pdo->setAttribute( PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
        $pdo->query(
            'CREATE TABLE IF NOT EXISTS annonce(
                                id INTEGER PRIMARY KEY AUTOINCREMENT,
                                prenom VARCHAR(50) NOT NULL,
                                message VARCHAR(150) NOT NULL
                        )'
        );
        if($prenom && $message) {
            $statement = $pdo->prepare(
                'INSERT INTO annonce (prenom ,message) VALUES (:prenom ,:message)'
            );
            $statement->bindValue('prenom', $prenom, PDO:: PARAM_STR);
            $statement->bindValue('message', $message, PDO:: PARAM_STR);
            $statement->execute();
        }
    } catch(PDOException $exception){
        var_dump($exception);
    }
?>