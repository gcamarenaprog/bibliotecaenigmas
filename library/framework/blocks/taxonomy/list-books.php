<?php
/*
  Template Name: 	Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Library | Framework | Blocks | Book | Taxonomy
  File name: 			list-books.php
  Date: 					31-05-2025
  Description: 		This file shows the table of publications for each taxonomy.
  Note:           Refactored
  */
?>

<!-- Table /-->
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
    { "orderable": false, "targets": [0, 7, 8] },
    { "targets": [6, 7, 8, 9, 10, 11], visible: false },
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

get_template_part('query');
$index = 0;

// Get slug name of the taxonomy
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$taxonomy = get_query_var('taxonomy');
$slug = $term->slug;
?>



<?php if ($slug != 'coleccion-de-libros'): ?>
<!-- Title /-->
<section>
  <div class="tb-head">

    <?php if ($taxonomy == 'editorial'): ?>
      <h1> = LISTA DE LIBROS DE LA EDITORIAL <?php echo $term->slug; ?> = </h1>
    <?php else: ?>
      <h1> = LISTA DE LIBROS = </h1>
    <?php endif; ?>

  </div>
</section>

<section>
  <div class="tb-box">
    <section>
      <table id="table" class="display compact" style="width:100%">

        <thead>
          <tr>
            <th>#</th>
            <th>TÍTULO</th>
            <th>SUBTÍTULO</th>
            <th>AUTOR</th>
            <th>EDITORIAL</th>
            <th>GÉNERO</th>
            <th>AÑO</th>
            <th>PAÍS</th>
            <th>PÁGINAS</th>
            <th>TAMAÑO</th>
            <th>FECHA</th>
            <th>VISITAS</th>
          </tr>
        </thead>

        <tbody>

          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php
            $fullTitle = get_the_title();
            $title = getTitle($fullTitle);
            $subtitle = getSubtitle($fullTitle);
            if (!$subtitle) {
              $subtitle = 'No disponible';
            }
            ?>

            <?php $index++; ?>

            <tr>

              <!-- # /-->
              <td><?php echo "$index"; ?></td>

              <!--Title /-->
              <td><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php echo $title; ?></a></td>

              <!--Subtitle /-->
              <td><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php echo $subtitle; ?></a></td>

              <!-- Author /-->
              <td><?php echo get_the_term_list($post->ID, 'writer', '', ', ', ''); ?></td>

              <!-- Editorial /-->
              <td><?php echo get_the_term_list($post->ID, 'editorial', '', ', ', ''); ?></td>

              <!-- Genre /-->
              <td><?php echo get_the_term_list($post->ID, 'genre', '', ', ', ''); ?></td>

              <!-- Year /-->
              <td><?php echo get_post_meta($post->ID, 'be_theme_year', true); ?></td>

              <!-- Country /-->
              <td><?php echo get_post_meta($post->ID, 'be_theme_country', true); ?></td>

              <!-- Pages /-->
              <td><?php echo get_post_meta($post->ID, 'be_theme_pages', true); ?> pags.</td>

              <!-- Size /-->
              <td><?php echo get_post_meta($post->ID, 'be_theme_size', true); ?></td>

              <!-- Date /-->
              <td><?php echo the_time(get_option('date_format')); ?> </td>

              <!-- Views /-->
              <td><?php echo get_post_meta($post->ID, 'tie_views', true); ?> <i class="fa fa-eye"></i></td>

            </tr>

          <?php endwhile; ?>

        </tbody>

        <tfoot>
          <tr>
            <th>#</th>
            <th>TÍTULO</th>
            <th>SUBTÍTULO</th>
            <th>AUTOR</th>
            <th>EDITORIAL</th>
            <th>GÉNERO</th>
            <th>AÑO</th>
            <th>PAÍS</th>
            <th>PÁGINAS</th>
            <th>TAMAÑO</th>
            <th>FECHA</th>
            <th>VISITAS</th>
          </tr>
        </tfoot>

      </table>
    </section>
  </div>
</section>

<?php endif; ?>

<?php wp_reset_query(); ?>