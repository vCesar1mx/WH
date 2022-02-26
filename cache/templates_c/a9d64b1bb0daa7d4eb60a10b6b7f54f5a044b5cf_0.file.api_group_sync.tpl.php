<?php
/* Smarty version 3.1.39, created on 2022-02-08 22:18:39
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/api_group_sync.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6202ec3f25a3b5_92905645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d64b1bb0daa7d4eb60a10b6b7f54f5a044b5cf' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/api_group_sync.tpl',
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
function content_6202ec3f25a3b5_92905645 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['API']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['API']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <div class="card shadow border-left-primary">
                            <div class="card-body">
                                <h5><i class="icon fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</h5>
                                <?php echo $_smarty_tpl->tpl_vars['GROUP_SYNC_INFO']->value;?>

                            </div>
                        </div>
                        <br />

                        <?php if (count($_smarty_tpl->tpl_vars['GROUP_SYNC_VALUES']->value)) {?>
                            <h5><?php echo $_smarty_tpl->tpl_vars['EXISTING_RULES']->value;?>
</h5>
                            <form action="" method="post">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_SYNC_VALUES']->value, 'group_sync');
$_smarty_tpl->tpl_vars['group_sync']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_sync']->value) {
$_smarty_tpl->tpl_vars['group_sync']->do_else = false;
?>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="inputIngame"><?php echo $_smarty_tpl->tpl_vars['INGAME_GROUP_NAME']->value;?>
</label>
                                                <?php if (count($_smarty_tpl->tpl_vars['INGAME_GROUPS']->value)) {?>
                                                    <select name="ingame_group[<?php echo $_smarty_tpl->tpl_vars['group_sync']->value['id'];?>
]" class="form-control" id="inputIngame">
                                                        <option value="0" <?php ob_start();
echo $_smarty_tpl->tpl_vars['group_sync']->value['ingame'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == NULL) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NONE']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
)</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INGAME_GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['group_sync']->value['ingame'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == $_smarty_tpl->tpl_vars['group']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                <?php } else { ?>
                                                    <p class="text-muted" style="padding-top: 5px"><?php echo $_smarty_tpl->tpl_vars['GROUP_SYNC_PLUGIN_NOT_SET_UP']->value;?>
</p>
                                                    <input name="ingame_group[<?php echo $_smarty_tpl->tpl_vars['group_sync']->value['id'];?>
]"
                                                           type="hidden" id="inputIngame"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['group_sync']->value['ingame'];?>
">
                                                <?php }?>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputDiscord"><?php echo $_smarty_tpl->tpl_vars['DISCORD_ROLE_ID']->value;?>
</label>
                                                <?php if (count($_smarty_tpl->tpl_vars['DISCORD_GROUPS']->value)) {?>
                                                    <select name="discord_role[<?php echo $_smarty_tpl->tpl_vars['group_sync']->value['id'];?>
]" class="form-control" id="inputDiscord">
                                                        <option value="0" <?php ob_start();
echo $_smarty_tpl->tpl_vars['group_sync']->value['discord'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == NULL) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NONE']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
)</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DISCORD_GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['group_sync']->value['discord'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == $_smarty_tpl->tpl_vars['group']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>

                                                                (<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
)
                                                            </option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                <?php } else { ?>
                                                    <p class="text-muted" style="padding-top: 5px"><?php echo $_smarty_tpl->tpl_vars['DISCORD_INTEGRATION_NOT_SETUP']->value;?>
</p>
                                                    <input name="discord_role[<?php echo $_smarty_tpl->tpl_vars['group_sync']->value['id'];?>
]"
                                                           type="hidden" id="inputDiscord"
                                                           value="0">
                                                <?php }?>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="inputWebsite"><?php echo $_smarty_tpl->tpl_vars['WEBSITE_GROUP']->value;?>
</label>
                                                <select name="website_group[<?php echo $_smarty_tpl->tpl_vars['group_sync']->value['id'];?>
]" class="form-control"
                                                        id="inputWebsite">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['group_sync']->value['website'] == $_smarty_tpl->tpl_vars['group']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                            <div class="col-md-1">
                                                <div style="height:32px"></div>
                                                <button type="button" onclick="deleteGroupSync('<?php echo $_smarty_tpl->tpl_vars['group_sync']->value['id'];?>
')" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="hidden" name="action" value="update">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                                </div>
                            </form>
                            <hr />
                        <?php }?>

                        <h5><?php echo $_smarty_tpl->tpl_vars['NEW_RULE']->value;?>
</h5>
                        <form action="" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="inputIngame"><?php echo $_smarty_tpl->tpl_vars['INGAME_GROUP_NAME']->value;?>
</label>
                                        <?php if (count($_smarty_tpl->tpl_vars['INGAME_GROUPS']->value)) {?>
                                            <select name="ingame_rank_name" class="form-control" id="inputIngame">
                                                <option value="0"><?php echo $_smarty_tpl->tpl_vars['NONE']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
)</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INGAME_GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        <?php } else { ?>
                                            <p class="text-muted" style="padding-top: 5px"><?php echo $_smarty_tpl->tpl_vars['GROUP_SYNC_PLUGIN_NOT_SET_UP']->value;?>
</p>
                                            <input name="ingame_rank_name" type="hidden" id="inputIngame">
                                        <?php }?>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputDiscord"><?php echo $_smarty_tpl->tpl_vars['DISCORD_ROLE_ID']->value;?>
</label>
                                        <?php if (count($_smarty_tpl->tpl_vars['DISCORD_GROUPS']->value)) {?>
                                            <select name="discord_role_id" class="form-control" id="inputDiscord">
                                                <option value="0"><?php echo $_smarty_tpl->tpl_vars['NONE']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
)</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DISCORD_GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
)</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        <?php } else { ?>
                                            <p class="text-muted" style="padding-top: 5px"><?php echo $_smarty_tpl->tpl_vars['DISCORD_INTEGRATION_NOT_SETUP']->value;?>
</p>
                                            <input class="form-control" name="discord_role_id" type="hidden"
                                                   id="inputDiscord" value="0">
                                        <?php }?>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputWebsite"><?php echo $_smarty_tpl->tpl_vars['WEBSITE_GROUP']->value;?>
</label>
                                        <select name="website_group" class="form-control" id="inputWebsite">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="hidden" name="action" value="create">
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
    function deleteGroupSync(id) {
      const response = $.post("<?php echo $_smarty_tpl->tpl_vars['DELETE_LINK']->value;?>
", { id, action: 'delete', token: "<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" });
      response.done(function() { window.location.reload(); })
    }
<?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
