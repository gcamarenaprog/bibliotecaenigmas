<?php
/*
  Template Name: 	Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Book | Single
  File name: 			share.php
  Date: 					03-06-2025
  Description: 		This file contains the share buttons.
  Note:           Refactored
  */
?>

<?php
global $post, $page_builder_id;

$share_box_class = "mini-share-post";
if (is_singular() && empty($page_builder_id))
  $share_box_class = "share-post";

$post_link = tie_get_option('share_shortlink') ? esc_url(wp_get_shortlink()) : esc_url(get_permalink());
$post_title = wp_strip_all_tags(get_the_title());
$protocol = is_ssl() ? 'https' : 'http';

$currentPostId = $post->ID;
$writer = get_the_term_list($post->ID, 'writer', '', ', ', '');
?>

<section>
  <div class="<?php echo $share_box_class ?>">
    <span class="share-text"><?php _eti('Share'); ?></span>

    <form method="post" action="<?php echo get_permalink(); ?>">

      <?php $post_title = htmlspecialchars(urlencode(html_entity_decode($post_title, ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>

      <ul class="flat-social">

        <!-- Facebook button /-->
        <li>
          <a href="http://www.facebook.com/sharer.php?u=<?php echo $post_link; ?>"
            class="social-facebook"
            rel="external"
            target="_blank">
            <i class="fa fa-facebook"></i> <span><?php _eti('Facebook'); ?></span></a>
        </li>

        <!-- WhatsApp button /-->
        <li>
          <a href="whatsapp://send?text=<?php echo $post_link; ?>" class="social-whatsapp" rel="external"
            target="_blank"><i class="fa fa-whatsapp"></i> <span><?php _eti('WhatsApp'); ?></span></a>
        </li>

        <!-- X button /-->
        <li>
          <a href="https://twitter.com/intent/tweet?text=<?php echo $post_title; ?><?php if (tie_get_option('share_twitter_username'))
                                                                                      echo ' via %40' . tie_get_option('share_twitter_username'); ?>&url=<?php echo $post_link; ?>"
            class="social-twitter" rel="external" target="_blank">
            <i class="fa-brands fa-x-twitter"></i><span><?php _eti('Compartir'); ?></span></a>
        </li>

        <!-- Get button /-->
        <?php if (str_contains($writer, 'Carlos Alberto Guzmán Rojas')): ?>

          <!-- Carlos Albert- --Guzmán Rojas Writer /-->
          <li>
            <a href="https://www.facebook.com/carlos.guzmanrojas.3"
              class="social-shopping-cart"
              rel="external"
              target="_blank">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i><span><?php _eti('Obtener'); ?></span></a>
          </li>

        <?php else: ?>

          <!-- Get book button /-->
          <li>
            <a href="https://bibliotecaenigmas.com/obtener-material-digital/"
              class="social-shopping-cart"
              rel="external"
              target="_blank">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i><span><?php _eti('Obtener'); ?></span></a>
          </li>

        <?php endif; ?>

      </ul>
    </form>

    <div class="clear"></div>
  </div>
</section>