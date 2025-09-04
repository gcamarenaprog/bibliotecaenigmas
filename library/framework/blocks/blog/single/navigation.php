<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/blog/single/
   * File name:          navigation.php
   * Description:        This file contains the navigation section of a blog post page.
   * Date:               25-08-2025
   */
?>

<?php
  $previousPost = get_previous_post ();
  $nextPost = get_next_post ();
?>

<section>
  <div class="post-navigation">
    
    <?php
      // Previous
      if ($previousPost != false) {
        $fullTitlePreivousPost = $previousPost->post_title; ?>
        <div class="post-previous tbs-prev-and-next">
          <a href="<?php echo get_permalink ($previousPost); ?>">
            <?php echo '<span class="tbs-prev-and-next-title">' . __ti ('Previous') . '</span>'; ?>
            <?php the_title (); ?>
          </a>
          <br>
        </div>
        <?php
      } else {
      }
      
      // Next
      if ($nextPost != false) {
        $fullTitleNextPost = $nextPost->post_title; ?>
        <div class="post-next tbs-prev-and-next">
          <a href="<?php echo get_permalink ($nextPost); ?>">
            <?php echo '<span class="tbs-prev-and-next-title">' . __ti ('Next') . '</span>'; ?>
            <?php the_title (); ?>
          </a>
          <br>
        </div>
        <?php
      } else {
      }
    ?>

  </div>
</section>