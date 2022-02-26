<?php
/* Smarty version 3.1.39, created on 2022-02-01 17:09:43
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f9695777bcb5_03421889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b5030bd5d48e809457104c4e05e5316feb682d7' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/header.tpl',
      1 => 1635519948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f9695777bcb5_03421889 (Smarty_Internal_Template $_smarty_tpl) {
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
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
	
	
	
	
	
		    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.5.95/css/materialdesignicons.min.css" />
        
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"><?php echo '</script'; ?>
>
  </head>

  <body<?php if ($_smarty_tpl->tpl_vars['DEFAULT_REVAMP_DARK_MODE']->value) {?> class="dark"<?php }?> id="page-<?php if (is_numeric((defined('PAGE') ? constant('PAGE') : null))) {
echo $_smarty_tpl->tpl_vars['TITLE']->value;
} else {
echo (defined('PAGE') ? constant('PAGE') : null);
}?>">
<?php }
}
