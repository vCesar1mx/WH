<?php
/* Smarty version 3.1.39, created on 2022-02-01 14:37:11
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/terms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f94597c4d293_09013585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aaca24d3b033749b13185335325225568b2d2d2' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/terms.tpl',
      1 => 1633862423,
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
function content_61f94597c4d293_09013585 (Smarty_Internal_Template $_smarty_tpl) {
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
