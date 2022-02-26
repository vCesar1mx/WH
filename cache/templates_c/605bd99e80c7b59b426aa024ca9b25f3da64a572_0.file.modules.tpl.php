<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:36:02
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/modules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f84832918189_58543156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '605bd99e80c7b59b426aa024ca9b25f3da64a572' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/modules.tpl',
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
function content_61f84832918189_58543156 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['MODULES']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['MODULES']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <a class="btn btn-primary" style="margin-bottom: 15px;"
                           href="<?php echo $_smarty_tpl->tpl_vars['INSTALL_MODULE_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['INSTALL_MODULE']->value;?>
</a>

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <colgroup>
                                    <col width="75%">
                                    <col width="25%">
                                </colgroup>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_LIST']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</strong> <small><?php echo $_smarty_tpl->tpl_vars['module']->value['version'];?>
</small>
                                            <?php if ($_smarty_tpl->tpl_vars['module']->value['version_mismatch']) {?>
                                                &nbsp;
                                                <button role="button" class="btn btn-sm btn-warning"
                                                        data-toggle="popover" data-title="<?php echo $_smarty_tpl->tpl_vars['WARNING']->value;?>
"
                                                        data-content="<?php echo $_smarty_tpl->tpl_vars['module']->value['version_mismatch'];?>
"><i
                                                            class="fa fa-exclamation-triangle"></i></button>
                                            <?php }?>
                                            <br />
                                            <small><?php echo $_smarty_tpl->tpl_vars['module']->value['author_x'];?>
</small>
                                        </td>
                                        <td>
                                            <div class="float-md-right">
                                                <?php if ($_smarty_tpl->tpl_vars['module']->value['enabled']) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['module']->value['disable_link']) {?>
                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['module']->value['disable_link'];?>
" method="post">
                                                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                                                            <input type="submit" class="btn btn-danger btn-sm" value="<?php echo $_smarty_tpl->tpl_vars['DISABLE']->value;?>
" />
                                                        </form>
                                                    <?php } else { ?>
                                                        <a class="btn btn-warning btn-sm disabled"><i
                                                                    class="fa fa-lock"></i></a>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['module']->value['enable_link'];?>
" method="post">
                                                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                                                        <input type="submit" class="btn btn-primary btn-sm" value="<?php echo $_smarty_tpl->tpl_vars['ENABLE']->value;?>
" />
                                                    </form>
                                                <?php }?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </table>
                        </div>

                        <br />
                        <h5><?php echo $_smarty_tpl->tpl_vars['FIND_MODULES']->value;?>
</h5>
                        <br />

                        <?php if ((isset($_smarty_tpl->tpl_vars['WEBSITE_MODULES_ERROR']->value))) {?>
                            <div class="alert bg-danger text-white"><?php echo $_smarty_tpl->tpl_vars['WEBSITE_MODULES_ERROR']->value;?>
</div>
                        <?php }?>

                        <?php if (count($_smarty_tpl->tpl_vars['WEBSITE_MODULES']->value)) {?>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <colgroup>
                                        <col width="70%">
                                        <col width="20%">
                                        <col width="10%">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['STATS']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['ACTIONS']->value;?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WEBSITE_MODULES']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <tr>
                                            <td>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</strong> <small><?php echo $_smarty_tpl->tpl_vars['item']->value['latest_version'];?>
</small>
                                                <br />
                                                <small><?php echo $_smarty_tpl->tpl_vars['item']->value['author_x'];?>
</small>
                                            </td>
                                            <td>
                                                <div class="star-rating view">
                                                    <span class="far fa-star" data-rating="1"
                                                          style="color:gold;"></span>
                                                    <span class="far fa-star" data-rating="2" style="color:gold"></span>
                                                    <span class="far fa-star" data-rating="3"
                                                          style="color:gold;"></span>
                                                    <span class="far fa-star" data-rating="4"
                                                          style="color:gold;"></span>
                                                    <span class="far fa-star" data-rating="5"
                                                          style="color:gold;"></span>
                                                    <input type="hidden" name="rating" class="rating-value"
                                                           value="<?php echo round(($_smarty_tpl->tpl_vars['item']->value['rating']/10));?>
">
                                                </div>
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value['downloads_full'];?>
<br />
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value['views_full'];?>

                                            </td>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"
                                                   class="btn btn-primary btn-sm"><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
 &raquo;</a></td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } else { ?>
                            <div class="alert bg-danger text-white"><?php echo $_smarty_tpl->tpl_vars['UNABLE_TO_RETRIEVE_MODULES']->value;?>
</div>
                        <?php }?>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['VIEW_ALL_MODULES_LINK']->value;?>
" class="btn btn-primary" target="_blank"><?php echo $_smarty_tpl->tpl_vars['VIEW_ALL_MODULES']->value;?>

                            &raquo;</a>

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
  var $star_rating = $('.star-rating.view .fa-star');

  var SetRatingStar = function (type = 0) {
    if (type === 0) {
      return $star_rating.each(function () {
        if (parseInt($(this).parent().children('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
          return $(this).removeClass('far').addClass('fas');
        } else {
          return $(this).removeClass('fas').addClass('far');
        }
      });
    }
  };

  SetRatingStar();
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
