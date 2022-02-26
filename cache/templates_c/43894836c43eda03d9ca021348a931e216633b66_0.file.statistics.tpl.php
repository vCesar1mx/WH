<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:17:06
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/widgets/statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f843c2d2eea3_72991948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43894836c43eda03d9ca021348a931e216633b66' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/widgets/statistics.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f843c2d2eea3_72991948 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui fluid card" id="widget-statistics">
  <div class="content">
    <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['STATISTICS']->value;?>
</h4>
    <div class="description">
      <div class="ui list">
        <?php if ((isset($_smarty_tpl->tpl_vars['FORUM_STATISTICS']->value))) {?>
          <div class="item">
            <span class="text"><?php echo $_smarty_tpl->tpl_vars['TOTAL_THREADS']->value;?>
</span>
            <div class="description right floated"><b><?php echo $_smarty_tpl->tpl_vars['TOTAL_THREADS_VALUE']->value;?>
</b></div>
          </div>
          <div class="item">
            <span class="text"><?php echo $_smarty_tpl->tpl_vars['TOTAL_POSTS']->value;?>
</span>
            <div class="description right floated"><b><?php echo $_smarty_tpl->tpl_vars['TOTAL_POSTS_VALUE']->value;?>
</b></div>
          </div>
        <?php }?>
        <div class="item">
          <span class="text"><?php echo $_smarty_tpl->tpl_vars['USERS_REGISTERED']->value;?>
</span>
          <div class="description right floated"><b><?php echo $_smarty_tpl->tpl_vars['USERS_REGISTERED_VALUE']->value;?>
</b></div>
        </div>
        <div class="item">
          <span class="text"><?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER']->value;?>
</span>
          <div class="description right floated">
            <a href="<?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER_VALUE']->value['profile'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['LATEST_MEMBER_VALUE']->value['id'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER_VALUE']->value['style'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER_VALUE']->value['nickname'];?>
</b></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }
}
