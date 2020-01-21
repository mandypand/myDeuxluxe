<?php 
    $separatorChoice = get_sub_field("separator_choice"); 
    if($separatorChoice[0] == "lines"){
        $separatorChoice[0] = ""; 
    }
	$lineClasses = "Line";
	$separatorChoice = get_sub_field("separator_choice"); 
	if($separatorChoice){
		$lineClasses = "Line";
	}
?>
<?php if($separatorChoice): ?>
    <div class="<?php echo $lineClasses; ?>"></div>
<?php endif; ?>
<?php
    $title = get_sub_field("title");
    $items = get_sub_field("items");
?>    
    <?php if(!empty($items)) :  ?>  
        <h1 class="SlideshowPosts-Title"><?php echo $title; ?></h1>
        <div class="owl-carousel owl-theme">
        <?php foreach($items as $item): ?>
            <div class="Owl-Carousel__Container"> 
                <a class="Owl-Carousel__Link"href="<?php echo $item["url"]; ?>">
                    <img src="<?php echo $item["image"]; ?>" class="Owl-Carousel__Image" />
                </a>
                <p class="Owl-Carousel__Text"><?php echo $item["text"]; ?></p>
            </div>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>

<?php if($separatorChoice): ?>
    <div class="<?php echo $lineClasses; ?>"></div>
<?php endif; ?>