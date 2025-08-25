<?php
/*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Book | Single
  File name: 			data.php
  Date: 					04-06-2025
  Description: 		This file contains the data book section.
  Note:           Refactored
  */
?>

<?php
$fullTitle = get_the_title();
$title = getTitle($fullTitle);
$subtitle = getSubtitle($fullTitle);
$metaState = false;
$metaKind = false;
$metaType = false;

$metaState = get_post_meta($post->ID, 'be_theme_state', true);
if (!$metaState) {
  $metaState = 'Dato no registrado';
}

$metaKind = get_post_meta($post->ID, 'be_theme_kind', true);
$typeof = gettype($metaKind);
if (!$metaKind) {
  $metaKind = 'Dato no registrado';
} else {
  if ($typeof == 'string') {
  } else {
    $kind = implode(" , ", $metaKind);
    $metaKind = $kind;
  }
}

$metaType = get_post_meta($post->ID, 'be_theme_digitization', true);
$typeof = gettype($metaType);
if (!$metaType) {
  $metaType = 'Dato no registrado';
} else {
  if ($typeof == 'string') {
  } else {
    $kind = implode(" , ", $metaType);
    $metaType = $kind;
  }
}

$be_theme_file_extension = get_post_meta($post->ID, 'be_theme_extension', true);
if ($be_theme_file_extension == '') {
  $file_extension = "*.pdf";
} else {
  $file_extension = implode(" , *.", $be_theme_file_extension);
  $file_extension = "*." . $file_extension;
}
?>

<section>
  <div class="tb-single-data">

    <!-- Title /-->
    <b>Título: </b><?php echo $title; ?>
    <hr>

    <!-- Subtitle /-->
    <?php if ($subtitle) : ?>
      <b>Subtítulo: </b><em><?php echo $subtitle; ?></em>
      <hr>
    <?php endif; ?>

    <!-- Writer /-->
    <b>Autor/es: </b><?php echo get_the_term_list($post->ID, 'writer', '', ', ', ''); ?>
    <hr>

    <!-- Editorial /-->
    <b>Editorial: </b><?php echo get_the_term_list($post->ID, 'editorial', '', ', ', ''); ?>
    <hr>

    <!-- Genre /-->
    <b>Género/s: </b><?php echo get_the_term_list($post->ID, 'genre', '', ', ', ''); ?>
    <hr>

    <!-- Edition /-->
    <b>Edición: </b><?php echo get_post_meta($post->ID, 'be_theme_edition', true); ?>
    <hr>

    <!-- Year /-->
    <b>Año: </b><?php echo get_post_meta($post->ID, 'be_theme_year', true); ?>
    <hr>

    <!-- Country /-->
    <b>País: </b><?php echo get_post_meta($post->ID, 'be_theme_country', true); ?>
    <hr>

    <!-- Language /-->
    <b>Idioma: </b><?php echo get_post_meta($post->ID, 'be_theme_language', true); ?>
    <hr>

    <!-- Pages /-->
    <b>Páginas: </b><?php echo get_post_meta($post->ID, 'be_theme_pages', true); ?> págs.
    <hr>

    <!-- Status /-->
    <b>Estado: </b><?php echo $metaState; ?>
    <hr>

    <!-- Classification /-->
    <b>Clasificación: </b><?php echo $metaKind; ?>
    <hr>

    <!-- Type /-->
    <b>Tipo: </b><?php echo $metaType; ?>
    <hr>

    <!-- Format /-->
    <b>Formato: </b><?php echo $file_extension; ?>
    <hr>

    <!-- Size /-->
    <b>Tamaño: </b><?php echo get_post_meta($post->ID, 'be_theme_size', true); ?>

  </div>
  <div class="clear"></div>

</section>