<?php
/* Smarty version 3.1.39, created on 2022-02-03 02:15:33
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/integrations/minecraft/minecraft_servers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61fb3ac5ae01d5_50195170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27038175953df107ee5a1b41b4058b349da24fa7' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/integrations/minecraft/minecraft_servers.tpl',
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
function content_61fb3ac5ae01d5_50195170 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT_SERVERS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['INTEGRATIONS']->value;?>
</li>
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['MINECRAFT_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT_SERVERS']->value;?>
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

                        <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_SERVER_LINK']->value;?>
" class="btn btn-primary"
                           <?php if (!(isset($_smarty_tpl->tpl_vars['NO_SERVERS']->value))) {?>style="margin-bottom: 15px" <?php }?>}><?php echo $_smarty_tpl->tpl_vars['NEW_SERVER']->value;?>
</a>

                        <?php if ((isset($_smarty_tpl->tpl_vars['NO_SERVERS']->value))) {?>
                            <hr />
                            <p><?php echo $_smarty_tpl->tpl_vars['NO_SERVERS']->value;?>
</p>
                        <?php } else { ?>
                            <div class="table table-responsive">
                                <table class="table table-striped">
                                    <tbody id="sortable">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SERVERS']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                                        <tr data-id="<?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
">
                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['server']->value['name'];?>
</strong> (<?php echo $_smarty_tpl->tpl_vars['server']->value['server_id'];?>
)</td>
                                            <td>
                                                <div class="float-md-right">
                                                    <div class="btn btn-secondary"><i class="fas fa-arrows-alt"></i></div>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['server']->value['edit_link'];?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</a>
                                                    <button onclick="showDeleteModal('<?php echo $_smarty_tpl->tpl_vars['server']->value['delete_link'];?>
')"
                                                            class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        <?php }?>

                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">

                        <h5><?php echo $_smarty_tpl->tpl_vars['QUERY_SETTINGS']->value;?>
</h5>
                        <hr />
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="inputDefaultServer"><?php echo $_smarty_tpl->tpl_vars['DEFAULT_SERVER']->value;?>
</label>
                                <select id="inputDefaultServer" class="form-control" name="default_server">
                                    <?php if (count($_smarty_tpl->tpl_vars['SERVERS']->value) > 1) {?>
                                        <option value="none" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_SERVER_VALUE']->value == 0) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NO_DEFAULT_SERVER']->value;?>
</option>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['SERVERS']->value)) && count($_smarty_tpl->tpl_vars['SERVERS']->value)) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SERVERS']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['server']->value['is_default'] == 1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['server']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputQueryInterval"><?php echo $_smarty_tpl->tpl_vars['QUERY_INTERVAL']->value;?>
</label>
                                <input id="inputQueryInterval" name="interval" type="number" class="form-control"
                                       value="<?php echo $_smarty_tpl->tpl_vars['QUERY_INTERVAL_VALUE']->value;?>
" min="5" max="60" />
                            </div>

                            <div class="form-group">
                                <label for="inputExternalQuery"><?php echo $_smarty_tpl->tpl_vars['EXTERNAL_QUERY']->value;?>
</label> <span
                                        class="badge badge-info"><i class="fa fa-question-circle" data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                    data-content="<?php echo $_smarty_tpl->tpl_vars['EXTERNAL_QUERY_INFO']->value;?>
"></i></span>
                                <input type="hidden" name="external_query" value="0">
                                <input id="inputExternalQuery" name="external_query" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['EXTERNAL_QUERY_VALUE']->value) {?> checked<?php }?> />
                            </div>

                            <div class="form-group">
                                <label for="inputStatusPage"><?php echo $_smarty_tpl->tpl_vars['STATUS_PAGE']->value;?>
</label>
                                <input type="hidden" name="status_page" value="0">
                                <input id="inputStatusPage" name="status_page" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['STATUS_PAGE_VALUE']->value) {?> checked<?php }?> />
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
                    <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_SERVER']->value;?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                    <form action="" method="post" id="deleteLink" style="display: inline">
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                        <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
" />
                    </form>
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
  function showDeleteModal(link) {
    $('#deleteLink').attr('action', link);
    $('#deleteModal').modal().show();
  }
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function () {
    $("#sortable").sortable({
      start: function (event, ui) {
        let start_pos = ui.item.index();
        ui.item.data('startPos', start_pos);
      },
      update: function (event, ui) {
        let servers = $("#sortable").children();
        let toSubmit = [];
        servers.each(function () {
          toSubmit.push($(this).data().id);
        });

        $.ajax({
          url: "<?php echo $_smarty_tpl->tpl_vars['REORDER_DRAG_URL']->value;?>
",
          type: "POST",
          data: {
            token: "<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
",
            servers: JSON.stringify({"servers": toSubmit})
          },
          success: function (response) {
            // Success
          },
          error: function (xhr) {
            // Error
            console.log(xhr);
          }
        });
      }
    });
  });
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
