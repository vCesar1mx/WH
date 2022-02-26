<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:18:19
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f8440b3bd626_99074730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6166b0ba2819cf12c375f1589c898e3c80ef9ce2' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/footer.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f8440b3bd626_99074730 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span><?php echo $_smarty_tpl->tpl_vars['PAGE_LOAD_TIME']->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span>&copy; NamelessMC <?php echo date('Y');?>
</span><br /><br />
                        <a href="https://github.com/NamelessMC/Nameless" target="_blank"><i class="fab fa-github fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['SOURCE']->value;?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://namelessmc.com" target="_blank"><i class="fas fa-life-ring fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['SUPPORT']->value;?>
</a>
        </div>
    </div>
</footer><?php }
}
