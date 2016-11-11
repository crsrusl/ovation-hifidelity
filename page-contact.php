<?php /* Template Name: Contact Page */ ?>

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
            <h3>Contact</h3>
        </div>
    </section>
    <section class="row section-break">
        <div class="col-md-6">
            <p>
                We respect your privacy and do not tolerate spam and will never sell, rent, lease or give away your
                information (name, address, email, etc.) to any third party. Nor will we send you unsolicited email.
            </p>
            <?php echo do_shortcode('[contact-form-7 id="159" title="Contact"]'); ?>
        </div>
        <div class="col-md-6">
            <div class="row">
                <?php foreach (get_field('image_gallery') as $image): ?>
                    <div class="col-md-6">
                        <a href="<?php echo $image['sizes']['large']; ?>" data-lightbox="group" data-title="<?php echo $image['caption'] ?>">
                            <div class="image-thumb" style="background-image: url('<?php echo $image['sizes']['large']; ?>')"></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="row section-break">
        <h3 class="text-center">
            <?php the_field('closing_header_text'); ?>
        </h3>
    </section>
</div>

<?php get_footer(); ?>
