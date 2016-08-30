<?php /* Smarty version 3.1.27, created on 2016-07-14 08:13:53
         compiled from "D:\wamp\www\s47_h\mvc\mvc5.0\views\User\edit.html" */ ?>
<?php
/*%%SmartyHeaderCode:24603578749c1c5f1a6_09035821%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54f4072cc9231424fcacb1a742547263e8de17e2' => 
    array (
      0 => 'D:\\wamp\\www\\s47_h\\mvc\\mvc5.0\\views\\User\\edit.html',
      1 => 1468483954,
      2 => 'file',
    ),
    'bfb0af525850b0aa5e680996e3a3c97540666116' => 
    array (
      0 => 'D:\\wamp\\www\\s47_h\\mvc\\mvc5.0\\views\\User\\index.html',
      1 => 1468481243,
      2 => 'file',
    ),
    'c6e2e2742091359b4720022274f523fd61ab00f5' => 
    array (
      0 => 'c6e2e2742091359b4720022274f523fd61ab00f5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '24603578749c1c5f1a6_09035821',
  'variables' => 
  array (
    'title' => 0,
    'list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578749c1ded909_61125768',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578749c1ded909_61125768')) {
function content_578749c1ded909_61125768 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24603578749c1c5f1a6_09035821';
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
$_smarty_tpl->properties['nocache_hash'] = '24603578749c1c5f1a6_09035821';
?>

    <form action="./index.php?m=User&a=update" method="post" class="mt20 h3">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
        name:
        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" placeholder="请输入用户名"><br><br>
        sex:
        <input type="radio" name="sex" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value['sex'] == 0) {?>checked<?php }?> >女
        <input type="radio" name="sex" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['sex'] == 1) {?>checked<?php }?>>男
        <input type="radio" name="sex" value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['sex'] == 2) {?>checked<?php }?>>保密<br><br>
        age:
        <input type="text" name="age" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['age'];?>
"><br><br>
        province:
        <select name="province">
            <option value="江苏" <?php if ($_smarty_tpl->tpl_vars['data']->value['province'] == '江苏') {?>selected<?php }?> >江苏</option>
            <option value="上海" <?php if ($_smarty_tpl->tpl_vars['data']->value['province'] == '上海') {?>selected<?php }?>>上海</option>
            <option value="新疆" <?php if ($_smarty_tpl->tpl_vars['data']->value['province'] == '新疆') {?>selected<?php }?>>新疆</option>
            <option value="浙江" <?php if ($_smarty_tpl->tpl_vars['data']->value['province'] == '浙江') {?>selected<?php }?>>浙江</option>
            <option value="北京" <?php if ($_smarty_tpl->tpl_vars['data']->value['province'] == '北京') {?>selected<?php }?>>北京</option>
            <option value="深圳" <?php if ($_smarty_tpl->tpl_vars['data']->value['province'] == '深圳') {?>selected<?php }?>>深圳</option>
            <option value="纽约" <?php if ($_smarty_tpl->tpl_vars['data']->value['province'] == '纽约') {?>selected<?php }?>>纽约</option>
        </select><br><br>
        <input type="hidden" name="vcode" value="1234">
        <input type="hidden" name="hot" value="so hot">

        <input type="submit" value="保存">
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