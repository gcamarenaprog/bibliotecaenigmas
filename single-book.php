<?php
/**
 * Template Name:      Biblioteca Enigmas
 * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
 * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
 * Author:             Guillermo Camarena
 * Author URL:         http://gcamarenaprog.com
 * Path:               root
 * File name:          single-book.php
 * Description:        This file shows single book page.
 * Date:               06-02-2026
 */

echo do_shortcode('[wp-datatable id="table1" fat="LEVEL"]
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
?>

<?php
$postId = null;
$category = null;
$parentCategoryId = null;
$sidebarHidden = null;
$postId = get_the_ID();
$category = get_the_terms($postId, 'genre');

if ($category != null) {
  $parentCategoryId = $category[0]->term_id;
}

$sidebarHidden = get_post_meta($post->ID, 'be_theme_sidebar');
$sidebarHidden = $sidebarHidden[0];

// Determines the page width if the sidebar is hidden or not.
if ($sidebarHidden == 'yes') {
  $classContent = 'style:"width:100%;"';
} else {
  $classContent = ' class="content" ';
}
?>

<?php get_header(); ?>
<?php tie_breadcrumbs(); ?>
<?php tie_setPostViews(); ?>

<?php if (!have_posts()) : ?>
  <div <?php echo $classContent; ?> >
    <?php get_template_part('framework/parts/not-found'); ?>
  </div>
<?php endif; ?>

  <div <?php echo $classContent; ?> >

    <!-- Meta box -->
    <?php get_template_part('library/framework/blocks/book/single/meta'); ?>

    <!-- Image and data book /-->
    <div class="tb-box">

      <div class="row_ justify_-content-center align_-items-center">

        <!--/Thumbnail-->
        <div class="col_xl-5 col_-lg-5 col_-md-5 col_-sm-5 col_-12 text-center">
          <?php get_template_part('library/framework/blocks/book/single/thumbnail'); ?>
        </div>

        <!--/Data-->
        <div class="col_xl-7 col_-lg-7 col_-md-7 col_-sm-7 col_-12 text-center">
          <?php get_template_part('library/framework/blocks/book/single/data'); ?>
        </div>

      </div>

    </div>

    <!-- Content and share /-->
    <article>
      <div <?php post_class('post-listing'); ?> id="the-post">
        <div class="post-inner">

          <div class="entry">

            <!-- Content /-->
            <article>

              <!-- Sinopsis title /-->
              <p><strong>Sinopsis</strong></p>
              <h1><?php echo $postId;

                //echo $sidebarHidden;
                print_r($sidebarHidden); ?>

              </h1>
              <!-- Content /-->
              <?php the_content(); ?>








              <?php
              global $wpdb;
              if ($postId == 24799): {

                global $wpdb;
                //  $query = 'SELECT * FROM {$wpdb -> prefix}wpdatatable_109}';

                $query = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}wpdatatable_109");
                print_r($query);
                foreach ($query as $fila) {
                  echo $fila->portada;
                }

                $index = 0;

              } ?>

                <!-- Content /-->
                <section>
                  <div class="tb-box">
                    <section>
                      <table id="table1" class="display compact" style="width:100%">

                        <thead>
                        <tr>
                          <th>VISTO</th>
                          <th>NO.</th>
                          <th>TÍTULO</th>
                          <th>DESCRIPCIÓN</th>
                          <th>TEMPORADA</th>
                          <th>AÑO</th>
                          <th>FECHA</th>
                          <th>DURACIÓN</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php foreach ($query as $fila): ?>
                          <?php

                          ?>

                          <?php $index++; ?>

                          <tr>

                            <!-- # /-->
                            <td><?php echo "$index"; ?></td>

                            <!--Title /-->
                            <td><<?php echo $fila->titulo; ?></td>

                            <!--Title /-->
                            <td>

                              <br><br>
                              <h2><?php echo $fila->portada; ?></h2>
                              <div class="post-thumbnail tie_play tb-book-thumbnail tie-appear">
                                <a href="<?php echo $fila->portada; ?>"
                                   class="fancybox image"
                                   aria-controls="fancybox-wrap"
                                   aria-haspopup="dialog">
                                  <img src="<?php echo $fila->portada; ?>"
                                       title="<?php the_title(); ?>"
                                       class="tie-appear">
                                  <li class="fa overlay-icon"></li>
                                </a>
                              </div>


                            </td>


                          </tr>

                        <?php endforeach; ?>

                        </tbody>

                        <tfoot>
                        <tr>
                          <th>VISTO</th>
                          <th>NO.</th>
                          <th>TÍTULO</th>
                          <th>DESCRIPCIÓN</th>
                          <th>TEMPORADA</th>
                          <th>AÑO</th>
                          <th>FECHA</th>
                          <th>DURACIÓN</th>
                        </tr>
                        </tfoot>

                      </table>
                    </section>
                  </div>
                </section>


              <?php else:{

              }
              endif; ?>


              <!-- Pagination /-->
              <?php wp_link_pages(array('before' => '<div class="page-link">' . __ti('Pages:'), 'after' => '</div>')); ?>

              <!-- Edit link /-->
              <?php edit_post_link(__ti('Edit'), '<span class="edit-link">', '</span>'); ?>

            </article>

          </div>

          <!-- Share /-->
          <?php if ((tie_get_option('share_post') && empty($get_meta["tie_hide_share"][0])) || (!empty($get_meta["tie_hide_share"][0]) && $get_meta["tie_hide_share"][0] == 'no'))
            get_template_part('library/framework/blocks/book/single/share');
          ?>

        </div>
        <div class="clear"></div>
      </div>
    </article>

    <!-- Author /-->
    <?php if ((tie_get_option('post_authorbio') && empty($get_meta["tie_hide_author"][0])) || (isset($get_meta["tie_hide_related"][0]) && $get_meta["tie_hide_author"][0] == 'no')) : ?>
      <?php get_template_part('library/framework/blocks/book/single/author'); ?>
    <?php endif; ?>

    <!-- Navigation /-->
    <?php if (tie_get_option('post_nav')) : ?>
      <?php get_template_part('library/framework/blocks/book/single/navigation'); ?>
    <?php endif; ?>

    <!-- Related books box /-->
    <?php get_template_part('library/framework/blocks/book/single/related'); ?>

    <!-- Check also -->
    <?php get_template_part('library/framework/blocks/book/single/check-also'); ?>


    <div class="clear"></div>
  </div><!--/.content-->

<?php if ($sidebarHidden != 'yes') {
  get_sidebar('genres');
} else {
}
?>
<?php get_footer(); ?>