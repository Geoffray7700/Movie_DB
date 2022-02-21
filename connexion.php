<?php


$user = 'eleve';
$pass ='eleve';
// try catch pour afficher une erreur correct et pas tt les details de l'erreur en brut
try {
    $db = new PDO('mysql:host=localhost;port=3307;dbname=movie_db', $user, $pass);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

