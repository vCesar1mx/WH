<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:27:50
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/user/new_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62002f461eafc5_41520878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21bea9e37e63f6687844e3e7a8a0c26b633e3ea6' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/user/new_message.tpl',
      1 => 1633866022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:user/navigation.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62002f461eafc5_41520878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
  <div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
      <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

    </div>
  </div>
<?php }?>

<div class="ui stackable grid" id="new-message">
  <div class="ui centered row">
    <div class="ui six wide tablet four wide computer column">
	  <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="ui ten wide tablet twelve wide computer column">
      <div class="ui segment">
        <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['NEW_MESSAGE']->value;?>
</h3>
		<form class="ui form" action="" method="post" id="form-new-message">
		  <div class="field">
			<label for="inputTitle"><?php echo $_smarty_tpl->tpl_vars['MESSAGE_TITLE']->value;?>
</label>
			<input type="text" name="title" id="inputTitle" placeholder="<?php echo $_smarty_tpl->tpl_vars['MESSAGE_TITLE']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['MESSAGE_TITLE_VALUE']->value;?>
">
		  </div>
		  <div class="field">
			<label for="InputTo"><?php echo $_smarty_tpl->tpl_vars['TO']->value;?>
</label>
			<div class="ui fluid multiple search selection dropdown">
 			 <input name="to" id="InputTo" type="hidden" <?php if ((isset($_smarty_tpl->tpl_vars['TO_USER']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['TO_USER']->value;?>
"<?php }?>>
 			 <i class="dropdown icon"></i>
 			 <div class="default text"><?php echo $_smarty_tpl->tpl_vars['TO']->value;?>
</div>
 			 <div class="menu">
 			   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, smarty_modifier_replace(explode(",",$_smarty_tpl->tpl_vars['ALL_USERS']->value),'"',''), 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
 			     <div class="item" data-value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</div>
 			   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 			 </div>
			</div>
		  </div>
		  <?php if ((isset($_smarty_tpl->tpl_vars['MARKDOWN']->value))) {?>
			<div class="field">
			  <textarea name="content" id="markdown"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</textarea>
			</div>
		  <?php } else { ?>
			<div class="field">
			  <textarea name="content" id="reply"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</textarea>
			</div>
		  <?php }?>
		  <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
		  <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
		</form>
      </div>
    </div>
  </div>
</div>
			
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
