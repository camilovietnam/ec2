<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:39:12
  from '/var/www/html/data/Smarty/templates/default/mail_templates/mail_title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2f00f2076_22372966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09ec7d285376999d2f9304eccc9a4a1bcc4260a4' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/default/mail_templates/mail_title.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2f00f2076_22372966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>
【<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_shopname']->value);?>
】 <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_mailtitle']->value);?>

<?php }
}
