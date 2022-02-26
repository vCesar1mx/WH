<?php
/* Smarty version 3.1.39, created on 2022-02-01 17:15:44
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f96ac0327e26_94750793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b32117f6c018743625d410f8014e6d8a493b96af' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/404.tpl',
      1 => 1633866022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_61f96ac0327e26_94750793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="ui container" id="error-404">
      <div class="ui segment">
        <h2 class="ui header"><?php echo $_smarty_tpl->tpl_vars['404_TITLE']->value;?>
</h2>
        <div class="ui divider"></div>
        <p><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</p>
        <div class="ui buttons">
          <button class="ui primary button" onclick="javascript:history.go(-1)"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</button>
          <div class="or"></div>
          <a class="ui positive button" href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
</a>
        </div>
        <div class="ui divider"></div>
        <p><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>
</p>
      </div>
    </div>
  
  </body>
</html><?php }
}
