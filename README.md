# Custom Post Type Promo codes

A custom post type to manage promo codes with a new taxonomy (boutique)

## Supports

* article  Order

## Custom Fields
* BOUTIQUE
* promotion
* description
* redirection
* code type: bon plan or code 
* code value if type is code
* expiration date
* URL

## Language Support

* french

## Hooks

### Actions

* `custom-post-type-clients-information-meta-box-before` - Post object is past as arguement
* `custom-post-type-clients-information-meta-box-after` - Post object is past as arguement
* `add_meta_boxes` 
* `manage_code_posts_custom_column` - Add management columns
* `save_post` - Save post metadata when a post is saved.

### Filters

* `save-client-meta` - Save client meta
* `manage_code_posts_columns` - Add management columns
* `post_updated_messages` - Post updated messages
* `manage_edit-code_sortable_columns` - make custom columns sortable

## ToDo

* Widget
* Shortcode
* Meta box as submodule

## Changelog

* Initial release
## Installation
you just have to uncompress the file the folder in the folder '... wp-content \ plugins'
then activate the plugin to add a menu on the admin menu.