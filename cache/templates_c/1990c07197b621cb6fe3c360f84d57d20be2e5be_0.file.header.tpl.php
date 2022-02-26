<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:17:55
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f843f3b09092_80288663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1990c07197b621cb6fe3c360f84d57d20be2e5be' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/header.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f843f3b09092_80288663 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html<?php if (defined("HTML_CLASS")) {?> <?php echo (defined('HTML_CLASS') ? constant('HTML_CLASS') : null);
}?> lang="<?php if (defined("HTML_LANG")) {
echo (defined('HTML_LANG') ? constant('HTML_LANG') : null);
} else { ?>en<?php }?>" <?php if (defined("HTML_RTL") && (defined('HTML_RTL') ? constant('HTML_RTL') : null) == true) {?> dir="rtl" <?php }?>>

    <head>
        <!-- Standard Meta -->
        <meta charset="<?php if (defined("LANG_CHARSET")) {
echo (defined('LANG_CHARSET') ? constant('LANG_CHARSET') : null);
} else { ?>utf-8<?php }?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
</title>

        <?php if ((isset($_smarty_tpl->tpl_vars['FAVICON']->value))) {?>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['FAVICON']->value;?>
" type="image/x-icon" />
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_CSS']->value, 'css');
$_smarty_tpl->tpl_vars['css']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['css']->value;?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </head>
<?php }
}
