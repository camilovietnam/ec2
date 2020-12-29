<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:45:05
  from '/var/www/html/data/Smarty/templates/admin/system/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab451671658_84910728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '826f4da4285b3f7d06a8eaf7e7cac62db4a96697' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/admin/system/subnavi.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab451671658_84910728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?> class="on"<?php }?> id="navi-system-index"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
system/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
"><span>メンバー管理</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'bkup') {?> class="on"<?php }?> id="navi-system-bkup"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
system/bkup.php"><span>バックアップ管理</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'parameter') {?> class="on"<?php }?> id="navi-system-parameter"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
system/parameter.php"><span>パラメーター設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'masterdata') {?> class="on"<?php }?> id="navi-system-masterdata"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
system/masterdata.php"><span>マスターデータ管理</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'masterdata') {?> class="on"<?php }?> id="navi-system-adminarea"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
system/adminarea.php"><span>管理画面設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'system') {?> class="on"<?php }?> id="navi-system-system"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
system/system.php"><span>システム情報</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'system' && $_smarty_tpl->tpl_vars['tpl_subno']->value == 'log') {?> class="on"<?php }?> id="navi-system-log"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
system/log.php"><span>EC-CUBE ログ表示</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'system' && $_smarty_tpl->tpl_vars['tpl_subno']->value == 'editdb') {?> class="on"<?php }?> id="navi-system-editdb"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
system/editdb.php"><span>高度なデータベース管理</span></a></li>
</ul>
<?php }
}
