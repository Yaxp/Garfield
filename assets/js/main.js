// 判断是否为移动端
function isMobile() {
  if (window.navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i)) {
    return true; // 移动端
  } else {
    return false; // PC端
  }
}

// 文章图片灯箱
window.ViewImage && ViewImage.init('.post-content img');


// loader定时器
$(document).ready(function () {
  setTimeout(function () {
    $("#loader").addClass("hide");
  }, 30000);
});
// 点击进入按钮
$("#closeloader").click(function () {
  $("#loader").addClass("hide");
});
// nav栏样式调整
$('#libabys').first().attr("style", "margin-left: -5px");

$('#libabys').eq(1).attr("style", "margin-left: -5px");
// 友链列表版样式调整
$('.itp-index:odd').attr("style", "float: right;width:48%;");


// 去除 HTML 标签的函数
function stripHTML(html) {
  return html.replace(/<\/?[^>]+(>|$)/g, "");
}

// 展平评论数据结构的函数
function flattenComments(comments) {
  let result = [];
  comments.forEach(function (comment) {
    result.push(comment);
    if (comment.children && comment.children.length > 0) {
      result = result.concat(flattenComments(comment.children));
    }
  });
  return result;
}
