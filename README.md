# Twig Functions Xtra

* Introduction
* Installation
* Maintainers

## Instalation
Recomended using is via Composer:
`composer require jdgamsterdam/twig_functions_xtra`
... and install module "Druapl Twig Civi" in administration (domain.tld/admin/modules)

If not working use drush pm:uninstall twig_functions_xtra

## Documentation

The best documentation is easy examples, right? :-)

### Functions

#### - render_block_new
you can call block by name anywhere in template: ```{{ render_block_new('block_id', {label: 'Example'|t, some_setting: 'example', setting_array: {value: value}}) }}```

this is used the function of "Twig Blocks" (https://www.drupal.org/project/twig_blocks). Thanks for the team for creating a good template for Functions that work in Drupal 10 (as much has changed)  

#### - view_result_json($view_name, $display_id)
Usage example: ```{{ view_result_json('myview','mydisplay') }}``` Render the View Result as JSON array so you can manupulate with text or just figure out the fields to use.

#### - load_region($id)
this function offers print all block of the region anywhere you need: ```{{ load_region('machine_name') }}```

#### - load_main_node($returnId = true)
solving problem with getting node id from anywhere template when you need it ```{{ load_main_node() }}```

#### - load_gallery_prev($currentGalleryId, $thumbnailStyle = 'thumbnail')
array with previous media gallery: ```{{ load_gallery_prev(2) }}```

#### - load_gallery_next($currentGalleryId, $thumbnailStyle = 'thumbnail')
array with next media media: ```{{ load_gallery_next(1) }}```

#### - load_gallery_thumbs($galleryId, $thumbnailStyle = 'thumbnail')
array with images from gallery: ```{{ load_gallery_thumbs(5) }}```

#### - view_row_result($view_name, $display_id, $field_to_return, $row_to_return [-1 for last row])
Usage example: ```{{ view_row_result('myview','mydisplay','id',3) }}``` Returns a node number from an full URL or Alias URL.



#### - url_result_data($result_url)
Usage example: ```{{ url_result_data('myurl') }}``` This will only work on local URLs or domains that have been given cross site permissions. For External eg. (URL, false, false) Please use FQDN. If $internal is true (or not given) it will automatically calculate the hostname. For Internal urls DO NOT add starting "/" 
            
------

### Filters

#### - naked_field
return rendered field, for example from view, without developers suggestions (```<!-- Hook: etc --->```), without HTML tags like `<a href="xy">your_filed</a>`. Just naked string what you can use as class, data attribute or in twig condition! Using example: `{% set badge = content.field_show_badge|naked_field %}`

#### - max_length($max = 0, $dots = true)
Usage example: ```{{ teaser_text|max_length(5,true) }}``` Check string length and return him summary or in original. It is pretty alternative to ugly ```{{ teaser_text|length > 90 ? teaser_text|slice(0, 90) ~ ' ...' : teaser_text }}```. By second parameter you can disable adding "..." to the end of string.

#### - path_from_alias
Usage example: ```{{ mynodeurl|path_from_alias }}``` Returns a path from an Alias URL.

#### - nodeid_from_alias
Usage example: ```{{ mynodeurl|nodeid_from_alias }}``` Returns a node number from an full URL or Alias URL.


### Maintainers

* Jon Goldberg - https://www.goldbergcf.com 