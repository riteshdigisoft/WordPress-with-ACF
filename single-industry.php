<?php get_header(); ?>

<div class="container" style="display:none;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="entry-meta">
                    <span class="post-date"><?php echo get_the_date(); ?></span>
                </div>
            </header>

            <div class="entry-content">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
                <div class="post-tags">
                    <?php the_tags('<span class="tag-links">', ', ', '</span>'); ?>
                </div>
            </footer>
        </article>

        <nav class="post-navigation">
            <div class="nav-links">
                <div class="nav-previous"><?php previous_post_link('%link', 'Previous Portfolio'); ?></div>
                <div class="nav-next"><?php next_post_link('%link', 'Next Portfolio'); ?></div>
            </div>
        </nav>

    <?php endwhile; endif; ?>
</div>


<?php 

if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();
        if ( have_rows('flexible_layouts') ) {
            while ( have_rows('flexible_layouts') ) {
                the_row();

                $layout = get_row_layout(); 
                $layout_file = get_template_directory() . '/layouts/' . $layout . '.php';
                if ( file_exists($layout_file) ) {
                    include( $layout_file );
                } else {
                    echo '<p>Layout file for "' . esc_html($layout) . '" not found.</p>';
                }
            }

        } else {
            echo '<p>No flexible content found.</p>';
        }
    }

} else {
    echo '<p>No posts found.</p>';
}

get_footer(); ?>    
