<?php
/* Smarty version 3.1.39, created on 2022-02-05 22:50:47
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61feff47439d96_93169417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfeb4e91c9aa0cd1c005105cfe5aef1500b59e7d' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/footer.tpl',
      1 => 1644101437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61feff47439d96_93169417 (Smarty_Internal_Template $_smarty_tpl) {
?>    </div>
  </div>
<div class="footer">
    <div class="ui container">
        <div class="f-left">
            <p>Copyright © HaliaCraft 2022. Todos los derechos reservados.</p>
            <span>We are not affiliated with Mojang AB.</span>
            
        </div>
        <div class="f-right">
       <!-- <a href="https://ipolotech.com" target="blank"><img src="https://i.imgur.com/rSVMwVL.png" alt="ipolotech copyright"></a> --></div>
	<!-- *** Do not hide/obscure the following "ipolotech copyright". Your access will be removed! -->
     <!-- Template made by <a href="https://ipolotech.com" target="_blank">Ipolotech.com</a> -->
        </div>
    </div>
</div>

  <?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value))) {?>
    <div class="ui medium modal" id="modal-acknowledge">
      <div class="header">
        <?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value;?>

      </div>
      <div class="content">
        <?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_REASON']->value;?>

      </div>
      <div class="actions">
        <a class="ui positive button" href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_ACKNOWLEDGE_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_ACKNOWLEDGE']->value;?>
</a>
      </div>
    </div>
  <?php }?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_JS']->value, 'script');
$_smarty_tpl->tpl_vars['script']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
  <?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value)) && ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value != true)) {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value['path'];?>
/js/core/update.js"><?php echo '</script'; ?>
>
  <?php }?>
  
</body>

</html>
<?php }
}
