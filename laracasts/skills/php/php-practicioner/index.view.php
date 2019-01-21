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
	<h1>Task for the day</h1>	
	<ul>
		<?php foreach($task as $heading => $value) :?>
			<?php if($heading!='completed') : ?>
			<li>
				<b><?= ucwords($heading); ?></b>: <?= $value; ?>
			</li>
		<?php else : ?>
			<li>
				<b><?= ucwords($heading); ?></b>: <?= $value ? '&#9989' : 'Incomplete'; ?>
			</li>
		<?php endif ?>
		<?php endforeach; ?>
	</ul>
</body>
</html>