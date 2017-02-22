<?php
/* Smarty version 3.1.31, created on 2017-02-14 21:31:01
  from "/var/www/html/blog/view/manageArticle/delete.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58a30695836f04_36873950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f667e9f43cd6480882dfadf2a3eb17214f2087d' => 
    array (
      0 => '/var/www/html/blog/view/manageArticle/delete.html',
      1 => 1487079060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
    'file:admin/footer.html' => 1,
  ),
),false)) {
function content_58a30695836f04_36873950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/layui/src/css/layui.css">
<?php echo '<script'; ?>
 src="/layui/src/layui.js"><?php echo '</script'; ?>
>
<div id="blog_content">
    <div id="test_pages"></div>
</div>

<div id="pages" style="display: none"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
<div id="blog_pages">
    <div id="demo1"></div>
</div>

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
            str += "<article><header><p class='date'>"+data[i].ctime+"</p>" +
                //"<a  class='layui-btn layui-btn-primary' href="+"/manageArticle/dodelete/"+data[i].id+">"+data[i].title+"</a></h2>" +
                "<a  class='layui-btn'>" +
                "<div style='display: none'>/manageArticle/dodelete/"+data[i].id+"</div>"+data[i].title+"</a></h2>" +
                "<input type='hidden' value="+data[i].id+" class='article_id' name='article_id'> " +
                "</header><section>" + data[i].summary+"</section>" +
                "<p> " +
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
        $("#test_pages").bind('click','.layui-btn',function () {
            var href = $(event.target).find('div').text();
            layer.confirm('确定删除这篇文章？', {
                btn: ['确定','取消'] //按钮
            }, function(){

                //alert(href);
                window.location.href=href;
            }, function(){
                layer.close();
            });
        })

    });




<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
