<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:22:01
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/users_reports.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62002de941c6f2_79010533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc277caec7d826f8992102cb41cb98ebb720eb5c' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/users_reports.tpl',
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
function content_62002de941c6f2_79010533 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['REPORTS']->value;
if ((isset($_smarty_tpl->tpl_vars['VIEWING_USER']->value))) {?> | <?php echo $_smarty_tpl->tpl_vars['VIEWING_USER']->value;
}?></h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['USER_MANAGEMENT']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['REPORTS']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <a href="<?php echo $_smarty_tpl->tpl_vars['CHANGE_VIEW_LINK']->value;?>
" <?php if (count($_smarty_tpl->tpl_vars['ALL_REPORTS']->value)) {?>style="margin-bottom: 15px"
                           <?php }?>class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['CHANGE_VIEW']->value;?>
</a>

                        <?php if ((isset($_smarty_tpl->tpl_vars['NO_REPORTS']->value))) {?>
                            <hr />
                        <?php }?>

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php if (count($_smarty_tpl->tpl_vars['ALL_REPORTS']->value)) {?>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['USER_REPORTED']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['UPDATED_BY']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['COMMENTS']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['ACTIONS']->value;?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_REPORTS']->value, 'report');
$_smarty_tpl->tpl_vars['report']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['report']->value) {
$_smarty_tpl->tpl_vars['report']->do_else = false;
?>
                                        <tr>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['report']->value['user_profile'];?>
"
                                                   style="<?php echo $_smarty_tpl->tpl_vars['report']->value['user_reported_style'];?>
"><img
                                                            src="<?php echo $_smarty_tpl->tpl_vars['report']->value['user_reported_avatar'];?>
"
                                                            style="max-height:25px;max-width:25px;"
                                                            alt="<?php echo $_smarty_tpl->tpl_vars['report']->value['user_reported'];?>
"
                                                            class="rounded"> <?php echo $_smarty_tpl->tpl_vars['report']->value['user_reported'];?>
</a><br /><span
                                                        data-toggle="tooltip"
                                                        data-original-title="<?php echo $_smarty_tpl->tpl_vars['report']->value['reported_at_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['report']->value['reported_at'];?>
</span>
                                            </td>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['report']->value['updated_by_profile'];?>
"
                                                   style="<?php echo $_smarty_tpl->tpl_vars['report']->value['updated_by_style'];?>
"><img
                                                            src="<?php echo $_smarty_tpl->tpl_vars['report']->value['updated_by_avatar'];?>
"
                                                            style="max-height:25px;max-width:25px;"
                                                            alt="<?php echo $_smarty_tpl->tpl_vars['report']->value['updated_by'];?>
"
                                                            class="rounded"> <?php echo $_smarty_tpl->tpl_vars['report']->value['updated_by'];?>
</a><br /><span
                                                        data-toggle="tooltip"
                                                        data-original-title="<?php echo $_smarty_tpl->tpl_vars['report']->value['updated_at_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['report']->value['updated_at'];?>
</span>
                                            </td>
                                            <td><i class="fa fa-comments" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['report']->value['comments'];?>

                                            </td>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['report']->value['link'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
 &raquo;</a>
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>


                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['NO_REPORTS']->value))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['NO_REPORTS']->value;?>

                        <?php }?>

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
