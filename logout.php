<?php

session_start();
setcookie("id", "", time() - 3600); //send browser command remove sid from cookie
session_destroy(); //remove sid-login from server storage
session_write_close();
header('Location: ./counter.php');

?>