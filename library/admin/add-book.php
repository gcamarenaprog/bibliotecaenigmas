<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/admin/
   * File name:          add-book.php
   * Description:        This file contains the functions for add custom meta.
   * Date:               25-08-2025
   */
  
  
  /**
   * Add custom meta-box on new book section
   *
   * @return void
   */
  function add_custom_meta_box (): void
  {
    add_meta_box (
      'custom_meta_box',       // $id
      'Biblioteca Enigmas',    // $title
      'show_custom_meta_box',  // $callback
      'book',                  // $page
      'normal',                // $context
      'high'                   // $priority
    );
  }
  
  add_action ('add_meta_boxes', 'add_custom_meta_box');
  
  # Custom meta fields
  $prefix = 'be_theme_';
  $custom_meta_fields = array(
    
    # 0. Information
    array(
      'icon' => 'dashicons dashicons-text',
      'title' => 'Información',
      'label' => '',
      'description' => '',
      'id' => '',
      'name' => '',
      'value' => '',
      'placeholder' => '',
    ),
    
    # 1. Verification
    array(
      'icon' => 'dashicons dashicons-yes',
      'title' => 'Verificar',
      'label' => 'Verificación del libro',
      'description' => 'Libro verificado, corregido y checado en disco duro.',
      'id' => $prefix . 'check',
      'name' => $prefix . 'check',
      'value' => 'yes',
      'placeholder' => '',
    ),
    
    # 2. Views
    array(
      'icon' => 'dashicons dashicons-visibility',
      'title' => 'Visitas',
      'label' => 'Número de visitas',
      'description' => 'Número de visitas de la publicación.',
      'id' => 'tie_views',
      'name' => 'tie_views',
      'value' => '',
      'placeholder' => '0',
    ),
    
    # 3. Edition
    array(
      'icon' => 'dashicons dashicons-book',
      'title' => 'Datos',
      'label' => 'Edición',
      'description' => 'Número de edición del libro o contenido si aplica.',
      'id' => $prefix . 'edition',
      'name' => $prefix . 'edition',
      'value' => '',
      'placeholder' => '',
      'options' => array('Desconocido', '1° Ed.', '2° Ed.', '3° Ed.', '4° Ed.', '4° Ed.', '5° Ed.', '6° Ed.', '7° Ed.', '8° Ed.', '9° Ed.', '10° Ed.', '11° Ed.', '12° Ed.', '13° Ed.', '14° Ed.', '15° Ed.', '16° Ed.', '17° Ed.', '18° Ed.', '19° Ed.', '20° Ed.', '21° Ed.', '22° Ed.', '23° Ed.', '24° Ed.', '25° Ed.', '26° Ed.', '27° Ed.', '28° Ed.', '29° Ed.', '30° Ed.', '31° Ed.', '32° Ed.', '33° Ed.', '34° Ed.', '35° Ed.', '36° Ed.', '37° Ed.', '38° Ed.', '39° Ed.', '40° Ed.'),
    ),
    
    # 4. Year
    array(
      'icon' => 'dashicons dashicons-book',
      'title' => 'Datos',
      'label' => 'Año',
      'description' => 'Año de publicación del contenido.',
      'id' => $prefix . 'year',
      'name' => $prefix . 'year',
      'value' => '',
      'placeholder' => '0',
    ),
    
    # 5. Country
    array(
      'icon' => 'dashicons dashicons-book',
      'title' => 'Datos',
      'label' => 'País',
      'description' => 'País de publicación del contenido.',
      'id' => $prefix . 'country',
      'name' => $prefix . 'country',
      'value' => '',
      'placeholder' => '',
      'options' => array('Desconocido', 'México', 'Argentina', 'Brasil', 'Chile', 'España', 'Estados Unidos', '- - - - - - - - - - - - - - - - -', 'Afghanistan', 'Alandia', 'Albania', 'Alemania', 'Algeria', 'Andorra', 'Angola', 'Anguilla', 'Antigua', 'Antilles', 'Arabia Saudita', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Banglades', 'Barbados', 'Belgica', 'Belice', 'Benin', 'Bermuda', 'Bielorrusia', 'Birmania', 'Blanco', 'Bolivia', 'Bosnia Herzegovina', 'Botsuana', 'Bouvet', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Butan', 'Camboya', 'Camerun', 'Canada', 'Cape Verde', 'Chad', 'China', 'Chipre', 'Colombia', 'Comoras', 'Congo', 'Corea del Norte', 'Corea del Sur', 'Costa de Marfil', 'Costa Rica', 'Croacia', 'Cuba', 'Curacao', 'Czechoslovakia', 'Dinamarca', 'Djibuti', 'Dominica', 'East Timor', 'Ecuador', 'Egipto', 'El Salvador', 'Emiratos Arabes Unidos', 'Eritrea', 'Escocia', 'Eslovenia', 'Estonia', 'Etiopia', 'Europa', 'Falklands', 'Fidji', 'Filipinas', 'Finlandia', 'Francia', 'Gabon', 'Gales', 'Gambia', 'Georgia', 'Ghana', 'Gibraltar', 'Gran Bretania', 'Grecia', 'Grenada', 'Groenlandia', 'Guam', 'Guatemala', 'Guinea', 'Guinea Bissau', 'Guinea Equatorial', 'Guyana', 'Haiti', 'Holanda', 'Honduras', 'Hong Kong', 'Hungria', 'India', 'Indonesia', 'Inglaterra', 'Iran', 'Iraq', 'Irlanda', 'Isla de Pascuas', 'Islandia', 'Isla Norfolk', 'Islas Caiman', 'IslasCocos', 'Islas Cook', 'Islas Faroe', 'Islas Georgias', 'Islas Marianas', 'Islas Marshall', 'Islas Salomon', 'Islas Virginias', 'Israel', 'Italia', 'Jamaica', 'Japon', 'Jordania', 'Kazajstan', 'Kenia', 'Kirguistan', 'Kiribati', 'Kuwait', 'Laos', 'Lesotho', 'Letonia', 'Libano', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburgo', 'Macao', 'Macedonia', 'Madagascar', 'Malasia', 'Malawi', 'Maldivas', 'Mali', 'Malta', 'Marruecos', 'Mauricio', 'Mauritania', 'Micronesia', 'Moldavia', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Mozambique', 'Namibia', 'Nauru', 'Negro', 'Nepal', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Noruega', 'Nueva Zelanda', 'Oman', 'Pakistan', 'Palau', 'Palestina', 'Panama', 'Paraguay', 'Peru', 'Polonia', 'Portugal', 'Puerto Rico', 'Qatar', 'Reino Unido', 'Republica Centroafricana', 'Republica Checa', 'Republica Dominicana', 'Republica Eslovaca', 'Romania', 'Ruanda', 'Rusia', 'Saint Kitts', 'Samoa', 'Samoa Americana', 'San Marino', 'Santa Helena', 'Santa Lucia', 'San Vincente', 'Sao Tome', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leona', 'Singapur', 'Siria', 'Somalia', 'Sri Lanka', 'Sudafrica', 'Sudan', 'Suecia', 'Suiza', 'Suriname', 'Swazilandia', 'Tailandia', 'Taiwan', 'Tanzania', 'Tayikistan', 'Tenerife', 'Togo', 'Tokelau', 'Tonga', 'Trinidad y Tobago', 'Tunez', 'Turkmenistan', 'Turquia', 'Tuvalu', 'Ucrania', 'Uganda', 'Union Sovietica', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vaticano', 'Venezuela', 'Vietnam', 'Yemen', 'Yugoslavia', 'Zaire', 'Zambia', 'Zimbabwe')
    ),
    
    # 6. Language
    array(
      'icon' => 'dashicons dashicons-book',
      'title' => 'Datos',
      'label' => 'Idioma',
      'description' => 'Idioma del contenido.',
      'id' => $prefix . 'language',
      'name' => $prefix . 'language',
      'value' => '',
      'placeholder' => '',
      'options' => array('Español', 'Inglés', 'Portugués', 'Latín', 'Francés', 'Alemán', 'Otro idioma'),
    ),
    
    # 7. Pages
    array(
      'icon' => 'dashicons dashicons-book',
      'title' => 'Datos',
      'label' => 'Páginas',
      'description' => 'Número de páginas del libro si aplica.',
      'id' => $prefix . 'pages',
      'name' => $prefix . 'pages',
      'value' => '',
      'placeholder' => '0',
    ),
    
    # 8. State
    array(
      'icon' => 'dashicons dashicons-book',
      'title' => 'Datos',
      'label' => 'Estado',
      'description' => 'Estado de la colección o contenido individual.',
      'id' => $prefix . 'state',
      'name' => $prefix . 'state',
      'value' => '',
      'placeholder' => 'Estado',
      'options' => array('Desconocido', 'Completo', 'Incompleto'),
    ),
    
    # 8. Get a book
    array(
      'icon' => 'dashicons dashicons-book',
      'title' => 'Datos',
      'label' => 'Obtener libro',
      'description' => 'Enlace al sitio web para obtener el libro.',
      'id' => $prefix . 'get_book',
      'name' => $prefix . 'get_book',
      'value' => '',
      'placeholder' => '',
    ),
    
    # 9. Digital classification
    array(
      'icon' => 'dashicons dashicons-edit-page',
      'title' => 'Propiedades',
      'label' => 'Clasificación digital',
      'description' => 'Clasificación digital del contenido.',
      'id' => $prefix . 'kind',
      'name' => $prefix . 'kind',
      'value' => '',
      'placeholder' => '',
    ),
    
    # 10. Digital type
    array(
      'icon' => 'dashicons dashicons-edit-page',
      'title' => 'Propiedades',
      'label' => 'Tipo de digitalización',
      'description' => 'Tipo de digitalización del contenido.',
      'id' => $prefix . 'digitization',
      'name' => $prefix . 'digitization',
      'value' => '',
      'placeholder' => '',
    ),
    
    # 11. Extension
    array(
      'icon' => 'dashicons dashicons-edit-page',
      'title' => 'Propiedades',
      'label' => 'Extensión',
      'description' => 'Extensión del archivo digital: *.pdf, *.epub, *.docx, *.mobi, , *.lit, *.djvu, *.txt, *.mp3, *.mp4, *.m4a, *.avi, *.flv, desconocido o no aplica.',
      'id' => $prefix . 'extension',
      'name' => $prefix . 'extension',
      'value' => '',
      'placeholder' => '',
    ),
    
    # 12. Size file
    array(
      'icon' => 'dashicons dashicons-edit-page',
      'title' => 'Propiedades',
      'label' => 'Tamaño de archivo',
      'description' => 'Tamaño del archivo digital en disco: Bytes, KB, MB, GB ≈.',
      'id' => $prefix . 'size',
      'name' => $prefix . 'size',
      'value' => '',
      'placeholder' => '0.00 KB',
    ),
  );
  
  /**
   * Show custom meta-box for Biblioteca Enigmas
   *
   * @return void
   */
  function show_custom_meta_box (): void
  {
    global $custom_meta_fields, $post, $field;
    
    # Use nonce for verification
    echo '<input type="hidden" name="custom_meta_box_nonce" value="' . wp_create_nonce (basename (__FILE__)) . '" />';
    
    # Verification book field
    $bookVerificationMeta = $custom_meta_fields[1];
    $bookVerificationValue = get_post_meta ($post->ID, $bookVerificationMeta['id'], true);
    $bookVerificationChecked = ($bookVerificationValue == "yes") ? 'checked' : '';
    $bookVerificationText = ($bookVerificationValue == "yes") ? '<span class="bea-green">¡Este libro está verificado!</span>' : '<span class="bea-red"">¡Este libro no está verificado!</em>';
    
    # Numbers of views field
    $numbersOfViewsMeta = $custom_meta_fields[2];
    $numbersOfViewValue = get_post_meta ($post->ID, $numbersOfViewsMeta['id'], true);
    $numbersOfViewValue = (empty($numbersOfViewValue)) ? $numbersOfViewsMeta['placeholder'] : $numbersOfViewValue;
    
    # Edition field
    $editionMeta = $custom_meta_fields[3];
    $editionValue = get_post_meta ($post->ID, $editionMeta['id'], true);
    
    # Year field
    $yearMeta = $custom_meta_fields[4];
    $yearValue = get_post_meta ($post->ID, $yearMeta['id'], true);
    $yearValue = (empty($yearValue)) ? $yearMeta['placeholder'] : $yearValue;
    
    # Country field
    $countryMeta = $custom_meta_fields[5];
    $countryValue = get_post_meta ($post->ID, $countryMeta['id'], true);
    
    # Language field
    $languageMeta = $custom_meta_fields[6];
    $languageValue = get_post_meta ($post->ID, $languageMeta['id'], true);
    
    # Pages field
    $pagesMeta = $custom_meta_fields[7];
    $pagesValue = get_post_meta ($post->ID, $pagesMeta['id'], true);
    $pagesValue = (empty($pagesValue)) ? $pagesMeta['placeholder'] : $pagesValue;
    
    # State field
    $stateMeta = $custom_meta_fields[8];
    $stateValue = get_post_meta ($post->ID, $stateMeta['id'], true);
    
    # Get a book
    $getBookMeta = $custom_meta_fields[9];
    $getBookValue = get_post_meta ($post->ID, $getBookMeta['id'], true);
    $getBookValue = (empty($getBookValue)) ? $getBookMeta['placeholder'] : $getBookValue;
    
    # Digital classification
    $digitalClassificationMeta = $custom_meta_fields[10];
    $digitalClassificationValue = get_post_meta ($post->ID, $digitalClassificationMeta['id']);
    $digitalClassificationString = serialize ($digitalClassificationValue);
    
    $digitalClassificationEbook = (str_contains ($digitalClassificationString, 'eBook')) ? 'checked' : ' ';
    $digitalClassificationAudiolibro = (str_contains ($digitalClassificationString, 'Audiolibro')) ? 'checked' : ' ';
    $digitalClassificationPelicula = (str_contains ($digitalClassificationString, 'Película')) ? 'checked' : ' ';
    $digitalClassificationDocumental = (str_contains ($digitalClassificationString, 'Documental')) ? 'checked' : ' ';
    $digitalClassificationProgramaDeTV = (str_contains ($digitalClassificationString, 'Programa de TV')) ? 'checked' : ' ';
    $digitalClassificationSerieDeTv = (str_contains ($digitalClassificationString, 'Serie de TV')) ? 'checked' : ' ';
    $digitalClassificationPodcast = (str_contains ($digitalClassificationString, 'Pódcast')) ? 'checked' : ' ';
    $digitalClassificationProgramaDeRadio = (str_contains ($digitalClassificationString, 'Programa de radio')) ? 'checked' : ' ';
    $digitalClassificationStreaming = (str_contains ($digitalClassificationString, 'Streaming')) ? 'checked' : ' ';
    $digitalClassificationNoClasificable = (str_contains ($digitalClassificationString, 'No clasificable')) ? 'checked' : ' ';
    $digitalClassificationOtro = (str_contains ($digitalClassificationString, 'Otro')) ? 'checked' : ' ';
    
    # Digital format
    $digitalFormatMeta = $custom_meta_fields[11];
    $digitalFormatValue = get_post_meta ($post->ID, $digitalFormatMeta['id']);
    $digitalFormatString = serialize ($digitalFormatValue);
    
    $digitalFormatPlanText = (str_contains ($digitalFormatString, 'Texto plano')) ? 'checked' : ' ';
    $digitalFormatOCRScan = (str_contains ($digitalFormatString, 'Escaneo (OCR)')) ? 'checked' : ' ';
    $digitalFormatImagesScan = (str_contains ($digitalFormatString, 'Escaneo (imágenes)')) ? 'checked' : ' ';
    $digitalFormatImages = (str_contains ($digitalFormatString, 'Imágenes')) ? 'checked' : ' ';
    $digitalFormatPhotos = (str_contains ($digitalFormatString, 'Fotografiado')) ? 'checked' : ' ';
    $digitalFormatInteractive = (str_contains ($digitalFormatString, 'Interactivo')) ? 'checked' : ' ';
    $digitalFormatAudio = (str_contains ($digitalFormatString, 'Audio')) ? 'checked' : ' ';
    $digitalFormatVoiceToText = (str_contains ($digitalFormatString, 'Texto a voz')) ? 'checked' : ' ';
    $digitalFormatOther = (str_contains ($digitalFormatString, 'Otro tipo')) ? 'checked' : ' ';
    $digitalFormatNoApply = (str_contains ($digitalFormatString, 'No aplica')) ? 'checked' : ' ';
    $digitalFormatUnknown = (str_contains ($digitalFormatString, 'Desconocido')) ? 'checked' : ' ';
    
    # Extension
    $extensionMeta = $custom_meta_fields[12];
    $extensionValue = get_post_meta ($post->ID, $extensionMeta['id']);
    $extensionString = serialize ($extensionValue);
    
    $extensionPDF = (str_contains ($extensionString, '*.pdf')) ? 'checked' : ' ';
    $extensionEPUB = (str_contains ($extensionString, '*.epub')) ? 'checked' : ' ';
    $extensionDOCX = (str_contains ($extensionString, '*.docx')) ? 'checked' : ' ';
    $extensionMOBI = (str_contains ($extensionString, '*.mobi')) ? 'checked' : ' ';
    $extensionLIT = (str_contains ($extensionString, '*.lit')) ? 'checked' : ' ';
    $extensionDJVU = (str_contains ($extensionString, '*.djvu')) ? 'checked' : ' ';
    $extensionTXT = (str_contains ($extensionString, '*.txt')) ? 'checked' : ' ';
    $extensionMP3 = (str_contains ($extensionString, '*.mp3')) ? 'checked' : ' ';
    $extensionMP4 = (str_contains ($extensionString, '*.mp4')) ? 'checked' : ' ';
    $extensionM4A = (str_contains ($extensionString, '*.m4a')) ? 'checked' : ' ';
    $extensionAVI = (str_contains ($extensionString, '*.avi')) ? 'checked' : ' ';
    $extensionFLV = (str_contains ($extensionString, '*.flv')) ? 'checked' : ' ';
    $extensionOther = (str_contains ($extensionString, 'Otro')) ? 'checked' : ' ';
    $extensionUnknown = (str_contains ($extensionString, 'Desconocido')) ? 'checked' : ' ';
    $extensionNoApply = (str_contains ($extensionString, 'No aplica')) ? 'checked' : ' ';
    
    # File size field
    $fileSizeMeta = $custom_meta_fields[13];
    $fileSizeValue = get_post_meta ($post->ID, $fileSizeMeta['id'], true);
    $fileSizeValue = (empty($fileSizeValue)) ? $fileSizeMeta['placeholder'] : $fileSizeValue;
    
    ?>

    <div class="inside">

      <div id="taxonomy-category" class="categorydiv">

        <!-- Title tabs /-->
        <ul id="category-tabs" class="category-tabs">

          <!-- Information tab name /-->
          <li>
            <a href="#information-tab">
              <i class="<?php echo $custom_meta_fields[0]['icon']; ?>"></i>
              <span class="label bea-title"><?php echo $custom_meta_fields[0]['title']; ?></span>
            </a>
          </li>

          <!-- Verify and views tab name /-->
          <li class="hide-if-no-js tabs">
            <a href="#verification-views-tab">
              [<i class="<?php echo $custom_meta_fields[1]['icon']; ?>"></i>
              <span class="label bea-title"><?php echo $custom_meta_fields[1]['title']; ?> |</span>
              <i class="<?php echo $custom_meta_fields[2]['icon']; ?>"></i>
              <span class="label bea-title"><?php echo $custom_meta_fields[2]['title']; ?></span> ]
            </a>
          </li>

          <!-- Data tab name /-->
          <li class="hide-if-no-js tabs">
            <a href="#data-tab">
              <i class="<?php echo $custom_meta_fields[4]['icon']; ?>"></i>
              <span class="label bea-title"><?php echo $custom_meta_fields[4]['title']; ?></span>
            </a>
          </li>

          <!-- Properties tab name /-->
          <li class="hide-if-no-js tabs">
            <a href="#properties-tab">
              <i class="dashicons dashicons-edit-page"></i>
              <span class="label bea-title"><?php echo $custom_meta_fields[11]['title']; ?></span>
            </a>
          </li>

        </ul>

        <!-- Information tab /-->
        <div id="information-tab" class="tabs-panel bea-tabs-panel">

          <!-- Specifications for the title /-->
          <div class="bea-tab-box-information">
            <ul>
              <li class="bea-none">
                <ul>
                  <li>
                    <b>Especificaciones del título</b>
                  </li>
                  <li class="bea-information">
                    El nombre del título se toma del campo título de la publicación.
                  </li>
                  <li class="bea-information">
                    Si el nombre del libro tiene título y subtítulo, separar con el caracter <b>"|"</b>.
                  </li>
                  <li class="bea-information">
                    Ejemplo: Los OVNIS en México <b>|</b> Una realidad que pocos conocen.
                  </li>
                </ul>
              </li>
            </ul>
          </div>

          <!-- Specifications for the title /-->
          <div class="bea-tab-box-information last">
            <ul>
              <li class="bea-none">
                <ul>
                  <li><b>Especificaciones de la imagen</b></li>
                  <li class="bea-information">Dimensiones: 300px x 470px</li>
                  <li class="bea-information">Calidad: Comprensión 90%</li>
                  <li class="bea-information">Formato: *.jpg</li>
                </ul>
              </li>
            </ul>
          </div>

        </div>

        <!-- Verification and views tab /-->
        <div id="verification-views-tab" class="tabs-panel bea-tabs-panel-close">
          <form method="post" action="' . $_SERVER['PHP_SELF'] . '">

            <!-- Book verification /-->
            <div class="bea-tab-box-information">
              <ul>
                <li>
                  <b><?php echo $bookVerificationMeta['label']; ?></b>
                </li>
                <li>
                  <label>
                    <input value="<?php echo $bookVerificationMeta['value']; ?>"
                           type="checkbox"
                           name="<?php echo $bookVerificationMeta['id']; ?>"
                           id="<?php echo $bookVerificationMeta['id']; ?>"
                      <?php echo $bookVerificationChecked; ?>
                    >
                    <?php echo $bookVerificationText; ?>
                  </label>
                </li>
                <li>
                  <em><?php echo $bookVerificationMeta['description']; ?></em>
                </li>
              </ul>
            </div>

            <!-- Number of views /-->
            <div class="bea-tab-box-information last">
              <ul>
                <li>
                  <b><?php echo $numbersOfViewsMeta['label']; ?></b>
                </li>
                <li>
                  <input type="text"
                         class='bea-input-text'
                         name="<?php echo $numbersOfViewsMeta['id']; ?>"
                         id="<?php echo $numbersOfViewsMeta['id']; ?>"
                         value="<?php echo $numbersOfViewValue; ?>"
                         placeholder="<?php echo $numbersOfViewsMeta['placeholder']; ?>">
                </li>
                <li>
                  <em><?php echo $numbersOfViewsMeta['description']; ?></em>
                </li>
              </ul>
            </div>

            <!-- Update button /-->
            <div class="bea-button">
              <button type="submit"
                      title="Actualizar datos"
                      class="edit-slug button button-small hide-if-no-js">
                Actualizar
              </button>
            </div>

          </form>
        </div>

        <!-- Data tab /-->
        <div id="data-tab" class="tabs-panel bea-tabs-panel-close">

          <!-- Edition /-->
          <div class="bea-tab-box-information">
            <ul>
              <li>
                <b><?php echo $editionMeta['label']; ?></b>
              </li>
              <li>
                <select class="form-select bea-select"
                        id="<?php echo $editionMeta['id']; ?>"
                        name="<?php echo $editionMeta['name']; ?>"
                        aria-label="Default select example">';
                  <?php foreach ($editionMeta['options'] as $option) {
                    echo '<option', $editionValue == $option ? ' selected="selected"' : '', ' value="' . $option . '">' . $option . '</option>';
                  } ?>
                </select>
              </li>
              <li>
                <em><?php echo $editionMeta['description']; ?></em>
              </li>
            </ul>
          </div>

          <!-- Year /-->
          <div class="bea-tab-box-information">
            <ul>
              <li>
                <b><?php echo $yearMeta['label']; ?></b>
              </li>
              <li>
                <input type="text"
                       class='bea-input-text'
                       name="<?php echo $yearMeta['name']; ?>"
                       id="<?php echo $yearMeta['id']; ?>"
                       value="<?php echo $yearValue; ?>"
                       placeholder="<?php echo $yearValue; ?>">
              </li>
              <li>
                <em><?php echo $yearMeta['description']; ?></em>
              </li>
            </ul>
          </div>

          <!-- Country /-->
          <div class="bea-tab-box-information">
            <ul>
              <li>
                <b><?php echo $countryMeta['label']; ?></b>
              </li>
              <li>
                <select class="form-select bea-select"
                        id="<?php echo $countryMeta['id']; ?>"
                        name="<?php echo $countryMeta['name']; ?>"
                        aria-label="Default select example">';
                  <?php foreach ($countryMeta['options'] as $option) {
                    echo '<option', $countryValue == $option ? ' selected="selected"' : '', ' value="' . $option . '">' . $option . '</option>';
                  } ?>
                </select>
              </li>
              <li>
                <em><?php echo $countryMeta['description']; ?></em>
              </li>
            </ul>
          </div>

          <!-- Language /-->
          <div class="bea-tab-box-information">
            <ul>
              <li>
                <b><?php echo $languageMeta['label']; ?></b>
              </li>
              <li>
                <select class="form-select bea-select"
                        id="<?php echo $languageMeta['id']; ?>"
                        name="<?php echo $languageMeta['name']; ?>"
                        aria-label="Default select example">
                  <?php foreach ($languageMeta['options'] as $option) {
                    echo '<option', $languageValue == $option ? ' selected="selected"' : '', ' value="' . $option . '">' . $option . '</option>';
                  } ?>
                </select>
              </li>
              <li>
                <em>
                  <?php echo $languageMeta['description']; ?>
                </em>
              </li>
            </ul>
          </div>

          <!-- Pages /-->
          <div class="bea-tab-box-information">
            <ul>
              <li>
                <b><?php echo $pagesMeta['label']; ?></b>
              </li>
              <li>
                <input type="text" class='bea-input-text'
                       name="<?php echo $pagesMeta['name']; ?>"
                       id="<?php echo $pagesMeta['id']; ?>"
                       value="<?php echo $pagesValue; ?>"
                       placeholder="<?php echo $pagesValue; ?>">
              </li>
              <li>
                <em>
                  <?php echo $pagesMeta['description']; ?>
                </em>
              </li>
            </ul>
          </div>

          <!-- State /-->
          <div class="bea-tab-box-information">
            <ul>
              <li>
                <b><?php echo $stateMeta['label']; ?></b>
              </li>
              <li>
                <select class="form-select bea-select"
                        id="<?php echo $stateMeta['id']; ?>"
                        name="<?php echo $stateMeta['name']; ?>"
                        aria-label="Default select example">
                  <?php foreach ($stateMeta['options'] as $option) {
                    echo '<option', $stateValue == $option ? ' selected="selected"' : '', ' value="' . $option . '">' . $option . '</option>';
                  } ?>
                </select>
              </li>
              <li>
                <em>
                  <?php echo $stateMeta['description']; ?>
                </em>
              </li>
            </ul>
          </div>

          <!-- Get book /-->
          <div class="bea-tab-box-information last">
            <ul>
              <li>
                <b><?php echo $getBookMeta['label']; ?></b>
              </li>
              <li>
                <input type="text" class='bea-input-text'
                       name="<?php echo $getBookMeta['name']; ?>"
                       id="<?php echo $getBookMeta['id']; ?>"
                       value="<?php echo $getBookValue; ?>"
                       placeholder="<?php echo $getBookValue; ?>">
              </li>
              <li>
                <em>
                  <?php echo $getBookMeta['description']; ?>
                </em>
              </li>
            </ul>
          </div>

        </div>

        <!-- Properties tab /-->
        <div id="properties-tab" class="tabs-panel bea-tabs-panel-close">

          <!-- Digital classification /-->
          <div class="bea-tab-box-information">
            <div class="container_">
              <div class="row_">

                <!-- Label /-->
                <div class=" col_-12 bea-mb05 bea-mt09">
                  <b><?php echo $digitalClassificationMeta['label']; ?></b>
                </div>

                <!-- eBook /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalClassificationMeta['id']; ?>"
                         name="<?php echo $digitalClassificationMeta['name']; ?>[]"
                         value="eBook" <?php echo $digitalClassificationEbook; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">eBook</label>
                </div>

                <!-- Audiolibro /-->
                <div class="col_12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalClassificationMeta['id']; ?>"
                         name="<?php echo $digitalClassificationMeta['name']; ?>[]"
                         value="Audiolibro" <?php echo $digitalClassificationAudiolibro; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Audiolibro</label>
                </div>

                <!-- Película /-->
                <div class="col_12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalClassificationMeta['id']; ?>"
                         name="<?php echo $digitalClassificationMeta['name']; ?>[]"
                         value="Película" <?php echo $digitalClassificationPelicula; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Película</label>
                </div>

                <!-- Documental /-->
                <div class="col_12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalClassificationMeta['id']; ?>"
                         name="<?php echo $digitalClassificationMeta['name']; ?>[]"
                         value="Documental" <?php echo $digitalClassificationDocumental; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Documental</label>
                </div>

                <!-- Programa de TV /-->
                <div class="col_12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalClassificationMeta['id']; ?>"
                         name="<?php echo $digitalClassificationMeta['name']; ?>[]"
                         value="Programa de TV" <?php echo $digitalClassificationProgramaDeTV; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Programa de TV</label>
                </div>

                <!-- Serie de TV /-->
                <div class="col_12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalClassificationMeta['id']; ?>"
                         name="<?php echo $digitalClassificationMeta['name']; ?>[]"
                         value="Serie de TV" <?php echo $digitalClassificationSerieDeTv; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Serie de TV</label>
                </div>

                <!-- Pódcast /-->
                <div class="col_12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalClassificationMeta['id']; ?>"
                         name="<?php echo $digitalClassificationMeta['name']; ?>[]"
                         value="Pódcast" <?php echo $digitalClassificationPodcast; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Pódcast</label>
                </div>

                <!-- Programa de Radio /-->
                <div class="col_12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalClassificationMeta['id']; ?>"
                         name="<?php echo $digitalClassificationMeta['name']; ?>[]"
                         value="Programa de Radio" <?php echo $digitalClassificationProgramaDeRadio; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Programa de Radio</label>
                </div>

                <!-- Streaming /-->
                <div class="col_12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalClassificationMeta['id']; ?>"
                         name="<?php echo $digitalClassificationMeta['name']; ?>[]"
                         value="Streaming " <?php echo $digitalClassificationStreaming; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Streaming</label>
                </div>

                <!-- No clasificable /-->
                <div class="col_12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalClassificationMeta['id']; ?>"
                         name="<?php echo $digitalClassificationMeta['name']; ?>[]"
                         value="No clasificable" <?php echo $digitalClassificationNoClasificable; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">No clasificable</label>
                </div>

                <!-- Otro /-->
                <div class="col_12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalClassificationMeta['id']; ?>"
                         name="<?php echo $digitalClassificationMeta['name']; ?>[]"
                         value="Otro" <?php echo $digitalClassificationOtro; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Otro</label>
                </div>

                <!-- Description /-->
                <em><?php echo $digitalClassificationMeta['description']; ?></em>

              </div>
            </div>
          </div>

          <!-- Digitization type /-->
          <div class="bea-tab-box-information">
            <div class="container_">
              <div class="row_">

                <!-- Label /-->
                <div class=" col_-12 bea-mb05 bea-mt09">
                  <b><?php echo $digitalFormatMeta['label']; ?></b>
                </div>

                <!-- Texto plano /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalFormatMeta['id']; ?>"
                         name="<?php echo $digitalFormatMeta['name']; ?>[]"
                         value="Texto plano" <?php echo $digitalFormatPlanText; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Texto plano</label>
                </div>

                <!-- Escaneo (OCR) /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalFormatMeta['id']; ?>"
                         name="<?php echo $digitalFormatMeta['name']; ?>[]"
                         value="Escaneo (OCR)" <?php echo $digitalFormatOCRScan; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Escaneo (OCR)</label>
                </div>

                <!-- Escaneo (imágenes) /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalFormatMeta['id']; ?>"
                         name="<?php echo $digitalFormatMeta['name']; ?>[]"
                         value="Escaneo (imágenes)" <?php echo $digitalFormatImagesScan; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Escaneo (imágenes)</label>
                </div>

                <!-- Imágenes /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalFormatMeta['id']; ?>"
                         name="<?php echo $digitalFormatMeta['name']; ?>[]"
                         value="Imágenes" <?php echo $digitalFormatImages; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Imágenes</label>
                </div>

                <!-- Fotografiado /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalFormatMeta['id']; ?>"
                         name="<?php echo $digitalFormatMeta['name']; ?>[]"
                         value="Fotografiado" <?php echo $digitalFormatPhotos; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Fotografiado</label>
                </div>

                <!-- Interactivo /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalFormatMeta['id']; ?>"
                         name="<?php echo $digitalFormatMeta['name']; ?>[]"
                         value="Interactivo" <?php echo $digitalFormatInteractive; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Interactivo</label>
                </div>

                <!-- Audio /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalFormatMeta['id']; ?>"
                         name="<?php echo $digitalFormatMeta['name']; ?>[]"
                         value="Audio" <?php echo $digitalFormatAudio; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Audio</label>
                </div>

                <!-- Texto a voz /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalFormatMeta['id']; ?>"
                         name="<?php echo $digitalFormatMeta['name']; ?>[]"
                         value="Texto a voz" <?php echo $digitalFormatVoiceToText; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Texto a voz</label>
                </div>

                <!-- Otro tipo /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalFormatMeta['id']; ?>"
                         name="<?php echo $digitalFormatMeta['name']; ?>[]"
                         value="Otro tipo" <?php echo $digitalFormatOther; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Otro tipo</label>
                </div>

                <!-- No aplica /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalFormatMeta['id']; ?>"
                         name="<?php echo $digitalFormatMeta['name']; ?>[]"
                         value="No aplica" <?php echo $digitalFormatNoApply; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">No aplica</label>
                </div>

                <!-- Desconocido /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $digitalFormatMeta['id']; ?>"
                         name="<?php echo $digitalFormatMeta['name']; ?>[]"
                         value="Desconocido" <?php echo $digitalFormatUnknown; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Desconocido</label>
                </div>

              </div>
            </div>
          </div>

          <!-- Extension /-->
          <div class="bea-tab-box-information">
            <div class="container_">
              <div class="row_">

                <!-- Label /-->
                <div class=" col_-12 bea-mb05 bea-mt09">
                  <b><?php echo $extensionMeta['label']; ?></b>
                </div>

                <!-- *.pdf /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="pdf" <?php echo $extensionPDF; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.pdf</label>
                </div>

                <!-- *.epub /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="epub" <?php echo $extensionEPUB; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.epub</label>
                </div>

                <!-- *.docx /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="docx" <?php echo $extensionDOCX; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.docx</label>
                </div>

                <!-- *.mobi /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="mobi" <?php echo $extensionMOBI; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.mobi</label>
                </div>

                <!-- *.lit /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="lit" <?php echo $extensionLIT; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.lit</label>
                </div>

                <!-- *.djvu /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="djvu" <?php echo $extensionDJVU; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.djvu</label>
                </div>

                <!-- *.txt /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="txt" <?php echo $extensionTXT; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.txt</label>
                </div>

                <!-- *.mp3 /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="mp3" <?php echo $extensionMP3; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.mp3</label>
                </div>

                <!-- *.mp4 /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="mp4" <?php echo $extensionMP4; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.mp4</label>
                </div>

                <!-- *.m4a /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="m4a" <?php echo $extensionM4A; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.m4a</label>
                </div>

                <!-- *.avi /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="avi" <?php echo $extensionAVI; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.avi</label>
                </div>

                <!-- *.flv /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="flv" <?php echo $extensionFLV; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">*.flv</label>
                </div>

                <!-- Otro /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="Otro" <?php echo $extensionOther; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Otro</label>
                </div>

                <!-- Desconocido /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="Desconocido" <?php echo $extensionUnknown; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">Desconocido</label>
                </div>

                <!-- No aplica /-->
                <div class=" col_-12 col_-lg-3 col_-md-6 bea-mb15">
                  <input type="checkbox"
                         id="<?php echo $extensionMeta['id']; ?>"
                         name="<?php echo $extensionMeta['name']; ?>[]"
                         value="No aplica" <?php echo $extensionNoApply; ?>>
                  <label for="be_theme_kind"
                         class="bea-mr15">No aplica</label>
                </div>

              </div>
            </div>
          </div>

          <!-- Size file /-->
          <div class="bea-tab-box-information last">
            <ul>

              <!-- Label /-->
              <li><b><?php echo $fileSizeMeta['label']; ?></b></li>

              <!-- Placeholder /-->
              <li>
                <input type='text'
                       class='bea-input-text'
                       name="<?php echo $fileSizeMeta['name']; ?>"
                       id="<?php echo $fileSizeMeta['id']; ?>"
                       value="<?php echo $fileSizeValue; ?>"
                       placeholder="<?php echo $fileSizeValue; ?>">
              </li>

              <!-- Description /-->
              <li><em><?php echo $fileSizeMeta['description']; ?></em></li>

            </ul>
          </div>

        </div>

      </div>
    </div>
  
  <?php } ?>


<?php
  
  /**
   * Save custom data
   *
   * @param $post_id
   * @return mixed|void
   */
  function save_custom_meta ($post_id)
  {
    global $custom_meta_fields;
    
    // Check nonce
    if (
      !isset($_POST['custom_meta_box_nonce'])
      || !wp_verify_nonce ($_POST['custom_meta_box_nonce'], basename (__FILE__))
    )
      return $post_id;
    
    // Auto save
    if (defined ('DOING_AUTOSAVE') && DOING_AUTOSAVE)
      return $post_id;
    
    //Check permissions
    if ('page' == $_POST['post_type']) {
      if (!current_user_can ('edit_page', $post_id))
        return $post_id;
    } elseif (!current_user_can ('edit_post', $post_id)) {
      return $post_id;
    }
    
    // Loop through the fields and save the information
    $new = $_POST['tie_views'];
    update_post_meta ($post_id, 'tie_views', $new);
    
    foreach ($custom_meta_fields as $field) {
      
      if ($field['type'] == 'tax_select')
        continue;
      $old = get_post_meta ($post_id, $field['id'], true);
      $new = $_POST[$field['id']];
      
      if ($new && $new != $old) {
        update_post_meta ($post_id, $field['id'], $new);
      } elseif ('' == $new && $old) {
        delete_post_meta ($post_id, $field['id'], $old);
      }
    }
    
    // Save the taxonomies
    $category = $_POST['category'];
    wp_set_object_terms ($post_id, $category, 'category');
  }
  
  add_action ('save_post', 'save_custom_meta');
