<?php
/* Smarty version 3.1.39, created on 2022-02-06 03:34:58
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/tebex/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ff41e21ebab1_44009731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf1ae25ca2a7c6c0e81c5bc09582eb65eea995c4' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/tebex/index.tpl',
      1 => 1644118203,
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
function content_61ff41e21ebab1_44009731 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['BUYCRAFT']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['BUYCRAFT']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="inputSecretKey"><?php echo $_smarty_tpl->tpl_vars['SERVER_KEY']->value;?>
</label>
                                <span class="badge badge-info" data-html="true" data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['SERVER_KEY_INFO']->value;?>
"><i class="fas fa-question-circle"></i></span>
                                <input id="inputSecretKey" name="server_key" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['SERVER_KEY']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['SERVER_KEY_VALUE']->value;?>
">
                            </div>

                            <div class="form-group">
                                <label for="inputAllowGuests"><?php echo $_smarty_tpl->tpl_vars['ALLOW_GUESTS']->value;?>
</label>
                                <input type="checkbox" name="allow_guests" id="inputAllowGuests" class="js-switch" <?php if ($_smarty_tpl->tpl_vars['ALLOW_GUESTS_VALUE']->value) {?> checked<?php }?> />
                            </div>

                            <div class="form-group">
                                <label for="inputHomeTab"><?php echo $_smarty_tpl->tpl_vars['HOME_TAB']->value;?>
</label>
                                <input type="checkbox" name="home_tab" id="inputHomeTab" class="js-switch" <?php if ($_smarty_tpl->tpl_vars['HOME_TAB_VALUE']->value) {?> checked<?php }?> />
                            </div>

                            <div class="form-group">
                                <label for="inputStorePath"><?php echo $_smarty_tpl->tpl_vars['STORE_PATH']->value;?>
</label>
                                <input type="text" class="form-control" id="inputStorePath" name="store_path" placeholder="<?php echo $_smarty_tpl->tpl_vars['STORE_PATH']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['STORE_PATH_VALUE']->value;?>
">
                            </div>

                            <div class="form-group">
                                <label for="inputStoreContent"><?php echo $_smarty_tpl->tpl_vars['STORE_INDEX_CONTENT']->value;?>
</label>
                                <textarea id="inputStoreContent" name="store_content"><?php echo $_smarty_tpl->tpl_vars['STORE_INDEX_CONTENT_VALUE']->value;?>
</textarea>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
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

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
