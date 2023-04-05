
<?php

get_header();
?>
    <main id="primary" class="site-main">
        <section class="bannner">
            <video autoplay="autoplay" muted="" loop="infinite" src="wp-content\themes\foce\assets\video.mp4"> </video>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants" class="logo">
        </section>
    <section id="#story" class="story verslebas">
            <h2>L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3>Les personnages</h3>
                    <?php get_template_part( 'template-parts/lespersonnages' ); ?>
                </div>
            </article>
            <article id="place">
                <div>
                    <div class="placementnuages">
                    <img src="wp-content\themes\foce\assets\images\little_cloud.png"class="nuage nuage1 parallax" alt="nuage1" >
                    <img src="wp-content\themes\foce\assets\images\big_cloud.png"class="nuage nuage2 parallax" alt="nuage2">
                    <h3>Le Lieu</h3>
                    </div>  
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <div class="nuages">
                    
                    </div>
                </div>

            </article>
        </section>


        <section id="studio" class="verslebass">
            <h2>Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
    </main><!-- #main -->

<?php
get_footer();
