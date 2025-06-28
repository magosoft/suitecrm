<?php
/* Smarty version 4.5.3, created on 2025-06-27 16:57:16
  from 'E:\Proyectos\crm.local\suitecrm\themes\SuiteP\include\ListView\ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_685eb14c5064d1_10730752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '730618168e0327e6567fe00d38d3d54e49feb9ae' => 
    array (
      0 => 'E:\\Proyectos\\crm.local\\suitecrm\\themes\\SuiteP\\include\\ListView\\ListViewSelectObjects.tpl',
      1 => 1751031246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685eb14c5064d1_10730752 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
