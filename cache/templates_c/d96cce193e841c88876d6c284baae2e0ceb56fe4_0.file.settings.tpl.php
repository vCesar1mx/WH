<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:24:40
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/user/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62002e889cdb27_32812117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd96cce193e841c88876d6c284baae2e0ceb56fe4' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/user/settings.tpl',
      1 => 1633866022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:user/navigation.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62002e889cdb27_32812117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

</h2>

<?php if (!empty($_smarty_tpl->tpl_vars['SUCCESS']->value)) {?>
  <div class="ui success icon message">
    <i class="check icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['SUCCESS_TITLE']->value;?>
</div>
      <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

    </div>
  </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
<div class="ui error icon message">
  <i class="x icon"></i>
  <div class="content">
    <ul class="list">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
</div>
<?php }?>

<div class="ui stackable grid" id="user-settings">
  <div class="ui centered row">
    <div class="ui six wide tablet four wide computer column">
	  <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="ui ten wide tablet twelve wide computer column">
      <div class="ui segment">
        <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value;?>
</h3>
        <form class="ui form" action="" method="post" id="form-user-settings">
          
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROFILE_FIELDS']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
              <div class="field">
                <?php if (!(isset($_smarty_tpl->tpl_vars['field']->value['disabled']))) {?>
                  <label for="input<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];
if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><super style="color: red;">*</super><?php }?></label>
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "text") {?>
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="input<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
">
                  <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "textarea") {?>
                    <textarea name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="input<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
</textarea>
                  <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "date") {?>
                    <input type="date" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="input<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
">
                  <?php }?>
                <?php }?>
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ((isset($_smarty_tpl->tpl_vars['TOPIC_UPDATES']->value))) {?>
              <div class="field">
                <label for="inputTopicUpdates"><?php echo $_smarty_tpl->tpl_vars['TOPIC_UPDATES']->value;?>
</label>
                <select class="ui fluid dropdown" name="topicUpdates" id="inputTopicUpdates">
                  <option value="1" <?php if (($_smarty_tpl->tpl_vars['TOPIC_UPDATES_ENABLED']->value == true)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                  <option value="0" <?php if (($_smarty_tpl->tpl_vars['TOPIC_UPDATES_ENABLED']->value == false)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                </select>
              </div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['PRIVATE_PROFILE']->value))) {?>
              <div class="field">
                <label for="inputPrivateProfile"><?php echo $_smarty_tpl->tpl_vars['PRIVATE_PROFILE']->value;?>
</label>
                <select class="ui fluid dropdown" name="privateProfile" id="inputPrivateProfile">
                  <option value="1"<?php if (($_smarty_tpl->tpl_vars['PRIVATE_PROFILE_ENABLED']->value == true)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                  <option value="0"<?php if (($_smarty_tpl->tpl_vars['PRIVATE_PROFILE_ENABLED']->value == false)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                </select>
              </div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['CUSTOM_AVATARS']->value))) {?>
            <div class="field">
              <label for="inputGravatar"><?php echo $_smarty_tpl->tpl_vars['GRAVATAR']->value;?>
</label>
              <select class="ui fluid dropdown" name="gravatar" id="inputGravatar">
                <option value="0"<?php if (($_smarty_tpl->tpl_vars['GRAVATAR_VALUE']->value == '0')) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                <option value="1"<?php if (($_smarty_tpl->tpl_vars['GRAVATAR_VALUE']->value == '1')) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
              </select>
            </div>
            <?php }?>
            <div class="field">
              <label for="inputLanguage"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_LANGUAGE']->value;?>
</label>
              <select class="ui fluid dropdown" name="language" id="inputLanguage">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['active'] == true) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['TEMPLATES']->value) > 1) {?>
              <div class="field">
                <label for="inputTemplate"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_TEMPLATE']->value;?>
</label>
                <select class="ui fluid dropdown" name="template" id="inputTemplate">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATES']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['template']->value['active'] == true) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
              </div>
            <?php }?>
            <div class="field">
              <label for="inputTimezone"><?php echo $_smarty_tpl->tpl_vars['TIMEZONE']->value;?>
</label>
              <select class="ui fluid dropdown" name="timezone" id="inputTimezone">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TIMEZONES']->value, 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['SELECTED_TIMEZONE']->value == $_smarty_tpl->tpl_vars['KEY']->value) {?> selected<?php }?>>
                    (<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['offset'];?>
) <?php echo $_smarty_tpl->tpl_vars['ITEM']->value['name'];?>
 &middot; (<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['time'];?>
)
                  </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['SIGNATURE']->value))) {?>
              <div class="field">
                <label for="inputSignature"><?php echo $_smarty_tpl->tpl_vars['SIGNATURE']->value;?>
</label>
                <?php if (!(isset($_smarty_tpl->tpl_vars['MARKDOWN']->value))) {?>
                  <textarea name="signature" id="inputSignature"><?php echo $_smarty_tpl->tpl_vars['SIGNATURE_VALUE']->value;?>
</textarea>
                <?php } else { ?>
                  <textarea name="signature" id="inputSignature"><?php echo $_smarty_tpl->tpl_vars['SIGNATURE_VALUE']->value;?>
</textarea>
                <?php }?>
              </div>
            <?php }?>
          
          <input type="hidden" name="action" value="settings">
          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
          <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
        </form>
      </div>
      <div class="ui segment">
        <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['CHANGE_EMAIL_ADDRESS']->value;?>
</h3>
        <form class="ui form" action="" method="post" id="form-user-email">
          <div class="field">
            <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['CURRENT_PASSWORD']->value;?>
</label>
            <input type="password" name="password" id="inputPassword">
          </div>
          <div class="field">
            <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
</label>
            <input type="email" name="email" id="inputEmail" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_EMAIL']->value;?>
">
          </div>
          <input type="hidden" name="action" value="email">
          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
          <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="ui primary button">
        </form>
      </div>
      <div class="ui segment">
        <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['CHANGE_PASSWORD']->value;?>
</h3>
        <form class="ui form" action="" method="post" id="form-user-password">
          <div class="field">
            <label for="inputOldPassword"><?php echo $_smarty_tpl->tpl_vars['CURRENT_PASSWORD']->value;?>
</label>
            <input type="password" name="old_password" id="inputOldPassword" >
          </div>
          <div class="field">
            <label for="inputNewPassword"><?php echo $_smarty_tpl->tpl_vars['NEW_PASSWORD']->value;?>
</label>
            <input type="password" name="new_password" id="inputNewPassword">
          </div>
          <div class="field">
            <label for="inputNewPasswordAgain"><?php echo $_smarty_tpl->tpl_vars['CONFIRM_NEW_PASSWORD']->value;?>
</label>
            <input type="password" name="new_password_again" id="inputNewPasswordAgain">
          </div>
          <input type="hidden" name="action" value="password">
          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
          <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="ui primary button">
        </form>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['DISCORD_INTEGRATION']->value) {?>
        <div class="ui segment">
          <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['DISCORD_LINK']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['DISCORD_LINKED']->value) {?>
              <span class="ui green label"><?php echo $_smarty_tpl->tpl_vars['LINKED']->value;?>
</span>
            <?php } elseif ((isset($_smarty_tpl->tpl_vars['PENDING_LINK']->value))) {?>
              <span class="ui orange label"><?php echo $_smarty_tpl->tpl_vars['PENDING_LINK']->value;?>
</span>
            <?php } else { ?>
              <span class="ui red label"><?php echo $_smarty_tpl->tpl_vars['NOT_LINKED']->value;?>
</span>
            <?php }?>
            </h3>
          <?php if ($_smarty_tpl->tpl_vars['DISCORD_LINKED']->value) {?>
            <p><strong><?php echo $_smarty_tpl->tpl_vars['DISCORD_USERNAME']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['DISCORD_USERNAME_VALUE']->value;?>
</p>
          <?php }?>
          <form action="" method="post" class="ui form">
            <input type="hidden" name="action" value="discord">
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
            <?php if ($_smarty_tpl->tpl_vars['DISCORD_LINKED']->value) {?> 
              <input type="hidden" name="unlink" value="true">
              <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['UNLINK']->value;?>
" class="ui red button">
            <?php } else { ?>
              <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LINK']->value;?>
" class="ui primary button">
            <?php }?>
          </form>
        </div>
      <?php }?>
      <div class="ui segment">
        <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['TWO_FACTOR_AUTH']->value;?>
</h3>
        <?php if ((isset($_smarty_tpl->tpl_vars['ENABLE']->value))) {?>
          <a class="ui positive button" href="<?php echo $_smarty_tpl->tpl_vars['ENABLE_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ENABLE']->value;?>
</a>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['FORCED']->value))) {?>
          <button class="ui negative button" disabled><?php echo $_smarty_tpl->tpl_vars['DISABLE']->value;?>
</button>
        <?php } else { ?>
           <a class="ui negative button" href="<?php echo $_smarty_tpl->tpl_vars['DISABLE_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DISABLE']->value;?>
</a>
        <?php }?>
      </div>
      <?php if ((isset($_smarty_tpl->tpl_vars['CUSTOM_AVATARS']->value))) {?>
        <div class="ui segment">
          <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_PROFILE_IMAGE']->value;?>
</h3>
          <form class="ui form" action="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_AVATARS_SCRIPT']->value;?>
" method="post" enctype="multipart/form-data" id="form-user-avatar">
            <div class="field">
              <label class="ui default button" display="inline block">
                <?php echo $_smarty_tpl->tpl_vars['BROWSE']->value;?>

                <input type="file" name="file" hidden/>
              </label>
            </div>
            <input type="hidden" name="type" value="avatar">
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
            <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
          </form>
        </div>
      <?php }?>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
