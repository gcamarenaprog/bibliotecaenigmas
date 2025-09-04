<?php
  /**
   *  Template Name:      Biblioteca Enigmas
   *  Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   *  Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   *  Author:             Guillermo Camarena
   *  Author URL:         http://gcamarenaprog.com
   *  File name:          information.php
   *  Description:        This file displays the name and description of the category on the grid blog.
   *  Date:               25-08-2025
   */
?>

<section>
  <div class="tb-head">
    <h1>= <?php echo single_cat_title ('', false) ?> =</h1>
  </div>
</section>

<section>
  <div class="tb-box">

    <div class="pb10">
      <?php echo category_description (); ?>
    </div>

    <div class="tb-advice">
      <p>Los artículos son de índole investigativo, histórico, documentativo e informativo. No se publican, fakes,
        noticias amarillistas, documentos sin sustento, etc.
      </p>
    </div>

  </div>
</section>