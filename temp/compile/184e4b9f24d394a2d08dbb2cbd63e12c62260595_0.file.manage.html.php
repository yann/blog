<?php
/* Smarty version 3.1.31, created on 2017-02-14 22:20:19
  from "/var/www/html/blog/view/category/manage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58a31223173475_88633949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '184e4b9f24d394a2d08dbb2cbd63e12c62260595' => 
    array (
      0 => '/var/www/html/blog/view/category/manage.html',
      1 => 1487082018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
    'file:admin/footer.html' => 1,
  ),
),false)) {
function content_58a31223173475_88633949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/layui/src/css/layui.css">
<?php echo '<script'; ?>
 src="/layui/src/layui.js"><?php echo '</script'; ?>
>
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 10px;">
    <legend style="color: #1E9FFF">修改、删除分类</legend>
</fieldset>

<div style="width: 60%" id="category_manage_content">
<ur>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorys']->value, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
?>
<li style="margin: 10px"><span style="color:#1E9FFF "><?php echo $_smarty_tpl->tpl_vars['k']->value['id'];?>
.</span><a style="width: 250px" class="layui-btn layui-btn-normal layui-btn-radius"><?php echo $_smarty_tpl->tpl_vars['k']->value['name'];?>
</a>
    <button  class="layui-btn layui-btn-normal layui-btn-small"><i class="layui-icon"></i></button>
    <a  href="/category/delete/<?php echo $_smarty_tpl->tpl_vars['k']->value['id'];?>
" class="layui-btn layui-btn-normal layui-btn-small"><i class="layui-icon"></i></a>
</li><hr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</ur>
</div>
<?php echo '<script'; ?>
>
    layui.use('layer', function() {
        var layer = layui.layer;
        $('button').bind('click',function () {
            var id = $(event.target).parents('li').find('span').text();
            id = id.replace(".","");
            var href;
            layer.prompt({
                title: '修改分类，并确认',
                formType: 2
            }, function(text, index){
               href = "/category/edit/?id="+id+"&&name="+text;
                window.location.href=href;
            });
            layer.close(index);
            });
    });
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
