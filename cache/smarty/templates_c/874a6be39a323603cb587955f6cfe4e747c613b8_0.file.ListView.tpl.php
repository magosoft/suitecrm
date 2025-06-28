<?php
/* Smarty version 4.5.3, created on 2025-06-27 20:49:10
  from 'E:\Proyectos\crm.local\suitecrm\include\SugarFields\Fields\Bool\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_685ee7a6be1f87_88154357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '874a6be39a323603cb587955f6cfe4e747c613b8' => 
    array (
      0 => 'E:\\Proyectos\\crm.local\\suitecrm\\include\\SugarFields\\Fields\\Bool\\ListView.tpl',
      1 => 1751031203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685ee7a6be1f87_88154357 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php if (strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "1" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "yes" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "on") {
$_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
<?php }
}
