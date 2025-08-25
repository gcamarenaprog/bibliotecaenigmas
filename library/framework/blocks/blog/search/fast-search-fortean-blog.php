<?php
/*
  Template Name: 	Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Library | Framework | Blocks | Fortean Blog | Search
  File name: 			fast-search-fortean-table.php
  Date: 					04-06-2025
  Description: 		This file shows the table of fortean blog posts.
  Note:           Refactored
  */
?>

<?php

// WP_Query arguments
$args = array(
  'post_type'              => array('post'),
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'tax_query' => [
    [
      'taxonomy' => 'category',
      'terms'    => '1300',
    ],
  ],
);

// The Query
$query = new WP_Query($args);
?>

<?php
echo do_shortcode('
    [wp-datatable id="table" fat="LEVEL"]
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
    columnDefs: [{ "orderable": false, "targets": [0, 3] }],
    language: {
      "search": "Buscar",
      "lengthMenu": "Mostrar _MENU_ publicaciones",
      "info":           "Mostrando _START_ a _END_ de _TOTAL_ publicaciones",
      "infoEmpty":      "Mostrando 0 a 0 de 0 publicaciones",
      "paginate": {
        "first":      "Primera",
        "last":       "Última",
        "next":       "»",
        "previous":   "«"
      },
         "buttons": {
        "colvis":   "Ver columnas"
      },
    },
    [/wp-datatable]');

$index = 0;
?>

<section>
  <div class="mt10">

    <table id="table" class="display compact" style="width:100%">

      <thead>
        <tr>
          <th>#</th>
          <th>TÍTULO</th>
          <th>CATEGORÍA</th>
          <th>FECHA</th>
          <th>VISITAS</th>
        </tr>
      </thead>

      <tbody>

        <?php while ($query->have_posts()): $query->the_post(); ?>

          <?php
          $count_key = 'tie_views';
          $count = get_post_meta($post->ID, $count_key, true);
          $count = @number_format($count);
          if (empty($count)) {
            delete_post_meta($post->ID, $count_key);
            add_post_meta($post->ID, $count_key, 0);
            $count = 0;
          }
          ?>

          <?php $index++; ?>

          <tr>
            <!-- # /-->
            <td><?php echo " $index. "; ?></td>

            <!-- Title /-->
            <td><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?></a></td>

            <!-- Category /-->
            <td> <?php echo the_category($separator = ', ', $parents = '', $post_id = false); ?> </td>

            <!-- Date /-->
            <td><?php the_time(get_option('date_format')); ?></td>

            <!-- Views /-->
            <td>
              <?php echo '<span class="post-views"><i class="fa fa-eye"> </i> ' . $count . '</span> '; ?>
            </td>

          </tr>

        <?php endwhile; ?>

      </tbody>

      <tfoot>
        <tr>
          <th>#</th>
          <th>TÍTULO</th>
          <th>CATEGORÍA</th>
          <th>FECHA</th>
          <th>VISITAS</th>
        </tr>
      </tfoot>

    </table>

  </div>
</section>