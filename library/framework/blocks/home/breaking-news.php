<?php
/*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Book | Home
  File name: 			breaking-news.php
  Date: 					19-06-2025
  Description: 		This file contains the breaking news of the home page.
  Note:           Refactored
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