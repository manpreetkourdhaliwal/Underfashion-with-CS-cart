<?php /* Smarty version Smarty-3.1.18, created on 2014-11-02 16:39:42
         compiled from "C:\xampp\htdocs\Underfashion\design\themes\responsive\templates\addons\call_requests\hooks\products\add_to_cart.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193325456260e7bbed7-73453283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2212bfe8aa15a9537fae6b0297e58b8df4cf9f96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Underfashion\\design\\themes\\responsive\\templates\\addons\\call_requests\\hooks\\products\\add_to_cart.post.tpl',
      1 => 1414849508,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '193325456260e7bbed7-73453283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'hide_form' => 0,
    'addons' => 0,
    'obj_prefix' => 0,
    'product' => 0,
    'id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5456260e923532_36578789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5456260e923532_36578789')) {function content_5456260e923532_36578789($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/Underfashion/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (!$_smarty_tpl->tpl_vars['hide_form']->value&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']=="Y") {?>

<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable("call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>

<a id="opener_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__text" data-ca-target-id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("call_requests.buy_now_with_one_click");?>
</a>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/products/add_to_cart.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/hooks/products/add_to_cart.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (!$_smarty_tpl->tpl_vars['hide_form']->value&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']=="Y") {?>

<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable("call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>

<a id="opener_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__text" data-ca-target-id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("call_requests.buy_now_with_one_click");?>
</a>

<?php }?>
<?php }?><?php }} ?>
