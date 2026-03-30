<?php
global $wpdb;
$query = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}wpdatatable_124");

echo do_shortcode('[wp-datatable id="table" fat="LEVEL"]
  pageLength: -1,
  paging: true,
  responsive: true,
  search: true,
  lengthMenu: [ [3, 5, 10, 20, 30, -1], [3, 5, 10, 20, 30, "Todos"] ],
  layout: {
    "top": {
      "buttons": ["colvis"]
    },
    "topStart":   "pageLength",
    "topEnd":     "search"
  },
  columnDefs: [
    { "orderable": false, "targets": [1] },
    { "targets": [0], visible: false },
  ],
  language: {
    "search":     "Buscar",
    "lengthMenu": "Mostrar _MENU_ libros",
    "info":       "Mostrando _START_ a _END_ de _TOTAL_ libros",
    "infoEmpty":  "Mostrando 0 a 0 de 0 libros",
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

<script type="text/javascript">
  jQuery(window).on('load', function () {
    let table = new DataTable('#table');
    table.page.len(5).draw();
  });
</script>

<!-- Content /-->
<section>
  <table id="table" class="display compact" style="width:100%">

    <thead>
    <tr>

      <th>VISTO</th>
      <th>PORTADA</th>
      <th>EP.</th>
      <th>TÍTULO</th>
      <th>DESCRIPCIÓN</th>
      <th>TAMAÑO</th>
      <th>DURACIÓN</th>
    </tr>
    </thead>

    <tbody>

    <?php foreach ($query as $fila): ?>
      <?php

      ?>

      <tr>

        <!-- VISTO /-->
        <td><?php echo $fila->visto; ?></td>

        <!-- PORTADA /-->
        <td style="width: 20px; padding: 10px;">
          <?php
          $imageString = $fila->ep;
          if ($imageString != 'No existe') {

            $fullImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/netflix-el-enigma-extraterrestre/' . $imageString . '.jpg';
            $smallImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/netflix-el-enigma-extraterrestre/small/' . $imageString . '.jpg';

          } else {
            $fullImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/no-book-cover.jpg';
            $smallImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/no-book-cover-small.jpg';
          }

          ?>

          <div class="post-thumbnail tie_play tb-book-thumbnail tie-appear" style="margin-bottom: 0; width: 95px;">
            <a href="<?php echo $fullImagePath; ?>"
               class="fancybox image"
               style="width: 95px;"
               aria-controls="fancybox-wrap"
               aria-haspopup="dialog">
              <img style="width: 95px;  border: 0 solid #dbdbdb;"
                   src="<?php echo $smallImagePath; ?>"
                   title="<?php echo $fila->titulo; ?>"
                   class="tie-appear"
                   alt="<?php echo $fila->titulo; ?>">
              <li class="fa overlay-icon"></li>
            </a>
          </div>
        </td>

        <!-- EP. /-->
        <td><?php echo $fila->ep; ?></td>

        <!-- TITULO /-->
        <td><?php echo $fila->titulo; ?></td>

        <!-- DESCRIPCIÓN /-->
        <td><?php echo $fila->descripcion; ?></td>

        <!-- TAMAÑO /-->
        <td><?php echo $fila->tamano; ?></td>

        <!-- DURACIÓN /-->
        <td><?php echo $fila->duracion; ?></td>

      </tr>

    <?php endforeach; ?>

    </tbody>

    <tfoot>
    <tr>
      <th>VISTO</th>
      <th>PORTADA</th>
      <th>EP.</th>
      <th>TÍTULO</th>
      <th>DESCRIPCIÓN</th>
      <th>TAMAÑO</th>
      <th>DURACIÓN</th>
    </tr>
    </tfoot>

  </table>
</section>


<?php wp_reset_query(); ?>
