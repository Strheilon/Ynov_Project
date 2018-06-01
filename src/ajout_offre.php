<?php

require 'connexion.php';

if (isset($_POST['title'])) {
    $statement = $pdo->prepare("
        INSERT INTO osi_offer(title, type, formation, class, description, period)
        VALUES(:title, :type, :formation, :class, :description, :period)
    ");

    $statement->bindValue(':title', $_POST['title']);
    $statement->bindValue(':type', $_POST['type']);
    $statement->bindValue(':formation', $_POST['formation']);
    $statement->bindValue(':class', $_POST['class']);
    $statement->bindValue(':description', $_POST['description']);
    $statement->bindValue(':period', $_POST['period']);
    $statement->execute();

    header('Location: ../index.php');
    exit();
}



include 'head.phtml';
include 'ajout_offre.phtml';
