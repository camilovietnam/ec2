<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:38:08
  from '/var/www/html/data/Smarty/templates/default/frontparts/bloc/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2b0a7ea15_94270717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16fe6498a41f8a601fa0a6ff652f5b4b0701d683' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/default/frontparts/bloc/news.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2b0a7ea15_94270717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/var/www/html/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<div class="block_outer"><div id="news_area"><h2><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/title/tit_bloc_news.png" alt="新着情報" /><span class="rss"><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
rss/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
" target="_blank"><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_rss.jpg" alt="RSS" /></a></span></h2><div class="block_body"><div class="news_contents"><?php
$__section_data_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrNews']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_data_0_total = $__section_data_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_data'] = new Smarty_Variable(array());
if ($__section_data_0_total !== 0) {
for ($__section_data_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_data']->value['index'] = 0; $__section_data_0_iteration <= $__section_data_0_total; $__section_data_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_data']->value['index']++){
$_smarty_tpl->_assignInScope('date_array', explode("-",$_smarty_tpl->tpl_vars['arrNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_data']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_data']->value['index'] : null)]['cast_news_date']));?><dl class="newslist"><dt><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['date_array']->value[0]);?>
年<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['date_array']->value[1]);?>
月<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['date_array']->value[2]);?>
日</dt><dt><a<?php if ($_smarty_tpl->tpl_vars['arrNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_data']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_data']->value['index'] : null)]['news_url']) {?> href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_data']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_data']->value['index'] : null)]['news_url']);?>
" <?php if ($_smarty_tpl->tpl_vars['arrNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_data']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_data']->value['index'] : null)]['link_method'] == "2") {?> target="_blank"<?php }
}?>><?php echo smarty_modifier_script_escape(nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_data']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_data']->value['index'] : null)]['news_title'])));?>
</a></dt><dd class="mini"><?php echo smarty_modifier_script_escape(nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrNews']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_data']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_data']->value['index'] : null)]['news_comment'])));?>
</dd></dl><?php
}
}
?></div></div></div></div>
<?php }
}
