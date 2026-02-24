(function () {

  tinymce.PluginManager.add('be_mce_button', function (editor, url) {

    editor.addButton('be_mce_button', {
      icon: ' be-icon ',
      tooltip: 'BE Herramientas',
      type: 'menubutton',
      minWidth: 210,
      toolbar_location: 'bottom',

      menu: [
        {
          text: 'Encabezados',
          icon: ' be-ico_headings',
          menu: [
            {
              text: 'Encabezado h1',
              icon: ' be-ico_headings_h1',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Encabezado h2',
              icon: ' be-ico_headings_h2',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Encabezado h3',
              icon: ' be-ico_headings_h3',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Encabezado h4',
              icon: ' be-ico_headings_h4',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Encabezado h5',
              icon: ' be-ico_headings_h5',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Encabezado h6',
              icon: ' be-ico_headings_h6',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
          ]
        },
        {
          text: 'Elementos',
          icon: ' be-ico_elements',
          menu: [
            {
              text: 'Línea',
              icon: ' be-ico_elements_line',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Alpha',
              icon: ' be-ico_elements_alpha',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Phi',
              icon: ' be-ico_elements_phi',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Mason',
              icon: ' be-ico_elements_mason',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Tabla',
              icon: ' be-ico_elements_table',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Insertar línea',
              icon: ' be-ico_summary',

              onclick: function () {
                var win;
                var charMapPanel = {
                  type: 'container',
                  html: '<div><h1>dsfsdlfksd</h1></div>',
                  onclick: function (e) {
                    var target = e.target;
                    if (/^(TD|DIV)$/.test(target.nodeName)) {
                      var charDiv = getParentTd(target).firstChild;
                      if (charDiv && charDiv.hasAttribute('data-chr')) {
                        var charCodeString = charDiv.getAttribute('data-chr');
                        var charCode = parseInt(charCodeString, 10);
                        if (!isNaN(charCode)) {
                          Actions.insertChar(editor, String.fromCharCode(charCode));
                        }
                        if (!e.ctrlKey) {
                          win.close();
                        }
                      }
                    }
                  },
                  onmouseover: function (e) {
                    console.log('test');
                  }
                };

                editor.windowManager.open({

                  title: 'Special character',
                  spacing: 10,
                  padding: 10,
                  items: [
                    charMapPanel,
                    {
                      type: 'container',
                      layout: 'flex',
                      direction: 'column',
                      align: 'center',
                      spacing: 5,
                      minWidth: 160,
                      minHeight: 160,
                      items: [
                        {
                          type: 'label',
                          name: 'preview',
                          text: ' ',
                          style: 'font-size: 40px; text-align: center',
                          border: 1,
                          minWidth: 140,
                          minHeight: 80
                        },
                        {
                          type: 'spacer',
                          minHeight: 20
                        },
                        {
                          type: 'label',
                          name: 'previewTitle',
                          text: ' ',
                          style: 'white-space: pre-wrap;',
                          border: 1,
                          minWidth: 140
                        }
                      ]
                    }
                  ],
                  buttons: [{
                    text: 'Close',
                    onclick: function () {
                      win.close();
                    }
                  }]
                });
              }
            },
          ]
        },
        {
          text: 'Secciones',
          icon: ' be-ico_sections',
          menu: [
            {
              text: 'Sumario ∴ / Φ / Δ',
              icon: ' be-ico_sections_summary',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Referencias',
              icon: ' be-ico_sections_references',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Digitalización',
              icon: ' be-ico_sections_digitalization',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Traducción',
              icon: ' be-ico_sections_translate',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Actualización',
              icon: ' be-ico_sections_update',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Guillermo Camarena ∴',
              icon: ' be-ico_sections_gcamarenaprog',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },

            {
              text: 'Biblioteca Enigmas ∴',
              icon: ' be-ico_sections_library',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },

          ]
        },
        {
          text: 'Columnas',
          icon: ' be-ico_cols',
          menu: [
            {
              text: '1 Columna',
              icon: ' be-ico_cols_1',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: '2 Columnas',
              icon: ' be-ico_cols_2',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-6 col_-xl-6 col_-md-6 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-6 col_-xl-6 col_-md-6 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: '3 Columnas',
              icon: ' be-ico_cols_3',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-12 col_xs-12 text-center">Content column 1 of 3</div>\n' +
                  '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-12 col_xs-12 text-center">Content column 2 of 3</div>\n' +
                  '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-12 col_xs-12 text-center">Content column 3 of 3</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: '4 Columnas',
              icon: ' be-ico_cols_4',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-12 col_xs-12 text-center">Content column 1 of 4</div>\n' +
                  '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-12 col_xs-12 text-center">Content column 2 of 4</div>\n' +
                  '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-12 col_xs-12 text-center">Content column 3 of 4</div>\n' +
                  '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-12 col_xs-12 text-center">Content column 4 of 4</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },

          ]
        },
        {
          text: 'Imágenes',
          icon: ' be-ico_imgs',
          menu: [
            {
              text: 'A la izquierda',
              icon: ' be-ico_imgs_left',
              onclick: function () {
                editor.windowManager.open({
                  title: 'Una imágen a la izquierda',
                  body: [
                    {
                      type: 'textbox',
                      name: 'textBoxText',
                      id: 'textBoxText',
                      label: 'Texto',
                      value: 'Texto',
                      placeholder: 'Texto'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxWidth',
                      id: 'textBoxWidth',
                      label: 'Ancho en px',
                      value: '300',
                      placeholder: '300'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxURL',
                      id: 'textBoxURL',
                      label: 'URL de la imágen',
                      placeholder: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg',
                      minWidth: 300,
                      value: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg'
                    },
                    {
                      type: 'button',
                      name: 'button',
                      text: 'Seleccionar imágen',
                      id: 'myButton',
                      value: null,

                      onclick: function () {
                        let mediaUploader;
                        if (mediaUploader) {
                          mediaUploader.open();
                          return;
                        }
                        mediaUploader = wp.media.frames.fle_frame = wp.media({
                          title: 'Añadir imágen a la izquierda',
                          button: {
                            text: 'Añadir'
                          },
                          multiple: false
                        })
                        mediaUploader.on('select', function () {
                          attachment = mediaUploader.state().get('selection').first().toJSON();
                          let textBoxURL = document.querySelector('#textBoxURL');
                          textBoxURL.value = attachment['url'];
                        });
                        mediaUploader.open();
                      }
                    },
                  ],
                  onsubmit: function (e) {
                    editor.insertContent('<div class="row_ mt20 mb20">' +
                      '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">' +
                      '<figure class="wp-caption aligncenter" style="transform: rotate(-5deg); width: ' + e.data.textBoxWidth + 'px;">' +
                      '<a href="' + e.data.textBoxURL + '">' +
                      '<img class="wp-image size-full" title="' + e.data.textBoxText + '" alt="' + e.data.textBoxText + '" src="' + e.data.textBoxURL + '" alt="' + e.data.textBoxText + '" />' +
                      '</a>' +
                      '<div class="wp-caption-text">' + e.data.textBoxText + '</div>' +
                      '</figure>' +
                      '</div>' +
                      '</div>');
                  },

                });
              }
            },
            {
              text: 'A la derecha',
              icon: ' be-ico_imgs_right',
              onclick: function () {
                editor.windowManager.open({
                  title: 'Una imágen a la derecha',
                  body: [

                    {
                      type: 'textbox',
                      name: 'textBoxText',
                      id: 'textBoxText',
                      label: 'Texto',
                      value: 'Texto',
                      placeholder: 'Texto'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxWidth',
                      id: 'textBoxWidth',
                      label: 'Ancho en px',
                      value: '300',
                      placeholder: '300'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxURL',
                      id: 'textBoxURL',
                      label: 'URL de la imágen',
                      placeholder: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg',
                      minWidth: 300,
                      value: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg'
                    },
                    {
                      type: 'button',
                      name: 'button',
                      text: 'Seleccionar imágen',
                      id: 'myButton',
                      value: null,

                      onclick: function () {
                        let mediaUploader;
                        if (mediaUploader) {
                          mediaUploader.open();
                          return;
                        }
                        mediaUploader = wp.media.frames.fle_frame = wp.media({
                          title: 'Añadir imágen a la derecha',
                          button: {
                            text: 'Añadir'
                          },
                          multiple: false
                        })
                        mediaUploader.on('select', function () {
                          attachment = mediaUploader.state().get('selection').first().toJSON();
                          let textBoxURL = document.querySelector('#textBoxURL');
                          textBoxURL.value = attachment['url'];
                        });
                        mediaUploader.open();
                      }
                    },
                  ],
                  onsubmit: function (e) {
                    editor.insertContent('<div class="row_ mt20 mb20">' +
                      '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">' +
                      '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); width: ' + e.data.textBoxWidth + 'px;">' +
                      '<a href="' + e.data.textBoxURL + '">' +
                      '<img class="wp-image size-full" title="' + e.data.textBoxText + '" alt="' + e.data.textBoxText + '" src="' + e.data.textBoxURL + '" alt="' + e.data.textBoxText + '" />' +
                      '</a>' +
                      '<div class="wp-caption-text">' + e.data.textBoxText + '</div>' +
                      '</figure>' +
                      '</div>' +
                      '</div>');
                  },
                });
              }
            },
            {
              text: 'Añadir 2',
              icon: ' be-ico_imgs_2',
              onclick: function () {
                editor.windowManager.open({
                  title: 'Añadir 2 imágenes',
                  body: [
                    {
                      type: 'textbox',
                      name: 'textBoxTextImg1',
                      id: 'textBoxTextImg1',
                      label: 'IMG1 Texto',
                      value: 'Texto',
                      placeholder: 'Texto'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxURLImg1',
                      id: 'textBoxURLImg1',
                      label: 'IMG1 URL',
                      placeholder: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg',
                      minWidth: 300,
                      value: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg'
                    },
                    {
                      type: 'button',
                      name: 'buttonImg1',
                      id: 'buttonImg1',
                      text: 'Seleccionar imágen',
                      value: null,

                      onclick: function () {
                        let mediaUploader;
                        if (mediaUploader) {
                          mediaUploader.open();
                          return;
                        }
                        mediaUploader = wp.media.frames.fle_frame = wp.media({
                          title: 'Añadir imágen a la derecha',
                          button: {
                            text: 'Añadir'
                          },
                          multiple: false
                        })
                        mediaUploader.on('select', function () {
                          attachment = mediaUploader.state().get('selection').first().toJSON();
                          let textBoxURLImg1 = document.querySelector('#textBoxURLImg1');
                          textBoxURLImg1.value = attachment['url'];
                        });
                        mediaUploader.open();
                      }
                    },

                    {
                      type: 'textbox',
                      name: 'textBoxTextImg2',
                      id: 'textBoxTextImg2',
                      label: 'IMG2 Texto',
                      value: 'Texto',
                      placeholder: 'Texto'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxURLImg2',
                      id: 'textBoxURLImg2',
                      label: 'IMG2 URL',
                      placeholder: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg',
                      minWidth: 300,
                      value: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg'
                    },
                    {
                      type: 'button',
                      name: 'buttonImg2',
                      id: 'buttonImg2',
                      text: 'Seleccionar imágen',
                      value: null,

                      onclick: function () {
                        let mediaUploader;
                        if (mediaUploader) {
                          mediaUploader.open();
                          return;
                        }
                        mediaUploader = wp.media.frames.fle_frame = wp.media({
                          title: 'Añadir imágen a la derecha',
                          button: {
                            text: 'Añadir'
                          },
                          multiple: false
                        })
                        mediaUploader.on('select', function () {
                          attachment = mediaUploader.state().get('selection').first().toJSON();
                          let textBoxURLImg2 = document.querySelector('#textBoxURLImg2');
                          textBoxURLImg2.value = attachment['url'];
                        });
                        mediaUploader.open();
                      }
                    },
                  ],
                  onsubmit: function (e) {
                    editor.insertContent('<div class="row_ mt20 mb20">\n\n' +
                      '<div class="col_-xxl-6 col_-xl-6 col_-md-6 col_-sm-6 col_xs-12 text-center">\n' +
                      '<figure class="wp-caption aligncenter" style="transform: rotate(-5deg); width: 300px;">\n' +
                      '<a href="' + e.data.textBoxURLImg1 + '">\n' +
                      '<img class="wp-image size-full" title="' + e.data.textBoxTextImg1 + '" src="' + e.data.textBoxURLImg1 + '" alt="' + e.data.textBoxTextImg1 + '" />\n' +
                      '</a>\n' +
                      '<div class="wp-caption-text">' + e.data.textBoxTextImg1 + '</div>\n' +
                      '</figure>\n' +
                      '</div>\n' +
                      '<div class="col_-xxl-6 col_-xl-6 col_-md-6 col_-sm-6 col_xs-12 text-center">\n' +
                      '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); width: 300px;">\n' +
                      '<a href="' + e.data.textBoxURLImg2 + '">\n' +
                      '<img class="wp-image size-full" title="' + e.data.textBoxTextImg2 + '" src="' + e.data.textBoxURLImg2 + '" alt="' + e.data.textBoxTextImg2 + '" />\n' +
                      '</a>\n' +
                      '<div class="wp-caption-text">' + e.data.textBoxTextImg2 + '</div>\n' +
                      '</figure>\n' +
                      '</div>\n' +
                      '</div>\n\n' +
                      '&nbsp;');
                  },
                });
              }
            },
            {
              text: 'Añadir 3',
              icon: ' be-ico_imgs_3',
              onclick: function () {
                editor.windowManager.open({
                  title: 'Añadir 3 imágenes',
                  body: [
                    {
                      type: 'textbox',
                      name: 'textBoxTextImg1',
                      id: 'textBoxTextImg1',
                      label: 'IMG1 Texto',
                      value: 'Texto',
                      placeholder: 'Texto'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxURLImg1',
                      id: 'textBoxURLImg1',
                      label: 'IMG1 URL',
                      placeholder: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg',
                      minWidth: 300,
                      value: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg'
                    },
                    {
                      type: 'button',
                      name: 'buttonImg1',
                      id: 'buttonImg1',
                      text: 'Seleccionar imágen',
                      value: null,

                      onclick: function () {
                        let mediaUploader;
                        if (mediaUploader) {
                          mediaUploader.open();
                          return;
                        }
                        mediaUploader = wp.media.frames.fle_frame = wp.media({
                          title: 'Añadir imágen a la derecha',
                          button: {
                            text: 'Añadir'
                          },
                          multiple: false
                        })
                        mediaUploader.on('select', function () {
                          attachment = mediaUploader.state().get('selection').first().toJSON();
                          let textBoxURLImg1 = document.querySelector('#textBoxURLImg1');
                          textBoxURLImg1.value = attachment['url'];
                        });
                        mediaUploader.open();
                      }
                    },

                    {
                      type: 'textbox',
                      name: 'textBoxTextImg2',
                      id: 'textBoxTextImg2',
                      label: 'IMG2 Texto',
                      value: 'Texto',
                      placeholder: 'Texto'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxURLImg2',
                      id: 'textBoxURLImg2',
                      label: 'IMG2 URL',
                      placeholder: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg',
                      minWidth: 300,
                      value: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg'
                    },
                    {
                      type: 'button',
                      name: 'buttonImg2',
                      id: 'buttonImg2',
                      text: 'Seleccionar imágen',
                      value: null,

                      onclick: function () {
                        let mediaUploader;
                        if (mediaUploader) {
                          mediaUploader.open();
                          return;
                        }
                        mediaUploader = wp.media.frames.fle_frame = wp.media({
                          title: 'Añadir imágen a la derecha',
                          button: {
                            text: 'Añadir'
                          },
                          multiple: false
                        })
                        mediaUploader.on('select', function () {
                          attachment = mediaUploader.state().get('selection').first().toJSON();
                          let textBoxURLImg2 = document.querySelector('#textBoxURLImg2');
                          textBoxURLImg2.value = attachment['url'];
                        });
                        mediaUploader.open();
                      }
                    },

                    {
                      type: 'textbox',
                      name: 'textBoxTextImg3',
                      id: 'textBoxTextImg3',
                      label: 'IMG3 Texto',
                      value: 'Texto',
                      placeholder: 'Texto'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxURLImg3',
                      id: 'textBoxURLImg3',
                      label: 'IMG3 URL',
                      placeholder: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg',
                      minWidth: 300,
                      value: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg'
                    },
                    {
                      type: 'button',
                      name: 'buttonImg3',
                      id: 'buttonImg3',
                      text: 'Seleccionar imágen',
                      value: null,

                      onclick: function () {
                        let mediaUploader;
                        if (mediaUploader) {
                          mediaUploader.open();
                          return;
                        }
                        mediaUploader = wp.media.frames.fle_frame = wp.media({
                          title: 'Añadir imágen a la derecha',
                          button: {
                            text: 'Añadir'
                          },
                          multiple: false
                        })
                        mediaUploader.on('select', function () {
                          attachment = mediaUploader.state().get('selection').first().toJSON();
                          let textBoxURLImg3 = document.querySelector('#textBoxURLImg3');
                          textBoxURLImg3.value = attachment['url'];
                        });
                        mediaUploader.open();
                      }
                    },
                  ],
                  onsubmit: function (e) {
                    editor.insertContent('<div class="row_ mt20 mb20">\n\n' +
                      '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-6 col_xs-12 text-center">\n' +
                      '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); ">\n' +
                      '<a href="' + e.data.textBoxURLImg1 + '">\n' +
                      '<img class="wp-image size-full" title="' + e.data.textBoxTextImg1 + '" src="' + e.data.textBoxURLImg1 + '" alt="' + e.data.textBoxTextImg1 + '" />\n' +
                      '</a>\n' +
                      '<div class="wp-caption-text">' + e.data.textBoxTextImg1 + '</div></figure>\n' +
                      '</div>\n' +
                      '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-6 col_xs-12 text-center">\n' +
                      '<figure class="wp-caption aligncenter" style="transform: rotate(-5deg); ">\n' +
                      '<a href="' + e.data.textBoxURLImg2 + '">\n' +
                      '<img class="wp-image size-full" title="' + e.data.textBoxTextImg2 + '" src="' + e.data.textBoxURLImg2 + '" alt="' + e.data.textBoxTextImg2 + '" />\n' +
                      '</a>\n' +
                      '<div class="wp-caption-text">' + e.data.textBoxTextImg2 + '</div></figure>\n' +
                      '</div>\n' +
                      '<div class="col_-xxl-4 col_-xl-4 col_-md-4 col_-sm-12 col_xs-12 text-center">\n' +
                      '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); ">\n' +
                      '<a href="' + e.data.textBoxURLImg3 + '">\n' +
                      '<img class="wp-image size-full" title="' + e.data.textBoxTextImg3 + '" src="' + e.data.textBoxURLImg3 + '" alt="' + e.data.textBoxTextImg3 + '" />\n' +
                      '</a>\n' +
                      '<div class="wp-caption-text">' + e.data.textBoxTextImg3 + '</div></figure>\n' +
                      '</div>\n' +
                      '</div>\n\n' +
                      '&nbsp;');
                  },
                });
              }
            },
            {
              text: 'Añadir 4',
              icon: ' be-ico_imgs_4',
              onclick: function () {
                editor.windowManager.open({
                  title: 'Añadir 4 imágenes',
                  body: [
                    {
                      type: 'textbox',
                      name: 'textBoxTextImg1',
                      id: 'textBoxTextImg1',
                      label: 'IMG1 Texto',
                      value: 'Texto',
                      placeholder: 'Texto'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxURLImg1',
                      id: 'textBoxURLImg1',
                      label: 'IMG1 URL',
                      placeholder: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg',
                      minWidth: 300,
                      value: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg'
                    },
                    {
                      type: 'button',
                      name: 'buttonImg1',
                      id: 'buttonImg1',
                      text: 'Seleccionar imágen',
                      value: null,

                      onclick: function () {
                        let mediaUploader;
                        if (mediaUploader) {
                          mediaUploader.open();
                          return;
                        }
                        mediaUploader = wp.media.frames.fle_frame = wp.media({
                          title: 'Añadir imágen a la derecha',
                          button: {
                            text: 'Añadir'
                          },
                          multiple: false
                        })
                        mediaUploader.on('select', function () {
                          attachment = mediaUploader.state().get('selection').first().toJSON();
                          let textBoxURLImg1 = document.querySelector('#textBoxURLImg1');
                          textBoxURLImg1.value = attachment['url'];
                        });
                        mediaUploader.open();
                      }
                    },

                    {
                      type: 'textbox',
                      name: 'textBoxTextImg2',
                      id: 'textBoxTextImg2',
                      label: 'IMG2 Texto',
                      value: 'Texto',
                      placeholder: 'Texto'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxURLImg2',
                      id: 'textBoxURLImg2',
                      label: 'IMG2 URL',
                      placeholder: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg',
                      minWidth: 300,
                      value: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg'
                    },
                    {
                      type: 'button',
                      name: 'buttonImg2',
                      id: 'buttonImg2',
                      text: 'Seleccionar imágen',
                      value: null,

                      onclick: function () {
                        let mediaUploader;
                        if (mediaUploader) {
                          mediaUploader.open();
                          return;
                        }
                        mediaUploader = wp.media.frames.fle_frame = wp.media({
                          title: 'Añadir imágen a la derecha',
                          button: {
                            text: 'Añadir'
                          },
                          multiple: false
                        })
                        mediaUploader.on('select', function () {
                          attachment = mediaUploader.state().get('selection').first().toJSON();
                          let textBoxURLImg2 = document.querySelector('#textBoxURLImg2');
                          textBoxURLImg2.value = attachment['url'];
                        });
                        mediaUploader.open();
                      }
                    },

                    {
                      type: 'textbox',
                      name: 'textBoxTextImg3',
                      id: 'textBoxTextImg3',
                      label: 'IMG3 Texto',
                      value: 'Texto',
                      placeholder: 'Texto'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxURLImg3',
                      id: 'textBoxURLImg3',
                      label: 'IMG3 URL',
                      placeholder: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg',
                      minWidth: 300,
                      value: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg'
                    },
                    {
                      type: 'button',
                      name: 'buttonImg3',
                      id: 'buttonImg3',
                      text: 'Seleccionar imágen',
                      value: null,

                      onclick: function () {
                        let mediaUploader;
                        if (mediaUploader) {
                          mediaUploader.open();
                          return;
                        }
                        mediaUploader = wp.media.frames.fle_frame = wp.media({
                          title: 'Añadir imágen a la derecha',
                          button: {
                            text: 'Añadir'
                          },
                          multiple: false
                        })
                        mediaUploader.on('select', function () {
                          attachment = mediaUploader.state().get('selection').first().toJSON();
                          let textBoxURLImg3 = document.querySelector('#textBoxURLImg3');
                          textBoxURLImg3.value = attachment['url'];
                        });
                        mediaUploader.open();
                      }
                    },

                    {
                      type: 'textbox',
                      name: 'textBoxTextImg4',
                      id: 'textBoxTextImg4',
                      label: 'IMG4 Texto',
                      value: 'Texto',
                      placeholder: 'Texto'
                    },
                    {
                      type: 'textbox',
                      name: 'textBoxURLImg4',
                      id: 'textBoxURLImg4',
                      label: 'IMG4 URL',
                      placeholder: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg',
                      minWidth: 300,
                      value: 'https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/no-image.jpg'
                    },
                    {
                      type: 'button',
                      name: 'buttonImg4',
                      id: 'buttonImg4',
                      text: 'Seleccionar imágen',
                      value: null,

                      onclick: function () {
                        let mediaUploader;
                        if (mediaUploader) {
                          mediaUploader.open();
                          return;
                        }
                        mediaUploader = wp.media.frames.fle_frame = wp.media({
                          title: 'Añadir imágen a la derecha',
                          button: {
                            text: 'Añadir'
                          },
                          multiple: false
                        })
                        mediaUploader.on('select', function () {
                          attachment = mediaUploader.state().get('selection').first().toJSON();
                          let textBoxURLImg4 = document.querySelector('#textBoxURLImg4');
                          textBoxURLImg4.value = attachment['url'];
                        });
                        mediaUploader.open();
                      }
                    },
                  ],
                  onsubmit: function (e) {
                    editor.insertContent('<div class="row_ mt20 mb20">\n\n' +
                      '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-6 col_xs-12 text-center">\n' +
                      '<figure class="wp-caption aligncenter" style="transform: rotate(-5deg); ">\n' +
                      '<a href="' + e.data.textBoxURLImg1 + '">\n' +
                      '<img class="wp-image size-full" title="' + e.data.textBoxTextImg1 + '" src="' + e.data.textBoxURLImg1 + '" alt="' + e.data.textBoxTextImg1 + '" />\n' +
                      '</a>\n' +
                      '<div class="wp-caption-text">' + e.data.textBoxTextImg1 + '</div></figure>\n' +
                      '</div>\n' +
                      '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-6 col_xs-12 text-center">\n' +
                      '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); ">\n' +
                      '<a href="' + e.data.textBoxURLImg2 + '">\n' +
                      '<img class="wp-image size-full" title="' + e.data.textBoxTextImg2 + '" src="' + e.data.textBoxURLImg2 + '" alt="' + e.data.textBoxTextImg2 + '" />\n' +
                      '</a>\n' +
                      '<div class="wp-caption-text">' + e.data.textBoxTextImg2 + '</div></figure>\n' +
                      '</div>\n' +
                      '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-6 col_xs-12 text-center">\n' +
                      '<figure class="wp-caption aligncenter" style="transform: rotate(-5deg); ">\n' +
                      '<a href="' + e.data.textBoxURLImg3 + '">\n' +
                      '<img class="wp-image size-full" title="' + e.data.textBoxTextImg3 + '" src="' + e.data.textBoxURLImg3 + '" alt="' + e.data.textBoxTextImg3 + '" />\n' +
                      '</a>\n' +
                      '<div class="wp-caption-text">' + e.data.textBoxTextImg3 + '</div></figure>\n' +
                      '</div>\n' +
                      '<div class="col_-xxl-3 col_-xl-3 col_-md-3 col_-sm-6 col_xs-12 text-center">\n' +
                      '<figure class="wp-caption aligncenter" style="transform: rotate(5deg); ">\n' +
                      '<a href="' + e.data.textBoxURLImg4 + '">\n' +
                      '<img class="wp-image size-full" title="' + e.data.textBoxTextImg4 + '" src="' + e.data.textBoxURLImg4 + '" alt="' + e.data.textBoxTextImg4 + '" />\n' +
                      '</a>\n' +
                      '<div class="wp-caption-text">' + e.data.textBoxTextImg4 + '</div></figure>\n' +
                      '</div>\n' +
                      '</div>\n\n' +
                      '&nbsp;');
                  },
                });
              }
            },
          ]
        },
        {
          text: 'YouTube',
          icon: ' be-ico_youtube',
          menu: [
            {
              text: 'Banner',
              icon: ' be-ico_youtube_banner',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Acerca del autor',
              icon: ' be-ico_youtube_author',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Libros publicados',
              icon: ' be-ico_youtube_books',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Contacto y redes sociales',
              icon: ' be-ico_youtube_social',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },
            {
              text: 'Ficha técnica',
              icon: ' be-ico_youtube_data_table',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },

            {
              text: 'Actualización',
              icon: ' be-ico_youtube_update',
              onclick: function () {
                editor.insertContent('<div class="row_">\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 1 of 2</div>\n' +
                  '<div class="col_-xxl-12 col_-xl-12 col_-md-12 col_-sm-12 col_xs-12 text-center">Content column 2 of 2</div>\n' +
                  '</div>\n' +
                  '&nbsp;');
              }
            },

          ]
        },
      ]
    });
  });
})();