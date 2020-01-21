<?php get_header(); ?>
<main class="Page">
    <?php if(have_rows("sections")): ?>
        <?php while(have_rows("sections")): the_row(); ?>
            <?php if(get_row_layout() == "hero"): ?>
                <?php get_template_part("./sections/section-headerHero"); ?>
            <?php elseif(get_row_layout() == "testimonial"): ?>
                <?php get_template_part("./sections/section-testimonial"); ?>
            <?php elseif(get_row_layout() == "standard"): ?>
                <?php get_template_part("./sections/section-standard"); ?>
            <?php elseif(get_row_layout() == "slideshow"): ?>
                <?php get_template_part("./sections/section-slideshow"); ?>
            <?php endif; ?> 
        <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>