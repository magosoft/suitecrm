<?php
/* Smarty version 4.5.3, created on 2025-06-27 20:48:11
  from 'E:\Proyectos\crm.local\suitecrm\modules\Emails\templates\outboundDialogTest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_685ee76ba9f3f5_57423423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f39835a2faa5fd17e986a527767253d47144322b' => 
    array (
      0 => 'E:\\Proyectos\\crm.local\\suitecrm\\modules\\Emails\\templates\\outboundDialogTest.tpl',
      1 => 1751031215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685ee76ba9f3f5_57423423 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="testOutbound">
		<table  border="0" cellspacing="0" cellpadding="0" class="edit view">
			<tr>
				<td scope="row">
					<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR'];?>
 
					<span class="required">
						<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_REQUIRED_SYMBOL'];?>

					</span>
				</td>
				<td >
					<input type="text" id="outboundtest_from_address" name="outboundtest_from_address" size="35" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_EMAIL']->value;?>
">
				</td>
			</tr>
			<tr>
				<td scope="row" colspan="2">
					<input type="button" class="button" value="   <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_SEND'];?>
   " onclick="javascript:SUGAR.email2.accounts.testOutboundSettings();">&nbsp;
					<input type="button" class="button" value="   <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_CANCEL_BUTTON_LABEL'];?>
   " onclick="javascript:SUGAR.email2.accounts.testOutboundDialog.hide();">&nbsp;
				</td>
			</tr>

		</table>
</div>
<?php }
}
