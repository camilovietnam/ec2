<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:38:08
  from '/var/www/html/data/Smarty/templates/default/frontparts/bloc/search_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2b0aacb59_87155557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c31e9c7095361f50f2fb30445fe90bb92b88178' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/default/frontparts/bloc/search_products.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2b0aacb59_87155557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/var/www/html/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),2=>array('file'=>'/var/www/html/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<div class="block_outer"><div id="search_area"><h2><span class="title"><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/title/tit_bloc_search.gif" alt="検索条件" /></span></h2><div class="block_body"><!--検索フォーム--><form name="search_form" id="search_form" method="get" action="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
products/list.php"><input type="hidden" name="<?php echo smarty_modifier_script_escape(@constant('TRANSACTION_ID_NAME'));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" /><dl class="formlist"><dt>商品カテゴリから選ぶ</dt><dd><input type="hidden" name="mode" value="search" /><select name="category_id" class="box145"><option label="全ての商品" value="">全ての商品</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrCatList']->value,'selected'=>$_smarty_tpl->tpl_vars['category_id']->value),$_smarty_tpl);?>
</select></dd></dl><dl class="formlist"><?php if ($_smarty_tpl->tpl_vars['arrMakerList']->value) {?><dt>メーカーから選ぶ</dt><dd><select name="maker_id" class="box145"><option label="全てのメーカー" value="">全てのメーカー</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMakerList']->value,'selected'=>$_smarty_tpl->tpl_vars['maker_id']->value),$_smarty_tpl);?>
</select></dd></dl><dl class="formlist"><?php }?><dt>商品名を入力</dt><dd><input type="text" name="name" class="box140" maxlength="50" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_GET['name']));?>
" /></dd></dl><p class="btn"><input type="image" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_bloc_search.jpg" alt="検索" name="search" /></p></form></div></div></div>
<?php }
}
