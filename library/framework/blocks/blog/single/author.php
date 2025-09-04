<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/blog/single/
   * File name:          author.php
   * Description:        This file contains the author section of a blog post page.
   * Date:               25-08-2025
   */
?>

<section>
  <div id="author-box">

    <!-- Title /-->
    <section>
      <div class="tb-head">
        <h1>= <?php _eti ('About') ?><?php the_author () ?> =</h1>
      </div>
    </section>

    <!-- Content /-->
    <section>
      <div class="post-listing">
        
        <?php function tie_author_box_ ($avatar = true, $social = true, $name = false, $user_id = false)
        {
          if ($avatar) :
            ?>
            <div style="margin-top: 30px;" class="">

            <!-- Gavatar -->
            <section>
              <div class="author-avatar">
                <?php echo get_avatar (get_the_author_meta ('user_email', $user_id), 90); ?>
              </div>
            </section>
          
          <?php endif; ?>

          <!-- Description -->
          <section>
            <div class="author-description">
              <?php if (!empty($name)) : ?>
                <h3><a href="<?php echo get_author_posts_url ($user_id); ?>"><?php echo $name ?> </a></h3>
              <?php endif; ?>
              <?php the_author_meta ('description', $user_id); ?>
            </div>
          </section>

          <div class="clear"></div>
          </div>
          
          <?php
        } ?>
        <?php tie_author_box_ (); ?>

      </div>
    </section>

  </div>
</section>