<?php
include("functions.php");

function create_table() {

    $con = con_init();

    if(! $con ){
        echo 'fail connection <br>' ;
    }
    else{
        echo 'database created' ;
        $dbName = "CREATE DATABASE NEMS" ;
        mysqli_query($con , $dbName);
    }

 mysqli_close($con);
  $qTb_UTILISATEUR = "CREATE TABLE IF NOT EXISTS `utilisateur`(
      `id_uti` int(11) NOT NULL AUTO_INCREMENT,
      `nom` varchar(255) NOT NULL,
      `prenom` varchar(255) NOT NULL,
      `pseudo` varchar(255) NOT NULL,
      `date_naissance` varchar(255) NOT NULL,
      `lieu_naissance` varchar(20) NOT NULL,
      `heure_naissance` varchar(11) NOT NULL,
      `mail` int(11) NOT NULL,
       PRIMARY KEY(`id_uti`)
      ) ENGINE=InnoDB;";


      $qTb_FAMIL_UTI = "CREATE TABLE IF NOT EXISTS `famil_uti`(
       `id_uti` int(11) NOT NULL,
       `id_pere` int(11) NOT NULL,
        FOREIGN KEY (id_pere) REFERENCES utilisateur(id_uti),
        `id_mere` int(11) NOT NULL,
        FOREIGN KEY (id_mere) REFERENCES utilisateur(id_uti),
        `comment` varchar(255) NOT NULL
        )ENGINE=InnoDB;";


      $qTb_MARIAGE = "CREATE TABLE IF NOT EXISTS `mariage`(
      `id_mar` int(11) NOT NULL AUTO_INCREMENT,
       `id_pere` int(11) NOT NULL,
       `id_mere` int(11) NOT NULL,
       `date_mar` int(11) NOT NULL,
       `comment` varchar(255) NOT NULL,
       PRIMARY KEY(`id_mar`)
      ) ENGINE=InnoDB;";

    $qTb_FRATERIE = "CREATE TABLE IF NOT EXISTS `fraterie`(
        `id_fr1` int(11) NOT NULL,
        FOREIGN KEY (id_fr1) REFERENCES utilisateur(id_uti),
        `id_fr2` int(11) NOT NULL,
        FOREIGN KEY (id_fr2) REFERENCES utilisateur(id_uti)
        ) ENGINE=InnoDB;";


      $qTb_DIVORCE = "CREATE TABLE IF NOT EXISTS `divorce`(
      `id_div` int(11) NOT NULL AUTO_INCREMENT,
       `id_pere` int(11) NOT NULL,
       `id_mere` int(11) NOT NULL,
       `date_div` int(11) NOT NULL,
       `comment` varchar(255) NOT NULL,
       PRIMARY KEY(`id_div`)
      ) ENGINE=InnoDB;";



echo "Connexion au serveur MySQL.";
    $db = con();

echo "Creation de la table utilisateur.";
    mysqli_query($db, $qTb_UTILISATEUR );
    echo mysqli_info($db);
    echo mysqli_error($db);

echo "Creation de la table famille_utilisateur.";
    mysqli_query($db, $qTb_FAMIL_UTI);
    echo mysqli_info($db);
    echo mysqli_error($db);

echo "Creation de la table mariage";
    mysqli_query($db, $qTb_MARIAGE);
    echo mysqli_info($db);
    echo mysqli_error($db);

echo "Creation de la table divorce";
    mysqli_query($db, $qTb_DIVORCE);
    echo mysqli_info($db);
    echo mysqli_error($db);

echo "Creation de la table fraterie";
    mysqli_query($db, $qTb_FRATERIE);
    echo mysqli_info($db);
    echo mysqli_error($db);

mysqli_close($db);
    }

    create_table() ;

?>
