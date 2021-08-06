<?php
get_header('page');
?>
    </section>

    <main class="page section page--newsletter">
        <h1 class="sectionHeader pageHeader">
            <?php echo the_title(); ?>
        </h1>
        <h2 class="page__content__header">
            Dziękujemy za zapisanie się do naszego newslettera!
        </h2>

        <a class="button button--backToHomepage" href="<?php echo get_home_url(); ?>">
            Wróć na stronę główną
        </a>
    </main>

<?php
get_footer();
