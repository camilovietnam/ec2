<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:38:08
  from '/var/www/html/data/Smarty/templates/default/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2b0ae63b1_45179485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0a225fe51201c75ed15c4292b0de72a26bdf0ba' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/default/footer.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2b0ae63b1_45179485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),2=>array('file'=>'/var/www/html/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<!--▼FOOTER-->
<div id="footer_wrap"><div id="footer" class="clearfix"><div id="pagetop"><a href="#top">このページの先頭へ</a></div><div id="copyright">Copyright ©&nbsp;<?php if (@constant('RELEASE_YEAR') != smarty_modifier_date_format(time(),"%Y")) {
echo smarty_modifier_script_escape(@constant('RELEASE_YEAR'));?>
-<?php }
echo smarty_modifier_script_escape(smarty_modifier_date_format(time(),"%Y"));?>
&nbsp;<?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrSiteInfo']->value['shop_name_eng'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['arrSiteInfo']->value['shop_name'] : $tmp)));?>
 All rights reserved.</div></div></div>
<!--▲FOOTER-->
<?php }
}
