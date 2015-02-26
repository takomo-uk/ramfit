</section>

<footer class="row">
    <?php do_action('foundationPress_before_footer'); ?>
    <?php dynamic_sidebar("footer-widgets"); ?>
    <?php do_action('foundationPress_after_footer'); ?>
</footer>
<a class="exit-off-canvas"></a>

    <?php do_action('foundationPress_layout_end'); ?>
    </div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>

<div class="page-footer">
    <div class="row">
        <div class="large-12 columns">

            <ul class="footer-social">
                <li>
                    <a href="https://www.facebook.com/pages/Muscle-Hustle/251912698310936" target="_blank"><i class="fi-social-facebook"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/MuscleHustle2" target="_blank"><i class="fi-social-twitter"></i></a>
                </li>
                <li>
                    <a href="http://instagram.com/musclehustleuk" target="_blank"><i class="fi-social-instagram"></i></a>
                </li>
            </ul>

            <div class="footer-logo text-center">

            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/ram-fitness-logo-small.png" /></a>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns copyright">
            &copy; RAM Fitness 2015
        </div>
    </div>
</div>

<script src="<?php echo get_stylesheet_directory_uri() ; ?>/js/fitvid.min.js"></script>
<script>
    window.onload = function() {
        fitVids('.video');
    }
</script>
</body>
</html>
