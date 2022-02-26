<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:17:06
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f843c2d6f713_71484483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44f9473baf425f13787b72c862638634fe60918a' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/navbar.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f843c2d6f713_71484483 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui vertical inverted sidebar menu left" id="toc">
  <div class="item">
    <h3><?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
</h3>
  </div>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
      <div class="item">
        <div class="header"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <span class="icon"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
</span></div>
        <div class="menu">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
            <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
</a>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    <?php } else { ?>
      <a class="item<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div class="pusher">
  <div id="wrapper">
    <div class="ui secondary <?php echo $_smarty_tpl->tpl_vars['DEFAULT_REVAMP_NAVBAR_EXTRA_CLASSES']->value;?>
 small menu" id="navbar">
      <div class="ui container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
          <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
            <div class="ui pointing dropdown link item">
              <span class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span> <i class="dropdown icon"></i>
              <div class="menu">
                <div class="header"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                  <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['separator']))) {?>
                    <div class="divider"></div>
                  <?php } else { ?>
                    <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
</a>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
          <?php } else { ?>
            <a class="item<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <div class="right menu">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_SECTION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
              <?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?>
                <a class="ui medium image label" data-toggle="popup" data-position="bottom right" id="button-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
              <?php } else { ?>
                <a class="ui small default icon button" data-toggle="popup" data-position="bottom right" id="button-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
</a>
              <?php }?>
              <div class="ui wide basic popup">
                <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h4>
                <div class="ui relaxed link list" id="list-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['separator']))) {?>
                      <div class="ui divider"></div>
                    <?php } else { ?>
                      <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
</a>
                    <?php }?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['meta'])) {?>
                  <div class="ui link list">
                    <div class="ui divider"></div>
                    <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['meta'];?>
</a>
                  </div>
                <?php }?>
              </div>
            <?php } else { ?>
              <?php if (($_smarty_tpl->tpl_vars['name']->value == "panel")) {?>
                <a class="ui small primary icon button" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
</a>
              <?php } elseif (($_smarty_tpl->tpl_vars['name']->value == "register")) {?>
                <a class="ui small primary button" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
              <?php } else { ?>
                <a class="ui small default button" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
              <?php }?>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div>

    <div class="ui masthead"<?php if ((isset($_smarty_tpl->tpl_vars['BANNER_IMAGE']->value))) {?> style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['BANNER_IMAGE']->value;?>
')"<?php }?>>
      <div class="ui container">
        <div class="ui stackable grid">
          <div class="ui middle aligned row">
            <div class="eight wide column">
              <h1><?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
</h1>
            </div>
            <div class="eight wide column">
              <?php if ((isset($_smarty_tpl->tpl_vars['MINECRAFT']->value)) && (isset($_smarty_tpl->tpl_vars['SERVER_QUERY']->value))) {?>
                <div class="connect-server">
                  <?php if ((isset($_smarty_tpl->tpl_vars['SERVER_QUERY']->value['status_value'])) && ($_smarty_tpl->tpl_vars['SERVER_QUERY']->value['status_value'] == 1)) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['SERVER_QUERY']->value['status_full']))) {?>
                      <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['SERVER_QUERY']->value['status_full'];?>
</h4>
                    <?php } else { ?>
                      <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['SERVER_QUERY']->value['x_players_online'];?>
</h4>
                    <?php }?>
                  <?php } else { ?>
                    <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['SERVER_OFFLINE']->value;?>
</h4>
                  <?php }?>
                  <?php if ((isset($_smarty_tpl->tpl_vars['CLICK_TO_COPY_TOOLTIP']->value))) {?>
                    <h4 class="ui header">
                      <span onclick="copy('#ip')" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['CLICK_TO_COPY_TOOLTIP']->value;?>
" data-variation="mini" data-inverted="" data-position="bottom center"><?php echo $_smarty_tpl->tpl_vars['CONNECT_WITH']->value;?>
</span>
                    </h4>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  <div class="ui container">

    <?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {?>
      <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value == true) {?>
        <div class="ui negative icon message" id="update-message">
      <?php } else { ?>
        <div class="ui info icon message" id="update-message">
          <i class="close icon"></i>
      <?php }?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['UPDATE_LINK']->value;?>
">
        <i class="download icon"></i>
      </a>
        <div class="content">
          <div class="header"><?php echo $_smarty_tpl->tpl_vars['NEW_UPDATE']->value;?>
</div>
          <ul class="list">
            <li><?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['NEW_VERSION']->value;?>
</li>
          </ul>
        </div>
      </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value)) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value, 'ANNOUNCEMENT');
$_smarty_tpl->tpl_vars['ANNOUNCEMENT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value) {
$_smarty_tpl->tpl_vars['ANNOUNCEMENT']->do_else = false;
?>
        <div class="ui icon message announcement" id="announcement-<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->id;?>
" style="background-color:<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->background_colour;?>
; color:<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->text_colour;?>
">
          <?php if ($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->closable) {?><i class="close icon"></i><?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->icon))) {?>
           <i class="<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->icon;?>
"></i>
          <?php }?>
          <div class="content">
            <div class="header"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->header;?>
</div>
            <p><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->message);?>
</p>
          </div>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['MUST_VALIDATE_ACCOUNT']->value))) {?>
      <div class="ui message">
        <?php echo $_smarty_tpl->tpl_vars['MUST_VALIDATE_ACCOUNT']->value;?>

      </div>
    <?php }
}
}
