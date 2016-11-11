<?php /* Template Name: FAQs Page */ ?>

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
    <section class="row section-break faq-contents">
        <div class="col-md-12">
            <h3>Contents</h3>
            <ol>
                <?php $loop = new WP_Query(array('post_type' => 'faq', 'posts_per_page' => -1)); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <li><a href="#<?php echo get_the_ID(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile;
                wp_reset_query(); ?>
            </ol>
        </div>
    </section>

    <?php $loop = new WP_Query(array('post_type' => 'faq', 'posts_per_page' => -1)); ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <section class="row section-break" id="<?php echo get_the_ID(); ?>">
            <div class="col-md-12">
                <h3><?php the_title(); ?></h3>
            </div>
        </section>
        <section class="row section-break">
            <div class="col-md-12">
                <?php echo the_field('answer_text'); ?>
            </div>
        </section>
    <?php endwhile;
    wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
