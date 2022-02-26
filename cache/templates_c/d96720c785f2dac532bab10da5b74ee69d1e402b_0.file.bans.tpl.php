<?php
/* Smarty version 3.1.39, created on 2022-02-06 03:35:05
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/tebex/bans.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ff41e97033a7_04728743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd96720c785f2dac532bab10da5b74ee69d1e402b' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/tebex/bans.tpl',
      1 => 1644118193,
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
function content_61ff41e97033a7_04728743 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['BANS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['BUYCRAFT']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['BANS']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <?php if ((isset($_smarty_tpl->tpl_vars['NEW_BAN']->value))) {?>
                            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['NEW_BAN_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NEW_BAN']->value;?>
</a>
                            <hr />
                        <?php }?>

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['NO_BANS']->value))) {?>
                            <p><?php echo $_smarty_tpl->tpl_vars['NO_BANS']->value;?>
</p>
                        <?php } else { ?>
                            <div class="table-responsive">
                                <table class="table table-bordered dataTables-bans">
                                    <colgroup>
                                        <col span="1" style="width: 35%;">
                                        <col span="1" style="width: 30%;">
                                        <col span="1" style="width: 20%">
                                        <col span="1" style="width: 15%">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['IP_ADDRESS']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['DATE']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BAN_LIST']->value, 'ban');
$_smarty_tpl->tpl_vars['ban']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ban']->value) {
$_smarty_tpl->tpl_vars['ban']->do_else = false;
?>
                                        <tr>
                                            <td><img src="<?php echo $_smarty_tpl->tpl_vars['ban']->value['avatar'];?>
" class="rounded" style="max-width:25px;max-height:25px;" alt="<?php echo $_smarty_tpl->tpl_vars['ban']->value['ign'];?>
" /> <span style="<?php echo $_smarty_tpl->tpl_vars['ban']->value['style'];?>
"><?php echo $_smarty_tpl->tpl_vars['ban']->value['ign'];?>
</span></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['ban']->value['ip'];?>
</td>
                                            <td data-sort="<?php echo $_smarty_tpl->tpl_vars['ban']->value['date_unix'];?>
"><?php echo $_smarty_tpl->tpl_vars['ban']->value['date'];?>
</td>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['ban']->value['link'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
</a>
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

                <!-- Spacing -->
                <div style="height:1rem;"></div>

                <!-- End Page Content -->
            </div>

            <!-- End Main Content -->
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
