<?php
/* Smarty version 3.1.39, created on 2022-02-08 22:25:31
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/integrations/minecraft/placeholders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6202eddbe5fc18_54319929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52c3d6b976bcea38e1ad3d7e0bd949c91a4d4ccd' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/integrations/minecraft/placeholders.tpl',
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
function content_6202eddbe5fc18_54319929 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['PLACEHOLDERS']->value;?>
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
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['PLACEHOLDERS']->value;?>
</li>           
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['PLACEHOLDERS_INFO']->value;?>
</p>
                                </div>
                            </div>
                            <?php if (count($_smarty_tpl->tpl_vars['ALL_PLACEHOLDERS']->value)) {?>
                                <hr />
                            <?php } else { ?>
                                <br />
                            <?php }?>

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php if (count($_smarty_tpl->tpl_vars['ALL_PLACEHOLDERS']->value)) {?>
                            <form action="" method="POST">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th><?php echo $_smarty_tpl->tpl_vars['SERVER_ID']->value;?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</th>
                                                <th>
                                                    <?php echo $_smarty_tpl->tpl_vars['FRIENDLY_NAME']->value;?>

                                                    <span class="badge badge-info" style="margin-right:10px"><i
                                                            class="fas fa-question-circle" data-container="body"
                                                            data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                            data-content="<?php echo $_smarty_tpl->tpl_vars['FRIENDLY_NAME_INFO']->value;?>
"></i></span>
                                                </th>
                                                <th class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['SHOW_ON_PROFILE']->value;?>

                                                    <span class="badge badge-info" style="margin-right:10px"><i
                                                            class="fas fa-question-circle" data-container="body"
                                                            data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                            data-content="<?php echo $_smarty_tpl->tpl_vars['SHOW_ON_PROFILE_INFO']->value;?>
"></i></span>
                                                </th>
                                                <th class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['SHOW_ON_FORUM']->value;?>

                                                    <span class="badge badge-info" style="margin-right:10px"><i
                                                            class="fas fa-question-circle" data-container="body"
                                                            data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                            data-content="<?php echo $_smarty_tpl->tpl_vars['SHOW_ON_FORUM_INFO']->value;?>
"></i></span>
                                                </th>
                                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LEADERBOARD_ENABLED']->value;?>
</th>
                                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LEADERBOARD_SETTINGS']->value;?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_PLACEHOLDERS']->value, 'placeholder');
$_smarty_tpl->tpl_vars['placeholder']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['placeholder']->value) {
$_smarty_tpl->tpl_vars['placeholder']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
</td>
                                                    <td><code><?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
</code></td>
                                                    <td>
                                                        <input type="text" class="form-control" name="friendly_name-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
-server-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->friendly_name;?>
">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="js-switch" name="show_on_profile-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
-server-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
" <?php if ($_smarty_tpl->tpl_vars['placeholder']->value->show_on_profile == 1) {?> checked <?php }?>>
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="js-switch" name="show_on_forum-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
-server-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
" <?php if ($_smarty_tpl->tpl_vars['placeholder']->value->show_on_forum == 1) {?> checked <?php }?>>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php if ($_smarty_tpl->tpl_vars['placeholder']->value->leaderboard == 1) {?>
                                                            <i class="fa fa-check-circle text-success"></i>
                                                        <?php } else { ?>
                                                            <i class="fa fa-times-circle text-danger"></i>
                                                        <?php }?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-secondary text-white" href="<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->leaderboard_settings_url;?>
">
                                                            <i class="fas fa-cog"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>

                                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                            </form>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['NO_PLACEHOLDERS']->value;?>

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
