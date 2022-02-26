<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:51:00
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/new_topic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620034b4ed2fd8_00321573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03ffed7eb2ea900a9c7ea3ca71cc1921c0f8cc2f' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/new_topic.tpl',
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
function content_620034b4ed2fd8_00321573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['CREATING_TOPIC_IN']->value;?>

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

<div class="ui padded segment" id="new-topic">
  <div class="ui stackable grid">
    <div class="ui centered row">
      <div class="ui sixteen wide tablet twelve wide computer column">
        <form class="ui form" action="" method="post" id="form-new-topic">
          <div class="field">
            <label for="name"><?php echo $_smarty_tpl->tpl_vars['TOPIC_TITLE']->value;?>
:</label>
            <input type="text" name="title" placeholder="<?php echo $_smarty_tpl->tpl_vars['TOPIC_TITLE']->value;?>
" maxlength="64">
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
"<?php if ($_smarty_tpl->tpl_vars['label']->value['checked']) {?> checked<?php }?> hidden>
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
          <?php if ((isset($_smarty_tpl->tpl_vars['MARKDOWN']->value))) {?>
            <div class="field">
              <label for="markdown">Content:</label>
              <textarea name="content" id="markdown"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</textarea>
            </div>
          <?php } else { ?>
            <div class="field">
              <label for="editor">Content:</label>
              <textarea name="content" id="reply"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</textarea>
            </div>
          <?php }?>
          <?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>

          <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
          <a class="ui negative button" href="#" data-toggle="modal" data-target="#modal-cancel"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="ui small modal" id="modal-cancel">
  <div class="header">
    <?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>

  </div>
  <div class="content">
    <?php echo $_smarty_tpl->tpl_vars['CONFIRM_CANCEL']->value;?>

  </div>
  <div class="actions">
    <button type="button" class="ui positive button"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
    <a class="ui negative button" href="<?php echo $_smarty_tpl->tpl_vars['FORUM_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
