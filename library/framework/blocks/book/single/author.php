<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/book/single/
   * File name:          author.php
   * Description:        This file shows the author section of the single book page.
   * Date:               24-11-2025
   */
?>

<!--Title-->
<section>
  <div class="tb-head">
    <h1>= Acerca del autor =</h1>
  </div>
</section><!--/Title-->

<!--Content-->
<section>
  <div class="tb-box">

    <!--Presentation-->
    <section>
      <?php function tie_author_box_ ($avatar = true, $social = true, $name = false, $user_id = false)
      {
        if ($avatar) : ?>

          <!--Gavatar-->
          <section>
            <div class="author-avatar">
              <?php echo get_avatar (get_the_author_meta ('user_email', $user_id), 90); ?>
            </div>
          </section><!--/Gavatar-->
        
        <?php endif; ?>

        <!--Description-->
        <section>
          <div class="author-description">
            <?php if (!empty($name)) : ?>
              <h3><a href="<?php echo get_author_posts_url ($user_id); ?>"><?php echo $name ?> </a></h3>
            <?php endif; ?>
            <?php the_author_meta ('description', $user_id); ?>
          </div>
        </section><!--/Description-->

        <div class="clear"></div>
        
        <?php
      }
      
      ?>
      <?php tie_author_box_ (); ?>
    </section><!--/Presentation-->

  </div><!--/.tb-box-->
</section><!--/Content-->
