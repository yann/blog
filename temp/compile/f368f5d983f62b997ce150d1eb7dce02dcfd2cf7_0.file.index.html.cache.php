<?php
/* Smarty version 3.1.31, created on 2017-01-30 12:03:15
  from "/var/www/html/blog/view/index/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_588ebb0345b3c5_42494931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f368f5d983f62b997ce150d1eb7dce02dcfd2cf7' => 
    array (
      0 => '/var/www/html/blog/view/index/index.html',
      1 => 1485141083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588ebb0345b3c5_42494931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1876125453588ebb03457be5_98035578';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link href='/css/index.css' rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/layui/src/css/layui.css">
    <?php echo '<script'; ?>
 src="/layui/src/layui.js"><?php echo '</script'; ?>
>

</head>
<body id="index_body">
<div class="all_contents" >
    <div>
        <img src="/img/yangyue.png"> </div>
    <div id="navigation">
        <a href=" " class="layui-btn layui-btn-radius layui-btn-danger">主页</a>
        <a href="/blog" class="layui-btn layui-btn-radius layui-btn">博客</a>
        <a href="/message" class="layui-btn layui-btn-radius layui-btn-normal">留言</a>
        <a href="/about" class="layui-btn layui-btn-radius layui-btn-warm">关于</a>
    </div>
    <div id="navigation__item">
        <ul>
            <li class="navigation__items">
                <div>
                    <a href="https://github.com/yann"  target="_blank">
                        <img src="./img/github.jpg" class= "connection_img">
                    </a>
                </div>
            </li>
            <li class="navigation__items">
                <div>
                    <a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=o9rCzcTa1pGRkcbj0tKNwMzO" style="text-decoration:none;">
                        <img src="./img/mail.jpg" class="connection_img">
                    </a>
                </div>
            </li>
            <li class="navigation__items">
                <div>
                    <a target="_blank" href="https://www.zhihu.com/people/yann-30-8/activities">
                        <img src="./img/zhihu.jpg" class="connection_img">
                    </a>
                </div>
            </li>
            <li class="navigation__items">

                <div  id="layer-photos-demo" class="layer-photos-demo">
                    <a>
                        <img src="./img/weixin.jpg" class="connection_img" alt="扫一扫加我为好友(点击空白区域返回)"   layer-src="./img/wechat.jpg" >
                    </a>
                </div>
            </li>
        </ul>
    </div>

</div>
</body>
</html>

<?php echo '<script'; ?>
>
        layui.use(['layer', 'form'], function () {
            var layer = layui.layer
                , form = layui.form();
            layer.photos({
                photos: '#layer-photos-demo'
                ,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
            });
        });

<?php echo '</script'; ?>
>
<?php }
}
