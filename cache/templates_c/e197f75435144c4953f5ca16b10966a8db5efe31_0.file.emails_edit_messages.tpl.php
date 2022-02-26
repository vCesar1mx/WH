<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:23:06
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/emails_edit_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62002e2a5841d2_95243140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e197f75435144c4953f5ca16b10966a8db5efe31' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/emails_edit_messages.tpl',
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
function content_62002e2a5841d2_95243140 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['EMAILS_MESSAGES']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['EMAILS']->value;?>
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

                        <form action="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" method="post">
                            <h4><?php echo $_smarty_tpl->tpl_vars['OPTIONS']->value;?>
</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="greeting"><?php echo $_smarty_tpl->tpl_vars['GREETING']->value;?>
</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['GREETING_VALUE']->value;?>
"
                                               name="greeting">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="thanks"><?php echo $_smarty_tpl->tpl_vars['THANKS']->value;?>
</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['THANKS_VALUE']->value;?>
" name="thanks">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputDefaultLanguage"><?php echo $_smarty_tpl->tpl_vars['SELECT_LANGUAGE']->value;?>
</label>
                                    <span class="badge badge-info"><i class="fa fa-question-circle"
                                                                      data-container="body" data-toggle="popover"
                                                                      title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                      data-content="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE_INFO']->value;?>
"></i></span>
                                    <div class="input-group">
                                        <select name="editing_language" class="form-control" id="inputDefaultLanguage">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value->name == $_smarty_tpl->tpl_vars['EDITING_LANGUAGE']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EMAILS_LIST']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <h4><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</h4>
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
_message"><?php echo $_smarty_tpl->tpl_vars['SUBJECT']->value;?>
</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[2]['subject'];?>
"
                                                   name="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
_subject" id="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
_subject">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
_message"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[2]['message'];?>
"
                                                   name="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
_message" id="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
_message">
                                        </div>
                                    </div>
                                    <div class="col-md-1" align="center">
                                        <button class="btn btn-success"
                                                onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
&action=preview&email=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
', 'newwindow', 'width=700,height=375'); return false;"
                                                style="margin-top: 32px;"><i class="fas fa-share-square"
                                                                             data-container="body" data-toggle="popover"
                                                                             data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['PREVIEW']->value;?>
"
                                                                             data-content="<?php echo $_smarty_tpl->tpl_vars['PREVIEW_INFO']->value;?>
"></i>
                                        </button>
                                    </div>
                                </div>
                                <br>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
