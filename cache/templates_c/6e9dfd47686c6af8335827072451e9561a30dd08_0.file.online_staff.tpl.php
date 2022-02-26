<?php
/* Smarty version 3.1.39, created on 2022-02-01 17:09:43
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/widgets/online_staff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f9695772dcc2_29857125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e9dfd47686c6af8335827072451e9561a30dd08' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/widgets/online_staff.tpl',
      1 => 1635520168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f9695772dcc2_29857125 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-heading"><i class="fas fa-user-shield"></i> <?php echo $_smarty_tpl->tpl_vars['ONLINE_STAFF']->value;?>
</div>
<div class="ui fluid card" id="widget-online-staff">
  <div class="content">
    <div class="description">
      <?php if ((isset($_smarty_tpl->tpl_vars['ONLINE_STAFF_LIST']->value))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ONLINE_STAFF_LIST']->value, 'user', false, NULL, 'online_staff_arr', array (
));
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
          <div class="ui relaxed list">
            <div class="item">
              <img class="ui mini circular image" src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">
              <div class="content">
                <a class="" href="<?php echo $_smarty_tpl->tpl_vars['user']->value['profile'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['user']->value['style'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['title']) {
echo $_smarty_tpl->tpl_vars['user']->value['title'];
} else {
echo $_smarty_tpl->tpl_vars['user']->value['group'];
}?>
              </div>
            </div>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['NO_STAFF_ONLINE']->value;?>

      <?php }?>
    </div>
  </div>
  <div class="extra content">
    <?php echo $_smarty_tpl->tpl_vars['TOTAL_ONLINE_STAFF']->value;?>

  </div>
</div><?php }
}
