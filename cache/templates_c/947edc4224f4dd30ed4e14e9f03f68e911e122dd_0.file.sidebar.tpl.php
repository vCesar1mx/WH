<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:18:19
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f8440b31b096_94623824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '947edc4224f4dd30ed4e14e9f03f68e911e122dd' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/sidebar.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f8440b31b096_94623824 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
" class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
            <img src="<?php if ((isset($_smarty_tpl->tpl_vars['PANEL_LOGO_IMAGE']->value))) {
echo $_smarty_tpl->tpl_vars['PANEL_LOGO_IMAGE']->value;
} else {
echo $_smarty_tpl->tpl_vars['NAMELESS_LOGO']->value;
}?>" style="height: 35px;">
        </div>
        <div class="sidebar-brand-text mx-3" style="margin-top: 4px"><?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
</div>
    </a>

    <!-- Sidebar - Links -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['link'])) && $_smarty_tpl->tpl_vars['item']->value['link'] == "divider") {?>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
    <?php } else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
    <li class="nav-item<?php if (($_smarty_tpl->tpl_vars['PAGE']->value == $_smarty_tpl->tpl_vars['name']->value) || ($_smarty_tpl->tpl_vars['PARENT_PAGE']->value == $_smarty_tpl->tpl_vars['name']->value)) {?> active<?php }?>">
        <a class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['PARENT_PAGE']->value)) && $_smarty_tpl->tpl_vars['PARENT_PAGE']->value == $_smarty_tpl->tpl_vars['name']->value) {
} else { ?>collapsed<?php }
if ((isset($_smarty_tpl->tpl_vars['PARENT_PAGE']->value)) && $_smarty_tpl->tpl_vars['PARENT_PAGE']->value == $_smarty_tpl->tpl_vars['name']->value) {?> active<?php }?>" href="#" data-toggle="collapse" data-target="#<?php echo preg_replace('!\s+!u', '&nbsp;',$_smarty_tpl->tpl_vars['item']->value['title']);?>
" aria-expanded="true" aria-controls="<?php echo preg_replace('!\s+!u', '&nbsp;',$_smarty_tpl->tpl_vars['item']->value['title']);?>
">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
<span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
        </a>
        <div id="<?php echo preg_replace('!\s+!u', '&nbsp;',$_smarty_tpl->tpl_vars['item']->value['title']);?>
" class="collapse<?php if ((isset($_smarty_tpl->tpl_vars['PARENT_PAGE']->value)) && $_smarty_tpl->tpl_vars['PARENT_PAGE']->value == $_smarty_tpl->tpl_vars['name']->value) {?> show<?php }?>" aria-labelledby="<?php echo preg_replace('!\s+!u', '&nbsp;',$_smarty_tpl->tpl_vars['item']->value['title']);?>
" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <?php if (count($_smarty_tpl->tpl_vars['item']->value['items'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'subItem', false, 'subKey');
$_smarty_tpl->tpl_vars['subItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subKey']->value => $_smarty_tpl->tpl_vars['subItem']->value) {
$_smarty_tpl->tpl_vars['subItem']->do_else = false;
?>
                <a class="collapse-item <?php if ($_smarty_tpl->tpl_vars['PAGE']->value == $_smarty_tpl->tpl_vars['subKey']->value) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['subItem']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['subItem']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['subItem']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['subItem']->value['title'];?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </div>
        </div>
    </li>
    <?php } else { ?>
    <li class="nav-item<?php if ($_smarty_tpl->tpl_vars['PAGE']->value == $_smarty_tpl->tpl_vars['name']->value) {?> active<?php }?>">
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
<span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
        </a>
    </li>
    <?php }?>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
<?php }
}
