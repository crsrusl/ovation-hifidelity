<?php /* Template Name: Commercial Template */ ?>

<?php get_header(); ?>

<div class="banner" style="background-image: url('<?php the_field('banner_image'); ?>');"
     xmlns="http://www.w3.org/1999/html">
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
    <?php if (have_rows('commercial_pages')): while (have_rows('commercial_pages')): the_row(); ?>
        <section class="row section-break">
            <div class="col-md-12">
                <?php $link = get_sub_field('the_commercial_page', false); ?>
                <h3><?php echo get_the_title($link); ?></h3>
                <p><?php the_sub_field('the_commercial_page_description'); ?></p>
            </div>
        </section>
    <?php endwhile; endif; ?>
    <section class="row section-break">
        <h3 class="text-center">
            <?php the_field('closing_header_text'); ?>
        </h3>
    </section>
</div>

<?php get_footer(); ?>
