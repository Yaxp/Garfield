<?php
//注册导航
register_nav_menus(
	array(
	'main'     => __( '主菜单导航' ),
	)
);

// 加载样式和脚本
function youshijie_enqueue_scripts() {
    // 加载全局 CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('remixicon', get_template_directory_uri() . '/assets/css/remixicon.css');
    wp_enqueue_style('uikit', get_template_directory_uri() . '/assets/css/uikit.min.css');
    wp_enqueue_style('nprogress', get_template_directory_uri() . '/assets/css/nprogress.min.css');

    // 加载全局 JS
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('uikit', get_template_directory_uri() . '/assets/js/uikit.min.js');
    wp_enqueue_script('nprogress', get_template_directory_uri() . '/assets/js/nprogress.js');
    //wp_enqueue_script('pjax', get_template_directory_uri() . '/assets/js/pjax.js');
}
add_action('wp_enqueue_scripts', 'youshijie_enqueue_scripts');


/* 记录访问计数 */
function record_visitors() {
    if (is_singular()) { // 判断是否是单篇文章
        $post_ID = get_the_ID(); // 获取当前文章 ID
        if ($post_ID) {
            $views = (int)get_post_meta($post_ID, 'views', true); // 获取当前浏览量
            update_post_meta($post_ID, 'views', $views + 1); // 更新或递增浏览量
        }
    }
}
add_action('wp_head', 'record_visitors');

/* 获取文章浏览量（仅输出数字） */
function post_views($echo = true) {
    $views = (int)get_post_meta(get_the_ID(), 'views', true); // 获取浏览量
    $views = $views ? $views : 0; // 如果没有记录，返回 0

    if ($echo) {
        echo $views; // 输出数字
    } else {
        return $views; // 返回数字
    }
}

?>