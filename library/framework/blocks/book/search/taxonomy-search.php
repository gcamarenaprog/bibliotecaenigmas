<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/book/search/
   * File name:          taxonomy-search.php
   * Description:        This file shows taxonomy search page.
   * Date:               25-08-2025
   */
?>

<?php
  
  echo do_shortcode ('[wp-datatable id="table" fat="LEVEL"]
  paging: true,
  responsive: true,
  search: true,
  lengthMenu: [ [5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Todos"] ],
  columnDefs: [{ "orderable": true, "targets": [0, 1] }],
  language: {
    "search": "Buscar",
    "lengthMenu": "Mostrar _MENU_ libros",
    "info":           "Mostrando _START_ a _END_ de _TOTAL_ libros",
    "infoEmpty":      "Mostrando 0 a 0 de 0 libros",
    "paginate": {
      "first":      "Primera",
      "last":       "Última",
      "next":       "»",
      "previous":   "«"
    },
  },
  [/wp-datatable]');
  
  $taxonomy = get_query_var ('taxonomyName');
  $taxonomyTerms = get_terms ($taxonomy);
  if ($taxonomy == 'genre') {
    $taxonomyName = 'GÉNERO';
  }
  if ($taxonomy == 'writer') {
    $taxonomyName = 'AUTOR';
  }
  if ($taxonomy == 'editorial') {
    $taxonomyName = 'EDITORIAL';
  }
  $index = 0;
?>

<section>
  <table id="table" class="display compact" style="width:100%">

    <thead>
    <tr>
      <th>#</th>
      <th> <?php echo $taxonomyName; ?> </th>
      <th>PUBLICACIONES</th>
    </tr>
    </thead>

    <tbody>
    <?php
      foreach ($taxonomyTerms as $taxTerm) {
        $index++;
        ?>
        <tr>
          <td><?php echo $index ?></td>
          <td>
            <?php echo '<a href="' . esc_attr (get_term_link ($taxTerm, $taxonomy)) . '" title="' . sprintf (__ ("Ver todos las entradas de %s"), $taxTerm->name) . '" ' . '>' . $taxTerm->name . '</a>'; ?>
          </td>
          <td><?php $taxonomy = $taxTerm->taxonomy;
              getTotalsPosts ($taxTerm, $taxonomy); ?></td>
          </td>
        </tr>
      <?php } ?>
    </tbody>

    <tfoot>
    <tr>
      <th>#</th>
      <th> <?php echo $taxonomyName; ?> </th>
      <th>PUBLICACIONES</th>
    </tr>
    </tfoot>

  </table>
</section>
