<footer>
    <section class="flowers-section"
        <?php if (get_field('footer_image', 'options')) : ?>
            style="background-image: url(<?php the_field('footer_image', 'options'); ?>); background-size: cover;"
        <?php endif; ?>
    >
    </section>
    <section class="py-2 bg-white">
        <div class="container text-center text-lg-left">
            <div class="row justify-content-around text-primary">
                <div class="col-lg-3 px-4 px-md-0">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                         alt="<?php bloginfo('name'); ?> - Logo"
                         class="img-fluid d-block mx-auto mb-150 mb-lg-0">
                </div><!-- col -->
                <div class="col-lg-4">
                    <p> <?php the_field('footer_message', 'options'); ?>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p>
                        <b>Email</b><br>
                        <a href="mailto:<?php echo the_field('email', 'options'); ?>"
                           title="Email <?php echo get_bloginfo('name'); ?>"><?php echo the_field('email', 'options'); ?></a>
                    </p>
                    <p>
                        <b>B.C. Society Incorporation No.</b><br>
                        <?php echo the_field('bc_society_incorporation_no', 'options'); ?>
                    </p>
                    <p>
                        CRA Registered Charity No.<br>
                        <?php echo the_field('cra_registered_charity_no', 'options'); ?>
                    </p>
                    <a href="<?php echo the_field('footer_button_link', 'options'); ?>"
                       target="_blank"
                       class="btn btn-light">
                        <?php echo the_field('footer_button_label', 'options'); ?>
                    </a>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>
    <section class="pt-1 bg-yellow">
        <div class="container">
            <div class="row text-dark">
                <div class="col-lg-4 text-center text-lg-left">
                    <p class="small">&copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
                </div>
                <div class="col-lg-4 text-center">
                    <p class="small"><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy and Terms of Use</a></p>
                </div>
                <div class="col-lg-4 text-center text-lg-right">
                    <p class="small">Designed, Developed and Hosted by <a href="https://sproing.ca" target="_blank">Sproing&nbsp;Creative</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>

</body>

</html>