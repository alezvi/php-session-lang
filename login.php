<?php 

$user = 'ale@dh.com';
$pass = 'secret';

if ($_POST) {
    if ($_POST['user'] === $user && $_POST['pass'] === $pass) {
        session_start();
        header('location: index.php');
    }
}

?>

<form action="login.php" method="post">
    <input type="text" name="user">
    <input type="password" name="pass">
    <button>Enviar</button>
</form>