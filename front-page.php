<?php get_header() ?>

   <header>
     <nav>
        <ul>
            <ul>
                <li><?php
                        echo '<img src="chemin/vers/ton-image.jpg" alt="Description de l\'image">';
                    ?>
                </li>
            </ul>
            <ul>
                <li><?php echo get_field(''); ?></li>
                <li><?php echo get_field(''); ?></li>
                <li><?php echo get_field(''); ?></li>
                <li><?php echo get_field(''); ?></li>
                <li><?php echo get_field(''); ?></li>
            </ul>
        </ul>
     </nav>
     <div>
        <ul>
            <li><h1><?php echo nl2br(get_field('')); ?></h1></li>
        </ul>
     </div>
   </header>

   <body>
    <div class="container_grotesquerie">
        <div></div>
        <div>
            <ul>
                <li>
                    <?php
                    $video_path = "videos/ma_video.mp4";
                    ?>

                    <video width="640" height="360" controls>
                        <source src="<?php echo $video_path; ?>" type="video/mp4">
                        Votre navigateur ne supporte pas la vidéo HTML5.
                    </video>
                </li>
            </ul>
        </div>
    </div>
    <div class="container_monstre">
        <div>
            <ul>
                <li>
                    <?php
                        $video_path = "videos/ma_video.mp4";
                    ?>

                    <video width="640" height="360" controls>
                        <source src="<?php echo $video_path; ?>" type="video/mp4">
                        Votre navigateur ne supporte pas la vidéo HTML5.
                    </video>
                </li>
            </ul>
        </div>
        <div></div>
    </div>
    <div class="container_american_horror_story">
        <div></div>
        <div>
            <ul>
                <li>
                    <?php
                        $video_path = "videos/ma_video.mp4";
                    ?>

                    <video width="640" height="360" controls>
                        <source src="<?php echo $video_path; ?>" type="video/mp4">
                        Votre navigateur ne supporte pas la vidéo HTML5.
                    </video>
                </li>
            </ul>
        </div>
    </div>
    <div class="container_ratched">
        <div></div>
        <div>
            <ul>
                <li>
                    <?php
                            $video_path = "videos/ma_video.mp4";
                        ?>

                        <video width="640" height="360" controls>
                            <source src="<?php echo $video_path; ?>" type="video/mp4">
                            Votre navigateur ne supporte pas la vidéo HTML5.
                        </video>
                </li>
            </ul>
        </div>
    </div>
    <div class="container_scream_queens">
        <div></div>
        <div>
            <ul>
                <li>
                    <?php
                        $video_path = "videos/ma_video.mp4";
                    ?>

                    <video width="640" height="360" controls>
                        <source src="<?php echo $video_path; ?>" type="video/mp4">
                        Votre navigateur ne supporte pas la vidéo HTML5.
                    </video>
                </li>
            </ul>
        </div>
    </div>
   </body>

<?php get_footer() ?>