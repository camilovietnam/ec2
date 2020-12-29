<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:37:11
  from '/var/www/html/html/install/templates/step0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2771b18e0_47475161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ebdae6c6ae4822c70975eae4b01d9265c30915a' => 
    array (
      0 => '/var/www/html/html/install/templates/step0.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2771b18e0_47475161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/var/www/html/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>
<form name="form1" id="form1" method="post" action="?">
    <input type="hidden" name="mode" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_mode']->value);?>
" />
    <input type="hidden" name="step" value="0" />

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrHidden']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value));?>
" />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div class="contents">
        <h2>チェック結果</h2>
        <div class="result-info01">
            <textarea name="disp_area" cols="50" rows="20" class="box470"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['mess']->value);?>
</textarea>
        </div>
        <div class="result-info02">
            <?php if ($_smarty_tpl->tpl_vars['hasErr']->value) {?>
                <p class="action-message">[次へ進む] をクリックすると、チェックを再実行します。</p>
                <div><input type="checkbox" name="mode_overwrite" value="step0" id="mode_overwrite" /> <label for="mode_overwrite">問題点を無視して次へ進む (上級者向け)</label></div>
                <div class="red">※ 問題点を解決せずに無視して進めると、トラブルの原因となる場合があります。</div>
            <?php } else { ?>
                必要なファイルのコピーを開始します。
            <?php }?>
        </div>
    </div>
    <div class="btn-area-top"></div>
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="document.form1['mode'].value='return_welcome';document.form1.submit(); return false;"><span class="btn-prev">前へ戻る</span></a></li>
            <li><a class="btn-action" href="javascript:;"><span class="btn-next">次へ進む</span></a></li>
        </ul>
    </div>
    <div class="btn-area-bottom"></div>
</form>
<?php }
}
