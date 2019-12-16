<div class="blog-post">
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <div class="blog-post-meta">
        <span class="blog-post-date"><?php the_date(); ?></span>
        <?php the_tags('<ul class="stub-tag-collection"><li class="stub-tag-item">',
                        '</li>&nbsp;<li class="stub-tag-item">','</li></ul>'); ?>
    </div>
    <div class="article-content">
        <?php the_content(); ?>
    </div>
</div>