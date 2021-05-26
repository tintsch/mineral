<!DOCTYPE html>

<title>Mineral</title>
<link rel="stylesheet" href="/app.css">
<body>
<?php foreach($minerals as $key => $value): ?>
 <?= $value->name ?>
<? endforeach; ?>
</body>
