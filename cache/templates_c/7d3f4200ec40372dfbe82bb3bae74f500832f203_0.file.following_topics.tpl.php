<?php
/* Smarty version 3.1.39, created on 2022-02-13 17:57:29
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/following_topics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620946894196e0_12978373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d3f4200ec40372dfbe82bb3bae74f500832f203' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/forum/following_topics.tpl',
      1 => 1633866022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:user/navigation.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_620946894196e0_12978373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['USER_CP']->value;?>

</h2>

<div class="ui stackable grid" id="alerts">
    <div class="ui centered row">
        <div class="ui six wide tablet four wide computer column">
            <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="ui ten wide tablet twelve wide computer column">
            <div class="ui segment">
                <h3 class="ui header">
                    <?php echo $_smarty_tpl->tpl_vars['FOLLOWING_TOPICS']->value;?>

                    <?php if (count($_smarty_tpl->tpl_vars['TOPICS_LIST']->value)) {?>
                        <div class="res right floated">
                            <a class="ui mini negative button" href="#" data-toggle="modal" data-target="#modal-delete"><?php echo $_smarty_tpl->tpl_vars['UNFOLLOW_ALL']->value;?>
</a>
                        </div>
                    <?php }?>
                </h3>
                <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS_MESSAGE']->value))) {?>
                    <div class="ui success icon message">
                        <i class="check icon"></i>
                        <div class="content">
                            <div class="header"><?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>
</div>
                            <?php echo $_smarty_tpl->tpl_vars['SUCCESS_MESSAGE']->value;?>

                        </div>
                    </div>
                <?php }?>
                <div class="ui middle aligned relaxed selection list">
                    
                        <?php if (count($_smarty_tpl->tpl_vars['TOPICS_LIST']->value)) {?>
                            <table class="ui striped selectable table">
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TOPICS_LIST']->value, 'topic');
$_smarty_tpl->tpl_vars['topic']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
$_smarty_tpl->tpl_vars['topic']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <div class="ui stackable middle aligned grid">
                                                <div class="row" onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['topic']->value['last_post_link'];?>
'" style="cursor: pointer">
                                                    <div class="ten wide column">
                                                        <?php if ($_smarty_tpl->tpl_vars['topic']->value['unread']) {?>
                                                            <i class="bell icon"></i><strong><?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_title'];?>
</strong>
                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_title'];?>

                                                        <?php }?>
                                                    </div>
                                                    <div class="four wide column">
                                                        <h5 class="ui image header">
                                                            <img class="ui mini circular image" src="<?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_author_avatar'];?>
">
                                                            <div class="content">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_author_link'];?>
" data-toggle="popup" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['topic']->value['reply_author_id'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_author_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_author_nickname'];?>
</a>
                                                                <div class="sub header" data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_date_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_date'];?>
</div>
                                                            </div>
                                                        </h5>
                                                    </div>
                                                    <div class="two wide column right aligned">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['topic']->value['unfollow_link'];?>
" class="ui mini red button"><?php echo $_smarty_tpl->tpl_vars['UNFOLLOW_TOPIC']->value;?>
</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>

                            <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

                        <?php } else { ?>
                            <div class="ui info message">
                                <div class="content">
                                    <?php echo $_smarty_tpl->tpl_vars['NO_TOPICS']->value;?>

                                </div>
                            </div>
                        <?php }?>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ui small modal" id="modal-delete">
    <div class="header">
        <?php echo $_smarty_tpl->tpl_vars['UNFOLLOW_ALL']->value;?>

    </div>
    <div class="content">
        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_UNFOLLOW']->value;?>

    </div>
    <div class="actions">
        <a class="ui negative button"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</a>
        <form class="ui form" action="" method="post" style="display: inline">
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
            <input type="hidden" name="action" value="purge">
            <input type="submit" class="ui green button" value="<?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
">
        </form>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
