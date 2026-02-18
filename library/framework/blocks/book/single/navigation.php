<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/book/single/
   * File name:          navigation.php
   * Description:        This file shows the navigation section of the single book page.
   * Date:               17-02-2026
   */
?>

<?php
  $previousPost = get_previous_post ();
  $nextPost = get_next_post ();
?>

<!--/Content-->
<section>
  <div class="post-navigation">
    
    <?php
      // Previous
      if (! empty( $previousPost )) {
        $fullTitlePreivousPost = $previousPost->post_title; ?>
        <div class="post-previous">
          <a href="<?php echo get_permalink ($previousPost); ?>">
            <?php echo '<span>' . __ti ('Previous') . '</span>'; ?>
            
            <?php
              $fullTitleBook = $previousPost->post_title;;
              $titleBook = getTitle ($fullTitleBook);
              $subtitleBook = getSubtitle ($fullTitleBook);
            ?>

            <!--/Title-->
            <?php echo getTitle ($fullTitleBook); ?>
            <span class='tb-navigation-paragraph-end'></span>

            <!--/Subtitle-->
            <?php if ($subtitleBook): ?>
              <?php echo getSubtitle ($fullTitleBook); ?>
              <span class='tb-navigation-paragraph-end'></span>
            <?php endif; ?>

          </a>
        </div><!--/.post-previous-->
        <?php
      } else {
      }
      
      // Next
      if (! empty( $nextPost )) {
        $fullTitleNextPost = $nextPost->post_title; ?>
        <div class="post-next">
          <a href="<?php echo get_permalink ($nextPost); ?>">
            <?php echo '<span>' . __ti ('Next') . '</span>'; ?>
            
            <?php
              $fullTitleBook = $nextPost->post_title;;
              $titleBook = getTitle ($fullTitleBook);
              $subtitleBook = getSubtitle ($fullTitleBook);
            ?>

            <!--/Title-->
            <?php echo getTitle ($fullTitleBook); ?>
            <span class='tb-navigation-paragraph-end'></span>

            <!--/Subtitle-->
            <?php if ($subtitleBook): ?>
              <?php echo getSubtitle ($fullTitleBook); ?>
              <span class='tb-navigation-paragraph-end'></span>
            <?php endif; ?>

          </a>
        </div><!--/.post-next-->
        <?php
      } else {
      }
    ?>

  </div><!--/.post-navigation-->
</section>