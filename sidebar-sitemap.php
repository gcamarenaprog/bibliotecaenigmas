<?php
  /*
  Template Name: 	Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Templates / Theme / Sidebar
  File name: 			sidebar-sitemap.php
  Date: 					13-05-2024
  Description: 		This file show the sitemap sidebar
  Note:           Refactored
  */
?>

<?php if (is_active_sidebar ('sidebar-sitemap')) : ?>
  <aside id="sidebar" class="sidebar">
    <?php dynamic_sidebar ('sidebar-sitemap'); ?>
  </aside>
<?php endif; ?>