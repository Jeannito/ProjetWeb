<?php
//destruction des cookie mais controller inutile parceque pour déconnecter l'admin j'appelle le controller deconnexion

setcookie('pseudo');
setcookie('ch_rdm');

header("Location: ../controller/controller_acceuil.php");

?>