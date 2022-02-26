<?php
/* Smarty version 3.1.39, created on 2022-02-02 13:01:23
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/view_topic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61fa80a3d09503_62432969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7114291548b7e01cd98c3a100fb1c57a56696bf' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/view_topic.tpl',
      1 => 1638298150,
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
function content_61fa80a3d09503_62432969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),2=>array('file'=>'/var/www/html3/namelessmc/Nameless-2.0.0-pr12/core/includes/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui breadcrumb">
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

<h2 class="ui header">
  <div class="topic title"><?php if (count($_smarty_tpl->tpl_vars['TOPIC_LABELS']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TOPIC_LABELS']->value, 'label');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
echo $_smarty_tpl->tpl_vars['label']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
echo $_smarty_tpl->tpl_vars['TOPIC_TITLE']->value;?>
</div>
  <div class="sub header">
    <?php $_smarty_tpl->_assignInScope('started_by_val', "<a href=\"".((string)$_smarty_tpl->tpl_vars['TOPIC_AUTHOR_PROFILE']->value)."\" style=\"".((string)$_smarty_tpl->tpl_vars['TOPIC_AUTHOR_STYLE']->value)."\">".((string)$_smarty_tpl->tpl_vars['TOPIC_AUTHOR_USERNAME']->value)."</a>");?>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['STARTED_BY']->value,'{x}',$_smarty_tpl->tpl_vars['started_by_val']->value);?>

  </div>
</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['SESSION_SUCCESS_POST']->value))) {?>
  <div class="ui success icon message">
    <i class="check icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>
</div>
      <?php echo $_smarty_tpl->tpl_vars['SESSION_SUCCESS_POST']->value;?>

    </div>
  </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['SESSION_FAILURE_POST']->value))) {?>
  <div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>
</div>
      <?php echo $_smarty_tpl->tpl_vars['SESSION_FAILURE_POST']->value;?>

    </div>
  </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
  <div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
      <ul class="list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

      
<div class="res right floated">
  <?php if ((isset($_smarty_tpl->tpl_vars['UNFOLLOW']->value))) {?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['UNFOLLOW_URL']->value;?>
" method="post" style="display: inline">
      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" name="token" />
      <button class="ui small primary button"><?php echo $_smarty_tpl->tpl_vars['UNFOLLOW']->value;?>
</button>
    </form>
  <?php } elseif ((isset($_smarty_tpl->tpl_vars['FOLLOW']->value))) {?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['FOLLOW_URL']->value;?>
" method="post" style="display: inline">
      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" name="token" />
      <button class="ui small primary button"><?php echo $_smarty_tpl->tpl_vars['FOLLOW']->value;?>
</button>
    </form>
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value))) {?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['LOCK_URL']->value;?>
" method="post" id="lockTopic" style="display: none">
      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" name="token" />
    </form>
    <form action="<?php echo $_smarty_tpl->tpl_vars['STICK_URL']->value;?>
" method="post" id="stickTopic" style="display: none">
      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" name="token" />
    </form>
    <div class="ui top right pointing dropdown small primary button">
      <span class="text"><?php echo $_smarty_tpl->tpl_vars['MOD_ACTIONS']->value;?>
</span>
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="header"><?php echo $_smarty_tpl->tpl_vars['MOD_ACTIONS']->value;?>
</div>
        <a type="submit" class="item" onclick="document.getElementById('lockTopic').submit()"><?php echo $_smarty_tpl->tpl_vars['LOCK']->value;?>
</a>
        <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['MERGE_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MERGE']->value;?>
</a>
        <a class="item" data-toggle="modal" data-target="#modal-delete"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</a>
        <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['MOVE_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MOVE']->value;?>
</a>
        <a type="submit" class="item" onclick="document.getElementById('stickTopic').submit()"><?php echo $_smarty_tpl->tpl_vars['STICK']->value;?>
</a>
      </div>
    </div>
  <?php }?>
  <div class="ui top right pointing dropdown small primary button">
    <span class="text"><?php echo $_smarty_tpl->tpl_vars['SHARE']->value;?>
</span>
      <i class="dropdown icon"></i>
    <div class="menu">
      <div class="header"><?php echo $_smarty_tpl->tpl_vars['SHARE']->value;?>
</div>
      <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['SHARE_TWITTER_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SHARE_TWITTER']->value;?>
</a>
      <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['SHARE_FACEBOOK_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SHARE_FACEBOOK']->value;?>
</a>
    </div>
  </div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['TOPIC_LOCKED_NOTICE']->value))) {?>
  <div class="ui tiny warning message">
    <?php echo $_smarty_tpl->tpl_vars['TOPIC_LOCKED_NOTICE']->value;?>

  </div>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REPLIES']->value, 'reply');
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
?>
  <div class="ui segments" id="topic-post" post-id="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
    <div class="ui attached padded segment">
      <div class="ui stackable grid">
        <div class="ui row">
          <div class="ui five wide tablet three wide computer column" id="post-sidebar">
            <center>
              <a href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['profile'];?>
"><img class="ui small circular image" src="<?php echo $_smarty_tpl->tpl_vars['reply']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
" /></a>
              <h3 class="ui header">
                <a href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['reply']->value['user_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
</a>
                <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['user_title']))) {?>
                  <div class="sub header"><?php echo $_smarty_tpl->tpl_vars['reply']->value['user_title'];?>
</div>
                <?php }?>
              </h3>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value['user_groups'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['group']->value;?>
<br />
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </center>
            <div class="ui list">
              <div class="ui divider"></div>
              <div class="item">
                <div class="content">
                  <div class="header"><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['reply']->value['user_registered'],'/[:].*/','');?>
</div>
                  <div class="res right floated description"><?php echo $_smarty_tpl->tpl_vars['reply']->value['user_registered_full'];?>
</div>
                </div>
              </div>
              <div class="item">
                <div class="content">
                  <div class="header"><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['reply']->value['last_seen'],'/[:].*/','');?>
</div>
                  <div class="res right floated description"><?php echo $_smarty_tpl->tpl_vars['reply']->value['last_seen_full'];?>
</div>
                </div>
              </div>
              <div class="item">
                <div class="content">
                  <div class="header"><?php echo smarty_modifier_capitalize(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['reply']->value['user_topics_count'],'/[0-9]+/',''));?>
</div>
                  <div class="res right floated description"><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['reply']->value['user_topics_count'],'/[^0-9]+/','');?>
</div>
                </div>
              </div>
              <div class="item">
                <div class="content">
                  <div class="header"><?php echo smarty_modifier_capitalize(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['reply']->value['user_posts_count'],'/[0-9]+/',''));?>
</div>
                  <div class="res right floated description"><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['reply']->value['user_posts_count'],'/[^0-9]+/','');?>
</div>
                </div>
              </div>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['reply']->value['fields'])) {?>
              <div class="ui list">
                <div class="ui divider"></div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                  <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['value'])) {?>
                    <div class="item">
                      <div class="content">
                        <div class="header"><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</div>
                        <div class="res right floated description"><?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
</div>
                      </div>
                    </div>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            <?php }?>
          </div>
          <div class="ui eleven wide tablet thirteen wide computer column" id="post-content">
            <div class="forum_post"><?php echo $_smarty_tpl->tpl_vars['reply']->value['content'];?>
</div>
            <?php if (((isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value)) && $_smarty_tpl->tpl_vars['reply']->value['user_id'] !== $_smarty_tpl->tpl_vars['USER_ID']->value || count($_smarty_tpl->tpl_vars['reply']->value['post_reactions']))) {?>
              <div class="ui mini info message" id="reactions">
                <?php if (((isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value)) && $_smarty_tpl->tpl_vars['reply']->value['user_id'] !== $_smarty_tpl->tpl_vars['USER_ID']->value)) {?>
                  <a href="#" data-toggle="popup" data-position="right center">Like</a>
                  <div class="ui wide popup">
                    <?php if ((isset($_smarty_tpl->tpl_vars['REACTIONS']->value)) && count($_smarty_tpl->tpl_vars['REACTIONS']->value)) {?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REACTIONS']->value, 'reaction');
$_smarty_tpl->tpl_vars['reaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
$_smarty_tpl->tpl_vars['reaction']->do_else = false;
?>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['REACTIONS_URL']->value;?>
" method="post">
                          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                          <input type="hidden" name="reaction" value="<?php echo $_smarty_tpl->tpl_vars['reaction']->value->id;?>
">
                          <input type="hidden" name="post" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
                          <button type="submit" class="ui mini primary icon button"><?php echo $_smarty_tpl->tpl_vars['reaction']->value->html;?>
</button>
                        </form>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                  </div>
                <?php }?>
                <?php if (count($_smarty_tpl->tpl_vars['reply']->value['post_reactions'])) {?>
                  <div class="right floated" data-toggle="modal" data-target="#modal-reactions-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value['post_reactions'], 'reaction', false, NULL, 'reactions', array (
));
$_smarty_tpl->tpl_vars['reaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
$_smarty_tpl->tpl_vars['reaction']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['i']->value != 1) {?> &nbsp; <?php }?>
                      <?php echo $_smarty_tpl->tpl_vars['reaction']->value['html'];?>
x<?php echo $_smarty_tpl->tpl_vars['reaction']->value['count'];?>

                      <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                <?php }?>
              </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['reply']->value['signature'])) {?>
              <div class="ui divider"></div>
              <?php echo $_smarty_tpl->tpl_vars['reply']->value['signature'];?>

            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <div class="ui bottom attached secondary segment" id="post-meta">
      <a href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['profile'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['reply']->value['user_id'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['reply']->value['user_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
</a> &middot; <span data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['reply']->value['post_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['post_date_rough'];?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['reply']->value['edited'] !== null) {?>&middot; <span data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['reply']->value['edited_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['edited'];?>
</span><?php }?>
      <div class="res right floated">
        <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['spam']))) {?>
          <button class="ui mini icon button" data-toggle="modal" data-target="#modal-spam-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['spam']['TEXT'];?>
" data-variation="mini" data-inverted=""><i class="flag icon"></i></button>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['edit']))) {?>
          <a class="ui mini icon button" href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['edit']['URL'];?>
" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['edit']['TEXT'];?>
" data-variation="mini" data-inverted=""><i class="pencil icon"></i></a>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']))) {?>
          <button class="ui mini icon button" data-toggle="modal" data-target="#modal-delete-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']['TEXT'];?>
" data-variation="mini" data-inverted=""><i class="trash icon"></i></button>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['report']))) {?>
          <button class="ui mini icon button" data-toggle="modal" data-target="#modal-report-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['report']['TEXT'];?>
" data-variation="mini" data-inverted=""><i class="exclamation triangle icon"></i></button>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['quote']))) {?>
          <button class="ui mini icon button" onclick="quote(<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
)" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['quote']['TEXT'];?>
" data-variation="mini" data-inverted=""><i class="quote left icon"></i></button>
        <?php }?>
      </div>
    </div>
  </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((isset($_smarty_tpl->tpl_vars['TOPIC_LOCKED_NOTICE']->value))) {?>
  <div class="ui tiny warning message">
    <?php echo $_smarty_tpl->tpl_vars['TOPIC_LOCKED_NOTICE']->value;?>

  </div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>


<?php if ((isset($_smarty_tpl->tpl_vars['CAN_REPLY']->value))) {?>
  <div class="ui padded segment" id="topic-reply">
    <div class="ui stackable grid">
      <div class="ui row">
        <div class="ui five wide tablet three wide computer column" id="reply-sidebar">
          <center>
            <img class="ui small circular image" src="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['avatar'];?>
"/>
            <h3 class="ui header">
              <a href="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username'];?>
</a>
            </h3>
          </center>
        </div>
        <div class="ui eleven wide tablet thirteen wide computer column" id="reply-content">
          <form class="ui form" action="" method="post">
            <?php if ((isset($_smarty_tpl->tpl_vars['MARKDOWN']->value))) {?>
              <div class="field">
                <textarea name="content" id="markdown" ><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</textarea>
              </div>
            <?php } else { ?>
              <div class="field">
                <textarea name="content" id="quickreply"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</textarea>
              </div>
            <?php }?>
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
            <button class="ui primary button" type="submit"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
            <button class="ui warning button" id="quoteButton" type="button" onclick="insertQuotes();"><?php echo $_smarty_tpl->tpl_vars['INSERT_QUOTES']->value;?>
</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REPLIES']->value, 'reply');
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
?>
  <?php if (count($_smarty_tpl->tpl_vars['reply']->value['post_reactions'])) {?>
    <div class="ui small modal" id="modal-reactions-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
      <div class="header">
         <?php echo $_smarty_tpl->tpl_vars['REACTIONS_TEXT']->value;?>

      </div>
      <div class="content">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value['post_reactions'], 'reaction', false, NULL, 'reactions', array (
));
$_smarty_tpl->tpl_vars['reaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
$_smarty_tpl->tpl_vars['reaction']->do_else = false;
?>
          <strong><?php echo $_smarty_tpl->tpl_vars['reaction']->value['html'];?>
 x <?php echo $_smarty_tpl->tpl_vars['reaction']->value['count'];?>
:</strong>
          <br />
          <div class="ui middle aligned small list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reaction']->value['users'], 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
              <div class="item">
                <img class="ui avatar image" src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
">
                <div class="content">
                  <a class="header" href="<?php echo $_smarty_tpl->tpl_vars['user']->value['profile'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</a>
                </div>
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  <?php }?>

  <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['report']))) {?>
    <div class="ui small modal" id="modal-report-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
      <div class="header">
         <?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['report']['TEXT'];?>

      </div>
      <div class="content">
    <form action="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['report']['URL'];?>
" method="post" id="form-report-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
      <div class="ui form">
        <div class="field">
              <label for="InputReason"><?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['report']['REPORT_TEXT'];?>
</label>
              <textarea id="InputReason" name="reason"></textarea>
      </div>
            <input type="hidden" name="post" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
            <input type="hidden" name="topic" value="<?php echo $_smarty_tpl->tpl_vars['TOPIC_ID']->value;?>
">
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
      </div>
    </form>
      </div>
      <div class="actions">
        <a class="ui negative button"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
        <a class="ui positive button" onclick="$('#form-report-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
').submit();"><?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['report']['TEXT'];?>
</a>
      </div>
    </div>
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value))) {?>
    <div class="ui small modal" id="modal-spam-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
      <div class="header">
         <?php echo $_smarty_tpl->tpl_vars['MARK_AS_SPAM']->value;?>

      </div>
      <div class="content">
        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_SPAM_POST']->value;?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['spam']['URL'];?>
" method="post" id="form-spam-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
          <input type="hidden" name="post" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
    </form>
      </div>
      <div class="actions">
        <a class="ui negative button"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
        <a class="ui positive button" onclick="$('#form-spam-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
').submit();"><?php echo $_smarty_tpl->tpl_vars['MARK_AS_SPAM']->value;?>
</a>
      </div>
    </div>
    <div class="ui small modal" id="modal-delete-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
      <div class="header">
         <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_SHORT']->value;?>

      </div>
      <div class="content">
        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_POST']->value;?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']['URL'];?>
" method="post" id="form-delete-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
          <input type="hidden" name="tid" value="<?php echo $_smarty_tpl->tpl_vars['TOPIC_ID']->value;?>
">
          <input type="hidden" name="number" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']['NUMBER'];?>
">
          <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
    </form>
      </div>
      <div class="actions">
        <a class="ui negative button"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
        <a class="ui positive button" onclick="$('#form-delete-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
').submit();"><?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']['TEXT'];?>
</a>
      </div>
    </div>
  <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value))) {?>
  <div class="ui small modal" id="modal-delete">
    <div class="header">
      <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_SHORT']->value;?>

    </div>
    <div class="content">
      <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE']->value;?>

    </div>
    <div class="actions">
      <a class="ui negative button"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
      
      <form action="<?php echo $_smarty_tpl->tpl_vars['DELETE_URL']->value;?>
" method="post" id="deleteTopic" style="display: none">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" name="token" />
      </form>
      <a type="submit" class="ui positive button" onclick="document.getElementById('deleteTopic').submit()"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</a>
    </div>
  </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
