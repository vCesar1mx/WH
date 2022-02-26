<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:37:45
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/forum/forums_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6200319968c1f4_48674916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25159950ced84d8cbf25a8a5c066634f8612a2a1' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/forum/forums_edit.tpl',
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
function content_6200319968c1f4_48674916 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['FORUMS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['FORUM']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['FORUMS']->value;?>
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
                                <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['FORUM_TITLE_VALUE']->value;?>
</h5>
                            </div>
                            <div class="col-md-3">
                                <span class="float-md-right"><button class="btn btn-warning"
                                                                     onclick="showCancelModal()"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button></span>
                            </div>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="InputTitle"><?php echo $_smarty_tpl->tpl_vars['FORUM_TITLE']->value;?>
</label>
                                <input type="text" name="title" class="form-control" id="InputTitle"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['FORUM_TITLE']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FORUM_TITLE_VALUE']->value;?>
">
                            </div>

                            <div class="form-group">
                                <label for="InputDescription"><?php echo $_smarty_tpl->tpl_vars['FORUM_DESCRIPTION']->value;?>
</label>
                                <textarea name="description" id="InputDescription" placeholder="<?php echo $_smarty_tpl->tpl_vars['FORUM_DESCRIPTION']->value;?>
"
                                          class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['FORUM_DESCRIPTION_VALUE']->value;?>
</textarea>
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label for="InputType"><?php echo $_smarty_tpl->tpl_vars['FORUM_TYPE']->value;?>
</label>
                                    <select class="form-control" id="InputType" name="forum_type">
                                        <option value="forum" <?php if ($_smarty_tpl->tpl_vars['FORUM_TYPE_VALUE']->value == 'forum') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['FORUM_TYPE_FORUM']->value;?>
</option>
                                        <option value="category" <?php if ($_smarty_tpl->tpl_vars['FORUM_TYPE_VALUE']->value == 'category') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['FORUM_TYPE_CATEGORY']->value;?>
</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="InputIcon"><?php echo $_smarty_tpl->tpl_vars['FORUM_ICON']->value;?>
</label>
                                <input type="text" name="icon" class="form-control" id="InputIcon"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['FORUM_ICON']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FORUM_ICON_VALUE']->value;?>
">
                            </div>

                            <div class="form-group">
                                <label for="InputParentForum"><?php echo $_smarty_tpl->tpl_vars['PARENT_FORUM']->value;?>
</label>
                                <select class="form-control" id="InputParentForum" name="parent_forum">
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['PARENT_FORUM_VALUE']->value == 0) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NO_PARENT']->value;?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PARENT_FORUM_LIST']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['id'] == $_smarty_tpl->tpl_vars['PARENT_FORUM_VALUE']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="display" value="0" />
                                <label for="InputDisplay"><?php echo $_smarty_tpl->tpl_vars['DISPLAY_TOPICS_AS_NEWS']->value;?>
</label>
                                <input name="display" id="InputDisplay" value="1" class="js-switch"
                                       type="checkbox" <?php if ($_smarty_tpl->tpl_vars['DISPLAY_TOPICS_AS_NEWS_VALUE']->value) {?> checked<?php }?> />
                            </div>

                            <div class="form-group">
                                <label for="InputForumRedirect"><?php echo $_smarty_tpl->tpl_vars['REDIRECT_FORUM']->value;?>
</label>
                                <input type="hidden" name="redirect" value="0">
                                <input name="redirect" id="InputForumRedirect" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['REDIRECT_FORUM_VALUE']->value) {?> checked<?php }?> />
                            </div>

                            <div class="form-group">
                                <label for="InputForumRedirectURL"><?php echo $_smarty_tpl->tpl_vars['REDIRECT_URL']->value;?>
</label>
                                <input placeholder="<?php echo $_smarty_tpl->tpl_vars['REDIRECT_URL']->value;?>
" name="redirect_url" id="InputForumRedirectURL"
                                       type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['REDIRECT_URL_VALUE']->value;?>
" />
                            </div>

                            <div class="form-group">
                                <label for="InputHooks"><?php echo $_smarty_tpl->tpl_vars['INCLUDE_IN_HOOK']->value;?>
 <span class="badge badge-info"
                                                                                 data-toggle="popover"
                                                                                 data-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                                 data-content="<?php echo $_smarty_tpl->tpl_vars['HOOK_SELECT_INFO']->value;?>
"><i
                                                class="fa fa-question"></i></label>
                                <select name="hooks[]" id="InputHooks" class="form-control" multiple>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOOKS_ARRAY']->value, 'hook');
$_smarty_tpl->tpl_vars['hook']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['hook']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['hook']->value['id'],$_smarty_tpl->tpl_vars['FORUM_HOOKS']->value)) {?> selected <?php }?>><?php echo ucfirst($_smarty_tpl->tpl_vars['hook']->value['name']);?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="InputDefaultLabels"><?php echo $_smarty_tpl->tpl_vars['DEFAULT_LABELS']->value;?>
 <span class="badge badge-info"
                                                                                        data-toggle="popover"
                                                                                        data-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                                        data-content="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_LABELS_INFO']->value;?>
"><i
                                                class="fa fa-question"></i></label>
                                <select name="default_labels[]" id="InputDefaultLabels" class="form-control" multiple>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AVAILABLE_DEFAULT_LABELS']->value, 'label');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['label']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['label']->value['is_enabled']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['label']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="InputPlaceholder"><?php echo $_smarty_tpl->tpl_vars['TOPIC_PLACEHOLDER']->value;?>
</label>
                                <textarea id="InputPlaceholder"
                                          name="topic_placeholder"><?php echo $_smarty_tpl->tpl_vars['TOPIC_PLACEHOLDER_VALUE']->value;?>
</textarea>
                            </div>

                            <strong style="margin-bottom: 15px; display: block"><?php echo $_smarty_tpl->tpl_vars['FORUM_PERMISSIONS']->value;?>
</strong>
                            <?php echo '<script'; ?>
>
                              var groups = [];
                              groups.push("0");
                            <?php echo '</script'; ?>
>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['GROUP']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['CAN_VIEW_FORUM']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['CAN_CREATE_TOPIC']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['CAN_EDIT_TOPIC']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['CAN_POST_REPLY']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['CAN_VIEW_OTHER_TOPICS']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['CAN_MODERATE_FORUM']->value;?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['GUEST']->value;?>
</td>
                                        <td><input type="hidden" name="perm-view-0" value="0" /><input
                                                    onclick="colourUpdate(this);" name="perm-view-0" id="Input-view-0"
                                                    value="1"
                                                    type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['GUEST_PERMISSIONS']->value->view)) && $_smarty_tpl->tpl_vars['GUEST_PERMISSIONS']->value->view == 1) {?> checked<?php }?> />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="hidden" name="perm-view_others-0" value="0" /><input
                                                    onclick="colourUpdate(this);" name="perm-view_others-0"
                                                    id="Input-view_others-0" value="1"
                                                    type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['GUEST_PERMISSIONS']->value->view_other_topics)) && $_smarty_tpl->tpl_vars['GUEST_PERMISSIONS']->value->view_other_topics == 1) {?> checked<?php }?> />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_PERMISSIONS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                        <tr>
                                            <td onclick="toggleAll(this);"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                            <td><input type="hidden" name="perm-view-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" value="0" />
                                                <input onclick="colourUpdate(this);"
                                                       name="perm-view-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                       id="Input-view-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" value="1"
                                                       type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['group']->value->view)) && $_smarty_tpl->tpl_vars['group']->value->view == 1) {?> checked<?php }?> />
                                            </td>
                                            <td><input type="hidden" name="perm-topic-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                       value="0" /><input onclick="colourUpdate(this);"
                                                                          name="perm-topic-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                                          id="Input-topic-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" value="1"
                                                                          type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['group']->value->create_topic)) && $_smarty_tpl->tpl_vars['group']->value->create_topic == 1) {?> checked<?php }?> />
                                            </td>
                                            <td><input type="hidden" name="perm-edit_topic-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                       value="0" /><input onclick="colourUpdate(this);"
                                                                          name="perm-edit_topic-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                                          id="Input-edit_topic-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                                          value="1"
                                                                          type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['group']->value->edit_topic)) && $_smarty_tpl->tpl_vars['group']->value->edit_topic == 1) {?> checked<?php }?> />
                                            </td>
                                            <td><input type="hidden" name="perm-post-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                       value="0" /><input onclick="colourUpdate(this);"
                                                                          name="perm-post-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                                          id="Input-post-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" value="1"
                                                                          type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['group']->value->create_post)) && $_smarty_tpl->tpl_vars['group']->value->create_post == 1) {?> checked<?php }?> />
                                            </td>
                                            <td><input type="hidden" name="perm-view_others-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                       value="0" /><input onclick="colourUpdate(this);"
                                                                          name="perm-view_others-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                                          id="Input-view_others-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                                          value="1"
                                                                          type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['group']->value->view_other_topics)) && $_smarty_tpl->tpl_vars['group']->value->view_other_topics == 1) {?> checked<?php }?> />
                                            </td>
                                            <td><input type="hidden" name="perm-moderate-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                       value="0" /><input onclick="colourUpdate(this);"
                                                                          name="perm-moderate-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                                          id="Input-moderate-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"
                                                                          value="1"
                                                                          type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['group']->value->moderate)) && $_smarty_tpl->tpl_vars['group']->value->moderate == 1) {?> checked<?php }?> />
                                            </td>
                                        </tr>
                                        <?php echo '<script'; ?>
>
                                          groups.push("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8', true);?>
");
                                        <?php echo '</script'; ?>
>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="hidden" name="action" value="update">
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

  function colourUpdate(that) {
    var x = that.parentElement;
    if (that.checked) {
      x.className = "bg-success";
    } else {
      x.className = "bg-danger";
    }
  }

  function toggle(group) {
    if (document.getElementById('Input-view-' + group).checked) {
      document.getElementById('Input-view-' + group).checked = false;
    } else {
      document.getElementById('Input-view-' + group).checked = true;
    }
    if (document.getElementById('Input-topic-' + group).checked) {
      document.getElementById('Input-topic-' + group).checked = false;
    } else {
      document.getElementById('Input-topic-' + group).checked = true;
    }
    if (document.getElementById('Input-edit_topic-' + group).checked) {
      document.getElementById('Input-edit_topic-' + group).checked = false;
    } else {
      document.getElementById('Input-edit_topic-' + group).checked = true;
    }
    if (document.getElementById('Input-post-' + group).checked) {
      document.getElementById('Input-post-' + group).checked = false;
    } else {
      document.getElementById('Input-post-' + group).checked = true;
    }
    if (document.getElementById('Input-view_others-' + group).checked) {
      document.getElementById('Input-view_others-' + group).checked = false;
    } else {
      document.getElementById('Input-view_others-' + group).checked = true;
    }
    if (document.getElementById('Input-moderate-' + group).checked) {
      document.getElementById('Input-moderate-' + group).checked = false;
    } else {
      document.getElementById('Input-moderate-' + group).checked = true;
    }

    colourUpdate(document.getElementById('Input-view-' + group));
    colourUpdate(document.getElementById('Input-topic-' + group));
    colourUpdate(document.getElementById('Input-edit_topic-' + group));
    colourUpdate(document.getElementById('Input-post-' + group));
    colourUpdate(document.getElementById('Input-view_others-' + group));
    colourUpdate(document.getElementById('Input-moderate-' + group));
  }

  for (var g in groups) {
    colourUpdate(document.getElementById('Input-view-' + groups[g]));
    colourUpdate(document.getElementById('Input-view_others-' + groups[g]));
    if (groups[g] != "0") {
      colourUpdate(document.getElementById('Input-topic-' + groups[g]));
      colourUpdate(document.getElementById('Input-edit_topic-' + groups[g]));
      colourUpdate(document.getElementById('Input-post-' + groups[g]));
      colourUpdate(document.getElementById('Input-moderate-' + groups[g]));
    }
  }

  // Toggle all columns in row
  function toggleAll(that) {
    var first = (($(that).parents('tr').find(':checkbox').first().is(':checked') == true) ? false : true);
    $(that).parents('tr').find(':checkbox').each(function () {
      $(this).prop('checked', first);
      colourUpdate(this);
    });
  }

  $(document).ready(function () {
    $('td').click(function () {
      let checkbox = $(this).find('input:checkbox');
      let id = checkbox.attr('id');

      if (checkbox.is(':checked')) {
        checkbox.prop('checked', false);

        colourUpdate(document.getElementById(id));
      } else {
        checkbox.prop('checked', true);

        colourUpdate(document.getElementById(id));
      }
    }).children().click(function (e) {
      e.stopPropagation();
    });
  });
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
