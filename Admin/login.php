<?php
ob_start();
session_start();
if (isset($_POST['basket'])) {
    $kullanici = htmlspecialchars($_POST['kadi']);
    $sifre = htmlspecialchars($_POST['sifre']);

    if ($kullanici == "admin" && $sifre == "admin") {
        $_SESSION["login"] = "true";
        $_SESSION["user"] = $kullanici;
        header("Location:home.php");
    }
}


?>