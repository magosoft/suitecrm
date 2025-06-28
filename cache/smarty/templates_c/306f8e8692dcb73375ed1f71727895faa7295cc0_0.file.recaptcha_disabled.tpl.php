<?php
/* Smarty version 4.5.3, created on 2025-06-27 16:57:02
  from 'E:\Proyectos\crm.local\suitecrm\include\utils\recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_685eb13e054152_33949531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '306f8e8692dcb73375ed1f71727895faa7295cc0' => 
    array (
      0 => 'E:\\Proyectos\\crm.local\\suitecrm\\include\\utils\\recaptcha_disabled.tpl',
      1 => 1751031186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685eb13e054152_33949531 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
