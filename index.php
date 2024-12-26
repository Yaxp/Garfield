<?php get_header(); ?>

<div id="pjax-container" uk-scrollspy="target: > div,a; cls: uk-animation-slide-bottom-small; delay: 0">
    <article>
        <div class="recent-posts section">
            <h2 class="section-header">随笔<i class="ri-quill-pen-line"></i></h2>
            <div class="posts">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="post">
                        <div class="time"><?php echo get_the_date(); ?></div>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                <?php endwhile; else : ?>
                    <p>暂无文章。</p>
                <?php endif; ?>
            </div>
        </div>
    </article>

    <!-- 分页 -->
    <ul class="pagination">
        <?php
        global $wp_query;

        // 获取当前页面和总页数
        $current_page = max(1, get_query_var('paged'));
        $total_pages = $wp_query->max_num_pages;

        // 判断是否为第一页、中间页或最后一页
        if ($current_page == 1 && $current_page < $total_pages) : ?>
            <!-- 仅显示“下一页”按钮 -->
            <li class="page-item page-next">
                <?php next_posts_link('<span class="next uk-scrollspy-inview uk-animation-slide-bottom-small" title="下一页">下一页</span>'); ?>
            </li>
        <?php elseif ($current_page < $total_pages) : ?>
            <!-- 同时显示“下一页”和“上一页”按钮 -->
            <li class="page-item page-next">
                <?php next_posts_link('<span class="next uk-scrollspy-inview uk-animation-slide-bottom-small" title="下一页">下一页</span>'); ?>
            </li>
            <li class="page-item page-previous">
                <?php previous_posts_link('<span class="prev uk-scrollspy-inview uk-animation-slide-bottom-small" title="上一页">上一页</span>'); ?>
            </li>
        <?php elseif ($current_page == $total_pages) : ?>
            <!-- 仅显示“上一页”按钮 -->
            <li class="page-item page-previous">
                <?php previous_posts_link('<span class="prev uk-scrollspy-inview uk-animation-slide-bottom-small" title="上一页">上一页</span>'); ?>
            </li>
        <?php endif; ?>
    </ul>
</div>

<?php get_footer(); ?>
