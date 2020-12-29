<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:39:12
  from '/var/www/html/data/Smarty/templates/default/mail_templates/customer_regist_mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2f00f7bc3_50506832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87625bc447581d3ce1a3ddbd42c59416262aba27' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/default/mail_templates/customer_regist_mail.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2f00f7bc3_50506832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>
　※本メールは自動配信メールです。
　等幅フォント(MSゴシック12ポイント、Osaka-等幅など)で
　最適にご覧になれます。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['CONF']->value['shop_name']);?>
より会員登録を希望された方に
　お送りしています。
　もしお心当たりが無い場合は、
　その旨 <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['CONF']->value['email02']);?>
 まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['name01']->value);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['name02']->value);?>
 様

<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['CONF']->value['shop_name']);?>
でございます。

この度は会員登録依頼をいただきましてまことに有り難うございます。

本会員登録が完了いたしました。
ショッピングをお楽しみくださいませ。

今後ともどうぞ<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['CONF']->value['shop_name']);?>
をよろしくお願い申し上げます。



<?php }
}
