<?php
/* Smarty version 3.1.31, created on 2017-02-14 21:25:11
  from "/var/www/html/blog/view/admin/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58a30537a66a40_66478447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c3c1c98b927c23bb4cfa746ed2b913ca4bd480' => 
    array (
      0 => '/var/www/html/blog/view/admin/header.html',
      1 => 1487078711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a30537a66a40_66478447 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>网站后台</title>
    <?php echo '<script'; ?>
 src="/js/jquery.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function(){
            $(".div2").click(function(){
                $(this).next("div").slideToggle("slow").siblings(".div3:visible").slideUp("slow");
            });
        });
    <?php echo '</script'; ?>
>

    <style type="text/css">
        *{margin:0;padding:0;list-style-type:none;}
        a,img{border:0;}
        body{font:12px/180% "微软雅黑";}
        a,a:hover{color:#000;text-decoration:none;}

        .left{width:200px;height:100%;border-right:1px solid #CCCCCC ;#FFFFFF;color:#000000;font-size:14px;text-align:center;position:absolute;left:0;top:0;}
        .div1{text-align:center;width:200px;padding-top:10px;}
        .div2{height:40px;line-height:40px;cursor:pointer;font-size:13px;position:relative;border-bottom:#ccc 1px dotted;}
        .jbsz {position:absolute;height:20px;width:20px;left:40px;top:10px;background-color: #393D49}
        .xwzx {position:absolute;height:20px;width:20px;left:40px;top:10px;background-color: #009688}
        .zxcp {position:absolute;height:20px;width:20px;left:40px;top:10px;background-color: #1E9FFF}
        .lmtj {position:absolute;height:20px;width:20px;left:40px;top:10px;background-color: #393D49}
        .div3{display:none;font-size:13px;}
        .div3 ul{margin:0;padding:0;}
        .div3 li{height:30px;line-height:30px;list-style:none;border-bottom:#ccc 1px dotted;text-align:center;}
    </style>

</head>
<body>

<div class="left">
    <div class="div1">
        <div class="left_top"><img src="/img/bbb_01.jpg"><img src="/img/bbb_02.jpg" id="2"><img src="/img/bbb_03.jpg"><img src="/img/bbb_04.jpg"></div>

        <div class="div2"><div class="jbsz"></div>基本管理</div>
        <div class="div3">
            <ul>
                <li><a href="#">网站配置</a></li>
                <li><a href="#">管理设置</a></li>
                <li><a href="#">导航菜单</a></li>
            </ul>
        </div>
        <div class="div2"><div class="xwzx"></div>管理文章</div>
        <div class="div3">
            <ul>
                <li ><a href="/manageArticle/edit">修改文章</a></li>
                <li><a href="/manageArticle/delete">删除文章</a></li>
                <li><a href="/manageArticle/add">添加文章</a></li>
            </ul>
        </div>
        <div class="div2"><div class="zxcp"></div>管理分类</div>
        <div class="div3">
            <ul>

                <li><a href="/category/manage">修改删除</a></li>
                <li><a href="/category/add">增加分类</a></li>
            </ul>
        </div>
        <div class="div2"><div class="lmtj"></div>栏目添加</div>
        <div class="div3">
            <ul>
                <li><a href="#">文章系统</a></li>
                <li><a href="#">图片系统</a></li>
                <li><a href="#">添加表单</a></li>
                <li><a href="#">招聘系统</a></li>
            </ul>
        </div>
    </div>
</div>
<div style="float: right;width: 82%;margin-top: 40px;height: 100%">
<?php }
}
