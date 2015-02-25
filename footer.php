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

            <div class="footer-contact">

                <address class="show-for-large-up">
                    Muscle Hustle &copy; 2014
                    <i class="fi-telephone"></i>
                    +44 77 18168851
                    <a href="mailto:contact@muscle-hustle.co.uk"><i class="fi-mail"></i>
                    contact@muscle-hustle.co.uk</a>

                </address> 

                <address class="show-for-small-up hidden-for-large-up text-center">
                    Muscle Hustle &copy; 2014 <br>
                    <i class="fi-telephone"></i>
                    +44 77 18168851 <br>
                    <a href="mailto:contact@muscle-hustle.co.uk"><i class="fi-mail"></i>
                    contact@muscle-hustle.co.uk</a>

                </address> 

            </div>
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
