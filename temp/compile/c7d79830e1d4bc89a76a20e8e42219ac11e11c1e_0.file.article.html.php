<?php
/* Smarty version 3.1.31, created on 2017-02-23 22:40:02
  from "/var/www/html/blog/view/blog/article.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58aef442813870_79038059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7d79830e1d4bc89a76a20e8e42219ac11e11c1e' => 
    array (
      0 => '/var/www/html/blog/view/blog/article.html',
      1 => 1487772782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58aef442813870_79038059 (Smarty_Internal_Template $_smarty_tpl) {
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
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <article style="color: #666">
        <header>
            <p class="date"><?php echo $_smarty_tpl->tpl_vars['article']->value['ctime'];?>
</p>
            <h2><a href="/blog/article/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h2>
            <br>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="article_id" name="article_id">
        </header>
        <section>
            <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

        </section>
        <hr>
        <br>
    </article>

    <!-- 多说评论框 start -->
    <div class="ds-thread" data-thread-key="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" data-url="http://www.yann.site/blog/article/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"></div>
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
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div>
</body>
</html><?php }
}
