<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo get_bloginfo("name"); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  
    <header class="Header">
        <div class="Header__Overlay "id="overlay"></div>
        <div class="Header__Menu" id="navbar">

            <?php 
                $bars = get_field("bars","option");
                if($bars) : 
			?>
               <img class="Header__Menu-Icon" id="bars" src="<?php echo $bars; ?>">
            <?php endif;?>
            <div class="Header__Menu-Text"><p>MENU</p></div>
            <div class="Menu" id="dropDown">
                <?php 
                    $cross = get_field("cross","option");
                    if($cross) : 
                ?>
                    <img class="Menu__Icon" id="crossCross" src="<?php echo $cross; ?>">
                <?php endif;?>
                <div class="Menu__Line"></div>
                <nav class="Nav">
                    <?php 
                        $menuItems = wp_nav_menu([
                            "menu" => "header",
                            "container" => "",
                        ]);        
                    ?>
                 </nav>
                <div class="Menu__Line"></div>
                <div class="Social">
                    <?php $socialMedias = get_field("social_media", "options"); ?>
                        <?php foreach($socialMedias as $socialMedia): ?>
                            <a class="Social__Link" href="<?php echo $socialMedia["link"]; ?>">  
                                <i class="fa fa-<?php echo $socialMedia["icon"]; ?>"></i>
                            </a>
                        <?php endforeach; ?>  
                </div>
                <div class="Menu__Copy"> © DEUXLUXE 2019. <br> ALL RIGHTS RESERVED </div> 
            </div>
        </div>
    </header>