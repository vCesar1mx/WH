<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:24:23
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f84577d30b73_20751187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b146f85187c59c71685464c6a6ecab0193180f0' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/maintenance.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_61f84577d30b73_20751187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="ui container" id="maintenance">
      <div class="ui segment">
        <h2 class="ui header"><?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_TITLE']->value;?>
</h2>
        <div class="ui divider"></div>
        <p><?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_MESSAGE']->value;?>
</p>
        <div class="ui buttons">
          <button class="ui positive button" onclick="window.location.reload()"><?php echo $_smarty_tpl->tpl_vars['RETRY']->value;?>
</button>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['LOGIN']->value))) {?>
          <div class="ui divider"></div>
          <a href="<?php echo $_smarty_tpl->tpl_vars['LOGIN_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LOGIN']->value;?>
</a>
        <?php }?>
      </div>
    </div>
  
  </body>
</html><?php }
}
