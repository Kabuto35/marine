<?php get_header() ?>

   <header>
     <nav>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo MDLC">
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
    <div class="grotesquerie">
        <h2><?php echo nl2br(get_field('')); ?></h2>
    </div>
    <div class="biographie">
        <h2><?php echo nl2br(get_field('')); ?></h2>
        <div>
            <h3></h3>
            <span><?php echo nl2br(get_field('')); ?></span>
        </div>
    </div>
    <div class="monstre">
        <h2><?php echo nl2br(get_field('')); ?></h2>
    </div>
    <div class="american_horror_stories">
        <h2><?php echo nl2br(get_field('')); ?></h2>
    </div>
    </body>
<?php get_footer() ?>