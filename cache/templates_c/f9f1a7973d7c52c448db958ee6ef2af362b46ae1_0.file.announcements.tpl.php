<?php
/* Smarty version 3.1.39, created on 2022-02-03 02:15:24
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61fb3abce65ae9_78111018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9f1a7973d7c52c448db958ee6ef2af362b46ae1' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/announcements.tpl',
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
function content_61fb3abce65ae9_78111018 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value;?>
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
                                    <p style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['ANNOUCEMENTS_INFO']->value;?>
</p>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right"><a href="<?php echo $_smarty_tpl->tpl_vars['NEW_LINK']->value;?>
" class="btn btn-primary"><i class="fas fa-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['NEW']->value;?>
</a></span>
                                </div>
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['ALL_ANNOUNCEMENTS']->value))) {?>
                            <hr /><?php } else { ?><br /><?php }?>

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['ALL_ANNOUNCEMENTS']->value))) {?>
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped">
                                    <thead>
                                        <tr>
                                            <th><?php echo $_smarty_tpl->tpl_vars['ORDER']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['PAGES']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['TEXT_COLOUR']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['BACKGROUND_COLOUR']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['ACTIONS']->value;?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody id="sortable">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ANNOUNCEMENTS']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
                                        <tr data-id="<?php echo $_smarty_tpl->tpl_vars['announcement']->value[0]->id;?>
">
                                            <td><?php echo $_smarty_tpl->tpl_vars['announcement']->value[0]->order;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['announcement']->value[0]->header;?>
</td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['announcement']->value['pages'] != null) {
echo $_smarty_tpl->tpl_vars['announcement']->value['pages'];
} else { ?><i><?php echo $_smarty_tpl->tpl_vars['NONE']->value;?>
</i><?php }?></td>
                                            <td><span class="badge border" style="display: inline-block; width: 50px; height: 25px; background-color: <?php echo $_smarty_tpl->tpl_vars['announcement']->value[0]->text_colour;?>
;" title="<?php echo $_smarty_tpl->tpl_vars['announcement']->value[0]->text_colour;?>
"></span></td>
                                            <td><span class="badge border" style="display: inline-block; width: 50px; height: 25px; background-color: <?php echo $_smarty_tpl->tpl_vars['announcement']->value[0]->background_colour;?>
; color:#ffffff;" title="<?php echo $_smarty_tpl->tpl_vars['announcement']->value[0]->background_colour;?>
"></span></td>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['EDIT_LINK']->value;
echo $_smarty_tpl->tpl_vars['announcement']->value[0]->id;?>
" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-edit"></i></a>
                                                <a href="#" onclick="showDeleteModal(<?php echo $_smarty_tpl->tpl_vars['announcement']->value[0]->id;?>
)" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['NO_ANNOUNCEMENTS']->value;?>

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
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_ANNOUNCEMENT']->value;?>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="deleteId" value="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <button type="button" onclick="deleteAnnouncement()" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</button>
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
        function showDeleteModal(id) {
            $('#deleteId').attr('value', id);
            $('#deleteModal').modal().show();
        }

        function deleteAnnouncement() {
          const id = $('#deleteId').attr('value');
          if (id) {
            const response = $.post("<?php echo $_smarty_tpl->tpl_vars['DELETE_LINK']->value;?>
", { id, action: 'delete', token: "<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" });
            response.done(function() { window.location.reload(); });
          }
        }

          $(document).ready(function () {
            $("#sortable").sortable({
                start: function (event, ui) {
                    let start_pos = ui.item.index();
                    ui.item.data('startPos', start_pos);
                },
                update: function (event, ui) {
                    let announcements = $("#sortable").children();
                    let toSubmit = [];
                    announcements.each(function () {
                        toSubmit.push($(this).data().id);
                    });

                    $.ajax({
                    url: "<?php echo $_smarty_tpl->tpl_vars['REORDER_DRAG_URL']->value;?>
",
                    type: "GET",
                    data: {
                        action: "order",
                        announcements: JSON.stringify({"announcements": toSubmit})
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
