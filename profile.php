<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <title>Profile - NEMS</title>
<link href="ressources/css/bootstrap.min.css" rel="stylesheet">
	<link href="ressources/css/bootstrap-theme.css" media="screen" rel="stylesheet">
	<link href="ressources/css/dashboard.css?v=1.4.0" rel="stylesheet">
</head>
<body>
	<?php
	include("header.php")
	?>
	<div class="wrapper">
		<div class="sidebar" >
			<div class="sidebar" >
				<ul class="add-new">
          <li>
						<a class="btn" href="edit_profile.php">Extrait de naissance</a>
					</li>
					<li>
						<a class="btn" href="index.php">Plus d'info</a>
					</li>
			</div>
		</div>
		<div class="main-panel">
			<div class="margin-top">
				<div class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="header">
										<h1 class="title">Profil</h1>
									</div>
									<div class="content table-responsive table-full-width">
										<table class="table table-hover table-striped">
											<?php
											include("back_profile.php");
											?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div></a>
</body>
