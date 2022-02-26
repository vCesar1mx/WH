<?php
/* Smarty version 3.1.39, created on 2022-02-06 07:36:13
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/integrations/minecraft/minecraft_servers_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ff7a6d930f48_69310286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b0d3a22c5fdf662a7415708dbc39da3d01d8d54' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/integrations/minecraft/minecraft_servers_edit.tpl',
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
function content_61ff7a6d930f48_69310286 (Smarty_Internal_Template $_smarty_tpl) {
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

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-9">
                                <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['EDITING_SERVER']->value;?>
</h5>
                            </div>
                            <div class="col-md-3">
                                <span class="float-md-right"><button onclick="showCancelModal()"
                                                                     class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button></span>
                            </div>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                            <div class="card shadow border-left-primary">
                                <div class="card-body">
                                    <?php echo $_smarty_tpl->tpl_vars['SERVER_INFORMATION']->value;?>

                                </div>
                            </div>
                            <br />
                            <div class="form-group">
                                <label for="InputName"><?php echo $_smarty_tpl->tpl_vars['SERVER_NAME']->value;?>
</label>
                                <input name="server_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['SERVER_NAME']->value;?>
" id="InputName"
                                       value="<?php echo $_smarty_tpl->tpl_vars['SERVER_NAME_VALUE']->value;?>
" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="InputAddress"><?php echo $_smarty_tpl->tpl_vars['SERVER_ADDRESS']->value;?>
</label> <span class="badge badge-info"><i
                                            class="fa fa-question-circle" data-container="body" data-toggle="popover"
                                            data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                            data-content="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADDRESS_INFO']->value;?>
"></i></span>
                                <input name="server_address" placeholder="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADDRESS']->value;?>
" id="InputAddress"
                                       value="<?php echo $_smarty_tpl->tpl_vars['SERVER_ADDRESS_VALUE']->value;?>
" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputPort"><?php echo $_smarty_tpl->tpl_vars['SERVER_PORT']->value;?>
</label> <span class="badge badge-info"><i
                                            class="fa fa-question-circle" data-container="body" data-toggle="popover"
                                            data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['SERVER_PORT_INFO']->value;?>
"></i></span>
                                <input name="server_port" placeholder="<?php echo $_smarty_tpl->tpl_vars['SERVER_PORT']->value;?>
" id="inputPort"
                                       value="<?php echo $_smarty_tpl->tpl_vars['SERVER_PORT_VALUE']->value;?>
" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="InputParentServer"><?php echo $_smarty_tpl->tpl_vars['PARENT_SERVER']->value;?>
</label> <span
                                        class="badge badge-info"><i class="fa fa-question-circle" data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                    data-content="<?php echo $_smarty_tpl->tpl_vars['PARENT_SERVER_INFO']->value;?>
"></i></span>
                                <select id="InputParentServer" class="form-control" name="parent_server">
                                    <option value="none" selected><?php echo $_smarty_tpl->tpl_vars['NO_PARENT_SERVER']->value;?>
</option>
                                    <?php if (count($_smarty_tpl->tpl_vars['AVAILABLE_PARENT_SERVERS']->value)) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AVAILABLE_PARENT_SERVERS']->value, 'available_server');
$_smarty_tpl->tpl_vars['available_server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['available_server']->value) {
$_smarty_tpl->tpl_vars['available_server']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['available_server']->value->id != $_smarty_tpl->tpl_vars['SERVER_ID']->value) {?>
                                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['available_server']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['PARENT_SERVER_VALUE']->value == $_smarty_tpl->tpl_vars['available_server']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['available_server']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputBungeeInstance"><?php echo $_smarty_tpl->tpl_vars['BUNGEE_INSTANCE']->value;?>
</label> <span
                                        class="badge badge-info"><i class="fa fa-question-circle" data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                    data-content="<?php echo $_smarty_tpl->tpl_vars['BUNGEE_INSTANCE_INFO']->value;?>
"></i></span>
                                <input type="hidden" name="bungee_instance" value="0">
                                <input id="inputBungeeInstance" name="bungee_instance" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['BUNGEE_INSTANCE_VALUE']->value) {?> checked<?php }?> />
                            </div>

                            <div class="form-group">
                                <label for="inputPre17"><?php echo $_smarty_tpl->tpl_vars['PRE_17']->value;?>
</label>
                                <input type="hidden" name="pre_17" value="0">
                                <input id="inputPre17" name="pre_17" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['PRE_17_VALUE']->value) {?> checked<?php }?> />
                            </div>

                            <div class="card shadow border-left-primary">
                                <div class="card-body">
                                    <?php echo $_smarty_tpl->tpl_vars['QUERY_INFORMATION']->value;?>

                                </div>
                            </div>
                            <br />
                            <div class="form-group">
                                <label for="inputStatusQueryEnabled"><?php echo $_smarty_tpl->tpl_vars['ENABLE_STATUS_QUERY']->value;?>
</label> <span
                                        class="badge badge-info"><i class="fa fa-question-circle" data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    data-html="true" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                    data-content="<?php echo $_smarty_tpl->tpl_vars['ENABLE_STATUS_QUERY_INFO']->value;?>
"></i></span>
                                <input type="hidden" name="status_query_enabled" value="0">
                                <input id="inputStatusQueryEnabled" name="status_query_enabled" type="checkbox"
                                       class="js-switch" value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLE_STATUS_QUERY_VALUE']->value) {?> checked<?php }?> />
                            </div>
                            <div class="form-group">
                                <label for="inputShowIPOnStatus"><?php echo $_smarty_tpl->tpl_vars['SHOW_IP_ON_STATUS_PAGE']->value;?>
</label> <span
                                        class="badge badge-info"><i class="fa fa-question-circle" data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    data-html="true" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                    data-content="<?php echo $_smarty_tpl->tpl_vars['SHOW_IP_ON_STATUS_PAGE_INFO']->value;?>
"></i></span>
                                <input type="hidden" name="show_ip_enabled" value="0">
                                <input id="inputShowIPOnStatus" name="show_ip_enabled" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['SHOW_IP_ON_STATUS_PAGE_VALUE']->value) {?> checked<?php }?> />
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['SERVER_QUERY_INFORMATION']->value))) {?>
                                <div class="card shadow border-left-primary">
                                    <div class="card-body">
                                        <h5><i class="icon fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</h5>
                                        <?php echo $_smarty_tpl->tpl_vars['SERVER_QUERY_INFORMATION']->value;?>

                                    </div>
                                </div>
                                <br />
                            <?php }?>
                            <div class="form-group">
                                <label for="inputQueryEnabled"><?php echo $_smarty_tpl->tpl_vars['ENABLE_PLAYER_LIST']->value;?>
</label> <span
                                        class="badge badge-info"><i class="fa fa-question-circle" data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    data-html="true" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                    data-content="<?php echo $_smarty_tpl->tpl_vars['ENABLE_PLAYER_LIST_INFO']->value;?>
"></i></span>
                                <input type="hidden" name="query_enabled" value="0">
                                <input id="inputQueryEnabled" name="query_enabled" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLE_PLAYER_LIST_VALUE']->value) {?> checked<?php }?> />
                            </div>
                            <div class="form-group">
                                <label for="inputQueryPort"><?php echo $_smarty_tpl->tpl_vars['SERVER_QUERY_PORT']->value;?>
</label> <span class="badge badge-info"><i
                                            class="fa fa-question-circle" data-container="body" data-toggle="popover"
                                            data-placement="top" data-html="true" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                            data-content="<?php echo $_smarty_tpl->tpl_vars['SERVER_QUERY_PORT_INFO']->value;?>
"></i></span>
                                <input name="query_port" placeholder="<?php echo $_smarty_tpl->tpl_vars['SERVER_QUERY_PORT']->value;?>
" id="inputQueryPort"
                                       value="<?php echo $_smarty_tpl->tpl_vars['SERVER_QUERY_PORT_VALUE']->value;?>
" class="form-control">
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
