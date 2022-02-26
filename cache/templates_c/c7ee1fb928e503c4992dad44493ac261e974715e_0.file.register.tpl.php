<?php
/* Smarty version 3.1.39, created on 2022-02-01 18:10:59
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f977b3a5cb46_21764722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7ee1fb928e503c4992dad44493ac261e974715e' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/register.tpl',
      1 => 1633866022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61f977b3a5cb46_21764722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['CREATE_AN_ACCOUNT']->value;?>

</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['REGISTRATION_ERROR']->value))) {?>
  <div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
      <ul class="list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REGISTRATION_ERROR']->value, 'error');
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

<div class="ui padded segment" id="register">
  <div class="ui stackable grid">
    <div class="ui centered row">
      <div class="ui sixteen wide tablet ten wide computer column">
        <form class="ui form" action="" method="post" id="form-register">
          <?php if ((isset($_smarty_tpl->tpl_vars['NICKNAMES']->value))) {?>
            <div class="field">
              <label><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</label>
              <input type="text" name="<?php if ((isset($_smarty_tpl->tpl_vars['MINECRAFT']->value))) {?>nickname<?php } else { ?>username<?php }?>" id="username" value="<?php if ((isset($_smarty_tpl->tpl_vars['MINECRAFT']->value))) {
echo $_smarty_tpl->tpl_vars['NICKNAME_VALUE']->value;
} else {
echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;
}?>" placeholder="<?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
" tabindex="1">
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['MINECRAFT']->value))) {?>
              <div class="field">
                <label><?php echo $_smarty_tpl->tpl_vars['MINECRAFT_USERNAME']->value;?>
</label>
                <input type="text" name="username" id="mcname" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['MINECRAFT_USERNAME']->value;?>
" tabindex="2">
              </div>
            <?php }?>
          <?php } else { ?>
            <?php if ((isset($_smarty_tpl->tpl_vars['MINECRAFT']->value))) {?>
              <div class="field">
                <label><?php echo $_smarty_tpl->tpl_vars['MINECRAFT_USERNAME']->value;?>
</label>
                <input type="text" name="username" id="mcname" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['MINECRAFT_USERNAME']->value;?>
" tabindex="1">
              </div>
            <?php } else { ?>
              <div class="field">
                <label><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                <input type="text" name="username" id="mcname" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
" tabindex="1">
              </div>
            <?php }?>
          <?php }?>
          <div class="field">
            <label><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</label>
            <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
" tabindex="3">
          </div>
          <div class="field">
            <label><?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
</label>
            <input type="password" name="password" id="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" tabindex="4">
          </div>
          <div class="field">
            <label><?php echo $_smarty_tpl->tpl_vars['CONFIRM_PASSWORD']->value;?>
</label>
            <input type="password" name="password_again" id="password_again" placeholder="<?php echo $_smarty_tpl->tpl_vars['CONFIRM_PASSWORD']->value;?>
" tabindex="5">
          </div>
          <?php if (count($_smarty_tpl->tpl_vars['CUSTOM_FIELDS']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_FIELDS']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                <div class="field">
                <label><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</label>
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 1) {?>
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" tabindex="5">
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 2) {?>
                    <textarea name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['description'];?>
" tabindex="5"></textarea>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 3) {?>
                    <input type="date" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" tabindex="5">
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['CAPTCHA']->value) {?>
            <div class="field">
              <?php echo $_smarty_tpl->tpl_vars['CAPTCHA']->value;?>

            </div>
          <?php }?>
          <div class="inline field">
            <div class="ui checkbox">
              <input type="checkbox" name="t_and_c" id="t_and_c" value="1" tabindex="7">
              <label for="t_and_c"><?php echo $_smarty_tpl->tpl_vars['AGREE_TO_TERMS']->value;?>
</label>
            </div>
          </div>
          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
          <input id="timezone" type="hidden" name="timezone" value=''>
          <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
" tabindex="8">
        </form>
        <div class="ui horizontal divider"><?php echo $_smarty_tpl->tpl_vars['ALREADY_REGISTERED']->value;?>
</div>
        <div class="ui center aligned">
          <a class="ui large positive button" href="<?php echo $_smarty_tpl->tpl_vars['LOGIN_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LOG_IN']->value;?>
</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
