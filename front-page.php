<?php get_header() ?>

   <header>
     <nav class="navbar">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo MDLC">
            </div>
            <ul class="menue">
                <li><a href="#" class="mon_lien"><?php echo get_field('bande-annonce'); ?></a></li>
                <li><a href="#" class="mon_lien_1"><?php echo get_field('presentation'); ?></a></li>
                <li><a href="#" class="mon_lien_2"><?php echo get_field('galerie'); ?></a></li>
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

    <h2><?php echo get_field('presentation_titre'); ?></h2>
    <div class="presentation">
        <h3><?php echo get_field('presentation_sous_titre'); ?></h3>
        <div><?php echo nl2br(get_field('presentation_de_ryan')); ?></div>
        <h3><?php echo get_field('presentation_sous_titre_2'); ?></h3>
        <div><?php echo nl2br(get_field('presentation_des_oeuvres')); ?></div>
    </div>

    <h2><?php echo get_field('galerie_titre'); ?></h2>
    <div class="galerie">
        <div class="container">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/grotesquerie.jpg" alt="Logo MDLC" class="logo"></div>
            <h3><?php echo get_field('grotesquerie_titre'); ?></h3>
            <div class="séries"><?php echo nl2br(get_field('grotesquerie_description')); ?></div>
        </div>
        <div class="container">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/monstres.jpg" alt="Logo MDLC" class="logo"></div>
            <h3><?php echo get_field('monstre_titre'); ?></h3>
            <div class="séries"><?php echo nl2br(get_field('monstre_desciption')); ?></div>
        </div>
        <div class="container">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/5511004.webp" alt="Logo MDLC" class="logo"></div>
            <h3><?php echo get_field('american_titre'); ?></h3>
            <div class="séries"><?php echo nl2br(get_field('american_description')); ?></div>
        </div>
        <div class="container">
             <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/screams.jpg" alt="Logo MDLC" class="logo"></div>
            <h3><?php echo get_field('screem_titre'); ?></h3>
            <div class="séries"><?php echo nl2br(get_field('screem_desciption')); ?></div>
        </div>
        
    </div>
    </body>
<?php get_footer() ?>