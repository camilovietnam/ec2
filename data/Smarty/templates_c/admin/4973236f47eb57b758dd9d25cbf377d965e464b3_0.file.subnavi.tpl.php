<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:45:05
  from '/var/www/html/data/Smarty/templates/admin/order/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab4516127b7_93350632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4973236f47eb57b758dd9d25cbf377d965e464b3' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/admin/order/subnavi.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab4516127b7_93350632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
    <li id="navi-order-index" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'order' && $_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?>on<?php }?>"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
order/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
"><span>受注管理</span></a></li>
    <li id="navi-order-add" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'order' && $_smarty_tpl->tpl_vars['tpl_subno']->value == 'add') {?>on<?php }?>"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
order/edit.php?mode=add&amp;<?php echo smarty_modifier_script_escape(@constant('TRANSACTION_ID_NAME'));?>
=<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
"><span>受注登録</span></a></li>
    <li id="navi-order-status"
        class="<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'order' && $_smarty_tpl->tpl_vars['tpl_subno']->value == 'status') {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
order/status.php"><span>対応状況管理</span></a></li>
</ul>
<?php }
}
