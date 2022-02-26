<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:18:19
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/collections/dashboard_items/recent_registrations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f8440b3a07a8_69206198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a1fca51f6f9df3a23cca1fe1efeeca938be6095' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/collections/dashboard_items/recent_registrations.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f8440b3a07a8_69206198 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card shadow mb-4">
    <div class="card-header bg-primary py-3">
        <h6 class="m-0 font-weight-bold text-white"><i class="fas fa-user fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['RECENT_REGISTRATIONS']->value;?>
</h6>
    </div>
    <div class="card-body">
        <?php if (count($_smarty_tpl->tpl_vars['REGISTRATIONS']->value)) {?>
        <div id="accordion">
            <?php $_smarty_tpl->_assignInScope('i', 1);?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REGISTRATIONS']->value, 'registration');
$_smarty_tpl->tpl_vars['registration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['registration']->value) {
$_smarty_tpl->tpl_vars['registration']->do_else = false;
?>
            <div class="card" style="margin-bottom: 10px; border-radius: 10px">
                <div class="card-header" style="border-radius: 10px" id="headingRegistration<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                    <h5 class="mb-0">
                        <button class="btn btn-link btn-block btn-accordion" data-toggle="collapse" data-target="#collapseRegistration<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" aria-expanded="true" aria-controls="collapseRegistration<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                    <span style="<?php echo $_smarty_tpl->tpl_vars['registration']->value['style'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['registration']->value['avatar'];?>
" style="max-width:20px;max-height:20px;" class="rounded" alt="<?php echo $_smarty_tpl->tpl_vars['registration']->value['username'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['registration']->value['nickname'];?>
</span>
                                    <?php echo $_smarty_tpl->tpl_vars['registration']->value['groups'][0];?>

                        </button>
                    </h5>
                    <div id="collapseRegistration<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="collapse text-center" aria-labelledby="headingRegistration<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" data-parent="#accordion">
                        <?php echo $_smarty_tpl->tpl_vars['REGISTERED']->value;?>
 <span data-toggle="tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['registration']->value['time_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['registration']->value['time'];?>
</span><br />
                        <hr />
                        <a class="btn btn-primary btn-block text-white" href="<?php echo $_smarty_tpl->tpl_vars['registration']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
</a>
                    </div>
                </div>
            </div>
            <?php $_smarty_tpl->_assignInScope('i', ($_smarty_tpl->tpl_vars['i']->value+1));?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php }?>
    </div>
</div><?php }
}
