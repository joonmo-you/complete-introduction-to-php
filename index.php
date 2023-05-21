<?php 
$title = 'My Blog';
$numberOfPosts = 10;
$numberOfPostsText = "\"$numberOfPosts\" posts";
$hasPosts = $numberOfPosts > 0;
define('MIN_NUM_POSTS', 0);
const MAX_NUM_POSTS = 100;
?>

<h1><?= $title ?></h1>
<h2><?= $numberOfPostsText ?></h2>
<h3>Minimum: <?= MIN_NUM_POSTS ?></h3>
<h3>Maximum: <?= MAX_NUM_POSTS ?></h3>
<?php var_dump($hasPosts) ?>
