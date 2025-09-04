<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/admin/
   * File name:          book.php
   * Description:        This file contains the functions for register and initialization of personalized taxonomies.
   * Date:               25-08-2025
   */
  
  add_action ('init', 'project_books_init');
  
  /**
   * Definition and initialization books taxonomy
   *
   * @return void
   */
  function project_books_init (): void
  {
    $labels = array(
      'name' => _x ('Libros', 'Post type general name', 'textdomain'),
      'singular_name' => _x ('Libro', 'Post type singular name', 'textdomain'),
      
      'menu_name' => _x ('Libros', 'Admin Menu text', 'textdomain'),
      'name_admin_bar' => _x ('Libro', 'New on Toolbar', 'textdomain'),
      
      'add_new' => _x ('Nuevo libro', 'textdomain'),
      'add_new_item' => __ ('Añadir nuevo libro', 'textdomain'),
      
      'new_item' => __ ('Nuevo libro', 'textdomain'),
      'edit_item' => __ ('Editar libro', 'textdomain'),
      'view_item' => __ ('Ver libro', 'textdomain'),
      'all_items' => __ ('Todas los libros', 'textdomain'),
      
      'search_items' => __ ('Buscar', 'textdomain'),
      'parent_item' => __ ('Parent libro', 'textdomain'),
      
      'not_found' => __ ('No se encontraron libros', 'textdomain'),
      'not_found_in_trash' => __ ('No hay libros en la papelera', 'textdomain'),
      
      'featured_image' => _x ('Imagen de portada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
      'set_featured_image' => _x ('Cargar imagen de portada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
      'remove_featured_image' => _x ('Quitar imagen de portada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
      'use_featured_image' => _x ('Usar como imágen de portad', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
      
      'archives' => _x ('Archivo de libros', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
      'insert_into_item' => _x ('Insertar en el libro', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
      'uploaded_to_this_item' => _x ('Cargado en este libro', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
      'filter_items_list' => _x ('Filtro de lista de libros', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
      'items_list_navigation' => _x ('Lista de navegación de libros', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
      'items_list' => _x ('Lista de libros', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
      
      'popular_items' => __ ('Libros más populares', 'libro', 'textdomain'),
      'update_item' => __ ('Actualizar libro', 'libro', 'textdomain'),
      'add_or_remove_items' => __ ('Añadir o eliminar libro', 'textdomain'),
      'parent_item_colon' => __ ('', 'textdomain'),
    );
    
    $arguments = array(
      'labels' => $labels,
      'description' => __ ('Descripción.', 'textdomain'),
      'public' => true,
      'publicly_queryable' => true,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 3,
      'menu_icon' => 'dashicons-book',
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'titulo',
        'editorial',
        'formato',
        'edicion',
        'ano',
        'pais',
        'idioma',
        'paginas',
        'tipo',
        'tamano',
        'compresion',
        'excerpt',
        'comments',
        'get_book',
        'check'
      )
    );
    
    /**
     * Register a new post-type
     */
    register_post_type ('book', $arguments);
    
    // Genre taxonomy definition labels
    $labels_genre = array(
      'name' => _x ('Géneros', 'nombre general taxonomia'),
      'singular_name' => _x ('Género', 'nombre singular taxonomia'),
      'search_items' => __ ('Buscar'),
      'all_items' => __ ('Todos los géneros'),
      'parent_item' => __ ('Género superior'),
      'parent_item_colon' => __ ('Género superior:'),
      'edit_item' => __ ('Editar género'),
      'update_item' => __ ('Actualizar género'),
      'add_new_item' => __ ('Añadir género'),
      'new_item_name' => __ ('Nuevo nombre de género'),
    );
    
    // Genre taxonomy register
    register_taxonomy ('genre', array('book'), array(
      'hierarchical' => true,
      'labels' => $labels_genre,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'genre'),
    ));
    
    // Writer taxonomy definition labels
    $labels_writer = array(
      'name' => _x ('Autores', 'nombre general taxonomia'),
      'singular_name' => _x ('Autor', 'nombre singular taxonomia'),
      'search_items' => __ ('Buscar'),
      'all_items' => __ ('Todos los autores'),
      'parent_item' => __ ('Autor superior'),
      'parent_item_colon' => __ ('Autor superior:'),
      'edit_item' => __ ('Editar autor'),
      'update_item' => __ ('Actualizar autor'),
      'add_new_item' => __ ('Añadir autor'),
      'new_item_name' => __ ('Nuevo nombre de autor'),
    );
    
    // Writer taxonomy register
    register_taxonomy ('writer', array('book'), array(
      'hierarchical' => true,
      'labels' => $labels_writer,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'writer'),
    ));
    
    // Editorial taxonomy definition labels
    $labels_editorial = array(
      'name' => _x ('Editoriales', 'nombre general taxonomia'),
      'singular_name' => _x ('Editorial', 'nombre singular taxonomia'),
      'search_items' => __ ('Buscar'),
      'all_items' => __ ('Todas las editoriales'),
      'parent_item' => __ ('Editorial superior'),
      'parent_item_colon' => __ ('Editorial superior:'),
      'edit_item' => __ ('Editar editorial'),
      'update_item' => __ ('Actualizar editorial'),
      'add_new_item' => __ ('Añadir editorial'),
      'new_item_name' => __ ('Nuevo nombre de editorial'),
    );
    
    // Editorial taxonomy register
    register_taxonomy ('editorial', array('book'), array(
      'hierarchical' => true,
      'labels' => $labels_editorial,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'editorial'),
    ));
  }