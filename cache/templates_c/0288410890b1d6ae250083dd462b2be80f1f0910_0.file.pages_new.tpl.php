<?php
/* Smarty version 3.1.39, created on 2022-02-01 06:09:03
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/pages_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f8ce7f00f308_56993763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0288410890b1d6ae250083dd462b2be80f1f0910' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/pages_new.tpl',
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
function content_61f8ce7f00f308_56993763 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['CUSTOM_PAGES']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['PAGES']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CUSTOM_PAGES']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-9">
                                <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['CREATING_PAGE']->value;?>
</h5>
                            </div>
                            <div class="col-md-3">
                                    <span class="float-md-right">
                                        <button type="button" class="btn btn-warning"
                                                onclick="showCancelModal()"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                                    </span>
                            </div>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="inputTitle"><?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</label>
                                <input type="text" class="form-control" name="page_title" id="inputTitle"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE_VALUE']->value;?>
">
                            </div>
                            <div class="form-group">
                                <label for="inputURL"><?php echo $_smarty_tpl->tpl_vars['PAGE_PATH']->value;?>
</label>
                                <input type="text" class="form-control" name="page_url" id="inputURL"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['PAGE_PATH']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['PAGE_PATH_VALUE']->value;?>
">
                            </div>
                            <div class="form-group">
                                <label for="link_location"><?php echo $_smarty_tpl->tpl_vars['PAGE_LINK_LOCATION']->value;?>
</label>
                                <select class="form-control" id="link_location" name="link_location">
                                    <option value="1"><?php echo $_smarty_tpl->tpl_vars['PAGE_LINK_NAVBAR']->value;?>
</option>
                                    <option value="2"><?php echo $_smarty_tpl->tpl_vars['PAGE_LINK_MORE']->value;?>
</option>
                                    <option value="3"><?php echo $_smarty_tpl->tpl_vars['PAGE_LINK_FOOTER']->value;?>
</option>
                                    <option value="4"><?php echo $_smarty_tpl->tpl_vars['PAGE_LINK_NONE']->value;?>
</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputContent"><?php echo $_smarty_tpl->tpl_vars['PAGE_CONTENT']->value;?>
</label>
                                <textarea name="content" id="inputContent"><?php echo $_smarty_tpl->tpl_vars['PAGE_CONTENT_VALUE']->value;?>
</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputBasicPage"><?php echo $_smarty_tpl->tpl_vars['BASIC_PAGE']->value;?>
</label>
                                <input id="inputBasicPage" name="basic" type="checkbox" class="js-switch" />
                            </div>
                            <div class="form-group">
                                <label for="inputRedirect"><?php echo $_smarty_tpl->tpl_vars['PAGE_REDIRECT']->value;?>
</label>
                                <input id="inputRedirect" name="redirect_page" type="checkbox" class="js-switch" />
                            </div>
                            <div class="form-group">
                                <label for="inputRedirectLink"><?php echo $_smarty_tpl->tpl_vars['PAGE_REDIRECT_TO']->value;?>
</label>
                                <input type="text" class="form-control" id="inputRedirectLink" name="redirect_link"
                                       placeholder="<?php echo $_smarty_tpl->tpl_vars['PAGE_REDIRECT_TO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['PAGE_REDIRECT_TO_VALUE']->value;?>
">
                            </div>
                            <div class="form-group">
                                <label for="inputTarget"><?php echo $_smarty_tpl->tpl_vars['TARGET']->value;?>
</label>
                                <input id="inputTarget" name="target" type="checkbox" class="js-switch" />
                            </div>
                            <div class="form-group">
                                <label for="inputUnsafeHTML"><?php echo $_smarty_tpl->tpl_vars['UNSAFE_HTML']->value;?>
</label> <span data-toggle="popover"
                                                                                          data-content="<?php echo $_smarty_tpl->tpl_vars['UNSAFE_HTML_WARNING']->value;?>
"
                                                                                          class="badge badge-warning"><i
                                            class="fas fa-exclamation-triangle"></i></span>
                                <input id="inputUnsafeHTML" name="unsafe_html" type="checkbox" class="js-switch" />
                            </div>
                            <div class="form-group">
                                <label for="inputSitemap"><?php echo $_smarty_tpl->tpl_vars['INCLUDE_IN_SITEMAP']->value;?>
</label>
                                <input id="inputSitemap" name="sitemap" type="checkbox" class="js-switch" />
                            </div>
                            <hr />
                            <strong><?php echo $_smarty_tpl->tpl_vars['PAGE_PERMISSIONS']->value;?>
</strong>
                            <?php echo '<script'; ?>
>
                              var groups = [];
                              groups.push("0");
                            <?php echo '</script'; ?>
>
                            <table class="table table-responsive table-striped">
                                <thead>
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['GROUP']->value;?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['VIEW_PAGE']->value;?>
</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td onclick="toggleAll(this);"><?php echo $_smarty_tpl->tpl_vars['GUESTS']->value;?>
</td>
                                    <td><input type="hidden" name="perm-view-0" value="0" /><input
                                                onclick="colourUpdate(this);" name="perm-view-0" id="Input-view-0"
                                                value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['GUEST_PERMS']->value == 1) {?> checked<?php }?> /></td>
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
                                                    type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['view'] == 1) {?> checked<?php }?> /></td>
                                    </tr>
                                    <?php echo '<script'; ?>
>groups.push("<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
");<?php echo '</script'; ?>
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

</html><?php }
}
