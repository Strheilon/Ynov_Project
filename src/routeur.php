<?php

// on récupère l'adresse après l'host du site
// exemple : avec http://site/test, $url correspondra à "/test"
$url = $_SERVER['REQUEST_URI'];
// si on est sur l'accueil
if ($url == '/') {
    require_once(__DIR__.'/index.php');
}
// si l'url commence par /administation
elseif (preg_match('/^\/Administration/', $url)) {
    require_once(__DIR__.'/src/admin.php');
}

elseif (preg_match('/^\/Offre/', $url)) {
    require_once(__DIR__.'/src/profil.php');
}
elseif (preg_match('/^\/Ajout/', $url)) {
    require_once(__DIR__.'/../src/ajout.php');
}
elseif (preg_match('/^\/Supression/', $url)) {

    require_once(__DIR__.'/../src/supression.php');
}
elseif (preg_match('/^\/Modification/', $url)) {

    require_once(__DIR__.'/../src/modif.php');
}
elseif (preg_match('/^\/Contact/', $url)) {

    require_once(__DIR__.'/../src/contact.php');
}
// dans tout les autres cas on affiche une page d'erreur
else {
    echo "t'es pas très beau";
}

/**
 * Created by IntelliJ IDEA.
 * User: arthur
 * Date: 29/05/2018
 * Time: 16:44
 */
