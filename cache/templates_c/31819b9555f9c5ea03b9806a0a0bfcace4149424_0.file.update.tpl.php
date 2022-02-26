<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:18:19
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/includes/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f8440b3262e5_27502148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31819b9555f9c5ea03b9806a0a0bfcace4149424' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/includes/update.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f8440b3262e5_27502148 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value == true) {?>
        <div class="alert bg-danger text-white">
    <?php } else { ?>
        <div class="alert bg-primary text-white alert-dismissible" id="updateAlert">
        <button type="button" class="close" id="closeUpdate" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['NEW_UPDATE']->value;?>
<br />
    <a href="<?php echo $_smarty_tpl->tpl_vars['UPDATE_LINK']->value;?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;?>
</a>
    <hr style="border-color: rgba(0,0,0,.1)" /> <?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>

    <br /><?php echo $_smarty_tpl->tpl_vars['NEW_VERSION']->value;?>

    </div>
<?php }
}
}
