<?php
get_header('page');
?>
</section>
<section class="catalogs section">
    <h2 class="sectionHeader">
        Katalogi
    </h2>

    <section class="catalogs__section">
        <h3 class="sectionHeader--catalog">
            Gadżety ogólne
        </h3>
        <main class="catalogs__content">
            <?php
                $args = array(
                        'post_type' => 'catalog'
                );

                $query = new WP_Query($args);

                if($query->have_posts()) {
                    while($query->have_posts()) {
                        $query->the_post();
                        if(in_array("Gadżety ogólne", get_field('kategoria_katalogu'))) {
                        ?>
                        <section class="catalogs__item">
                            <img class="catalogs__item__img" src="<?php echo get_field('zdjecie_katalogu'); ?>" alt="zdjecie-katalogu" />
                            <h3 class="catalogs__item__header">
                                <?php echo the_title(); ?>
                            </h3>
                            <a class="button button--catalogs" href="<?php echo get_field('link_do_katalogu'); ?>">
                                Zobacz katalog
                            </a>
                        </section>
            <?php
                        }
                    }
                }
            ?>
        </main>
    </section>

    <section class="catalogs__section">
        <h3 class="sectionHeader--catalog">
            Gadżety eko
        </h3>
        <main class="catalogs__content">
            <?php
            $args = array(
                'post_type' => 'catalog'
            );

            $query = new WP_Query($args);

            if($query->have_posts()) {
                while($query->have_posts()) {
                    $query->the_post();
                    if(in_array("Gadżety eko", get_field('kategoria_katalogu'))) {
                        ?>
                        <section class="catalogs__item">
                            <img class="catalogs__item__img" src="<?php echo get_field('zdjecie_katalogu'); ?>" alt="zdjecie-katalogu" />
                            <h3 class="catalogs__item__header">
                                <?php echo the_title(); ?>
                            </h3>
                            <a class="button button--catalogs" href="<?php echo get_field('link_do_katalogu'); ?>">
                                Zobacz katalog
                            </a>
                        </section>
                        <?php
                    }
                }
            }
            ?>
        </main>
    </section>

    <section class="catalogs__section">
        <h3 class="sectionHeader--catalog">
            Kubki i szklanki
        </h3>
        <main class="catalogs__content">
            <?php
            $args = array(
                'post_type' => 'catalog'
            );

            $query = new WP_Query($args);

            if($query->have_posts()) {
                while($query->have_posts()) {
                    $query->the_post();
                    if(in_array("Kubki i szklanki", get_field('kategoria_katalogu'))) {
                        ?>
                        <section class="catalogs__item">
                            <img class="catalogs__item__img" src="<?php echo get_field('zdjecie_katalogu'); ?>" alt="zdjecie-katalogu" />
                            <h3 class="catalogs__item__header">
                                <?php echo the_title(); ?>
                            </h3>
                            <a class="button button--catalogs" href="<?php echo get_field('link_do_katalogu'); ?>">
                                Zobacz katalog
                            </a>
                        </section>
                        <?php
                    }
                }
            }
            ?>
        </main>
    </section>

    <section class="catalogs__section">
        <h3 class="sectionHeader--catalog">
            Pamięci USB
        </h3>
        <main class="catalogs__content">
            <?php
            $args = array(
                'post_type' => 'catalog'
            );

            $query = new WP_Query($args);

            if($query->have_posts()) {
                while($query->have_posts()) {
                    $query->the_post();
                    if(in_array("Pamięci USB", get_field('kategoria_katalogu'))) {
                        ?>
                        <section class="catalogs__item">
                            <img class="catalogs__item__img" src="<?php echo get_field('zdjecie_katalogu'); ?>" alt="zdjecie-katalogu" />
                            <h3 class="catalogs__item__header">
                                <?php echo the_title(); ?>
                            </h3>
                            <a class="button button--catalogs" href="<?php echo get_field('link_do_katalogu'); ?>">
                                Zobacz katalog
                            </a>
                        </section>
                        <?php
                    }
                }
            }
            ?>
        </main>
    </section>

    <section class="catalogs__section">
        <h3 class="sectionHeader--catalog">
            Zabawki
        </h3>
        <main class="catalogs__content">
            <?php
            $args = array(
                'post_type' => 'catalog'
            );

            $query = new WP_Query($args);

            if($query->have_posts()) {
                while($query->have_posts()) {
                    $query->the_post();
                    if(in_array("Zabawki", get_field('kategoria_katalogu'))) {
                        ?>
                        <section class="catalogs__item">
                            <img class="catalogs__item__img" src="<?php echo get_field('zdjecie_katalogu'); ?>" alt="zdjecie-katalogu" />
                            <h3 class="catalogs__item__header">
                                <?php echo the_title(); ?>
                            </h3>
                            <a class="button button--catalogs" href="<?php echo get_field('link_do_katalogu'); ?>">
                                Zobacz katalog
                            </a>
                        </section>
                        <?php
                    }
                }
            }
            ?>
        </main>
    </section>

    <section class="catalogs__section">
        <h3 class="sectionHeader--catalog">
            Rosnące upominki
        </h3>
        <main class="catalogs__content">
            <?php
            $args = array(
                'post_type' => 'catalog'
            );

            $query = new WP_Query($args);

            if($query->have_posts()) {
                while($query->have_posts()) {
                    $query->the_post();
                    if(in_array("Rosnące upominki", get_field('kategoria_katalogu'))) {
                        ?>
                        <section class="catalogs__item">
                            <img class="catalogs__item__img" src="<?php echo get_field('zdjecie_katalogu'); ?>" alt="zdjecie-katalogu" />
                            <h3 class="catalogs__item__header">
                                <?php echo the_title(); ?>
                            </h3>
                            <a class="button button--catalogs" href="<?php echo get_field('link_do_katalogu'); ?>">
                                Zobacz katalog
                            </a>
                        </section>
                        <?php
                    }
                }
            }
            ?>
        </main>
    </section>
</section>
<?php
get_footer();
?>
