<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Laravel</title>
</head>
<body>
<article>
<?php foreach ($posts as $post): ?>
<?= $post ?>
<?php endforeach ?>
</article>
</body>
</html>
