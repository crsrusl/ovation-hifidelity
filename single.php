<?php get_header(); ?>

<div class="container">

    <section class="row section-break">
        <div class="col-md-12">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </section>

    <section class="row section-break">
        <div class="col-md-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>       
    </section>
</div>

<?php get_footer(); ?>