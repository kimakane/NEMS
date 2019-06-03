<?php
include("fonction.php");

function create_table() {

  $qTb_UTILISATEUR = "CREATE TABLE IF NOT EXISTS `utilisateur`(
      `id_uti` int(11) NOT NULL AUTO_INCREMENT,
      `nom` varchar(255) NOT NULL,
      `prenom` varchar(255) NOT NULL,
      `pseudo` varchar(255) NOT NULL,
      `date_naissance` varchar(255) NOT NULL,
      `lieu_naissance` int(11) NOT NULL,
      `heure_naissance` int(11) NOT NULL,
      `nom_pere` int(11) NOT NULL,
      `nom_mere` int(11) NOT NULL,
      `nom_gpere` int(11) NOT NULL,
      `nom_gmere` int(11) NOT NULL,
      `mail` int(11) NOT NULL,
       PRIMARY KEY(`id_uti`)
      ) ENGINE=InnoDB;";


      $qTb_FAMIL_UTI = "CREATE TABLE IF NOT EXISTS `famil_uti`(
      `id_famil_uti` int(11) NOT NULL AUTO_INCREMENT,
       `id_uti` int(11) NOT NULL,
       `nom` varchar(255) NOT NULL,
       `prenom_pere` varchar(255) NOT NULL,
       `prenom_mere` varchar(11) NOT NULL,
       `date_naissance_pere`varchar(3) NOT NULL,
       `date_naissance_mere`varchar(3) NOT NULL,
      `comment` varchar(255) NOT NULL,
       PRIMARY KEY(`id_famil_uti`)
      ) ENGINE=InnoDB;";



    //echo "Connexion au serveur MySQL.";
    $db = con();

   //echo "Creation de la table utilisateur.";
    mysqli_query($db, $qTb_UTILISATEUR );
    echo mysqli_info($db);
    echo mysqli_error($db);



    //echo "Creation de la table famille_utilisateur.";
    mysqli_query($db, $qTb_FAMIL_UTI);
    echo mysqli_info($db);
    echo mysqli_error($db);

    }

    create_table() ;

?>
