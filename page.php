<?php
get_header('page');
?>
</section>

<main class="page section">
    <h1 class="sectionHeader pageHeader">
        <?php echo the_title(); ?>
    </h1>
    <article class="page__content">
        <?php echo the_content(); ?>
    </article>
</main>

<?php
get_footer();
