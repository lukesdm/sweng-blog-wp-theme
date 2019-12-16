<?php get_header(); ?>
    <div class="content darkened-background">
        <?php 
        if (have_posts()) 
        {
            while (have_posts())
            {
                the_post();
                get_template_part('content-page', get_post_format());
            }
        }
        ?>
    </div>
<?php get_footer(); ?>