<?php
/*
Plugin Name: Latest Post Date
Plugin URI: http://wordpress.org/extend/plugins/has-more/
Description: Adds two template tags, <code>latest_post_date()</code> and <code>latest_post_modified_date()</code>, the first echoes the most recent post publication date, the second echoes the modification date of the most recently modified post. Each takes two params: <strong>$date_format</strong>, standard <a href="http://codex.wordpress.org/Formatting_Date_and_Time">WP date formatting string</a> (defaults to the default date formatting for your WP blog), and <strong>$echo</strong>, display the date, if <code>TRUE</code>, or return the date to be used in PHP, if <code>FALSE</code>, (defaults to <code>TRUE</code>). For example: <code><?php latest_post_date( 'l, F j, Y', TRUE ); ?></code> would return a date similar to <em>Friday, September 24, 2004</em> for use in PHP. Another example: <code><?php latest_post_date(); ?></code> would echo a date in the default formatting for your WP blog.
Author: Simon Wheatley
Version: 1.01
Author URI: http://simonwheatley.co.uk/wordpress/
*/

/*  Copyright 2008 Simon Wheatley

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

function lpd_post_date( $date_format, $echo, $modified_date = false )
{
	// Let's get that date
	global $wpdb;
	$date_col = 'post_date';
	if ( $modified_date ) $date_col = 'post_modified';
	$sql = " SELECT $date_col FROM {$wpdb->posts} WHERE post_status = 'publish' AND post_type = 'post' ORDER BY $date_col DESC LIMIT 1 ";
	$mysql_date = $wpdb->get_var( $sql );
	// Format the date appropriately
	if ( ! $date_format ) $date_format = get_option('date_format');
	$formatted_date = mysql2date( $date_format, $mysql_date );
	// Echo or return
	echo $formatted_date;
}

// The template tags, here they are.

function latest_post_date( $date_format = null, $echo = true )
{
	return lpd_post_date( $date_format, $echo );
}

function latest_post_modified_date( $date_format = null, $echo = true )
{
	return lpd_post_date( $date_format, $echo, true );
}

?>