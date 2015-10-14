<?php


    session_start();
    unset($_SESSION['logged']);
    header('Location:http://www.raig.cat/');
    exit();

?>