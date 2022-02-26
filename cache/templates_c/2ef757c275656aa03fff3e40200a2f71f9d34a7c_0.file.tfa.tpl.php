<?php
/* Smarty version 3.1.39, created on 2022-02-19 18:05:36
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/user/tfa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62113170f22724_20960964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ef757c275656aa03fff3e40200a2f71f9d34a7c' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/user/tfa.tpl',
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
function content_62113170f22724_20960964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
  <div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
      <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

    </div>
  </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
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

<div class="ui stackable grid" id="tfa-code">
  <div class="ui centered row">
    <div class="ui six wide tablet four wide computer column">
      <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="ui ten wide tablet twelve wide computer column">
      <div class="ui segment">
        <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['TWO_FACTOR_AUTH']->value;?>
</h3>
        <?php if ((isset($_smarty_tpl->tpl_vars['TFA_SCAN_CODE_TEXT']->value))) {?>
          <div class="ui form">
            <div class="field">
              <?php echo $_smarty_tpl->tpl_vars['TFA_SCAN_CODE_TEXT']->value;?>

              <br />
              <img src="<?php echo $_smarty_tpl->tpl_vars['IMG_SRC']->value;?>
">
            </div>
          </div>
          <div class="ui info message">
            <?php echo $_smarty_tpl->tpl_vars['TFA_CODE_TEXT']->value;?>
 <strong><?php echo $_smarty_tpl->tpl_vars['TFA_CODE']->value;?>
</strong>
          </div>
          <a class="ui primary button" href="<?php echo $_smarty_tpl->tpl_vars['LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NEXT']->value;?>
</a>
          <a class="ui red button" href="<?php echo $_smarty_tpl->tpl_vars['CANCEL_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
        <?php } else { ?>
          <form class="ui form" action="" method="post" id="form-tfa-code">
            <div class="field">
              <?php echo $_smarty_tpl->tpl_vars['TFA_ENTER_CODE']->value;?>

              <input type="text" name="tfa_code">
            </div>
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
            <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
            <a class="ui negative button" href="<?php echo $_smarty_tpl->tpl_vars['CANCEL_LINK']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
          </form>
        <?php }?>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
