<?php
/* Smarty version 3.1.39, created on 2022-02-02 14:43:28
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/terms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61fa9890e5fec7_08463792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bb650c7df767df4fc6f146ace1799ec32bf98ea' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/terms.tpl',
      1 => 1633866022,
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
function content_61fa9890e5fec7_08463792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['TERMS']->value;?>

</h2>

<div class="ui padded segment" id="terms">
  <?php echo $_smarty_tpl->tpl_vars['SITE_TERMS']->value;?>

  <div class="ui divider"></div>
  <?php echo $_smarty_tpl->tpl_vars['NAMELESS_TERMS']->value;?>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
