<?php
/* Smarty version 3.1.39, created on 2022-02-01 14:39:11
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f9460f3952a0_48979999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07cf9e7a6542453c1206bdacb1abe5ddb46aea2c' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/core/user.tpl',
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
function content_61f9460f3952a0_48979999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Success and Error Alerts -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="profile-user-img rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['AVATAR']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
">
                                </div>

                                <h4 class="text-center" style="<?php echo $_smarty_tpl->tpl_vars['USER_STYLE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</h4>

                                <p class="text-muted text-center"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_GROUPS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
echo $_smarty_tpl->tpl_vars['item']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b><?php echo $_smarty_tpl->tpl_vars['REGISTERED']->value;?>
</b><br /><?php echo $_smarty_tpl->tpl_vars['REGISTERED_VALUE']->value;?>

                                    </li>
                                    <li class="list-group-item">
                                        <b><?php echo $_smarty_tpl->tpl_vars['LAST_SEEN']->value;?>
</b><br /><span data-toggle="tooltip"
                                                                       data-title="<?php echo $_smarty_tpl->tpl_vars['LAST_SEEN_FULL_VALUE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LAST_SEEN_SHORT_VALUE']->value;?>
</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active"><?php echo $_smarty_tpl->tpl_vars['DETAILS']->value;?>
</a>
                                    </li>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               href="<?php echo smarty_modifier_replace((smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['link'],'{id}',$_smarty_tpl->tpl_vars['USER_ID']->value)),'{username}',$_smarty_tpl->tpl_vars['USERNAME']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                <hr />
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME_LABEL']->value;?>
</label>
                                            <input id="username" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
"
                                                   readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nickname"><?php echo $_smarty_tpl->tpl_vars['NICKNAME_LABEL']->value;?>
</label>
                                            <input id="nickname" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
"
                                                   readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="title"><?php echo $_smarty_tpl->tpl_vars['USER_TITLE_LABEL']->value;?>
</label>
                                            <input id="title" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['USER_TITLE']->value;?>
"
                                                   readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="uuid"><?php echo $_smarty_tpl->tpl_vars['UUID_LABEL']->value;?>
</label>
                                            <input id="uuid" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['UUID']->value;?>
" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="language"><?php echo $_smarty_tpl->tpl_vars['LANGUAGE_LABEL']->value;?>
</label>
                                            <input id="language" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
"
                                                   readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="timezone"><?php echo $_smarty_tpl->tpl_vars['TIMEZONE_LABEL']->value;?>
</label>
                                            <input id="timezone" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['TIMEZONE']->value;?>
"
                                                   readonly>
                                        </div>
                                    </div>
                                </div>
                                <?php if ((isset($_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value)) || (isset($_smarty_tpl->tpl_vars['LAST_IP']->value))) {?>
                                <div class="form-group">
                                    <div class="row">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value)) && (isset($_smarty_tpl->tpl_vars['LAST_IP']->value))) {?>
                                        <div class="col-md-6">
                                            <?php } else { ?>
                                            <div class="col-md-12">
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value))) {?>
                                                    <label for="email"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS_LABEL']->value;?>
</label>
                                                    <input id="email" type="email" class="form-control"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
" readonly>
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value)) && (isset($_smarty_tpl->tpl_vars['LAST_IP']->value))) {?>
                                            </div>
                                            <div class="col-md-6">
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['LAST_IP']->value))) {?>
                                                    <label for="last_ip"><?php echo $_smarty_tpl->tpl_vars['LAST_IP_LABEL']->value;?>
</label>
                                                    <input id="last_ip" type="text" class="form-control"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['LAST_IP']->value;?>
" readonly>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
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
