<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:38:08
  from '/var/www/html/data/Smarty/templates/default/frontparts/bloc/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2b0a14116_58572257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c9fca3a176633aa788c2a775fe0b2e00b364c57' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/default/frontparts/bloc/category.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2b0a14116_58572257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
    $(function(){
        $('#category_area li.level1:last').css('border-bottom', 'none');
    });
//]]><?php echo '</script'; ?>
>

<div class="block_outer"><div id="category_area"><div class="block_body"><h2><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/title/tit_bloc_category.gif" alt="商品カテゴリ" /></h2><?php $_smarty_tpl->_subTemplateRender(((string)@constant('TEMPLATE_REALDIR'))."frontparts/bloc/category_tree_fork.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('children'=>$_smarty_tpl->tpl_vars['arrTree']->value,'treeID'=>'','display'=>1), 0, true);
?></div></div></div>
<?php }
}
