<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:38:08
  from '/var/www/html/data/Smarty/templates/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2b0a32ed1_30182663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fb7decd0e1aa55708bae53edb6b9cdd0e3c27b3' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/default/index.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2b0a32ed1_30182663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div id="main_image"><a href="<?php echo smarty_modifier_script_escape(@constant('P_DETAIL_URLPATH'));?>
1"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/banner/bnr_top_main.jpg" alt="詳細はこちら" /></a></div>
<?php }
}
