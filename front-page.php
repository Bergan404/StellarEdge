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

            <!-- Carousel -->
            <section class="splide py-4" aria-label="Basic Structure Example">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="splide__slide row align-items-center">
                            <div class="col-3">
                                <img src="<?php echo get_theme_file_uri() ?>/assets/img/design.png" alt="design">
                            </div>
                            <div class="col">
                                <p>Our team of creative minds is here to transform yourideas into pixel-perfect designs. Whether you're a startup looking to establish your online presence or an established business seeking a fresh digital makeover, we're equipped to deliverexceptional design solutions. From elegant logos to eye-catching graphics, we ensure every element reflects your brand's essence.</p>
                            </div>
                        </div>
                        <div class="splide__slide row align-items-center">
                            <div class="col-3">
                                <img src="<?php echo get_theme_file_uri() ?>/assets/img/web-design.png" alt="web development">
                            </div>
                            <div class="col">
                                <p>A great design deserves an equally great website. Our web development experts work diligently to turn your design concepts into interactive, responsive, and user-friendly websites. We harness the latest technologies to build robust and scalable solutions that meet your specific needs. Our websites are not just beautiful; they're functional and effective, driving engagement and conversions.</p>
                            </div>
                        </div>
                        <div class="splide__slide row align-items-center">
                            <div class="col-3">
                                <img src="<?php echo get_theme_file_uri() ?>/assets/img/collab.png" alt="collab">
                            </div>
                            <div class="col">
                                <p>At StellarEdge, we believe that collaboration is key. We take the time to understand your goals, your audience, and your unique brand identity. Every project is a partnership, and your vision is our top priority. Together, we'll create a digital masterpiece thatnot only meets but exceeds your expectations.</p>
                            </div>
                        </div>
                        <div class="splide__slide row align-items-center">
                            <div class="col-3">
                                <img src="<?php echo get_theme_file_uri() ?>/assets/img/heppy-users.png" alt="Happy Users">
                            </div>
                            <div class="col">
                                <p>User experience is at the heart of what we do. Our designs and websites are crafted with the end user in mind, ensuring seamless navigation and intuitive interfaces. We aim to delight your visitors, keeping them engaged and coming back for more.</p>
                            </div>
                        </div>
                        <div class="splide__slide row align-items-center">
                            <div class="col-3">
                                <img src="<?php echo get_theme_file_uri() ?>/assets/img/lets-begin.png" alt="lets begin">
                            </div>
                            <div class="col">
                                <p>Ready to embark on your digital journey with StellarEdge? Whether you're in need of a stunning website or eye-catching graphics, we're here to make your online presence shine. Let's work together to create a digital masterpiece that sets you apart from the competition.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <p class="py-3">Contact us today to get started.<br />
                Your vision, our expertise - together, we'll reach the StellarEdge.</p>

        </div>
    </div>
</section>

<?php get_footer(); ?>
