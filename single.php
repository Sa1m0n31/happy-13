<?php
get_header('page');
?>
</section>
		<?php
		while ( have_posts() ) :
			the_post();
		?>
            <main class="page section single">
                <h1 class="sectionHeader pageHeader">
                    <?php echo the_title(); ?>
                </h1>
                <article class="page__content">
                    <?php echo the_content(); ?>
                </article>
            </main>

		<?php
		endwhile; // End of the loop.
		?>
<?php
get_footer();
?>