<?php /* Smarty version Smarty-3.1.18, created on 2014-11-03 10:46:03
         compiled from "C:\xampp\htdocs\Underfashion\design\themes\responsive\templates\buttons\checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14978545724ab532170-15773414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65d15eb2b4a4214ee89dce4d08132469d2c0be92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Underfashion\\design\\themes\\responsive\\templates\\buttons\\checkout.tpl',
      1 => 1414716900,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14978545724ab532170-15773414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'but_target' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_545724ab666b38_70747833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545724ab666b38_70747833')) {function content_545724ab666b38_70747833($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/Underfashion/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('checkout','checkout'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("checkout"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>"action",'but_meta'=>"ty-btn__primary"), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/checkout.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/checkout.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("checkout"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>"action",'but_meta'=>"ty-btn__primary"), 0);?>
<?php }?><?php }} ?>
