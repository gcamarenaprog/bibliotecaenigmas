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
   * Date:               03-02-2026
   */
?>

<?php
  $classCodeTieCheck = 'tie_check';
  $postId = $post->ID;
  $category = get_the_terms($postId, 'genre');
  $parentCategoryId = $category[0]->parent;
  if($parentCategoryId == 1523){
    $classCodeTie = 'tie_play';
  }else{
    $classCodeTie = 'tie_book';
  }
?>

<section>
  <?php
    if (function_exists ("has_post_thumbnail") && has_post_thumbnail ()) : ?>
      <?php
      $be_theme_check = get_post_meta ($post->ID, 'be_theme_check', true); ?>
      <div class="post-thumbnail tb-book-thumbnail
      <?php
        if ($be_theme_check == 'yes') {
          echo $classCodeTie;
        } else {
          echo $classCodeTieCheck;
        }
      ?> tie-appear">
        <a href="<?php echo tie_thumb_src ('tie_library'); ?>"
           class="fancybox image"
           aria-controls="fancybox-wrap"
           aria-haspopup="dialog">
          <img src="<?php echo tie_thumb_src ('tie_library'); ?>"
               title="<?php the_title (); ?>"
               class="tie-appear">
          <li class="fa overlay-icon"></li>
        </a>
      </div>
    <?php endif; ?>
</section>