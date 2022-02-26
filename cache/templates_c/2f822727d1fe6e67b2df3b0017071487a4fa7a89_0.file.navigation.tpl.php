<?php
/* Smarty version 3.1.39, created on 2022-02-01 17:11:22
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f969ba213e02_39596910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f822727d1fe6e67b2df3b0017071487a4fa7a89' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/navigation.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:includes/update.tpl' => 1,
    'file:includes/alerts.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_61f969ba213e02_39596910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body id="page-top">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main content -->
        <div id="content">

            <!-- Topbar -->
            <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['NAVIGATION']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['NAVIGATION']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                            <div class="card shadow border-left-primary">
                                <div class="card-body">
                                    <h5><i class="icon fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</h5>
                                    <p><?php echo $_smarty_tpl->tpl_vars['NAVBAR_ORDER_INSTRUCTIONS']->value;?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['NAVBAR_ICON_INSTRUCTIONS']->value;?>
</p>
                                </div>
                            </div>
                            <br />
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_ITEMS']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="input<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['NAVBAR_ORDER']->value;?>
</label>
                                            <input type="number" min="1" class="form-control"
                                                   id="input<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"
                                                   name="inputOrder[<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['custom'])) && is_numeric($_smarty_tpl->tpl_vars['item']->value['custom'])) {
echo $_smarty_tpl->tpl_vars['item']->value['custom'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>]"
                                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['order'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="input<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
Icon"><?php echo $_smarty_tpl->tpl_vars['NAVBAR_ICON']->value;?>
</label>
                                            <input type="text" class="form-control" id="input<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
Icon"
                                                   name="inputIcon[<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['custom'])) && is_numeric($_smarty_tpl->tpl_vars['item']->value['custom'])) {
echo $_smarty_tpl->tpl_vars['item']->value['custom'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>]"
                                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                    </div>
                                </div>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items'])) && count($_smarty_tpl->tpl_vars['item']->value['items'])) {?>
                                    <br>
                                    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
 &raquo; <?php echo $_smarty_tpl->tpl_vars['DROPDOWN_ITEMS']->value;?>
</strong>
                                    <br />
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown_item', false, 'dropdown_key');
$_smarty_tpl->tpl_vars['dropdown_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown_key']->value => $_smarty_tpl->tpl_vars['dropdown_item']->value) {
$_smarty_tpl->tpl_vars['dropdown_item']->do_else = false;
?>
                                        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="input<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['NAVBAR_ORDER']->value;?>
</label>
                                                    <input type="number" min="1" class="form-control"
                                                           id="input<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"
                                                           name="inputOrder[<?php if ((isset($_smarty_tpl->tpl_vars['dropdown_item']->value['custom'])) && is_numeric($_smarty_tpl->tpl_vars['dropdown_item']->value['custom'])) {
echo $_smarty_tpl->tpl_vars['dropdown_item']->value['custom'];
} else {
echo $_smarty_tpl->tpl_vars['dropdown_key']->value;
}?>]"
                                                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_item']->value['order'], ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="input<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
Icon"><?php echo $_smarty_tpl->tpl_vars['NAVBAR_ICON']->value;?>
</label>
                                                    <input type="text" class="form-control"
                                                           id="input<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
Icon"
                                                           name="inputIcon[<?php if ((isset($_smarty_tpl->tpl_vars['dropdown_item']->value['custom'])) && is_numeric($_smarty_tpl->tpl_vars['dropdown_item']->value['custom'])) {
echo $_smarty_tpl->tpl_vars['dropdown_item']->value['custom'];
} else {
echo $_smarty_tpl->tpl_vars['dropdown_key']->value;
}?>]"
                                                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_item']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                            </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <hr>
                            <div class="form-group">
                                <label for="dropdown_name"><?php echo $_smarty_tpl->tpl_vars['DROPDOWN_NAME']->value;?>
</label>
                                <input type="text" class="form-control" id="dropdown_name" name="dropdown_name"
                                       value="<?php echo $_smarty_tpl->tpl_vars['DROPDOWN_NAME_VALUE']->value;?>
">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
                            </div>
                        </form>

                    </div>
                </div>

                <!-- Spacing -->
                <div style="height:1rem;"></div>

                <!-- End Page Content -->
            </div>

            <!-- End Main Content -->
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- End Content Wrapper -->
    </div>

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
