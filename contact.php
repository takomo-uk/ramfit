<?php
/*
Template Name: Contact
*/
get_header(); ?>


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

<div class="row space-top">
    <div class="large-6 columns text-center fb">
        <a href="https://www.facebook.com/pages/Muscle-Hustle/251912698310936" target="_blank">
            <div class="fb-title">
                <i class="fi-social-facebook left"></i>
                <h3>Latest from <b>Facebook</b></h3>
            </div>
        </a>
        <iframe class="fb-feed" src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2F251912698310936&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=false&height=400" scrolling="yes" frameborder="0" style="border: 1px solid #3b5999; overflow:hidden; width:100%; height:372px; background: rgba(0,0,0,0); float:left; " allowtransparency="true">
        </iframe>
    </div>

    <div class="large-6 columns text-center outer-spacing">

        <!-- Testimonials -->
        <h3 class="b-title">What people say</h3>

        <div class="testimonials">
            <ul data-orbit
                data-options="
                timer_speed: 5000;
                timer: true;
                pause_on_hover: false;
                slide_number: false;
                animation_speed: 500;
                navigation_arrows: false;
                bullets: true;">

                <li data-orbit-slide="testimonial-1">
                    <div>
                        <blockquote>
                            Brilliant corporate day. Team had fun and encouraged eachother. Great for morale
                            <cite>Cormac O'Brien, Muscle Hustle Corporate Fun Day</cite>
                        </blockquote>
                    </div>
                </li>
                <li data-orbit-slide="testimonial-1">
                    <div>
                        <blockquote>
                            Fabrice has mastered the art of combining informal chat with firm direction, gentle hard challenge and humour
                            <cite>Greg Suart 1-2-1 session</cite>
                        </blockquote>
                    </div>
                </li>
                <li data-orbit-slide="testimonial-1">
                    <div>
                        <blockquote>
                            Had lots of fun and recommend this to anyone great workout and will come back again
                            <cite>Alesha, Muscle Hustle Bootcamp</cite>
                        </blockquote>
                    </div>
                </li>
                <li data-orbit-slide="testimonial-2">
                    <div>
                        <blockquote>
                            Great instructor & motivator
                            <cite>Rafia, Muscle Hustle Bootcamp</cite>
                        </blockquote>
                    </div>
                </li>
                <li data-orbit-slide="testimonial-3">
                    <div>
                        <blockquote>
                            Fabrice is an excellent personal trainer, I recommend him without hesitation
                            <cite>Greg Suart, 1-2-1 session</cite>
                        </blockquote>
                    </div>
                </li>
                <li data-orbit-slide="testimonial-4">
                    <div>
                        <blockquote>
                            A friendly welcolme and great facilities
                            <cite>Lee Butler, Muscle Hustle Corporate Fun Day</cite>
                        </blockquote>
                    </div>
                </li>
            </ul>
        </div><!-- // Testimonials -->

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/trans-logo.png" alt="Muscle Hustle Logo" />
    </div>
</div>


<?php get_footer(); ?>
