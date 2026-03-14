<?php
  /*
  Template Name: 	Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Templates / Theme / Sidebar
  File name: 			sidebar-genres.php
  Date: 					29-06-2023
  Description: 		This file show the genres sidebar
  Changed:				Changed
  */
?>

<?php if (is_active_sidebar ('sidebar-genres')) : ?>
  <aside id="sidebar" class="sidebar">
    <?php dynamic_sidebar ('sidebar-genres'); ?>
  </aside>
<?php endif; ?>