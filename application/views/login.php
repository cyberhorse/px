<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to PX</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" />

	<link href='/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<link href='/css/main.css' rel='stylesheet'>

	<meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Your Website Title" />
	<meta property="og:description"   content="Your description" />
	<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />

</head>
<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
	<a href="/">
		<img src="/images/journey-icon-1.png" />
	</a>

	<a href="/share/add" class="ajax" style="padding-top: 30px">
		<i class="fa fa-plus" style="font-size: 30pt"></i>
	</a>

	
	
	
	<div class="navbar-header pull-right">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>	
	</div>

	<div class="navbar-btn pull-right">
		Your mood:
		<img src="/images/journey-icon-happy.png">
		<img src="/images/journey-icon-sad.png">
	</div>
	

	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li>
				<a href="/welcome/map" class="ajax"><span class="badge badge-yellow">1</span> Diagnosis</a>
			</li>
			<li>
				<a href="/welcome/map" class="ajax"><span class="badge badge-red">2</span> Treatment</a>
			</li>
			<li>
				<a href="/welcome/map" class="ajax"><span class="badge badge-green">3</span> Recovery</a>
			</li>

			<li>
				<a href="#" class="ajax" onclick="$('#login').removeClass('hidden')">Sign in</a>
			</li>

		</ul>
		
	</div><!--/.nav-collapse -->


	<div class="clearfix"></div>
</div>

<div id="login" class="hidden">
	<form action="login" method="post">
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
	</form>
</div>

<div id="container">

	<div class="panel">

		<form action="/welcome/map" method="post">
			<div id="div_AboutYou">
				<h3>About You</h3>

				<img src="/images/about-us_1.png" class="full" />
				
				<div class="row">
					<div class="col-md-12">
						<label>Name</label>
						<input type="text" class="form-control" name="name" id="name">
						
						<label>Condition</label>
						<input type="text" class="form-control" name="condition" id="condition">
						
					</div>
					<div class="col-md-12">
						<label>Age</label>
						<input type="text" class="form-control" name="age" id="age">
						
						<label>Hospital</label>
						<input type="text" class="form-control" name="hospitalClinic" id="hospitalClinic">
						
					</div>
				</div>
				
				<div class="submit">
					<button type="submit" class="btn btn-submit">
					
						<i class="fa fa-check"></i>
					</button>
				</div>
				
			</div>
		</form>
			
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='/js/bootstrap.min.js'></script>
<script src="/js/main.js"></script>

<script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>

</body>
</html>
