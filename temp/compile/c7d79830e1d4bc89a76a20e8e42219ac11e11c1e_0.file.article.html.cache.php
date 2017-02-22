<?php
/* Smarty version 3.1.31, created on 2017-01-30 11:41:53
  from "/var/www/html/blog/view/blog/article.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_588eb601a832b1_71352097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7d79830e1d4bc89a76a20e8e42219ac11e11c1e' => 
    array (
      0 => '/var/www/html/blog/view/blog/article.html',
      1 => 1485747383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588eb601a832b1_71352097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '466745436588eb601a7c1c3_73577358';
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
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div>
</body>
</html><?php }
}
