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
<section class="Subscribe">
    <h1 class="Subscribe__Title"> <?php the_sub_field("title"); ?> </h1>
    <p class="Subscribe__Text"> <?php the_sub_field("text"); ?> </p>
    <div class="Newsletter__Form">
        <?php the_field("newsletter_form", "option"); ?>
    </div>
</section>
<?php if($separatorChoice): ?>
    <div class="<?php echo $lineClasses; ?>"></div>
<?php endif; ?>