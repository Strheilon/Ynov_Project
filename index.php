<?php

require 'src/connexion.php';

$reponse = $pdo->prepare("
	SELECT *
	FROM osi_offer
");
$reponse->execute();

include 'head.phtml';
include 'index.phtml';
