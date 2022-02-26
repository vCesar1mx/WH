<?php
/* Smarty version 3.1.39, created on 2022-02-06 21:08:10
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620038ba1c0310_55695170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c77b17a2f40b632e40bf9edbe3c8b11f54c2da53' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/templates/Fantasy/navbar.tpl',
      1 => 1644181550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620038ba1c0310_55695170 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php echo '<script'; ?>
>
        var mc_ip = 'mc.haliacraft.com'; // minecraft server ip
        var mc_port = '25565'; // minecraft server port
        var mc_copy ='Click para copiar'; // minecraft copy text
        var game_online = 'Jugadores activos'; // minecraft players online text
        var widget_id = '838575305269575730'; // discord widget id ( Discord Server > Server Settings > Widget > Server ID )
        var d_online = 'Miembros Activos'; // discord members online
        var d_click = 'ENTRAR'; // discord invite link text
        var invite_link = 'https://discord.haliacraft.com'; // discord invite link
        var particles = true; // true / false ( to enable or disable particles)
<?php echo '</script'; ?>
>


    <div class="p-header" style="background-image:url('https://haliacraft.com/uploads/backgrounds/fondo.png');background-size:cover;">
	
	
	<div id="particles-js"></div>
<div class="cyvers-nav">
    <div class="dd-bg" onclick="closeMobile()"></div>
        <div class="modal" id="popup-modal" tabindex="-1" role="dialog"></div><div class="dd-mobile"><li>   <a href="javascript:void(0)" onclick="openMobile()">
        <i class="fas fa-bars"></i><span> Menu</span></a></li></div><ul id="main-nav" class=""><div class="dd-close"><a href="javascript:void(0)" onclick="closeMobile()"><i class="fas fa-times"></i> close</a></div>
                        
                        
                        
                        
                        
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="/forum"><i class="fas fa-comments"></i> Foro</a></li>
                        <li><a href="//shop.haliacraft.com"><i class="fas fa-store-alt"></i> Store</a></li>  
                        <li><a href="/"><i class="fas fa-thumbs-up"></i> Vote</a></li>
                        <li><a href="/infractions"><i class="fas fa-gavel"></i> Bans</a></li>

                    
                    
                    </ul> </div>
	
      <div class="ui container">
        <div class="ui stackable grid">
          <div class="ui middle aligned row">
		                <div class="logo"><a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['LOGO_IMAGE']->value;?>
"></a></div>
            </div>
			
            <div class="eight wide column">
			
			
			
			
			
			
          
		  
		  
          </div>
        </div>
			      <div class="cyvers-count">
    <div class="container">
        <div class="game-count">
            <div class="mc-icon"><i class="mdi mdi-minecraft"></i></div>
            <span id="mc-online">0</span> <span id="text"></span><br>
            <span id="copy" data-clipboard-text="mc.haliacraft.com" onclick="serverjoin()"></span>
        </div>
        <div class="discord-count">
            <div class="d-icon"><i class="mdi mdi-discord"></i> </div>
            <span id="discord-online">0</span> <span id="donline"></span><br>
            <a id="invite" href="" target="blank"><span id="dclick"></span></a>
        </div>
    </div>
</div>
      </div>
	  
    </div>





<div class="pusher">
  <div id="wrapper">
    <div class="ui secondary <?php echo $_smarty_tpl->tpl_vars['DEFAULT_REVAMP_NAVBAR_EXTRA_CLASSES']->value;?>
 small menu" id="navbar">
      <div class="ui container">
	  
<div id="main">
	<button class="openbtn" id="openbtn" onclick="openNav()">☰</button>  
  </div>
	 
<div id="mySidebar" class="sidebar">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>	 
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
		</div>
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
    <?php }?>


	<?php echo '<script'; ?>
>
function serverjoin()
    {
        swal({
            title: "La ip ha sido copiada!",
            text: "Puedes acceder al servidor agregandolo a tu lista!",
            icon: "success",
            button: "Aceptar",
        });
    }
	
var clipboard = new ClipboardJS('#copy');

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("openbtn").style.display = "none";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("openbtn").style.display = "block";
}
<?php echo '</script'; ?>
><?php }
}
