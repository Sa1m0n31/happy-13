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
            Daj się zauważyć
        </h1>
        <h2 class="landingPage__subheader">
            Na jaką okazję potrzebujesz gadżetów z logo? Zrobimy wszystko!
        </h2>

        <a class="button button--landing" href="#contact">
            Darmowa konsultacja
        </a>
    </main>

    </section>

    <!-- ABOUT US -->
    <section class="aboutUs section" id="o-nas">
        <main class="aboutUs__content">
            <h2 class="aboutUs__header">
                Kim jesteśmy?
            </h2>
            <h3 class="aboutUs__subheader">
                Poznaj Happy13
            </h3>
            <p class="aboutUs__text">
                Agencja reklamowa, działająca na terenie całej polski a także poza jej granicami, Łączymy markę z personalizowanymi materiałami promocyjnymi w zależności od potrzeb. Nieszablonowe podejście i profesjonalizm sprawiają, że z naszej pracowni wychodzą wspaniałe projekty. Stworzymy dla Ciebie całą identyfikację reklamową. U nas załatwisz za jednym mailem: gadżety, banery, odzież firmową, opakowania, taśmy, czy słodycze z logo! Wypuścisz swoją markę odzieżową, lub staniesz się producentem kosmetyków. Dopilnujemy każdej kwestii, od projektu poprzez produkcję, aż po wysyłkę!
            </p>
            <a class="button button--aboutUs">
                Dowiedz się więcej
            </a>
        </main>
    </section>

    <!-- CO NAS WYROZNIA -->
    <section class="strengths section">
        <h2 class="sectionHeader">
            Co nas wyróżnia?
        </h2>
        <main class="strengths__content">
            <section class="strengths__item">
                <img class="strengths__item__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/icon-1.svg'; ?>" alt="icon" />
                <h3 class="strengths__item__header">
                    Indywidualna wycena
                </h3>
                <p class="strengths__item__text">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                </p>
            </section>

            <section class="strengths__item">
                <img class="strengths__item__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/icon-2.svg'; ?>" alt="icon" />
                <h3 class="strengths__item__header">
                    Indywidualna wycena
                </h3>
                <p class="strengths__item__text">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                </p>
            </section>

            <section class="strengths__item">
                <img class="strengths__item__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/icon-3.svg'; ?>" alt="icon" />
                <h3 class="strengths__item__header">
                    Indywidualna wycena
                </h3>
                <p class="strengths__item__text">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                </p>
            </section>

            <section class="strengths__item">
                <img class="strengths__item__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/icon-4.svg'; ?>" alt="icon" />
                <h3 class="strengths__item__header">
                    Indywidualna wycena
                </h3>
                <p class="strengths__item__text">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                </p>
            </section>
        </main>
    </section>

    <!-- PROCESS -->
    <section class="process section">
        <h2 class="sectionHeader process__bigHeader">
            Proces zamówienia
        </h2>
        <div class="process__row process__row--first">
            <section class="process__item">
                <h2 class="process__number">
                    01
                </h2>
                <main class="process__item__content">
                    <h3 class="process__header">
                        Konsultacja
                    </h3>
                    <p class="process__text">
                        Opowiedz nam o sobie i swojej branży, w końcu Ty znasz ją najlepiej. Przedstaw nam co chcesz osiągnąć, kogo obdarować lub na jaką okazję potrzebujesz gadżetów. Jeśli nie masz pomysłu, my zaproponujmy odpowiednie dla Twojej branży. Wskaż ilość jaką jesteś zainteresowany (pamiętaj wolumen zamówienia ma znaczenie w wycenie) i skontaktuj się z nami przez formularz na stronie, mailowo lub telefonicznie.
                    </p>
                </main>
            </section>
            <section class="process__item process__item--second">
                <h2 class="process__number">
                    02
                </h2>
                <main class="process__item__content">
                    <h3 class="process__header">
                        Wycena gadżetów
                    </h3>
                    <p class="process__text">
                        Na podstawie zebranych informacji: wybranych produktów, wielkości zamówienia a także sposobu znakowania ( ilości kolorów, zabudowania logo) przygotujemy dla Ciebie wycenę a także wstępną wizualizację na produkcie. Nie sprzedajemy przysłowiowego kota w worku, dlatego dajemy naszym klientom możliwość zobaczenia próbek i wykonania sampli przed rozpoczęciem realizacji.
                    </p>
                </main>
            </section>
        </div>

        <div class="process__row process__row--second">
            <img class="process__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/proces_zamowienia.png'; ?>" alt="proces-zamowienia" />

            <section class="process__item process__item--third">
                <h2 class="process__number">
                    03
                </h2>
                <main class="process__item__content">
                    <h3 class="process__header">
                        Wycena gadżetów
                    </h3>
                    <p class="process__text">
                        Na podstawie zebranych informacji: wybranych produktów, wielkości zamówienia a także sposobu znakowania ( ilości kolorów, zabudowania logo) przygotujemy dla Ciebie wycenę a także wstępną wizualizację na produkcie. Nie sprzedajemy przysłowiowego kota w worku, dlatego dajemy naszym klientom możliwość zobaczenia próbek i wykonania sampli przed rozpoczęciem realizacji.
                    </p>
                </main>
            </section>
        </div>
    </section>

    <!-- OFFER -->
    <section class="offer section" id="produkty">
        <h2 class="sectionHeader">
            Sprawdź, co możemy dla Ciebie zrobić
        </h2>

        <main class="offer__content">
            <div class="offer__item">
                <img class="offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/example.png'; ?>" alt="odziez" />
                <div class="offer__item__content">
                    <h3 class="offer__item__header">
                        Odzież
                    </h3>
                    <a href="http://skylo-test3.pl/odziez/" class="offer__item__btn">
                        Zobacz
                    </a>
                </div>
            </div>
            <div class="offer__item">
                <img class="offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/example.png'; ?>" alt="odziez" />
                <div class="offer__item__content">
                    <h3 class="offer__item__header">
                        Odzież
                    </h3>
                    <a href="http://skylo-test3.pl/odziez/" class="offer__item__btn">
                        Zobacz
                    </a>
                </div>
            </div>
            <div class="offer__item">
                <img class="offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/example.png'; ?>" alt="odziez" />
                <div class="offer__item__content">
                    <h3 class="offer__item__header">
                        Odzież
                    </h3>
                    <a href="http://skylo-test3.pl/odziez/" class="offer__item__btn">
                        Zobacz
                    </a>
                </div>
            </div>
            <div class="offer__item">
                <img class="offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/example.png'; ?>" alt="odziez" />
                <div class="offer__item__content">
                    <h3 class="offer__item__header">
                        Odzież
                    </h3>
                    <a href="http://skylo-test3.pl/odziez/" class="offer__item__btn">
                        Zobacz
                    </a>
                </div>
            </div>
            <div class="offer__item">
                <img class="offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/example.png'; ?>" alt="odziez" />
                <div class="offer__item__content">
                    <h3 class="offer__item__header">
                        Odzież
                    </h3>
                    <a href="http://skylo-test3.pl/odziez/" class="offer__item__btn">
                        Zobacz
                    </a>
                </div>
            </div>
            <div class="offer__item">
                <img class="offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/example.png'; ?>" alt="odziez" />
                <div class="offer__item__content">
                    <h3 class="offer__item__header">
                        Odzież
                    </h3>
                    <a href="http://skylo-test3.pl/odziez/" class="offer__item__btn">
                        Zobacz
                    </a>
                </div>
            </div>
            <div class="offer__item">
                <img class="offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/example.png'; ?>" alt="odziez" />
                <div class="offer__item__content">
                    <h3 class="offer__item__header">
                        Odzież
                    </h3>
                    <a href="http://skylo-test3.pl/odziez/" class="offer__item__btn">
                        Zobacz
                    </a>
                </div>
            </div>
            <div class="offer__item">
                <img class="offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/example.png'; ?>" alt="odziez" />
                <div class="offer__item__content">
                    <h3 class="offer__item__header">
                        Odzież
                    </h3>
                    <a href="http://skylo-test3.pl/odziez/" class="offer__item__btn">
                        Zobacz
                    </a>
                </div>
            </div>
            <div class="offer__item">
                <img class="offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/example.png'; ?>" alt="odziez" />
                <div class="offer__item__content">
                    <h3 class="offer__item__header">
                        Odzież
                    </h3>
                    <a href="http://skylo-test3.pl/odziez/" class="offer__item__btn">
                        Zobacz
                    </a>
                </div>
            </div>
        </main>
    </section>

    <section class="testimonials section">
        <h2 class="sectionHeader">
            Opinie klientów
        </h2>

        <div class="testimonials__carouselWrapper">
            <button class="testimonials__arrow testimonials__arrow--left" onclick="testimonialsPrev()">
                <img class="testimonials__arrow__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow.svg'; ?>" alt="lewo" />
            </button>

            <div class="testimonials__carousel">
                <div class="testimonials__item">
                    <p class="testimonials__item__text">
                        Generalnie miałem do czynienia z wieloma tego typu firmami ale po kontakcie z tą nie zamierzam już szukać dalej. Bardzo profesjonalna obsługa klienta i dobre ceny oraz co najważniejsze terminowość. Jak najbardziej polecam!
                    </p>
                    <span class="testimonials__item__author">
                    Autor opinii, firma
                </span>
                </div>

                <div class="testimonials__item">
                    <p class="testimonials__item__text">
                        Generalnie miałem do czynienia z wieloma tego typu firmami ale po kontakcie z tą nie zamierzam już szukać dalej. Bardzo profesjonalna obsługa klienta i dobre ceny oraz co najważniejsze terminowość. Jak najbardziej polecam!
                    </p>
                    <span class="testimonials__item__author">
                    Autor opinii, firma
                </span>
                </div>

                <div class="testimonials__item">
                    <p class="testimonials__item__text">
                        Generalnie miałem do czynienia z wieloma tego typu firmami ale po kontakcie z tą nie zamierzam już szukać dalej. Bardzo profesjonalna obsługa klienta i dobre ceny oraz co najważniejsze terminowość. Jak najbardziej polecam!
                    </p>
                    <span class="testimonials__item__author">
                    Autor opinii, firma
                </span>
                </div>

                <div class="testimonials__item">
                    <p class="testimonials__item__text">
                        Generalnie miałem do czynienia z wieloma tego typu firmami ale po kontakcie z tą nie zamierzam już szukać dalej. Bardzo profesjonalna obsługa klienta i dobre ceny oraz co najważniejsze terminowość. Jak najbardziej polecam!
                    </p>
                    <span class="testimonials__item__author">
                    Autor opinii, firma
                </span>
                </div>
            </div>

            <button class="testimonials__arrow testimonials__arrow--right" onclick="testimonialsNext()">
                <img class="testimonials__arrow__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow.svg'; ?>" alt="prawo" />
            </button>
        </div>

    </section>

    <section class="contact section">
        <h2 class="sectionHeader">
            Szybka wycena
        </h2>

        <main class="contact__content">
            <section class="contact__section">
                <img class="contact__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo.png'; ?>" alt="mapa" />

                <section class="contact__address">

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

            <section class="contact__form">
                <h3 class="contact__form__afterSubmit">
                    Twój formularz został wysłany! Skontaktujemy się z Tobą najszybciej jak to możliwe!
                </h3>
                <?php echo do_shortcode('[contact-form-7 id="138" title="Formularz 1"]'); ?>
            </section>
        </main>

        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d382.6017647738653!2d19.047233673478715!3d49.82690499545902!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716a11aec1666e7%3A0xce5b706bb97ca3b4!2sAgencja%20reklamowa%20Happy%2013!5e0!3m2!1spl!2spl!4v1627135605007!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <section class="blogSection section" id="blog">
        <h2 class="sectionHeader">
            Potrzebujesz inspiracji?<br/>
            Sprawdź naszego <span class="orange">bloga</span> z ciekawymi pomysłami!
        </h2>

        <div class="blogSection__content">
            <?php

                $args = array(
                        'posts_per_page' => 4
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
    <section class="section section--socialMedia">
        <h2 class="sectionHeader">
            Zobacz, co robimy
        </h2>
        <h3 class="sectionSubheader">
            Sprawdź nasze <b><span class="orange">social media</span></b>
        </h3>
        <main class="instagramFeed">
            <?php echo do_shortcode('[instagram-feed]'); ?>
        </main>
    </section>

    <section class="section section--catalog">
        <main class="catalog__main">
            <figure class="catalog__imgWrapper">
                <img class="catalog__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/katalog.png'; ?>" alt="katalog" />
            </figure>

            <div class="catalog__content">
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
        <h2 class="sectionHeader">
            Znakowanie
        </h2>

        <img class="znakowanie__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/znakowanie.png'; ?>" alt="znakowanie" />

        <p class="znakowanie__text">
            Wybrany przez Państwa gadżet to połowa sukcesu - dopełnieniem jest znakowanie. Gadżety reklamowe to żywa wizytówka firmy. Dbamy o to aby znakowanie na produkcie było estetyczne i perfekcyjne, a same gadżety były spójne z wizerunkiem firmy. Zapoznaj się z technikami znakowania.
        </p>

        <a class="button button--znakowanie" href="<?php echo get_page_link(get_page_by_title('Znakowanie')->ID); ?>">
            Czytaj więcej
        </a>
    </section>

<?php
get_footer();
?>