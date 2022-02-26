<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:17:06
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f843c2d81660_18763768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b1ed16f99ccd3035f513c7cc9321d847b2209c3' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/DefaultRevamp/footer.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f843c2d81660_18763768 (Smarty_Internal_Template $_smarty_tpl) {
?>    </div>
  </div>
  
  <div class="ui inverted vertical footer segment" id="footer">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="six wide column">
          <h4 class="ui inverted header"><?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
</h4>
          <div class="ui inverted link list">
            <span class="item">&copy; <?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
 <?php echo date('Y');?>
</span>
            <span class="item">Powered By <a href="https://namelessmc.com">NamelessMC</a></span>
            <?php if ($_smarty_tpl->tpl_vars['PAGE_LOAD_TIME']->value) {?>
              <span class="item" id="page_load"></span>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value))) {?>
              <a class="item" href="javascript:" onclick="toggleDarkLightMode()"><?php echo $_smarty_tpl->tpl_vars['DARK_LIGHT_MODE']->value;?>
</a>
            <?php }?>
          </div>
        </div>
        <div class="five wide column">
          <h4 class="ui inverted header"><?php echo $_smarty_tpl->tpl_vars['FOOTER_LINKS_TITLE']->value;?>
</h4>
          <div class="ui inverted link list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOOTER_NAVIGATION']->value, 'item', false, 'name');
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
                <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
              <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['TERMS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TERMS_TEXT']->value;?>
</a>
            <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['PRIVACY_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PRIVACY_TEXT']->value;?>
</a>
          </div>
        </div>
        <div class="five wide column">
          <h4 class="ui inverted header"><?php echo $_smarty_tpl->tpl_vars['FOOTER_SOCIAL_TITLE']->value;?>
</h4>
          <div class="ui inverted link list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value, 'icon');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
              <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['icon']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['icon']->value['text'];?>
</a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value))) {?>
    <div class="ui medium modal" id="modal-acknowledge">
      <div class="header">
        <?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value;?>

      </div>
      <div class="content">
        <?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_REASON']->value;?>

      </div>
      <div class="actions">
        <a class="ui positive button" href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_ACKNOWLEDGE_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_ACKNOWLEDGE']->value;?>
</a>
      </div>
    </div>
  <?php }?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_JS']->value, 'script');
$_smarty_tpl->tpl_vars['script']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value))) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
      $('#modal-acknowledge').modal({ closable: false }).modal('show');
    <?php echo '</script'; ?>
>
  <?php }?>

  <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value))) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
      function toggleDarkLightMode() {
        $.post("<?php echo $_smarty_tpl->tpl_vars['DARK_LIGHT_MODE_ACTION']->value;?>
", { token: "<?php echo $_smarty_tpl->tpl_vars['DARK_LIGHT_MODE_TOKEN']->value;?>
" })
          .done(function() {
            window.location.reload();
          });

        return false;
      }
    <?php echo '</script'; ?>
>
  <?php }?>

  <?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value)) && ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value != true)) {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value['path'];?>
/js/core/update.js"><?php echo '</script'; ?>
>
  <?php }?>

<?php if (!(isset($_smarty_tpl->tpl_vars['EXCLUDE_END_BODY']->value))) {?>
  </body>

  </html>
<?php }
}
}
