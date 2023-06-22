<?php
/* Smarty version 4.3.1, created on 2023-06-23 01:15:27
  from 'C:\xampp\htdocs\selfphp\chap07\Practice\prac3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6494739f66cfb1_08931787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6452f43f66bf4b54b04dd2b9d4eb03f397698e89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\selfphp\\chap07\\Practice\\prac3.tpl',
      1 => 1687450505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6494739f66cfb1_08931787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\selfphp\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),1=>array('file'=>'C:\\xampp\\htdocs\\selfphp\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html>
<head>
<meta chaset="utf-8" />
<title>Smarty</title>
</head>
<body>
<ul>
    <li>ISBNコード:<?php echo $_smarty_tpl->tpl_vars['book']->value['isbn'];?>
</li>
    <li>書名:<?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
</li>
    <li>価格:<?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['book']->value['price']);?>
円
        <?php if ($_smarty_tpl->tpl_vars['book']->value['price'] < 2500) {?> [Low Price!!] <?php }?></li>
    <li>刊行日:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['book']->value['published'],'%Y/%m/%d');?>
刊行</li>
</ul>
</body>
</html><?php }
}
