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
    $reverseOrder = get_sub_field("reverse_order");
?>
<div class="Standard">
    <?php if($reverseOrder): ?>
        <section class="Standard__Column">
            <h1 class="Standard__Headline"> <?php the_sub_field("title"); ?>  </h1>
            <?php the_sub_field("text"); ?>
        </section>
        <aside class="Standard__Column">
            <img src="<?php the_sub_field("image"); ?>">
        </aside>
    <?php else: ?>
        <aside class="Standard__Column">
            <img src="<?php the_sub_field("image"); ?>">
        </aside>
        <section class="Standard__Column">
            <h1 class="Standard__Headline"> <?php the_sub_field("title"); ?>  </h1>
            <?php the_sub_field("text"); ?>
        </section>
    <?php endif; ?>        
</div>

<?php if($separatorChoice): ?>
    <div class="<?php echo $lineClasses; ?>"></div>
<?php endif; ?>