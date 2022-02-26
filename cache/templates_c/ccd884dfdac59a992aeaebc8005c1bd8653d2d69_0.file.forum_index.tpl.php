<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:17:34
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/forum/forum_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f843def1e9b2_36162501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccd884dfdac59a992aeaebc8005c1bd8653d2d69' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/forum/forum_index.tpl',
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
function content_61f843def1e9b2_36162501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui breadcrumb" style="margin-bottom:10px;">
    <a class="section active" href="<?php echo $_smarty_tpl->tpl_vars['BREADCRUMB_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['BREADCRUMB_TEXT']->value;?>
</a>
</div>

<div class="ui stackable padded grid" id="forum-index">
    <div class="ui centered row">
        <div class="ui eleven wide tablet twelve wide computer column">
            <h2 class="ui header">
                <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

            </h2>
        </div>

        <div class="ui five wide tablet four wide computer column">
            <form class="ui form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['SEARCH_URL']->value;?>
" name="searchForm">
                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                <div class="ui fluid action input">
                    <input type="text" name="forum_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
" minlength="3" maxlength="128">
                    <button type="submit" class="ui primary icon button"><i class="search icon"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="ui stackable padded grid" id="forum-index">
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
      <div class="ui <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>four wide tablet eight wide computer<?php } elseif (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) || count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>ten wide tablet twelve wide computer<?php } else { ?>sixteen wide<?php }?> column">            <?php if ((isset($_smarty_tpl->tpl_vars['SPAM_INFO']->value))) {?>
                <div class="ui warning icon message">
                    <i class="exclamation icon"></i>
                    <div class="content">
                        <div class="header"><?php echo $_smarty_tpl->tpl_vars['FORUM_SPAM_WARNING_TITLE']->value;?>
</div>
                        <?php echo $_smarty_tpl->tpl_vars['SPAM_INFO']->value;?>

                    </div>
                </div>
            <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FORUMS']->value, 'forum', false, 'category');
$_smarty_tpl->tpl_vars['forum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['forum']->value) {
$_smarty_tpl->tpl_vars['forum']->do_else = false;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['forum']->value['subforums'])) {?>
                    <div class="ui padded segment" id="forum-node">
                        <h3 class="ui header"><a href="<?php echo $_smarty_tpl->tpl_vars['forum']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['forum']->value['title'];?>
</a></h3>
                        <div class="ui divider"></div>
                        <div class="ui middle aligned stackable grid">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forum']->value['subforums'], 'subforum');
$_smarty_tpl->tpl_vars['subforum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subforum']->value) {
$_smarty_tpl->tpl_vars['subforum']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['subforum']->value->redirect_forum != 1) {?>
                                    <div class="centered row">
                                        <div class="one wide column mobile hidden"><?php if (empty($_smarty_tpl->tpl_vars['subforum']->value->icon)) {?>
                                                <i class="ui large comment icon middle aligned"></i>
                                            <?php } else {
echo $_smarty_tpl->tpl_vars['subforum']->value->icon;
}?></div>
                                        <div class="nine wide column">
                                            <a class="header" href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->link;?>
"
                                               data-toggle="popup"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->forum_title;?>
</a>
                                            <div class="ui wide popup">
                                                <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->forum_title;?>
</h4>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['subforum']->value->forum_description)) {?>
                                                    <br/>
                                                    <?php echo $_smarty_tpl->tpl_vars['subforum']->value->forum_description;?>

                                                <?php }?>
                                                <br/><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['TOPICS']->value);?>
 <b><?php echo $_smarty_tpl->tpl_vars['subforum']->value->topics;?>
</b>
                                                &middot; <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['POSTS']->value);?>
 <b><?php echo $_smarty_tpl->tpl_vars['subforum']->value->posts;?>
</b>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['subforum']->value->subforums))) {?>
                                                    <br/>
                                                    <?php echo $_smarty_tpl->tpl_vars['SUBFORUMS']->value;?>
:
                                                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subforum']->value->subforums, 'sub_subforum');
$_smarty_tpl->tpl_vars['sub_subforum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_subforum']->value) {
$_smarty_tpl->tpl_vars['sub_subforum']->do_else = false;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['i']->value != 1) {?>&middot; <?php }?><a
                                                        href="<?php echo $_smarty_tpl->tpl_vars['sub_subforum']->value->link;?>
"><?php echo $_smarty_tpl->tpl_vars['sub_subforum']->value->title;?>
</a>
                                                        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                            </div>
                                            <div class="description">
                                                <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['TOPICS']->value);?>
: <b><?php echo $_smarty_tpl->tpl_vars['subforum']->value->topics;?>
</b>
                                                &middot; <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['POSTS']->value);?>
: <b><?php echo $_smarty_tpl->tpl_vars['subforum']->value->posts;?>
</b>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['subforum']->value->subforums))) {?>
                                                    <div class="ui top right pointing inline dropdown">
                                                        &middot; <?php echo $_smarty_tpl->tpl_vars['SUBFORUMS']->value;?>
 <i class="dropdown icon"></i>
                                                        <div class="menu">
                                                            <div class="header"><?php echo $_smarty_tpl->tpl_vars['SUBFORUMS']->value;?>
</div>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subforum']->value->subforums, 'sub_subforum');
$_smarty_tpl->tpl_vars['sub_subforum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_subforum']->value) {
$_smarty_tpl->tpl_vars['sub_subforum']->do_else = false;
?>
                                                                <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['sub_subforum']->value->link;?>
">
                                                                    <?php if (empty($_smarty_tpl->tpl_vars['sub_subforum']->value->icon)) {?>
                                                                        <i class="comment icon"></i>
                                                                    <?php } else {
echo $_smarty_tpl->tpl_vars['sub_subforum']->value->icon;
}?> <?php echo $_smarty_tpl->tpl_vars['sub_subforum']->value->title;?>

                                                                </a>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="six wide column mobile hidden">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['subforum']->value->last_post))) {?>
                                                <img class="ui avatar image left floated"
                                                     src="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->avatar;?>
"
                                                     alt="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->username;?>
">
                                                <a class="header" href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->link;?>
"
                                                   data-toggle="popup"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->title;?>
</a>
                                                <div class="ui wide popup">
                                                    <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->title;?>
</h4>
                                                    <br/><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['BY']->value);?>
 <a style="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->user_style;?>
"
                                                                             href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->profile;?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->username;?>
</a>
                                                    | <?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->post_date;?>

                                                </div>
                                                <div class="description">
                                                    <a style="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->user_style;?>
"
                                                       href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->profile;?>
"
                                                       data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->post_creator;?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->username;?>
</a>
                                                    &middot; <span data-toggle="tooltip"
                                                                   data-content="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->post_date;?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->date_friendly;?>
</span>
                                                </div>
                                            <?php } else { ?>
                                                <div class="description" style="padding: 8px 0"><?php echo $_smarty_tpl->tpl_vars['NO_TOPICS']->value;?>
</div>
                                            <?php }?>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="centered row">
                                        <div class="one wide column mobile hidden"><?php if (empty($_smarty_tpl->tpl_vars['subforum']->value->icon)) {?><i class="ui large comment icon middle aligned"></i><?php } else {
echo $_smarty_tpl->tpl_vars['subforum']->value->icon;
}?></div>
                                        <div class="fifteen wide column">
                                            <a class="header" data-toggle="modal"
                                               <?php if ((isset($_smarty_tpl->tpl_vars['subforum']->value->redirect_confirm))) {?>
                                                href="#"
                                                data-target="#modal-redirect-<?php echo $_smarty_tpl->tpl_vars['subforum']->value->id;?>
"
                                               <?php } else { ?>
                                                href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->redirect_url;?>
"
                                               <?php }?>><?php echo $_smarty_tpl->tpl_vars['subforum']->value->forum_title;?>
</a>
                                        </div>
                                    </div>
                                    <div class="ui mini modal" id="modal-redirect-<?php echo $_smarty_tpl->tpl_vars['subforum']->value->id;?>
">
                                        <div class="content">
                                            <?php echo $_smarty_tpl->tpl_vars['subforum']->value->redirect_confirm;?>

                                        </div>
                                        <div class="actions">
                                            <a class="ui negative button"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</a>
                                            <a class="ui positive button" href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->redirect_url;?>
"
                                               target="_blank" rel="noopener nofollow"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="ui five wide tablet four wide computer column">
            <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>
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
            <?php }?>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
