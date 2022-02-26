<?php
/* Smarty version 3.1.39, created on 2022-02-13 13:08:30
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/move.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620902ce3710a5_64972031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7404c5f7b914733897d4bd5db7cff0fa3d9cb3d' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/move.tpl',
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
function content_620902ce3710a5_64972031 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['MOVE_TOPIC']->value;?>

</h2>

<div class="ui padded segment" id="move-topic">
  <div class="ui stackable grid">
    <div class="ui centered row">
      <div class="ui sixteen wide tablet ten wide computer column">
        <form class="ui form" action="" method="post" id="form-move-topic">
          <div class="field">
            <label for="InputForum"><?php echo $_smarty_tpl->tpl_vars['MOVE_TO']->value;?>
</label>
            <div class="ui fluid selection dropdown" id="InputForum">
              <input type="hidden" name="forum">
              <i class="dropdown icon"></i>
              <div class="default text"><?php echo $_smarty_tpl->tpl_vars['MOVE_TO']->value;?>
</div>
              <div class="menu">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FORUMS']->value, 'forum');
$_smarty_tpl->tpl_vars['forum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['forum']->value) {
$_smarty_tpl->tpl_vars['forum']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['forum']->value->category) {?>
                    <div class="header">
                      <?php echo $_smarty_tpl->tpl_vars['forum']->value->forum_title;?>

                    </div>
                  <?php } else { ?>
                    <div class="item" data-value="<?php echo $_smarty_tpl->tpl_vars['forum']->value->id;?>
">
                      <?php echo $_smarty_tpl->tpl_vars['forum']->value->forum_title;?>

                    </div>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
          </div>
          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
          <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
          <a class="ui negative button" href="<?php echo $_smarty_tpl->tpl_vars['CANCEL_LINK']->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_CANCEL']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
