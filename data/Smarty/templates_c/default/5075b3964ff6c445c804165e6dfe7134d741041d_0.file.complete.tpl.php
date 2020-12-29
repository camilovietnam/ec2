<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:39:12
  from '/var/www/html/data/Smarty/templates/default/regist/complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2f0310f77_93373575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5075b3964ff6c445c804165e6dfe7134d741041d' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/default/regist/complete.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2f0310f77_93373575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),1=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),2=>array('file'=>'/var/www/html/data/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),));
?>

<div id="undercolumn">
    <div id="undercolumn_entry">
        <h2 class="title"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_title']->value));?>
</h2>
        <div id="complete_area">
            <p class="message">本登録が完了いたしました。<br />
                それではショッピングをお楽しみください。</p>

            <p>今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>

            <div class="shop_information">
                <p class="name"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrSiteInfo']->value['company_name']));?>
</p>
                <p>TEL：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrSiteInfo']->value['tel01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrSiteInfo']->value['tel02']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrSiteInfo']->value['tel03']);?>
 <?php if ($_smarty_tpl->tpl_vars['arrSiteInfo']->value['business_hour'] != '') {?>（受付時間/<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrSiteInfo']->value['business_hour']);?>
）<?php }?><br />
                    E-mall：<a href="mailto:<?php echo smarty_modifier_script_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['arrSiteInfo']->value['email02'], 'hex'));?>
"><?php echo smarty_modifier_script_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['arrSiteInfo']->value['email02'], 'hexentity'));?>
</a></p>
            </div>

            <div class="btn_area">
                <ul>
                    <li>
                        <a href="<?php echo smarty_modifier_script_escape(@constant('TOP_URL'));?>
"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_toppage.jpg" alt="トップページへ" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php }
}
