<?php
/* Smarty version 3.1.39, created on 2022-02-08 22:19:24
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/groups_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6202ec6c36b851_52364971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51a9ea75e78caddaa8d36b4eff0fdba7b1f7deea' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/groups_edit.tpl',
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
function content_6202ec6c36b851_52364971 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
</h5>
                            </div>
                            <div class="col-md-3">
                                    <span class="float-md-right"><?php if ((isset($_smarty_tpl->tpl_vars['PERMISSIONS']->value))) {?>

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['PERMISSIONS_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['PERMISSIONS']->value;?>
</a>
                                        <?php }?>
                                        <button role="button" class="btn btn-warning"
                                                onclick="showCancelModal()"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['DELETE_GROUP']->value))) {?>
                                            <button role="button" class="btn btn-danger"
                                                    onclick="showDeleteModal()"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</button>
                                        <?php }?>
                                    </span>
                            </div>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['OWN_GROUP']->value))) {?>
                            <div class="card shadow border-left-primary">
                                <div class="card-body">
                                    <h5><i class="icon fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</h5>
                                    <?php echo $_smarty_tpl->tpl_vars['OWN_GROUP']->value;?>

                                </div>
                            </div>
                            <br />
                        <?php }?>

                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="InputGroupname"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</label>
                                <input type="text" name="groupname" class="form-control" id="InputGroupname"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
">
                            </div>
                            <div class="form-group">
                                <label for="InputHTML"><?php echo $_smarty_tpl->tpl_vars['GROUP_HTML']->value;?>
</label>
                                <input type="text" name="html" class="form-control" id="InputHTML"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['GROUP_HTML']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['GROUP_HTML_VALUE']->value;?>
">
                            </div>
                            <div class="form-group">
                                <label for="InputColour"><?php echo $_smarty_tpl->tpl_vars['GROUP_USERNAME_COLOUR']->value;?>
</label>
                                <div class="input-group">
                                    <input type="text" name="username_style" class="form-control" id="InputColour"
                                           value="<?php echo $_smarty_tpl->tpl_vars['GROUP_USERNAME_COLOUR_VALUE']->value;?>
">
                                    <span class="input-group-append groupColour">
                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                        </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputCss"><?php echo $_smarty_tpl->tpl_vars['GROUP_USERNAME_CSS']->value;?>
</label>
                                <input type="text" name="username_css" class="form-control" id="InputCss"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['GROUP_USERNAME_CSS']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['GROUP_USERNAME_CSS_VALUE']->value;?>
">
                            </div>
                            <div class="form-group">
                                <label for="InputOrder"><?php echo $_smarty_tpl->tpl_vars['GROUP_ORDER']->value;?>
</label>
                                <input type="number" min="1" class="form-control" id="InputOrder" name="order"
                                       value="<?php echo $_smarty_tpl->tpl_vars['GROUP_ORDER_VALUE']->value;?>
">
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
 <span class="badge badge-warning"
                                                                         data-toggle="popover" data-title="<?php echo $_smarty_tpl->tpl_vars['WARNING']->value;?>
"
                                                                         data-content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FORCE_TFA_WARNING']->value, ENT_QUOTES, 'UTF-8', true);?>
"><i
                                                class="fa fa-exclamation-triangle"></i></label>
                                <input type="hidden" name="tfa" value="0">
                                <input type="checkbox" name="tfa" class="js-switch" id="InputTfa"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['FORCE_TFA_VALUE']->value == 1) {?> checked<?php }?>>
                            </div>
                            <div class="form-group">
                                <label for="InputStaff"><?php echo $_smarty_tpl->tpl_vars['STAFF_GROUP']->value;?>
</label>
                                <input type="hidden" name="staff" value="0">
                                <input type="checkbox" name="staff" class="js-switch" id="InputStaff"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['STAFF_GROUP_VALUE']->value == 1) {?> checked<?php }?>>
                            </div>
                            <?php if (!(isset($_smarty_tpl->tpl_vars['OWN_GROUP']->value))) {?>
                                <div class="form-group">
                                    <label for="InputStaffCP"><?php echo $_smarty_tpl->tpl_vars['STAFF_CP']->value;?>
</label>
                                    <input type="hidden" name="staffcp" value="0">
                                    <input type="checkbox" name="staffcp" class="js-switch" id="InputStaffCP"
                                           value="1" <?php if ($_smarty_tpl->tpl_vars['STAFF_CP_VALUE']->value == 1) {?> checked<?php }?>>
                                </div>
                            <?php }?>
                            <div class="form-group">
                                <label for="InputDefault"><?php echo $_smarty_tpl->tpl_vars['DEFAULT_GROUP']->value;?>
</label>
                                <input type="hidden" name="default" value="0">
                                <input type="checkbox" name="default" class="js-switch" id="InputDefault"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_GROUP_VALUE']->value == 1) {?> checked<?php }?>>
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

    <?php if ((isset($_smarty_tpl->tpl_vars['DELETE_GROUP']->value))) {?>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
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
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <form action="" method="post">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['GROUP_ID']->value;?>
">
                            <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
  function showCancelModal() {
    $('#cancelModal').modal().show();
  }
  <?php if ((isset($_smarty_tpl->tpl_vars['DELETE_GROUP']->value))) {?>
  function showDeleteModal() {
    $('#deleteModal').modal().show();
  }
  <?php }?>
  $(function () {
    $('.groupColour').colorpicker({
      format: 'hex',
      'color': <?php if ($_smarty_tpl->tpl_vars['GROUP_USERNAME_COLOUR_VALUE']->value) {?> '<?php echo $_smarty_tpl->tpl_vars['GROUP_USERNAME_COLOUR_VALUE']->value;?>
' <?php } else { ?> '#000000' <?php }?>
    });

    $('.groupColour').on('colorpickerChange', function (event) {
      $('#InputColour').val(event.color.toString());
    });

    $('#InputColour').change(function () {
      $('.groupColour').colorpicker('setValue', $(this).val());
    });
  });
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
