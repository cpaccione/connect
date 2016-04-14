<?php get_header(); ?>

<div class="container">

    <div class="row">
This is single.php
        <div class="col-md-9">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php endwhile; else: ?>

            <div class="page-header">
                <h1>Oh no!</h1>
            </div>

            <p>No content is appearing on this page!</p>

        <?php endif; ?>

    </div>

    <?php get_sidebar( 'blog' ); ?>

    </div>

<?php get_footer(); ?>