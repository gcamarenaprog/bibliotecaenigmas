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
        title: 'Añadir marca',
        cmd: 'cmdBtnMasonic',
        image: url + '/masonic.svg'
      });


      ed.addCommand('cmdBtnSummary', function () {
        var selectedText = ed.selection.getContent({ format: 'html' });
        var text_1 = '<hr><b>Sumario</b><ul>';
        var text_2 = '<li>text</li>';
        var text_3 = '<li>text</li>';
        var text_4 = '<li>text</li>';
        var text_5 = '<li>text</li>';
        var text_6 = '<li>text</li></ul>';

        var text_ = text_1 + text_2 + text_3 + text_4 + text_5 + text_6;
        ed.execCommand('mceInsertContent', 0, text_);
      });


      ed.addCommand('cmdBtnReferences', function () {
        var selectedText = ed.selection.getContent({ format: 'html' });
        var text1 = '<hr><p><b>Referencias</b><ul></p>';
        var text2 = '<p><li> <em>[WIKIPEDIA]</em> TÍTULO. En Wikipedia. Recuperado el # de MES de AÑO de URL</li>';
        var text3 = '<li> <em>[LIBRO]</em> APELLIDO AUTOR, NOMBRE AUTOR, (AÑO), TÍTULO DEL LIBRO, <em>NOMBRE DEL TEMA</em>, PÁGS.(), CIUDAD, PAÍS, EDITORIAL</li>';
        var text4 = '<li> <em>[PODCAST]</em> APELLIDO AUTOR, NOMBRE AUTOR (AÑO, # de MES), TÍTULO DEL PROGRAMA [Audio podcast]. Recuperado de URL</li>';
        var text5 = '<li> <em>[REVISTA DIGITAL]</em> APELLIDO AUTOR, NOMBRE AUTOR (AÑO, # de MES), TÍTULO. <em>NOMBRE DE REVISTA, (VOLUMEN)</em>, p. #PÁGINA.</li>';
        var text6 = '<li> <em>[REVISTA]</em> NOMBRE REVISTA, (FECHA). TÍTULO. <em>TÍTULO DE REVISTA</em>, (AÑO:NÚM.), p. #PÁGINAS.</li></p><hr>';

        var text = text1 + text2 + text3 + text4 + text5 + text6;
        ed.execCommand('mceInsertContent', 0, text);
      });

      ed.addCommand('cmdBtnTitle', function () {
        var selectedText = ed.selection.getContent({ format: 'html' });
        var returnText = '<hr><p><b>Título</b></p><hr>';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      ed.addCommand('cmdBtnCredits', function () {
        var selectedText = ed.selection.getContent({ format: 'html' });
        var returnText = '<hr><p style="text-align:right;">Digitalizado por <b>Biblioteca Enigmas</b></p><hr>';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

      ed.addCommand('cmdBtnMasonic', function () {
        var selectedText = ed.selection.getContent({ format: 'html' });
        var returnText = ' ∴';
        ed.execCommand('mceInsertContent', 0, returnText);
      });

    },
  });
  tinymce.PluginManager.add('mytinymcebuttons', tinymce.plugins.MyPluginName);
})();