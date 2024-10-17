<?php get_header(); ?>

<main>
    <h1>Welcome to My Simple Theme</h1>
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>
    <?php endwhile; else : ?>
        <p><?php esc_html_e('No posts found.', 'my-simple-theme'); ?></p>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>