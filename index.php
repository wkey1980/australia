<?php
/**
 * Template to display index.php
 * 
 * packageDescription
 * 
 * @package australia
 */
?>

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="post">
                <?php the_title(); ?>
            </article>

        <?php endwhile ?>

    <?php else : ?>

        <article class="post error">
            <h1 class="404">No posts found</h1>
        </article>

    <?php endif; ?>