/**
 * Template Name:      Biblioteca Enigmas
 * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
 * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
 * Author:             Guillermo Camarena
 * Author URL:         http://gcamarenaprog.com
 * Path:               /library/js/
 * File name:          tiny-mce.js
 * Description:        This file contains the custom buttons script from the Wordpress editor in the administration.
 * Date:               25-08-2025
 */

(function () {
  tinymce.create('tinymce.plugins.MyPluginName', {

    init: function (ed, url) {
      ed.addButton('btnTitle', {
        title: 'Añadir título',
        cmd: 'cmdBtnTitle',
        image: url + '/title.svg'
      });

      ed.addButton('btnCredits', {
        title: 'Añadir créditos',
        cmd: 'cmdBtnCredits',
        image: url + '/credits.svg'
      });

      ed.addButton('btnReferences', {
        title: 'Añadir referencias',
        cmd: 'cmdBtnReferences',
        image: url + '/references.svg'
      });

      ed.addButton('btnSummary', {
        title: 'Añadir sumario',
        cmd: 'cmdBtnSummary',
        image: url + '/summary.svg'
      });

      ed.addButton('btnMasonic', {
        title: 'Añadir símbolo Masonico',
        cmd: 'cmdBtnMasonic',
        image: url + '/masonic.svg'
      });

      ed.addButton('btnAlpha', {
        title: 'Añadir símbolo Alpha',
        cmd: 'cmdBtnAlpha',
        image: url + '/alpha.svg'
      });


      ed.addButton('btnPhi', {
        title: 'Añadir símbolo Phi',
        cmd: 'cmdBtnPhi',
        image: url + '/phi.svg'
      });

      ed.addButton('btnStrong', {
        title: 'Añadir etiqueta strong',
        cmd: 'cmdBtnStrong',
        image: url + '/strong.svg'
      });

      ed.addButton('btnBigLine', {
        title: 'Añadir línea final',
        cmd: 'cmdBtnBigline',
        image: url + '/bigline.png'
      });

      ed.addButton('btnCol4', {
        title: 'Añadir grid de 4 columnas',
        cmd: 'cmdBtnCol4',
        image: url + '/4col.png'
      });

      ed.addButton('btnCol3', {
        title: 'Añadir grid de 3 columnas',
        cmd: 'cmdBtnCol3',
        image: url + '/3col.png'
      });

      ed.addButton('btnCol2', {
        title: 'Añadir grid de 2 columnas',
        cmd: 'cmdBtnCol2',
        image: url + '/2col.png'
      });

      ed.addButton('btnCol4image', {
        title: 'Añadir grid de 4 columnas de imágenes',
        cmd: 'cmdBtnCol4image',
        image: url + '/4colimage.png'
      });

      ed.addButton('btnCol3image', {
        title: 'Añadir grid de 3 columnas de imágenes',
        cmd: 'cmdBtnCol3image',
        image: url + '/3colimage.png'
      });

      ed.addButton('btnCol2image', {
        title: 'Añadir grid de 2 columnas de imágenes',
        cmd: 'cmdBtnCol2image',
        image: url + '/2colimage.png'
      });

      ed.addButton('btnCol1imageleft', {
        title: 'Añadir imágen rotada a la izquierda',
        cmd: 'cmdBtnCol1imageleft',
        image: url + '/1colimageleft.png'
      });


      ed.addButton('btnCol1imageright', {
        title: 'Añadir imágen rotada a la derecha',
        cmd: 'cmdBtnCol1imageright',
        image: url + '/1colimageright.png'
      });


      ed.addCommand('cmdBtnSummary', function () {
        var selectedText = ed.selection.getContent({format: 'html'});
        var text_1 = '<hr /><h1 style="text-align: center;">Sumario</h1>';
        var text_2 = '<li>text</li>';
        var text_3 = '<li>text</li>';
        var text_4 = '<li>text</li>';
        var text_5 = '<li>text</li>';
        var text_6 = '<li>text</li></ul>';

        var text_ = text_1 + text_2 + text_3 + text_4 + text_5 + text_6;
        ed.execCommand('mceInsertContent', 0, text_);
      });


      ed.addCommand('cmdBtnReferences', function () {
        var selectedText = ed.selection.getContent({format: 'html'});
        var text1 = '<hr><h1>Referencias</h1><ul>';
        var text2 = '<p><li> <em>[WIKIPEDIA]</em> TÍTULO. En Wikipedia. Recuperado el # de MES de AÑO de URL</li>';
        var text3 = '<li> <em>[LIBRO]</em> APELLIDO AUTOR, NOMBRE AUTOR, (AÑO), TÍTULO DEL LIBRO, <em>NOMBRE DEL TEMA</em>, PÁGS.(), CIUDAD, PAÍS, EDITORIAL</li>';
        var text4 = '<li> <em>[PODCAST]</em> APELLIDO AUTOR, NOMBRE AUTOR (AÑO, # de MES), TÍTULO DEL PROGRAMA [Audio podcast]. Recuperado de URL</li>';
        var text5 = '<li> <em>[REVISTA DIGITAL]</em> APELLIDO AUTOR, NOMBRE AUTOR (AÑO, # de MES), TÍTULO. <em>NOMBRE DE REVISTA, (VOLUMEN)</em>, p. #PÁGINA.</li>';
        var text6 = '<li> <em>[REVISTA]</em> NOMBRE REVISTA, (FECHA). TÍTULO. <em>TÍTULO DE REVISTA</em>, (AÑO:NÚM.), p. #PÁGINAS.</li></p><hr>';

        var text = text1 + text2 + text3 + text4 + text5 + text6;
        ed.execCommand('mceInsertContent', 0, text);
      });

      ed.addCommand('cmdBtnTitle', function () {
        var selectedText = ed.selection.getContent({format: 'html'});
        var returnText = '<hr><h1>Título</h1>';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      ed.addCommand('cmdBtnCredits', function () {
        var selectedText = ed.selection.getContent({format: 'html'});
        var returnText = '<hr><p style="text-align:right;">Digitalizado por <strong>Biblioteca Enigmas</strong></p><hr>';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      ed.addCommand('cmdBtnMasonic', function () {
        var selectedText = ed.selection.getContent({format: 'html'});
        var returnText = ' ∴';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      ed.addCommand('cmdBtnPhi', function () {
        var selectedText = ed.selection.getContent({format: 'html'});
        var returnText = ' Φ';
        ed.execCommand('mceInsertContent', 0, returnText);
      });


      ed.addCommand('cmdBtnAlpha', function () {
        var selectedText = ed.selection.getContent({format: 'html'});
        var returnText = ' Δ';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      ed.addCommand('cmdBtnStrong', function () {
        var selectedText = ed.selection.getContent({format: 'html'});
        var returnText = '<strong>Text with strong</strong>';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      ed.addCommand('cmdBtnBigLine', function () {
        var selectedText = ed.selection.getContent({format: 'html'});
        var returnText = '<hr class="brown" />';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      ed.addCommand('cmdBtnCol4', function () {
        var returnText = '<div class="row_">\n' +
          '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-12 col_xs-12 text-center">Content column 1 of 4</div>' +
          '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-12 col_xs-12 text-center">Content column 2 of 4</div>' +
          '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-12 col_xs-12 text-center">Content column 3 of 4</div>' +
          '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-12 col_xs-12 text-center">Content column 4 of 4</div>' +
          '</div>' +
          '&nbsp;';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      ed.addCommand('cmdBtnCol3', function () {
        var returnText = '<div class="row_">\n' +
          '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-12 col_xs-12 text-center">Content column 1 of 3</div>' +
          '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-12 col_xs-12 text-center">Content column 2 of 3</div>' +
          '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-12 col_xs-12 text-center">Content column 3 of 3</div>' +
          '</div>' +
          '&nbsp;';
        ed.execCommand('mceInsertContent', 0, returnText);
      });


      ed.addCommand('cmdBtnCol2', function () {
        var returnText = '<div class="row_">\n' +
          '<div class="col_-xxl-6 col_-xl-6 col_-md-6 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>' +
          '<div class="col_-xxl-6 col_-xl-6 col_-md-6 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>' +
          '</div>' +
          '&nbsp;';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      // Button Col4 Images
      ed.addCommand('cmdBtnCol4image', function () {
        var returnText = '<div class="row_ mt20 mb20">\n' +
          '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-6 col_xs-12 text-center">\n' +
          '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); width: 300px;">\n' +
          ' <a href="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg">\n ' + '</br>' +
          '<img class="wp-image size-full" title="Text" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg" alt="Text" />\n' +
          '</a>\n' +
          '<div class="wp-caption-text">Text</div>\n' +
          '</figure>\n' +
          '</div>\n\n' +
          '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-6 col_xs-12 text-center">\n' +
          '<figure class="wp-caption aligncenter" style="transform: rotate(-5deg); width: 300px;">\n' +
          '<a href="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg">\n' +
          '<img class="wp-image size-full" title="Text" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg" alt="Text" />\n' +
          '</a>\n' +
          '<div class="wp-caption-text">Text</div>\n' +
          '</figure>\n' +
          '</div>\n' +
          '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-6 col_xs-12 text-center">\n' +
          '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); width: 300px;">\n' +
          '<a href="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg">\n' +
          '<img class="wp-image size-full" title="Text" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg" alt="Text" />\n' +
          '</a>\n' +
          '<div class="wp-caption-text">Text</div>\n' +
          '</figure>\n' +
          '</div>\n' +
          '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-6 col_xs-12 text-center">\n' +
          '<figure class="wp-caption aligncenter" style="transform: rotate(-5deg); width: 300px;">\n' +
          '<a href="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg">\n' +
          '<img class="wp-image size-full" title="Text" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg" alt="Text" />\n' +
          '</a>\n' +
          '<div class="wp-caption-text">Text</div>\n' +
          '</figure>\n' +
          '</div>\n\n' +
          '</div>\n\n' +
          '&nbsp;';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      // Button Col3 Images
      ed.addCommand('cmdBtnCol3image', function () {
        var returnText = '<div class="row_ mt20 mb20">\n\n' +
          '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-6 col_xs-12 text-center">\n' +
          '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); width: 300px;">\n' +
          '<a href="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg">\n' +
          '<img class="wp-image size-full" title="Text" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg" alt="Text" />\n' +
          '</a>\n' +
          '<div class="wp-caption-text">Text</div></figure>\n' +
          '</div>\n' +
          '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-6 col_xs-12 text-center">\n' +
          '<figure class="wp-caption aligncenter" style="transform: rotate(-5deg); width: 300px;">\n' +
          '<a href="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg">\n' +
          '<img class="wp-image size-full" title="Text" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg" alt="Text" />\n' +
          '</a>\n' +
          '<div class="wp-caption-text">Text</div></figure>\n' +
          '</div>\n' +
          '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-12 col_xs-12 text-center">\n' +
          '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); width: 300px;">\n' +
          '<a href="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg">\n' +
          '<img class="wp-image size-full" title="Text" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg" alt="Text" />\n' +
          '</a>\n' +
          '<div class="wp-caption-text">Text</div></figure>\n' +
          '</div>\n' +
          '</div>\n\n' +
          '&nbsp;';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      // Button Col2 Images
      ed.addCommand('cmdBtnCol2image', function () {
        var returnText = '<div class="row_ mt20 mb20">\n\n' +
          '<div class="col_-xxl-6 col_-xl-6 col_-md-6 col_-sm-6 col_xs-12 text-center">\n' +
          '<figure class="wp-caption aligncenter" style="transform: rotate(-5deg); width: 300px;">\n' +
          '<a href="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg">\n' +
          '<img class="wp-image size-full" title="Text" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg" alt="Text" />\n' +
          '</a>\n' +
          '<div class="wp-caption-text">Text</div>\n' +
          '</figure>\n' +
          '</div>\n' +
          '<div class="col_-xxl-6 col_-xl-6 col_-md-6 col_-sm-6 col_xs-12 text-center">\n' +
          '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); width: 300px;">\n' +
          '<a href="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg">\n' +
          '<img class="wp-image size-full" title="Text" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg" alt="Text" />\n' +
          '</a>\n' +
          '<div class="wp-caption-text">Text</div>\n' +
          '</figure>\n' +
          '</div>\n' +
          '</div>\n\n' +
          '&nbsp;';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      // Button Col1 Image Left
      ed.addCommand('cmdBtnCol1imageleft', function () {
        var returnText = '<div class="row_ mt20 mb20">\n\n' +
          '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">\n' +
          '<figure class="wp-caption aligncenter" style="transform: rotate(-5deg); width: 300px;">\n' +
          '<a href="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg">\n' +
          '<img class="wp-image size-full" title="Text" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg" alt="Text" />\n' +
          '</a>\n' +
          '<div class="wp-caption-text">Text</div>\n' +
          '</figure>\n' +
          '</div>\n' +
          '</div>\n\n' +
          '&nbsp;';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      // Button Col1 Image Right
      ed.addCommand('cmdBtnCol1imageright', function () {
        var returnText = '<div class="row_ mt20 mb20">\n\n' +
          '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">\n' +
          '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); width: 300px;">\n' +
          '<a href="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg">\n' +
          '<img class="wp-image size-full" title="Text" src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/js/no-image.jpg" alt="Text" />\n' +
          '</a>\n' +
          '<div class="wp-caption-text">Text</div>\n' +
          '</figure>\n' +
          '</div>\n' +
          '</div>\n\n' +
          '&nbsp;';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

    },
  });
  tinymce.PluginManager.add('mytinymcebuttons', tinymce.plugins.MyPluginName);
})();