<?php
/*
Template Name: Media
*/
get_header(); ?>


<div class="row">
    <div class="large-12 columns text-center">
        <h2 class="b-title">Gallery</h2>
    </div>

    <div class="large-6 columns">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/IxPgPZ0fej4" frameborder="0" allowfullscreen></iframe>        
    </div>
    <div class="large-6 columns">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Zy3KNblBREI" frameborder="0" allowfullscreen></iframe>        
    </div>

    <div class="large-12 columns">
        <?php /* Start loop */ ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer>
                    <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
                    <p><?php the_tags(); ?></p>
                </footer>
            </article>
        <?php endwhile; // End the loop ?>
    </div>

</div>




<?php get_footer(); ?>
