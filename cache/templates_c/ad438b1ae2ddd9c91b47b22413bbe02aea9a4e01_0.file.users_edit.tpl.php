<?php
/* Smarty version 3.1.39, created on 2022-02-01 14:39:15
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/users_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f94613b1c539_47308144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad438b1ae2ddd9c91b47b22413bbe02aea9a4e01' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/users_edit.tpl',
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
function content_61f94613b1c539_47308144 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['USERS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['USER_MANAGEMENT']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['USERS']->value;?>
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
                                <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['EDITING_USER']->value;?>
</h5>
                            </div>
                            <div class="col-md-3">
                                    <span class="float-md-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['ACTIONS']->value;?>
</button>
                                            <div class="dropdown-menu">
                                                <?php if ((isset($_smarty_tpl->tpl_vars['DELETE_USER']->value))) {?><a class="dropdown-item" href="#"
                                                                           onclick="showDeleteModal()"><?php echo $_smarty_tpl->tpl_vars['DELETE_USER']->value;?>
</a><?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['RESEND_ACTIVATION_EMAIL']->value))) {?><a class="dropdown-item"
                                                                                       href="<?php echo $_smarty_tpl->tpl_vars['RESEND_ACTIVATION_EMAIL_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RESEND_ACTIVATION_EMAIL']->value;?>
</a><?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['UPDATE_MINECRAFT_USERNAME']->value))) {?><a class="dropdown-item"
                                                                                         href="<?php echo $_smarty_tpl->tpl_vars['UPDATE_MINECRAFT_USERNAME_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['UPDATE_MINECRAFT_USERNAME']->value;?>
</a><?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['UPDATE_UUID']->value))) {?><a class="dropdown-item"
                                                                           href="<?php echo $_smarty_tpl->tpl_vars['UPDATE_UUID_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['UPDATE_UUID']->value;?>
</a><?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['VALIDATE_USER']->value))) {?><a class="dropdown-item"
                                                                             href="#" onclick="validateUser()"><?php echo $_smarty_tpl->tpl_vars['VALIDATE_USER']->value;?>
</a><?php }?>
                                            </div>
                                        </div>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                                    </span>
                            </div>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['WARNINGS']->value)) && count($_smarty_tpl->tpl_vars['WARNINGS']->value)) {?>
                            <div class="alert bg-warning text-white alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h5><i class="icon fas fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['WARNINGS_TITLE']->value;?>
</h5>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WARNINGS']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
                                        <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </div>
                        <?php }?>

                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="InputMCUsername"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                                <input type="text" name="username" class="form-control" id="InputMCUsername"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;?>
">
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['DISPLAYNAMES']->value == true) {?>
                                <div class="form-group">
                                    <label for="InputUsername"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</label>
                                    <input type="text" name="nickname" class="form-control" id="InputUsername"
                                           placeholder="<?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['NICKNAME_VALUE']->value;?>
">
                                </div>
                            <?php } else { ?>
                                <input type="hidden" name="nickname" value="<?php echo $_smarty_tpl->tpl_vars['NICKNAME_VALUE']->value;?>
">
                            <?php }?>
                            <div class="form-group">
                                <label for="InputEmail"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
</label>
                                <input type="email" name="email" class="form-control" id="InputEmail"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS_VALUE']->value;?>
">
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['UUID_LINKING']->value == true) {?>
                                <div class="form-group">
                                    <label for="InputUUID"><?php echo $_smarty_tpl->tpl_vars['UUID']->value;?>
</label>
                                    <input type="text" name="UUID" class="form-control" id="InputUUID"
                                           placeholder="<?php echo $_smarty_tpl->tpl_vars['UUID']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['UUID_VALUE']->value;?>
">
                                </div>
                            <?php }?>
                            <div class="form-group">
                                <label for="InputTitle"><?php echo $_smarty_tpl->tpl_vars['USER_TITLE']->value;?>
</label>
                                <input type="text" name="title" class="form-control" id="InputTitle"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['USER_TITLE']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['USER_TITLE_VALUE']->value;?>
">
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['DISCORD_ID_VALUE']->value))) {?>
                                <div class="form-group">
                                    <label for="InputDiscordId"><?php echo $_smarty_tpl->tpl_vars['DISCORD_ID']->value;?>
</label>
                                    <input type="text" class="form-control" id="InputDiscordId"
                                           value="<?php echo $_smarty_tpl->tpl_vars['DISCORD_ID_VALUE']->value;?>
" disabled>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['PRIVATE_PROFILE_ENABLED']->value == true) {?>
                                <div class="form-group">
                                    <label for="inputPrivateProfile"><?php echo $_smarty_tpl->tpl_vars['PRIVATE_PROFILE']->value;?>
</label>
                                    <select name="privateProfile" class="form-control" id="inputPrivateProfile">
                                        <option value="1"<?php if ($_smarty_tpl->tpl_vars['PRIVATE_PROFILE_VALUE']->value == 1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                                        <option value="0"<?php if ($_smarty_tpl->tpl_vars['PRIVATE_PROFILE_VALUE']->value == 0) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                                    </select>
                                </div>
                            <?php } else { ?>
                                <input type="hidden" name="privateProfile" value="0">
                            <?php }?>
                            <div class="form-group">
                                <label for="inputTemplate"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_TEMPLATE']->value;?>
</label>
                                <select name="template" class="form-control" id="inputTemplate">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATES']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['template']->value['active'] == true) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="InputSignature"><?php echo $_smarty_tpl->tpl_vars['SIGNATURE']->value;?>
</label>
                                <textarea style="width:100%" rows="10" name="signature"
                                          id="InputSignature"><?php echo $_smarty_tpl->tpl_vars['SIGNATURE_VALUE']->value;?>
</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputGroups"><?php echo $_smarty_tpl->tpl_vars['GROUPS']->value;?>
</label>
                                <div class="card shadow border-left-primary">
                                    <div class="card-body">
                                        <h5><i class="icon fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</h5>
                                        <?php echo $_smarty_tpl->tpl_vars['GROUPS_INFO']->value;?>

                                    </div>
                                </div>
                                <br />
                                <p><strong><?php echo $_smarty_tpl->tpl_vars['MAIN_GROUP_INFO']->value;?>
: </strong><?php echo $_smarty_tpl->tpl_vars['MAIN_GROUP']->value->name;?>
 <?php if ((isset($_smarty_tpl->tpl_vars['CANT_EDIT_GROUP']->value))) {?>
                                        <i>(<?php echo $_smarty_tpl->tpl_vars['CANT_EDIT_GROUP']->value;?>
)</i>
                                    <?php }?></p>
                                <select class="form-control" name="groups[]" id="inputGroups" multiple>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_GROUPS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"<?php if (in_array($_smarty_tpl->tpl_vars['item']->value->id,$_smarty_tpl->tpl_vars['GROUPS_VALUE']->value)) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="action" value="update">
                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
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

    <?php if ((isset($_smarty_tpl->tpl_vars['DELETE_USER']->value))) {?>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
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
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_USER']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <form action="" method="post">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
">
                            <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    <!-- End Wrapper -->
</div>

<form style="display:none" action="<?php echo $_smarty_tpl->tpl_vars['VALIDATE_USER_LINK']->value;?>
" method="post" id="validateUserForm">
    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
</form>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    <?php if ((isset($_smarty_tpl->tpl_vars['DELETE_USER']->value))) {?>
    function showDeleteModal() {
      $('#deleteModal').modal().show();
    }
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['VALIDATE_USER']->value))) {?>
    function validateUser() {
      $('#validateUserForm').submit();
    }
    <?php }
echo '</script'; ?>
>

</body>

</html>
<?php }
}
