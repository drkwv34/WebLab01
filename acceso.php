<?php 
    session_start();
    if( $_POST["usuario"] !="" && $_POST["clave"] !=""){
        $_SESSION["username"] = $_POST["usuario"];
        $_SESSION["password"] = $_POST["clave"];
        $_SESSION["rememberme"] = isset($_POST["chkRecordame"])?$_POST["chkRecordame"]:"";
        header("Location: panelPrincipal.php");
    }else{
        header("Location: index.php"); 
    }
?>