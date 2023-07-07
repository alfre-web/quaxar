<?php

session_start();

$user = $_SESSION['nombre'];
if($user) {
    session_destroy();
    header('Location:' . '../../index.php');
}

?>