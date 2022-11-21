<?php
session_start();

if (!$_SESSION["id"]) {
    header("Location:front-login.php");
}
?>