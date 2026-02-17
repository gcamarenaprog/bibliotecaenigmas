<?php
/**
 * Template Name:      Biblioteca Enigmas
 * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
 * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
 * Author:             Guillermo Camarena
 * Author URL:         http://gcamarenaprog.com
 * Path:               /library/framework/blocks/book/single/
 * File name:          share.php
 * Description:        This file shows the share section of the single book page.
 * Date:               17-02-2026
 */
?>

<?php
global $post, $page_builder_id;

$getBookLink = '';
$isVisibleButton = true;
$writer = '';
$postId = '';

$share_box_class = "mini-share-post";
if (is_singular() && empty($page_builder_id)) $share_box_class = "share-post";
$shortPostLink = tie_get_option('share_shortlink') ? esc_url(wp_get_shortlink()) : esc_url(get_permalink());
$postTitle = wp_strip_all_tags(get_the_title());
$postId = $post->ID;
$writer = get_the_term_list($postId, 'writer', '', ', ', '');
$getBookLink = get_post_meta($postId, 'be_theme_get_book', true);

# Validate the link and see if the get button is visible
if (empty($getBookLink)) {
  $getBookLink = 'https://bibliotecaenigmas.com/obtener-material-digital/';
} else if ($getBookLink === 'No aplica') {
  $isVisibleButton = false;
}
?>

<section>
  <div class="<?php echo $share_box_class ?>">
    <span class="share-text"><?php _eti('Share'); ?></span>

    <form method="post" action="<?php echo get_permalink(); ?>">

      <?php $postTitle = htmlspecialchars(urlencode(html_entity_decode($postTitle, ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>

      <ul class="flat-social">

        <!-- Facebook button /-->
        <li>
          <a href="http://www.facebook.com/sharer.php?u=<?php echo $shortPostLink; ?>"
             class="social-facebook"
             rel="external"
             title="Compartir en Facebook."
             target="_blank">
            <i class="fa fa-facebook"></i> <span><?php _eti('Facebook'); ?></span></a>
        </li>

        <!-- WhatsApp button /-->
        <li>
          <a href="whatsapp://send?text=<?php echo $shortPostLink; ?>"
             class="social-whatsapp"
             rel="external"
             title="Compartir en WhatsApp."
             target="_blank"><i class="fa fa-whatsapp"></i> <span><?php _eti('WhatsApp'); ?></span></a>
        </li>

        <!-- X button /-->
        <li>
          <a href="https://twitter.com/intent/tweet?text=<?php echo $postTitle; ?><?php if (tie_get_option('share_twitter_username'))
            echo ' via %40' . tie_get_option('share_twitter_username'); ?>&url=<?php echo $shortPostLink; ?>"
             class="social-twitter"
             rel="external"
             title="Compartir en X."
             target="_blank">
            <i class="fa-brands fa-x-twitter"></i><span><?php _eti('Compartir'); ?></span></a>
        </li>

        <!-- Get button /-->
        <?php if ($isVisibleButton): ?>
          <li>
            <a href="<?php echo $getBookLink; ?>"
               class="social-shopping-cart"
               rel="external"
               title="Obtener contenido digital."
               target="_blank">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i><span><?php _eti('Obtener'); ?></span></a>
          </li>
        <?php endif; ?>

      </ul>
    </form>

    <div class="clear"></div>
  </div>
</section>