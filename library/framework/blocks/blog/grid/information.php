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

$categoryId = get_query_var('cat');

?>

<section>
  <div class="tb-head">
    <h1>= <?php echo single_cat_title('', false) ?> =</h1>
  </div>
</section>

<section>
  <div class="tb-box">

    <?php if ($categoryId === 1300): ?>

      <section>
        <div class="tb-tax-image">
          <img width="624" height="422" style="box-shadow: 0 2px 4px rgb(0 0 0 / 60%);" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/categories/blog-forteano.jpg" class="tie-appear">
        </div>
      </section>

    <?php elseif ($categoryId === 1491): ?>

      <section>
        <div class="tb-tax-image">
          <img width="624" height="422" style="box-shadow: 0 2px 4px rgb(0 0 0 / 60%);" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/categories/blog-autor.jpg" class="tie-appear">
        </div>
      </section>

    <?php elseif ($categoryId === 1881): ?>

      <section>
        <div class="tb-tax-image">
          <img width="624" height="422" style="box-shadow: 0 2px 4px rgb(0 0 0 / 60%);" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/categories/cuentos-del-autor.jpg" class="tie-appear">
        </div>
      </section>

    <?php endif; ?>

    <hr>

    <div class="entry mt10">
      <?php echo category_description(); ?>
    </div>
    
    <div class="tb-advice">
      <p>Los artículos publicados son opiniones, reflexiones y pensamientos de índole personal por parte del autor.
      </p>
    </div>

  </div>
</section>