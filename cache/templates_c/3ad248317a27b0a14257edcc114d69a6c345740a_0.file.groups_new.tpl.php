<?php
/* Smarty version 3.1.39, created on 2022-02-08 22:18:31
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/groups_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6202ec37a8e0b7_95086970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ad248317a27b0a14257edcc114d69a6c345740a' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/groups_new.tpl',
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
function content_6202ec37a8e0b7_95086970 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['GROUPS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['GROUPS']->value;?>
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
                                <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['CREATING_NEW_GROUP']->value;?>
</h5>
                            </div>
                            <div class="col-md-3">
                                    <span class="float-md-right">
                                        <button role="button" class="btn btn-warning"
                                                onclick="showCancelModal()"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                                    </span>
                            </div>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="InputGroupname"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</label>
                                <input type="text" name="groupname" class="form-control" id="InputGroupname"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
">
                            </div>
                            <div class="form-group">
                                <label for="InputHTML"><?php echo $_smarty_tpl->tpl_vars['GROUP_HTML']->value;?>
</label>
                                <input type="text" name="html" class="form-control" id="InputHTML"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['GROUP_HTML']->value;?>
">
                            </div>
                            <div class="form-group groupColour">
                                <label for="InputColour"><?php echo $_smarty_tpl->tpl_vars['GROUP_USERNAME_COLOUR']->value;?>
</label>
                                <div class="input-group">
                                    <input type="text" name="username_style" class="form-control" id="InputColour">
                                    <span class="input-group-append">
                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                        </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputCss"><?php echo $_smarty_tpl->tpl_vars['GROUP_USERNAME_CSS']->value;?>
</label>
                                <input type="text" name="username_css" class="form-control" id="InputCss"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['GROUP_USERNAME_CSS']->value;?>
">
                            </div>
                            <div class="form-group">
                                <label for="InputOrder"><?php echo $_smarty_tpl->tpl_vars['GROUP_ORDER']->value;?>
</label>
                                <input type="number" min="1" class="form-control" id="InputOrder" name="order"
                                       value="5">
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['DISCORD_INTEGRATION']->value) {?>
                                <div class="form-group">
                                    <label for="InputDiscordRoleID"><?php echo $_smarty_tpl->tpl_vars['DISCORD_ROLE_ID']->value;?>
 <span class="badge badge-info"
                                                                                             data-toggle="popover"
                                                                                             data-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                                             data-content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ID_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
"><i
                                                    class="fa fa-question"></i></label>
                                    <input type="number" min="1" class="form-control" id="InputDiscordRoleID"
                                           name="discord_role_id" value="<?php echo $_smarty_tpl->tpl_vars['DISCORD_ROLE_ID_VALUE']->value;?>
">
                                </div>
                            <?php }?>
                            <div class="form-group">
                                <label for="InputTfa"><?php echo $_smarty_tpl->tpl_vars['FORCE_TFA']->value;?>
</label>
                                <input type="hidden" name="tfa" value="0">
                                <input type="checkbox" name="tfa" class="js-switch" id="InputTfa" value="1">
                            </div>
                            <div class="form-group">
                                <label for="InputStaff"><?php echo $_smarty_tpl->tpl_vars['STAFF_GROUP']->value;?>
</label>
                                <input type="hidden" name="staff" value="0">
                                <input type="checkbox" name="staff" class="js-switch" id="InputStaff" value="1">
                            </div>
                            <div class="form-group">
                                <label for="InputStaffCP"><?php echo $_smarty_tpl->tpl_vars['STAFF_CP']->value;?>
</label>
                                <input type="hidden" name="staffcp" value="0">
                                <input type="checkbox" name="staffcp" class="js-switch" id="InputStaffCP"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['STAFF_CP_VALUE']->value == 1) {?> checked<?php }?>>
                            </div>
                            <div class="form-group">
                                <label for="InputDefault"><?php echo $_smarty_tpl->tpl_vars['DEFAULT_GROUP']->value;?>
</label>
                                <input type="hidden" name="default" value="0">
                                <input type="checkbox" name="default" class="js-switch" id="InputDefault" value="1">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="hidden" name="action" value="update">
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

  $(function () {
    $('.groupColour').colorpicker({
      format: 'hex',
      color: '#000000'
    });
  });
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
