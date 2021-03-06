<?php
/* Smarty version 3.1.36, created on 2020-12-29 13:38:21
  from '/var/www/html/data/Smarty/templates/default/mypage/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5feab2bd6df4c2_04771242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1d40a86c2209228960af127d77b7297f90f6c76' => 
    array (
      0 => '/var/www/html/data/Smarty/templates/default/mypage/login.tpl',
      1 => 1608045649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feab2bd6df4c2_04771242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),1=>array('file'=>'/var/www/html/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div id="undercolumn">
    <h2 class="title"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_title']->value));?>
</h2>
    <div id="undercolumn_login">
        <form name="login_mypage" id="login_mypage" method="post" action="<?php echo smarty_modifier_script_escape(@constant('HTTPS_URL'));?>
frontparts/login_check.php" onsubmit="return eccube.checkLoginFormInputted('login_mypage')">
            <input type="hidden" name="<?php echo smarty_modifier_script_escape(@constant('TRANSACTION_ID_NAME'));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
            <input type="hidden" name="mode" value="login" />
            <input type="hidden" name="url" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_SERVER['REQUEST_URI']));?>
" />

            <div class="login_area">
                <h3>会員登録がお済みのお客様</h3>
                <p class="inputtext">会員の方は、登録時に入力されたメールアドレスとパスワードでログインしてください。</p>
                <div class="inputbox">
                    <dl class="formlist clearfix">
                        <?php $_smarty_tpl->_assignInScope('key', "login_email");?>
                        <dt>メールアドレス&nbsp;：</dt>
                        <dd>
                            <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                            <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_login_email']->value));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
; ime-mode: disabled;" class="box300" />
                            <p class="login_memory">
                                <?php $_smarty_tpl->_assignInScope('key', "login_memory");?>
                                <input type="checkbox" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="1"<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetChecked' ][ 0 ], array( $_smarty_tpl->tpl_vars['tpl_login_memory']->value,1 )));?>
 id="login_memory" />
                                <label for="login_memory">メールアドレスをコンピューターに記憶させる</label>
                            </p>
                        </dd>
                    </dl>
                    <dl class="formlist clearfix">
                        <?php $_smarty_tpl->_assignInScope('key', "login_pass");?>
                        <dt>
                            パスワード&nbsp;：
                        </dt>
                        <dd>
                            <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                            <input type="password" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" class="box300" />
                        </dd>
                    </dl>
                    <div class="btn_area">
                        <ul>
                            <li>
                                <input type="image" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_login.jpg" alt="ログイン" name="log" id="log" />
                            </li>
                        </ul>
                    </div>
                </div>
                <p>
                    ※パスワードを忘れた方は<a href="<?php echo smarty_modifier_script_escape(@constant('HTTPS_URL'));?>
forgot/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
" onclick="eccube.openWindow('<?php echo smarty_modifier_script_escape(@constant('HTTPS_URL'));?>
forgot/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
','forget','600','460',{scrollbars:'no',resizable:'no'}); return false;" target="_blank">こちら</a>からパスワードの再発行を行ってください。<br />
                    ※メールアドレスを忘れた方は、お手数ですが、<a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
contact/<?php echo smarty_modifier_script_escape(@constant('DIR_INDEX_PATH'));?>
">お問い合わせページ</a>からお問い合わせください。
                </p>
            </div>

            <div class="login_area">
                <h3>まだ会員登録されていないお客様</h3>
                <p class="inputtext">会員登録をすると便利なMyページをご利用いただけます。<br />
                    また、ログインするだけで、毎回お名前や住所などを入力することなくスムーズにお買い物をお楽しみいただけます。
                </p>
                <div class="inputbox">
                    <div class="btn_area">
                        <ul>
                            <li>
                                <a href="<?php echo smarty_modifier_script_escape(@constant('ROOT_URLPATH'));?>
entry/kiyaku.php">
                                    <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_entry.jpg" alt="会員登録をする" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }
}
