<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main home page</title>
</head>
<body>
	<?php foreach ($records as $row): ?>
		<h1><?php echo $row->title; ?></h1>
	<?php endforeach; ?>
</body>
</html>