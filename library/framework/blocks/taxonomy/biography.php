<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/taxonomy/
   * File name:          biography.php
   * Description:        This file shows description and details of the writers.
   * Date:               25-08-2025
   */

// Get genre image
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$filename = $term->slug . '.jpg';
$imageUrl = get_template_directory_uri() . '/library/images/writers/' . $filename;

// Use get_headers() function 
$headers = @get_headers($imageUrl);

// Use condition to check the existence of URL 
if ($headers && strpos($headers[0], '200')) {
} else {
  $imageUrl = get_template_directory_uri() . '/library/images/writers/no-image.jpg';
}
?>

<!-- Title /-->
<section>
  <div class="tb-head">
    <h1>= <?php echo single_cat_title('', false) ?> =</h1>
  </div>
</section>

<!-- Welcome and advise /-->
<section>
  <div class="tb-box">

    <!-- Image /-->
    <section>
      <div class="tb-tax-image-writer">
        <img width="200" height="200" src="<?php echo $imageUrl; ?>">
      </div>
    </section>

    <br>
    <hr>

    <!-- Description /-->
    <section>
      <div class="entry">
        <?php echo category_description(); ?>
      </div>
    </section>

    <!-- Others descriptions /-->
    <?php

    if ($term->slug == 'biblioteca-basica-espacio-y-tiempo') {
      require_once(get_template_directory() . '/library/framework/blocks/book/descriptions/biblioteca-basica-espacio-y-tiempo.php');
    }
    if ($term->slug == 'investigacion-abierta') {
      require_once(get_template_directory() . '/library/framework/blocks/book/descriptions/investigacion-abierta.php');
    }
    ?>

    <!-- Advise /-->
    <div class="tb-advice">
      Las referencias bibliográficas son de índole investigativo, histórico, documentativo e informativo,
      de ser otro tipo se señalará explícitamente.
    </div>


  </div>
</section>

<div class="clear"></div>