<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:20:21
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/debugging_and_maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f844855152a4_11540876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbec8ffac6bb37049f908f140f0d61cef16956e1' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/debugging_and_maintenance.tpl',
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
function content_61f844855152a4_11540876 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['DEBUGGING_AND_MAINTENANCE']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['DEBUGGING_AND_MAINTENANCE']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <?php if ((isset($_smarty_tpl->tpl_vars['ERROR_LOGS']->value))) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['ERROR_LOGS_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['ERROR_LOGS']->value;?>
</a>
                            <hr />
                        <?php }?>

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="InputDebug"><?php echo $_smarty_tpl->tpl_vars['ENABLE_DEBUG_MODE']->value;?>
</label>
                                <input id="InputDebug" name="enable_debugging" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLE_DEBUG_MODE_VALUE']->value == 1) {?> checked<?php }?> />
                            </div>
                            <div class="form-group">
                                <label for="InputMaintenance"><?php echo $_smarty_tpl->tpl_vars['ENABLE_MAINTENANCE_MODE']->value;?>
</label>
                                <input id="InputMaintenance" name="enable_maintenance" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLE_MAINTENANCE_MODE_VALUE']->value == 1) {?> checked<?php }?> />
                            </div>
                            <div class="form-group">
                                <label for="InputPageLoad"><?php echo $_smarty_tpl->tpl_vars['ENABLE_PAGE_LOAD_TIMER']->value;?>
</label>
                                <input id="InputPageLoad" name="enable_page_load_timer" type="checkbox"
                                       class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLE_PAGE_LOAD_TIMER_VALUE']->value == 1) {?> checked<?php }?> />
                            </div>
                            <div class="form-group">
                                <label for="inputMaintenanceMessage"><?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_MODE_MESSAGE']->value;?>
</label>
                                <textarea style="width:100%" rows="10" name="message"
                                          id="InputMaintenanceMessage"><?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_MODE_MESSAGE_VALUE']->value;?>
</textarea>
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
