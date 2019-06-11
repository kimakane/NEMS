<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Sign up - NEMS </title>

	<link rel="stylesheet" href="ressources/css/bootstrap.min.css">
	<link rel="stylesheet" href="ressources/css/font-awesome.min.css">
	<link rel="stylesheet" href="ressources/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="ressources/css/main.css">
</head>

<body>
	<?php
		include("not_connected.php")
	 ?>

	<header id="head" class="secondary"></header>

	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">

			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body"><div class="sidebar" data-image="ressources/images/sidebar-5.jpg"></div>

							<h3 class="thin text-center">Register a new account</h3>
							<p class="text-center text-muted">If you already have an account, click to <a href="signin.php">Sign in</a>  </p>
							<hr>

							<?php
								if(isset($_POST['submit_signup'])){
									$mail=$_POST['mail'];
									include("con_status.php");
									include("functions.php");
									$con = con();
									$res = mysqli_query($con, "SELECT mail FROM utilisateur WHERE mail = '$mail' ");
									$assoc = mysqli_fetch_assoc($res);
								    mysqli_free_result($res);
								    mysqli_close($con);
									if(!isset($assoc['mail'])) {
										if(strcmp($_POST['pass'],$_POST['confirmpass']) == 0){
											if(isset($_POST['firstname'])AND isset($_POST['lastname'])
											    AND isset($_POST['mail'])AND isset($_POST['pass'])AND
												isset($_POST['username'])AND isset($_POST['age'])) {
												ajoutUtilisateur($_POST['firstname'],$_POST['lastname'],$_POST['username'],$_POST['mail'],$_POST['age'],$_POST['pass']);
												$_SESSION['connect']=1;
												$_SESSION['id']=get_id($_POST['mail']);
												header('Location: index.php');
												exit();
											}
										}
									}
									header('Location: signup.php');
									exit();
								}
								else{
									include("back_signup.php");
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
