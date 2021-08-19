<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happy-13
 */

get_header();
?>

    <main class="landingPage__content">
        <h1 class="landingPage__header">
            <?php echo get_field('landing_page_-_naglowek_duzy', 1130); ?>
        </h1>
        <h2 class="landingPage__subheader">
            <?php echo get_field('landing_page_-_tekst_pod_naglowkiem_duzym', 1130); ?>
        </h2>

        <a class="button button--landing" href="<?php echo get_field('landing_page_-_link_do_buttona', 1130); ?>">
            <?php echo get_field('landing_page_-_napis_na_buttonie', 1130); ?>
        </a>
    </main>

    </section>

    <!-- ABOUT US -->
    <section class="aboutUs section" id="o-nas">
        <main class="aboutUs__content">
            <h2 class="aboutUs__header" data-aos="fade-up">
                Kim jesteśmy?
            </h2>
            <h3 class="aboutUs__subheader" data-aos="fade-up">
                Poznaj Happy13
            </h3>

            <?php echo get_field('strona_glowna_-_o_nas', 1130); ?>

            <a class="button button--aboutUs" data-aos="fade-up" href="<?php echo get_page_link(get_page_by_title('O nas')->ID); ?>">
                Dowiedz się więcej
            </a>
        </main>
    </section>

    <!-- CO NAS WYROZNIA -->
    <section class="strengths section">
        <h2 class="sectionHeader" data-aos="fade-up">
            Co nas wyróżnia?
        </h2>
        <main class="strengths__content">
            <section class="strengths__item" data-aos="zoom-in-up">
                <img class="strengths__item__icon" src="<?php echo get_field('co_nas_wyroznia_-_ikonka_1', 1130); ?>" alt="icon" />
                <h3 class="strengths__item__header">
                    <?php echo get_field('co_nas_wyroznia_-_naglowek_1', 1130); ?>
                </h3>
                <p class="strengths__item__text">
                    <?php echo get_field('co_nas_wyroznia_-_tekst_1', 1130); ?>
                </p>
            </section>

            <section class="strengths__item" data-aos="zoom-in-up">
                <img class="strengths__item__icon" src="<?php echo get_field('co_nas_wyroznia_-_ikonka_2', 1130); ?>" alt="icon" />
                <h3 class="strengths__item__header">
                    <?php echo get_field('co_nas_wyroznia_-_naglowek_2', 1130); ?>
                </h3>
                <p class="strengths__item__text">
                    <?php echo get_field('co_nas_wyroznia_-_tekst_2', 1130); ?>
                </p>
            </section>

            <section class="strengths__item" data-aos="zoom-in-up">
                <img class="strengths__item__icon" src="<?php echo get_field('co_nas_wyroznia_-_ikonka_3', 1130); ?>" alt="icon" />
                <h3 class="strengths__item__header">
                    <?php echo get_field('co_nas_wyroznia_-_naglowek_3', 1130); ?>
                </h3>
                <p class="strengths__item__text">
                    <?php echo get_field('co_nas_wyroznia_-_tekst_3', 1130); ?>
                </p>
            </section>

            <section class="strengths__item" data-aos="zoom-in-up">
                <img class="strengths__item__icon" src="<?php echo get_field('co_nas_wyroznia_-_ikonka_4', 1130); ?>" alt="icon" />
                <h3 class="strengths__item__header">
                    <?php echo get_field('co_nas_wyroznia_-_naglowek_4', 1130); ?>
                </h3>
                <p class="strengths__item__text">
                    <?php echo get_field('co_nas_wyroznia_-_tekst_4', 1130); ?>
                </p>
            </section>
        </main>
    </section>

    <!-- PROCESS -->
    <section class="process section">
        <h2 class="sectionHeader process__bigHeader" data-aos="fade-up">
            Proces realizacji
        </h2>

        <img class="process__img--mobile" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/proces_zamowienia.png'; ?>" alt="proces-zamowienia" data-aos="fade-up" />

        <div class="process__row process__row--first" data-aos="fade-up">
            <section class="process__item">
                <h2 class="process__number">
                    01
                </h2>
                <main class="process__item__content">
                    <h3 class="process__header">
                        <?php echo get_field('proces_realizacji_-_naglowek_1', 1130); ?>
                    </h3>
                    <p class="process__text">
                        <?php echo get_field('proces_realizacji_-_tekst_1', 1130); ?>
                    </p>
                </main>
            </section>
            <section class="process__item process__item--second" data-aos="fade-up">
                <h2 class="process__number">
                    02
                </h2>
                <main class="process__item__content" data-aos="fade-up">
                    <h3 class="process__header">
                        <?php echo get_field('proces_realizacji_-_naglowek_2', 1130); ?>
                    </h3>
                    <p class="process__text">
                        <?php echo get_field('proces_realizacji_-_tekst_2', 1130); ?>
                    </p>
                </main>
            </section>
        </div>

        <div class="process__row process__row--second">
            <img class="process__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/proces_zamowienia.png'; ?>" alt="proces-zamowienia" data-aos="fade-up" />

            <section class="process__item process__item--third" data-aos="fade-up">
                <h2 class="process__number">
                    03
                </h2>
                <main class="process__item__content">
                    <h3 class="process__header">
                        <?php echo get_field('proces_realizacji_-_naglowek_3', 1130); ?>
                    </h3>
                    <p class="process__text">
                        <?php echo get_field('proces_realizacji_-_tekst_3', 1130); ?>
                    </p>
                </main>
            </section>
        </div>
    </section>

    <!-- OFFER -->
    <section class="offer section" id="produkty">
        <h2 class="sectionHeader" data-aos="fade-up">
            Sprawdź, co możemy dla Ciebie zrobić
        </h2>

        <main class="offer__content">
            <?php
                $args = array(
                        'post_type' => 'offer'
                );

                $query = new WP_Query($args);

                if($query->have_posts()) {
                    while($query->have_posts()) {
                        $query->the_post();
                        ?>

                        <div class="offer__item" data-aos="flip-left">
                            <img class="offer__item__img" src="<?php echo get_field('zdjecie'); ?>" alt="<?php echo the_title(); ?>" />
                            <div class="offer__item__content">
                                <h3 class="offer__item__header">
                                    <?php echo the_title(); ?>
                                </h3>
                                <a href="<?php echo get_field('link'); ?>" class="offer__item__btn">
                                    Zobacz
                                </a>
                            </div>
                        </div>

                            <?php
                    }
                }
            ?>
        </main>
    </section>

    <!-- KATALOG -->
    <section class="section section--catalog">
        <main class="catalog__main">
            <figure class="catalog__imgWrapper" data-aos="fade-left">
                <img class="catalog__img" src="<?php echo get_field('katalog_stockowych_produktow_-_zdjecie', 1130); ?>" alt="katalog" />
            </figure>

            <div class="catalog__content" data-aos="fade-right">
                <h3 class="catalog__header">
                    Katalog stockowych produktów
                </h3>
                <h4 class="catalog__subheader">
                    Poznaj nasze gotowe produkty.
                </h4>
                <p class="catalog__text">
                    Zobacz dostępne gadżety, kolory i przybliżone ceny
                </p>
                <a class="button button--catalog" href="<?php echo get_page_link(get_page_by_title('Katalogi')->ID); ?>">
                    Zobacz wszystkie katalogi
                </a>
            </div>
        </main>
    </section>

    <!-- ZNAKOWANIE -->
    <section class="section section--znakowanie">
        <h2 class="sectionHeader" data-aos="fade-up">
            Znakowanie
        </h2>

        <img data-aos="fade-up" class="znakowanie__img" src="<?php echo get_field('znakowanie_-_zdjecie', 1130); ?>" alt="znakowanie" />

        <p class="znakowanie__text" data-aos="fade-up">
            <?php echo get_field('znakowanie_-_tekst', 1130); ?>
        </p>

        <a data-aos="fade-up" class="button button--znakowanie" href="<?php echo get_page_link(get_page_by_title('Znakowanie')->ID); ?>">
            Czytaj więcej
        </a>
    </section>

    <!-- OPINIE -->
    <section class="testimonials section">
        <h2 class="sectionHeader" data-aos="fade-up">
            Opinie klientów
        </h2>

        <div class="testimonials__carouselWrapper">
            <button class="testimonials__arrow testimonials__arrow--left" onclick="testimonialsPrev()" data-aos="fade-up">
                <img class="testimonials__arrow__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow.svg'; ?>" alt="lewo" />
            </button>

            <div class="testimonials__carousel" data-aos="fade-up">
                <?php
                    $args = array(
                            'post_type' => 'testimonials'
                    );

                    $query = new WP_Query($args);

                    if($query->have_posts()) {
                        while($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <div class="testimonials__item">
                                <p class="testimonials__item__text">
                                    <?php echo get_field('tresc_opinii'); ?>
                                </p>
                                <span class="testimonials__item__author">
                                    <?php echo get_field('autor_opinii'); ?>
                                </span>
                            </div>

                                <?php
                        }
                    }
                ?>
        </div>
            <button class="testimonials__arrow testimonials__arrow--right" onclick="testimonialsNext()" data-aos="fade-up">
                <img class="testimonials__arrow__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow.svg'; ?>" alt="prawo" />
            </button>
    </section>

    <!-- ZOBACZ CO ROBIMY -->
    <section class="section section--socialMedia">
        <h2 class="sectionHeader" data-aos="fade-up">
            Zobacz, co robimy
        </h2>
        <h3 class="sectionSubheader" data-aos="fade-up">
            Sprawdź nasze <b><span class="orange">social media</span></b>
        </h3>
        <main class="instagramFeed" data-aos="fade-up">
            <?php echo do_shortcode('[instagram-feed]'); ?>
        </main>
    </section>

    <!-- BLOG -->
    <section class="blogSection section" id="blog">
        <h2 class="sectionHeader" data-aos="fade-up">
            Potrzebujesz inspiracji?<br/>
            Sprawdź naszego <span class="orange">bloga</span> z ciekawymi pomysłami!
        </h2>

        <div class="blogSection__content" data-aos="zoom-in-up">
            <?php

            $args = array(
                'posts_per_page' => 16
            );

            $query = new WP_Query($args);
            if($query->have_posts()) {
                while($query->have_posts()) {
                    $query->the_post();
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                    ?>
                    <a class="blogSection__item" href="<?php echo the_permalink(); ?>">
                        <div class="blogSection__item__imgWrapper">
                            <img class="blogSection__item__img" src="<?php  echo $feat_image; ?>" alt="blog" />
                        </div>
                        <h3 class="blogSection__item__title">
                            <?php echo the_title(); ?>
                        </h3>
                        <p class="blogSection__item__excerpt">
                            <?php echo the_excerpt(); ?>
                        </p>
                    </a>

                    <?php
                }
                wp_reset_postdata();
            }

            ?>
        </div>
    </section>

    <!-- KONTAKT -->
    <section class="contact section">
        <h2 class="sectionHeader" data-aos="fade-up">
            Szybka wycena
        </h2>

        <main class="contact__content">
            <section class="contact__section">
                <img class="contact__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo.png'; ?>" alt="logo" data-aos="fade-up" />

                <section class="contact__address" data-aos="fade-up">

                    Agencja Happy 13<br/>
                    Ul. Gazownicza 5/1<br/>
                    43-300 Bielsko-Biała<br/>
                    <br/>
                    Godziny otwarcia:<br/>
                    Pon-Pt 8:00-16:00<br/>
                    <br/>
                    <b>Tel:</b> 516 932 613<br/>
                    <b>Email:</b> biuro@happy13.com.pl<br/>
                </section>
            </section>

            <section class="contact__form" data-aos="fade-up">
                <h3 class="contact__form__afterSubmit">
                    Twój formularz został wysłany! Skontaktujemy się z Tobą najszybciej jak to możliwe!
                </h3>
                <?php echo do_shortcode('[contact-form-7 id="138" title="Formularz 1"]'); ?>
            </section>
        </main>

        <iframe data-aos="fade-up" id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d382.6017647738653!2d19.047233673478715!3d49.82690499545902!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716a11aec1666e7%3A0xce5b706bb97ca3b4!2sAgencja%20reklamowa%20Happy%2013!5e0!3m2!1spl!2spl!4v1627135605007!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

<?php
get_footer();
?>