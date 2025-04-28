<?php get_header() ?>

   <header>
     <nav>
            <div class="logo">
                <img src="<?php echo get_field('logo'); ?>/assets/images/Logo-Ryan-Murphy-production-02-02.svg" alt="logo">
            </div>
            <ul class="menue">
                <li><a href="" class="mon_lien"><?php echo get_field('grotesquerie'); ?></a></li>
                <li><a href="" class="mon_lien_1"><?php echo get_field('ryan'); ?></a></li>
                <li><a href="" class="mon_lien_2"><?php echo get_field('monstre'); ?></a></li>
                <li><a href="" class="mon_lien_3"><?php echo get_field('american_horror_stories'); ?></a></li>
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