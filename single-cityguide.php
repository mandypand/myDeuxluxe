<?php get_header(); ?>
<?php if(have_rows("sections")): ?>
    <?php while(have_rows("sections")): the_row(); ?>
        <?php if(get_row_layout() == "parallax_background"): ?>
            <?php get_template_part("./sections/section-parallax"); ?>
        <?php elseif(get_row_layout() == "hero"): ?>
            <?php get_template_part("./sections/section-headerHero"); ?>
        <?php elseif(get_row_layout() == "testimonial"): ?>
            <?php get_template_part("./sections/section-testimonial"); ?>
        <?php elseif(get_row_layout() == "quote"): ?>
            <?php get_template_part("./sections/section-quote"); ?>
        <?php elseif(get_row_layout() == "repeater"): ?>
            <?php get_template_part("./sections/section-repeater"); ?>
        <?php elseif(get_row_layout() == "post_text"): ?>
            <?php get_template_part("./sections/section-postText"); ?>
        <?php endif; ?> 
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>