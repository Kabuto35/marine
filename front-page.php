<?php get_header() ?>

   <header>
     <nav>
        <ul>
            <ul class="logo">
                <li>
                <?php
                $image_url = get_field('logo');
                if ($image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="Image ACF">';
                }
                ?>

                </li>
            </ul>
            <ul class="menu">
                <li><?php echo get_field('grotesquerie'); ?></li>
                <li><?php echo get_field('monstre'); ?></li>
                <li><?php echo get_field('american_horror_stories'); ?></li>
                <li><?php echo get_field('ratched'); ?></li>
                <li><?php echo get_field('screem_queen'); ?></li>
            </ul>
        </ul>
     </nav>
     <div class="titre_principal">
        <ul>
            <li><h1><?php echo nl2br(get_field('titre_principal')); ?></h1></li>
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