<?php

require 'connexion.php';

$classement = $pdo->prepare("
    SELECT id, title, type, class, description, period, from_date, to_date
    FROM osi_offer
    ORDER BY id ASC
");

$classement->execute();
$hello = $classement->fetchAll();

include 'head.phtml';
include 'profil.phtml';
