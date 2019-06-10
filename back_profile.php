<?php
include("con_status.php");
include("functions.php");
$con = con();
$current_uti=1;
$res=mysqli_query($con, "SELECT * FROM utilisateur  WHERE id_uti = $current_uti");
$uti = mysqli_fetch_assoc($res);
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
    <td>Nom Mère : <?php echo $uti['nom_pere'] ?></td>
  </tr>
  <tr >
    <th scope="row"></th>
    <td>Nom Père : <?php echo $uti['nom_pere'] ?></td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>Mail : <?php echo $uti['mail'] ?></td>

  </tr>
</tbody>
<?php
  mysqli_free_result($res);
  mysqli_close($con);
?>
