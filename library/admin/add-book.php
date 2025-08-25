<?php
/*
    Template Name: 	Biblioteca Enigmas
    Author: 				Guillermo Camarena
    Section: 				Library / Framework / Admin 
    File name: 			add-book.php
    Date: 					29-04-2024
    Description: 		This file contains the functions for add custom meta.
  */
?>

<?php

/**
 * Add custom meta box on new book section
 *
 * @since  1.0.0
 * @access public
 * @return none
 */
function add_custom_meta_box()
{
	add_meta_box(
		'custom_meta_box', 				// $id
		'Biblioteca Enigmas', 		// $title 
		'show_custom_meta_box', 	// $callback
		'book', 									// $page
		'normal', 								// $context
		'high'										// $priority
	);
}
add_action('add_meta_boxes', 'add_custom_meta_box');


// Custom meta fields
$prefix = 'be_theme_';
$custom_meta_fields = array(

	// Information --------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-text',
		'title' 			=> 'Información',
		'label'				=> '',
		'description'	=> '',
		'id'					=> '',
		'name' 				=> '',
		'value' 			=> '',
		'placeholder'	=> '',
	),

	// 2. Verification ----------------------------------
	array(
		'icon'				=> 'dashicons dashicons-yes',
		'title' 			=> 'Verificar',
		'label'				=> 'Verificación del libro',
		'description'	=> 'Libro verificado, corregido y checado en disco duro.',
		'id'					=> $prefix . 'check',
		'name' 				=> $prefix . 'check',
		'value' 			=> 'yes',
		'placeholder'	=> '',
	),

	// 3. Views -----------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-visibility',
		'title' 			=> 'Visitas',
		'label'				=> 'Número de visitas',
		'description'	=> 'Número de visitas a la publicación.',
		'id'					=> 'tie_views',
		'name' 				=> 'tie_views',
		'value' 			=> '',
		'placeholder'	=> '0',
	),

	// 4. Likes -----------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-heart',
		'title' 			=> 'Me gusta',
		'label'				=> 'Número de "Me gusta"',
		'description'	=> 'Número de clics en el botón "Me gusta" de las publicaciones.',
		'id'					=> $prefix . 'likes',
		'name' 				=> $prefix . 'likes',
		'value' 			=> '',
		'placeholder'	=> '0',
	),

	// Data ----------------------------------------------
	// 5. Edition ----------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-book',
		'title' 			=> 'Datos',
		'label'				=> 'Edición',
		'description'	=> 'Número de edición del libro o contenido si aplica.',
		'id'					=> $prefix . 'edition',
		'name' 				=> $prefix . 'edition',
		'value' 			=> '',
		'placeholder'	=> '',
		'options' 		=> array('Desconocido', '1° Ed.', '2° Ed.', '3° Ed.', '4° Ed.', '4° Ed.', '5° Ed.', '6° Ed.', '7° Ed.', '8° Ed.', '9° Ed.', '10° Ed.', '11° Ed.', '12° Ed.', '13° Ed.', '14° Ed.', '15° Ed.', '16° Ed.', '17° Ed.', '18° Ed.', '19° Ed.', '20° Ed.', '21° Ed.', '22° Ed.', '23° Ed.', '24° Ed.', '25° Ed.', '26° Ed.', '27° Ed.', '28° Ed.', '29° Ed.', '30° Ed.', '31° Ed.', '32° Ed.', '33° Ed.', '34° Ed.', '35° Ed.', '36° Ed.', '37° Ed.', '38° Ed.', '39° Ed.', '40° Ed.'),
	),

	// 6. Year -------------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-book',
		'title' 			=> 'Datos',
		'label'				=> 'Año',
		'description'	=> 'Año de publicación del contenido.',
		'id'					=> $prefix . 'year',
		'name' 				=> $prefix . 'year',
		'value' 			=> '',
		'placeholder'	=> 'Año',
	),

	// 7. Country ----------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-book',
		'title' 			=> 'Datos',
		'label'				=> 'País',
		'description'	=> 'País de publicación del contenido.',
		'id'					=> $prefix . 'country',
		'name' 				=> $prefix . 'country',
		'value' 			=> '',
		'placeholder'	=> '',
		'options'	=> array('Desconocido', 'México', 'Argentina', 'Brasil', 'Chile', 'España', 'Estados Unidos', '- - - - - - - - - - - - - - - - -', 'Afghanistan', 'Alandia', 'Albania', 'Alemania', 'Algeria', 'Andorra', 'Angola', 'Anguilla', 'Antigua', 'Antilles', 'Arabia Saudita', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Banglades', 'Barbados', 'Belgica', 'Belice', 'Benin', 'Bermuda', 'Bielorrusia', 'Birmania', 'Blanco', 'Bolivia', 'Bosnia Herzegovina', 'Botsuana', 'Bouvet', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Butan', 'Camboya', 'Camerun', 'Canada', 'Cape Verde', 'Chad', 'China', 'Chipre', 'Colombia', 'Comoras', 'Congo', 'Corea del Norte', 'Corea del Sur', 'Costa de Marfil', 'Costa Rica', 'Croacia', 'Cuba', 'Curacao', 'Czechoslovakia', 'Dinamarca', 'Djibuti', 'Dominica', 'East Timor', 'Ecuador', 'Egipto', 'El Salvador', 'Emiratos Arabes Unidos', 'Eritrea', 'Escocia', 'Eslovenia', 'Estonia', 'Etiopia', 'Europa', 'Falklands', 'Fidji', 'Filipinas', 'Finlandia', 'Francia', 'Gabon', 'Gales', 'Gambia', 'Georgia', 'Ghana', 'Gibraltar', 'Gran Bretania', 'Grecia', 'Grenada', 'Groenlandia', 'Guam', 'Guatemala', 'Guinea', 'Guinea Bissau', 'Guinea Equatorial', 'Guyana', 'Haiti', 'Holanda', 'Honduras', 'Hong Kong', 'Hungria', 'India', 'Indonesia', 'Inglaterra', 'Iran', 'Iraq', 'Irlanda', 'Isla de Pascuas', 'Islandia', 'Isla Norfolk', 'Islas Caiman', 'IslasCocos', 'Islas Cook', 'Islas Faroe', 'Islas Georgias', 'Islas Marianas', 'Islas Marshall', 'Islas Salomon', 'Islas Virginias', 'Israel', 'Italia', 'Jamaica', 'Japon', 'Jordania', 'Kazajstan', 'Kenia', 'Kirguistan', 'Kiribati', 'Kuwait', 'Laos', 'Lesotho', 'Letonia', 'Libano', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburgo', 'Macao', 'Macedonia', 'Madagascar', 'Malasia', 'Malawi', 'Maldivas', 'Mali', 'Malta', 'Marruecos', 'Mauricio', 'Mauritania', 'Micronesia', 'Moldavia', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Mozambique', 'Namibia', 'Nauru', 'Negro', 'Nepal', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Noruega', 'Nueva Zelanda', 'Oman', 'Pakistan', 'Palau', 'Palestina', 'Panama', 'Paraguay', 'Peru', 'Polonia', 'Portugal', 'Puerto Rico', 'Qatar', 'Reino Unido', 'Republica Centroafricana', 'Republica Checa', 'Republica Dominicana', 'Republica Eslovaca', 'Romania', 'Ruanda', 'Rusia', 'Saint Kitts', 'Samoa', 'Samoa Americana', 'San Marino', 'Santa Helena', 'Santa Lucia', 'San Vincente', 'Sao Tome', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leona', 'Singapur', 'Siria', 'Somalia', 'Sri Lanka', 'Sudafrica', 'Sudan', 'Suecia', 'Suiza', 'Suriname', 'Swazilandia', 'Tailandia', 'Taiwan', 'Tanzania', 'Tayikistan', 'Tenerife', 'Togo', 'Tokelau', 'Tonga', 'Trinidad y Tobago', 'Tunez', 'Turkmenistan', 'Turquia', 'Tuvalu', 'Ucrania', 'Uganda', 'Union Sovietica', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vaticano', 'Venezuela', 'Vietnam', 'Yemen', 'Yugoslavia', 'Zaire', 'Zambia', 'Zimbabwe')
	),

	// 8. Language ---------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-book',
		'title' 			=> 'Datos',
		'label'				=> 'Idioma',
		'description'	=> 'Idioma del contenido.',
		'id'					=> $prefix . 'language',
		'name' 				=> $prefix . 'language',
		'value' 			=> '',
		'placeholder'	=> '',
		'options' 	=> array('Español', 'Inglés', 'Portugués', 'Latín', 'Francés', 'Alemán', 'Otro idioma'),
	),

	// 9. Pages ------------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-book',
		'title' 			=> 'Datos',
		'label'				=> 'Páginas',
		'description'	=> 'Número de páginas del libro si aplica.',
		'id'					=> $prefix . 'pages',
		'name' 				=> $prefix . 'pages',
		'value' 			=> '',
		'placeholder'	=> '0',
	),

	// 10. State -----------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-book',
		'title' 			=> 'Datos',
		'label'				=> 'Estado',
		'description'	=> 'Estado de la colección o contenido individual.',
		'id'					=> $prefix . 'state',
		'name' 				=> $prefix . 'state',
		'value' 			=> '',
		'placeholder'	=> 'Estado',
		'options' 		=> array('Desconocido', 'Completo', 'Incompleto'),
	),

	// Properties ----------------------------------------
	// 10. Kind-------------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-edit-page',
		'title' 			=> 'Propiedades',
		'label'				=> 'Clasificación digital',
		'description'	=> 'Clasificación digital del contenido.',
		'id'					=> $prefix . 'kind',
		'name' 				=> $prefix . 'kind',
		'value' 			=> '',
		'placeholder'	=> '',
	),

	// 11. Digitization ----------------------------------
	array(
		'icon'				=> 'dashicons dashicons-edit-page',
		'title' 			=> 'Propiedades',
		'label'				=> 'Digitalización',
		'description'	=> 'Tipo de digitalización del contenido.',
		'id'					=> $prefix . 'digitization',
		'name' 				=> $prefix . 'digitization',
		'value' 			=> '',
		'placeholder'	=> '',
	),

	// 12. Extension -------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-edit-page',
		'title' 			=> 'Propiedades',
		'label'				=> 'Formato de archivo',
		'description'	=> 'Formato del archivo digital: *.pdf, *.epub, *.docx, *.mobi, , *.lit, *.djvu, *.txt, *.mp3, *.mp4, *.m4a, *.avi, *.flv, desconocido o no aplica.',
		'id'					=> $prefix . 'extension',
		'name' 				=> $prefix . 'extension',
		'value' 			=> '',
		'placeholder'	=> '',
	),

	// 13. Size ------------------------------------------
	array(
		'icon'				=> 'dashicons dashicons-edit-page',
		'title' 			=> 'Propiedades',
		'label'				=> 'Tamaño de archivo',
		'description'	=> 'Tamaño del archivo digital en disco: Bytes, KB, MB, GB ≈.',
		'id'					=> $prefix . 'size',
		'name' 				=> $prefix . 'size',
		'value' 			=> '',
		'placeholder'	=> '0.00 KB',
	),
);

/**
 * Show custom meta box
 *
 * @since  1.0.0
 * @access public
 * @return none
 */
function show_custom_meta_box()
{
	global $custom_meta_fields, $post, $field;

	// Use nonce for verification
	echo '<input type="hidden" name="custom_meta_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';
?>

	<div class="inside">
		<div id="taxonomy-category" class="categorydiv">

			<!-- Title tabs /-->
			<ul id="category-tabs" class="category-tabs">

				<li class="">
					<a href="#information-tab">
						<i class="<?php echo $custom_meta_fields[0]['icon']; ?>"></i>
						<span class="label bea-title"><?php echo $custom_meta_fields[0]['title']; ?></span>
					</a>
				</li>

				<li class="hide-if-no-js tabs">
					<a href="#verification-views-likes-tab">
						[<i class="<?php echo $custom_meta_fields[1]['icon']; ?>"></i>
						<span class="label bea-title"><?php echo $custom_meta_fields[1]['title']; ?> |</span>
						<i class="<?php echo $custom_meta_fields[2]['icon']; ?>"></i>
						<span class="label bea-title"><?php echo $custom_meta_fields[2]['title']; ?> |</span>
						<i class="<?php echo $custom_meta_fields[3]['icon']; ?>"></i>
						<span class="label bea-title"><?php echo $custom_meta_fields[3]['title']; ?></span>]
					</a>
				</li>

				<li class="hide-if-no-js tabs">
					<a href="#data-tab">
						<i class="<?php echo $custom_meta_fields[4]['icon']; ?>"></i>
						<span class="label bea-title"><?php echo $custom_meta_fields[4]['title']; ?></span>
					</a>
				</li>

				<li class="hide-if-no-js tabs">
					<a href="#properties-tab">
						<i class="dashicons dashicons-edit-page"></i>
						<span class="label bea-title"><?php echo $custom_meta_fields[11]['title']; ?></span>
					</a>
				</li>

			</ul>

			<!-- Information tab content -->
			<div id="information-tab" class="tabs-panel" style="max-height: 100%;padding-top: 10px;padding-bottom: 10px;">

				<section>
					<div class="bea-tab-box-content">
						<ul>
							<li style="list-style-type: none;">
								<ul>
									<li><b>Especificaciones para el título</b></li>
									<li class="information"> El nombre del título se toma del campo título de la publicación.</li>
									<li class="information"> Si el nombre del libro tiene título y subtítulo, separar con el caracter <b>"|"</b>.</li>
									<li class="information"> Ejemplo: Los OVNIS en México <b>|</b> Una realidad que pocos conocen</li>
								</ul>
							</li>
						</ul>
					</div>
				</section>

				<section>
					<div class="bea-tab-box-content" style="margin-bottom: 1em;">
						<ul>
							<li style="list-style-type: none;">
								<ul>
									<li><b>Especificaciones para el título</b></li>
									<li class="information">Dimensiones: 300px x 470px
									<li class="information">Calidad: Comprensión 90%
									<li class="information">Formato: *.jpg
								</ul>
							</li>
						</ul>
					</div>
				</section>

			</div>

			<!-- Verification / Views / Likes tab content -->
			<div id="verification-views-likes-tab" class="tabs-panel" style="max-height: 100%;padding-top: 10px;padding-bottom: 10px; display:none;">
				<form method="post" action="' . $_SERVER['PHP_SELF'] . '">

					<section>
						<div class="bea-tab-box-content">

							<?php if ($custom_meta_fields[1]['id'] == 'be_theme_check') : ?>

								<?php
								$field = $custom_meta_fields[1];
								$valueMetaVerification = get_post_meta($post->ID, $field['id'], true);
								?>

								<ul>
									<li><b><?php echo $custom_meta_fields[1]['label']; ?></b></li>
									<li>
										<label class="selectit">
											<input value="<?php echo $field['value']; ?>" type="checkbox" name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" <?php if ($valueMetaVerification == "yes") {
																																																																													echo "checked";
																																																																												} else {
																																																																												} ?>>
											<?php if ($valueMetaVerification == "yes") : ?>
												<em style="color: green;">
													¡Este libro está verificado!
												</em>
											<?php else : ?>
												<em style="color: red;">
													¡Este libro no está verificado!
												</em>
											<?php endif; ?>
										</label>
									</li>
									<li>
										<em>
											<?php echo $field['description']; ?>
										</em>
									</li>
								</ul>

							<?php endif; ?>

						</div>
					</section>

					<section>
						<div class="bea-tab-box-content">

							<?php
							$field = $custom_meta_fields[2];
							$valueMetaViews = get_post_meta($post->ID, $field['id'], true);

							if (($valueMetaViews != null) || ($valueMetaViews == '')) {
								$placeholder = '0';
							} else {
								$placeholder = '';
							}
							?>

							<ul>
								<li><b><?php echo $field['label']; ?></b></li>
								<li>
									<input type="text" style="text-align:left;max-width: 100%;width: 100%;" name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" value="<?php echo $valueMetaViews; ?>" placeholder="<?php echo $field['placeholder']; ?>">
								</li>
								<li>
									<em>
										<?php echo $field['description']; ?>
									</em>
								</li>
								<ul>

						</div>
					</section>

					<section>
						<div class="bea-tab-box-content">

							<?php
							$field = $custom_meta_fields[3];
							$valueMetaLikes = get_post_meta($post->ID, $field['id'], true);

							if (($valueMetaLikes != null) || ($valueMetaLikes == '')) {
								$placeholder = '0';
							} else {
								$placeholder = '';
							}
							?>
							<ul>
								<li><b><?php echo $field['label']; ?></b></li>
								<li>
									<input type="text" style="text-align:left;max-width: 100%;width: 100%;" name="<?php echo $field['name']; ?>" id="<?php echo $field['id']; ?>" value="<?php echo $valueMetaLikes; ?>" placeholder="<?php echo $placeholder; ?>">
								</li>
								<li>
									<em>
										<?php echo $field['description']; ?>
									</em>
								</li>
								<ul>

						</div>
					</section>

					<section>
						<div style="text-align: left; margin: 1em;">
							<button type="submit" class="edit-slug button button-small hide-if-no-js">Actualizar</button>
						</div>
					</section>

				</form>
			</div>

			<!-- Data tab content -->
			<div id="data-tab" class="tabs-panel" style="max-height: 100%;padding-top: 10px;padding-bottom: 10px;display:none;">

				<section>
					<div class="bea-tab-box-content">

						<?php
						$field = $custom_meta_fields[4];
						$valueMetaEdition = get_post_meta($post->ID, $field['id'], true);
						?>
						<ul>
							<li><b><?php echo $field['label']; ?></b></li>
							<li>
								<select class="form-select" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>" aria-label="Default select example" style="max-width: 100%;width: 100%;">';
									<?php foreach ($field['options'] as $option) {
										echo '<option', $valueMetaEdition == $option ? ' selected="selected"' : '', ' value="' . $option . '">' . $option . '</option>';
									} ?>
								</select>
							</li>
							<li>
								<em>
									<?php echo $field['description']; ?>
								</em>
							</li>
							<ul>

					</div>
				</section>

				<section>
					<div class="bea-tab-box-content">

						<?php
						$field = $custom_meta_fields[5];
						$valueMetaLikes = get_post_meta($post->ID, $field['id'], true);

						if (($valueMetaLikes != null) || ($valueMetaLikes == '')) {
							$placeholder = '0';
						} else {
							$placeholder = '';
						}
						?>
						<ul>
							<li><b><?php echo $field['label']; ?></b></li>
							<li>
								<input type="text" style="text-align:left;max-width: 100%;width: 100%;" name="<?php echo $field['name']; ?>" id="<?php echo $field['id']; ?>" value="<?php echo $valueMetaLikes; ?>" placeholder="<?php echo $placeholder; ?>">
							</li>
							<li>
								<em>
									<?php echo $field['description']; ?>
								</em>
							</li>
							<ul>

					</div>
				</section>

				<section>
					<div class="bea-tab-box-content">

						<?php
						$field = $custom_meta_fields[6];
						$valueMetaEdition = get_post_meta($post->ID, $field['id'], true);
						?>
						<ul>
							<li><b><?php echo $field['label']; ?></b></li>
							<li>
								<select class="form-select" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>" aria-label="Default select example" style="max-width: 100%;width: 100%;">';
									<?php foreach ($field['options'] as $option) {
										echo '<option', $valueMetaEdition == $option ? ' selected="selected"' : '', ' value="' . $option . '">' . $option . '</option>';
									} ?>
								</select>
							</li>
							<li>
								<em>
									<?php echo $field['description']; ?>
								</em>
							</li>
							<ul>

					</div>
				</section>

				<section>
					<div class="bea-tab-box-content">

						<?php
						$field = $custom_meta_fields[7];
						$valueMetaEdition = get_post_meta($post->ID, $field['id'], true);
						?>
						<ul>
							<li><b><?php echo $field['label']; ?></b></li>
							<li>
								<select class="form-select" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>" aria-label="Default select example" style="max-width: 100%;width: 100%;">';
									<?php foreach ($field['options'] as $option) {
										echo '<option', $valueMetaEdition == $option ? ' selected="selected"' : '', ' value="' . $option . '">' . $option . '</option>';
									} ?>
								</select>
							</li>
							<li>
								<em>
									<?php echo $field['description']; ?>
								</em>
							</li>
							<ul>

					</div>
				</section>

				<section>
					<div class="bea-tab-box-content">

						<?php
						$field = $custom_meta_fields[8];
						$valueMetaLikes = get_post_meta($post->ID, $field['id'], true);

						if (($valueMetaLikes != null) || ($valueMetaLikes == '')) {
							$placeholder = '0';
						} else {
							$placeholder = '';
						}
						?>
						<ul>
							<li><b><?php echo $field['label']; ?></b></li>
							<li>
								<input type="text" style="text-align:left;max-width: 100%;width: 100%;" name="<?php echo $field['name']; ?>" id="<?php echo $field['id']; ?>" value="<?php echo $valueMetaLikes; ?>" placeholder="<?php echo $placeholder; ?>">
							</li>
							<li>
								<em>
									<?php echo $field['description']; ?>
								</em>
							</li>
							<ul>

					</div>
				</section>

				<section>
					<div class="bea-tab-box-content">

						<?php
						$field = $custom_meta_fields[9];
						$valueMetaEdition = get_post_meta($post->ID, $field['id'], true);
						?>
						<ul>
							<li><b><?php echo $field['label']; ?></b></li>
							<li>
								<select class="form-select" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>" aria-label="Default select example" style="max-width: 100%;width: 100%;">';
									<?php foreach ($field['options'] as $option) {
										echo '<option', $valueMetaEdition == $option ? ' selected="selected"' : '', ' value="' . $option . '">' . $option . '</option>';
									} ?>
								</select>
							</li>
							<li>
								<em>
									<?php echo $field['description']; ?>
								</em>
							</li>
							<ul>

					</div>
				</section>

			</div>

			<!-- Properties tab content -->
			<div id="properties-tab" class="tabs-panel" style="max-height: 100%;padding-top: 10px;padding-bottom: 10px;display:none;">

				<section>
					<div class="bea-tab-box-content">

						<?php
						$field = $custom_meta_fields[10];
						$valueMetaDigitization = get_post_meta($post->ID, $field['id']);
						$string = serialize($valueMetaDigitization);
						?>

						<ul>
							<li><b><?php echo $field['label']; ?></b></li>

							<li>
								<?php
								if ($result = str_contains($string, 'eBook')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="eBook" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">eBook</label>

								<?php
								if ($result = str_contains($string, 'Audiolibro')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Audiolibro" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Audiolibro</label>

								<?php
								if ($result = str_contains($string, 'Película')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Película" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Película</label>
							</li>

							<li>
								<?php
								if ($result = str_contains($string, 'Programa de TV')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Programa de TV" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Programa de TV</label>

								<?php
								if ($result = str_contains($string, 'Serie de TV')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Serie de TV" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Serie de TV</label>

								<?php
								if ($result = str_contains($string, 'Pódcast')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Pódcast" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Pódcast</label>
							</li>

							<li>
								<?php
								if ($result = str_contains($string, 'Programa de radio')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Programa de radio" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Programa de radio</label>

								<?php
								if ($result = str_contains($string, 'Streaming')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Streaming" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Streaming</label>

								<?php
								if ($result = str_contains($string, 'No clasificable')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="No clasificable" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">No clasificable</label>

								<?php
								if ($result = str_contains($string, 'Otro')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Otro" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Otro</label>

							</li>

							<li>
								<em>
									<?php echo $field['description']; ?>
								</em>
							</li>
						</ul>

					</div>
				</section>

				<section>
					<div class="bea-tab-box-content">

						<?php
						$field = $custom_meta_fields[11];
						$valueMetaExtension = get_post_meta($post->ID, $field['id']);
						$string = serialize($valueMetaExtension);
						?>

						<ul>
							<li><b><?php echo $field['label']; ?></b></li>

							<li>
								<?php
								if ($result = str_contains($string, 'Texto plano')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Texto plano" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Texto plano</label>

								<?php
								if ($result = str_contains($string, 'Escaneo (OCR)')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Escaneo (OCR)" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Escaneo (OCR)</label>

								<?php
								if ($result = str_contains($string, 'Escaneo(imágenes)') || $result = str_contains($string, 'Escaneo (imágenes)')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Escaneo (imágenes)" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Escaneo (imágenes)</label>
								
								<?php
								if ($result = str_contains($string, 'Imágenes') || $result = str_contains($string, 'Imágenes')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Imágenes" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Imágenes</label>
							</li>
							<li>
								<?php
								if ($result = str_contains($string, 'Fotografías del libro') || $result = str_contains($string, 'Fotografiado')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Fotografiado" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Fotografiado</label>

								<?php
								if ($result = str_contains($string, 'Interactivo')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Interactivo" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Interactivo</label>

								<?php
								if ($result = str_contains($string, 'Audio')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Audio" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Audio</label>

							</li>
							<li>
								<?php
								if ($result = str_contains($string, 'Texto a Voz') || $result = str_contains($string, 'Texto a voz')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Texto a voz" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Texto a Voz</label>

								<?php
								if ($result = str_contains($string, 'Otro tipo')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Otro tipo" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Otro tipo</label>

								<?php
								if ($result = str_contains($string, 'No aplica')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="No aplica" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">No aplica</label>

								<?php
								if ($result = str_contains($string, 'Desconocido')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Desconocido" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Desconocido</label>

							</li>

							<li>
								<em>
									<?php echo $field['description']; ?>
								</em>
							</li>
						</ul>

					</div>
				</section>

				<section>
					<div class="bea-tab-box-content">

						<?php
						$field = $custom_meta_fields[12];
						$valueMetaExtension = get_post_meta($post->ID, $field['id']);
						$string = serialize($valueMetaExtension);
						?>

						<ul>
							<li><b><?php echo $field['label']; ?></b></li>
							<li>
								<?php
								if ($result = str_contains($string, 'pdf')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="pdf" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.pdf</label>

								<?php
								if ($result = str_contains($string, 'epub')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="epub" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.epub</label>

								<?php
								if ($result = str_contains($string, 'docx') || $result = str_contains($string, 'rtf')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="docx" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.docx</label>

								<?php
								if ($result = str_contains($string, 'mobi')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="mobi" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.mobi</label>

								<?php
								if ($result = str_contains($string, 'lit')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="lit" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.lit</label>

								<?php
								if ($result = str_contains($string, 'djvu')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="djvu" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.djvu</label>

								<?php
								if ($result = str_contains($string, 'txt')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="txt" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.txt</label>
							</li>
							<li>
								<?php
								if ($result = str_contains($string, 'mp3')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="mp3" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.mp3</label>

								<?php
								if ($result = str_contains($string, 'mp4')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="mp4" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.mp4</label>

								<?php
								if ($result = str_contains($string, 'm4a')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="m4a" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.m4a</label>

								<?php
								if ($result = str_contains($string, 'avi')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="avi" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.avi</label>

								<?php
								if ($result = str_contains($string, 'flv')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="flv" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">*.flv</label>

								<?php
								if ($result = str_contains($string, 'Desconocido') || $result = str_contains($string, '???') || $result = str_contains($string, 'html')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="Desconocido" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">Desconocido</label>


								<?php
								if ($result = str_contains($string, 'No aplica') || $result = str_contains($string, '???')) {
									$checked = "checked";
								} else {
									$checked = ' ';
								} ?>
								<input type="checkbox" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>[]" value="No aplica" <?php echo $checked; ?>>
								<label for="inlineCheckbox1" style="margin-right: 15px;">No aplica</label>

							</li>

							<li>
								<em>
									<?php echo $field['description']; ?>
								</em>
							</li>
						</ul>

					</div>
				</section>

				<section>
					<div class="bea-tab-box-content">

						<?php
						$field = $custom_meta_fields[13];
						$valueMetaSize = get_post_meta($post->ID, $field['id'], true);

						if (($valueMetaSize != null) || ($valueMetaSize == '')) {
							$placeholder = '0';
						} else {
							$placeholder = '';
						}
						?>
						<ul>
							<li><b><?php echo $field['label']; ?></b></li>
							<li>
								<input type="text" style="text-align:left;max-width: 100%;width: 100%;" name="<?php echo $field['name']; ?>" id="<?php echo $field['id']; ?>" value="<?php echo $valueMetaSize; ?>" placeholder="<?php echo $placeholder; ?>">
							</li>
							<li>
								<em>
									<?php echo $field['description']; ?>
								</em>
							</li>
							<ul>

					</div>
				</section>

			</div>

		</div>
	</div>

<?php } ?>


<?php

/**
 * Save custom data
 *
 * @since  1.0.0
 * @access public
 * @return none
 */
function save_custom_meta($post_id)
{
	global $custom_meta_fields;

	// Check nonce
	if (
		!isset($_POST['custom_meta_box_nonce'])
		|| !wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))
	)

		return $post_id;

	// Autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $post_id;

	//Check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id))
			return $post_id;
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}

	// Loop through the fields and save the information
	$new = $_POST['tie_views'];
	update_post_meta($post_id, 'tie_views', $new);

	foreach ($custom_meta_fields as $field) {

		if ($field['type'] == 'tax_select') continue;
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];

		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

	// Save the taxonomies 	
	$category = $_POST['category'];
	wp_set_object_terms($post_id, $category, 'category');
}
add_action('save_post', 'save_custom_meta');
