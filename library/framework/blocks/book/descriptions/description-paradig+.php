<?php
global $wpdb;
$query1 = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}wpdatatable_116");
$query2 = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}wpdatatable_117");

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

echo do_shortcode('[wp-datatable id="table2" fat="LEVEL"]
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

  <!-- Content table 1 /-->
  <section>
    <table id="table" class="display compact" style="width:100%">

      <thead>
      <tr>
        <th>PORTADA</th>
        <th>VISTO</th>
        <th>NO.</th>
        <th>FECHA</th>
        <th>TÍTULO</th>
        <th>SUBTÍTULO</th>
        <th>TIPO</th>
        <th>PAGS.</th>
        <th>TAMAÑO</th>
      </tr>
      </thead>

      <tbody>

      <?php foreach ($query1 as $fila): ?>
        <?php

        ?>

        <tr>

          <!-- Portada /-->
          <td style="width: 20px; padding: 10px;">
            <?php
            $imageString = $fila->no;
            if ($imageString != 'No existe') {

              $fullImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/paradig+/dosieres/' . $imageString . '.jpg';
              $smallImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/paradig+/dosieres/small/' . $imageString . '.jpg';

            } else {
              $fullImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/no-cover-book.jpg';
              $smallImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/no-cover-book-small.jpg';
            }

            ?>

            <div class="post-thumbnail tie_play tb-book-thumbnail tie-appear" style="margin-bottom: 0; width: 94px;">
              <a href="<?php echo $fullImagePath; ?>"
                 class="fancybox image"
                 style="width: 95px;"
                 aria-controls="fancybox-wrap"
                 aria-haspopup="dialog">
                <img style="width: 95px; border-color: #69696900;"
                     src="<?php echo $smallImagePath; ?>"
                     title="<?php echo $fila->titulo; ?>"
                     class="tie-appear">
                <li class="fa overlay-icon"></li>
              </a>
            </div>
          </td>

          <!-- Visto /-->
          <td><?php echo $fila->visto; ?></td>

          <!-- No. /-->
          <td><?php echo $fila->no; ?></td>

          <!-- Fecha /-->
          <td><?php echo $newDate = date("d-m-Y", strtotime($fila->fecha)); ?></td>

          <!-- Título /-->
          <td><?php echo $fila->titulo; ?></td>

          <!-- Subtítulo /-->
          <td><?php echo $fila->subtitulo; ?></td>

          <!-- Tipo /-->
          <td><?php echo $fila->tipo; ?></td>

          <!-- Páginas /-->
          <td><?php echo $fila->pags; ?></td>

          <!-- Tamaño /-->
          <td><?php echo $fila->tamano; ?></td>

        </tr>

      <?php endforeach; ?>

      </tbody>

      <tfoot>
      <tr>
        <th>PORTADA</th>
        <th>VISTO</th>
        <th>NO.</th>
        <th>FECHA</th>
        <th>TÍTULO</th>
        <th>SUBTÍTULO</th>
        <th>TIPO</th>
        <th>PAGS.</th>
        <th>TAMAÑO</th>
      </tr>
      </tfoot>

    </table>
  </section>

  <hr>
  <h1 style="text-align: center;">Relación de otros compendios</h1>

  <!-- Content table 2 /-->
  <section>
    <table id="table2" class="display compact" style="width:100%">

      <thead>
      <tr>
        <th>PORTADA</th>
        <th>VISTO</th>
        <th>NO.</th>
        <th>FECHA</th>
        <th>TÍTULO</th>
        <th>SUBTÍTULO</th>
        <th>TIPO</th>
        <th>PAGS.</th>
        <th>TAMAÑO</th>
      </tr>
      </thead>

      <tbody>

      <?php foreach ($query2 as $fila): ?>
        <?php

        ?>

        <tr>

          <!-- Portada /-->
          <td style="width: 20px; padding: 10px;">
            <?php
            $imageString = $fila->no;
            if ($imageString != 'No existe') {

              $fullImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/paradig+/otros/' . $imageString . '.jpg';
              $smallImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/paradig+/otros/small/' . $imageString . '.jpg';

            } else {
              $fullImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/no-cover-book.jpg';
              $smallImagePath = 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/covers/no-cover-book-small.jpg';
            }

            ?>

            <div class="post-thumbnail tie_play tb-book-thumbnail tie-appear" style="margin-bottom: 0px; width: 94px;">
              <a href="<?php echo $fullImagePath; ?>"
                 class="fancybox image"
                 style="width: 95px; "
                 aria-controls="fancybox-wrap"
                 aria-haspopup="dialog">
                <img style="width: 95px; border-color: #69696900;"
                     src="<?php echo $smallImagePath; ?>"
                     title="<?php echo $fila->titulo; ?>"
                     class="tie-appear">
                <li class="fa overlay-icon"></li>
              </a>
            </div>
          </td>

          <!-- Visto /-->
          <td><?php echo $fila->visto; ?></td>

          <!-- No. /-->
          <td><?php echo $fila->no; ?></td>

          <!-- Fecha /-->
          <td><?php echo $newDate = date("d-m-Y", strtotime($fila->fecha)); ?></td>

          <!-- Título /-->
          <td><?php echo $fila->titulo; ?></td>

          <!-- Subtítulo /-->
          <td><?php echo $fila->subtitulo; ?></td>

          <!-- Tipo /-->
          <td><?php echo $fila->tipo; ?></td>

          <!-- Páginas /-->
          <td><?php echo $fila->pags; ?></td>

          <!-- Tamaño /-->
          <td><?php echo $fila->tamano; ?></td>

        </tr>

      <?php endforeach; ?>

      </tbody>

      <tfoot>
      <tr>
        <th>PORTADA</th>
        <th>VISTO</th>
        <th>NO.</th>
        <th>FECHA</th>
        <th>TÍTULO</th>
        <th>SUBTÍTULO</th>
        <th>TIPO</th>
        <th>PAGS.</th>
        <th>TAMAÑO</th>
      </tr>
      </tfoot>

    </table>
  </section>

<?php wp_reset_query(); ?>
<?php
