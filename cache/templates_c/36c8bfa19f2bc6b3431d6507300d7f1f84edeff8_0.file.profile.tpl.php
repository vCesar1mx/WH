<?php
/* Smarty version 3.1.39, created on 2022-02-01 14:39:24
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f9461c71e169_53254002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36c8bfa19f2bc6b3431d6507300d7f1f84edeff8' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/profile.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61f9461c71e169_53254002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),1=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui segment center aligned" id="profile-header" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['BANNER']->value;?>
');background-size:cover;">
  <div class="actions">
    <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value))) {?>
      <?php if ((isset($_smarty_tpl->tpl_vars['SELF']->value))) {?>
        <a class="ui tiny primary icon button" href="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_LINK']->value;?>
"><i class="cogs icon"></i></a>
        <button type="button" class="ui tiny teal icon button" onclick="showBannerSelect()"><i class="picture icon"></i></button>
      <?php } else { ?>
        <?php if (($_smarty_tpl->tpl_vars['MOD_OR_ADMIN']->value != true)) {?>
          <a class="ui tiny negative icon button" data-toggle="modal" data-target="#modal-block"><i class="ban icon"></i></a>
        <?php }?>
        <a class="ui tiny default icon button" href="<?php echo $_smarty_tpl->tpl_vars['MESSAGE_LINK']->value;?>
" ><i class="envelope icon"></i></a>
        <?php if ((isset($_smarty_tpl->tpl_vars['RESET_PROFILE_BANNER']->value))) {?>
          <form action="<?php echo $_smarty_tpl->tpl_vars['RESET_PROFILE_BANNER_LINK']->value;?>
" method="post" style="display: inline">
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
            <button class="ui tiny negative icon button" data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['RESET_PROFILE_BANNER']->value;?>
">
              <i class="picture icon"></i>
            </button>
          </form>
        <?php }?>
      <?php }?>
    <?php }?>
  </div>
  <center>
    <img class="ui tiny circular image" src="<?php echo $_smarty_tpl->tpl_vars['AVATAR']->value;?>
">
    <h2 class="ui header">
      <span<?php if ($_smarty_tpl->tpl_vars['USERNAME_COLOUR']->value != false) {?> style="<?php echo $_smarty_tpl->tpl_vars['USERNAME_COLOUR']->value;?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</span>
      <?php if ((isset($_smarty_tpl->tpl_vars['USER_TITLE']->value))) {?>
        <div class="sub header"><?php echo $_smarty_tpl->tpl_vars['USER_TITLE']->value;?>
</div>
      <?php }?>
    </h2>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
	  <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </center>
</div>

<div class="ui stackable grid" id="profile">
  <div class="ui centered row">
      <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value)) {?>
          <div class="ui six wide tablet four wide computer column">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                  <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
      <?php }?>
      <div class="ui <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>four wide tablet eight wide computer<?php } elseif (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) || count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>ten wide tablet twelve wide computer<?php } else { ?>sixteen wide<?php }?> column">      
        <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
        <div class="ui success icon message">
          <i class="check icon"></i>
          <div class="content">
            <div class="header"><?php echo $_smarty_tpl->tpl_vars['SUCCESS_TITLE']->value;?>
</div>
            <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

          </div>
        </div>
      <?php }?>
      <?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
        <div class="ui negative icon message">
          <i class="x icon"></i>
          <div class="content">
            <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
            <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

          </div>
        </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['CAN_VIEW']->value) {?>
        <div class="ui top attached tabular menu">
          <a class="item active" data-tab="feed"><?php echo $_smarty_tpl->tpl_vars['FEED']->value;?>
</a>
          <a class="item" data-tab="about"><?php echo $_smarty_tpl->tpl_vars['ABOUT']->value;?>
</a>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TABS']->value, 'tab', false, 'key');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
            <a class="item" data-tab="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tab']->value['title'];?>
</a>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="ui bottom attached tab segment active" data-tab="feed" id="profile-feed">
          <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['FEED']->value;?>
</h3>
          <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value))) {?>
            <form class="ui reply form" action="" method="post" id="form-profile-post">
              <div class="field">
                <textarea name="post" placeholder="<?php echo $_smarty_tpl->tpl_vars['POST_ON_WALL']->value;?>
"></textarea>
              </div>
              <input type="hidden" name="action" value="new_post">
              <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
              <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
            </form>
          <?php }?>
          <?php if (count($_smarty_tpl->tpl_vars['WALL_POSTS']->value)) {?>
            <div class="ui threaded comments" id="profile-posts">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WALL_POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                <div class="comment" id="post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                  <a class="ui circular image avatar">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['nickname'];?>
">
                  </a>
                  <div class="content">
                    <a class="author" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['profile'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['nickname'];?>
</a>
                    <div class="metadata">
                      <span class="date" data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['date_rough'];?>
</span>
                    </div>
                    <div class="text forum_post">
                      <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

                    </div>
                    <div class="actions">
                      <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value))) {?>
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['user_id'] != $_smarty_tpl->tpl_vars['VIEWER_ID']->value) {?>
                          <a href="<?php if ($_smarty_tpl->tpl_vars['post']->value['reactions_link'] !== "#") {
echo $_smarty_tpl->tpl_vars['post']->value['reactions_link'];
} else { ?>#<?php }?>" data-toggle="popup">Like <?php if ((smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['post']->value['reactions']['count'],'/[^0-9]+/','') != 0)) {?>(<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['post']->value['reactions']['count'],'/[^0-9]+/','');?>
)<?php }?></a>
                       <?php }?>
                        <a data-toggle="modal" data-target="#modal-reply-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['REPLY']->value;?>
 <?php if ((smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['post']->value['replies']['count'],'/[^0-9]+/','') != 0)) {?>(<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['post']->value['replies']['count'],'/[^0-9]+/','');?>
)<?php }?></a>
                      <?php }?>
                      <?php if (((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value)) && $_smarty_tpl->tpl_vars['CAN_MODERATE']->value == 1) || $_smarty_tpl->tpl_vars['post']->value['self'] == 1) {?>
                        <a data-toggle="modal" data-target="#modal-edit-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</a>
                        <a onclick="if(confirm(confirmDelete)){$('#form-delete-post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
').submit();}"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</a>
                        <form action="" method="post" id="form-delete-post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                          <input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                          <input type="hidden" name="action" value="delete">
                          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                        </form>
                      <?php }?>
                    </div>
                  </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['replies']['replies']))) {?>
                      <div class="comments">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['replies']['replies'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                          <div class="comment">
                            <a class="ui circular image avatar">
                              <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['nickname'];?>
">
                            </a>
                            <div class="content">
                              <a class="author" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['item']->value['style'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nickname'];?>
</a>
                              <div class="metadata">
                                <span class="date" data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['item']->value['time_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['time_friendly'];?>
</span>
                              </div>
                              <div class="text forum_post">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

                              </div>
                              <div class="actions">
                                <?php if (((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value)) && $_smarty_tpl->tpl_vars['CAN_MODERATE']->value == 1) || $_smarty_tpl->tpl_vars['post']->value['self'] == 1) {?>
                                  <form class="ui form" action="" method="post" id="form-delete-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                    <input type="hidden" name="action" value="deleteReply">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                  </form>
                                  <a onclick="if(confirm(confirmDelete)){$('#form-delete-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').submit();}"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</a>
                                <?php }?>
                              </div>
                            </div>
                          </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </div>
                    <?php }?>
                </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

          <?php } else { ?>
            <div class="ui info message">
              <div class="content">
                <?php echo $_smarty_tpl->tpl_vars['NO_WALL_POSTS']->value;?>

              </div>
            </div>
          <?php }?>
        </div>
        <div class="ui bottom attached tab segment" data-tab="about" id="profile-about">
          <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['ABOUT']->value;?>
</h3>
          <div class="ui relaxed list">
            <div class="item">
              <i class="middle aligned user add icon"></i>
              <div class="middle aligned content" data-toggle="popup">
                <div class="header"><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['registered']['title'];?>
</div>
                <div class="description"><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['registered']['value'];?>
</div>
              </div>
              <div class="ui wide popup">
                <h4 class="ui header"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['registered']['title'],':','');?>
</h4>
                <br />
                <?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['registered']['tooltip'];?>

              </div>
            </div>
            <div class="item">
              <i class="middle aligned clock icon"></i>
              <div class="middle aligned content" data-toggle="popup">
                <div class="header"><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['last_seen']['title'];?>
</div>
                <div class="description"><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['last_seen']['value'];?>
</div>
              </div>
              <div class="ui wide popup">
                <h4 class="ui header"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['last_seen']['title'],':','');?>
</h4>
                <br />
                <?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['last_seen']['tooltip'];?>

              </div>
            </div>
            <div class="item">
              <i class="middle aligned eye icon"></i>
              <div class="middle aligned content">
                <div class="header"><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['profile_views']['title'];?>
</div>
                <div class="description"><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['profile_views']['value'];?>
</div>
              </div>
            </div>
          </div>
          <?php if (count($_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value)) {?>
            <div class="ui relaxed list">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value, 'field', false, 'key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                <?php if (is_numeric($_smarty_tpl->tpl_vars['key']->value)) {?>
                  <div class="item">
                  <i class="middle aligned <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'date') {?>calendar alternate<?php } else { ?>dot circle<?php }?> icon"></i>
                    <div class="middle aligned content" <?php if ($_smarty_tpl->tpl_vars['field']->value['tooltip']) {?> data-toggle="popup" <?php }?>">
                      <div class="header"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</div>
                      <div class="description"><?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
</div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['tooltip']) {?>
                    <div class="ui wide popup">
                      <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</h4>
                        <br />
                        <?php echo $_smarty_tpl->tpl_vars['field']->value['tooltip'];?>

                    </div>
                    <?php }?>
                  </div>
                <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          <?php } else { ?>
            <div class="ui info message">
              <div class="content">
                <?php echo $_smarty_tpl->tpl_vars['NO_ABOUT_FIELDS']->value;?>

              </div>
            </div>
          <?php }?>
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TABS']->value, 'tab', false, 'key');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
          <div class="ui bottom attached tab segment" data-tab="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="profile-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tab']->value['include'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php } else { ?>
        <div class="ui error message">
          <div class="content">
            <?php echo $_smarty_tpl->tpl_vars['PRIVATE_PROFILE']->value;?>

          </div>
        </div>
      <?php }?>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>
        <div class="ui six wide tablet four wide computer column">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
  </div>
</div>

<?php if (count($_smarty_tpl->tpl_vars['WALL_POSTS']->value)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WALL_POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
    <?php if (((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value)) && $_smarty_tpl->tpl_vars['CAN_MODERATE']->value == 1) || $_smarty_tpl->tpl_vars['post']->value['self'] == 1) {?>
      <div class="ui small modal" id="modal-edit-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
        <div class="header"><?php echo $_smarty_tpl->tpl_vars['EDIT_POST']->value;?>
</div>
        <div class="content">
          <form class="ui form" action="" method="post" id="form-edit-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
            <div class="field">
              <textarea name="content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
            </div>
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
            <input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
            <input type="hidden" name="action" value="edit">
          </form>
        </div>
        <div class="actions">
          <a class="ui negative button"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
          <a class="ui positive button" onclick="$('#form-edit-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
').submit();"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</a>
        </div>
      </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value))) {?>
      <div class="ui small modal" id="modal-reply-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
        <div class="header">
           <?php echo $_smarty_tpl->tpl_vars['REPLY']->value;?>

        </div>
        <div class="content">
          <form class="ui form" action="" method="post" id="form-reply-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
            <div class="field">
              <textarea name="reply" placeholder="<?php echo $_smarty_tpl->tpl_vars['NEW_REPLY']->value;?>
"></textarea>
            </div>
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
            <input type="hidden" name="post" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
            <input type="hidden" name="action" value="reply">
          </form>
        </div>
        <div class="actions">
          <a class="ui negative button"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
          <a class="ui positive button" onclick="$('#form-reply-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
').submit();"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</a>
        </div>
      </div>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value))) {?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['SELF']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['MOD_OR_ADMIN']->value != true) {?>
      <div class="ui small modal" id="modal-block">
        <div class="header">
          <?php if ((isset($_smarty_tpl->tpl_vars['BLOCK_USER']->value))) {
echo $_smarty_tpl->tpl_vars['BLOCK_USER']->value;
} else {
echo $_smarty_tpl->tpl_vars['UNBLOCK_USER']->value;
}?>
        </div>
        <div class="content">
          <?php if ((isset($_smarty_tpl->tpl_vars['CONFIRM_BLOCK_USER']->value))) {
echo $_smarty_tpl->tpl_vars['CONFIRM_BLOCK_USER']->value;
} else {
echo $_smarty_tpl->tpl_vars['CONFIRM_UNBLOCK_USER']->value;
}?>
          <form class="ui form" action="" method="post" id="form-block">
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
            <input type="hidden" name="action" value="block">
          </form>
        </div>
        <div class="actions">
          <a class="ui negative button"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
          <a class="ui positive button" onclick="$('#form-block').submit();"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</a>
        </div>
      </div>
    <?php }?>
  <?php } else { ?>
    <!-- Change background image modal -->
    <div class="ui small modal" id="imageModal">
      <div class="header">
        <?php echo $_smarty_tpl->tpl_vars['CHANGE_BANNER']->value;?>

      </div>
      <div class="content">
        <form action="" class="ui form" name="updateBanner" method="post" style="display:inline;">
          <select name="banner" class="image-picker show-html">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BANNERS']->value, 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
              <option data-img-src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['src'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['active'] == true) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['banner']->value['name'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
          <input type="hidden" name="action" value="banner">
        </form>
        <?php if ((isset($_smarty_tpl->tpl_vars['PROFILE_BANNER']->value))) {?>
          <div class="ui horizontal divider">Or <?php echo $_smarty_tpl->tpl_vars['UPLOAD_PROFILE_BANNER']->value;?>
</div>
          <center>
            <form class="ui form" action="<?php echo $_smarty_tpl->tpl_vars['UPLOAD_BANNER_URL']->value;?>
" method="post" enctype="multipart/form-data" id="form-banner">
              <input type="file" class="inputFile" name="file" id="uploadBannerInput" hidden />
              <label class="ui icon labeled default button" for="uploadBannerInput">
                <i class="ui cloud upload icon"></i> <?php echo $_smarty_tpl->tpl_vars['BROWSE']->value;?>

              </label>
              <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
              <input type="hidden" name="type" value="profile_banner">
              <button type="submit" class="ui icon labeled primary button" type="submit"><i class="ui upload icon"></i> <?php echo $_smarty_tpl->tpl_vars['UPLOAD']->value;?>
</button>
            </form>
          </center>
        <?php }?>
      </div>
      <div class="actions">
        <button class="ui negative button"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
        <button class="ui positive button" onclick="document.updateBanner.submit()"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
      </div>
    </div>
  <?php }
}?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
