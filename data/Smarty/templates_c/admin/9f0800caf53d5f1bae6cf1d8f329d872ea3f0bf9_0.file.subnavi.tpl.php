<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:45:05
  from '/var/www/html/data/Smarty/templates/admin/design/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab4516615c2_23285145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f0800caf53d5f1bae6cf1d8f329d872ea3f0bf9' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/admin/design/subnavi.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab4516615c2_23285145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
    <li class="on_level2">
        <div><span>PC</span></div>
        <ul class="level2">
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'layout') {?> class="on"<?php }?> id="navi-design-layout-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><span>レイアウト設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'main_edit') {?> class="on"<?php }?> id="navi-design-main-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/main_edit.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><span>ページ詳細設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'bloc') {?> class="on"<?php }?> id="navi-design-bloc-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/bloc.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><span>ブロック設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'header') {?> class="on"<?php }?> id="navi-design-header-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/header.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><span>ヘッダー/フッター設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'css') {?> class="on"<?php }?> id="navi-design-css-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/css.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><span>CSS設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'template') {?> class="on"<?php }?> id="navi-design-template-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/template.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><span>テンプレート設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'up_down') {?> class="on"<?php }?> id="navi-design-add-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/up_down.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_PC'));?>
"><span>テンプレート追加</span></a></li>
        </ul>
    </li>
    <li class="on_level2">
        <div><span>スマートフォン</span></div>
        <ul class="level2">
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'layout') {?> class="on"<?php }?> id="navi-design-layout-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><span>レイアウト設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'main_edit') {?> class="on"<?php }?> id="navi-design-main-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/main_edit.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><span>ページ詳細設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'bloc') {?> class="on"<?php }?> id="navi-design-bloc-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/bloc.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><span>ブロック設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'header') {?> class="on"<?php }?> id="navi-design-header-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/header.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><span>ヘッダー/フッター設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'css') {?> class="on"<?php }?> id="navi-design-css-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/css.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><span>CSS設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'template') {?> class="on"<?php }?> id="navi-design-template-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/template.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><span>テンプレート設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'up_down') {?> class="on"<?php }?> id="navi-design-add-<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
design/up_down.php?device_type_id=<?php echo smarty_modifier_script_escape(@constant('DEVICE_TYPE_SMARTPHONE'));?>
"><span>テンプレート追加</span></a></li>
        </ul>
    </li>
</ul>
<?php }
}
