<?php
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])){
        header("Location:index.php");
    }
    session_destroy();
    header("Location:index.php");
?>