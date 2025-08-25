<?php
/*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Blog | Grid
  File name: 			last-post.php
  Date: 					04-06-2025
  Description: 		This file contains the last posts of the writer blog of the home page.
  Note:           Refactored
  */
?>

<section>
  <div class="tb-head">
    <h1>= ÚLTIMAS NOVEDADES =</h1>
  </div>
</section>

<section>
  <div class="tb-box">
    <div class="container_">
      <div class="row_">

        <?php
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

            <?php $postTitle = get_the_title(); ?>

            <div class="col_-xxl-4 col_-xl-4  col_-md-4 col_-sm-12 col_xs-12">
              <article class="card-blog">

                <!-- Data -->
                <div class="blog">
                  <div class="tbh-thumbnail">

                    <div class="post-thumbnail tie-appear tbh-post-thumbnail"
                      style=" ">
                      <a href="<?php the_permalink(); ?>" rel="bookmark">
                        <?php the_post_thumbnail(); ?>
                        <li
                          class="fa overlay-icon tbh-overlay-icon">
                        </li>
                      </a>
                    </div>

                    <div class="tbh-thumbnail-title">
                      <h1>
                        <a class="title" href="<?php the_permalink(); ?>" rel="bookmark">
                          <?php echo $postTitle; ?>
                        </a>
                      </h1>
                    </div>

                  </div><!--/.tb-thumbnails-->
                </div><!--/.blog-->

              </article><!--/.card-blog-->

            </div><!--/.cols-->

          <?php endwhile; ?>

          <!-- No posts -->
        <?php else : ?>

          <!-- No books message /-->
          <article>
            <div class="item-list">
              <div class="tb-no-more-books">
                No hay publicaciones.
              </div>
            </div>
          </article>

        <?php endif ?>

      </div><!--/.row_-->
    </div><!--/.container_-->
  </div><!--/.tb-box-->
</section>

<!-- Pagination /-->
<?php if ($wp_query->max_num_pages > 1)
  tie_pagenavi(); ?>

<?php wp_reset_query(); ?>