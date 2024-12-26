(function ($) {
    $(document).ready(function () {
        // 初始化 PJAX
        $(document).pjax('a', '#pjax-container', {
            fragment: '#pjax-container', // 定义内容加载的目标区域
            timeout: 8000               // 设置超时时间
        });

        // 在每次 PJAX 完成加载后触发
        $(document).on('pjax:end', function () {
            // 重新初始化需要的动态功能（如 WordPress 的动态脚本）
            if (typeof wp !== 'undefined' && wp.hasOwnProperty('autop')) {
                wp.autop.init();
            }
        });
    });
})(jQuery);
