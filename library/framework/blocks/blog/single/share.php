<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/blog/single/
   * File name:          share.php
   * Description:        This file contains the related section of a blog post page.
   * Date:               25-08-2025
   */
?>

<?php
  global $post, $page_builder_id;
  
  $share_box_class = "mini-share-post";
  if (is_singular () && empty($page_builder_id))
    $share_box_class = "share-post";
  
  $post_link = tie_get_option ('share_shortlink') ? esc_url (wp_get_shortlink ()) : esc_url (get_permalink ());
  $post_title = wp_strip_all_tags (get_the_title ());
  $protocol = is_ssl () ? 'https' : 'http';
?>

<section>
  <div class="<?php echo $share_box_class ?>">
    <span class="share-text"><?php _eti ('Share'); ?></span>

    <form method="post" action="<?php echo get_permalink (); ?>">
      
      <?php if (tie_get_option ('share_post_type') == 'flat') :
        $post_title = htmlspecialchars (urlencode (html_entity_decode ($post_title, ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
        ?>

        <ul class="flat-social">

          <!-- Facebook button -->
          <li>
            <a href="http://www.facebook.com/sharer.php?u=<?php echo $post_link; ?>"
               class="social-facebook"
               rel="external"
               target="_blank">
              <i class="fa fa-facebook"></i>
              <span><?php _eti ('Facebook'); ?></span>
            </a>
          </li>

          <!-- Twitter button -->
          <li>
            <a href="https://twitter.com/intent/tweet?text=<?php echo $post_title; ?>
            <?php if (tie_get_option ('share_twitter_username'))
              echo ' via %40' . tie_get_option ('share_twitter_username'); ?>&url=<?php echo $post_link; ?>"
               class="social-twitter"
               rel="external"
               target="_blank">
              <i class="fa-brands fa-x-twitter"></i>
              <span><?php _eti ('Compartir'); ?></span>
            </a>
          </li>

          <!-- WhatsApp button -->
          <li>
            <a href="whatsapp://send?text=<?php echo $post_link; ?>"
               class="social-whatsapp"
               rel="external"
               target="_blank">
              <i class="fa fa-whatsapp"></i>
              <span><?php _eti ('WhatsApp'); ?></span>
            </a>
          </li>

        </ul>
      
      <?php
        else: ?>

      <script>
        window.___gcfg = {lang: 'en-US'};
        (function (w, d, s) {
          function go() {
            var js, fjs = d.getElementsByTagName(s)[0], load = function (url, id) {
              if (d.getElementById(id)) {
                return;
              }
              js = d.createElement(s);
              js.src = url;
              js.id = id;
              fjs.parentNode.insertBefore(js, fjs);
            };
            load('//connect.facebook.net/en/all.js#xfbml=1', 'fbjssdk');
            load('//platform.twitter.com/widgets.js', 'tweetjs');
          }

          if (w.addEventListener) {
            w.addEventListener("load", go, false);
          } else if (w.attachEvent) {
            w.attachEvent("onload", go);
          }
        }(window, document, 'script'));
      </script>

    </form>
    
    <?php endif; ?>

  </div>
</section>

