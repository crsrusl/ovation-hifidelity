<?php /* Template Name: Product Page */ ?>

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
            <h3>Product Description - <?php the_field('banner_header_text'); ?></h3>
        </div>
    </section>
    <section class="product row section-break">
        <div class="col-md-6">
            <h4><?php the_field('product_hook_text'); ?></h4>
            <div>
            <?php $product_user_manual = get_field('product_user_manual');
            if ($product_user_manual) { ?>
                <a href="<?php echo $product_user_manual; ?>" class="btn btn-cta">User Manual</a>
            <?php } ?>
            <?php $product_brochure = get_field('product_brochure');
            if ($product_brochure) { ?>
                <a href="<?php echo $product_brochure; ?>" class="btn btn-cta">Brochure</a>
            <?php } ?>
            <br /><br />
            </div>
            <?php $product_order_link = get_field('product_order_link'); ?>
            <?php if ($product_order_link) { echo $product_order_link; } ?>
        </div>
        <div class="col-md-6">
            <?php the_field('product_description_text'); ?>
        </div>
    </section>

    <section class="row section-break">
        <div class="col-md-12">
            <h3>Gallery</h3>
        </div>
    </section>

    <section class="row section-break">
        <?php foreach (get_field('product_gallery') as $image): ?>
            <div class="col-md-4">
                <a href="<?php echo $image['sizes']['large']; ?>" data-lightbox="group"
                   data-title="<?php echo $image['caption'] ?>">
                    <div class="image-thumb"
                         style="background-image: url('<?php echo $image['sizes']['large']; ?>')"></div>
                </a>
            </div>
        <?php endforeach; ?>
    </section>
    <section class="row section-break">
        <div class="col-md-12">
            <h3>Specification</h3>
        </div>
    </section>
    <section class="row section-break">
        <div class="col-md-12">
            <table class="table">
                <?php if (have_rows('specification')): while (have_rows('specification')) : the_row(); ?>
                    <tr>
                        <td><?php the_sub_field('title'); ?></td>
                        <td><?php the_sub_field('description'); ?></td>
                    </tr>
                <?php endwhile; endif; ?>
            </table>
        </div>
    </section>
    <section class="row section-break">
        <h3 class="text-center">
            <?php the_field('closing_header_text'); ?>
        </h3>
    </section>
</div>
<?php get_footer(); ?>
