<?php
/* Smarty version 3.1.39, created on 2022-02-06 04:11:19
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/infractions/infractions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ff4a6785d3d2_06355451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cc39f185c23148dbd6e0c443af14e7125617ca6' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/infractions/infractions.tpl',
      1 => 1625410426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61ff4a6785d3d2_06355451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container">
  <div class="ui padded segment">
    <h2 style="display:inline;"><?php echo $_smarty_tpl->tpl_vars['INFRACTIONS']->value;?>
</h2>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['INFRACTIONS_LIST']->value))) {?>
			<table class="ui fixed single line selectable unstackable small padded res table">
				<colgroup>
					<col span="1" style="width: 20%;">
					<col span="1" style="width: 15%;">
					<col span="1" style="width: 15%">
					<col span="1" style="width: 20%">
					<col span="1" style="width: 30%">
					<!--<col span="1" style="width: 10%">-->
				</colgroup>

				<thead>
				<tr>
					<th><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['STAFF_MEMBER']->value;?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['ISSUED']->value;?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['REASON']->value;?>
</th>
					<!--<th></th>-->
				</tr>
				</thead>

				<tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INFRACTIONS_LIST']->value, 'infraction');
$_smarty_tpl->tpl_vars['infraction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['infraction']->value) {
$_smarty_tpl->tpl_vars['infraction']->do_else = false;
?>
					<tr>
						<td><img style="max-height:30px; max-width:30px;" class="ui avatar image" src="<?php echo $_smarty_tpl->tpl_vars['infraction']->value['avatar'];?>
"> <a href="<?php if (!empty($_smarty_tpl->tpl_vars['infraction']->value['profile'])) {
echo $_smarty_tpl->tpl_vars['infraction']->value['profile'];
} else { ?>#<?php }?>" style="<?php echo $_smarty_tpl->tpl_vars['infraction']->value['username_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['infraction']->value['username'];?>
</a></td>
						<td><img style="max-height:30px; max-width:30px;" class="ui avatar image" src="<?php echo $_smarty_tpl->tpl_vars['infraction']->value['staff_member_avatar'];?>
"> <a href="<?php if (!empty($_smarty_tpl->tpl_vars['infraction']->value['staff_member_link'])) {
echo $_smarty_tpl->tpl_vars['infraction']->value['staff_member_link'];
} else { ?>#<?php }?>" style="<?php echo $_smarty_tpl->tpl_vars['infraction']->value['staff_member_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['infraction']->value['staff_member'];?>
</a></td>
						<td><span data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['infraction']->value['issued_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['infraction']->value['issued'];?>
</span></td>
						<td>
                            <?php if ($_smarty_tpl->tpl_vars['infraction']->value['action_id'] == 1 || $_smarty_tpl->tpl_vars['infraction']->value['action_id'] == 2) {?>
								<span class="ui red label"><?php echo $_smarty_tpl->tpl_vars['infraction']->value['action'];?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['infraction']->value['action_id'] == 3 || $_smarty_tpl->tpl_vars['infraction']->value['action_id'] == 4) {?>
								<span class="ui yellow label"><?php echo $_smarty_tpl->tpl_vars['infraction']->value['action'];?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['infraction']->value['action_id'] == 5) {?>
								<span class="ui yellow label"><?php echo $_smarty_tpl->tpl_vars['infraction']->value['action'];?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['infraction']->value['action_id'] == 6) {?>
								<span class="ui grey label"><?php echo $_smarty_tpl->tpl_vars['infraction']->value['action'];?>
</span>
                            <?php } else { ?>
								<span class="ui label"><?php echo $_smarty_tpl->tpl_vars['infraction']->value['action'];?>
</span>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['infraction']->value['action_id'] <= 4 || $_smarty_tpl->tpl_vars['infraction']->value['action_id'] == 6) {?>
                                <?php if ($_smarty_tpl->tpl_vars['infraction']->value['revoked'] == 1) {?>
									<span data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['infraction']->value['expires_full'];?>
" class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['infraction']->value['revoked_full'];?>
</span>
                                <?php } else { ?>
									<span data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['infraction']->value['expires_full'];?>
" class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['infraction']->value['revoked_full'];?>
</span>
                                <?php }?>
                            <?php }?>
						</td>
						<td><?php echo $_smarty_tpl->tpl_vars['infraction']->value['reason'];?>
</td>
						<!--<td><a href="<?php echo $_smarty_tpl->tpl_vars['infraction']->value['view_link'];?>
" class="ui small blue button"><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
 &raquo;</a></td>-->
					</tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>

	  <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
	
	<?php } else { ?>
		<br /><br /><div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['NO_INFRACTIONS']->value;?>
</div>
	<?php }?>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
