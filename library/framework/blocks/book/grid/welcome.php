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
   * Date:               25-08-2025
   */
?>

<?php
$imageUrl = get_template_directory_uri() . '/library/images/genres/biblioteca.jpg';
?>

<section>
  <div class="tb-head">
    <h1>= BIBLIOTECA =</h1>
  </div>
</section>

<section>
  <div class="tb-box">

    <!-- Image /-->
    <section>
      <div class="tb-tax-image">
        <img width="624" height="422" style="box-shadow: 0 2px 4px rgb(0 0 0 / 60%);" src="<?php echo $imageUrl; ?>">
      </div>
    </section>

    <p class="mt10">
      En esta sección se publican referencias bibliográficas, se divide en géneros literarios
      ordenados de forma alfabética, además tiene otras subsecciones: colecciones, mapas,
      búsquedas y enlaces a otras secciones del sitio desde el menú.
    </p>

    <p>
      Todas las publicaciones están acompañadas de portada, datos, sinópsis
      y sumario. Muchos de los libros publicados son de dificil acceso ya que son libros antiguos,
      descatalogados, desaparecidos, censurados o prohibídos.
    </p>

    <div class="tb-advice">
      <p>Las referencias bibliográficas son de índole investigativo, histórico, documentativo e informativo,
        de ser otro tipo se señalará explícitamente.</p>
    </div>

  </div>
</section>