<?php /* Smarty version Smarty-3.1.18, created on 2014-11-02 16:33:56
         compiled from "C:\xampp\htdocs\Underfashion\design\backend\templates\addons\help_tutorial\hooks\index\actions.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3355545624b454cba5-42211396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eda18f3dbe7998ba79c6e7978b5b02bf3c0910df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Underfashion\\design\\backend\\templates\\addons\\help_tutorial\\hooks\\index\\actions.post.tpl',
      1 => 1414707720,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3355545624b454cba5-42211396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_545624b46277d0_91954256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545624b46277d0_91954256')) {function content_545624b46277d0_91954256($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('help_tutorial.need_help','close'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="block_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="themes"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="store_import"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index")) {?>
<div class="help-tutorial clearfix">
    <span class="help-tutorial-link cm-external-click" id="help_tutorial_link" data-ca-scroll="main_column">
        <span class="help-tutorial-show"><i class="help-tutorial-icon icon-question-sign"></i><?php echo $_smarty_tpl->__("help_tutorial.need_help");?>
</span>
        <span class="help-tutorial-close"><i class="help-tutorial-icon icon-remove"></i><?php echo $_smarty_tpl->__("close");?>
</span>
    </span>
</div>
<?php }?><?php }} ?>
