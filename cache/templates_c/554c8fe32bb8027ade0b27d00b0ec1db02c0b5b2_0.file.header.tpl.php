<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:16:34
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f843a2ebf442_13739527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '554c8fe32bb8027ade0b27d00b0ec1db02c0b5b2' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/header.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f843a2ebf442_13739527 (Smarty_Internal_Template $_smarty_tpl) {
if (defined("HTML_CLASS")) {
$_smarty_tpl->_assignInScope('HTMLCLASS', " ".((string)(defined('HTML_CLASS') ? constant('HTML_CLASS') : null)));
}
if (defined("HTML_LANG")) {
$_smarty_tpl->_assignInScope('HTMLLANG', " lang='".((string)(defined('HTML_LANG') ? constant('HTML_LANG') : null))."'");
} else {
$_smarty_tpl->_assignInScope('HTMLLANG', " lang='en'");
}
if (defined("HTML_RTL") && (defined('HTML_RTL') ? constant('HTML_RTL') : null) == true) {
$_smarty_tpl->_assignInScope('HTMLRTL', " dir='rtl'");
}
if (defined("LANG_CHARSET")) {
$_smarty_tpl->_assignInScope('METACHARSET', ((string)(defined('LANG_CHARSET') ? constant('LANG_CHARSET') : null)));
} else {
$_smarty_tpl->_assignInScope('METACHARSET', "utf-8");
}
if ((isset($_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value, $tmp) > 0) {
$_smarty_tpl->_assignInScope('PAGEDESCRIPTION', ((string)$_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value));
} else {
$_smarty_tpl->_assignInScope('PAGEDESCRIPTION', " ");
}
if ((isset($_smarty_tpl->tpl_vars['PAGE_KEYWORDS']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['PAGE_KEYWORDS']->value, $tmp) > 0) {
$_smarty_tpl->_assignInScope('PAGEKEYWORDS', ((string)$_smarty_tpl->tpl_vars['PAGE_KEYWORDS']->value));
} else {
$_smarty_tpl->_assignInScope('PAGEKEYWORDS', " ");
}?>

<!DOCTYPE html>
<html<?php echo $_smarty_tpl->tpl_vars['HTMLCLASS']->value;
echo $_smarty_tpl->tpl_vars['HTMLLANG']->value;
echo $_smarty_tpl->tpl_vars['HTMLRTL']->value;?>
>
  <head>

    <meta charset="<?php echo $_smarty_tpl->tpl_vars['METACHARSET']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
</title>

	<?php if ((isset($_smarty_tpl->tpl_vars['FAVICON']->value))) {?>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['FAVICON']->value;?>
" type="image/x-icon" />
	<?php }?>

    <meta name="author" content="<?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
">
    <meta name='description' content='<?php echo $_smarty_tpl->tpl_vars['PAGEDESCRIPTION']->value;?>
' />
    <meta name='keywords' content='<?php echo $_smarty_tpl->tpl_vars['PAGEKEYWORDS']->value;?>
' />

    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['OG_URL']->value;?>
" />
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['OG_IMAGE']->value;?>
" />
    <meta property='og:description' content='<?php echo $_smarty_tpl->tpl_vars['PAGEDESCRIPTION']->value;?>
' />

	  <!-- Twitter Card Properties -->
    <meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['OG_IMAGE']->value;?>
" />

     <?php if ((isset($_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value, $tmp) > 0) {?>
         <meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value;?>
" />
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

	<?php if ((isset($_smarty_tpl->tpl_vars['ANALYTICS_ID']->value))) {?>
	  
		<?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $_smarty_tpl->tpl_vars['ANALYTICS_ID']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', '<?php echo $_smarty_tpl->tpl_vars['ANALYTICS_ID']->value;?>
');
		<?php echo '</script'; ?>
>
	  
    <?php }?>
  </head>

  <body<?php if ($_smarty_tpl->tpl_vars['DEFAULT_REVAMP_DARK_MODE']->value) {?> class="dark"<?php }?> id="page-<?php if (is_numeric((defined('PAGE') ? constant('PAGE') : null))) {
echo $_smarty_tpl->tpl_vars['TITLE']->value;
} else {
echo (defined('PAGE') ? constant('PAGE') : null);
}?>">
<?php }
}
