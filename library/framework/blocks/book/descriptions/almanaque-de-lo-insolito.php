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
    File name: 			blog.php
    Date: 					29-04-2024
    Description: 		This file contains the description of the almanaque-de-lo-insolito section.
    */
?>

  <p>
    <b>Almanaque de lo insólito</b>, fue una colección de 8 tomos lanzada en 1978 por
    la Editorial Grijalbo en España, cada tomo cuenta de entre 220 y 300 páginas,
    escrito bajo la dirección de Irving Wallace – David Wallechinsky, nos habla de datos,
    hechos y personajes que siempre despertaron nuestro interés, pero que nunca hemos podido
    conocer con detalle y precisión..
  </p>
  <p><b>Colección completa.</b></p>
  <p style="text-align: right;"><strong>07-07-2023</strong></p>
  <hr>
  <p>Relación de volumenes de esta colección:</p>
<?php echo do_shortcode ('[wpdatatable id=62]'); ?>