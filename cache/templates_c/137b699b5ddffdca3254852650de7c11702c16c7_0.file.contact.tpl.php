<?php
/* Smarty version 3.1.39, created on 2022-02-03 16:17:57
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61fc00354d95d3_63223816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '137b699b5ddffdca3254852650de7c11702c16c7' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/contact.tpl',
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
function content_61fc00354d95d3_63223816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['CONTACT']->value;?>

</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
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
      <div class="header">Error</div>
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

<?php if ((isset($_smarty_tpl->tpl_vars['ERROR_EMAIL']->value))) {?>
  <div class="ui negative icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
      <?php echo $_smarty_tpl->tpl_vars['ERROR_EMAIL']->value;?>

    </div>
  </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['ERROR_CONTENT']->value))) {?>
  <div class="ui negative icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
      <?php echo $_smarty_tpl->tpl_vars['ERROR_CONTENT']->value;?>

    </div>
  </div>
<?php }?>

<div class="ui padded segment" id="contact">
  <div class="ui grid">
    <div class="ui centered row">
      <div class="ui sixteen wide tablet ten wide computer column">
        <form class="ui form" action="" method="post" id="form-contact">
          <div class="field">
            <label><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</label>
            <input type="email" name="email" id="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
" tabindex="1">
          </div>
          <div class="field">
            <label><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</label>
            <textarea id="inputMessage" name="content" placeholder="<?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
" tabindex="2"></textarea>
          </div>
          <?php if ($_smarty_tpl->tpl_vars['CAPTCHA']->value) {?>
            <div class="field">
              <?php echo $_smarty_tpl->tpl_vars['CAPTCHA']->value;?>

            </div>
          <?php }?>
          <div class="field">
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
            <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" tabindex="3">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
