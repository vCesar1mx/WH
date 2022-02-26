<?php
/* Smarty version 3.1.39, created on 2022-02-03 00:23:54
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/view_forum_no_discussions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61fb209abb7007_74838162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c18c77c1ed1140408178c39dc6ef092bcc279219' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/view_forum_no_discussions.tpl',
      1 => 1633866022,
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
function content_61fb209abb7007_74838162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui breadcrumb" style="margin-bottom:10px;">
  <?php $_smarty_tpl->_assignInScope('i', 1);?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMBS']->value, 'breadcrumb');
$_smarty_tpl->tpl_vars['breadcrumb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->value) {
$_smarty_tpl->tpl_vars['breadcrumb']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['i']->value != 1) {?><i class="right angle icon divider"></i><?php }?>
    <a class="section<?php if ((isset($_smarty_tpl->tpl_vars['breadcrumb']->value['active']))) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['forum_title'];?>
</a>
    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div class="ui stackable padded grid" id="forum-view">
  <div class="ui centered row">
    <div class="ui eleven wide tablet twelve wide computer column">
      <h2 class="ui header">
        <?php echo $_smarty_tpl->tpl_vars['FORUM_TITLE']->value;?>


        <?php if ($_smarty_tpl->tpl_vars['NEW_TOPIC_BUTTON']->value) {?>
          <div class="res right floated">
            <a class="ui small primary button" href="<?php echo $_smarty_tpl->tpl_vars['NEW_TOPIC_BUTTON']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NEW_TOPIC']->value;?>
</a>
          </div>
        <?php }?>
      </h2>
    </div>
    <div class="ui five wide tablet four wide computer column">
      <form class="ui form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['SEARCH_URL']->value;?>
" name="searchForm">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
        <div class="ui fluid action input">
          <input type="text" name="forum_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
">
          <button type="submit" class="ui primary icon button"><i class="search icon"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>
      
<div class="ui stackable padded grid" id="forum-view">
  <div class="ui centered row">
    <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value)) {?>
        <div class="ui five wide tablet four wide computer column">
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
      <?php if (count($_smarty_tpl->tpl_vars['SUBFORUMS']->value)) {?>
        <table class="ui fixed single line selectable unstackable small padded res table" id="subforums-table">
          <thead>
            <tr>
              <th class="nine wide"><h4><?php echo $_smarty_tpl->tpl_vars['SUBFORUM_LANGUAGE']->value;?>
</h4></th>
              <th class="seven wide"></th>
            </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUBFORUMS']->value, 'subforum');
$_smarty_tpl->tpl_vars['subforum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subforum']->value) {
$_smarty_tpl->tpl_vars['subforum']->do_else = false;
?>
            <tr>
              <td>
                <h5 class="ui header">
                  <?php if (empty($_smarty_tpl->tpl_vars['subforum']->value['icon'])) {?><i class="comment icon"></i><?php } else {
echo $_smarty_tpl->tpl_vars['subforum']->value['icon'];
}?>
                  <div class="content">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['link'];?>
" data-toggle="popup"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['title'];?>
</a>
                    <div class="ui wide popup">
                      <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['title'];?>
</h4>
                      <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['TOPICS']->value);?>
: <b><?php echo $_smarty_tpl->tpl_vars['subforum']->value['topics'];?>
</b>
                    </div>
                    <div class="sub header">
                      <?php if (!$_smarty_tpl->tpl_vars['subforum']->value['redirect']) {
echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['TOPICS']->value);?>
: <b><?php echo $_smarty_tpl->tpl_vars['subforum']->value['topics'];?>
</b><?php }?>
                    </div>
                  </div>
                </h5>
              </td>
              <td>
                <?php if (!$_smarty_tpl->tpl_vars['subforum']->value['redirect']) {?>
                  <?php if (!empty($_smarty_tpl->tpl_vars['subforum']->value['latest_post'])) {?>
                    <h5 class="ui header">
                      <img class="ui mini circular image" src="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user_avatar'];?>
">
                      <div class="content">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['link'];?>
" data-toggle="popup"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['title'];?>
</a>
                        <div class="ui wide popup">
                          <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['title'];?>
</h4>
                          <br/><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['BY']->value);?>
 <a style="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user_style'];?>
"
                                                 href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user'];?>
</a>
                          | <?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['time'];?>

                        </div>
                        <div class="sub header">
                          <a href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user_link'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user_id'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user'];?>
</a> &middot; <span data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['timeago'];?>
</span>
                        </div>
                      </div>
                    </h5>
                  <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['NO_TOPICS']->value;?>

                  <?php }?>
                <?php }?>
              </td>
            </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      <?php }?>
      <table class="ui single line selectable unstackable small padded res table" id="normal-threads">
        <thead>
          <tr>
            <th class="sixteen wide"><h4><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['TOPICS']->value);?>
</h4></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['NO_TOPICS_FULL']->value;?>

            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>
        <div class="ui five wide tablet four wide computer column">
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

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
