<?php
/* Smarty version 3.1.39, created on 2021-04-01 10:17:54
  from 'D:\Project\Self\StudyPhp\2015\advanced\03\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60659dd235f3f6_91515976',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'dcc048e5420e6572d02e1b51f0a39f7c0f66ca60' => 
    array (
      0 => 'D:\\Project\\Self\\StudyPhp\\2015\\advanced\\03\\templates\\index.html',
      1 => 1617272271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60659dd235f3f6_91515976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\Project\\Self\\StudyPhp\\2015\\advanced\\03\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'D:\\Project\\Self\\StudyPhp\\2015\\advanced\\03\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),2=>array('file'=>'D:\\Project\\Self\\StudyPhp\\2015\\advanced\\03\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),3=>array('file'=>'D:\\Project\\Self\\StudyPhp\\2015\\advanced\\03\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),));
echo '/*%%SmartyNocache:177006505460659dd22d2ce4_72368898%%*/<?php $_smarty_tpl->_checkPlugins(array(0=>array(\'file\'=>\'D:\\\\Project\\\\Self\\\\StudyPhp\\\\2015\\\\advanced\\\\03\\\\libs\\\\plugins\\\\modifier.date_format.php\',\'function\'=>\'smarty_modifier_date_format\',),));
?>/*/%%SmartyNocache:177006505460659dd22d2ce4_72368898%%*/';
$_smarty_tpl->compiled->nocache_hash = '177006505460659dd22d2ce4_72368898';
?>
<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.3.31 15:42
motto：有志者，事竟成
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <style>
        .odd {
            background-color: #fff;
        }
        .even {
            background-color: #263cd5;
        }
    </style>
</head>
<body>
<p onclick="setLocalStorage()">设置localStorage</p>
<p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
<p><?php echo (defined('PI') ? constant('PI') : null);?>
</p>
<p><?php if ($_smarty_tpl->tpl_vars['sex']->value == 1) {?>男<?php } else { ?>女<?php }?></p>
<p><?php echo time();?>
</p>

<p><?php echo '/*%%SmartyNocache:177006505460659dd22d2ce4_72368898%%*/<?php echo smarty_modifier_date_format(time(),\'%Y-%m-%d %H:%I:%S\');?>
/*/%%SmartyNocache:177006505460659dd22d2ce4_72368898%%*/';?>
</p>

<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['content']->value,15,'~~~');?>
</p>
<p><?php echo str_repeat('hi',$_smarty_tpl->tpl_vars['level']->value);?>
</p>
<table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <?php if ((1 & $_smarty_tpl->tpl_vars['key']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('color', '#c62121');?>
    <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('color', '#fff');?>
    <?php }?>

    <tr class="<?php echo smarty_function_cycle(array('values'=>'odd, even'),$_smarty_tpl);?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<p>请选择：</p>
<?php echo smarty_function_html_radios(array('name'=>'name','values'=>$_smarty_tpl->tpl_vars['name']->value,'output'=>$_smarty_tpl->tpl_vars['name']->value,'selected'=>'张三'),$_smarty_tpl);?>

<p>请选择：</p>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
<input type="radio" name="name" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<p>请选择：</p>
<?php echo smarty_function_html_checkboxes(array('name'=>'name[]','values'=>$_smarty_tpl->tpl_vars['name']->value,'output'=>$_smarty_tpl->tpl_vars['name']->value,'selected'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>

</body>
</html><?php }
}
