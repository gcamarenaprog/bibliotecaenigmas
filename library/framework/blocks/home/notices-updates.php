<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/home/
   * File name:          notices-updates.php
   * Description:        This file shows the notices and updates section in home page.
   * Date:               03-02-2026
   */
?>

<?php
  $content = apply_filters ('the_content', get_post_field ('post_content', 21561));
?>

<!--/Title-->
<section>
  <div class="tb-head">
    <h1>= NOTICIAS, AVISOS Y ACTUALIZACIONES =</h1>
  </div>
</section>

<!--/Content-->
<section>
  <div class="tb-box">
    <section>
      <?php echo ($content); ?>
    </section>
  </div>
</section>