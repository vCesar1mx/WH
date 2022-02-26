<?php
/* Smarty version 3.1.39, created on 2022-02-08 22:42:49
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/forum_edit_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6202f1e938a209_48478658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4938642ae89db6d5dc355d45dd5a9b690e765137' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/forum_edit_post.tpl',
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
function content_6202f1e938a209_48478658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['EDITING_POST']->value;?>

</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
  <div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
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

<div class="ui padded segment" id="post-edit">
  <div class="ui stackable grid">
    <div class="ui centered row">
      <div class="ui sixteen wide tablet twelve wide computer column">
        <form class="ui form" action="" method="post" id="form-post-edit">
          <?php if ((isset($_smarty_tpl->tpl_vars['EDITING_TOPIC']->value))) {?>
            <div class="field">
              <label for="name">Topic Title:</label>
              <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['TOPIC_TITLE']->value;?>
">
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['LABELS']->value)) {?>
              <div class="inline fields labels">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LABELS']->value, 'label');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                  <div class="field">
                    <div class="ui checkbox">
                      <input type="checkbox" name="topic_label[]" id="<?php echo $_smarty_tpl->tpl_vars['label']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['label']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['label']->value['active']) {?> checked="checked"<?php }?> hidden>
                      <label for="<?php echo $_smarty_tpl->tpl_vars['label']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value['html'];?>
</label>
                    </div>
                  </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            <?php }?>
          <?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['MARKDOWN']->value))) {?>
            <div class="field">
              <label for="markdown">Content:</label>
              <textarea name="content" id="markdown"></textarea>
            </div>
          <?php } else { ?>
            <div class="field">
              <label for="editor">Content:</label>
              <textarea name="content" id="editor"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</textarea>
            </div>
          <?php }?>
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
