<?php /* Smarty version 3.1.27, created on 2016-07-14 07:57:08
         compiled from "D:\wamp\www\s47_h\mvc\mvc5.0\views\User\add.html" */ ?>
<?php
/*%%SmartyHeaderCode:8099578745d493c640_45040863%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '772a08e8a6db4d7fc47b751150c5ccfd3c85cae4' => 
    array (
      0 => 'D:\\wamp\\www\\s47_h\\mvc\\mvc5.0\\views\\User\\add.html',
      1 => 1468483027,
      2 => 'file',
    ),
    'bfb0af525850b0aa5e680996e3a3c97540666116' => 
    array (
      0 => 'D:\\wamp\\www\\s47_h\\mvc\\mvc5.0\\views\\User\\index.html',
      1 => 1468481243,
      2 => 'file',
    ),
    '936d9f7d66acdbbc2cd03430760cf6612ba55d2c' => 
    array (
      0 => '936d9f7d66acdbbc2cd03430760cf6612ba55d2c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '8099578745d493c640_45040863',
  'variables' => 
  array (
    'title' => 0,
    'list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578745d4a1b0f0_23539955',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578745d4a1b0f0_23539955')) {
function content_578745d4a1b0f0_23539955 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8099578745d493c640_45040863';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/my.css">
</head>
<body>
    <div class="container">
        <h1><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
        <div class="mt20">
            <a href="./index.php?m=User&a=index" class="btn btn-info">首页</a>
            <a href="./index.php?m=User&a=add" class="btn btn-success">添加</a>
        </div>
        <hr>

        <?php
$_smarty_tpl->properties['nocache_hash'] = '8099578745d493c640_45040863';
?>


    <form action="./index.php?m=User&a=insert" method="post" class="h3 mt50">
        name:
        <input type="text" name="name" placeholder="请输入用户名"><br><br>
        sex:
        <input type="radio" name="sex" value="0">女
        <input type="radio" name="sex" value="1" checked>男
        <input type="radio" name="sex" value="2">保密<br><br>
        age:
        <input type="text" name="age"><br><br>
        province:
        <select name="province">
            <option value="江苏">江苏</option>
            <option value="上海">上海</option>
            <option value="新疆">新疆</option>
            <option value="浙江">浙江</option>
            <option value="北京">北京</option>
            <option value="深圳">深圳</option>
            <option value="纽约">纽约</option>
        </select><br><br>
        <input type="hidden" name="vcode" value="1234">
        <input type="hidden" name="hot" value="so hot">

        <input type="submit" value="确认添加" class="btn btn-primary">
    </form>

    </div>
    <?php echo '<script'; ?>
 src="./public/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>