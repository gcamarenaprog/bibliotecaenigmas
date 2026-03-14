# Biblioteca Enigmas WordPress Theme

Sahifa theme personalized for bibliotecaenigmas.com website!.

## Description

Based on the Sahifa theme by Tielabs, it allows you to add books with their cover, general information, and archive 
information, as well as adding author, publisher, and genre taxonomies for each book. It also includes a widget that 
allows you to publish a list of books based on three criteria: most recent, popular, or most interesting. A random 
image widget allows you to customize the directory from which images are loaded.

## Contents

The Biblioteca Enigmas Theme WordPress includes the following topics:

* Changelog
* Features
* More features
* Want to contribute?
* Installation
* Frequently Asked Questions
* License
* Important Notes
    * Licensing
* Credits
* Documentation, FAQs and more
* Help and documentation files

## New Files For Biblioteca Enigmas Template

```bash
library
|_ library-function.php                   This file contains the theme file paths, custom styles, functions and function registration.
|_ widgets.php                            This file contains the paths for the custom widgets.
|
|_ admin
| |_ add_book.php                         This file contains the functions to add custom meta.
| |_ book.php                             This file contains the functions for register and initialization of personalized taxonomies.
|   
|_ css
| |_ base.css                             This is the style file base the Biblioteca Enigmas Theme.
| |_ boostrap-grid.min.css                This is the style file of boostrap grid the Biblioteca Enigmas Theme.
| |_ personalized.css                     Style files for the Sahifa theme custom style.
| |_ template-be.css                      General style file the Biblioteca Enigmas Theme.
| |_ template-be-admin.css                Admin style file for the Biblioteca Enigmas Theme.
| |_ template-be-home.css                 Home page style file for the Biblioteca Enigmas Theme.
|
|_ framework
| |_ blocks                               This directory contains the files for the blog. book, home, quotes and taxonomy pages.
| | |_ blog                               This directory contains the files for the blog.
| | | |_ grid                             This directory contains the files for the grid blog.
| | | | |_ blockquote-day.php             This file displays blockquote day on the grid blog.
| | | | |_ information.php                This file displays the name and description of the category on the grid blog.
| | | | |_ last-posts.php                 This file displays the last posts on the grid blog.
| | | | |_ list-posts.php                 This file displays the table with the list of posts on the grid blog.
| | | |
| | | |_map                               This directory contains the files for the maps pages.
| | | | |_ fortean-blog-maps.php          This file displays the fortean blog maps.
| | | | |_ writer-blog-maps.php           This file displays the writer blog maps.
| | | |
| | | |_ search                           This directory contains the files for the searches pages.
| | | | |_ fast-search-fortean-blog.php   This file shows the Fortean blog search page.
| | | | |_ fast-search-writer-blog.php    This file shows the writer blog search page.
| | | |
| | | |_ single                           This directory contains the files for the sections of the single post.
| | |   |_ author.php                     This file contains the author section of a blog post page.
| | |   |_ check-also.php                 This file contains the check-also section of a blog post page.
| | |   |_ image.php                      This file contains the image section of a blog post page.
| | |   |_ meta.php                       This file contains the meta-section of a blog post page.
| | |   |_ navigation.php                 This file contains the image section of a blog post page
| | |   |_ related.php                    This file contains the related section of a blog post page.
| | |   |_ share.php                      This file contains the related section of a blog post page.
| | |
| | |_ book                               This directory contains the files for the sections of the books.
| | | |_ descriptions                     This directory contains descriptions of some specific genres.
| | | |_ grid                             This directory contains the files for the sections of the book grid page.
| | | | |_ blockquote-day.php             This file displays blockquote day on the grid books.
| | | | |_ last-books.php                 This file displays last books on the grid books.
| | | | |_ welcome.php                    This file displays welcome section on the grid books.
| | | |  
| | | |_ maps                             This directory contains the files for the sections of the map page.
| | | | |_ book-editorial-map.php         This file shows the editorial map page.
| | | | |_ book-genre-map.php             This file shows the genre map page.
| | | | |_ book-writer-map.php            This file shows the writer map page.
| | | |  
| | | |_ search                           This directory contains the files for the sections of the search page.
| | | | |_ fast-search.php                This file shows fast search page.
| | | | |_ taxonomy-search.php            This file shows taxonomy search page.
| | | |  
| | | |_ single                           This directory contains the files for the sections of the single book page.
| | |   |_ author.php                     This file shows the author section of the single book page.
| | |   |_ check-also.php                 This file shows the check also section of the single book page.
| | |   |_ data.php                       This file shows the data section of the single book page.
| | |   |_ header.php                     This file shows the header section of the single book page.
| | |   |_ navigation.php                 This file shows the navigation section of the single book page.
| | |   |_ related.php                    This file shows the related section of the single book page.
| | |   |_ share.php                      This file shows the share section of the single book page.
| | |   |_ tumbnail.php                   This file shows the thumbnail section of the single book page.
| | |
| | |_ home                               This directory contains the files for the sections of the home page.
| | | |_ advice.php                       This file shows the advice section in home page.
| | | |_ blockquote-day.php               This file shows the blockquote day section in home page.
| | | |_ breaking-news.php                This file shows the breaking news section in home page.
| | | |_ buttons.php                      This file shows the buttons section in home page.
| | | |_ information.php                  This file shows the information section in home page.
| | | |_ last-post-book.php               This file shows the last post book section in home page.
| | | |_ last-post-fortean-blog.php       This file shows the last post fortean blog section in home page.
| | | |_ last-post-media.php              This file shows the last post media section in home page.
| | | |_ last-post-writer-blog.php        This file shows the last post writer blog section in home page.
| | | |_ welcome.php                      This file shows the welcome section in home page.
| | |
| | |_ quotes                             This directory contains the files for the sections of the quotes page.
| | | |_ search.php                       This file shows a search quotes page.
| | |
| | |_ taxonomy                           This directory contains the files for the sections of the taxonomies pages.
| |   |_ biography.php                    This file shows description and details of the writers.
| |   |_ blockquote-day-php               This file contains the blockquote day in taxonomy file.
| |   |_ description.php                  This file shows description and details of the genres in taxonomy file.
| |   |_ last-books.php                   This file shows the last books in taxonomy file.
| |   |_ list-books.php                   This file displays the table with the list of posts for each taxonomy.
| |   |_ query.php                        This file has php code for query in taxonomy file.
| | 
| |_ widgets                              This directory contains the files for the widgets.
|   |_ widget-books.php                   This file contains the code for the book list widget.
|   |_ widget-randomize-images.php        This file contains the code for the random image widget.
| 
|_ images                                 This directory contains the images files for the template.
| |_ backgrounds                          This directory contains background images for the template.
| |_ genres                               This directory contains images of literary genres.
| |_ icons                                This directory contains icon images for the template.
| |_ images                               This directory contains images related to the template.
| |_ logos                                This directory contains logo images for the page.
| |_ randomize-books                      This directory contains images for the template images widget.
| |_ randomize-fortean                    This directory contains images for the template images widget.
| |_ randomize-system                     This directory contains images for the template images widget.
| |_ randomize-water                      This directory contains images for the template images widget.
| |_ writers                              This directory contains the authors images.
|
|_ js                                     This directory contains files that add functionality to the Wordpress editor.
| |_ credits.svg                          Vector image file for the author credits button.
| |_ masonic.svg                          Vector image file for custom symbol button.
| |_ references.svg                       Vector image file for the book references button.
| |_ summary.svg                          Vector image file for the add book index button.
| |_ tiny-mce.js                          File containing the code to add functionality to the Wordpress editor.
| |_ title.svg                            Vector image file for the add title button.
|
|_ library-functions.php                  This file contains the theme file paths, custom styles, functions and function registration.
|_ widgets.php                            This file contains the paths for the library widgets.


```

## Changelog

* 1.0.0 (August 25, 2025). Stable version.

    * Initial release

## Features

The theme has the
following features:

- Author, publisher, and genre taxonomies
- Random image widget.
- Book list widget.
- Home page.
- Search pages.
- Map pages.
- Library section.
- Video library section.
- Fortean blog section.
- Author blog section.
- Quotes section.
- YouTube section.
- Each section includes:
    - Breadcrumb.
    - Welcome or description.
    - Quote of the day.
    - Book list (optional).
    - Latest releases grid.
- Each book section includes:
  - Breadcrumb
  - Meta data
  - Cover
  - Data book
  - Sinopsis
  - Summary
  - Share
  - Author
  - Next and previous book
  - Related books

## More Features

- The Biblioteca Enigmas Theme is based on
  the [Sahifa Theme](https://themeforest.net/item/sahifa-responsive-wordpress-news-magazine-newspaper-theme/2819356)
  by [Tielabs](http://tielabs.com/).
- All code, functions, and variables are documented so that you know what you need to change.
- The Biblioteca Enigmas Theme try to use a strict file organization scheme that corresponds both to the WordPress
  Plugin Repository structure, and that makes it easy to organize the files that compose the theme.
- The Biblioteca Enigmas Theme uses code from [DataTables 2.1.6](https://datatables.net/) is a plug-in for the jQuery
  Javascript library.
- The Biblioteca Enigmas Theme uses code from [Bootstrap 5.3.3 CSS](https://getbootstrap.com/) is a cross-platform library
  or open source toolkit for website design and web applications and much more.
- The Biblioteca Enigmas Theme uses code from [jQuery 3.7.1](https://jquery.com/) is a fast, small, and feature-rich
  JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and
  Ajax much simpler with an easy-to-use API that works across a multitude of browsers. With a combination of
  versatility and extensibility, jQuery has changed the way that millions of people write JavaScript..

## Want to contribute?

[Fork the GitHub repository](https://github.com/gcamarenaprog/bibliotecaenigmas).

## Installation

Installing "Bibliote Enigmas Theme" using the following steps:

1. Download and install the Sahifa Theme.
2. Download theme files via https://github.com/gcamarenaprog/bibliotecaenigmas
3. Upload files via ftp and all files.

## Frequently Asked Questions

### Any questions or concerns?

Send a message to gcamarenaprog@outlook.com

## License

The Enigmas Theme Library is licensed under the GPL v2 or later (only directories and files specified in the "New 
Files for the Enigmas Template Library" section).

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public
> License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
> warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free
> Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the plugin’s directory. The file is named `LICENSE`.

## Important notes

### Licensing

The Biblioteca Enigmas Theme is licensed under the GPL v2 or later; however, if you opt to use third-party code that is
not compatible with v2, then you may need to switch to using code that is GPL v3 compatible.

For reference, [here's a discussion](http://make.wordpress.org/themes/2013/03/04/licensing-note-apache-and-gpl/) that
covers the Apache 2.0 License used by [Bootstrap](http://twitter.github.io/bootstrap/).

# Credits

The Biblioteca Enigmas WordPress Theme was created in 2025 by [Guillermo Camarena](https://guillermocamarena.com)

The theme was initially created for the website [Biblioteca Enigmas](https://bibliotecaenigmas.com)

## Documentation, FAQs and more

Please send a message to [gcamarenaprog@outlook.com](mailto:gcamarenaprog@outlook.com)

## Help and documentation files

The Biblioteca Enigmas WordPress Theme includes the following files:

* `CHANGELOG.md`. The list of changes to the core project.
* `README.md`. The file that you’re currently reading.
* A `root` and `directories` that contains the source code—a fully executable Biblioteca Enigmas WordPress Theme.
