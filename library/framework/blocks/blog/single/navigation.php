<?php
  /*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Blog | Single
  File name: 			navigation.php
  Date: 					02-05-2024
  Description: 		This file contains the navigation next and previous post box.
  Note:           Refactored
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