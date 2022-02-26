<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:17:06
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f843c2d413a9_64129597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'affa5f68d19aa648aa2a803821c8521d18d76a19' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/index.tpl',
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
function content_61f843c2d413a9_64129597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['HOME_SESSION_FLASH']->value))) {?>
  <div class="ui success icon message">
    <i class="check icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['SUCCESS_TITLE']->value;?>
</div>
      <?php echo $_smarty_tpl->tpl_vars['HOME_SESSION_FLASH']->value;?>

    </div>
  </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['HOME_SESSION_ERROR_FLASH']->value))) {?>
  <div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
      <?php echo $_smarty_tpl->tpl_vars['HOME_SESSION_ERROR_FLASH']->value;?>

    </div>
  </div>
<?php }?>

<div class="ui stackable grid">
  <div class="ui centered row">
    <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value)) {?>
        <div class="ui six wide tablet four wide computer column">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
    <div class="ui <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>four wide tablet eight wide computer<?php } elseif (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) || count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>ten wide tablet twelve wide computer<?php } else { ?>sixteen wide<?php }?> column">
        <?php if ($_smarty_tpl->tpl_vars['NEWS']->value != null && count($_smarty_tpl->tpl_vars['NEWS']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NEWS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <div class="ui fluid card" id="news-post">
                <div class="content">
                <div class="header">
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['label']))) {
echo $_smarty_tpl->tpl_vars['item']->value['label'];
}?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" data-toggle="popup"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <div class="ui popup wide transition hidden">
                    <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h4>
                    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['BY']->value);?>
 <a style="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['author_name'];?>
</a> | <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>

                    </div>
                </div>
                <div class="meta" data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['time_ago'];?>

                </div>
                <div class="description forum_post">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

                </div>
                </div>
                <div class="extra content">
                <div class="right floated author">
                    <img class="ui avatar image" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_name'];?>
"> <a style="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_url'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['item']->value['author_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['author_name'];?>
</a>
                </div>
                <a class="ui mini primary button" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['READ_FULL_POST']->value;?>

                </a>
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>
      <div class="ui six wide tablet four wide computer column">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
          <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    <?php }?>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
