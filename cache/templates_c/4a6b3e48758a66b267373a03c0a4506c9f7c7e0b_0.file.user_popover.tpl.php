<?php
/* Smarty version 3.1.39, created on 2022-02-01 17:10:11
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/user_popover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f96973f3ef47_04712715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a6b3e48758a66b267373a03c0a4506c9f7c7e0b' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/user_popover.tpl',
      1 => 1633866022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f96973f3ef47_04712715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),1=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<div id="user-popup">
  <div class="header">
    <img class="ui tiny circular image" src="<?php echo $_smarty_tpl->tpl_vars['AVATAR']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" />
    <h4 class="ui header" style="<?php echo $_smarty_tpl->tpl_vars['STYLE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</h4>
    <?php if (count($_smarty_tpl->tpl_vars['GROUPS']->value)) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
      <div class="ui label"><?php echo $_smarty_tpl->tpl_vars['GUEST']->value;?>
</div>
    <?php }?>
  </div>
  <?php if ((isset($_smarty_tpl->tpl_vars['REGISTERED']->value))) {?>
    <div class="ui divider"></div>
    <div class="ui list">
      <div class="item">
        <span class="text"><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['REGISTERED']->value,'/[:].*/','');?>
</span>
        <div class="description right floated"><b><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['REGISTERED']->value,'/^[^:]+:\h*/','');?>
</b></div>
      </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['TOPICS']->value)) && (isset($_smarty_tpl->tpl_vars['POSTS']->value))) {?>
          <div class="item">
            <span class="text"><?php echo smarty_modifier_capitalize(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['TOPICS']->value,'/[0-9]+/',''));?>
</span>
            <div class="description right floated"><b><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['TOPICS']->value,'/[^0-9]+/','');?>
</b></div>
          </div>
          <div class="item">
            <span class="text"><?php echo smarty_modifier_capitalize(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['POSTS']->value,'/[0-9]+/',''));?>
</span>
            <div class="description right floated"><b><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['POSTS']->value,'/[^0-9]+/','');?>
</b></div>
          </div>
        <?php }?>
    </div>
  <?php }?>
</div><?php }
}
