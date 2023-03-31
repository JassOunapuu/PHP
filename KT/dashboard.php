<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h1>Oled nüüd dashboardil!</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<p>sisse logitud!</p>
	


<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Dashboard</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="dashboard.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="KT.php">KT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Welcome</h1>
			<p class="lead">Paste an image link below to update the background image.</p>
			<form action="save_image.php" method="post">
				<div class="form-group">
					<textarea class="form-control" id="image-link" name="image-link" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>

	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	
    </html>