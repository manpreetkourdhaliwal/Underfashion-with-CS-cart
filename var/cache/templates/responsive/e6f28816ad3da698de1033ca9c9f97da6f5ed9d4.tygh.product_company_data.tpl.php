<?php /* Smarty version Smarty-3.1.18, created on 2014-11-02 16:39:45
         compiled from "C:\xampp\htdocs\Underfashion\design\themes\responsive\templates\views\companies\components\product_company_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136735456261137ab18-14277164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6f28816ad3da698de1033ca9c9f97da6f5ed9d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Underfashion\\design\\themes\\responsive\\templates\\views\\companies\\components\\product_company_data.tpl',
      1 => 1414716900,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '136735456261137ab18-14277164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_name' => 0,
    'company_id' => 0,
    'settings' => 0,
    'capture_options_vs_qty' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5456261154f781_63837780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5456261154f781_63837780')) {function content_5456261154f781_63837780($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/Underfashion/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('vendor','vendor'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['company_name']->value||$_smarty_tpl->tpl_vars['company_id']->value)&&$_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor']=="Y") {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['company_name']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');?>
<?php }?></a></span>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/components/product_company_data.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/components/product_company_data.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['company_name']->value||$_smarty_tpl->tpl_vars['company_id']->value)&&$_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor']=="Y") {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['company_name']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');?>
<?php }?></a></span>
    </div>
<?php }?>
<?php }?><?php }} ?>
