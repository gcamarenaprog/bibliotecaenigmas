<?php
/*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Library / Functions
  File name: 			library-functions.php
  Date: 					17-05-2024
  Description: 		This file contains the theme file paths, custom styles, functions and function registration.
  Note:           Refactored
  */
?>

<?php

# Admin files
require_once(get_template_directory() . '/library/admin/add-book.php');
require_once(get_template_directory() . '/library/admin/book.php');

# Widget paths files
require_once(get_template_directory() . '/library/widgets.php');

# ----------------------------------------------------------------------------------------------------------------
# General functions
# ----------------------------------------------------------------------------------------------------------------

/**
 * Get title from complete title of the book.
 *
 * @param string $completeTitleOfBook
 * @return string
 */
function getTitle(string $completeTitleOfBook): string
{
  $findDelimiterCharacter = '|';
  $positionDelimiterCharacter = strpos($completeTitleOfBook, $findDelimiterCharacter);

  if ($positionDelimiterCharacter) {
    return substr($completeTitleOfBook, 0, $positionDelimiterCharacter);
  } else {
    return $completeTitleOfBook;
  }
}

/**
 * Get subtitle from complete title of the book.
 *
 * @param string $completeTitleOfBook
 * @return string|boolean
 */
function getSubtitle(string $completeTitleOfBook): string
{
  $findDelimiterCharacter = '|';
  $positionDelimiterCharacter = strpos($completeTitleOfBook, $findDelimiterCharacter);

  return $positionDelimiterCharacter ? substr($completeTitleOfBook, $positionDelimiterCharacter + 1) : false;
}


# ----------------------------------------------------------------------------------------------------------------
# Custom styles functions
# ----------------------------------------------------------------------------------------------------------------

/**
 * Enqueue custom styles
 *
 * @return void
 */
function enqueueCustomStyles()
{
  global $template;
  getStylesheetDirectoryUrl(basename($template));
}


/*function enqueueCustomScripts()
{
  global $template;
  themeslug_enqueue_script(basename($template));
}


add_action( 'wp_enqueue_scripts', 'enqueueCustomScripts' );

function themeslug_enqueue_script($baseName)
{
   $url = '';
  if ($baseName === 'template-be-search-book.php') {
    $url = '/library/js/datables.js';
  }


  wp_enqueue_style(
    'custom-script',
    get_stylesheet_directory_uri() . $url,
    array(),
    wp_get_theme()->get('Version')
  );
}*/



add_action('wp_enqueue_scripts', 'enqueueCustomStyles');



/**
 * Get enqueue custom styles
 *
 * @param $baseName
 * @return void
 */
function getStylesheetDirectoryUrl($baseName)
{
  $url = '';
  if ($baseName === 'template-be-home.php') {
    $url = '/library/css/template-be-home.css';
  }
  if ($baseName === 'template-be-books.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'template-be-books-grid.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'single-book.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'single.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'category.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'search.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'taxonomy-writer.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'taxonomy-editorial.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'taxonomy-genre.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'template-be-search-fortean-blog.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'template-be-search-writer-blog.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'template-be-search-book.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'template-be-search-quotes.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'template-sitemap.php') {
    $url = '/library/css/template-be.css';
  }
  if ($baseName === 'sidebar-genres.php') {
    $url = '/library/css/template-be.css';
  }

  wp_enqueue_style(
    'custom-style',
    get_stylesheet_directory_uri() . $url,
    array(),
    wp_get_theme()->get('Version')
  );
}

/**
 * Enqueue custom styles from admin
 *
 * @return void
 */
function enqueueCustomStylesAdmin()
{
  wp_register_style('custom_wp_admin_css', get_template_directory_uri() . '/library/css/template-be-admin.css', false, '1.0.0');
  wp_enqueue_style('custom_wp_admin_css');
}

add_action('admin_enqueue_scripts', 'enqueueCustomStylesAdmin');

# ----------------------------------------------------------------------------------------------------------------


# ----------------------------------------------------------------------------------------------------------------
# Custom sidebars functions
# ----------------------------------------------------------------------------------------------------------------

/**
 * Register genre taxonomy sidebar
 */
register_sidebar(
  array(
    'name' => 'Sidebar Géneros',
    'id' => 'sidebar-genres',
    'description' => 'The Genres Taxonomy widget area',
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div></div><!-- .widget /-->',
    'before_title' => '<div class="widget-top"><h4>',
    'after_title' => '</h4><div class="stripe-line"></div></div><div class="widget-container">'
  )
);

/**
 * Register sitemap sidebar
 */
register_sidebar(
  array(
    'name' => 'Sidebar Sitemap',
    'id' => 'sidebar-sitemap',
    'description' => 'The Sitemap Taxonomy widget area',
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div></div><!-- .widget /-->',
    'before_title' => '<div class="widget-top"><h4>',
    'after_title' => '</h4><div class="stripe-line"></div></div>
<div class="widget-container">'
  )
);

# ----------------------------------------------------------------------------------------------------------------


# ----------------------------------------------------------------------------------------------------------------
# Widgets functions
# ----------------------------------------------------------------------------------------------------------------

/**
 * Show a most recent, popular or random books list for Books Widget
 *
 * @param int    $postsNumber
 * @param bool   $thumb
 * @param bool   $date
 * @param bool   $views
 * @param bool   $likes
 * @param string $type
 * @return void
 */
function widgetListOfBooks(int $postsNumber = 5, bool $thumb = true, bool $date = true, bool $views = true, bool $likes = true, string $type = '')
{
  global $post;
  $originalPost = $post;

  if ($type == 'popular') {
    $arguments = array(
      'orderby' => 'meta_value_num',
      'post_type' => 'book',
      'meta_key' => 'tie_views',
      'posts_per_page' => $postsNumber,
      'post_status' => 'publish',
      'no_found_rows' => true,
      'ignore_sticky_posts' => true,
    );
  }
  if ($type == 'random') {
    $arguments = array(
      'orderby' => 'rand',
      'post_type' => 'book',
      'meta_key' => 'tie_views',
      'posts_per_page' => $postsNumber,
      'post_status' => 'publish',
      'no_found_rows' => true,
      'ignore_sticky_posts' => true,
    );
  }
  if ($type == 'recent') {
    $arguments = array(
      'orderby' => 'desc',
      'post_type' => 'book',
      'posts_per_page' => $postsNumber,
      'post_status' => 'publish',
      'no_found_rows' => true,
      'ignore_sticky_posts' => true,
    );
  }

  $popularposts = new WP_Query($arguments);
  if ($popularposts->have_posts()) :
    while ($popularposts->have_posts()) : $popularposts->the_post() ?>

      <?php
      $completeTitleOfBook = get_the_title();
      $findDelimiterCharacter = '|';
      $positionDelimiterCharacter = strpos($completeTitleOfBook, $findDelimiterCharacter);
      if ($positionDelimiterCharacter) {
        $titleOfBook = substr($completeTitleOfBook, 0, $positionDelimiterCharacter);
        $subtitleOfBook = substr($completeTitleOfBook, $positionDelimiterCharacter + 1);
      } else {
        $titleOfBook = $completeTitleOfBook;
        $subtitleOfBook = null;
      }
      $numberOfLikes = get_post_meta($post->ID, 'be_theme_likes');
      $numberOfLikes_ = $numberOfLikes[0] ?? 0;
      ?>

      <!-- Thumbnail /-->
      <?php if (function_exists("has_post_thumbnail") && has_post_thumbnail() && $thumb) : ?>
        <?php
        $be_theme_check = get_post_meta($post->ID, 'be_theme_check', true);
        if ($be_theme_check != 'yes') {
          echo '<div class="post-thumbnail tie_check  tie-appear" >';
        } else {
          echo '<div class="post-thumbnail tie_book tie-appear" >';
        }
        ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <img style="width: 66px;"
            src="<?php echo tie_thumb_src('tie-library_widget'); ?>"
            alt="" class="tie-appear">
          <li class="fa overlay-icon"></li>
        </a>
        </div>
      <?php endif; ?>

      <li <?php tie_post_class(); ?>>

        <!-- Title /-->
        <h3 style="line-height: 1.34rem;margin-top: 15px;overflow: hidden; white-space: nowrap;text-overflow: ellipsis;">
          <a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo $titleOfBook; ?></a><br>
          <em><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo $subtitleOfBook; ?></a></em>
        </h3>

        <!-- Date /-->
        <?php if ($date) : ?>
          <span style="font-size: 0.99rem; line-height: 1.00rem; font-weight: 300;color: #888; margin: 7px 0;">
            <?php tie_get_time(); ?>
          </span>
          <br>
        <?php endif; ?>

        <!-- Views /-->
        <?php if ($views) : ?>
          <span class="post-views-widget"> <?php echo tie_views(); ?></span>
        <?php endif; ?>

      </li>
      <hr style="margin-top: 10px">

<?php
    endwhile;
  endif;

  $post = $originalPost;
  wp_reset_query();
}

# ----------------------------------------------------------------------------------------------------------------


# ----------------------------------------------------------------------------------------------------------------
# Search datatables functions
# ----------------------------------------------------------------------------------------------------------------

/**
 * Returns the number of entries in a category and subcategories.
 *
 * @param $term
 * @param $taxonomy
 * @return void
 */
function getTotalsPosts($term, $taxonomy)
{
  $count = 0;
  $arguments = array(
    'taxonomy' => $taxonomy, //empty string(''), false, 0 don't work, and return empty array
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => true, //can be 1, '1' too
    'include' => 'all', //empty string(''), false, 0 don't work, and return empty array
    'exclude' => 'all', //empty string(''), false, 0 don't work, and return empty array
    'exclude_tree' => 'all', //empty string(''), false, 0 don't work, and return empty array
    'number' => false, //can be 0, '0', '' too
    'offset' => '',
    'fields' => 'all',
    'name' => $term,
    'slug' => '',
    'hierarchical' => true, //can be 1, '1' too
    'search' => '',
    'name__like' => '',
    'description__like' => '',
    'pad_counts' => false, //can be 0, '0', '' too
    'get' => '',
    'child_of' => false, //can be 0, '0', '' too
    'childless' => false,
    'cache_domain' => 'core',
    'update_term_meta_cache' => true, //can be 1, '1' too
    'meta_query' => '',
    'meta_key' => array(),
    'meta_value' => '',
  );
  $taxonomy_terms = get_terms($arguments);
  foreach ($taxonomy_terms as $taxonomy_term) {
    $count += $taxonomy_term->count;
  }
  echo $count;
}

# ----------------------------------------------------------------------------------------------------------------


# ----------------------------------------------------------------------------------------------------------------
# Columns for post type book functions
# ----------------------------------------------------------------------------------------------------------------

/**
 * Set columns for post type book
 * ---------------------------------------------------------------------------------------------------------------
 */
add_filter('manage_book_posts_columns', 'setBookPostsColumns');

/**
 * Set columns for post type book
 *
 * @param $columns
 * @return array
 */
function setBookPostsColumns($columns): array
{
  $columns = array();
  $columns['cb'] = __('cb');
  $columns['title'] = __('Título completo');
  $columns['titleOfBook'] = __('Título');
  $columns['subtitleOfBook'] = __('Subtítulo');
  $columns['writer'] = __('Autor/es');
  $columns['editorial'] = __('Editorial');
  $columns['genre'] = __('Género/s');
  $columns['year'] = __('Año');
  $columns['country'] = __('País');
  $columns['pages'] = __('Páginas');
  $columns['state'] = __('Estado');
  $columns['extension'] = __('Formato');
  $columns['size'] = __('Tamaño');
  $columns['date'] = __('Fecha');
  $columns['views'] = __('Visitas');
  $columns['likes'] = __('Me gusta');
  $columns['check'] = __('Verificación');
  return $columns;
}

/**
 * Fill book posts columns
 * ---------------------------------------------------------------------------------------------------------------
 */
add_action('manage_book_posts_custom_column', 'fillBookPostsColumns', 10, 2);

/**
 * Fill book posts columns
 *
 * @param $columnName
 * @param $postId
 * @return void
 */
function fillBookPostsColumns($columnName, $postId)
{
  // We get all the values from each post
  $meta = get_post_meta($postId);

  // Each column is traversed and the value is assigned
  switch ($columnName):

    case 'titleOfBook':
      $completeTitleOfBook = get_the_title();
      $titleOfBook = getTitle($completeTitleOfBook);
      if (!$titleOfBook) {
        $titleOfBook = 'No registrado';
      }
      $url = get_admin_url() . 'post.php?post=' . $postId . '&action=edit';
      echo '<a href="' . $url . '" rel="bookmark">' . $titleOfBook . '</a>';
      break;

    case 'subtitleOfBook':
      $completeTitleOfBook = get_the_title();
      $subtitleOfBook = getSubtitle($completeTitleOfBook);
      if (!$subtitleOfBook) {
        $subtitleOfBook = 'No registrado';
      }
      $url = get_admin_url() . 'post.php?post=' . $postId . '&action=edit';
      echo '<a href="' . $url . '" rel="bookmark">' . $subtitleOfBook . '</a>';
      break;

    case 'writer':
      $termList = false;
      if (get_the_terms($postId, 'writer')) {
        $termList = get_the_terms($postId, 'writer');
      }
      $types = '';
      echo '<ul>';
      if ($termList) {
        foreach ($termList as $termSingle) {
          $types .= $termSingle->slug . ', ';
          $typesz = rtrim($types, ', ');
          $url = get_admin_url() . 'edit.php?writer=' . $typesz . '&post_type=book';
          echo '<li><a href="' . $url . '" rel="bookmark">' . $termSingle->name . '</a></li>';
          $types = '';
          $typesz = '';
          $url = '';
        }
      } else {
        echo 'No registrado';
      }
      echo '</ul>';
      break;

    case 'editorial':
      $termList = false;
      if (get_the_terms($postId, 'editorial')) {
        $termList = get_the_terms($postId, 'editorial');
      }
      $types = '';
      echo '<ul>';
      if ($termList) {
        foreach ($termList as $termSingle) {
          $types .= $termSingle->slug . ', ';
          $typesz = rtrim($types, ', ');
          $url = get_admin_url() . 'edit.php?editorial=' . $typesz . '&post_type=book';
          echo '<li><a href="' . $url . '" rel="bookmark">' . $termSingle->name . '</a></li>';
          $types = '';
          $typesz = '';
          $url = '';
        }
      } else {
        echo 'No registrado';
      }
      echo '</ul>';
      break;

    case 'genre':
      $termList = false;
      if (get_the_terms($postId, 'genre')) {
        $termList = get_the_terms($postId, 'genre');
      }
      $types = '';
      echo '<ul>';
      if ($termList) {
        foreach ($termList as $termSingle) {
          $types .= $termSingle->slug . ', ';
          $typesz = rtrim($types, ', ');
          $url = get_admin_url() . 'edit.php?genre=' . $typesz . '&post_type=book';
          echo '<li><a href="' . $url . '" rel="bookmark">' . $termSingle->name . '</a></li>';
          $types = '';
          $typesz = '';
          $url = '';
        }
      } else {
        echo 'No registrado';
      }
      echo '</ul>';
      break;

    case 'year':
      $year = get_post_meta($postId, 'be_theme_year', true);
      if (!$year) {
        $year = 'No registrado';
      }
      echo $year;
      break;

    case 'country':
      $country = get_post_meta($postId, 'be_theme_country', true);
      if (!$country) {
        echo 'No registrado';
      }
      echo $country;
      break;

    case 'pages':
      $pages = get_post_meta($postId, 'be_theme_pages', true);
      if (!$pages) {
        echo 'No registrado';
      } else {
        echo $pages . ' págs.';
      }
      break;

    case 'state':
      $status = get_post_meta($postId, 'be_theme_state', true);
      if (!$status) {
        echo 'No registrado';
      }
      echo $status;
      break;

    case 'kind':
      $metaKind = get_post_meta($postId, 'be_theme_kind', true);
      $typeof = gettype($metaKind);
      if (!$metaKind) {
        echo 'Dato no registrado';
      } else {
        if ($typeof == 'string') {
          echo $metaKind;
        } else {
          $kind = implode(" , ", $metaKind);
          echo $kind;
        }
      }
      break;

    case 'extension':
      $be_theme_file_extension = get_post_meta($postId, 'be_theme_extension', true);
      if (!$be_theme_file_extension || $be_theme_file_extension == '') {
        echo 'No registrado';
      } else {
        $file_extension = implode(" , *.", $be_theme_file_extension);
        echo "*.";
        echo $file_extension;
      }
      break;

    case 'size':
      $size = get_post_meta($postId, 'be_theme_size', true);
      if (!$size) {
        echo 'No disponible';
      } else {
        echo $size;
      }
      break;

    case 'date':
      the_time(get_option('date_format'));
      break;

    case 'views':
      $views = get_post_meta($postId, 'tie_views', true);
      if (!$views) {
        echo 'No disponible';
      } else {
        echo $views;
      }
      break;

    case 'likes':
      $numberOfLikes = get_post_meta($postId, 'be_theme_likes');
      $numberOfLikes_ = $numberOfLikes[0] ?? 0;
      echo $numberOfLikes_;
      break;

    case 'check':
      if (isset($meta['be_theme_check'][0])) {
        if ($meta['be_theme_check'][0] == "yes") {
          echo "Si";
        } else {
          echo "No";
        }
      } else {
        echo "No";
      }
      break;

  endswitch;
}


# ----------------------------------------------------------------------------------------------------------------
# Sortable columns functions
# ----------------------------------------------------------------------------------------------------------------

/**
 * Register columns as sortable
 * ---------------------------------------------------------------------------------------------------------------
 */
add_filter('manage_edit-book_sortable_columns', 'registerColumnsAsSortable');

/**
 * Register columns as sortable
 *
 * @param $columns
 * @return mixed
 */
function registerColumnsAsSortable($columns)
{
  $columns['titleOfBook'] = 'titleOfBook';
  $columns['subtitleOfBook'] = 'subtitleOfBook';
  $columns['views'] = 'views';
  $columns['writer'] = 'writer';
  $columns['editorial'] = 'editorial';
  $columns['genre'] = 'genre';
  $columns['country'] = 'country';
  $columns['state'] = 'state';
  $columns['extension'] = 'extension';
  $columns['likes'] = 'likes';
  $columns['check'] = 'check';
  return $columns;
}

/**
 * Sort by quantity for the "Views" column
 * ---------------------------------------------------------------------------------------------------------------
 */
add_action('pre_get_posts', 'views_clauses');

/**
 * Sort by quantity for the "Views" column
 *
 * @param $query
 * @return mixed
 */
function views_clauses($query)
{
  if (!is_admin() || !$query->is_main_query()) {
    return;
  }
  if ('views' === $query->get('orderby')) {
    $query->set('orderby', 'meta_value');
    $query->set('meta_key', 'tie_views');
    $query->set('meta_type', 'numeric');
  }
}

/**
 * Sort by quantity for the "Likes" column
 * ---------------------------------------------------------------------------------------------------------------
 */
add_action('pre_get_posts', 'likes_clauses');

/**
 * Sort by quantity for the "Likes" column
 *
 * @param $clauses
 * @param $wp_query
 * @return mixed
 */
function likes_clauses($query)
{
  if (!is_admin() || !$query->is_main_query()) {
    return;
  }
  if ('likes' === $query->get('orderby')) {
    $query->set('orderby', 'meta_value');
    $query->set('meta_key', 'be_theme_likes');
    $query->set('meta_type', 'numeric');
  }
}

/**
 * Sort alphabetically for "Author" column
 * ---------------------------------------------------------------------------------------------------------------
 */
add_filter('posts_clauses', 'writer_clauses', 10, 2);
/**
 * Sort alphabetically for "Author" column
 *
 * @param $clauses
 * @param $wp_query
 * @return mixed
 */
function writer_clauses($clauses, $wp_query)
{
  global $wpdb;

  if (isset($wp_query->query['orderby']) && 'writer' == $wp_query->query['orderby']) {

    $clauses['join'] .= "
        LEFT OUTER JOIN {$wpdb->term_relationships} ON {$wpdb->posts}.ID={$wpdb->term_relationships}.object_id
        LEFT OUTER JOIN {$wpdb->term_taxonomy} USING (term_taxonomy_id)
        LEFT OUTER JOIN {$wpdb->terms} USING (term_id)
        ";

    $clauses['where'] .= " AND (taxonomy = 'writer' OR taxonomy IS NULL)";
    $clauses['groupby'] = "object_id";
    $clauses['orderby'] = "GROUP_CONCAT({$wpdb->terms}.name ORDER BY name ASC) ";
    $clauses['orderby'] .= ('ASC' == strtoupper($wp_query->get('order'))) ? 'ASC' : 'DESC';
  }

  return $clauses;
}

/**
 * Sort alphabetically for "Editorial" column
 * ---------------------------------------------------------------------------------------------------------------
 */
add_filter('posts_clauses', 'editorial_clauses', 10, 2);

/**
 * Sort alphabetically for "Editorial" column
 *
 * @param $clauses
 * @param $wp_query
 * @return mixed
 */
function editorial_clauses($clauses, $wp_query)
{
  global $wpdb;

  if (isset($wp_query->query['orderby']) && 'editorial' == $wp_query->query['orderby']) {
    $clauses['join'] .= "
        LEFT OUTER JOIN {$wpdb->term_relationships} ON {$wpdb->posts}.ID={$wpdb->term_relationships}.object_id
        LEFT OUTER JOIN {$wpdb->term_taxonomy} USING (term_taxonomy_id)
        LEFT OUTER JOIN {$wpdb->terms} USING (term_id)
        ";

    $clauses['where'] .= " AND (taxonomy = 'editorial' OR taxonomy IS NULL)";
    $clauses['groupby'] = "object_id";
    $clauses['orderby'] = "GROUP_CONCAT({$wpdb->terms}.name ORDER BY name ASC) ";
    $clauses['orderby'] .= ('ASC' == strtoupper($wp_query->get('order'))) ? 'ASC' : 'DESC';
  }

  return $clauses;
}

/**
 * Sort alphabetically for "Genre" column
 * ---------------------------------------------------------------------------------------------------------------
 */
add_filter('posts_clauses', 'genre_clauses', 10, 2);

/**
 * Sort alphabetically for "Genre" column
 *
 * @param $clauses
 * @param $wp_query
 * @return mixed
 */
function genre_clauses($clauses, $wp_query)
{
  global $wpdb;

  if (isset($wp_query->query['orderby']) && 'genre' == $wp_query->query['orderby']) {

    $clauses['join'] .= "
        LEFT OUTER JOIN {$wpdb->term_relationships} ON {$wpdb->posts}.ID={$wpdb->term_relationships}.object_id
        LEFT OUTER JOIN {$wpdb->term_taxonomy} USING (term_taxonomy_id)
        LEFT OUTER JOIN {$wpdb->terms} USING (term_id)
        ";

    $clauses['where'] .= " AND (taxonomy = 'genre' OR taxonomy IS NULL)";
    $clauses['groupby'] = "object_id";
    $clauses['orderby'] = "GROUP_CONCAT({$wpdb->terms}.name ORDER BY name ASC) ";
    $clauses['orderby'] .= ('ASC' == strtoupper($wp_query->get('order'))) ? 'ASC' : 'DESC';
  }
  return $clauses;
}

# ----------------------------------------------------------------------------------------------------------------


# ----------------------------------------------------------------------------------------------------------------
# Tiny mce functions
# ----------------------------------------------------------------------------------------------------------------

/**
 * Add custom buttons js script within the administration. The order of the elements is which will be displayed in
 * the editor's button bar.
 *
 * @param $plugins
 * @return mixed
 */
function tiny_mce_add_buttons($plugins)
{
  $plugins['mytinymcebuttons'] = get_template_directory_uri() . '/library/js/tiny-mce.js';
  return $plugins;
}

/**
 * Register custom buttons in the "WordPress Editor" within the administration. The order of the elements is which
 * will be displayed in the editor's button bar.
 *
 * @param $buttons
 * @return mixed
 */
function tiny_mce_register_buttons($buttons)
{
  $newBtns = array(
    'btnTitle',
    'btnCredits',
    'btnReferences',
    'btnSummary',
    'btnMasonic'
  );
  return array_merge($buttons, $newBtns);
}

add_action('init', 'tiny_mce_new_buttons');

/**
 * Add custom buttons previously registered.
 *
 * @return void
 */
function tiny_mce_new_buttons()
{
  add_filter('mce_external_plugins', 'tiny_mce_add_buttons');
  add_filter('mce_buttons', 'tiny_mce_register_buttons');
}

# ----------------------------------------------------------------------------------------------------------------
