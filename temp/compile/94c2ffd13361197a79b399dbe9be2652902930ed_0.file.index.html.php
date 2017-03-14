<?php
/* Smarty version 3.1.31, created on 2017-02-26 22:59:22
  from "/var/www/html/blog/view/login/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b2ed4a60ac72_91579207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94c2ffd13361197a79b399dbe9be2652902930ed' => 
    array (
      0 => '/var/www/html/blog/view/login/index.html',
      1 => 1488121161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b2ed4a60ac72_91579207 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="/css/login.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/login.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="home">
    <form id="login" class="current1" method="post" action="/login/check">

        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
        <h3>用户登入</h3>
        <img class="avator" src="./img/avatar.jpg" width="96" height="96"/>
        <label>邮箱/名称<input type="text" name="username" style="width:215px;" /><span>邮箱为空</span></label>
        <label>密码<input type="password" name="password"  /><span>密码为空</span></label>
        <!--<button type="button">登入</button>-->
        <input type="submit" id="button" value="登录">
    </form>
</div>
</body>
</html><?php }
}
