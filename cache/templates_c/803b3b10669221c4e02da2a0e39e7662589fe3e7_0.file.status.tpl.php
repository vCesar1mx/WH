<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:34:48
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f847e8a6dd58_82242887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '803b3b10669221c4e02da2a0e39e7662589fe3e7' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/status.tpl',
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
function content_61f847e8a6dd58_82242887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>

</h2>

<br />

<?php if (count($_smarty_tpl->tpl_vars['SERVERS']->value)) {?>
  <div class="ui centered three stackable cards" id="servers">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SERVERS']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
      <div class="ui fluid card center aligned server" id="server<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" data-bungee="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value->bungee, ENT_QUOTES, 'UTF-8', true);?>
" data-players="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value->player_list, ENT_QUOTES, 'UTF-8', true);?>
">
        <div class="content">
          <div class="header">
            <?php if ($_smarty_tpl->tpl_vars['server']->value->show_ip) {?><div class="ui top right attached label" data-toggle="popup" data-html="<span id='copy<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value->id, ENT_QUOTES, 'UTF-8', true);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value->query_ip, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['server']->value->port && $_smarty_tpl->tpl_vars['server']->value->port != 25565) {?>:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value->port, ENT_QUOTES, 'UTF-8', true);
}?></span>" onclick="copy('#copy<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value->id, ENT_QUOTES, 'UTF-8', true);?>
')"><?php echo $_smarty_tpl->tpl_vars['IP']->value;?>
</div><?php }?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server']->value->name, ENT_QUOTES, 'UTF-8', true);?>

          </div>
          <div class="description" id="server-status">
            <i class="notched circle loading icon"></i>
          </div>
        </div>
        <div class="extra content" id="server-players"></div>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php } else { ?>
  <div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header">Error</div>
      <?php echo $_smarty_tpl->tpl_vars['NO_SERVERS']->value;?>

    </div>
  </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
