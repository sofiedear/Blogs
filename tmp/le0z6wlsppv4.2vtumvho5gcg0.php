<!DOCTYPE html>
<html lang="en">
<head>
  <!--IT 328
    Author: Sofiya Antonyuk 
    Date: 05-18-17-->
  <title>Blogs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Bootstrap style sheet-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--Custom style sheet-->
  <link rel="stylesheet" href="styles/styles.css">
  <!--Default JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<!-- Navigation-->
<?php echo $this->render('include/nav.html',NULL,get_defined_vars(),0); ?>


<div class="container"><!-- main container from nav -->
	<div class="row col-sm-10 page-container"><!-- page heading box -->
		<div class="jumbotron left-margin-20 top-margin-30">
			<div class="row">
				<div class="col-md-6">
					<h1>Become a Blogger!</h1> 
					<p>Create a new account below</p>
				</div>
				<div class="col-md-2 pull-right">
					<img src="./images/writing.png" width="175" height="200">
				</div>					
			</div>
		</div>
	</div><!-- page heading box -->
	<div class="row col-sm-10 page-container"><!-- signup form box -->
		<div class="jumbotron left-margin-20">
			<form action="./create-user" method="post" class="form-horizontal">
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<div class="col-md-4 col-md-push-8 text-center username-lbl">
								<label class="control-label sign-up-form-label lbl-centered" for="username">Username</label>
							</div>
							<div class="col-md-8 col-md-pull-4 username-field">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4 col-md-push-8 text-center email-lbl">
								<label class="control-label sign-up-form-label lbl-centered" for="email">Email</label>
							</div>
							<div class="col-md-8 col-md-pull-4 email-field">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						 <div class="form-group">
							<div class="col-md-4 col-md-push-8 text-center pwd-lbl">
								<label class="control-label sign-up-form-label lbl-centered" for="password">Password</label>
							</div>
							<div class="col-md-8 col-md-pull-4 pwd-field">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4 col-md-push-8 text-center verify-lbl">
								<label class="control-label sign-up-form-label lbl-centered" for="verify">Verify</label>
							</div>
							<div class="col-md-8 col-md-pull-4 verify-field">
								<input type="password" class="form-control" id="verify" name="verify" placeholder="Verify Password">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="form-group">
							<div class="col-md-8">
								<input type="text" class="form-control" id="portrait" name="portrait" placeholder="...">
							</div>
							<button type="button" class="btn btn-default" id="btn-upload-portrait">Upload Portrait</button>
						</div>
						<div class="form-group">
							<div class="col-md-12 bordered-label text-center">
								<label class="control-label " for="bio">Quick Biography</label>
							</div>
							<div class="col-md-12 top-margin-10">
								<textarea class="form-control" id="biography" name="bio" rows="7" placeholder="Something about me..."></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row top-margin-30">
					<div class="col-md-12 text-center">
						<button type="submit" class="btn btn-primary btn-lg"><h4>Start Blogging!</h4></button>
					</div>
				</div>
			</form>
		</div>
	</div><!-- signup form box -->
</div><!-- main container from nav -->


	
	
</body>
</html>