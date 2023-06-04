<?php 
$title = 'My Blog';
$numberOfPosts = 10;
$numberOfPostsText = "\"$numberOfPosts\" posts";
$hasPosts = $numberOfPosts > 0;
define('MIN_NUM_POSTS', 0);
const MAX_NUM_POSTS = 100;
$message = match ($numberOfPosts) {
  0 => 'There are no posts.',
  1, 2, 3 =>  'There are a few posts.',
  default => 'There are many posts.'
}
?>
<h1><?= $title ?></h1>
<h2><?= $numberOfPostsText ?></h2>
<p><?= $message ?></p>
