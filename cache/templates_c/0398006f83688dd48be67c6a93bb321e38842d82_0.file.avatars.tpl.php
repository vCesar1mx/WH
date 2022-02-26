<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:20:00
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/avatars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f84470b2a708_36735636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0398006f83688dd48be67c6a93bb321e38842d82' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/avatars.tpl',
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
function content_61f84470b2a708_36735636 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['AVATARS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['AVATARS']->value;?>
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
                                <label for="inputCustomAvatars"><?php echo $_smarty_tpl->tpl_vars['CUSTOM_AVATARS']->value;?>
</label>
                                <input type="hidden" name="custom_avatars" value="0">
                                <input id="inputCustomAvatars" name="custom_avatars" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['CUSTOM_AVATARS_VALUE']->value == 1) {?> checked<?php }?> />
                            </div>
                            <div class="form-group">
                                <label for="inputDefaultAvatar"><?php echo $_smarty_tpl->tpl_vars['DEFAULT_AVATAR']->value;?>
</label>
                                <select class="form-control" name="default_avatar" id="inputDefaultAvatar">
                                    <option value="minecraft" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_AVATAR_VALUE']->value == "minecraft") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['MINECRAFT_AVATAR']->value;?>
</option>
                                    <option value="custom" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_AVATAR_VALUE']->value == "custom") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['CUSTOM_AVATAR']->value;?>
</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputMinecraftAvatarSource"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT_AVATAR_SOURCE']->value;?>
</label>
                                <select class="form-control" name="avatar_source" id="inputMinecraftAvatarSource">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MINECRAFT_AVATAR_VALUES']->value, 'url', false, 'name');
$_smarty_tpl->tpl_vars['url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['name']->value == $_smarty_tpl->tpl_vars['MINECRAFT_AVATAR_VALUE']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputAvatarPerspective"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT_AVATAR_PERSPECTIVE']->value;?>
</label>
                                <select class="form-control" name="avatar_perspective" id="inputAvatarPerspective">
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                            </div>
                        </form>

                        <hr />

                        <strong><?php echo $_smarty_tpl->tpl_vars['DEFAULT_AVATAR']->value;?>
</strong>

                        <br /><br />

                        <button class="btn btn-primary" data-toggle="modal"
                                data-target="#uploadModal"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_IMAGE']->value;?>
</button>

                        <br /><br />

                        <?php if (count($_smarty_tpl->tpl_vars['IMAGES']->value)) {?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="selectDefaultAvatar"><?php echo $_smarty_tpl->tpl_vars['SELECT_DEFAULT_AVATAR']->value;?>
</label>
                                    <select class="image-picker show-html" id="selectDefaultAvatar" name="avatar">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <option data-img-src="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                                    value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_AVATAR_IMAGE']->value == $_smarty_tpl->tpl_vars['item']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                                </div>
                            </form>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['NO_AVATARS']->value;?>

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

    <!-- Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_IMAGE']->value;?>
</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Upload modal -->
                    <form action="<?php echo $_smarty_tpl->tpl_vars['UPLOAD_FORM_ACTION']->value;?>
" class="dropzone" id="upload_avatar_dropzone">
                        <div class="dz-message" data-dz-message>
                            <span><?php echo $_smarty_tpl->tpl_vars['DRAG_FILES_HERE']->value;?>
</span>
                        </div>
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                        <input type="hidden" name="type" value="default_avatar">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="location.reload();"
                            data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Wrapper -->
</div>

<?php echo '<script'; ?>
>

const perspective_selector = document.getElementById('inputAvatarPerspective');
const source_selector = document.getElementById('inputMinecraftAvatarSource');
source_selector.addEventListener('change', () => reloadPerspectives(source_selector.value));

document.onLoad = reloadPerspectives(source_selector.value, true);

function reloadPerspectives(source, firstLoad = false) {
    removeOptions(perspective_selector);
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MINECRAFT_AVATAR_PERSPECTIVE_VALUES']->value, 'perspectives', false, 'source');
$_smarty_tpl->tpl_vars['perspectives']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['source']->value => $_smarty_tpl->tpl_vars['perspectives']->value) {
$_smarty_tpl->tpl_vars['perspectives']->do_else = false;
?>
        if ('<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
' == source) {
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perspectives']->value, 'perspective');
$_smarty_tpl->tpl_vars['perspective']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perspective']->value) {
$_smarty_tpl->tpl_vars['perspective']->do_else = false;
?>
                if (firstLoad) {
                    <?php if (strtolower($_smarty_tpl->tpl_vars['perspective']->value) == strtolower($_smarty_tpl->tpl_vars['MINECRAFT_AVATAR_PERSPECTIVE_VALUE']->value)) {?>
                        option = new Option('<?php echo ucfirst($_smarty_tpl->tpl_vars['perspective']->value);?>
', '<?php echo ucfirst($_smarty_tpl->tpl_vars['perspective']->value);?>
', true, true);
                        perspective_selector.add(option, undefined);
                    <?php } else { ?>
                        option = new Option('<?php echo ucfirst($_smarty_tpl->tpl_vars['perspective']->value);?>
', '<?php echo ucfirst($_smarty_tpl->tpl_vars['perspective']->value);?>
');
                        perspective_selector.add(option, undefined);
                    <?php }?>
                } else {
                    option = new Option('<?php echo ucfirst($_smarty_tpl->tpl_vars['perspective']->value);?>
', '<?php echo ucfirst($_smarty_tpl->tpl_vars['perspective']->value);?>
');
                    perspective_selector.add(option, undefined);
                }
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        }
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
}

function removeOptions(selectElement) {
   var i, L = selectElement.options.length - 1;
   for(i = L; i >= 0; i--) {
      selectElement.remove(i);
   }
}

<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
