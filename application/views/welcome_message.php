<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to PX</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

	<link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
<div id="container">
		<div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Home</a>
        </div>
 
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#div_AboutYou">About You</a>
                </li>
				<li>
                    <a href="#div_ShareExperience">Share Experience</a>
                </li>
                <li>
                    <a href="#">Diagnosis</a>
                </li>
                <li>
                    <a href="#">Treatment</a>
                </li>
				<li>
                    <a href="#">Recovery</a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
	<div class="panel">
		<div class="panel-header">
			<h1>Welcome to Patient eXperience</h1>
		</div>

<div class="panel-body">
  <div class="form-group">
    <label for="email">User Name:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Login</button>
  <button type="button" class="btn btn-link">Forgot your password?</button>
</div>
		
		<div id="div_AboutYou">
			<h1>About You</h1>
			<div class="form-group">
			<label for="condition">Condition</label>
			<input type="text" class="form-control" id="condition">
			</div>
			<div class="form-group">
				<label for="age">Age</label>
				<input type="text" class="form-control" id="age">
			  </div>
			<div class="form-group">
			<label for="hospital/clinic">Hospital/Clinic</label>
			<input type="text" class="form-control" id="hospitalClinic">
			</div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</div>
		
		<div id="div_ShareExperience">
			<h1>Share Experience</h1>
			<div class="row">
			<div class="col-md-2">Audio</div>
			<div class="col-md-2">Got Questions?</div>
			<div class="col-md-2">Camera</div>
			<div class="col-md-2">Twitter</div>
			<div class="col-md-2">Facebook</div>
			<div class="col-md-2">xyz</div>
		</div>
		
	</div>
	</div>
 
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='js/bootstrap.min.js'></script>

</body>
</html>
