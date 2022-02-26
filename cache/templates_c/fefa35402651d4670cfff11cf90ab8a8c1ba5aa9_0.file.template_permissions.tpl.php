<?php
/* Smarty version 3.1.39, created on 2022-02-03 02:25:24
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/template_permissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61fb3d14c1e797_13110637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fefa35402651d4670cfff11cf90ab8a8c1ba5aa9' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/template_permissions.tpl',
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
function content_61fb3d14c1e797_13110637 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['TEMPLATES']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['LAYOUT']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['TEMPLATES']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-md-9">
                                <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['EDITING_TEMPLATE']->value;?>
</h5>
                            </div>
                            <div class="col-md-3">
                                <span class="float-md-right"><a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a></span>
                            </div>
                        </div>

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form role="form" action="" method="post">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <colgroup>
                                        <col span="1" style="width:70%">
                                        <col span="1" style="width:30%">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['GROUP']->value;?>
</th>
                                        <th><a href="#" onclick="selectAllPerms(); return false;"><?php echo $_smarty_tpl->tpl_vars['SELECT_ALL']->value;?>
</a> | <a
                                                    href="#"
                                                    onclick="deselectAllPerms(); return false;"><?php echo $_smarty_tpl->tpl_vars['DESELECT_ALL']->value;?>
</a></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['GUEST']->value;?>
</td>
                                        <td><input type="hidden" name="perm-use-0" value="0" /><input
                                                    onclick="colourUpdate(this);" class="js-switch" name="perm-use-0"
                                                    id="Input-use-0" value="1"
                                                    type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['GUEST_PERMISSIONS']->value->can_use_template)) && $_smarty_tpl->tpl_vars['GUEST_PERMISSIONS']->value->can_use_template == 1) {?> checked<?php }?> />
                                        </td>
                                    </tr>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_PERMISSIONS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                            <td><input type="hidden" name="perm-use-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" value="0" />
                                                <input onclick="colourUpdate(this);" class="js-switch"
                                                       name="perm-use-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                       id="Input-use-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" value="1"
                                                       type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['group']->value->can_use_template)) && $_smarty_tpl->tpl_vars['group']->value->can_use_template == 1) {?> checked<?php }?> />
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
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

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
  function selectAllPerms() {
    var table = $('table');
    table.find('tbody tr td .js-switch').each(function () {
      $(this).prop('checked', true);
      onChange(this);
    });
    return false;
  }

  function deselectAllPerms() {
    var table = $('table');
    table.find('tbody tr td .js-switch').each(function () {
      $(this).prop('checked', false);
      onChange(this);
    });
    return false;
  }

  function onChange(el) {
    if (typeof Event === 'function' || !document.fireEvent) {
      var event = document.createEvent('HTMLEvents');
      event.initEvent('change', true, true);
      el.dispatchEvent(event);
    } else {
      el.fireEvent('onchange');
    }
  }
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
