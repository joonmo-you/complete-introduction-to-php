<?php 
$title = (int) 'My Blog';
$numberOfPosts = (string) 10;
?>

<h1><?= $title ?></h1>
<h2><?= $numberOfPosts ?></h2>

<p><?= gettype($title) ?></p>
<p><?= gettype($numberOfPosts) ?></p>
