<?php
/**
 * Template Name:      Biblioteca Enigmas
 * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
 * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
 * Author:             Guillermo Camarena
 * Author URL:         http://gcamarenaprog.com
 * Path:               /library/framework/blocks/book/single/
 * File name:          thumbnail.php
 * Description:        This file shows the thumbnail section of the single book page.
 * Date:               16-02-2026
 */
?>

<?php
$parentCategoryId = null;
$category = null;
$hasThumbnail = false;

$noBookCover = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-book-cover.jpg';
$classCodeTieCheck = 'tie_check';

$postId = $post->ID;
$category = get_the_terms($postId, 'genre');
$hasThumbnail = (has_post_thumbnail($postId));

// Select icon for Multimedia or Book section
if ($category) {
  $parentCategoryId = $category[0]->parent;
  if ($parentCategoryId == 1523) {
    $classCodeTie = 'tie_play';
  } else {
    $classCodeTie = 'tie_book';
  }
}

// Check post status
$checkStatus = get_post_meta($post->ID, 'be_theme_check', true);
if (!$checkStatus == 'yes') {
  $classCodeTie = $classCodeTieCheck;
}

// Check image status
if ($hasThumbnail) {
  $noBookCover = tie_thumb_src('tie_library');
}
?>

<section>
  <div class="post-thumbnail tb-book-thumbnail <?php echo $classCodeTie; ?> tie-appear">
    <a href="<?php echo tie_thumb_src('tie_library'); ?>"
       class="fancybox image"
       aria-controls="fancybox-wrap"
       aria-haspopup="dialog">
      <img src="<?php echo $noBookCover ?>"
           title="<?php the_title(); ?>"
           class="tie-appear">
      <li class="fa overlay-icon"></li>
    </a>
  </div>
</section>