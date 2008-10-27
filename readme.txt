=== Latest Post Date ===
Contributors: simonwheatley
Donate link: http://www.simonwheatley.co.uk/wordpress/
Tags: template tag, themes, dates, post, latest post
Requires at least: 2.0
Tested up to: 2.6.2
Stable tag: 1.01

Adds two template tags `latest_post_date()` and `latest_post_modified_date()`.

== Description ==

Adds two template tags, `latest_post_date()` and `latest_post_modified_date()`, the first echoes the most recent post publication date, the second echoes the modification date of the most recently modified post.

Each template tag takes two params: **$date_format**, standard [WP date formatting string](http://codex.wordpress.org/Formatting_Date_and_Time) (defaults to the default date formatting for your WP blog), and **$echo**, display the date, if `TRUE`, or return the date to be used in PHP, if `FALSE`, (defaults to `TRUE`).

For example: `<?php latest_post_date( 'l, F j, Y', TRUE ); ?>` would return a date similar to *Friday, September 24, 2004* for use in PHP. Another example: `<?php latest_post_date(); ?>` would echo a date in the default formatting for your WP blog.

Is this plugin lacking a feature you want? I'm happy to discuss ideas, or to accept offers of feature sponsorship: [contact me](http://www.simonwheatley.co.uk/contact-me/) and we can have a chat.

Any issues: [contact me](http://www.simonwheatley.co.uk/contact-me/).

== Installation ==

The plugin is simple to install:

1. Download `latest-post-date.zip`
1. Unzip
1. Upload `latest-post-date` directory to your `/wp-content/plugins` directory
1. Go to the plugin management page and enable the plugin
1. Give yourself a pat on the back

== Change Log ==

= v1 2008/10/27 =

* Plugin first released

= v1.01 2008/10/27 =

* Removed various stray error logging code