<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/home/
   * File name:          breaking-news.php
   * Description:        This file shows the breaking news section in home page.
   * Date:               25-08-2025
   */
?>

<?php
$content = apply_filters('the_content', get_post_field('post_content', 21561));
?>

<section>
  <div class="tb-head">
    <h1>= AVISOS Y ACTUALIZACIONES =</h1>
  </div>
</section>

<section>
  <div class="tb-box">

    <section>
      <?php
      echo ($content);
      ?>
    </section>

  </div>
</section>