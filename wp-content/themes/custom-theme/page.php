<?php get_header(); ?>
<br class="clear" /><br/> 
<section class="page-section">
    <div class="container">
        <div class="col-md-12" style="padding-left: 40px;margin-top: 30px;">
            <h1 class="uppercase page-title"><?php the_title();?></h1>
        </div>
        <div class="col-md-8 left page-content">
            <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/page/content', 'page' );
                    the_content();
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.


            ?>
        </div>
        <div class="col-md-4 left form-container">
            <div class="form" style="background-color: #333333;height: 100%;">
                <div class="form-title" style="background-color: #333333 !important;">
                    <h3 class="color-white bold">CONTACT US</h3> 
                </div>
                <div style="text-align: center;">
                    <?php echo do_shortcode( '[contact-form-7 id="70" title="Contact form 1"]' ); ?>
                </div>
            </div>
        </div>
    </div>
 </section>
<?php get_footer(); ?>