<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/
   * File name:          library-functions.php
   * Description:        This file contains the theme file paths, custom styles, functions and function registration.
   * Date:               25-08-2025
   */
  
  # Admin files
  require_once (get_template_directory () . '/library/admin/add-book.php');
  require_once (get_template_directory () . '/library/admin/book.php');
  
  # Widget paths files
  require_once (get_template_directory () . '/library/widgets.php');
  
  
  # ----------------------------------------------------------------------------------------------------------------
  # General functions
  # ----------------------------------------------------------------------------------------------------------------
  
  /**
   * Get title from the complete title.
   *
   * @param string $titleAndSubtitle
   * @return string
   */
  function getTitle (string $titleAndSubtitle): string
  {
    $delimiterChar = '|';
    $positionDelimiterChar = strpos ($titleAndSubtitle, $delimiterChar);
    if ($positionDelimiterChar) {
      return substr ($titleAndSubtitle, 0, $positionDelimiterChar);
    } else {
      return $titleAndSubtitle;
    }
  }
  
  /**
   * Get subtitle from the complete title.
   *
   * @param string $titleAndSubtitle
   * @return string
   */
  function getSubtitle (string $titleAndSubtitle): string
  {
    $delimiterChar = '|';
    $positionDelimiterChar = strpos ($titleAndSubtitle, $delimiterChar);
    return $positionDelimiterChar ? substr ($titleAndSubtitle, $positionDelimiterChar + 1) : false;
  }
  
  
  # ----------------------------------------------------------------------------------------------------------------
  # Custom styles functions
  # ----------------------------------------------------------------------------------------------------------------
  
  /**
   * Enqueue custom styles
   *
   * @return void
   */
  function enqueueCustomStyles (): void
  {
    global $template;
    getStyleSheetDirectoryUrl (basename ($template));
  }
  
  add_action ('wp_enqueue_scripts', 'enqueueCustomStyles');
  
  /**
   * Get style sheet directory URL
   *
   * @param $filename
   * @return void
   */
  function getStyleSheetDirectoryUrl ($filename): void
  {
    $url = '';
    if ($filename === 'template-be-home.php') {
      $url = '/library/css/template-be-home.css';
    }
    if ($filename === 'template-be-books.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'template-be-books-grid.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'single-book.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'single.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'category.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'search.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'taxonomy-writer.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'taxonomy-editorial.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'taxonomy-genre.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'template-be-search-fortean-blog.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'template-be-search-writer-blog.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'template-be-search-book.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'template-be-search-quotes.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'template-sitemap.php') {
      $url = '/library/css/template-be.css';
    }
    if ($filename === 'sidebar-genre.php') {
      $url = '/library/css/template-be.css';
    }
    wp_enqueue_style (
      'custom-style',
      get_stylesheet_directory_uri () . $url,
      array(),
      wp_get_theme ()->get ('Version')
    );
  }
  
  /*function enqueueCustomScripts()
{
  global $template;
  themeslug_enqueue_script(basename($template));
}


add_action( 'wp_enqueue_scripts', 'enqueueCustomScripts' );

function themeslug_enqueue_script($filename)
{
   $url = '';
  if ($filename === 'template-be-search-book.php') {
    $url = '/library/js/datables.js';
  }


  wp_enqueue_style(
    'custom-script',
    get_stylesheet_directory_uri() . $url,
    array(),
    wp_get_theme()->get('Version')
  );
}*/
  
  /**
   * Enqueue custom admin styles
   *
   * @return void
   */
  function enqueueCustomStylesAdmin (): void
  {
    wp_register_style ('custom_wp_admin_css-1', get_template_directory_uri () . '/library/css/template-be-admin.css', false,  '1.0.0');
    wp_register_style ('custom_wp_admin_css-2', get_template_directory_uri () . '/library/css/bootstrap-grid.min.css', false,  '1.0.0');
    wp_enqueue_style ('custom_wp_admin_css-1');
    wp_enqueue_style ('custom_wp_admin_css-2');
  }
  
  add_action ('admin_enqueue_scripts', 'enqueueCustomStylesAdmin');
  
  # ----------------------------------------------------------------------------------------------------------------
  
  
  # ----------------------------------------------------------------------------------------------------------------
  # Custom sidebars functions
  # ----------------------------------------------------------------------------------------------------------------
  
  /**
   * Register genre taxonomy sidebar
   */
  register_sidebar (
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
  register_sidebar (
    array(
      'name' => 'Sidebar Sitemap',
      'id' => 'sidebar-sitemap',
      'description' => 'The Sitemap Taxonomy widget area',
      'class' => '',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div></div><!-- .widget /-->',
      'before_title' => '<div class="widget-top"><h4>',
      'after_title' => '</h4><div class="stripe-line"></div></div><div class="widget-container">'
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
  function widgetListOfBooks (int $postsNumber = 5, bool $thumb = true, bool $date = true, bool $views = true, bool $likes = true, string $type = ''): void
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
    if ($popularposts->have_posts ()) :
      while ($popularposts->have_posts ()) : $popularposts->the_post () ?>
        
        <?php
        $titleAndSubtitle = get_the_title ();
        $delimiterChar = '|';
        $positionDelimiterChar = strpos ($titleAndSubtitle, $delimiterChar);
        if ($positionDelimiterChar) {
          $title = substr ($titleAndSubtitle, 0, $positionDelimiterChar);
          $subtitle = substr ($titleAndSubtitle, $positionDelimiterChar + 1);
        } else {
          $title = $titleAndSubtitle;
          $subtitle = null;
        }
        $numberOfLikes = get_post_meta ($post->ID, 'be_theme_likes');
        $numberOfLikes_ = $numberOfLikes[0] ?? 0;
        ?>

        <!-- Thumbnail /-->
        <?php if (function_exists ("has_post_thumbnail") && has_post_thumbnail () && $thumb) : ?>
          <?php
          $be_theme_check = get_post_meta ($post->ID, 'be_theme_check', true);
          if ($be_theme_check != 'yes') {
            echo '<div class="post-thumbnail tie_check  tie-appear" >';
          } else {
            echo '<div class="post-thumbnail tie_book tie-appear" >';
          }
          ?>
          <a href="<?php the_permalink (); ?>" title="<?php the_title_attribute (); ?>">
            <img style="width: 66px;"
                 src="<?php echo tie_thumb_src ('tie-library_widget'); ?>"
                 alt="" class="tie-appear">
            <li class="fa overlay-icon"></li>
          </a>
          </div>
        <?php endif; ?>

        <li <?php tie_post_class (); ?>>

          <!-- Title /-->
          <h3 style="line-height: 1.34rem;margin-top: 15px;overflow: hidden; white-space: nowrap;text-overflow: ellipsis;">
            <a href="<?php the_permalink (); ?>" rel="bookmark"><?php echo $title; ?></a><br>
            <em><a href="<?php the_permalink (); ?>" rel="bookmark"><?php echo $subtitle; ?></a></em>
          </h3>

          <!-- Date /-->
          <?php if ($date) : ?>
            <span style="font-size: 0.99rem; line-height: 1.00rem; font-weight: 300;color: #888; margin: 7px 0;">
            <?php tie_get_time (); ?>
          </span>
            <br>
          <?php endif; ?>

          <!-- Views /-->
          <?php if ($views) : ?>
            <span class="post-views-widget"> <?php echo tie_views (); ?></span>
          <?php endif; ?>

        </li>
        <hr style="margin-top: 10px">
      
      <?php
      endwhile;
    endif;
    
    $post = $originalPost;
    wp_reset_query ();
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
  function getTotalsPosts ($term, $taxonomy): void
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
    $taxonomy_terms = get_terms ($arguments);
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
  add_filter ('manage_book_posts_columns', 'setBookPostsColumns');
  
  /**
   * Set columns for a post-type book
   *
   * @param $columns
   * @return array
   */
  function setBookPostsColumns ($columns): array
  {
    $columns = array();
    $columns['cb'] = __ ('cb');
    $columns['titleOfBook'] = __ ('Título');
    $columns['subtitleOfBook'] = __ ('Subtítulo');
    $columns['writer'] = __ ('Autor/es');
    $columns['editorial'] = __ ('Editorial');
    $columns['genre'] = __ ('Género/s');
    $columns['year'] = __ ('Año');
    $columns['country'] = __ ('País');
    $columns['pages'] = __ ('Páginas');
    $columns['state'] = __ ('Estado');
    $columns['extension'] = __ ('Formato');
    $columns['size'] = __ ('Tamaño');
    $columns['date'] = __ ('Fecha');
    $columns['views'] = __ ('Visitas');
    $columns['check'] = __ ('Verificado');
    return $columns;
  }
  
  /**
   * Fill book posts columns
   * ---------------------------------------------------------------------------------------------------------------
   */
  add_action ('manage_book_posts_custom_column', 'fillBookPostsColumns', 10, 2);
  
  /**
   * Fill book posts columns
   *
   * @param $columnName
   * @param $postId
   * @return void
   */
  function fillBookPostsColumns ($columnName, $postId): void
  {
    // We get all the values from each post
    $meta = get_post_meta ($postId);
    
    // Each column is traversed and the value is assigned
    switch ($columnName):
      
      case 'titleOfBook':
        $titleAndSubtitle = get_the_title ();
        $title = getTitle ($titleAndSubtitle);
        if (!$title) {
          $title = 'No registrado';
        }
        $url = get_admin_url () . 'post.php?post=' . $postId . '&action=edit';
        echo '<a href="' . $url . '" rel="bookmark">' . $title . '</a>';
        break;
      
      case 'subtitleOfBook':
        $titleAndSubtitle = get_the_title ();
        $subtitle = getSubtitle ($titleAndSubtitle);
        if (!$subtitle) {
          $subtitle = 'No registrado';
        }
        $url = get_admin_url () . 'post.php?post=' . $postId . '&action=edit';
        echo '<a href="' . $url . '" rel="bookmark">' . $subtitle . '</a>';
        break;
      
      case 'writer':
        $termList = false;
        if (get_the_terms ($postId, 'writer')) {
          $termList = get_the_terms ($postId, 'writer');
        }
        $types = '';
        echo '<ul>';
        if ($termList) {
          foreach ($termList as $termSingle) {
            $types .= $termSingle->slug . ', ';
            $typesz = rtrim ($types, ', ');
            $url = get_admin_url () . 'edit.php?writer=' . $typesz . '&post_type=book';
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
        if (get_the_terms ($postId, 'editorial')) {
          $termList = get_the_terms ($postId, 'editorial');
        }
        $types = '';
        echo '<ul>';
        if ($termList) {
          foreach ($termList as $termSingle) {
            $types .= $termSingle->slug . ', ';
            $typesz = rtrim ($types, ', ');
            $url = get_admin_url () . 'edit.php?editorial=' . $typesz . '&post_type=book';
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
        if (get_the_terms ($postId, 'genre')) {
          $termList = get_the_terms ($postId, 'genre');
        }
        $types = '';
        echo '<ul>';
        if ($termList) {
          foreach ($termList as $termSingle) {
            $types .= $termSingle->slug . ', ';
            $typesz = rtrim ($types, ', ');
            $url = get_admin_url () . 'edit.php?genre=' . $typesz . '&post_type=book';
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
        $year = get_post_meta ($postId, 'be_theme_year', true);
        if (!$year) {
          $year = 'No registrado';
        }
        echo $year;
        break;
      
      case 'country':
        $country = get_post_meta ($postId, 'be_theme_country', true);
        if (!$country) {
          echo 'No registrado';
        }
        echo $country;
        break;
      
      case 'pages':
        $pages = get_post_meta ($postId, 'be_theme_pages', true);
        if (!$pages) {
          echo 'No registrado';
        } else {
          echo $pages . ' págs.';
        }
        break;
      
      case 'state':
        $status = get_post_meta ($postId, 'be_theme_state', true);
        if (!$status) {
          echo 'No registrado';
        }
        echo $status;
        break;
      
      case 'kind':
        $metaKind = get_post_meta ($postId, 'be_theme_kind', true);
        $typeof = gettype ($metaKind);
        if (!$metaKind) {
          echo 'Dato no registrado';
        } else {
          if ($typeof == 'string') {
            echo $metaKind;
          } else {
            $kind = implode (" , ", $metaKind);
            echo $kind;
          }
        }
        break;
      
      case 'extension':
        $be_theme_file_extension = get_post_meta ($postId, 'be_theme_extension', true);
        if (!$be_theme_file_extension || $be_theme_file_extension == '') {
          echo 'No registrado';
        } else {
          $file_extension = implode (" , *.", $be_theme_file_extension);
          echo "*.";
          echo $file_extension;
        }
        break;
      
      case 'size':
        $size = get_post_meta ($postId, 'be_theme_size', true);
        if (!$size) {
          echo 'No disponible';
        } else {
          echo $size;
        }
        break;
      
      case 'date':
        the_time (get_option ('date_format'));
        break;
      
      case 'views':
        $views = get_post_meta ($postId, 'tie_views', true);
        if (!$views) {
          echo 'No disponible';
        } else {
          echo $views;
        }
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
  
  
  # --------------------------------------------------------------------------------------------------------------------
  # Sortable columns functions
  # --------------------------------------------------------------------------------------------------------------------
  
  /**
   * Register columns as sortable
   * ---------------------------------------------------------------------------------------------------------------
   */
  add_filter ('manage_edit-book_sortable_columns', 'registerColumnsAsSortable');
  
  /**
   * Register columns as sortable
   *
   * @param $columns
   * @return mixed
   */
  function registerColumnsAsSortable ($columns): mixed
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
    $columns['check'] = 'check';
    return $columns;
  }
  
  /**
   * Sort by quantity for the "Views" column
   * ---------------------------------------------------------------------------------------------------------------
   */
  add_action ('pre_get_posts', 'views_clauses');
  
  /**
   * Sort alphabetically for "Views" column
   *
   * @param $query
   * @return void
   */
  function views_clauses ($query): void
  {
    if (!is_admin () || !$query->is_main_query ()) {
      return;
    }
    if ('views' === $query->get ('orderby')) {
      $query->set ('orderby', 'meta_value');
      $query->set ('meta_key', 'tie_views');
      $query->set ('meta_type', 'numeric');
    }
  }
  
  /**
   * Sort alphabetically for "Author" column
   * ---------------------------------------------------------------------------------------------------------------
   */
  add_filter ('posts_clauses', 'writer_clauses', 10, 2);
  /**
   * Sort alphabetically for "Author" column
   *
   * @param $clauses
   * @param $wp_query
   * @return mixed
   */
  function writer_clauses ($clauses, $wp_query): mixed
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
      $clauses['orderby'] .= ('ASC' == strtoupper ($wp_query->get ('order'))) ? 'ASC' : 'DESC';
    }
    return $clauses;
  }
  
  /**
   * Sort alphabetically for "Editorial" column
   * ---------------------------------------------------------------------------------------------------------------
   */
  add_filter ('posts_clauses', 'editorial_clauses', 10, 2);
  
  /**
   * Sort alphabetically for "Editorial" column
   *
   * @param $clauses
   * @param $wp_query
   * @return mixed
   */
  function editorial_clauses ($clauses, $wp_query): mixed
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
      $clauses['orderby'] .= ('ASC' == strtoupper ($wp_query->get ('order'))) ? 'ASC' : 'DESC';
    }
    return $clauses;
  }
  
  /**
   * Sort alphabetically for "Genre" column
   * ---------------------------------------------------------------------------------------------------------------
   */
  add_filter ('posts_clauses', 'genre_clauses', 10, 2);
  
  /**
   * Sort alphabetically for "Genre" column.
   *
   * @param $clauses
   * @param $wp_query
   * @return mixed
   */
  function genre_clauses ($clauses, $wp_query): mixed
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
      $clauses['orderby'] .= ('ASC' == strtoupper ($wp_query->get ('order'))) ? 'ASC' : 'DESC';
    }
    return $clauses;
  }
  
  # --------------------------------------------------------------------------------------------------------------------
  
  
  # --------------------------------------------------------------------------------------------------------------------
  # Tiny MCE functions
  # --------------------------------------------------------------------------------------------------------------------
  
  /**
   * Add a custom buttons js script within the administration.
   * The order of the elements is which will be displayed in
   * the editor's button bar.
   *
   * @param $plugins
   * @return mixed
   */
  function tiny_mce_add_buttons ($plugins): mixed
  {
    $plugins['mytinymcebuttons'] = get_template_directory_uri () . '/library/js/tiny-mce.js';
    return $plugins;
  }
  
  /**
   * Register custom buttons in the "WordPress Editor" within
   * the administration.
   * The order of the elements is which
   * will be displayed in the editor's button bar.
   *
   * @param $buttons
   * @return array
   */
  function tiny_mce_register_buttons ($buttons): array
  {
    $newButtons = array(
      'btnTitle',
      'btnCredits',
      'btnReferences',
      'btnSummary',
      'btnMasonic'
    );
    return array_merge ($buttons, $newButtons);
  }
  
  add_action ('init', 'tiny_mce_new_buttons');
  
  /**
   * Add custom buttons previously registered.
   *
   * @return void
   */
  function tiny_mce_new_buttons (): void
  {
    add_filter ('mce_external_plugins', 'tiny_mce_add_buttons');
    add_filter ('mce_buttons', 'tiny_mce_register_buttons');
  }

# ----------------------------------------------------------------------------------------------------------------
