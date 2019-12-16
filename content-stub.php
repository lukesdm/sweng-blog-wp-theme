<div class="post-stub">
    <h2 class="post-stub-title">
        <a href="<?php the_permalink();?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <div class = "post-stub-meta">
        <span class="post-stub-date"><?php the_time('j F Y'); ?>&nbsp;</span>
        <?php the_tags('<ul class="stub-tag-collection"><li class="stub-tag-item">',
                       '</li>&nbsp;<li class="stub-tag-item">','</li></ul>'); ?>
    </div>
    <div class="post-stub-excerpt"> <?php get_the_excerpt(); ?></div>
</div>