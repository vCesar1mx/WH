<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:42:40
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/forum/labels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620032c03221b7_88714509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0714f411eca8f50626d6c7dad84e6c6198cc8227' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/forum/labels.tpl',
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
function content_620032c03221b7_88714509 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['LABELS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['FORUM']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['LABELS']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_LABEL_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['NEW_LABEL']->value;?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['LABEL_TYPES_LINK']->value;?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['LABEL_TYPES']->value;?>
</a>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php if (count($_smarty_tpl->tpl_vars['ALL_LABELS']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_LABELS']->value, 'label', false, NULL, 'label_list', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_label_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_label_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_label_list']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_label_list']->value['total'];
?>
                                <div class="row">
                                    <div class="col-md-9">
                                        <?php echo $_smarty_tpl->tpl_vars['label']->value['name'];?>
<br />
                                        <?php echo $_smarty_tpl->tpl_vars['label']->value['enabled_forums'];?>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="float-md-right">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['label']->value['edit_link'];?>
" class="btn btn-info btn-sm"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</a>
                                            <button onclick="showDeleteModal('<?php echo $_smarty_tpl->tpl_vars['label']->value['delete_link'];?>
')"
                                                    class="btn btn-danger btn-sm"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</button>
                                        </div>
                                    </div>
                                </div>
                                <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_label_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_label_list']->value['last'] : null)) {?>
                                    <hr />
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <p><?php echo $_smarty_tpl->tpl_vars['NO_LABELS']->value;?>
</p>
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
                    <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE']->value;?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                    <form action="" id="deleteForm" method="post" style="display: inline">
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
    $('#deleteForm').attr('action', link);
    $('#deleteModal').modal().show();
  }
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
