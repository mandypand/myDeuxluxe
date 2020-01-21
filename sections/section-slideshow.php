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
    $items = get_sub_field("items");
?>

<?php if(!empty($items)) :  ?>
    <section class="Slideshow" id="slideShow">  
        <?php foreach($items as $item): ?>
            <img class="myslide" src="<?php echo $item["image"]; ?>">
        <?php endforeach; ?>
    </section>
<?php endif; ?>

<?php if($separatorChoice): ?>
    <div class="<?php echo $lineClasses; ?>"></div>
<?php endif; ?>



