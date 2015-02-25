<?php
/*
Template Name: Online Training
*/
get_header(); ?>


<div class="row">
    <div class="large-12 columns text-center animated bounceInLeft">
        <h2 class="b-title">Online Training</h2>
    </div>
</div>

<div class="row">
    <div class="large-12 columns text-center animated bounceInLeft">
        <p>See our list of online training classes. The best option for you if you'd rather work out from home!</p>
        <p>Click on an exercise for more information and to enroll.</p>   
    </div>   
</div>

<?php 

// Options for online training list
$args = array(
    'posts_per_page'   => 5,
    'offset'           => 0,
    'category'         => '3',
    'orderby'          => 'post_date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'post',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true );
?>

    <?php 
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>

    <div class="row outer-spacing online-class-box animated animation-delay-1 bounceInRight">
    <a href="<?php the_permalink(); ?>">
        <div class="medium-8 columns">

            <div class="row">

                <div class="medium-10 columns online-class-info">



                    <h3>
                        <?php the_title(); ?>
                    </h3>

                    <p><?php the_field('description'); ?></p>

                    <small><b>Level:</b> <?php the_field('exercise_level'); ?></small>


                </div>

                <div class="medium-2 columns text-center class-date">
                    <h5>Date</h5>
                        <?php the_field('exercise_date'); ?>
                        <?php the_field('exercise_time'); ?>
                </div>

            </div>
        </div>

        <div class="right show-for-medium-up online-class-img">
            <?php 
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail();
            } else {
                echo "<div class=\"online-class-img\"></div>";
            }
            ?>

        </div>
    </a>
    </div>

    <?php endforeach; 
    wp_reset_postdata();?>

<?php get_footer(); ?>