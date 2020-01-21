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
<section class="Testimonial">
    <h1 class="Testimonial__Title"> <?php the_sub_field("title"); ?> </h1>
    <p class="Testimonial__Text"> <?php the_sub_field("text"); ?> </p>
</section>
<?php if($separatorChoice): ?>
    <div class="<?php echo $lineClasses; ?>"></div>
<?php endif; ?>