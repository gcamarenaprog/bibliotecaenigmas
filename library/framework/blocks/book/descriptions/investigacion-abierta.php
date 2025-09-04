<?php
  /**
   *  Template Name:      Biblioteca Enigmas
   *  Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   *  Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   *  Author:             Guillermo Camarena
   *  Author URL:         http://gcamarenaprog.com
   *  File name:          widget-books.php
   *  Description:        This file shows a widget of the books section.
   *  Date:               25-08-2025
   */
  /*
    Template: 			Biblioteca Enigmas
    Author: 				Guillermo Camarena
    Section: 				Books | Framework | Blocks | Book | Descriptions
    File name: 			investigacion-abierta.php
    Date: 					17-02-2025
    Description: 		This file contains the description of the investigacion-abierta section.
    */
?>

  <hr>
  <p>Relación de volumenes de esta colección:</p>
  <?php echo do_shortcode ('[wpdatatable id=89]'); ?>