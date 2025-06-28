<?php
/* Smarty version 4.5.3, created on 2025-06-27 16:57:16
  from 'E:\Proyectos\crm.local\suitecrm\include\SugarFields\Fields\Base\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_685eb14c762960_92236241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a46fc0fb5e9d55d5a0592d97de3de5a6ef611ff' => 
    array (
      0 => 'E:\\Proyectos\\crm.local\\suitecrm\\include\\SugarFields\\Fields\\Base\\ListView.tpl',
      1 => 1751031203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685eb14c762960_92236241 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Proyectos\\crm.local\\suitecrm\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
