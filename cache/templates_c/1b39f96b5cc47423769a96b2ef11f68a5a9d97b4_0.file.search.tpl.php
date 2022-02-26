<?php
/* Smarty version 3.1.39, created on 2022-02-06 10:48:59
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ffa79bd1f970_63319940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b39f96b5cc47423769a96b2ef11f68a5a9d97b4' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/search.tpl',
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
function content_61ffa79bd1f970_63319940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['FORUM_SEARCH']->value;?>

</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
  <div class="ui error icon message">
    <i class="error icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
      <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

    </div>
  </div>
<?php }?>
            
<div class="ui padded segment" id="forum-search">
  <div class="ui stackable grid">
    <div class="ui centered row">
      <div class="ui sixteen wide tablet ten wide computer column">
        <form class="ui form" action="" method="post" id="form-forum-search">
          <div class="field">
            <label><?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
</label>
            <div class="ui fluid action input">
              <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
              <input type="text" name="forum_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
">
              <button type="submit" class="ui primary icon button"><i class="search icon"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
