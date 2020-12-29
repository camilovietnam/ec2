<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:39:09
  from '/var/www/html/data/Smarty/templates/default/frontparts/form_personal_confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2ed931f58_97256433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad7a8f83352ba6a4ad8de8ced31bdd89577e5ce' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/default/frontparts/form_personal_confirm.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2ed931f58_97256433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),1=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),2=>array('file'=>'/var/www/html/data/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),));
?>

<col width="30%" /><col width="70%" /><tr><th>お名前</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."name01");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."name02");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
&nbsp;<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
</td></tr><tr><th>お名前(フリガナ)</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."kana01");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."kana02");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
&nbsp;<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
</td></tr><tr><th>会社名</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."company_name");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
</td></tr><?php if (@constant('FORM_COUNTRY_ENABLE')) {?><tr><th>国</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."country_id");
$_smarty_tpl->_assignInScope('country_id', $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']);
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrCountry']->value[$_smarty_tpl->tpl_vars['country_id']->value]));?>
</td></tr><tr><th>ZIP CODE</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."zipcode");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
</td></tr><?php }?><tr><th>郵便番号</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."zip01");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."zip02");?>〒 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
 - <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
</td></tr><tr><th>住所</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."pref");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."addr01");
$_smarty_tpl->_assignInScope('key3', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."addr02");
$_smarty_tpl->_assignInScope('pref_id', $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']);
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrPref']->value[$_smarty_tpl->tpl_vars['pref_id']->value]));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['value']));?>
</td></tr><tr><th>電話番号</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."tel01");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."tel02");
$_smarty_tpl->_assignInScope('key3', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."tel03");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
 - <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
 - <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['value']));?>
</td></tr><tr><th>FAX</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fax01");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fax02");
$_smarty_tpl->_assignInScope('key3', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fax03");
if (strlen($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']) > 0 && strlen($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']) > 0 && strlen($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['value']) > 0) {
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
 - <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
 - <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['value']));
} else { ?>未登録<?php }?></td></tr><?php if ($_smarty_tpl->tpl_vars['flgFields']->value > 1) {?><tr><th>メールアドレス</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."email");?><a href="mailto:<?php echo smarty_modifier_script_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value'], 'hex'));?>
"><?php echo smarty_modifier_script_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value'], 'hexentity'));?>
</a></td></tr><?php if ($_smarty_tpl->tpl_vars['emailMobile']->value) {?><tr><th>携帯メールアドレス</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."email_mobile");
if (strlen($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']) > 0) {?><a href="mailto:<?php echo smarty_modifier_script_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value'], 'hex'));?>
"><?php echo smarty_modifier_script_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value'], 'hexentity'));?>
</a><?php } else { ?>未登録<?php }?></td></tr><?php }?><tr><th>性別</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."sex");
$_smarty_tpl->_assignInScope('sex_id', $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']);
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrSex']->value[$_smarty_tpl->tpl_vars['sex_id']->value]));?>
</td></tr><tr><th>職業</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."job");
$_smarty_tpl->_assignInScope('job_id', $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']);
echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrJob']->value[$_smarty_tpl->tpl_vars['job_id']->value])===null||$tmp==='' ? "未登録" : $tmp)));?>
</td></tr><tr><th>生年月日</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."year");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."month");
$_smarty_tpl->_assignInScope('key3', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."day");
if (strlen($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']) > 0 && strlen($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']) > 0 && strlen($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['value']) > 0) {
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
年<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
月<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['value']));?>
日<?php } else { ?>未登録<?php }?></td></tr><?php if ($_smarty_tpl->tpl_vars['flgFields']->value > 2) {?><tr><th>希望するパスワード</th><td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['passlen']->value);?>
</td></tr><tr><th>パスワードを忘れた時のヒント</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."reminder");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."reminder_answer");
$_smarty_tpl->_assignInScope('reminder_id', $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']);?>質問：<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrReminder']->value[$_smarty_tpl->tpl_vars['reminder_id']->value]));?>
<br />答え：<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
</td></tr><tr><th>メールマガジン送付について</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."mailmaga_flg");
$_smarty_tpl->_assignInScope('mailmaga_flg_id', $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']);
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrMAILMAGATYPE']->value[$_smarty_tpl->tpl_vars['mailmaga_flg_id']->value]));?>
</td></tr><?php }
}
}
}
