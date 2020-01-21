<?php
    /* Template Name: Template-Contact-Page */ 
?>
<?php get_header(); ?>
<?php if(have_rows("sections")): ?>
    <?php while(have_rows("sections")): the_row(); ?>
        <?php if(get_row_layout() == "hero"): ?>
            <?php get_template_part("./sections/section-headerHero"); ?>
        <?php endif; ?> 
    <?php endwhile; ?>
<?php endif; ?>

<main class="Contact-Page">
    <?php if(have_rows("sections")): ?>
        <?php while(have_rows("sections")): the_row(); ?>
            <?php if(get_row_layout() == "parallax_background"): ?>
                <?php get_template_part("./sections/section-parallax"); ?>
            <?php elseif(get_row_layout() == "testimonial"): ?>
                <?php get_template_part("./sections/section-testimonial"); ?>
                <?php elseif(get_row_layout() == "quote"): ?>
            <?php get_template_part("./sections/section-quote"); ?>
            <?php elseif(get_row_layout() == "post_text"): ?>
                <?php get_template_part("./sections/section-postText"); ?>
            <?php elseif(get_row_layout() == "standard"): ?>
                <?php get_template_part("./sections/section-standard"); ?>
            <?php endif; ?> 
        <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>