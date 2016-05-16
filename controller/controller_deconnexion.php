<?php
//controller permettant de deconnecter les admins et utilisateurs en detruisant les cookies

setcookie('ch_rdm');

setcookie('pseudo');

header("Location: ../controller/controller_acceuil.php");

?>