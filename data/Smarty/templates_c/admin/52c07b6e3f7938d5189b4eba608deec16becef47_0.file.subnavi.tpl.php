<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:45:05
  from '/var/www/html/data/Smarty/templates/admin/total/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab4516229e3_56815408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52c07b6e3f7938d5189b4eba608deec16becef47' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/admin/total/subnavi.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab4516229e3_56815408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
    <li id="navi-total-term"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && ($_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'term' || $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == ''))) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
total/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?page=term"><span>期間別集計</span></a></li>
    <li id="navi-total-products"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'products')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
total/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?page=products"><span>商品別集計</span></a></li>
    <li id="navi-total-age"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'age')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
total/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?page=age"><span>年代別集計</span></a></li>
    <li id="navi-total-job"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'job')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
total/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?page=job"><span>職業別集計</span></a></li>
    <li id="navi-total-member"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'member')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));
echo smarty_modifier_script_escape(@constant('ADMIN_DIR'));?>
total/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
?page=member"><span>会員別集計</span></a></li>
</ul>
<?php }
}
