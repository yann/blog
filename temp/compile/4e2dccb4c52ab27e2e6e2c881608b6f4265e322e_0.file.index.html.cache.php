<?php
/* Smarty version 3.1.31, created on 2017-01-30 11:41:55
  from "/var/www/html/blog/view/blog/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_588eb6030880a2_15475397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e2dccb4c52ab27e2e6e2c881608b6f4265e322e' => 
    array (
      0 => '/var/www/html/blog/view/blog/index.html',
      1 => 1485352082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588eb6030880a2_15475397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1025328083588eb603080f60_58611504';
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

<body id="blog_body">
<ul class="layui-nav">
    <li class="layui-nav-item"><a href="/">主页</a></li>
    <li class="layui-nav-item"><a href="/blog">博客</a></li>
    <li class="layui-nav-item"><a href="/message">留言</a></li>
    <li class="layui-nav-item"><a href="/about">关于</a></li>
</ul>
<br/>
<hr>
    <div id="blog_content">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <article>
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
                <?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>

            </section>
            <p>
                <a href="/blog/article/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">- 阅读剩余部分 -</a>
            </p>
            <hr>
            <br>
        </article>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>
<div id="blog_pages">
    <div id="demo1"></div>
</div>

</body>
</html>

<?php echo '<script'; ?>
>
    layui.use(['laypage', 'layer'], function() {
        var laypage = layui.laypage
            , layer = layui.layer;
        laypage({
            cont: 'demo1'
            , pages: 10 //总页数
            , groups: 5 //连续显示分页数
        })
    });
<?php echo '</script'; ?>
><?php }
}
