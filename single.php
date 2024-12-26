<?php get_header(); ?>

<div class="container">
    <!-- 文章标题 -->
    <article class="post">
        <h1 class="post-title"><?php the_title(); ?></h1>
        
        <!-- 文章元信息 -->
        <div class="meta">
            <span>作者: <?php echo get_the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?></span>
            <span>浏览: <?php post_views(); ?></span>
            <span>字数: <?php echo mb_strlen(strip_tags(get_the_content())); ?> 字</span>
            <span>分类: <?php the_category(', '); ?></span>
        </div>

        <!-- 文章内容 -->
        <div class="post-content" id="post-writing">
            <?php 
            // 输出文章内容
            while (have_posts()): the_post();
                the_content();

                // 支持分页
                wp_link_pages(array(
                    'before' => '<div class="page-links">分页：',
                    'after'  => '</div>',
                ));
            endwhile;
            ?>
        </div>
        
        <!-- 文章标签 -->
        <div class="post-tags">
            <?php the_tags('<ul class="tags"><li>', '</li><li>', '</li></ul>'); ?>
        </div>
    </article>
<hr class="uk-divider-icon"></hr>
<!-- 评论区域 -->
    <div id="Comments"></div>
    <link href="https://artalk.yaxp.com/dist/Artalk.css" rel="stylesheet">
    <script src="https://artalk.yaxp.com/dist/Artalk.js"></script>
    <script>
        Artalk.init({
            el: '#Comments',
            pageKey: '<?php echo addslashes(get_permalink()); ?>', // 页面唯一标识
            pageTitle: '<?php echo addslashes(get_the_title()); ?>', // 页面标题
            server: 'https://artalk.yaxp.com', // 替换为您的 Artalk 服务端地址
            site: '<?php echo addslashes(get_bloginfo("name")); ?>', // 站点名称
            flatMode: true, // 启用平铺模式
            lang: 'zh-CN' // 设置语言为中文
        });
    </script>
</div>

<?php get_footer(); ?>
