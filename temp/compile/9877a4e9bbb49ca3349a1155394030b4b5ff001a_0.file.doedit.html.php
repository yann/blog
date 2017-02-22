<?php
/* Smarty version 3.1.31, created on 2017-02-14 15:02:00
  from "/var/www/html/blog/view/manageArticle/doedit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58a2ab687110d0_57169894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9877a4e9bbb49ca3349a1155394030b4b5ff001a' => 
    array (
      0 => '/var/www/html/blog/view/manageArticle/doedit.html',
      1 => 1487055720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a2ab687110d0_57169894 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/layui/src/css/layui.css">
    <?php echo '<script'; ?>
 src="/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/layui/src/layui.js"><?php echo '</script'; ?>
>
</head>
<body>
<div style="margin-top: 30px">

</div>
<form class="layui-form" action="/manageArticle/update" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">分类</label>
        <div class="layui-input-block">
            <select name="category" lay-verify="required">
                <option value=""></option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'one');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
?>
                <option value= <?php echo $_smarty_tpl->tpl_vars['one']->value;?>
><?php echo $_smarty_tpl->tpl_vars['one']->value;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <!--  <option value=""></option>
                  <option value="0">北京</option>
                  <option value="1">上海</option>
                  <option value="2">广州</option>
                  <option value="3">深圳</option>
                  <option value="4">杭州</option>-->
            </select>
        </div>
    </div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
<article style="color: #666">
    <header>

        <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
            <div class="layui-input-block">
                <input type="text" name="title" required  lay-verify="required"  autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">作者</label>
            <div class="layui-input-block">
                <input type="text" name="author" required  lay-verify="required"  autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
">
            </div>
        </div>


        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="article_id" name="article_id">
    </header>
    <section>
        <textarea id="demo" name="content" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
    </section>
    <hr>
    <br>
</article>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>



    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
</body>
</html>

<?php echo '<script'; ?>
>
    layui.use('layedit', function(){
        var layedit = layui.layedit;

        layedit.set({
            uploadImage: {
                url: '/manageArticle/uploadImg' //接口url
                ,type: 'post' //默认post
            }
        });

        layedit.build('demo'); //建立编辑器


    });
<?php echo '</script'; ?>
><?php }
}
