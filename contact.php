<?php
/*
Template Name: Contact
*/
get_header(); ?>


<div class="row">
    <div class="large-12 columns text-center">
        <h3 class="b-title">Contact Us</h3>
    </div>
</div>

<div class="row">
    <div class="large-6 columns">
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

    <div class="large-6 columns text-center fb animated rotateInUpRight">
        <a href="https://www.facebook.com/pages/Muscle-Hustle/251912698310936" target="_blank">
            <div class="fb-title">
                <i class="fi-social-facebook left"></i>
                <h3>Latest from <b>Facebook</b></h3>
            </div>
        </a>
        <iframe class="fb-feed" src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2F251912698310936&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=false&height=400" scrolling="yes" frameborder="0" style="border: 1px solid #3b5999; overflow:hidden; width:100%; height:372px; background: rgba(0,0,0,0); float:left; " allowtransparency="true">
        </iframe>
    </div>
</div>


<?php get_footer(); ?>
