<?php get_header(); ?>

<?php $hero = get_field('hero');
$button = $hero['banner_button']; ?>
    <section class="hero-section bg-dark" id="top"
        <?php if($hero['banner_image']) :?>
             style="background-image: url(<?php echo esc_attr($hero['banner_image']); ?>); background-size: cover; background-repeat: no-repeat; background-position: center;"
        <?php endif;?>
    >
        <div class="container py-2 px-1 text-center">
            <h2 class="display-4 ff-lobster text-white mb-1 mb-lg-150"><?php echo esc_attr($hero['banner_heading']); ?></h2>
            <?php if ($button['button_link']) : ?>
                <a href="<?php echo esc_attr($button['button_link']); ?>"
                   class="btn btn-light"><?php echo esc_attr($button['button_label']); ?></a>
            <?php endif; ?>
        </div><!-- container -->
    </section><!-- #top -->

<?php $purpose = get_field('purpose'); ?>
    <section class="bg-primary" id="our-purpose">
        <div class="container py-2 px-1 text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="display-4 ff-lobster text-white"><?php echo esc_attr($purpose['title']); ?></h2>
                    <p><?php echo esc_attr($purpose['blurb']); ?></p>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- #our-purpose -->

<?php $project = get_field('projects');
$projects = $project['projects']; ?>
    <section class="bg-white" id="projects">
        <div class="container py-2 px-1 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="display-4 ff-lobster mb-0"><?php echo esc_attr($project['section_title']); ?></h2>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- #projects -->

<?php if ($projects):
    foreach ($projects as $block) { ?>
        <section class="bg-white project-block">
            <div class="container px-0">
                <div class="row justify-content-center align-items-center no-gutters">
                    <div class="col-lg-6 project__image-col">
                        <div class="position-relative">
                            <img src="<?php echo esc_attr($block['project_image']) ?>"
                                 alt="<?php echo esc_attr($block['image_descriptive_title']); ?>"
                                 class="img-fluid d-block">
                            <div class="position-absolute title-overlay text-center">
                                <p class="mb-0 small py-50"><?php echo esc_attr($block['image_descriptive_title']) ?></p>
                            </div>
                        </div><!-- position-relative -->
                    </div><!-- col -->
                    <div class="col-lg-6 mobile-gutter-fix project__content-col">
                        <div class="py-1 py-lg-0 px-lg-2">
                            <h2><?php echo esc_attr($block['project_title']) ?></h2>
                            <?php echo $block['project_description']; ?>
                        </div>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- #projects -->
    <?php }
endif; ?>

<?php $about = get_field('about_us');
$teams = $about['teams']; ?>
    <section class="bg-primary" id="about">
        <div class="container pt-3 pb-1 px-1 text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="display-4 ff-lobster text-white"><?php echo esc_attr($about['section_title']); ?></h2>
                    <?php echo $about['blurb']; ?>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
        <?php if ($teams):
            foreach ($teams as $team) { ?>
                <div class="container pt-2 pb-1 px-1 text-center text-white">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <h2 class="text-white mb-150"><?php echo esc_attr($team['team_title']); ?></h2>
                        </div><!-- col -->
                    </div><!-- row -->
                    <?php $members = $team['profile'];
                    if ($members): ?>
                        <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="row justify-content-center">
                                        <?php foreach ($members as $member) { ?>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="px-2 px-md-1 pb-1 pb-md-0">
                                                <img src="<?php echo esc_attr($member['photo']['sizes']['profile']); ?>"
                                                     alt="<?php echo esc_attr($member['full_name']); ?>"
                                                     class="rounded-circle img-fluid d-block mb-50 mb-md-150 profile-img mx-auto">
                                                <p class="h5 text-white mb-0"><?php echo esc_attr($member['full_name']); ?></p>
                                                <?php if ($member['position']): ?>
                                                    <p class="small"><?php echo esc_attr($member['position']); ?></p>
                                                <?php endif; ?>
                                            </div><!-- px -->
                                        </div><!-- col -->
                                        <?php } ?>
                                    </div><!-- row -->
                                </div><!-- col -->
                        </div><!-- row -->
                    <?php endif; ?>
                </div><!-- container -->
            <?php }
        endif; ?>
    </section><!-- #about -->

    <section class="bg-white" id="gallery">
        <div class="container py-2 px-1 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="display-4 ff-lobster mb-0">Gallery</h2>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- #projects -->

<?php $volunteer = get_field('volunteer');
$help = $volunteer['help_button']; ?>
    <section class="bg-primary" id="our-purpose">
        <div class="container py-2 px-1 text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="display-4 ff-lobster text-white"><?php echo esc_attr($volunteer['section_title']);?></h2>
                    <p><?php echo $volunteer['blurb'];?></p>
                    <a href="<?php echo esc_attr($help['button_link']);?>" class="btn btn-secondary mt-1"><?php echo esc_attr($help['button_label']);?></a>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- #our-purpose -->

    <section class="flowers-section bg-warning">
        <div class="container py-2 px-1 text-center">
        </div><!-- container -->
    </section>

<?php get_footer();
