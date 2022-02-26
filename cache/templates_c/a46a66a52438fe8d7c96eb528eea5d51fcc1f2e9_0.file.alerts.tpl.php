<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:18:42
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/includes/alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f84422c3a955_35258710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a46a66a52438fe8d7c96eb528eea5d51fcc1f2e9' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/includes/alerts.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f84422c3a955_35258710 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
    <div class="alert bg-success text-white alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h5><i class="icon fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['SUCCESS_TITLE']->value;?>
</h5>
        <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

    </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value)) && count($_smarty_tpl->tpl_vars['ERRORS']->value)) {?>
    <div class="alert bg-danger text-white alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['ERRORS_TITLE']->value;?>
</h5>
        <ul>
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
<?php }
}
}
