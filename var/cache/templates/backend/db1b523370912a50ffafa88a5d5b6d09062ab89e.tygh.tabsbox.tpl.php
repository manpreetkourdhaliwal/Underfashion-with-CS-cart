<?php /* Smarty version Smarty-3.1.18, created on 2014-11-02 16:33:54
         compiled from "C:\xampp\htdocs\Underfashion\design\backend\templates\common\tabsbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28671545624b2d4b467-53615224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db1b523370912a50ffafa88a5d5b6d09062ab89e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Underfashion\\design\\backend\\templates\\common\\tabsbox.tpl',
      1 => 1414707660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '28671545624b2d4b467-53615224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_tab' => 0,
    'content' => 0,
    'navigation' => 0,
    'track' => 0,
    'tabs_section' => 0,
    'tab' => 0,
    'key' => 0,
    'empty_tab_ids' => 0,
    'id_suffix' => 0,
    'active_tab_extra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_545624b30f3293_96432677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545624b30f3293_96432677')) {function content_545624b30f3293_96432677($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/Underfashion/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_modifier_empty_tabs')) include 'C:/xampp/htdocs/Underfashion/app/functions/smarty_plugins\\modifier.empty_tabs.php';
if (!is_callable('smarty_modifier_in_array')) include 'C:/xampp/htdocs/Underfashion/app/functions/smarty_plugins\\modifier.in_array.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
    <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable($_REQUEST['selected_section'], null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["empty_tab_ids"] = new Smarty_variable(smarty_modifier_empty_tabs($_smarty_tpl->tpl_vars['content']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']) {?>
<div class="cm-j-tabs<?php if ($_smarty_tpl->tpl_vars['track']->value) {?> cm-track<?php }?> tabs">
    <ul class="nav nav-tabs">
    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
        <?php if ((!$_smarty_tpl->tpl_vars['tabs_section']->value||$_smarty_tpl->tpl_vars['tabs_section']->value==$_smarty_tpl->tpl_vars['tab']->value['section'])&&($_smarty_tpl->tpl_vars['tab']->value['hidden']||!smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value))) {?>
        <li id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['tab']->value['hidden']=="Y") {?>hidden <?php }?><?php if ($_smarty_tpl->tpl_vars['tab']->value['js']) {?>cm-js<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['ajax']) {?>cm-js cm-ajax<?php }?><?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?><?php if ($_smarty_tpl->tpl_vars['active_tab_extra']->value&&($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value)) {?> extra-tab<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value) {?><?php echo $_smarty_tpl->tpl_vars['active_tab_extra']->value;?>
<?php }?>
            <a <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
        <?php }?>
    <?php } ?>
    </ul>
</div>
<div class="cm-tabs-content">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?><?php }} ?>
