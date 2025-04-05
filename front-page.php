<?php get_header() ?>

    <header>
        <ul>
            <a href="" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-Ryan-Murphy-production-02-02.svg" alt="Image">
            </a>
        </ul>
        <nav>
            <ul>
                <li><a href=""><?php echo "Accueil"; ?></a></li>
                <li><a href=""><?php echo "Galerie"; ?></a></li>
                <li><a href=""><?php echo "Contact"; ?></a></li>
            </ul>
        </nav>
        <ul>
            <h1><?php echo "Ryan Murphy<br>Production"; ?></h1>
        </ul>
    </header>

    <body>
        <section class="Cinematic Shows">
            <ul><h2><?php echo "Ryan-Murphy-Cinematic-shows"; ?></h2></ul>
            <ul>
                <video width="640" height="360" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/videos/ma-video.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </ul>
        </section>
        <section></section>
        <section></section>
    </body>

<?php get_footer() ?>