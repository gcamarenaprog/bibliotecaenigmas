<?php
/*
      Template Name: 	Biblioteca Enigmas - Home Books Page
      Author: 				Guillermo Camarena
      Section: 				Books | Framework | Blocks | Blog | Grid
      File name: 			information.php
      Date: 					31-05-2025
      Description: 		This file show welcome box.
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
      <?php echo category_description(); ?>
    </div>

    <div class="tb-advice">
      <p>Los artículos son de índole investigativo, histórico, documentativo e informativo. No se publican, fakes, noticias amarillistas, documentos sin sustento, etc.</p>
    </div>

  </div>
</section>