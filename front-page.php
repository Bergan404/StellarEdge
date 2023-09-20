<?php

/**
 * Template Name: Home Page
 *
 * Template for a home page
 *
 */

get_header(); ?>

<section class="container-fluid black-bg py-5 vh-100 full-bg" labelledby="hero-heading" style="background-image: url(<?php echo get_theme_file_uri() ?>/assets/img/abstract-lines-reformat.png);">
    <div class="container main-content">
        <div class="m-auto text-center">
            <img src="<?php echo get_theme_file_uri() ?>/assets/img/Logo-with-background-blur.png" alt="logo">
        </div>
        <div class="main-content-text py-4 col-10 m-auto">
            <p>Here at StellarEdge, we're your gateway to a visually stunning and highly functional digital presence. We specialize in crafting websites and graphics that leave a lasting impression. Our mission is to bring your vision to life in the digital realm, creating unique and captivating online experiences that resonate with your audience.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
