<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:37:02
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/forum/forums_new_step_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6200316e04f161_67483704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e902b04b4536c680b0d6bd79587fd6db2798553' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/forum/forums_new_step_1.tpl',
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
function content_6200316e04f161_67483704 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['FORUMS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['FORUM']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['FORUMS']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-9">
                                <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['CREATING_FORUM']->value;?>
</h5>
                            </div>
                            <div class="col-md-3">
                                <span class="float-md-right"><button class="btn btn-warning"
                                                                     onclick="showCancelModal()"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button></span>
                            </div>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="InputType"><?php echo $_smarty_tpl->tpl_vars['FORUM_TYPE']->value;?>
</label>
                                    <select class="form-control" id="InputType" name="forum_type">
                                        <option value="forum"><?php echo $_smarty_tpl->tpl_vars['FORUM_TYPE_FORUM']->value;?>
</option>
                                        <option value="category"><?php echo $_smarty_tpl->tpl_vars['FORUM_TYPE_CATEGORY']->value;?>
</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="forumname"><?php echo $_smarty_tpl->tpl_vars['FORUM_NAME']->value;?>
</label>
                                <input class="form-control" type="text" name="forumname" id="forumname"
                                       value="<?php echo $_smarty_tpl->tpl_vars['FORUM_NAME_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['FORUM_NAME']->value;?>
" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="inputdesc"><?php echo $_smarty_tpl->tpl_vars['FORUM_DESCRIPTION']->value;?>
</label>
                                <textarea name="forumdesc" id="inputdesc" placeholder="<?php echo $_smarty_tpl->tpl_vars['FORUM_DESCRIPTION']->value;?>
"
                                          class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['FORUM_DESCRIPTION_VALUE']->value;?>
</textarea>
                            </div>
                            <div class="form-group">
                                <label for="forum_icon"><?php echo $_smarty_tpl->tpl_vars['FORUM_ICON']->value;?>
</label>
                                <input class="form-control" type="text" name="forum_icon" id="forum_icon"
                                       value="<?php echo $_smarty_tpl->tpl_vars['FORUM_ICON_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['FORUM_ICON']->value;?>
" autocomplete="off">
                            </div>
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

    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['ARE_YOU_SURE']->value;?>
</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $_smarty_tpl->tpl_vars['CONFIRM_CANCEL']->value;?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['CANCEL_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
                </div>
            </div>
        </div>
    </div>

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
  function showCancelModal() {
    $('#cancelModal').modal().show();
  }
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
