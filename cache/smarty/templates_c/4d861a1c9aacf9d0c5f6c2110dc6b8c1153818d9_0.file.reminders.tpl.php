<?php
/* Smarty version 4.5.3, created on 2025-06-27 20:48:11
  from 'E:\Proyectos\crm.local\suitecrm\modules\Meetings\tpls\reminders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_685ee76bca1a24_71276610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d861a1c9aacf9d0c5f6c2110dc6b8c1153818d9' => 
    array (
      0 => 'E:\\Proyectos\\crm.local\\suitecrm\\modules\\Meetings\\tpls\\reminders.tpl',
      1 => 1751031219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685ee76bca1a24_71276610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Proyectos\\crm.local\\suitecrm\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

	<?php if ($_smarty_tpl->tpl_vars['fields']->value['reminder_time']) {?>            	
            	
            	<?php $_smarty_tpl->_assignInScope('REMINDER_TIME_OPTIONS', $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['options']);?>
            	<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME_OPTIONS', $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['options']);?>	
            	
            	<?php if (!$_smarty_tpl->tpl_vars['fields']->value['reminder_checked']['value']) {?>            		
            		<?php $_smarty_tpl->_assignInScope('REMINDER_TIME', -1);?>
            	<?php } else { ?>
            		<?php $_smarty_tpl->_assignInScope('REMINDER_TIME', $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['value']);?>
            	<?php }?>
            	<?php if (!$_smarty_tpl->tpl_vars['fields']->value['email_reminder_checked']['value']) {?>            		
            		<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME', -1);?>
            	<?php } else { ?>
            		<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME', $_smarty_tpl->tpl_vars['fields']->value['email_reminder_time']['value']);?>
            	<?php }?>
	<?php }?>
	
	<?php $_smarty_tpl->_assignInScope('REMINDER_TIME_DISPLAY', "none");?>
	<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME_DISPLAY', "none");?>
	<?php if ($_smarty_tpl->tpl_vars['REMINDER_TIME']->value != -1) {?>
            	<?php $_smarty_tpl->_assignInScope('REMINDER_CHECKED', "checked");?>
            	<?php $_smarty_tpl->_assignInScope('REMINDER_TIME_DISPLAY', "inline");?>	
	<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value != -1) {?>
            	<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_CHECKED', "checked");?>
            	<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME_DISPLAY', "inline");?>
        <?php }?>


<?php if ($_smarty_tpl->tpl_vars['view']->value == "EditView" || $_smarty_tpl->tpl_vars['view']->value == "QuickCreate" || $_smarty_tpl->tpl_vars['view']->value == "QuickEdit") {?>

		<div>
		    	   	
		    	<input name="reminder_checked" type="hidden" value="0">
		    	<input name="reminder_checked" id="reminder_checked" onclick="toggleReminder(this,'reminder');" type="checkbox" class="checkbox" value="1" <?php echo $_smarty_tpl->tpl_vars['REMINDER_CHECKED']->value;?>
>
		    	<div style="display: inline-block; width: 111px;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_POPUP'];?>
</div>
		    	<div id="reminder_list" style="display: <?php echo $_smarty_tpl->tpl_vars['REMINDER_TIME_DISPLAY']->value;?>
">
		    		<select tabindex="<?php echo $_smarty_tpl->tpl_vars['REMINDER_TABINDEX']->value;?>
" name="reminder_time">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['REMINDER_TIME_OPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['REMINDER_TIME']->value),$_smarty_tpl);?>

				</select>
		    	</div>
            	</div>
            	<div>
		    	
		   	<input name="email_reminder_checked" type="hidden" value="0">
		    	<input name="email_reminder_checked" id="email_reminder_checked" onclick="toggleReminder(this,'email_reminder');" type="checkbox" class="checkbox" value="1" <?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_CHECKED']->value;?>
>
		    	<div style="display: inline-block; width: 111px;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_EMAIL_ALL_INVITEES'];?>
</div>
		    	<div id="email_reminder_list" style="display: <?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME_DISPLAY']->value;?>
">
		    		<select tabindex="<?php echo $_smarty_tpl->tpl_vars['REMINDER_TABINDEX']->value;?>
" name="email_reminder_time">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME_OPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value),$_smarty_tpl);?>

				</select>
		    	</div>
		</div>
            	<?php echo '<script'; ?>
 type="text/javascript">
            		 
			function toggleReminder(el,field){
				if(el.checked){
					document.getElementById(field + "_list").style.display = "inline";
				}else{
					document.getElementById(field + "_list").style.display = "none";
				}
			}
			
            	<?php echo '</script'; ?>
>
	<?php } else { ?>
		<div>			
			<input type="checkbox" disabled  <?php echo $_smarty_tpl->tpl_vars['REMINDER_CHECKED']->value;?>
>
			<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_POPUP'];?>

			<?php if ($_smarty_tpl->tpl_vars['REMINDER_TIME']->value != -1) {?>
				<?php echo $_smarty_tpl->tpl_vars['REMINDER_TIME_OPTIONS']->value[$_smarty_tpl->tpl_vars['REMINDER_TIME']->value];?>

			<?php }?>			
		</div>
		<div>			
			<input type="checkbox" disabled  <?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_CHECKED']->value;?>
>
			<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_EMAIL_ALL_INVITEES'];?>

			<?php if ($_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value != -1) {?>
				<?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME_OPTIONS']->value[$_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value];?>

			<?php }?>			
		</div>
	<?php }?>	
<?php }
}
