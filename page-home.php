<?php /* Template Name: Commercial Page */ ?>

<?php get_header(); ?>

    <div class="banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="container">
            <section class="row">
                <div class="col-xs-6">
                    <h1><?php the_field('banner_header_text'); ?></h1>
                    <h4><?php the_field('banner_sub_header_text'); ?></h4>
                </div>
                <div class="col-xs-6"></div>
            </section>
        </div>
    </div>
    <div class="container">
        <section class="row section-break">
            <div class="col-md-6">
                <h2><?php the_field('header_text'); ?></h2>
            </div>
            <div class="col-md-6">
                <div>
                    <?php the_field('text') ?>
                </div>
            </div>
        </section>
        <section class="row section-break">
            <?php $i = 0; ?>
            <?php foreach (get_field('image_gallery') as $image): ?>
                <div class="col-md-4">
                    <a href="<?php echo $image['sizes']['large']; ?>" data-lightbox="group" data-title="<?php echo $image['caption'] ?>">
                        <div class="image-thumb" style="background-image: url('<?php echo $image['sizes']['large']; ?>')"></div>
                    </a>
                </div>
            <?php endforeach; ?>
        </section>
        <section class="row cta-button-section section-break">
            <div class="col-md-12 section-break text-center">
                <a href="<?php the_field('call_to_action_button_link'); ?>" class="btn btn-cta">
                    <?php the_field('call_to_action_button_text'); ?>
                </a>
            </div>
        </section>
        <section class="row section-break">
            <h3 class="text-center">
                <?php the_field('closing_header_text'); ?>
            </h3>
        </section>
    </div>

<?php get_footer(); ?>