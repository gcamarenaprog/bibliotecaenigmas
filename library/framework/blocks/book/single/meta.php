<?php
/**
 * Template Name:      Biblioteca Enigmas
 * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
 * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
 * Author:             Guillermo Camarena
 * Author URL:         http://gcamarenaprog.com
 * Path:               /library/framework/blocks/book/single/
 * File name:          meta.php
 * Description:        This file shows the header section of the single book page.
 * Date:               17-02-2026
 */
?>

<?php
$metaFullTitle = '';
$metaTitle = '';
$metaSubtitle = '';
$metaGenres = '';
$metaViews = '';

# Get title and subtitle
$metaFullTitle = get_the_title();
if (empty(!$metaFullTitle)) {
  $metaTitle = getTitle($metaFullTitle);
  $metaSubtitle = getSubtitle($metaFullTitle);
} else {
  $metaTitle = 'No asignado';
  $metaSubtitle = false;
}

# Get genres
$metaGenres = get_the_term_list($post->ID, 'genre', '', ', ', '');
if (!$metaGenres) {
  $metaGenres = 'Sin género';
}

# Get views
$text = __ti('Views');
$metaViews = tie_views($text);

?>

<section>
  <div class="tb-meta-box">

    <!-- Title /-->
    <h1>= <?php echo $metaTitle; ?> =</h1>

    <!-- Subtitle /-->
    <?php if ($metaSubtitle) : ?>
      <h2><?php echo $metaSubtitle; ?></h2>
    <?php endif; ?>

    <hr class="tb-meta">

    <!-- Meta /-->
    <p class="post-meta">

      <!-- Date /-->
      <?php tie_get_time() ?>

      <!-- Genres /-->
      <span><i class="fa-solid fa-arrow-down-a-z"></i><?php echo $metaGenres ?></span>

      <!-- Views /-->
      <?php echo $metaViews; ?>

    </p>

    <div class="clear"></div>

  </div>
</section>