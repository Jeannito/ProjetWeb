    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Amateur de vin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../controller/controller_acceuil.php">Home</a></li>
            <li><a href="../controller/controller_contact.php">Contact</a></li>
            
            <?php 
            require_once '../model/model_admin.php';
            require_once '../model/model_utilisateur.php';
            ?>

            <?php if ((empty($_COOKIE['ch_rdm'])) /*OR (!ModelUtilisateur::IsUser($_COOKIE['ch_rdm'])) OR(!ModelAdmin::IsAdmin($_COOKIE['ch_rdm']))*/) { ?>

              <li><a href="../controller/controller_recherche_vin.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Catalogue Vin</a></li>
              <li class="compte">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compte <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../controller/controller_communaute.php">Communauté</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Compte</li>
                <li><a href="../view/inscription.php"><i class="glyphicon glyphicon-user"></i> S'incrire</a></li>
                <li><a href="../controller/controller_view_connexion.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Se connecter</a></li>
                <li><a href="../controller/controller_view_connexion_admin.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Connexion Admin</a></li>
              </ul>

            <?php 
            }
            else if(!ModelAdmin::IsAdmin($_COOKIE['ch_rdm'])){
            ?>

            <?php ?>
              <li class="compte">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_COOKIE['pseudo']?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../controller/controller_communaute.php">Communauté</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header"><?php echo $_COOKIE['pseudo']?></li>
                <li><a href="../controller/controller_profil_utilisateur.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Modifier Profil </a></li>
                <li><a href="../controller/controller_deconnexion.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Se deconnecter </a></li>
                </ul>

              <li class="compte">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vin <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../controller/controller_recherche_vin.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Recherche Vin </a></li>
                <li><a href="../controller/controller_proposition_vin.php"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Proposer un Vin </a></li>
              </ul>

            <?php
            }
            else
            {
            ?>

              <li class="compte">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compte <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../controller/controller_communaute.php">Communauté</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Utilisateurs</li>
                <li><a href="../controller/controller_gestion_utilisateur.php"> Gerer utilisateurs </a></li>
                <li><a href="../controller/controller_inscrire_admin.php"> Ajouter un admin </a></li>
                <li><a href="../controller/controller_deconnexion.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Se deconnecter </a></li>
                </ul>

              <li class="compte">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vin <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../controller/controller_recherche_vin.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Recherche Vin </a></li>
                <li><a href="../controller/controller_gestion_vin.php"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Valider les vins </a></li>
                <li><a href="../controller/controller_affichage_vin.php"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Supprimer les vins </a></li>
                <li><a href="../controller/controller_proposition_ajout_type_aoc.php"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Ajouter Categorie ou AOC </a></li>
                <li><a href="../controller/controller_proposition_vin.php"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Proposer un Vin </a></li>
              </ul>

            <?php }?>
        </div>
      </div>
    </nav>