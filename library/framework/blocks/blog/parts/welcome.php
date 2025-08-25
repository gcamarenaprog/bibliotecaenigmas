<?php
  /*
  Template Name: 	Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Blog | Category
  File name: 			welcome.php
  Date: 					18-05-2024
  Description: 		This file show welcome box.
  Note:           Refactored
  */
?>

<!-- Title /-->
<section>
  <div class="tb-head">
    <h4>
      Bienvenido a <b><?php echo single_cat_title ('', false) ?></b>
    </h4>
  </div>
</section>

<!-- Welcome and advise /-->
<section>
  <div class="tb-box">
    <div class="tb-content pt-1">

      <!-- Welcome /-->
      <section>
        <?php echo category_description (); ?>
      </section>

      <!-- Advise /-->
      <section>
        <div class="tb-advice">
          Los artículos son de índole investigativo, histórico, documentativo e informativo. No se publican,
          fakes, noticias amarillistas, documentos sin sustento, etc.
        </div>
      </section>

    </div>
  </div>
</section>

<div class="clear"></div>