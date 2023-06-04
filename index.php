<?php 
$title = 'My Blog';
$numberOfPosts = 10;
$numberOfPostsText = "\"$numberOfPosts\" posts";
$hasPosts = $numberOfPosts > 0;
define('MIN_NUM_POSTS', 0);
const MAX_NUM_POSTS = 100;
switch ($numberOfPosts) {
  case 0: 
    $message = 'There are no posts.';
    break;
  case 1:
  case 2:
  case 3:
    $message = 'There are a few posts.';
    break;
  default: 
    $message = 'There are many posts.';
}
?>

<h1><?= $title ?></h1>
<h2><?= $numberOfPostsText ?></h2>
<p><?= $message ?></p>
