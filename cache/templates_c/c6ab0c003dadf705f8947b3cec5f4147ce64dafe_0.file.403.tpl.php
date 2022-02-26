<?php
/* Smarty version 3.1.39, created on 2022-02-06 21:34:03
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/403.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62003ecb873d68_69811144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6ab0c003dadf705f8947b3cec5f4147ce64dafe' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/403.tpl',
      1 => 1633866022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_62003ecb873d68_69811144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="ui container" id="error-403">
      <div class="ui segment">
        <h2 class="ui header"><?php echo $_smarty_tpl->tpl_vars['403_TITLE']->value;?>
</h2>
        <div class="ui divider"></div>
        <p><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</p>
        <?php if (!(isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value))) {?><p><?php echo $_smarty_tpl->tpl_vars['CONTENT_LOGIN']->value;?>
</p><?php }?>
        <div class="ui buttons">
          <button class="ui primary button" onclick="javascript:history.go(-1)"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</button>
          <div class="or"></div>
          <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value))) {?>
            <a class="ui positive button" href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
</a>
          <?php } else { ?>
            <a class="ui positive button" href="<?php echo $_smarty_tpl->tpl_vars['LOGIN_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LOGIN']->value;?>
</a>
          <?php }?>
        </div>
      </div>
    </div>
  
  </body>
</html><?php }
}
