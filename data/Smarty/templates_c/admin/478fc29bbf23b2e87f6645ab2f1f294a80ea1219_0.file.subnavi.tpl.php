<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:45:05
  from '/var/www/html/data/Smarty/templates/admin/ownersstore/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab45167b615_15900136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '478fc29bbf23b2e87f6645ab2f1f294a80ea1219' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/admin/ownersstore/subnavi.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab45167b615_15900136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
    <li class="on_level2">
        <div><span>プラグイン管理</span></div>
        <ul class="level2">
            <li id="navi-ownersstore-index" class="<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?>on<?php }?>">
                <a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
ownersstore/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
"><span>プラグイン管理</span></a></li>
            <li id="navi-ownersstore-plugin-hookpoint-list" class="<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'plugin-hookpoint-list') {?>on<?php }?>">
                <a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
ownersstore/plugin_hookpoint_list.php"><span>フックポイント管理</span></a></li>            
        </ul>
    </li>
    <li id="navi-ownersstore-module" class="<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'module') {?>on<?php }?>">
        <a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
ownersstore/module.php"><span>モジュール管理</span></a></li>
    <li id="navi-ownersstore-settings" class="<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'settings') {?>on<?php }?>">
        <a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
ownersstore/settings.php"><span>認証キー設定</span></a></li>
    <li id="navi-ownersstore-log" class="<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'log') {?>on<?php }?>">
        <a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
ownersstore/log.php"><span>ログ管理</span></a></li>
</ul>
<?php }
}
