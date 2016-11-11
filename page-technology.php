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
</div>

<div class="container">
    <?php if (have_rows('technologies')): while (have_rows('technologies')) : the_row(); ?>
        <section class="products row section-break">
            <div class="col-md-6">
                <div class="img-header" style="background-image: url(<?php the_sub_field('technology_image'); ?>)"></div>
            </div>
            <div class="col-md-6">
                <h2><?php the_sub_field('technology_name'); ?></h2>
                <h4><?php the_sub_field('technology_description'); ?></h4>
                <p><?php the_sub_field('technology_hook_text'); ?></p>
                <a href="<?php the_sub_field('technology_link'); ?>" class="btn btn-cta">More information</a>
            </div>
        </section>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
