<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align:center;
		}
	</style>
</head>
<body>
	<ul>
		<?php foreach($person as $feature => $value) :?>
		<li><b><?= $feature; ?></b>: <?= $value; ?></li>
		<?php endforeach; ?>
	</ul>
	<ul>
		<?php foreach($task as $info => $value) :?>
		<li><b><?= $info; ?></b>: <?= $value; ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>