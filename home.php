<?php get_header(); ?>
<?php
    $pageID = get_option("page_for_posts");
?>
<?php if(have_rows("sections", $pageID)): ?>
    <?php while(have_rows("sections", $pageID)): the_row(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<main class="Archive-Post">
    <div class="Archive-Post__Container">    
        <section class="Archive-Post__Items">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <article class="Post__Item">
                        <a href="<?php the_permalink(); ?>">
                            <img class="Post__Item-Image" src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                        </a>
                        <div class="Post__Item-Container">
                            <h2 class="Post__Item-Tite">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <ul class="Post__Item-Meta">
                                <li class="Post__Item-Author">
                                    <a href=" <?php echo get_author_posts_url(get_the_author_meta("ID")); ?> "> <?php the_author(); ?>,  </a>
                                </li>
                                <li class="Post__Item-Categories">
                                    <?php the_category(', '); ?>
                                </li>
                                <li class="Post__Item-Date">
                                    <?php $post_date = get_the_date("F j, Y"); echo $post_date; ?>
                                </li>
                            </ul> 
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="Post__Item-Button"> READ MORE </a> 
                    </article>
                <?php endwhile; ?>
            <?php else: ?>
                <h2>Ops..No posts!</h2>
            <?php endif; ?>   
        </section>
        <?php get_sidebar(); ?>
    </div>
    <div class="Archive-Post__Pagination">
        <?php if(get_previous_posts_link()): ?>
            <?php previous_posts_link("NEWER POSTS"); ?>
        <?php endif; ?>
        <?php if(get_next_posts_link()): ?>
            <?php next_posts_link("OLDER POSTS"); ?>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>