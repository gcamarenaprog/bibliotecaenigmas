<?php
  
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/book/grid/
   * File name:          welcome.php
   * Description:        This file displays welcome section on the grid books.
   * Date:               02-12-2025
   */
?>

<?php
  $imageUrl = get_template_directory_uri () . '/library/images/genres/libros.jpg';
?>

<section>
  <div class="tb-head">
    <h1>= LIBROS =</h1>
  </div>
</section>

<section>
  <div class="tb-box">

    <!-- Image /-->
    <section>
      <div class="tb-tax-image">
        <img width="624"
             height="422"
             src="<?php echo $imageUrl; ?>"
             class="tie-appear">
      </div>
    </section>

    <div class="entry mt10">
      <hr>
      <p>
        En esta sección se publican <b>referencias bibliográficas</b> de la temática forteana, se divide en géneros
        literarios ordenados de forma alfabética, además tiene otras subsecciones: colecciones, mapas, búsquedas y
        enlaces a otras secciones del sitio desde el menú.
      </p>
      <p>
        Todas las publicaciones están acompañadas de <b>portada, datos, sinópsis y sumario.</b> Muchos de los libros
        publicados son de dificil acceso ya que son libros antiguos, descatalogados, desaparecidos, censurados o
        prohibídos.
      </p>
    </div>
    
    <!--/Advice-->
    <div class="tb-advice">
      <p>Las referencias bibliográficas son de índole investigativo, histórico, documentativo e informativo,
        de ser otro tipo se señalará explícitamente.</p>
    </div>

  </div>
</section>