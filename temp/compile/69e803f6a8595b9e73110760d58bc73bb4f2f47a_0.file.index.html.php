<?php
/* Smarty version 3.1.31, created on 2017-02-23 21:31:03
  from "/var/www/html/blog/view/message/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58aee417af76b6_34581664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e803f6a8595b9e73110760d58bc73bb4f2f47a' => 
    array (
      0 => '/var/www/html/blog/view/message/index.html',
      1 => 1487771287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58aee417af76b6_34581664 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>blog</title>
    <link href='/css/index.css' rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/layui/src/css/layui.css">
    <?php echo '<script'; ?>
 src="/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/layui/src/layui.js"><?php echo '</script'; ?>
>
</head>

<body id="blog_article_body">
<ul class="layui-nav">
    <li class="layui-nav-item"><a href="/">主页</a></li>
    <li class="layui-nav-item"><a href="/blog">博客</a></li>
    <li class="layui-nav-item"><a href="/message">留言</a></li>
    <li class="layui-nav-item"><a href="/about">关于</a></li>
</ul>
<div id = 'article_contents'>
    <div style="margin-top: 30px">

        <!-- 多说评论框 start -->
        <div class="ds-thread"></div>
        <!-- 多说评论框 end -->
        <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
        <?php echo '<script'; ?>
 type="text/javascript">
            var duoshuoQuery = {short_name:"yann"};
            (function() {
                var ds = document.createElement('script');
                ds.type = 'text/javascript';ds.async = true;
                ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                ds.charset = 'UTF-8';
                (document.getElementsByTagName('head')[0]
                || document.getElementsByTagName('body')[0]).appendChild(ds);
            })();
        <?php echo '</script'; ?>
>
        <!-- 多说公共JS代码 end -->
    </div>
</div>
</body>
</html><?php }
}
