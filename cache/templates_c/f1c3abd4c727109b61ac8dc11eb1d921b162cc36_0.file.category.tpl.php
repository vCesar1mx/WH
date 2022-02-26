<?php
/* Smarty version 3.1.39, created on 2022-02-06 18:05:51
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/tebex/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62000dffa38b25_71880342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1c3abd4c727109b61ac8dc11eb1d921b162cc36' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/tebex/category.tpl',
      1 => 1624813968,
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
function content_62000dffa38b25_71880342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>
 &raquo; <?php echo $_smarty_tpl->tpl_vars['ACTIVE_CATEGORY']->value;?>

</h2>

<div class="ui stackable grid">
    <div class="ui centered row">
        <div class="ui <?php if (count($_smarty_tpl->tpl_vars['WIDGETS']->value)) {?>ten wide tablet twelve wide computer<?php } else { ?>sixteen wide<?php }?> column">
            <div class="ui padded segment">
                <div class="ui top attached menu">
                    <?php if ($_smarty_tpl->tpl_vars['SHOW_HOME_TAB']->value == '1') {?>
                        <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['HOME_URL']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>

                        </a>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['subcategories'])) && count($_smarty_tpl->tpl_vars['category']->value['subcategories'])) {?>
                            <div class="ui pointing dropdown link item">
                                <span class="text"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</span>
                                <i class="dropdown icon"></i>
                                <div class="menu">
                                    <a class="<?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>active <?php }?>item" href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['subcategories'], 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
                                        <a class="<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['active']) {?>active <?php }?>item" href="<?php echo $_smarty_tpl->tpl_vars['subcategory']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value['title'];?>
</a>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <a class="<?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>active <?php }?>item" href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>

                            </a>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="ui bottom attached segment">
                    <?php if ((isset($_smarty_tpl->tpl_vars['NO_PACKAGES']->value))) {?>
                        <div class="ui icon message">
                            <i class="info icon"></i>
                            <div class="content">
                                <p><?php echo $_smarty_tpl->tpl_vars['NO_PACKAGES']->value;?>
</p>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="ui centered stackable grid">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PACKAGES']->value, 'package');
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
?>
                                <div class="four wide column">
                                    <div class="ui card" style="height: 100%">
                                        <?php if ($_smarty_tpl->tpl_vars['package']->value['image']) {?>
                                            <div class="image">
                                                <?php if ($_smarty_tpl->tpl_vars['package']->value['sale_active']) {?>
                                                    <span class="ui right ribbon red label">
                                                        <?php echo $_smarty_tpl->tpl_vars['SALE']->value;?>

                                                    </span>
                                                <?php }?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['package']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
">
                                            </div>
                                        <?php }?>
                                        <div class="center aligned content">
                                            <span class="header"><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
</span>
                                            <div class="ui divider"></div>
                                            <?php if ($_smarty_tpl->tpl_vars['package']->value['sale_active']) {?>
                                                <span style="color: #dc3545;text-decoration:line-through;"><?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value;
echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
</span>
                                            <?php }?>
                                            <?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value;
echo $_smarty_tpl->tpl_vars['package']->value['real_price'];?>

                                        </div>
                                        <div class="ui bottom attached blue button" onClick="$('#modal<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
').modal('show');">
                                            <?php echo $_smarty_tpl->tpl_vars['BUY']->value;?>
 &raquo;
                                        </div>
                                    </div>
                                </div>

                                <div class="ui small modal" id="modal<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
">
                                    <div class="header">
                                        <?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
 | <?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value;
echo $_smarty_tpl->tpl_vars['package']->value['real_price'];?>

                                    </div>
                                    <div class="<?php if ($_smarty_tpl->tpl_vars['package']->value['image']) {?>image <?php }?>content">
                                        <?php if ($_smarty_tpl->tpl_vars['package']->value['image']) {?>
                                            <div class="ui small image">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['package']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
">
                                            </div>
                                        <?php }?>
                                        <div class="description forum_post">
                                            <?php echo $_smarty_tpl->tpl_vars['package']->value['description'];?>

                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="ui red deny button">
                                            <?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>

                                        </div>
                                        <a class="ui positive right labeled icon button" target="_blank" rel="nofollow noopener" href="<?php echo $_smarty_tpl->tpl_vars['package']->value['link'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['BUY']->value;?>

                                            <i class="shopping cart icon"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php if (count($_smarty_tpl->tpl_vars['WIDGETS']->value)) {?>
            <div class="ui six wide tablet four wide computer column">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'widget');
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
