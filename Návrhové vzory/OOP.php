<?php
session_start();
// funkce unset() se postará o zrušení přihlašovací session
unset($_SESSION['prihlaseni']);
// přesměrování na přihlašovací formulář
header('Location: index.php');
?>