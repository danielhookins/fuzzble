<?php
namespace Fuzzble;

use Fuzzble\Fuzzble;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../');

$dotenv->load();

require __DIR__ . '/../config/database.php';

$fuzzble = Fuzzble::first()->toArray();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Fuzzble</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
	<link href="/assets/css/styles.css" rel="stylesheet">
</head>
<body>
	<div class="container"> 
		<div class="header">
			<h2><?php echo $fuzzble['name'] ?></h2>
		</div>
		<div class="nav">
			<!-- <ul>
				<li><a href="#">Give Food</a></li>
				<li><a href="#">Give Drink</a></li>
			</ul> -->
		</div>
		<div class="fuzzble-environment">
			<div class='fuzzble'><p>: )</p></div>
			<div class="attention-box"></div>
		</div>
	</div>
	<script src="/assets/js/jquery-1.12.4.js"></script>
	<script src="/assets/js/fuzzble.js"></script>
</body>
</html>