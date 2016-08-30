<?php /* Smarty version 3.1.27, created on 2016-08-30 20:41:13
         compiled from "D:\WWW\s47_h\mvc\mvc5.0\views\User\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:2872457c57ee98dcc82_36923363%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28e06d0f6a6199b9c9415d9d4b2157231ee3923a' => 
    array (
      0 => 'D:\\WWW\\s47_h\\mvc\\mvc5.0\\views\\User\\index.html',
      1 => 1468488769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2872457c57ee98dcc82_36923363',
  'variables' => 
  array (
    'title' => 0,
    'list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57c57ee9ad42b3_30268773',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57c57ee9ad42b3_30268773')) {
function content_57c57ee9ad42b3_30268773 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2872457c57ee98dcc82_36923363';
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

        
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>性别</th>
                <th>年龄</th>
                <th>省份</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['v']->value['sex'] == 0) {?>女<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['sex'] == 1) {?>男<?php } else { ?>保密<?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['age'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['province'];?>
</td>
                <td class="col-md-2">
                    <a href="./index.php?m=User&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="btn btn-sm btn-primary">编辑</a>
                    <a href="./index.php?m=User&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="btn btn-sm btn-danger">删除</a>
                </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
        </table>
        
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