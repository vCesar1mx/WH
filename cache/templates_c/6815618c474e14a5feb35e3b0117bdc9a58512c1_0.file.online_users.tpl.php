<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:17:06
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/widgets/online_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f843c2d1fff6_76108789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6815618c474e14a5feb35e3b0117bdc9a58512c1' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/widgets/online_users.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f843c2d1fff6_76108789 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui fluid card" id="widget-online-users">
  <div class="content">
    <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['ONLINE_USERS']->value;?>
</h4>
    <div class="description">
      <?php if ((isset($_smarty_tpl->tpl_vars['ONLINE_USERS_LIST']->value))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ONLINE_USERS_LIST']->value, 'user', false, NULL, 'online_users_arr', array (
));
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
          <a class="ui image label" href="<?php echo $_smarty_tpl->tpl_vars['user']->value['profile'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>

          </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['NO_USERS_ONLINE']->value;?>

      <?php }?>
    </div>
  </div>
  <div class="extra content">
    <?php echo $_smarty_tpl->tpl_vars['TOTAL_ONLINE_USERS']->value;?>

  </div>
</div>
<?php }
}
