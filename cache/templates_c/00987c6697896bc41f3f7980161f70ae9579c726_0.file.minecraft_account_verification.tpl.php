<?php
/* Smarty version 3.1.39, created on 2022-02-05 20:55:09
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/integrations/minecraft/minecraft_account_verification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61fee42de85c72_38671838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00987c6697896bc41f3f7980161f70ae9579c726' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/integrations/minecraft/minecraft_account_verification.tpl',
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
function content_61fee42de85c72_38671838 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['ACCOUNT_VERIFICATION']->value;?>
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
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['ACCOUNT_VERIFICATION']->value;?>
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

                        <form id="enablePremium" action="" method="post">
                            <label for="inputPremiumAccounts"><?php echo $_smarty_tpl->tpl_vars['FORCE_PREMIUM_ACCOUNTS']->value;?>
</label>
                            <input type="hidden" name="enable_premium_accounts" value="0">
                            <input id="inputPremiumAccounts" name="enable_premium_accounts" type="checkbox"
                                   class="js-switch js-check-change" <?php if ($_smarty_tpl->tpl_vars['FORCE_PREMIUM_ACCOUNTS_VALUE']->value) {?> checked<?php }?>
                                   value="1" />
                            <input type="hidden" name="premium" value="1">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                        </form>

                        <?php if ($_smarty_tpl->tpl_vars['FORCE_PREMIUM_ACCOUNTS_VALUE']->value) {?>
                            <hr />
                            <div class="card shadow border-left-primary">
                                <div class="card-body">
                                    <h5><i class="icon fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</h5>
                                    <?php echo $_smarty_tpl->tpl_vars['MCASSOC_INFO']->value;?>

                                </div>
                            </div>
                            <br />
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="use_mcassoc"><?php echo $_smarty_tpl->tpl_vars['USE_MCASSOC']->value;?>
</label>
                                    <input id="use_mcassoc" name="use_mcassoc" type="checkbox"
                                           class="js-switch" <?php if ($_smarty_tpl->tpl_vars['USE_MCASSOC_VALUE']->value) {?> checked<?php }?> />
                                </div>
                                <div class="form-group">
                                    <label for="mcassoc_key"><?php echo $_smarty_tpl->tpl_vars['MCASSOC_KEY']->value;?>
</label>
                                    <input type="text" class="form-control" name="mcassoc_key" id="mcassoc_key"
                                           value="<?php echo $_smarty_tpl->tpl_vars['MCASSOC_KEY_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['MCASSOC_KEY']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="mcassoc_instance"><?php echo $_smarty_tpl->tpl_vars['MCASSOC_INSTANCE']->value;?>
</label>
                                    <input type="text" class="form-control" name="mcassoc_instance"
                                           id="mcassoc_instance" value="<?php echo $_smarty_tpl->tpl_vars['MCASSOC_INSTANCE_VALUE']->value;?>
"
                                           placeholder="<?php echo $_smarty_tpl->tpl_vars['MCASSOC_INSTANCE']->value;?>
">
                                    <br />
                                    <p><?php echo $_smarty_tpl->tpl_vars['MCASSOC_INSTANCE_HELP']->value;?>
</p>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                                </div>
                            </form>
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

<?php echo '<script'; ?>
 type="text/javascript">
  function generateInstance() {
    var text = "";
    var possible = "abcdef0123456789";
    // thanks SO 1349426
    for (var i = 0; i < 32; i++)
      text += (possible.charAt(Math.floor(Math.random() * possible.length)));

    document.getElementById("mcassoc_instance").setAttribute("value", text);
  }
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
