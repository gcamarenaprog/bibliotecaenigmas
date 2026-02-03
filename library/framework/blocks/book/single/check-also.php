<?php global $post;
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/book/single/
   * File name:          check-also.php
   * Description:        This file shows the check also section of the single book page.
   * Date:               03-02-2026
   */
?>

<?php
  global $post_id, $post_name, $check_also_position;
  $currentPostId = $post->ID;
  $visibility = null;
  $arrayNamesGenresCurrentPost = null;
  $index = 0;
  $classCodeTieCheck = 'tie_check';
  $classCodeTieBook = 'tie_book';
  
  // Get all genres of current post
  $allGenresOfCurrentPost = wp_get_post_terms ($post->ID, 'genre', array('fields' => 'slugs'));
  
  // Get total genres of current post
  $totalGenresOfCurrentPost = sizeof ($allGenresOfCurrentPost);
  
  // Get random number between 0 to total genres of current post
  if ($totalGenresOfCurrentPost <= 1) {
    $randomNumber = 0;
  } else {
    $randomNumber = rand (0, $totalGenresOfCurrentPost - 1);
  }
  
  // Convert string to array
  $arrayNamesGenresCurrentPost = (array)$allGenresOfCurrentPost;
  
  if ($arrayNamesGenresCurrentPost != null) {
    $selectedGenre = $arrayNamesGenresCurrentPost[$randomNumber];
    
    $arguments = array(
      'post_type' => 'book',
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'genre',
          'field' => 'slug',
          'terms' => $selectedGenre,
        ),
      ),
    );
    
    // Get the first four post IDs that are different from the current publication ID
    $query_FirstPostIds = new WP_Query($arguments);
    
    if ($query_FirstPostIds->have_posts ()) {
      while ($query_FirstPostIds->have_posts ()) {
        
        $query_FirstPostIds->the_post ();
        $postId = $query_FirstPostIds->post->ID;
        
        if ($postId != $currentPostId) {
          $firstPostIdRelatedToCurrentPosts[] = $postId;
          if ($index > 1) {
            break;
          }
          $index++;
        }
      }
    }
    
    wp_reset_query ();
    
    // Get the first four posts related with current post
    if ($firstPostIdRelatedToCurrentPosts) {
      $visibility = true;
      $arguments = array(
        'post_type' => 'book',
        'posts_per_page' => 1,
        'post__in' => $firstPostIdRelatedToCurrentPosts,
        'tax_query' => array(
          array(
            'taxonomy' => 'genre',
            'field' => 'slug',
            'terms' => $selectedGenre,
          ),
        ),
      );
      $query_FirstPost = new WP_query($arguments);
    } else {
      $visibility = false;
    }
  }
?>

<?php if ($visibility) : ?>
  
  <?php
  while ($query_FirstPost->have_posts ()) : $query_FirstPost->the_post () ?>
    
    <?php
    // Get data from the book
    $fullTitleBook = get_the_title ();
    $titleBook = getTitle ($fullTitleBook);
    $subtitleBook = getSubtitle ($fullTitleBook);
    $writerBook = get_the_taxonomies ($post->ID);
    $writerBook = cleanWriterText ($writerBook);
    ?>

    <section>
      <div id="check-also-box" class=" tb-book-check-also-width post-listing check-also-<?php echo $check_also_position ?> show-check-also">
        <a href="#" id="check-also-close"><i class="fa fa-close"></i></a>

        <!-- Title section /-->
        <section>
          <div class="block-head">
            <h1><?php _eti ('Check Also'); ?></h1>
          </div>
        </section>

        <!-- Content /-->
        <section>
          <div class="row_ align_-items-center">
            <div class="col_-12 text-center">

              <article>

                <div class="tb-book-check-also">
                  <?php if (function_exists ("has_post_thumbnail") && has_post_thumbnail ()) : ?>
                    <?php $be_theme_check = get_post_meta ($post->ID, 'be_theme_check', true); ?>

                    <!--/Thumbnail image-->
                    <div class="post-thumbnail tb-book-check-also-thumbnail
                    <?php
                      if ($be_theme_check == 'yes') {
                        echo $classCodeTieBook;
                      } else {
                        echo $classCodeTieCheck;
                      }
                    ?> tie-appear mr0">
                      <a href="<?php the_permalink() ?>" rel="bookmark">
                        <img src="<?php echo tie_thumb_src ('tie-'); ?>" alt="">
                        <li class="fa overlay-icon"></li>
                      </a>
                    </div>
                  <?php endif; ?>

                  <!--/Title-->
                  <div class="tb-book-check-also-title-book">
                    <a class='tb-book-check-also-title-book-text'
                       href='<?php the_permalink (); ?>'
                       rel='bookmark'>
                      <?php echo $titleBook; ?>
                      <span class='tb-book-check-also-paragraph-end'></span>
                    </a>
                  </div>

                  <!--/Subtitle-->
                  <?php if ($subtitleBook): ?>
                    <div class="tb-book-check-also-subtitle-book">
                      <a class='tb-book-check-also-subtitle-book-text'
                         href='<?php the_permalink (); ?>'
                         rel='bookmark'>
                        <?php echo $subtitleBook; ?>
                        <span class='tb-book-check-also-paragraph-end'></span>
                      </a>
                    </div>
                  <?php endif; ?>

                  <!--/Writer-->
                  <div class="tb-book-check-also-writer">
                    <a class='tb-book-check-also-writer-text'
                       href='<?php the_permalink (); ?>'
                       rel='bookmark'>
                      <?php echo $writerBook; ?>
                      <span class='tb-book-check-also-paragraph-end'></span>
                    </a>
                  </div>
                </div>
                
              </article>
              
            </div>
          </div>
        </section>

      </div>
    </section>
  
  <?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_query (); ?>