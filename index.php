<?php 

session_start();

function t($key, $lang = 'en') {

    $translations = require('translations.php');

    return $translations[$lang][$key];
}


if (isset($_GET['lang'])) {
    
    // setcookie('pref_lang', $_GET['lang']);

    $_SESSION['lang'] = $_GET['lang'];

    header('location: index.php');

}



require 'partials/auth.php';

?>

<ul>
    <li><a href="?lang=es">Español</a></li>
    <li><a href="?lang=en">Ingles</a></li>
    <li><a href="?lang=it">Italiano</a></li>
</ul>
