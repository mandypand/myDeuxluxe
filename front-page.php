<?php get_header(); ?>
<main>
    <?php if(have_rows("sections")): ?>
        <?php while(have_rows("sections")): the_row(); ?>
            <?php if(get_row_layout() == "hero"): ?>
        <?php get_template_part("./sections/section-headerHero"); ?>
            <?php elseif(get_row_layout() == "parallax_background"): ?>
                <?php get_template_part("./sections/section-parallax"); ?>
            <?php elseif(get_row_layout() == "testimonial"): ?>
                <?php get_template_part("./sections/section-testimonial"); ?>
            <?php elseif(get_row_layout() == "standard"): ?>
                <?php get_template_part("./sections/section-standard"); ?>
            <?php elseif(get_row_layout() == "subscribe"): ?>
                <?php get_template_part("./sections/section-subscribe"); ?>
            <?php elseif(get_row_layout() == "slideshow_posts"): ?>
                <?php get_template_part("./sections/section-slideshowPosts"); ?>
            <?php endif; ?> 
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="Overlay" id="overlaySubscribe">
    <div class="Newsletter" id="signUp">
        <div class="Newsletter__Containter-Icon" id="signUpCross">
            <?php 
                $cross = get_field("cross","option");
                if($cross) : 
            ?>
                <img class="Newsletter__Icon" src="<?php echo $cross; ?>">
            <?php endif;?>
        </div>
        <h1 class="Newsletter__Title"><?php the_field("title", "option"); ?></h1>
        <div class="Newsletter__Line"></div>
        <div class="Newsletter__Paragraph1">
           <?php the_field("paragraph1","option"); ?>
        </div>
        <div class="Newsletter__Form">
            <?php the_field("newsletter_form", "option"); ?>
        </div>
        <div class="Newsletter__Paragraph2">
            <?php the_field("paragraph2","option"); ?>
        </div>
    </div>
    </div>
</main>
<?php get_footer(); ?>