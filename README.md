# NEMS
Pour installer le site il faut tout d'abord démarrer un serveur MySQL.

Pour paramétrer le serveur MySQL veuillez renseigner les variables $GLOBALS['dbServ'], $GLOBALS['dbUser'] et $GLOBALS['dbPass'] 
du fichier db_config.php.

Pour installer le site, il faut tout d'abord se connecter au script create_db.php afin de créer la base de donnée NEMS. 

Puis se connecter à install.php Ce script va créer les tables nécessaires au fonctionnement de NEMS et les remplir avec 
quelques exemples.

Vous pouvez ensuite vous connecter au script index.php et commencer la navigation.

Pour avoir la bonne base de données, il faut supprimer toutes les tables et réouvrir install.php
