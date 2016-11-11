<?php /* Template Name: Technology Page */ ?>

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
        <div class="col-md-12">
        </div>
    </section>

    <section class="row section-break">
        <div class="col-md-6">
            <?php the_field('column_1') ?>
        </div>
        <div class="col-md-6">
            <?php the_field('column_2') ?>
        </div>
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