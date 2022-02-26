<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:20:17
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/profile_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f84481a3ad45_12098572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd45d38195e32ac4be631404a016f2009b8a79a07' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/profile_fields.tpl',
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
function content_61f84481a3ad45_12098572 (Smarty_Internal_Template $_smarty_tpl) {
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

                        <a class="btn btn-primary" <?php if (count($_smarty_tpl->tpl_vars['FIELDS']->value)) {?>style="margin-bottom: 15px"
                           <?php }?>href="<?php echo $_smarty_tpl->tpl_vars['NEW_FIELD_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NEW_FIELD']->value;?>
</a>
                        <?php if (!count($_smarty_tpl->tpl_vars['FIELDS']->value)) {?>
                            <hr />
                        <?php }?>

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php if (count($_smarty_tpl->tpl_vars['FIELDS']->value)) {?>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['REQUIRED']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['EDITABLE']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['PUBLIC']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['FORUM_POSTS']->value;?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                                        <tr>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['field']->value['edit_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</a></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['field']->value['type'];?>
</td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['field']->value['required'] == 1) {?>
                                                    <i class="fa fa-check-circle text-success"></i>
                                                <?php } else { ?>
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                <?php }?></td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['field']->value['editable'] == 1) {?>
                                                    <i class="fa fa-check-circle text-success"></i>
                                                <?php } else { ?>
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                <?php }?></td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['field']->value['public'] == 1) {?>
                                                    <i class="fa fa-check-circle text-success"></i>
                                                <?php } else { ?>
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                <?php }?></td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['field']->value['forum_posts'] == 1) {?>
                                                    <i class="fa fa-check-circle text-success"></i>
                                                <?php } else { ?>
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                <?php }?></td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['NO_FIELDS']->value;?>

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

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
