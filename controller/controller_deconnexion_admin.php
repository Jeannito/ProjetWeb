<?php

setcookie('pseudo', '', time() - 3600, '/');

header("Location: ../controller/controller_acceuil.php");

?>