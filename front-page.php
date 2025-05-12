<?php get_header() ?>

   <header>
     <nav>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo MDLC">
            </div>
            <ul class="menue">
                <li><a href="" class="mon_lien"><?php echo get_field('bande-annonce'); ?></a></li>
                <li><a href="" class="mon_lien_1"><?php echo get_field('presentation'); ?></a></li>
                <li><a href="" class="mon_lien_2"><?php echo get_field('galerie'); ?></a></li>
            </ul>
        
     </nav>
     <div class="titre_principal">
        <ul>
            <li><h1><?php echo nl2br(get_field('titre_principal')); ?></h1></li>
        </ul>
     </div>
   </header>

   <body>
    <div>
        <h2><?php echo get_field('titre_bande_annonce'); ?></h2>
    </div>
    <div>
        <h2><?php echo get_field('presentation_titre'); ?></h2>
    </div>
    <div>
        <h2><?php echo get_field('galerie_titre'); ?></h2>
    </div>
    </body>
<?php get_footer() ?>