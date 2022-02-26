<?php
/* Smarty version 3.1.39, created on 2022-02-13 01:51:31
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/users_reports_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620864233b3de2_64210834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7619dea943b498ccb97b5a625b9ccd6b2276fbeb' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/users_reports_view.tpl',
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
function content_620864233b3de2_64210834 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['REPORTS']->value;?>
</h1>
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

                <!-- Success and Error Alerts -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-9">
                                <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['VIEWING_REPORT']->value;?>
 &raquo; <a
                                            target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['REPORTED_USER_PROFILE']->value;?>
"
                                            style="<?php echo $_smarty_tpl->tpl_vars['REPORTED_USER_STYLE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['REPORTED_USER']->value;?>
</a> <?php if (($_smarty_tpl->tpl_vars['TYPE']->value == 0)) {?>|
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['CONTENT_LINK']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['VIEW_CONTENT']->value;?>
</a>
                                        </small><?php }?></h5>
                            </div>
                            <div class="col-md-3">
                                <span class="float-md-right"><a href="<?php echo $_smarty_tpl->tpl_vars['REPORTS_LINK']->value;?>
"
                                                                class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a></span>
                            </div>
                        </div>
                        <hr />

                        <div class="card shadow">
                            <div class="card-header">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['REPORTER_USER_PROFILE']->value;?>
" style="<?php echo $_smarty_tpl->tpl_vars['REPORTER_USER_STYLE']->value;?>
" target="_blank"><img
                                            src="<?php echo $_smarty_tpl->tpl_vars['REPORTER_USER_AVATAR']->value;?>
" class="rounded"
                                            style="max-width:25px;max-height:25px;"
                                            alt="<?php echo $_smarty_tpl->tpl_vars['REPORTER_USER']->value;?>
" /> <?php echo $_smarty_tpl->tpl_vars['REPORTER_USER']->value;?>
</a>:
                                <span class="pull-right" data-toggle="tooltip"
                                      data-original-title="<?php echo $_smarty_tpl->tpl_vars['REPORT_DATE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['REPORT_DATE_FRIENDLY']->value;?>
</span>
                            </div>
                            <div class="card-body">
                                <?php echo $_smarty_tpl->tpl_vars['REPORT_CONTENT']->value;?>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5><?php echo $_smarty_tpl->tpl_vars['COMMENTS_TEXT']->value;?>
</h5>
                        <hr />
                        <?php if (count($_smarty_tpl->tpl_vars['COMMENTS']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COMMENTS']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
                                <div class="card shadow">
                                    <div class="card-header">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['comment']->value['style'];?>
" target="_blank"><img
                                                    src="<?php echo $_smarty_tpl->tpl_vars['comment']->value['avatar'];?>
" class="rounded"
                                                    style="max-height:25px;max-width:25px;"
                                                    alt="<?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
</a>:
                                        <span class="pull-right" data-toggle="tooltip"
                                              data-original-title="<?php echo $_smarty_tpl->tpl_vars['comment']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['date_friendly'];?>
</span>
                                    </div>
                                    <div class="card-body">
                                        <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

                                    </div>
                                </div>
                                <br />
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <hr />
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['NO_COMMENTS']->value;?>

                            <br />
                            <br />
                        <?php }?>

                        <form action="" method="post">
                            <div class="form-group">
                                <textarea class="form-control" name="content" rows="5"
                                          placeholder="<?php echo $_smarty_tpl->tpl_vars['NEW_COMMENT']->value;?>
"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
                                <div class="float-md-right">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['CLOSE_REPORT']->value))) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['CLOSE_LINK']->value;?>
" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['CLOSE_REPORT']->value;?>
</a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['REOPEN_LINK']->value;?>
" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['REOPEN_REPORT']->value;?>
</a>
                                    <?php }?>
                                </div>
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
