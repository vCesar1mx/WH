<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:19:42
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/seo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f8445e9707d1_42588491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d2de90525af691ab7d21adb06d6b37e83adfb96' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/seo.tpl',
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
function content_61f8445e9707d1_42588491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['SEO']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['SEO']->value;?>
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

                        <h4><?php echo $_smarty_tpl->tpl_vars['GOOGLE_ANALYTICS']->value;?>
</h4>
                        <p><?php echo $_smarty_tpl->tpl_vars['GOOGLE_ANALYTICS_HELP']->value;?>
</p>

                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="analyticsid" id="inputAnalyticsId"
                                       placeholder="Google Analytics ID" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_ANALYTICS_VALUE']->value;?>
">
                            </div>
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="type" value="google_analytics">
                            <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                        </form>

                        <hr />

                        <h4><?php echo $_smarty_tpl->tpl_vars['SITEMAP']->value;?>
</h4>
                        <?php if ((isset($_smarty_tpl->tpl_vars['SITEMAP_LAST_GENERATED']->value))) {?>
                            <p><?php echo $_smarty_tpl->tpl_vars['SITEMAP_LAST_GENERATED']->value;?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['LINK']->value;?>
<br /><code><?php echo $_smarty_tpl->tpl_vars['SITEMAP_FULL_LINK']->value;?>
</code></p>
                            <form action="" method="post">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="hidden" name="type" value="sitemap">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['GENERATE']->value;?>
">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['SITEMAP_LINK']->value;?>
" class="btn btn-primary" download
                                   style="color:#fff;text-decoration:none"><?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_SITEMAP']->value;?>
</a>
                            </form>
                        <?php } else { ?>
                            <p><?php echo $_smarty_tpl->tpl_vars['SITEMAP_NOT_GENERATED']->value;?>
</p>
                            <form action="" method="post">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="hidden" name="type" value="sitemap">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['GENERATE']->value;?>
">
                            </form>
                        <?php }?>

                        <hr />

                        <h4 style="display:inline;"><?php echo $_smarty_tpl->tpl_vars['PAGE_METADATA']->value;?>
</h4>
                        <div class="table-responsive">
                            <table class="table table-striped dataTables-pages">
                                <thead>
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PAGE_LIST']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <tr>
                                        <td><a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['EDIT_LINK']->value,'{x}',$_smarty_tpl->tpl_vars['item']->value['id']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></td>
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

</body>

</html>
<?php }
}
