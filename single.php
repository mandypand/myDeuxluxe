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
        <?php elseif(get_row_layout() == "gallery"): ?>
            <?php get_template_part("./sections/section-gallery"); ?>
        <?php elseif(get_row_layout() == "post_text"): ?>
            <?php get_template_part("./sections/section-postText"); ?>
        <?php elseif(get_row_layout() == "promotionals"): ?>
            <?php get_template_part("./sections/section-promotionals"); ?>
        <?php endif; ?> 
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>