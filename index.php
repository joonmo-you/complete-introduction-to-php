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
<?php
if ($numberOfPosts === 3) {
  echo "There are exactly 3 posts.";
} elseif ($hasPosts) {
  echo "Post exists.";
} else {
  echo "There are no posts.";
}
?>
