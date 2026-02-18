<?php
/**
 * Template Name:      Biblioteca Enigmas
 * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
 * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
 * Author:             Guillermo Camarena
 * Author URL:         http://gcamarenaprog.com
 * Path:               /library/framework/blocks/book/single/
 * File name:          data.php
 * Description:        This file shows the data section of the single book page.
 * Date:               17-02-2026
 */
?>

<?php
global $post;

$metaFullTitle = '';
$metaTitle = '';
$metaSubtitle = '';

$metaWriter = '';
$metaPublisher = '';
$metaGenre = '';
$metaEdition = '';
$metaYear = '';
$metaCountry = '';
$metaLanguage = '';
$metaPages = '';
$metaState = '';
$metaClassification = '';
$metaType = '';
$metaExtension = '';
$metaSize = '';

$metaState = false;
$metaClassification = false;
$metaType = false;

$metaFullTitle = get_the_title();

// Get title and subtitle
if (empty(!$metaFullTitle)) {
  $metaTitle = getTitle($metaFullTitle);
  $metaSubtitle = getSubtitle($metaFullTitle);
} else {
  $metaTitle = 'No asignado';
  $metaSubtitle = false;
}

// Get writer
$metaWriter = get_the_term_list($post->ID, 'writer', '', ', ', '');
$metaWriterString = json_encode($metaWriter);
$hasNoApply = str_contains($metaWriterString, 'No aplica');
if (empty($metaWriter)) {
  $metaWriter = 'No asignado';
} else {
  if ($hasNoApply) {
    $metaWriter = false;
  }
}

// Get publisher
$metaPublisher = get_the_term_list($post->ID, 'editorial', '', ', ', '');
$metaPublisherString = json_encode($metaPublisher);
$hasNoApply = str_contains($metaPublisherString, 'No aplica');
if (empty($metaPublisher)) {
  $metaPublisher = 'No asignado';
} else {
  if ($hasNoApply) {
    $metaPublisher = false;
  }
}

// Get genre
$metaGenre = get_the_term_list($post->ID, 'genre', '', ', ', '');
if (empty($metaGenre)) {
  $metaGenre = 'No asignado';
}

// Get edition
$metaEdition = get_post_meta($post->ID, 'be_theme_edition', true);
if (empty($metaEdition)) {
  $metaEdition = 'No asignado';
} else {
  if ($metaEdition === 'No aplica') {
    $metaEdition = false;
  }
}

// Get year
$metaYear = get_post_meta($post->ID, 'be_theme_year', true);
if (empty($metaYear)) {
  $metaYear = 'No asignado';
}

// Get country
$metaCountry = get_post_meta($post->ID, 'be_theme_country', true);
if (empty($metaCountry)) {
  $metaCountry = 'No asignado';
} else {
  if ($metaCountry === 'No aplica') {
    $metaCountry = false;
  }
}

// Get language
$metaLanguage = get_post_meta($post->ID, 'be_theme_language', true);
if (empty($metaLanguage)) {
  $metaLanguage = 'No asignado';
} else {
  if ($metaLanguage === 'No aplica') {
    $metaLanguage = false;
  }
}

// Get pages
$metaPages = get_post_meta($post->ID, 'be_theme_pages', true);
if (empty($metaPages)) {
  $metaPages = 'No asignado';
} else {
  if ($metaPages === 'No aplica') {
    $metaPages = false;
  } else {
    $metaPages = $metaPages . ' pags.';
  }
}

// Get state
$metaState = get_post_meta($post->ID, 'be_theme_state', true);
if (empty($metaState)) {
  $metaState = 'No asignado';
} else {
  if ($metaState === 'No aplica') {
    $metaState = false;
  }
}

// Get classification
$metaClassification = get_post_meta($post->ID, 'be_theme_kind', true);
if (empty($metaClassification)) {
  $metaClassification = 'No asignado';
} else {
  $metaClassification = implode(", ", $metaClassification);
}

// Get type
$metaType = get_post_meta($post->ID, 'be_theme_digitization', true);
if (empty($metaType)) {
  $metaType = 'No asignado';
} else {
  $hasNoApply = str_contains(implode(", ", $metaType), 'No aplica');
  if ($hasNoApply) {
    $metaType = false;
  } else {
    $metaType = implode(", ", $metaType);
  }
}

// Get extension
$metaExtension = get_post_meta($post->ID, 'be_theme_extension', true);
if (empty($metaExtension)) {
  $metaExtension = 'No asignado';
} else {
  $hasNoApply = str_contains(implode(", ", $metaExtension), 'No aplica');
  if ($hasNoApply) {
    $metaExtension = false;
  } else {
    $metaExtension = implode(", ", $metaExtension);
  }
}

// Get size
$metaSize = get_post_meta($post->ID, 'be_theme_size', true);
if (empty($metaSize)) {
  $metaSize = 'No asignado';
} else {
  if ($metaSize === 'No aplica') {
    $metaSize = false;
  }
}

?>

<section>
  <div class="tb-book-data">

    <!-- Title /-->
    <hr class="tb-book-data">
    <span title="Título"><strong>Título: </strong><?php echo $metaTitle; ?></span>
    <hr class="tb-book-data">

    <!-- Subtitle /-->
    <?php if ($metaSubtitle) : ?>
      <span title="Subtítulo"><strong>Subtítulo: </strong><?php echo $metaSubtitle; ?></span>
      <hr class="tb-book-data">
    <?php endif; ?>

    <!-- Writer /-->
    <?php if ($metaWriter) : ?>
    <span title="Autor/es"><strong>Autor/es: </strong><?php echo $metaWriter; ?></span>
    <hr class="tb-book-data">
    <?php endif; ?>

    <!-- Publisher /-->
    <?php if ($metaPublisher) : ?>
    <span title="Editorial"> <strong>Editorial: </strong><?php echo $metaPublisher; ?></span>
    <hr class="tb-book-data">
    <?php endif; ?>

    <!-- Genre /-->
    <span title="Género"> <strong>Género/s: </strong><?php echo $metaGenre; ?></span>
    <hr class="tb-book-data">

    <!-- Edition /-->
    <?php if ($metaEdition) : ?>
      <span title="No. de edición"><strong>Edición: </strong><?php echo $metaEdition; ?></span>
      <hr class="tb-book-data">
    <?php endif; ?>

    <!-- Year /-->
    <span title="Año de publicación"><strong>Año: </strong><?php echo $metaYear; ?></span>
    <hr class="tb-book-data">

    <!-- Country /-->
    <?php if ($metaCountry) : ?>
      <span title="País de orígen"><strong>País: </strong><?php echo $metaCountry; ?></span>
      <hr class="tb-book-data">
    <?php endif; ?>

    <!-- Language /-->
    <?php if ($metaLanguage) : ?>
      <span title="Idioma"><strong>Idioma: </strong><?php echo $metaLanguage; ?></span>
      <hr class="tb-book-data">
    <?php endif; ?>

    <!-- Pages /-->
    <?php if ($metaPages) : ?>
      <span title="Número de páginas"><strong>Páginas: </strong><?php echo $metaPages; ?></span>
      <hr class="tb-book-data">
    <?php endif; ?>

    <!-- Status /-->
    <?php if ($metaState) : ?>
      <span title="Estado del libro"><strong>Estado: </strong><?php echo $metaState; ?></span>
      <hr class="tb-book-data">
    <?php endif; ?>

    <!-- Classification /-->
    <span title="Clasificación digital"><strong>Clasificación: </strong><?php echo $metaClassification; ?></span>
    <hr class="tb-book-data">

    <!-- Type /-->
    <?php if ($metaType) : ?>
    <span title="Tipo de digitalización"><strong>Tipo: </strong><?php echo $metaType; ?></span>
    <hr class="tb-book-data">
    <?php endif; ?>

    <!-- Extension /-->
    <?php if ($metaExtension) : ?>
      <span title="Extensión de archivo"><strong>Extensión: </strong><?php echo $metaExtension; ?></span>
      <hr class="tb-book-data">
    <?php endif; ?>

    <!-- Size /-->
    <?php if ($metaSize) : ?>
      <span title="Tamaño de archivo"><strong>Tamaño: </strong><?php echo $metaSize; ?></span>
      <hr class="tb-book-data">
    <?php endif; ?>

  </div>
  <div class="clear"></div>

</section>