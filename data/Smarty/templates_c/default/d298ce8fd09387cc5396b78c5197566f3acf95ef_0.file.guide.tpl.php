<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:38:08
  from '/var/www/html/data/Smarty/templates/default/frontparts/bloc/guide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2b0a2fe58_59801883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd298ce8fd09387cc5396b78c5197566f3acf95ef' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/default/frontparts/bloc/guide.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2b0a2fe58_59801883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div class="block_outer"><div id="guide_area" class="block_body"><ul class="button_like"><li><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
abouts/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Abouts") {?>selected<?php }?>">当サイトについて</a></li><li><a href="<?php echo smarty_modifier_script_escape(@constant('HTTPS_URL'));?>
contact/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Contact" || $_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Contact_Complete") {?>selected<?php }?>">お問い合わせ</a></li><li><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
order/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Order") {?>selected<?php }?>">特定商取引法に基づく表記</a></li><li><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
guide/privacy.php" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Guide_Privacy") {?>selected<?php }?>">プライバシーポリシー</a></li></ul></div></div>
<?php }
}
