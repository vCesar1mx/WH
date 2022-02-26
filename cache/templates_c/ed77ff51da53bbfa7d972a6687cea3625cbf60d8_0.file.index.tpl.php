<?php
/* Smarty version 3.1.39, created on 2022-02-06 03:32:37
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/infractions/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ff41556fb0b3_38214001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed77ff51da53bbfa7d972a6687cea3625cbf60d8' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/infractions/index.tpl',
      1 => 1644117989,
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
function content_61ff41556fb0b3_38214001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body id="page-top">
<div id="wrapper">
    <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['INFRACTIONS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['INFRACTIONS']->value;?>
</li>
                    </ol>
                </div>

                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="link_location"><?php echo $_smarty_tpl->tpl_vars['LINK_LOCATION']->value;?>
</label>
                                <select class="form-control" id="link_location" name="link_location">
                                    <option value="1"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_NAVBAR']->value;?>
</option>
                                    <option value="2"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 2) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_MORE']->value;?>
</option>
                                    <option value="3"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 3) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_FOOTER']->value;?>
</option>
                                    <option value="4"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 4) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_NONE']->value;?>
</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputPlugin"><?php echo $_smarty_tpl->tpl_vars['PLUGIN']->value;?>
</label>
                                <select class="form-control" id="inputPlugin" name="plugin">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PLUGIN_OPTIONS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['PLUGIN_VALUE']->value == $_smarty_tpl->tpl_vars['item']->value['value']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputGuestsView"><?php echo $_smarty_tpl->tpl_vars['GUESTS_VIEW']->value;?>
</label>
                                <input id="inputGuestsView" name="guests_view" type="checkbox" value="1"<?php if ($_smarty_tpl->tpl_vars['GUESTS_VIEW_VALUE']->value == 1) {?> checked<?php }?> />
                            </div>
                            <hr />
                            <strong><?php echo $_smarty_tpl->tpl_vars['DATABASE_SETTINGS']->value;?>
</strong>
                            <div class="form-group">
                                <label for="inputHost"><?php echo $_smarty_tpl->tpl_vars['ADDRESS']->value;?>
</label>
                                <input class="form-control" type="text" name="host" value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS_VALUE']->value;?>
" id="inputAddress">
                            </div>
                            <div class="form-group">
                                <label for="inputName"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['NAME_VALUE']->value;?>
" id="inputName">
                            </div>
                            <div class="form-group">
                                <label for="inputUsername"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                                <input class="form-control" type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;?>
" id="inputUsername">
                            </div>
                            <div class="form-group">
                                <label for="inputPort"><?php echo $_smarty_tpl->tpl_vars['PORT']->value;?>
</label>
                                <input class="form-control" type="text" name="port" value="<?php echo $_smarty_tpl->tpl_vars['PORT_VALUE']->value;?>
" id="inputPort">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
</label>
                                <span class="badge badge-info"><i class="fa fa-question-circle"
                                                                  data-container="body"
                                                                  data-toggle="popover"
                                                                  title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                                  data-content="<?php echo $_smarty_tpl->tpl_vars['PASSWORD_HIDDEN']->value;?>
"></i></span>
                                <input class="form-control" type="password" name="password" id="inputPassword">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                            </div>
                        </form>
                    </div>
                </div>

                <div style="height:1rem;"></div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
