<?php get_header() ?>

   <header>
     <nav>
            <div class="logo">
                
                <?php
                $image_url = get_field('logo');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Image ACF">';
                }
                ?>

                
            </div>
            <ul class="menue">
                <li><a href="" class="mon_lien"><?php echo get_field('grotesquerie'); ?></a></li>
                <li><a href="" class="mon_lien_2"><?php echo get_field('monstre'); ?></a></li>
                <li><a href="" class="mon_lien_3"><?php echo get_field('american_horror_stories'); ?></a></li>
                <li><a href="" class="mon_lien_4"><?php echo get_field('ratched'); ?></a></li>
                <li><a href="" class="mon_lien_5"><?php echo get_field('screem_queen'); ?></a></li>
            </ul>
        
     </nav>
     <div class="titre_principal">
        <ul>
            <li><h1><?php echo nl2br(get_field('titre_principal')); ?></h1></li>
        </ul>
     </div>
   </header>

   <body>
    <div class="accueil" id="accueil">
    </div>
        
   </body>

<?php get_footer() ?>