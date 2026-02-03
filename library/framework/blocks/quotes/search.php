<?php

/**
 * Template Name:      Biblioteca Enigmas
 * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
 * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
 * Author:             Guillermo Camarena
 * Author URL:         http://gcamarenaprog.com
 * Path:               /library/framework/blocks/taxonomy/
 * File name:          search.php
 * Description:        This file shows a search quotes page.
 * Date:               02-12-2025
 */
?>

<?php
echo do_shortcode('[wp-datatable id="table" fat="LEVEL"]
  paging: true,
  responsive: true,
  search: true,
  lengthMenu: [ [3, 5, 10, 25, 50, 100, -1], [3, 5, 10, 25, 50, 100, "Todos"] ],
  layout: {
    "top": {
      "buttons": ["colvis"]
    },
    "topStart":   "pageLength",
    "topEnd":     "search"
  },
  columnDefs: [
    { "orderable": false, "targets": [] },
    { "targets": [], visible: false },
  ],
  language: {
    "search":     "Buscar",
    "lengthMenu": "Mostrar _MENU_ libros",
    "info":       "Mostrando _START_ a _END_ de _TOTAL_ libros",
    "infoEmpty":  "Mostrando 0 a 0 de 0 frases",
    "paginate": {
      "first":    "Primera",
      "last":     "Última",
      "next":       "»",
      "previous":   "«"
    },
    "buttons": {
      "colvis":   "Ver columnas"
    },
  },
  [/wp-datatable]');
?>

<?php

// Get all quotes
global $wpdb;
$query = "SELECT * FROM {$wpdb->prefix}befrases";
$listQuotes = $wpdb->get_results($query, ARRAY_A);
if (empty($listQuotes)) {
  return array();
}
?>

<!--/Information-->
<section>
  <div class="entry mt10">
    <p>Esta herramienta permite la búsqueda de alguna frase en especial. Puede buscar términos en: el <strong>autor,
        texto de la frase, información extra y categoría.</strong></p>
    <p>La búsqueda distingue entre <strong>“mayúsculas y minúsculas”</strong>, es decir, toma en cuenta los acentos,
      mayúsculas, etc., además, puede ordenar las columnas de manera <strong>ascendente</strong> y
      <strong>descendente</strong>.
    </p>
    <p><strong>Nota:</strong> algunas columnas pueden estar ocultas, para mostrarlas haga clic en el botón <strong>“Ver
        columnas”.</strong></p>
  </div>
</section>

<hr>

<!--/Table-->
<section>
  <table id="table" class="display compact" style="width:100%">

    <thead>
      <tr>
        <th>#</th>
        <th>AUTOR</th>
        <th>FRASE</th>
        <th>INFORMACIÓN EXTRA</th>
        <th>CATEGORÍA</th>
      </tr>
    </thead>

    <tbody>

      <?php foreach ($listQuotes as $key => $value): ?>

        <?php
        $quoteId = $value['befrases_id'];
        $authorId = $value['befrases_author'];
        $authorExtra = $value['befrases_author_extra'];
        $quote = $value['befrases_quote'];
        $categoryId = $value['befrases_category'];
        $quoteCategory = '';
        $quoteAuthor = '';

        $nameOfCategory = $wpdb->get_results("SELECT befrases_cat_name, befrases_cat_id FROM  {$wpdb->prefix}befrases_cat	WHERE	befrases_cat_id = {$categoryId}", ARRAY_A);

        foreach ($nameOfCategory as $key => $value) {
          $quoteCategory = $value['befrases_cat_name'];
        }
        $nameOfAuthor = $wpdb->get_results("SELECT befrases_aut_name FROM  {$wpdb->prefix}befrases_aut	WHERE	befrases_aut_id = {$authorId}", ARRAY_A);
        foreach ($nameOfAuthor as $key => $value) {
          $quoteAuthor = $value['befrases_aut_name'];
        }

        if ($authorExtra == '') {
          $authorExtra = 'Sin información';
        }

        $quote = stripslashes($quote);
        $author = stripslashes($author);
        $authorExtra = stripslashes($authorExtra);
        ?>

        <tr>

          <!--/#-->
          <td><?php echo $quoteId; ?></td>

          <!--/Writer-->
          <td> <?php echo $quoteAuthor; ?></a></td>

          <!--/Quote-->
          <td> <?php echo $quote; ?></a></td>

          <!--/Extra information-->
          <td><?php echo $authorExtra; ?></td>

          <!--/Category-->
          <td><?php echo $quoteCategory; ?></td>

        </tr>

      <?php endforeach; ?>
    </tbody>

    <tfoot>
      <tr>
        <th>#</th>
        <th>AUTOR</th>
        <th>FRASE</th>
        <th>INFORMACIÓN EXTRA</th>
        <th>CATEGORÍA</th>
      </tr>
    </tfoot>

  </table>
</section>

<div class="clear"></div>
<?php wp_reset_query(); ?>