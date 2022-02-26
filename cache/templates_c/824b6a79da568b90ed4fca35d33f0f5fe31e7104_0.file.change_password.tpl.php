<?php
/* Smarty version 3.1.39, created on 2022-02-06 04:17:38
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/change_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ff4be268a2c9_62998674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '824b6a79da568b90ed4fca35d33f0f5fe31e7104' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/change_password.tpl',
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
function content_61ff4be268a2c9_62998674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD']->value;?>

  <div class="sub header"><?php echo $_smarty_tpl->tpl_vars['ENTER_NEW_PASSWORD']->value;?>
</div>
</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
  <div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header">Error</div>
      <ul class="list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR']->value, 'error');
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

<div class="ui padded segment" id="change-password">
  <div class="ui stackable grid">
    <div class="ui centered row">
      <div class="ui sixteen wide tablet ten wide computer column">
        <form class="ui form" action="" method="post" id="form-change-password">
          <div class="field">
            <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
</label>
            <input type="email" name="email" id="inputEmail" placeholder="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
" tabindex="1">
          </div>
          <div class="field">
            <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
</label>
            <input type="password" name="password" id="inputPassword" placeholder="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" autocomplete="off" tabindex="2">
          </div>
          <div class="field">
            <label for="inputPasswordAgain"><?php echo $_smarty_tpl->tpl_vars['CONFIRM_PASSWORD']->value;?>
</label>
            <input type="password" name="password_again" id="inputPasswordAgain" placeholder="<?php echo $_smarty_tpl->tpl_vars['CONFIRM_PASSWORD']->value;?>
" autocomplete="off" tabindex="3">
          </div>
          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
          <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" tabindex="4">
        </form>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
