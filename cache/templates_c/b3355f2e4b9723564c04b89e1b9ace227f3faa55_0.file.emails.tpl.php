<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:21:26
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/emails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f844c62c9378_35101190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3355f2e4b9723564c04b89e1b9ace227f3faa55' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/emails.tpl',
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
function content_61f844c62c9378_35101190 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['EMAILS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['EMAILS']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <?php if ((isset($_smarty_tpl->tpl_vars['MASS_MESSAGE_LINK']->value))) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['MASS_MESSAGE_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['MASS_MESSAGE']->value;?>
</a>
                        <?php }?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['EDIT_EMAIL_MESSAGES_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['EDIT_EMAIL_MESSAGES']->value;?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ERRORS_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ERRORS']->value;?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SEND_TEST_EMAIL_LINK']->value;?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['SEND_TEST_EMAIL']->value;?>
</a>

                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="InputOutgoingEmail"><?php echo $_smarty_tpl->tpl_vars['OUTGOING_EMAIL']->value;?>
</label>
                                <span class="badge badge-info"><i class="fa fa-question-circle" data-container="body"
                                                                  data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                  data-content="<?php echo $_smarty_tpl->tpl_vars['OUTGOING_EMAIL_INFO']->value;?>
"></i></span>
                                <input type="text" id="InputOutgoingEmail" name="email" value="<?php echo $_smarty_tpl->tpl_vars['OUTGOING_EMAIL_VALUE']->value;?>
"
                                       class="form-control">
                            </div>
                            <hr />
                            <div class="card shadow border-left-primary">
                                <div class="card-body">
                                    <h5><i class="icon fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</h5>
                                    <?php echo $_smarty_tpl->tpl_vars['MAILER_SETTINGS_INFO']->value;?>

                                </div>
                            </div>
                            <br />
                            <div class="form-group">
                                <label for="inputMailer"><?php echo $_smarty_tpl->tpl_vars['ENABLE_MAILER']->value;?>
</label>
                                <span class="badge badge-info"><i class="fa fa-question-circle" data-container="body"
                                                                  data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                  data-content="<?php echo $_smarty_tpl->tpl_vars['ENABLE_MAILER_HELP']->value;?>
"></i></span>
                                <input type="hidden" name="enable_mailer" value="0">
                                <input id="inputMailer" name="enable_mailer" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLE_MAILER_VALUE']->value == 1) {?> checked<?php }?> />
                            </div>
                            <div class="form-group">
                                <label for="inputUsername"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                                <input class="form-control" type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;?>
"
                                       id="inputUsername">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
</label>
                                <span class="badge badge-info"><i class="fa fa-question-circle" data-container="body"
                                                                  data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                  data-content="<?php echo $_smarty_tpl->tpl_vars['PASSWORD_HIDDEN']->value;?>
"></i></span>
                                <input class="form-control" type="password" name="password" id="inputPassword">
                            </div>
                            <div class="form-group">
                                <label for="inputName"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['NAME_VALUE']->value;?>
"
                                       id="inputName">
                            </div>
                            <div class="form-group">
                                <label for="inputHost"><?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
</label>
                                <input class="form-control" type="text" name="host" value="<?php echo $_smarty_tpl->tpl_vars['HOST_VALUE']->value;?>
"
                                       id="inputHost">
                            </div>
                            <div class="form-group">
                                <label for="inputPort"><?php echo $_smarty_tpl->tpl_vars['PORT']->value;?>
</label>
                                <input class="form-control" type="text" name="port" value="<?php echo $_smarty_tpl->tpl_vars['PORT_VALUE']->value;?>
"
                                       id="inputPort">
                            </div>
                            <hr />
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
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
