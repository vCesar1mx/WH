<?php
/* Smarty version 3.1.39, created on 2022-02-08 21:36:38
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/user/alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6202e266895579_87707174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a383cfb3289cacea060ad36edd6dd49f8f598167' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/user/alerts.tpl',
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
function content_6202e266895579_87707174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

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
          <?php echo $_smarty_tpl->tpl_vars['ALERTS']->value;?>

          <div class="res right floated">
            <a class="ui mini negative button" href="<?php echo $_smarty_tpl->tpl_vars['DELETE_ALL_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DELETE_ALL']->value;?>
</a>
          </div>
        </h3>
        <div class="ui middle aligned relaxed selection list">
          
            <?php if (count($_smarty_tpl->tpl_vars['ALERTS_LIST']->value)) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALERTS_LIST']->value, 'alert', false, 'name');
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
                <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->view_link;?>
" data-toggle="popup">
                  <i class="angle right icon"></i>
                  <div class="content">
                    <div class="description">
                      <?php if ($_smarty_tpl->tpl_vars['alert']->value->read == 0) {?>
                        <strong><?php echo $_smarty_tpl->tpl_vars['alert']->value->content;?>
</strong>
                      <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['alert']->value->content;?>

                      <?php }?>
                      <br /><?php echo $_smarty_tpl->tpl_vars['alert']->value->date_nice;?>

                    </div>
                  </div>
                </a>
                <div class="ui wide popup">
                  <h4><?php echo $_smarty_tpl->tpl_vars['alert']->value->content;?>
</h4>
                  <?php echo $_smarty_tpl->tpl_vars['alert']->value->date;?>

                </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <div class="ui info message">
                <div class="content">
                  <?php echo $_smarty_tpl->tpl_vars['NO_ALERTS']->value;?>

                </div>
              </div>
            <?php }?>
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
