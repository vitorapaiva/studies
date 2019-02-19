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
		<?php foreach($tasks as $task) :?>
			<li>
				<b><?= ucwords($task->description); ?></b>: <?= $task->isComplete() ? '&#9989' : 'Incomplete'; ?>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>