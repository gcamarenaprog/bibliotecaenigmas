<?php
  /**
   *  Template Name:      Biblioteca Enigmas
   *  Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   *  Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   *  Author:             Guillermo Camarena
   *  Author URL:         http://gcamarenaprog.com
   *  File name:          404.php
   *  Description:        This file shows 404 error web page
   *  Date:               25-08-2025
   */
?>

<?php get_header (); ?>
<?php global $is_IE; ?>

  <div class="content">
    <div class="post error404">
      <div class="post-inner">

        <!-- Image /-->
        <div class="image-404">
          <img src="<?php echo get_template_directory_uri () . '/library/images/images/404.png'; ?>" alt="">
        </div>

        <!-- 404 :( /-->
        <div class="title-404">
          <?php _eti ('404 :('); ?>
        </div>

        <!-- Not found text /-->
        <div class="not-found-404">
          <p><?php _eti ('Not Found'); ?></p>
        </div>

        <!-- Message text /-->
        <p class="text-center mt10 ">
          <?php _eti ('Apologies, but the page you requested could not be found. Perhaps searching will help.'); ?>
        </p>

        <!-- Go to home /-->
        <p class="text-center mt10 ">
          <a style="text-decoration: none;" title='Ir al inicio' href="https://bibliotecaenigmas.com/">Ir al inicio</a>
        </p>

        <!-- Search / Start -->
        <div class="search-block-large">
          <form method="get" action="<?php echo home_url (); ?>/">
            <button class="search-button" type="submit" value="<?php if (!$is_IE)
              _eti ('Search', 'tie') ?>"><i class="fa fa-search"></i></button>
            <input type="text" id="s" name="s" value="<?php _eti ('Search') ?>"
                   onfocus="if (this.value == '<?php _eti ('Search') ?>') {this.value = '';}"
                   onblur="if (this.value == '') {this.value = '<?php _eti ('Search') ?>';}"/>
          </form>
        </div>
        <!-- Search / End -->

      </div>
    </div>
  </div>

<?php get_footer (); ?>