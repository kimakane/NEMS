<?php
include("con_status.php");
include("functions.php");
$con = con();
$current_uti=$_SESSION['id'];
$res=mysqli_query($con, "SELECT * FROM utilisateur  WHERE id_uti = $current_uti");
$uti = mysqli_fetch_assoc($res);
?>
<tbody>
  <tr>
    <th scope="row"></th>
    <td>First Name : <?php echo $uti['prenom'] ?> </td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>Last Name : <?php echo $uti['nom'] ?>  </td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>pseudo : <?php echo $uti['pseudo'] ?> </td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>Naissance : <?php echo $uti['date_naissance'] ?> </td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>Heure : <?php echo $uti['heure_naissance'] ?></td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>Pere : <?php echo $uti['nom_pere'] ?></td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>Mere : <?php echo $uti['nom_mere'] ?></td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>GPere : <?php echo $uti['nom_gpere'] ?></td>

  </tr>
  <tr >
    <th scope="row"></th>
    <td>GMere : <?php echo $uti['nom_gmere'] ?></td>

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
