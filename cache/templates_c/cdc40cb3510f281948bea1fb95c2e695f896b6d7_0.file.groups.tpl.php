<?php
/* Smarty version 3.1.39, created on 2022-02-01 17:11:36
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f969c87933b2_66282148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdc40cb3510f281948bea1fb95c2e695f896b6d7' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/groups.tpl',
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
function content_61f969c87933b2_66282148 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <a class="btn btn-primary" style="margin-bottom: 10px" href="<?php echo $_smarty_tpl->tpl_vars['NEW_GROUP_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NEW_GROUP']->value;?>
</a>
                        <a class="btn btn-primary" style="margin-bottom: 10px" href="<?php echo $_smarty_tpl->tpl_vars['GROUP_SYNC_LINK']->value;?>
"><i class="fas fa-external-link-alt"></i> <?php echo $_smarty_tpl->tpl_vars['GROUP_SYNC']->value;?>
</a>

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['ORDER']->value;?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['GROUP_ID']->value;?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['USERS']->value;?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['STAFF']->value;?>
</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="sortable">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_LIST']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                    <tr data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
">
                                        <td><?php echo $_smarty_tpl->tpl_vars['group']->value['order'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
</td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['edit_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</a></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['group']->value['users'];?>
</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['group']->value['staff']) {?>
                                                <i class="fas fa-check-circle text-success"></i>
                                            <?php } else { ?>
                                                <i class="fas fa-times-circle text-danger"></i>
                                            <?php }?></td>
                                        <td>
                                            <div class="float-md-right">
                                                <div class="btn btn-secondary btn-sm"><i class="fas fa-arrows-alt"></i></div>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['edit_link'];?>
" class="btn btn-warning btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>

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

<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function () {
    $("#sortable").sortable({
      start: function (event, ui) {
        let start_pos = ui.item.index();
        ui.item.data('startPos', start_pos);
      },
      update: function (event, ui) {
        let groups = $("#sortable").children();
        let toSubmit = [];
        groups.each(function () {
          toSubmit.push($(this).data().id);
        });

        $.ajax({
          url: "<?php echo $_smarty_tpl->tpl_vars['REORDER_DRAG_URL']->value;?>
",
          type: "POST",
          data: {
            token: "<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
",
            groups: JSON.stringify({"groups": toSubmit})
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
