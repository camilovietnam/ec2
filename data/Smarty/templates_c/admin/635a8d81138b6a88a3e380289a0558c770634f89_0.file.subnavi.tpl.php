<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:45:05
  from '/var/www/html/data/Smarty/templates/admin/basis/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab4515f2fc4_06781381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '635a8d81138b6a88a3e380289a0558c770634f89' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/admin/basis/subnavi.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab4515f2fc4_06781381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?> class="on"<?php }?> id="navi-basis-index"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
basis/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
"><span>SHOPマスター</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'tradelaw') {?> class="on"<?php }?> id="navi-basis-tradelaw"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
basis/tradelaw.php"><span>特定商取引法</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'delivery') {?> class="on"<?php }?> id="navi-basis-delivery"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
basis/delivery.php"><span>配送方法設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'payment') {?> class="on"<?php }?> id="navi-basis-payment"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
basis/payment.php"><span>支払方法設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'point') {?> class="on"<?php }?> id="navi-basis-point"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
basis/point.php"><span>ポイント設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'mail') {?> class="on"<?php }?> id="navi-basis-mail"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
basis/mail.php"><span>メール設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'kiyaku') {?> class="on"<?php }?> id="navi-basis-kiyaku"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
basis/kiyaku.php"><span>会員規約設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'zip_install') {?> class="on"<?php }?> id="navi-basis-zip"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
basis/zip_install.php"><span>郵便番号DB登録</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'holiday') {?> class="on"<?php }?> id="navi-basis-holiday"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
basis/holiday.php"><span>定休日管理</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'tax') {?> class="on"<?php }?> id="navi-basis-tax"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
basis/tax.php"><span>税率設定</span></a></li>
</ul>
<?php }
}
