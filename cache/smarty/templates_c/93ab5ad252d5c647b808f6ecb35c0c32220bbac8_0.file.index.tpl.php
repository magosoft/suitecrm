<?php
/* Smarty version 4.5.3, created on 2025-06-27 17:14:49
  from 'E:\Proyectos\crm.local\suitecrm\modules\ModuleBuilder\tpls\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_685eb569c9d512_28538749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93ab5ad252d5c647b808f6ecb35c0c32220bbac8' => 
    array (
      0 => 'E:\\Proyectos\\crm.local\\suitecrm\\modules\\ModuleBuilder\\tpls\\index.tpl',
      1 => 1751031239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ModuleBuilder/tpls/assistantJavascript.tpl' => 1,
  ),
),false)) {
function content_685eb569c9d512_28538749 (Smarty_Internal_Template $_smarty_tpl) {
?><iframe id="yui-history-iframe" src="index.php?entryPoint=getImage&imageName=sugar-yui-sprites-grey.png" title="index.php?entryPoint=getImage&imageName=sugar-yui-sprites-grey.png"></iframe>
<input id="yui-history-field" type="hidden"> 
<div class='ytheme-gray' id='mblayout' style="position:relative; height:0px; overflow:visible;">
</div>
<div id='mbcenter'>
<div id='mbtabs'></div>
<?php echo $_smarty_tpl->tpl_vars['CENTER']->value;?>

</div>

<div id='mbeast' class="x-layout-inactive-content">
<?php echo $_smarty_tpl->tpl_vars['PROPERTIES']->value;?>

</div>
<div id='mbeast2' class="x-layout-inactive-content">
</div>
<div id='mbhelp' class="x-hidden"></div>
<div id='mbwest' class="x-hidden">
<div id='package_tree' class="x-hidden"></div>
<?php echo $_smarty_tpl->tpl_vars['TREE']->value;?>

</div>
<div id='mbsouth' class="x-hidden">
</div>
<?php echo $_smarty_tpl->tpl_vars['tiny']->value;?>

<?php echo '<script'; ?>
>
ModuleBuilder.setMode('<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
');
closeMenus();


var MBLoader = new YAHOO.util.YUILoader({
    require : ["layout", "element", "tabview", "treeview", "history", "cookie", "sugarwidgets"],
    loadOptional: true,
    skin: { base: 'blank', defaultSkin: '' },
	onSuccess: ModuleBuilder.init,
    allowRollup: true,
    base: "include/javascript/yui/build/"
});
MBLoader.addModule({
    name :"sugarwidgets",
    type : "js",
    fullpath: "include/javascript/sugarwidgets/SugarYUIWidgets.js",
    varName: "YAHOO.SUGAR",
    requires: ["datatable", "dragdrop", "treeview", "tabview"]
});
MBLoader.insert();

<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:modules/ModuleBuilder/tpls/assistantJavascript.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
