<?php 
require 'config.php';
$mcapi = json_decode(file_get_contents("https://mcapi.us/server/status?ip=$ip"));
$status = json_decode(file_get_contents("https://api.mcsrvstat.us/2/$ip"));
$icon = $mcapi->favicon;
$player = $status->players->online;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?= 	$srvn ?></title>
	<meta charset="utf-8">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="<?= $color; ?>">
<div class="container kontener1">
	<div class="text-center">
		<img class="mx-auto lg-animation" src="<?= $icon ?>" style="width: 200px; height: 200px;">
	</div>
	<div class="container">
		<h3 class="text-center rounded font-weight-bold text-white shadow" style="height: 35px;"><?= $ip; ?> | Online <?= $player ?></h3>
	</div>
	<div class="row justify-content-center mt-5">
		<div class="col-md-8 text-center mt-5">
			<p class="text-<?= $tcolor ?>">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>
</div>

<?php 
include 'footer.php'
 ?>