<?php
include("db_config.php");


function con_init() {
  return mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass']);
}

// Établit une connexion à la base
function con() {
  return mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'],$GLOBALS['dbName']);
}
//POUR LES UTILISATEURS

// Obtenir l'id d'un utilisateur

function get_id($nom,$date_naissance,$pseudo){
  $con = con();
  $res = mysqli_query($con, "SELECT id_uti FROM utilisateur WHERE nom =$nom, date_naissance = $date_naissance,pseudo = $pseudo ");
  $assoc = mysqli_fetch_all($res, MYSQLI_ASSOC);
  mysqli_free_result($res);
  mysqli_close($con);
  return $assoc['id_uti'];
}

//obttenir le nom d'un utilisateur connaissant son id
function get_name($id_uti){
  $con = con();
  $res = mysqli_query($con, "SELECT nom,prenom,pseudo,date_naissance,lieu_naissance,heure_naissance FROM utilisateur WHERE id_uti = $id");
  $assoc = mysqli_fetch_all($res, MYSQLI_ASSOC);
  mysqli_free_result($res);
  mysqli_close($con);
  return $assoc['nom,prenom,pseudo,date_naissance,lieu_naissance,heure_naissance'];
}



// Ajoute un utilisateur
function ajoutUtilisateur($nom,$prenom,$pseudo,$date_naissance,$lieu_naissance,$heure_naissance) {
  $con = con();
  $stmt = mysqli_prepare($con, "INSERT INTO utilisateur (nom,prenom,pseudo,date_naissance,lieu_naissance,heure_naissance) VALUES (?,?,?,?,?,?)");
  mysqli_stmt_bind_param($stmt, 'sssisi',$nom,$prenom,$pseudo,$date_naissance,$lieu_naissance,$heure_naissance);
  mysqli_stmt_execute($stmt);
  mysqli_close($con);
}
// Supprime un utilisateur
function supprUtilisateur($id_uti) {
  $con = con();
  $stmt = mysqli_prepare($con, "DELETE FROM utilisateur WHERE id_uti = ?");
  mysqli_stmt_bind_param($stmt, 'i', $id_uti);
  mysqli_stmt_execute($stmt);
  mysqli_close($con);
}
// Édite un Utilisateur
function editeUtilisateur($id_uti,$nom,$prenom,$pseudo,$date_naissance,$lieu_naissance,$heure_naissance) {
  $con = con();
  $stmt = mysqli_prepare($con, "UPDATE utilisateur SET nom = ?, prenom = ?, pseudo = ?, date_naissance = ?, heure_naissance = ?  WHERE id_uti = ?");
  mysqli_stmt_bind_param($stmt, 'sssisii',$nom,$prenom,$pseudo,$date_naissance,$lieu_naissance,$heure_naissance,$id_uti);
  mysqli_stmt_execute($stmt);
  mysqli_close($con);
}
// Retourne la liste de tous les utilisateurs triés par dates décroissantes
function ListesUtilisateur() {
  $con = con();
  $res = mysqli_query($con, "SELECT * FROM utilisateur ORDER BY nom DESC;");
  $assoc = mysqli_fetch_all($res, MYSQLI_ASSOC);
  mysqli_free_result($res);
  mysqli_close($con);
  return $assoc;
}
// Retourne un Utilisateur en fonction de son id
function Utilisateur($id_uti) {
  $con = con();
  $stmt = mysqli_prepare($con, "SELECT * FROM utilisateur WHERE id_uti = ?");
  mysqli_stmt_bind_param($stmt, 'i', $id_uti);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
  $assoc = mysqli_fetch_assoc($res);
  mysqli_free_result($res);
  mysqli_close($con);
  return $assoc;
}

// Retourne l'id du père d'un utilisateur ayant un id donné
function getUserFather($id){
  $con = con();
  $res = mysqli_prepare($con, "SELECT id_pere FROM famil_uti WHERE id_uti = ?;");
  mysqli_stmt_bind_param($res, 'i', $id);
  mysqli_stmt_execute($res);
  $data = mysqli_stmt_get_result($res);
  $father = mysqli_fetch_all($data, MYSQLI_ASSOC);
  mysqli_free_result($data);
  mysqli_close($con);
  return $father;
}

function getUserMother($id){
  $con = con();
  $res = mysqli_prepare($con, "SELECT id_mere FROM famil_uti WHERE id_uti = ?;");
  mysqli_stmt_bind_param($res, 'i', $id);
  mysqli_stmt_execute($res);
  $data = mysqli_stmt_get_result($res);
  $mother = mysqli_fetch_all($data, MYSQLI_ASSOC);
  mysqli_free_result($data);
  mysqli_close($con);
  return $mother;
}

function getUserName($id){
  $con = con();
  $res = mysqli_prepare($con, "SELECT nom, prenom FROM utilisateur WHERE id_uti = ?;");
  mysqli_stmt_bind_param($res, 'i', $id);
  mysqli_stmt_execute($res);
  $data = mysqli_stmt_get_result($res);
  $name = mysqli_fetch_all($data, MYSQLI_ASSOC);
  mysqli_free_result($data);
  mysqli_close($con);
  return $name;
}
?>
