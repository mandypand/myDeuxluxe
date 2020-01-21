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
<section class="Post">
    <h1 class="Post__Headline"> <?php the_sub_field("title"); ?> </h1>
    <?php the_sub_field("text"); ?>
</section>
<?php if($separatorChoice): ?>
    <div class="<?php echo $lineClasses; ?>"></div>
<?php endif; ?>