<?php
/* Smarty version 4.5.3, created on 2025-06-27 16:57:01
  from 'E:\Proyectos\crm.local\suitecrm\include\MVC\View\tpls\displayLoginJS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_685eb13def5e24_00438903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c13b4e2d5fa3ee95ba73796ec953d4c354ea133c' => 
    array (
      0 => 'E:\\Proyectos\\crm.local\\suitecrm\\include\\MVC\\View\\tpls\\displayLoginJS.tpl',
      1 => 1751031199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685eb13def5e24_00438903 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['MODULE_SUGAR_GRP1']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">var module_sugar_grp1 = '<?php echo $_smarty_tpl->tpl_vars['MODULE_SUGAR_GRP1']->value;?>
';<?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['ACTION_SUGAR_GRP1']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">var action_sugar_grp1 = '<?php echo $_smarty_tpl->tpl_vars['ACTION_SUGAR_GRP1']->value;?>
';<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1_JQUERY']->value;?>
" z><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1_YUI']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['CALENDAR']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    if ( typeof(SUGAR) == 'undefined' ) {SUGAR = {}};
    if ( typeof(SUGAR.themes) == 'undefined' ) SUGAR.themes = {};

<?php echo '</script'; ?>
>

<?php }
}
