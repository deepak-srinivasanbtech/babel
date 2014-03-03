; Drupal.org release file.
core = 7.23
api = 2

libraries[ckeditor][download][type] = "file"
libraries[ckeditor][download][url] = "http://download.cksource.com/CKEditor/CKEditor/CKEditor%203.6.6/ckeditor_3.6.6.zip"


; THEMING
projects[] = adaptivetheme
projects[] = sky


projects[admin_menu] = 3.0-rc4
projects[ctools] = 1.3
projects[diff] = 3.2
projects[edit_section] = 1.0-beta2
projects[extlink] = 1.13
projects[features] = 1.0
projects[flexifilter] = 1.0-beta1
projects[footnotes] = 2.5
projects[pathauto] = 1.2
projects[strongarm] = 2.0
projects[talk] = 1.0
projects[token] = 1.5
projects[wikitools] = 1.0-alpha1
projects[wysiwyg] = 2.2


projects[prepopulate][type] = module
projects[prepopulate][download][type] = git
projects[prepopulate][download][revision] = 4753fe9b2a918e22926f402df38da85ac00b9bbd
projects[prepopulate][download][branch] = 7.x-2.x

projects[footnotes][type] = module
projects[footnotes][download][type] = git
projects[footnotes][download][revision] = 7b12c7717b62d25b936fe8685d06efb9ab6afcdf
projects[footnotes][download][branch] = 7.x-2.x

projects[freelinking][type] = module
projects[freelinking][download][type] = git
projects[freelinking][download][revision] = 0b0c126ed9773b1798026eaf6dbd4a3d142133f4
projects[freelinking][download][branch] = 7.x-3.x
projects[freelinking][patch][] = "http://drupal.org/files/freelinking_recursive_patch-1665010-22.patch"

