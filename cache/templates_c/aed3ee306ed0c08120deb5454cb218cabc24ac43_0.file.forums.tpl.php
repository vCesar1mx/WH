<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:36:36
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/forum/forums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6200315406fd16_69746744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aed3ee306ed0c08120deb5454cb218cabc24ac43' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/forum/forums.tpl',
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
function content_6200315406fd16_69746744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/function.math.php','function'=>'smarty_function_math',),));
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

                        <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_FORUM_LINK']->value;?>
"
                           class="btn btn-primary" <?php if (count($_smarty_tpl->tpl_vars['FORUMS_ARRAY']->value)) {?> style="margin-bottom: 15px;" <?php }?>><?php echo $_smarty_tpl->tpl_vars['NEW_FORUM']->value;?>
</a>
                        <?php if (!count($_smarty_tpl->tpl_vars['FORUMS_ARRAY']->value)) {?>
                            <hr />
                        <?php }?>

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php if (count($_smarty_tpl->tpl_vars['FORUMS_ARRAY']->value)) {?>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody id="sortable">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FORUMS_ARRAY']->value, 'item', false, NULL, 'forum_array', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <tr data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                            <td<?php if ($_smarty_tpl->tpl_vars['item']->value['parent_forum']) {?> style="padding-left:<?php echo smarty_function_math(array('equation'=>"x * y",'x'=>25,'y'=>$_smarty_tpl->tpl_vars['item']->value['parent_forum_count']),$_smarty_tpl);?>
px" <?php }?>>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['edit_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['item']->value['parent_forum']) {?>
                                                <small>| <?php echo $_smarty_tpl->tpl_vars['item']->value['parent_forum'];?>
</small><?php }?><br /><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                                            </td>
                                            <td>
                                                <div class="float-md-right">
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['up_link']) {?>
                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['item']->value['up_link'];?>
" method="post" style="display: inline">
                                                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                                                            <button class="btn btn-success btn-sm"><i
                                                                        class="fas fa-chevron-up"></i></button>
                                                        </form>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['down_link']) {?>
                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['item']->value['down_link'];?>
" method="post" style="display: inline">
                                                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                                                            <button class="btn btn-warning btn-sm"><i
                                                                        class="fas fa-chevron-down"></i></button>
                                                        </form>
                                                    <?php }?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['delete_link'];?>
" class="btn btn-danger btn-sm"><i
                                                                class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } else { ?>
                            <p><?php echo $_smarty_tpl->tpl_vars['NO_FORUMS']->value;?>
</p>
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
  $(document).ready(function () {
    $("#sortable").sortable({
      start: function (event, ui) {
        let start_pos = ui.item.index();
        ui.item.data('startPos', start_pos);
      },
      update: function (event, ui) {
        let forums = $("#sortable").children();
        let toSubmit = [];
        forums.each(function () {
          toSubmit.push($(this).data().id);
        });

        $.ajax({
          url: "<?php echo $_smarty_tpl->tpl_vars['REORDER_DRAG_URL']->value;?>
",
          type: "GET",
          data: {
            action: "order",
            dir: "drag",
              forums: JSON.stringify({"forums": toSubmit})
          },
          success: function (response) {
            // Success
          },
          error: function (xhr) {
            // Error
            console.log(xhr);
          }
        });
      }
    });
  });
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
