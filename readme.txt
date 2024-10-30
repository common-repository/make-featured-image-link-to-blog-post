=== Make featured image link to blog post ===
Contributors: voordeligict
Tags: featured, image, add link, blog, voordelig ict
Donate link: https://voordeligict.nl
Requires at least: 6.0
Tested up to: 6.7
Requires PHP: 8.0
Stable tag: 1.15
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds a function to the function.php file. This function will make the featured image link back to the blog the image was inserted.

== Description ==
Adds a function to the function.php file of your current active theme. This function will make the featured image link back to the blog the image was inserted.
This way you do not have to change your themes files and your changes will not be gone after a theme update.

**Make sure your theme doesn't allready have this function. Some themes allready have this function by default.**


== Installation ==
1. Upload the plug-in files to the \\\'/wp-content/plugins/\\\' folder, or install from the WordPress plugin library.
2. Activate the plug-in from the WordPress plug-in menu.

== Frequently Asked Questions ==
= Q: How does this plug-in work? =
A: It just adds a simple code to the function.php file of you active theme. This will add a link to the featured image which is added to a blog.

= Q: Which code is added? =
A: function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>'; return $html;} add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );

= Q: Do I need to change anything in my settings? =
A: Nope. Just activate the plug-in and add a featured image to a post. That is it.

== Screenshots ==
1. Example of the php code used.

== Changelog ==
= 1.15 =
* Updated and tested up to WordPress version 6.7.

= 1.14 =
* Update: code update.

= 1.13 =
* Update: code update.

= 1.12 =
* Updated and tested up to WordPress version 6.6.

= 1.11 =
* Updated and tested up to WordPress version 6.5.

= 1.10 =
* Updated and tested up to WordPress version 6.4. Changed Stable tag to version number.

= 1.9 =
* Updated and tested up to WordPress version 6.3.

= 1.8 =
* Updated and tested up to WordPress version 6.2.

= 1.7 =
* Updated and tested up to WordPress version 6.1. Changed minimal required PHP version to 7.0.

= 1.6 =
* Updated and tested up to WordPress version 6.0

= 1.5 =
* Updated and tested up to WordPress version 5.9

= 1.4 =
* Updated and tested up to WordPress version 5.8

= 1.3 =
* Minor code change

= 1.2 =
* Updated and tested up to WordPress version 5.7

= 1.1 =
* Minor changes in the tags and description

= 1.0 =
* First release of the plugin.

== Upgrade Notice ==
= 1.15 =
Updated the plugin for use with WordPress version 6.7. Please update the plugin so you always have the latest version.

= 1.14 =
Updated the plugin. Please update the plugin so you always have the latest version.

= 1.13 =
Updated the plugin. Please update the plugin so you always have the latest version.

= 1.12 =
Updated the plugin for use with WordPress version 6.6. Please update the plugin so you always have the latest version.

= 1.11 =
Updated the plugin for use with WordPress version 6.5. Please update the plugin so you always have the latest version.

= 1.10 =
Updated the plugin for use with WordPress version 6.4. Please update the plugin so you always have the latest version.

= 1.9 =
Updated the plugin for use with WordPress version 6.3. Please update the plugin so you always have the latest version.

= 1.8 =
Updated the plugin for use with WordPress version 6.2. Please update the plugin so you always have the latest version.

= 1.7 =
Updated the plugin for use with WordPress version 6.1. Please update the plugin so you always have the latest version.

= 1.6 =
Updated the plugin for use with WordPress version 6.0. Please update the plugin so you always have the latest version.

= 1.5 =
Updated the plugin for use with WordPress version 5.9. Please update the plugin so you always have the latest version.

= 1.4 =
Updated plug-in for use with WordPress version 5.8. Please update the plug-in so you always have the latest version.

= 1.3 =
Please update to newest version.

= 1.2 =
Please update to newest version due to minor changes.

= 1.1 =
Please update to newest version due to minor changes.

= 1.0 =
plugin is live and ready to use.