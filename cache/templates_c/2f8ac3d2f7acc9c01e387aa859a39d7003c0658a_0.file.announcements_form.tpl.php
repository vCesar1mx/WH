<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:43:17
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/announcements_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620032e5393090_69115845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f8ac3d2f7acc9c01e387aa859a39d7003c0658a' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/announcements_form.tpl',
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
function content_620032e5393090_69115845 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value;?>
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
                                <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT_TITLE']->value;?>
</h5>
                            </div>
                            <div class="col-md-3">
                                <span class="float-md-right"><a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a></span>
                            </div>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="header"><?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>
</label>
                                <input type="text" name="header" class="form-control" id="header"
                                       value="<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->header;?>
">
                            </div>
                            <div class="form-group">
                                <label for="message"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</label>
                                <textarea name="message" class="form-control"
                                          id="message"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->message;?>
</textarea>
                            </div>
                            <div class="form-group">
                                <label for="pages"><?php echo $_smarty_tpl->tpl_vars['PAGES']->value;?>
</label>
                                <select name="pages[]" id="pages" class="form-control" multiple>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PAGES_ARRAY']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value)) && in_array($_smarty_tpl->tpl_vars['page']->value['name'],$_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->pages)) {?> selected <?php }?>><?php echo ucfirst($_smarty_tpl->tpl_vars['page']->value['name']);?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="form-group backgroundColour">
                                <label for="InputBackgroundColour"><?php echo $_smarty_tpl->tpl_vars['BACKGROUND_COLOUR']->value;?>
</label>
                                <div class="input-group">
                                    <input type="text" name="background_colour" class="form-control"
                                           id="InputBackgroundColour" value="<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->background_colour;?>
">
                                    <span class="input-group-append">
                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                        </span>
                                </div>
                            </div>
                            <div class="form-group textColour">
                                <label for="InputTextColour"><?php echo $_smarty_tpl->tpl_vars['TEXT_COLOUR']->value;?>
</label>
                                <div class="input-group">
                                    <input type="text" name="text_colour" class="form-control" id="InputTextColour"
                                           value="<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->text_colour;?>
">
                                    <span class="input-group-append">
                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                        </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="icon"><?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
 <span class="badge badge-info" data-toggle="popover"
                                                                data-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ICON_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
"><i
                                                class="fa fa-question"></i></label>
                                <input type="text" name="icon" id="icon" class="form-control"
                                       placeholder="fas fa-edit icon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->icon, ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>
                            <div class="form-group">
                                <label for="icon"><?php echo $_smarty_tpl->tpl_vars['ORDER']->value;?>
</label>
                                <input type="number" step="1.00" name="order" id="order" class="form-control" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->order, ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>
                            <div class="form-group">
                                <label for="closable"><?php echo $_smarty_tpl->tpl_vars['CLOSABLE']->value;?>
</label>
                                <input id="closable" name="closable" type="checkbox" class="js-switch"
                                       value="1" <?php if ($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->closable) {?> checked<?php }?> />
                            </div>
                            <strong style="margin-bottom: 10px; display:block">Groups</strong>
                            <?php echo '<script'; ?>
>
                              var groups = [];
                              groups.push("0");
                            <?php echo '</script'; ?>
>
                            <table class="table table-responsive table-striped">
                                <thead>
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['CAN_VIEW_ANNOUNCEMENT']->value;?>
</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td onclick="toggleAll(this);"><?php echo $_smarty_tpl->tpl_vars['GUESTS']->value;?>
</td>
                                    <td><input type="hidden" name="perm-view-0" value="0" /><input
                                                onclick="colourUpdate(this);" name="perm-view-0" id="Input-view-0"
                                                value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['GUEST_PERMISSIONS']->value) {?> checked <?php }?> /></td>
                                </tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <tr>
                                        <td onclick="toggleAll(this);"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                                        <td><input type="hidden" name="perm-view-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="0" /><input
                                                    onclick="colourUpdate(this);" name="perm-view-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                                                    id="Input-view-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="1"
                                                    type="checkbox" <?php if ($_smarty_tpl->tpl_vars['GROUPS']->value[$_smarty_tpl->tpl_vars['item']->value['id']]['allowed']) {?> checked <?php }?> />
                                        </td>
                                    </tr>
                                    <?php echo '<script'; ?>
>
                                      groups.push("<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
");
                                    <?php echo '</script'; ?>
>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
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
                    <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_ANNOUNCEMENT']->value;?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['DELETE_LINK']->value;?>
" id="deleteLink" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
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
  $(function () {
    $('.backgroundColour').colorpicker({
      format: 'hex',
      'color': <?php if ($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->background_colour) {?> '<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->background_colour;?>
' <?php } else { ?>'#007BFF'<?php }?>
    });
    $('.textColour').colorpicker({
      format: 'hex',
      'color': <?php if ($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->text_colour) {?> '<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->text_colour;?>
' <?php } else { ?>'#ffffff'<?php }?>
    });
  });

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
    colourUpdate(document.getElementById('Input-view-' + group));
  }

  for (var g in groups) {
    colourUpdate(document.getElementById('Input-view-' + groups[g]));
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

</html>
<?php }
}
