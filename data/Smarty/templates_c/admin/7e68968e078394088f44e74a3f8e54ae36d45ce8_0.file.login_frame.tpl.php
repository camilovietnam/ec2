<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:38:05
  from '/var/www/html/data/Smarty/templates/admin/login_frame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2ad838498_33735131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e68968e078394088f44e74a3f8e54ae36d45ce8' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/admin/login_frame.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2ad838498_33735131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printXMLDeclaration'][0], array( array(),$_smarty_tpl ) );?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo smarty_modifier_script_escape(@constant('CHAR_CODE'));?>
">
<meta http-equiv="content-script-type" content="text/javascript">
<meta http-equiv="content-style-type" content="text/css">
<meta name="robots" content="noindex,nofollow" />
<link rel="stylesheet" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
css/reset.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
css/admin_contents.css" type="text/css" media="all" />

<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
js/eccube.js"><?php echo '</script'; ?>
>

<title>管理機能</title>
<link rel="shortcut icon" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/favicon.ico" />
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/favicon.ico" />
<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
    <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_javascript']->value);?>

    $(function(){
        <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_onload']->value);?>

    });
//]]><?php echo '</script'; ?>
>

</head>

<body>
<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['GLOBAL_ERR']->value);?>

<noscript>
    <p>JavaScript を有効にしてご利用下さい.</p>
</noscript>
<div id="login">

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_mainpage']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</div>
</body>
</html>
<?php }
}
