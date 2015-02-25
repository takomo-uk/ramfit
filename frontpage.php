<?php
/*
Template Name: Frontpage
*/
get_header(); ?>


<div class="orbit-container">
    <ul class="example-orbit back-of-house" data-orbit 
                data-options="
                timer_speed: 5000;
                timer: true;
                pause_on_hover:false;
                slide_number: false;
                animation_speed:500;
                navigation_arrows:true;
                bullets:false;">
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/ram-slider-pic-1.jpg" alt="slide 1" />
            <!-- <div class="orbit-caption">
              Caption One.
            </div> -->
        </li>
        <li class="active">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/ram-slider-pic-2.jpg" alt="slide 2" />
            <!-- <div class="orbit-caption">
              Caption Two.
            </div> -->
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/ram-slider-pic-3.jpg" alt="slide 3" />
            <!-- <div class="orbit-caption">
              Caption Three.
            </div> -->
        </li>
    </ul>
</div>

<div class="row">
    <div class="large-12 columns text-center ram-title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/ram-title-bg.png" alt="Ram Fitness Title" />
    </div>
</div>

<div class="gray-bg">
    <div class="row">
        <div class="large-12 columns">
            <div class="info-box inner-spacing text-center">

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
    </div>
</div>

<div class="row trans-white">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-4 medium-4 columns">
                <a href="?page_id=7">
                    <div class="link-box">
                        <div class="link-box-title">
                            <h5>Who we are</h5>
                        </div>
                        <div class="img-box link-box-pic-1">
                            
                        </div>
                    </div>
                </a>
            </div>
            <div class="large-4 medium-4 columns">
                <a href="?page_id=9">
                    <div class="link-box">
                        <div class="link-box-title">
                            <h5>Classes</h5>
                        </div>
                        <div class="img-box link-box-pic-2">
                            
                        </div>
                    </div>
                </a>
            </div>
            <div class="large-4 medium-4 columns">
                <a href="?page_id=33">
                    <div class="link-box">
                        <div class="link-box-title">
                            <h5>Online Training</h5>
                        </div>
                        <div class="img-box link-box-pic-3">
                            
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
