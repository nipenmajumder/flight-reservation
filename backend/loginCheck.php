<?php
session_start();

if (!$_SESSION["id"]) {
    header("Location:login.php");
}
?>