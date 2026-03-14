<?php
  /*
  Template Name: 	Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Blog | Parts
  File name: 			table.php
  Date: 					18-05-2024
  Description: 		This file shows the table of publications for each category.
  Note:           Refactored
  */
?>

<?php
  $currentObject = get_queried_object ();
  
  echo do_shortcode ('
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
    columnDefs: [{ "orderable": false, "targets": [0, 1, 3] }],
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
  
  $maximumNumberPosts = 20000;
  $arguments = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => $maximumNumberPosts,
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => $currentObject,
      ),
    ),
  );
  $query = new WP_query($arguments);
  $index = 0;
?>

  <!-- Title /-->
  <section>
  <div class="tb-head">
    <h4>
      Lista de publicaciones del "<b><?php echo single_cat_title ('', false) ?></b>"
    </h4>
  </div>

  <!-- Table /-->
  <section>
    <div <?php post_class ('post-listing post'); ?> id="the-post">
      <div class="post-inner">
        <div class="entry tb-entry">
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
            
            <?php while ($query->have_posts ()): $query->the_post (); ?>
              
              <?php
              $numberOfLikes = get_post_meta ($post->ID, 'tie_likes');
              $numberOfLikes_ = $numberOfLikes[0] ?? 0;
              
              $count_key = 'tie_views';
              $count = get_post_meta ($post->ID, $count_key, true);
              $count = @number_format ($count);
              if (empty($count)) {
                delete_post_meta ($post->ID, $count_key);
                add_post_meta ($post->ID, $count_key, 0);
                $count = 0;
              }
              ?>
              
              <?php $index++; ?>

              <tr>
                <!-- # /-->
                <td><?php echo " $index. "; ?></td>

                <!-- Title /-->
                <td><a href="<?php the_permalink (); ?>" rel="bookmark"> <?php the_title (); ?></a></td>

                <!-- Category /-->
                <td> <?php echo the_category ($separator = ', ', $parents = '', $post_id = false); ?> </td>

                <!-- Date /-->
                <td><?php the_time (get_option ('date_format')); ?></td>

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
      </div>
    </div>
  </section>

<?php wp_reset_query (); ?>