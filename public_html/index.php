<?php
namespace Fuzzble;

use Fuzzble\Fuzzble;

require __DIR__ . '/../vendor/autoload.php';

$fuzzble = new Fuzzble('Fuzzble');

?>
<html>
<head>
	<title>Fuzzble</title>
	<link href="/assets/css/styles.css" rel="stylesheet">
</head>
<body>
	<div class="container"> 

		<h2><?php echo $fuzzble->name ?></h2>
		<div class="statistics"></div>

		<div class='fuzzble'><p>: )</p></div>

	</div>
	<script src="/assets/js/jquery-1.12.4.js"></script>
	<script src="/assets/js/fuzzble.js"></script>
</body>
</html>