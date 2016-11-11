<?php /* Template Name: Commercial Page */ ?>

<?php get_header(); ?>

<div class="container">
    <section class="row section-break">
        <div class="col-md-12">
            <h3 class="no-banner"><?php the_title(); ?></h3>
        </div>
    </section>
    <section class="row section-break">
        <div class="col-md-12">
            <?php echo the_field('commercial_information'); ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>
