<?php
/* Smarty version 3.1.39, created on 2022-02-06 21:09:17
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/profile_fields_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620038fdc40824_40343159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b21d3d608eb0f5161f00e78187271b24270f96a2' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/profile_fields_create.tpl',
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
function content_620038fdc40824_40343159 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['PROFILE_FIELDS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['PROFILE_FIELDS']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-9">
                                <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['CREATING_PROFILE_FIELD']->value;?>
</h5>
                            </div>
                            <div class="col-md-3">
                                    <span class="float-md-right">
                                        <a class="btn btn-warning text-white" onclick="showCancelModal()"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                                    </span>
                            </div>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputFieldName"><?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
</label>
                                        <input type="text" class="form-control" id="inputFieldName" name="name"
                                               placeholder="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputFieldType"><?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
</label>
                                        <select class="form-control" name="type" id="inputFieldType">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TYPES']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputDescription"><?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
</label>
                                <textarea class="form-control" id="inputDescription" name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputRequired"><?php echo $_smarty_tpl->tpl_vars['REQUIRED']->value;?>
</label>
                                <span class="badge badge-info" style="margin-right:10px"><i
                                            class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                            title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['REQUIRED_HELP']->value;?>
"></i></span>
                                <input type="checkbox" id="inputRequired" name="required" class="js-switch" />
                            </div>

                            <div class="form-group">
                                <label for="inputEditable"><?php echo $_smarty_tpl->tpl_vars['EDITABLE']->value;?>
</label>
                                <span class="badge badge-info" style="margin-right:10px"><i
                                            class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                            title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['EDITABLE_HELP']->value;?>
"></i></span>
                                <input type="checkbox" id="inputEditable" name="editable" class="js-switch" />
                            </div>

                            <div class="form-group">
                                <label for="inputPublic"><?php echo $_smarty_tpl->tpl_vars['PUBLIC']->value;?>
</label>
                                <span class="badge badge-info" style="margin-right:10px"><i
                                            class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                            title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['PUBLIC_HELP']->value;?>
"></i></span>
                                <input type="checkbox" id="inputPublic" name="public" class="js-switch" />
                            </div>

                            <div class="form-group">
                                <label for="inputForum"><?php echo $_smarty_tpl->tpl_vars['DISPLAY_FIELD_ON_FORUM']->value;?>
</label>
                                <span class="badge badge-info"><i class="fas fa-question-circle" data-container="body"
                                                                  data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                  data-content="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_FIELD_ON_FORUM_HELP']->value;?>
"></i></span>
                                <input type="checkbox" id="inputForum" name="forum" class="js-switch" />
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
