<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
				crossorigin="anonymous"/>

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
				crossorigin="anonymous"/>

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- Custom CSS -->
		<link rel="stylesheet" href="less/styles.less" type="text/css"/>

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>

		<title>
			Bootstrap Challenge
		</title>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<nav class="navbar navbar">
						<!-- logo and mobile toggle button get grouped together for better mobile display -->
						<div class="navbar-header">
							<!-- this is the mobile menu button -->
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
									  data-target="#main-menu">
								<span class="sr-only">main menu</span>
								<span class="glyphicon glyphicon-menu-hamburger"></span>
							</button>
							<a class="navbar-brand" href="#">LOGO</a>
						</div>

						<!-- here are your main nav links, grouped for toggling -->
						<div class="collapse navbar-collapse" id="main-menu">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">TOP NAVIGATION</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<main>
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<p class="text-center" id="welcome">WELCOME</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p class="text-center">PHOTO</p>
					</div>
					<div class="col-md-9">
					<p class="text-center">TEXT</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3"><img src="http://lorempixel.com/100/100/" alt="random-pic" class="img-circle"></div>
					<div class="col-md-3"><img src="http://lorempixel.com/100/100/" alt="random-pic" class="img-circle"></div>
					<div class="col-md-3"><img src="http://lorempixel.com/100/100/" alt="random-pic" class="img-circle"></div>
					<div class="col-md-3"><img src="http://lorempixel.com/100/100/" alt="random-pic" class="img-circle"></div>
				</div>

					<div class="row">
							<div class="col-md-3 cd-sm-1">
								<p class="box">Spicy jalapeno bacon ipsum dolor amet ham eiusmod enim shoulder et. Salami picanha alcatra ex lorem shankle ipsum shoulder. Labore ut chicken, ham alcatra pork loin aute laborum quis ham hock proident esse. Bresaola chuck id ribeye. Reprehenderit laborum tempor do.</p>
							</div>
							<div class="col-md-3">
								<p>Spicy jalapeno bacon ipsum dolor amet ham eiusmod enim shoulder et. Salami picanha alcatra ex lorem shankle ipsum shoulder. Labore ut chicken, ham alcatra pork loin aute laborum quis ham hock proident esse. Bresaola chuck id ribeye. Reprehenderit laborum tempor do.</p>
							</div>
							<div class="col-md-3">
								<p>Spicy jalapeno bacon ipsum dolor amet ham eiusmod enim shoulder et. Salami picanha alcatra ex lorem shankle ipsum shoulder. Labore ut chicken, ham alcatra pork loin aute laborum quis ham hock proident esse. Bresaola chuck id ribeye. Reprehenderit laborum tempor do.</p>
							</div>
							<div class="col-md-3">
								<p>Spicy jalapeno bacon ipsum dolor amet ham eiusmod enim shoulder et. Salami picanha alcatra ex lorem shankle ipsum shoulder. Labore ut chicken, ham alcatra pork loin aute laborum quis ham hock proident esse. Bresaola chuck id ribeye. Reprehenderit laborum tempor do.</p>
							</div>
					</div>

		</main>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="text-center">COPYRIGHT TEXT</p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>