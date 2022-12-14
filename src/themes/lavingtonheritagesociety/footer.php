<footer>
    <section class="py-2 bg-secondary">
        <div class="container">
            <div class="row justify-content-around text-white">
                <div class="col-lg-3">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                         alt="<?php bloginfo('name'); ?> - Logo"
                         class="img-fluid">
                </div><!-- col -->
                <div class="col-lg-4">
                    <p> We are an Associate of the Greater Vernon Museum & Archives Society and we gratefully
                        acknowledge the use of their historical photography
                    </p>
                    <p>
                        We respectfully acknowledge that the District of Coldstream is located on the ancestral,
                        traditional and unceded territory of the Okanagan Nation and the Syilx People.
                    </p>
                </div>
                <div class="col-lg-3">
                    <p>
                        Email<br>
                        info@clhsbc.org
                    </p>
                    <p>
                        B.C. Society Incorporation No.<br>
                        S0071573
                    </p>
                    <p>
                        CRA Registered Charity No.<br>
                        78491 4475 RR0001
                    </p>
                    <a href="#" class="btn btn-light">Donate Now</a>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>
    <section class="pt-1">
        <div class="container">
            <div class="row text-dark">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="small">&copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
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