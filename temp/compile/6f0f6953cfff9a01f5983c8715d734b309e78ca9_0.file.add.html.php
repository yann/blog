<?php
/* Smarty version 3.1.31, created on 2017-02-14 22:33:23
  from "/var/www/html/blog/view/category/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58a31533884fe2_00616720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f0f6953cfff9a01f5983c8715d734b309e78ca9' => 
    array (
      0 => '/var/www/html/blog/view/category/add.html',
      1 => 1487082552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
    'file:admin/footer.html' => 1,
  ),
),false)) {
function content_58a31533884fe2_00616720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/layui/src/css/layui.css">
<?php echo '<script'; ?>
 src="/layui/src/layui.js"><?php echo '</script'; ?>
>
<form class="layui-form" action="/category/doadd" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">新增分类</label>
        <div class="layui-input-inline">
            <input type="text" name="name" lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
            <button type="reset" id="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
