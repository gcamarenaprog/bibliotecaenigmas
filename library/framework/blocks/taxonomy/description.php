<?php
/*
  Template Name: 	Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Book | Taxonomy
  File name: 			description.php
  Date: 					01-06-2025
  Description: 		This file show description and details of the genres.
  Notes:          Refactored code.
  */
?>

<?php

// Get genre image
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$filename = $term->slug . '.jpg';
$imageUrl = get_template_directory_uri() . '/library/images/genres/' . $filename;
?>


<?php
if ($term->slug == 'books') {
  $title = 'Biblioteca';
} else {
  $title = $term->slug;
}


?>

<!-- Title /-->
<section>
  <div class="tb-head">
    <h1>= <?php echo $title; ?> =</h1>
  </div>
</section>

<!-- Welcome and advise /-->
<section>
  <div class="tb-box">

    <!-- Image /-->
    <section>
      <div class="tb-tax-image">
        <img width="624" height="422" style="box-shadow: 0 2px 4px rgb(0 0 0 / 60%);" src="<?php echo $imageUrl; ?>">
      </div>
    </section>

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

  </div>
</section>

<div class="clear"></div>