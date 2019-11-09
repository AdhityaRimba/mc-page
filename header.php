<?php 
require 'config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $srvn ?></title>
</head>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<nav class="navbar navbar-dark bg-dark shadow">
	<a class="navbar-brand" href="#">Admin</a>

	<ul class="nav mr-auto text-white">
		<li class="nav-item">
			<a class="nav-link text-white" href="index.php">Home</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="member.php">Member</a>
			</div>
		</li>
	</ul>
</nav>
