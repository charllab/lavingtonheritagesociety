<header id="header" class="hero-nav-overlay">

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary px-0">
        <div class="container">
            <div class="nav-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                         alt="<?php bloginfo('name'); ?> - Logo"
                         class="img-fluid">
                    <span class="sr-only"><?php bloginfo('name'); ?></span>
                </a>
            </div>

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target=".mainnav-m" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="mainnav-m collapse navbar-collapse d-lg-flex flex-lg-column">
                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container_class' => 'ml-lg-auto',
                    'container_id' => 'mainnav',
                    'menu_class' => 'navbar-nav ml-lg-auto',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'walker' => new understrap_WP_Bootstrap_Navwalker(),
                ]); ?>
            </div>
        </div>
    </nav>

</header>