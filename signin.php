<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign in - NEMS </title>

	<link rel="stylesheet" href="ressources/css/bootstrap.min.css">
	<link rel="stylesheet" href="ressources/css/font-awesome.min.css">
	<link rel="stylesheet" href="ressources/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="ressources/css/main.css">


</head>

<body>
	<?php
		include("not_connected.php");
	 ?>


	<header id="head" class="secondary"></header>

	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Sign in</li>
		</ol>

		<div class="row">

			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Sign in</h1>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Sign in to your account</h3>
							<p class="text-center text-muted">If you are new, click to  <a href="signup.php">Register</a></p>
							<?php
							if(isset($_POST['submit_signin'])){
								$mail=$_POST['mail'];
								include("con_status.php");
								include("functions.php");
								$con = con();
								$res = mysqli_query($con, "SELECT * FROM utilisateur WHERE mail='$mail' ");
								$assoc = mysqli_fetch_assoc($res);
								mysqli_free_result($res);
								mysqli_close($con);
								if(isset($assoc['pass'])){
									if (strcmp($_POST['pass'],$assoc['pass']) == 0) {
									$_SESSION['connect']=1;
									$_SESSION['id']=$assoc['id_uti'];
									header('Location: index.php');
									exit();
									}
								}
								header('Location: signin.php');
								exit();

							}
							else{
								include("back_signin.php");
							}
							?>

						</div>
					</div>

				</div>

			</article>

		</div>
	</div>

	<?php
		include("footer.php")
	 ?>

</body>
</html>
