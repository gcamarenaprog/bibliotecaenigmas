<?php
global $wpdb;
$query = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}wpdatatable_109");

echo do_shortcode('[wp-datatable id="table" fat="LEVEL"]

        
  pageLength: -1,
  paging: true,
  responsive: true,
  search: true,
  order: [[2, "asc"]],
  lengthMenu: [ [3, 5, 10, 20, 30, -1], [3, 5, 10, 20, 30, "Todos"] ],
  layout: {
    "top": {
      "buttons": ["colvis"]
    },
    "topStart":   "pageLength",
    "topEnd":     "search"
  },
  columnDefs: [
    { "orderable": true, "targets": [1] },
    { "targets": [1], visible: false },
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

<script type="text/javascript">
    jQuery(document).ready(function () {

    });
</script>

<!-- Content /-->
<section>
  <table id="table" class="display compact" style="width:100%">

    <thead>
    <tr>
      <th>PORTADA</th>  
      <th>VISTO</th>
      <th>#</th>
      <th>NO.</th>
      <th>EP.</th>
      <th>TÍTULO</th>
      <th>DESCRIPCIÓN</th>
      <th>TEMPORADA</th>
      <th>FECHA</th>
      <th>AÑO</th>
      <th>DURACIÓN</th>
    </tr>
    </thead>

    <tbody>

    <?php foreach ($query as $fila): ?>
      <?php

      ?>

      <tr>

        <!-- Portada /-->
        <td style="width: 20px; padding: 10px;">
          <?php
          $imageString = $fila->ep;
          if ($imageString != 'No existe') {

            $fullImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/la-escobula-de-la-brujula/' . $imageString . '.jpg';
            $smallImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/la-escobula-de-la-brujula/small/' . $imageString . '.jpg';

          } else {
            $fullImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-cover.jpg';
            $smallImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-cover-small.jpg';
          }

          ?>

          <div class="post-thumbnail tie_play tb-book-thumbnail tie-appear" style="margin-bottom: 0px; width: 94px;">
            <a href="<?php echo $fullImagePath; ?>"
               class="fancybox image"
               style="width: 95px;"
               aria-controls="fancybox-wrap"
               aria-haspopup="dialog">
              <img style="width: 95px;"
                   src="<?php echo $smallImagePath; ?>"
                   title="<?php echo $fila->titulo; ?>"
                   class="tie-appear">
              <li class="fa overlay-icon"></li>
            </a>
          </div>
        </td>

        <!-- Visto /-->
        <td><?php echo $fila->visto; ?></td>

        <!-- # /-->
        <td><?php echo $fila->wdtcolumn; ?></td>

        <!-- No. /-->
        <td><?php echo $fila->no; ?></td>

        <!-- Ep. /-->
        <td><?php echo $fila->ep; ?></td>

        <!-- Título /-->
        <td><?php echo $fila->titulo; ?></td>

        <!-- Descripción /-->
        <td style="text-align: justify;"><?php echo $fila->descripcion; ?></td>

        <!-- Temporada /-->
        <td><?php echo $fila->temporada; ?>

          <!-- Fecha /-->
        <td><?php echo $fila->fecha; ?></td>

        <!-- Año /-->
        <td><?php echo $fila->ano; ?></td>

        <!-- Duración /-->
        <td><?php echo $fila->duracion; ?></td>

      </tr>

    <?php endforeach; ?>

    </tbody>

    <tfoot>
    <tr>
      <th>PORTADA</th>  
      <th>VISTO</th>
      <th>#</th>
      <th>NO.</th>
      <th>EP.</th>
      <th>TÍTULO</th>
      <th>DESCRIPCIÓN</th>
      <th>TEMPORADA</th>
      <th>FECHA</th>
      <th>AÑO</th>
      <th>DURACIÓN</th>
    </tr>
    </tfoot>

  </table>
</section>


<?php wp_reset_query(); ?>
