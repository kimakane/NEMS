<?php
include("con_status.php");
include("functions.php");
//$con = con();
$current_uti = 3;
$uti = Utilisateur($current_uti);
//var_dump($uti);
/* $res=mysqli_query($con, "SELECT * FROM utilisateur  WHERE id_uti = $current_uti");
$uti = mysqli_fetch_assoc($res); */
?>
<tbody>
  <tr>
    <th scope="row"></th>
    <td>Nom : <?php echo $uti['prenom'] ?> </td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>Prénom: <?php echo $uti['nom'] ?>  </td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>Pseudo : <?php echo $uti['pseudo'] ?> </td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>Naissance : <?php echo $uti['date_naissance'] ?> </td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>Heure de Naissance: <?php echo $uti['heure_naissance'] ?></td>
  </tr>
  <tr >
    <th scope="row"></th>
    <?php
      $mom_id = getUserMother($current_uti);
      //var_dump($mom_id);
      $mom = getUsername($mom_id[0]["id_mere"]);
      ?>
    <td>Nom Mère : <?php echo $mom[0]["nom"] ." " .$mom[0]["prenom"]; ?></td>
  </tr>
  <tr >
  <?php
      $dad_id = getUserFather($current_uti);
      //var_dump($mom_id);
      $dad = getUsername($dad_id[0]["id_pere"]);
      ?>
    <th scope="row"></th>
    <td>Nom Père : <?php  echo $dad[0]["nom"] ." " .$dad[0]["prenom"]; ?></td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>Mail : <?php echo $uti['mail'] ?></td>

  </tr>
</tbody>
<?php
  /* mysqli_free_result($res);
  mysqli_close($con); */
?>
