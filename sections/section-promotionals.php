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
<?php $items = get_sub_field("items"); ?>
<section class="Promotionals">
    <h1 class="Promotionals__Title"><?php the_sub_field("title"); ?></h1>
    <div class="Promotionals__Container"> 
        <?php foreach($items as $item): ?>
            <div class="Promotionals__Items">
                <img class="Promotionals__Item-Image" src="<?php echo $item["image"]; ?>">
                <h2 class="Promotionals__Item-Name"><?php echo $item["name"]; ?></h2>
                <p class="Promotionals__Item-Text"><?php echo $item["text"]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>  
</section>
<?php if($separatorChoice): ?>
    <div class="<?php echo $lineClasses; ?>"></div>
<?php endif; ?>