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
<?php if ($hasPosts): ?>
  <?php if ($numberOfPosts === 3): ?>
    There are exactly 3 posts.
  <?php else: ?>
    Posts exists.
  <?php endif ?>
<?php else: ?>
      There are no posts.
<?php endif ?>
