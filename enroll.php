<?php
/*
Template Name: Enroll
*/
get_header(); ?>

<?php get_header(); ?>


<div class="row">
    <div class="large-12 columns">
        <?php /* Start loop */ ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/trans-logo.png" alt="Muscle Hustle Logo" />
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
