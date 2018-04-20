<!DOCTYPE html>
<html lang="en">
<div class="container">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>To-do Sign-Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body><div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form method="post" action="../Controller/action.php">
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="fname" id="fname" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="lname" id="lname" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="3" required>
			</div>
			<div class="form-group">
				<input type="tel" name="phone" id="phone" class="form-control input-lg" placeholder="Phone (123-456-7890)" tabindex="4" required>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="Date" name="birthday" id="birthday" class="form-control" placeholder="mm/dd/yyyy" pattern="mms/dd/yyyy" tabindex="5" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group" class="form-control input-lg">
						<select name="gender" required>
							<option selected="true" disabled>Gender</option>
   							<option value="M">Male</option>
  							<option value="F">Female</option>
    						<option value="O">Other</option>
  						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="7" required>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="8"></div>
				<div class="col-xs-12 col-md-6"><a href="../index.php" class="btn btn-success btn-block btn-lg">Have an Account?</a></div>
			</div>
		</form>
	</div>
</div>