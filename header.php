<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package happy-13
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container">
    <!-- BEFORE LOAD -->
    <aside class="beforeLoad">
        <img class="beforeLoad__logo" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo.png'; ?>" alt="happy-13-logo" />
    </aside>

    <!-- LANDING PAGE -->
    <section class="landingPage">
       <aside class="landingPage__carousel__dots">
           <button class="landingPage__carousel__dots__item dot--active" onclick="changeSlide(0)"></button>
           <button class="landingPage__carousel__dots__item" onclick="changeSlide(1)"></button>
           <button class="landingPage__carousel__dots__item" onclick="changeSlide(2)"></button>
       </aside>
       <main class="landingPage__carousel">
           <img class="landingPage__img" onload='
        const beforeLoad = document.querySelector(".beforeLoad");
        const landingPage = document.querySelector(".landingPage");
        const landingPageChildren = document.querySelectorAll(".landingPage *");

        beforeLoad.style.opacity = "0";
        landingPage.style.opacity = "1";
        landingPageChildren.forEach(item => {
        item.style.opacity = "1";
        });

        setTimeout(() => {
        beforeLoad.style.display = "none";
        }, 1000);
' src="<?php echo get_bloginfo('stylesheet_directory') . '/img/happy13.png'; ?>" alt="happy-13" />

           <img class="landingPage__img2" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/happy13.png'; ?>" alt="happy-13" />
           <img class="landingPage__img3" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/happy13.png'; ?>" alt="happy-13" />
       </main>
        <header class="siteHeader">
            <a href="<?php echo get_home_url(); ?>">
                <img class="siteHeader__logo" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo.png'; ?>" alt="happy-13-logo" />
            </a>
            <!-- Desktop -->
            <menu class="siteMenu">
                <ul class="siteMenu__list">
                    <li class="siteMenu__item">
                        <a href="#o-nas">O nas</a>
                    </li>
                    <li class="siteMenu__item">
                        <a href="#produkty">Produkty</a>
                    </li>
                    <li class="siteMenu__item">
                        <a href="<?php echo get_page_link(get_page_by_title('Katalogi')->ID); ?>">Katalog</a>
                    </li>
                    <li class="siteMenu__item">
                        <a href="#blog">Blog</a>
                    </li>
                    <li class="siteMenu__item">
                        <a href="#contact">Kontakt</a>
                    </li>
                </ul>
            </menu>

            <!-- Mobile -->
            <menu class="siteMenu--mobile">
                <button class="siteMenu__hamburgerMenu" onclick="openMobileMenu()">
                    <img class="siteMenu__hamburgerMenu__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/menu.png'; ?>" alt="menu" />
                </button>

                <div class="mobileMenu">
                    <button class="mobileMenu__closeBtn" onclick="closeMobileMenu()">
                        <img class="mobileMenu__closeBtn__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/cancel.png'; ?>" alt="wyjdz" />
                    </button>

                    <img class="mobileMenu__logo" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/happy13-logo.png'; ?>" alt="logo" />

                    <ul class="mobileMenu__list">
                        <li class="mobileMenu__item" onclick="closeMobileMenu()">
                            <a href="#o-nas">O nas</a>
                        </li>
                        <li class="mobileMenu__item" onclick="closeMobileMenu()">
                            <a href="#produkty">Produkty</a>
                        </li>
                        <li class="mobileMenu__item" onclick="closeMobileMenu()">
                            <a href="<?php echo get_page_link(get_page_by_title('Katalogi')->ID); ?>">Katalog</a>
                        </li>
                        <li class="mobileMenu__item" onclick="closeMobileMenu()">
                            <a href="#blog">Blog</a>
                        </li>
                        <li class="mobileMenu__item" onclick="closeMobileMenu()">
                            <a href="#contact">Kontakt</a>
                        </li>
                    </ul>
                </div>

            </menu>
        </header>
