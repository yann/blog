<?php
/* Smarty version 3.1.31, created on 2017-02-23 21:31:09
  from "/var/www/html/blog/view/blog/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58aee41d349b51_53330866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e2dccb4c52ab27e2e6e2c881608b6f4265e322e' => 
    array (
      0 => '/var/www/html/blog/view/blog/index.html',
      1 => 1486704645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58aee41d349b51_53330866 (Smarty_Internal_Template $_smarty_tpl) {
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

        <div id="test_pages"></div>
    </div>

<div id="pages" style="display: none"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
<div id="blog_pages">
    <div id="demo1"></div>
</div>

</body>
</html>

<?php echo '<script'; ?>
>
    var data;
    var nums = 5;
    $.ajax({
        url : '/blog/getList',
        async : false,
        dataType: "json",
        success:function (d) {
       if (d){
           data = d;
       }
    }});
    var render = function(curr) {
        var str = '', last = curr * nums - 1;
        last = last >= data.length ? (data.length - 1) : last;
        for (var i = (curr * nums - nums); i <= last; i++) {
            str += "<article><header><p class='date'>"+data[i].ctime+"</p><h2>" +
                "<a href="+"/blog/article/"+data[i].id+">"+data[i].title+"</a></h2>" +
                "<br>" +
                "<input type='hidden' value="+data[i].id+" class='article_id' name='article_id'> " +
                "</header><section>" + data[i].summary+"</section>" +
                "<p> " +
                "<a href="+"/blog/article/"+data[i].id+">- 阅读剩余部分 -</a>" +
                "</p><hr><br>" +
                "</article>";
        }
        return str;
    };
    layui.use(['laypage', 'layer'], function() {
        var laypage = layui.laypage
            ,layer = layui.layer;
        laypage({
            cont: 'demo1'
            , pages: Math.ceil($("#pages").text()/5) //总页数
            ,curr : 1
            , groups: 4 //连续显示分页数
            ,skin: '#1E9FFF'
           ,jump: function(obj) {
                document.getElementById('test_pages').innerHTML = render(obj.curr);
            }
            });
        });
<?php echo '</script'; ?>
><?php }
}
