<?php
/*
Single Post Template: exercise single
Description: -
*/
?>

<?php get_header(); ?>
<div class="row">
    <div class="large-12 columns">
        <h2><?php echo get_the_title( $ID ); ?></h2>
    </div>
</div>

<div class="row">
    <div class="large-8 medium-7 columns">

        <div class="exercise-cont">


            <?php while ( have_posts() ) : the_post(); ?>

            <div class="exercise-description exercise-padding white">
                <h4>Workout Description:</h4>
                <p><?php the_content(); ?></p>
            </div>

            <div class="exercise-video video exercise-padding white">
                <h4>Preview:</h4>
                <iframe width="420" height="315" src="<?php the_field('exercise_video_link'); ?>" frameborder="0" allowfullscreen></iframe>                
            </div>

        <?php endwhile; // end of the loop. ?>
        </div>
    </div>


    <div class="large-4 medium-5 columns">
        <div class="exercise-meta exercise-padding">
        <i class="fi-calendar"></i> <b>Date:</b> <?php the_field('exercise_date'); ?> <br>
        <i class="fi-clock"></i> <b>Time:</b> <?php the_field('exercise_time'); ?> <br>
        <i class="fi-graph-trend"></i> <b>Level:</b> <?php the_field('exercise_level'); ?>


        </div>
    </div>

    <a href="?page_id=70">
        <div class="large-4 medium-5 columns space-top">
            <div class="exercise-meta exercise-padding text-center">
                <p>Contact now to<br>
                <b>ENROLL</b></p>
            </div>
        </div>
    </a>
</div>

<?php get_footer(); ?>
