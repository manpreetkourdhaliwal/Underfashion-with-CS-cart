<?php /* Smarty version Smarty-3.1.18, created on 2014-11-02 16:35:28
         compiled from "C:\xampp\htdocs\Underfashion\design\backend\templates\views\product_options\components\option_types.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1532545625105b1ae4-58296579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3e90150c1ca391c18cb30d1865a1e79df36b7b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Underfashion\\design\\backend\\templates\\views\\product_options\\components\\option_types.tpl',
      1 => 1414707660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1532545625105b1ae4-58296579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display' => 0,
    'value' => 0,
    'tag_id' => 0,
    'name' => 0,
    'check' => 0,
    'app_types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5456251098e046_86071733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5456251098e046_86071733')) {function content_5456251098e046_86071733($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('selectbox','radiogroup','checkbox','text','textarea','file','selectbox','radiogroup','checkbox','text','textarea','file'));
?>
<?php if ($_smarty_tpl->tpl_vars['display']->value=="view") {?><?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?><?php echo $_smarty_tpl->__("selectbox");?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value=="R") {?><?php echo $_smarty_tpl->__("radiogroup");?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value=="C") {?><?php echo $_smarty_tpl->__("checkbox");?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value=="I") {?><?php echo $_smarty_tpl->__("text");?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value=="T") {?><?php echo $_smarty_tpl->__("textarea");?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value=="F") {?><?php echo $_smarty_tpl->__("file");?>
<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['value']->value) {?><?php if ($_smarty_tpl->tpl_vars['value']->value=="S"||$_smarty_tpl->tpl_vars['value']->value=="R") {?><?php $_smarty_tpl->tpl_vars["app_types"] = new Smarty_variable("SR", null, 0);?><?php } elseif ($_smarty_tpl->tpl_vars['value']->value=="I"||$_smarty_tpl->tpl_vars['value']->value=="T") {?><?php $_smarty_tpl->tpl_vars["app_types"] = new Smarty_variable("IT", null, 0);?><?php } elseif ($_smarty_tpl->tpl_vars['value']->value=="C") {?><?php $_smarty_tpl->tpl_vars["app_types"] = new Smarty_variable("C", null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["app_types"] = new Smarty_variable("F", null, 0);?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["app_types"] = new Smarty_variable('', null, 0);?><?php }?><select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['check']->value) {?>onchange="fn_check_option_type(this.value, this.id);"<?php }?>><?php if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,"S")!==false)) {?><option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("selectbox");?>
</option><?php }?><?php if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,"R")!==false)) {?><option value="R" <?php if ($_smarty_tpl->tpl_vars['value']->value=="R") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("radiogroup");?>
</option><?php }?><?php if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,"C")!==false)) {?><option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("checkbox");?>
</option><?php }?><?php if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,"I")!==false)) {?><option value="I" <?php if ($_smarty_tpl->tpl_vars['value']->value=="I") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("text");?>
</option><?php }?><?php if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,"T")!==false)) {?><option value="T" <?php if ($_smarty_tpl->tpl_vars['value']->value=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("textarea");?>
</option><?php }?><?php if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,"F")!==false)) {?><option value="F" <?php if ($_smarty_tpl->tpl_vars['value']->value=="F") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("file");?>
</option><?php }?></select><?php }?><?php }} ?>
