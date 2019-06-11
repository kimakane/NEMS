<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Creation account</title>

  </head>
  <body>
  <form method='post' action='signup.php'>
								<div class="top-margin">
									<label>Nom<span class="text-danger">*</span></label>
									<input type="text" name="firstname" class="form-control">
								</div>
								<div class="top-margin">
									<label>Prenom<span class="text-danger">*</span></label>
									<input type="text" name="lastname" class="form-control">
								</div>
                <div class="top-margin">
									<label>Pseudo <span class="text-danger">*</span></label>
									<input type="text" name="username" class="form-control">
								</div>
								<div class="top-margin">
									<label>Date_naissance <span class="text-danger">*</span></label>
									<input type="text" name="mail" class="form-control">
								</div>
                <div class="top-margin">
									<label>Lieu_naissance <span class="text-danger">*</span></label>
									<input type="text" name="mail" class="form-control">
								</div>
                <div class="top-margin">
                  <label>Heure_naissance <span class="text-danger">*</span></label>
                  <input type="text" name="mail" class="form-control">
                </div>
								<div class="top-margin">
									<label>Mail <span class="text-danger">*</span></label>
									<input type="text" name="age" class="form-control">
								</div>
								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Password <span class="text-danger">*</span></label>
										<input type="text" name="pass" class="form-control">
									</div>
									<div class="col-sm-6">
										<label>Confirm Password <span class="text-danger">*</span></label>
										<input type="text" name="confirmpass" class="form-control">
									</div>

								</div>
								<hr>

								<div class="row">

									<div class="col-lg-4 text-right">
                    <button name='submit_signup' class="btn btn-action" type="submit" >Register</button>
										<!-- redirect button with php -->
									</div>
								</div>
   </form>

  </body>
</html>
