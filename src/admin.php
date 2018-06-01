<?php

require 'connexion.php';

$admin = $pdo->prepare("
	SELECT *
	FROM admin
");
$admin->execute();
$test = $admin->fetch();

if (isset($_POST['user']) && isset($_POST['password'])) {
    if ($test['Username'] == $_POST['user'] && $test['Password'] == $_POST['password']) {
        header('Location: ../index.php');
    }
}

include 'admin.phtml';
include 'head.phtml';
