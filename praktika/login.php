<?php
// Visuomet pirma startuojam sesija
session_start();

if (!empty($_POST)) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] === 'jonas' && password_verify($_POST['password'], password_hash('slaptas', PASSWORD_DEFAULT))) {
            echo 'Prisijungiai..';
            $_SESSION['user_id'] = $_POST['username'];
        } else {
            header('location:prisijungti.php?fail=1');
        }
    }
}
?>
