<?php
/*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Blog | Grid
  File name: 			blockquote-day.php
  Date: 					04-06-2025
  Description: 		This file contains the blockquote day of the home page.
  Note:           Refactored
  */
?>

<?php
function getAuthorNameWithAuthorId_(int $authorId): array
{
  global $wpdb;
  return $wpdb->get_results("SELECT befrases_aut_name FROM  {$wpdb->prefix}befrases_aut	WHERE	befrases_aut_id = {$authorId}", ARRAY_A);
}

global $wpdb;
$listQuotes = $wpdb->get_results("SELECT * FROM  {$wpdb->prefix}befrases", ARRAY_A);
$author = '';
$quote = '';

# Get length array
$length = count($listQuotes);

# Get author and quote with randomize number
if ($length == 0) { // If there are no quotes.
  echo '<p style="text-align: center;">No hay frases para mostrar.</p>';
} elseif ($length == 1) { // If there is a quote.
  foreach ($listQuotes as $key => $value) {
    $quote = $value['befrases_quote'];
    $author = $value['befrases_author'];
    $authorExtra = $value['befrases_author_extra'];
    $nameOfAuthor = getAuthorNameWithAuthorId_($author);
    foreach ($nameOfAuthor as $key => $value) {
      $author = $value['befrases_aut_name'];
    }
  }
} else { // If there is one or more quotes
  $randomNumber = rand(0, $length - 1);
  foreach ($listQuotes as $key => $value) {
    if ($key == $randomNumber) {
      $quote = $value['befrases_quote'];
      $author = $value['befrases_author'];
      $authorExtra = $value['befrases_author_extra'];
      $nameOfAuthor = getAuthorNameWithAuthorId_($author);
      foreach ($nameOfAuthor as $key => $value) {
        $author = $value['befrases_aut_name'];
      }
    }
  }
}

# Prepare author extra information
if ($authorExtra == 'Sin información.') {
  $authorExtra = '';
} else {
  $authorExtra = ', ' . $authorExtra;
}
?>

<section>
  <div class="tb-head">
    <h1>= FRASE DEL DÍA =</h1>
  </div>
</section>

<section>
  <div class="tb-box">
    <blockquote>
      <p> "<?php echo $quote; ?>" <br><b>— <?php echo $author; ?><?php echo $authorExtra; ?> </b></p>
    </blockquote>
  </div>
</section>