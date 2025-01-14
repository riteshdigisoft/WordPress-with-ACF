<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Suited & Booted
 * @since Suited & Booted 1.0
 */

get_header(); ?>


<?php

if ( have_posts() ) {

    // Start the loop for posts.
    while ( have_posts() ) {
        the_post();

        // Check if the Flexible Content field has rows.
        if ( have_rows('flexible_layouts') ) {  // Replace 'flexible_layouts' with your field's name.

            // Loop through each row/layout.
            while ( have_rows('flexible_layouts') ) {
                the_row();

                // Get the current layout name dynamically
                $layout = get_row_layout(); 

                // Build the path to the layout file dynamically
                $layout_file = get_template_directory() . '/layouts/' . $layout . '.php';

                // Check if the layout file exists and include it 
                if ( file_exists($layout_file) ) {
                    include( $layout_file ); // Include the layout file
                } else {
                    // Fallback if the layout file doesn't exist
                    echo '<p>Layout file for "' . esc_html($layout) . '" not found.</p>';
                }

            }

        } else {
            // Fallback if no flexible content is found.
            echo '<p>No flexible content found.</p>';
        }
    }

} else {
    // Fallback if no posts are found.
    echo '<p>No posts found.</p>';
}



    
get_footer(); ?>