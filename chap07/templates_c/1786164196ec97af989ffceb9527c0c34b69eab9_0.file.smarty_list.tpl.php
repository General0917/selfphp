<?php
/* Smarty version 4.3.1, created on 2023-06-22 13:50:42
  from '/Applications/XAMPP/xamppfiles/htdocs/selfphp/chap07/templates/smarty_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6494359201c647_02178257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1786164196ec97af989ffceb9527c0c34b69eab9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/selfphp/chap07/templates/smarty_list.tpl',
      1 => 1687434623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6494359201c647_02178257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/selfphp/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/selfphp/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Smarty</title>
</head>
<body>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
  <li
    <?php if ($_smarty_tpl->tpl_vars['book']->value['price'] > 3500) {?>style="color:Red;"<?php }?>>
    <a href="http://www.wings.msn.to/index.php/-/A-03/<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['book']->value['isbn'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
">
      <?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['book']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
    （<?php echo htmlentities(mb_convert_encoding((string)smarty_modifier_number_format($_smarty_tpl->tpl_vars['book']->value['price'],1), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
円／
      <?php echo htmlentities(mb_convert_encoding((string)smarty_modifier_date_format($_smarty_tpl->tpl_vars['book']->value['published'],'%Y/%m/%d'), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
刊行）
  </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</body>
</html>
<?php }
}
