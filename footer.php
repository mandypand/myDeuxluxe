<footer>
    <div class="Line"></div>

    <div class="Footer">
        <div class="Footer__Column">
            <?php the_field("footer_column_1", "options"); ?>
        </div>

        <div class="Footer__Column">
            <?php the_field("footer_column_2", "options"); ?>
        </div>

        <div class="Footer__Column">
            <?php the_field("footer_column_3", "options"); ?>
        </div>
    </div>

    <div class="Social">
        <?php $socialMedias = get_field("social_media", "options"); ?> 
            <?php foreach($socialMedias as $socialMedia): ?>
                <a class="Social__Link" href="<?php echo $socialMedia["link"]; ?>">  
                    <i class="fa fa-<?php echo $socialMedia["icon"]; ?>"></i>
                </a>
            <?php endforeach; ?>
    </div>
        <?php the_field("footer_column_4", "options"); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
