<div class="ui vertical inverted sidebar menu left" id="toc">
  <div class="item">
    <h3>{$SITE_NAME}</h3>
  </div>
  {foreach from=$NAV_LINKS key=name item=item}
    {if isset($item.items)}
      <div class="item">
        <div class="header">{$item.title} <span class="icon">{$item.icon}</span></div>
        <div class="menu">
          {foreach from=$item.items item=dropdown}
            <a class="item" href="{$dropdown.link}" target="{$dropdown.target}">{$dropdown.icon} {$dropdown.title}</a>
          {/foreach}
        </div>
      </div>
    {else}
      <a class="item{if isset($item.active)} active{/if}" href="{$item.link}" target="{$item.target}">{$item.icon} {$item.title}</a>
    {/if}
  {/foreach}
</div>

<script>
        var mc_ip = 'mc.haliacraft.com'; // minecraft server ip
        var mc_port = '25565'; // minecraft server port
        var mc_copy ='Click para copiar'; // minecraft copy text
        var game_online = 'Jugadores activos'; // minecraft players online text
        var widget_id = '838575305269575730'; // discord widget id ( Discord Server > Server Settings > Widget > Server ID )
        var d_online = 'Miembros Activos'; // discord members online
        var d_click = 'ENTRAR'; // discord invite link text
        var invite_link = 'https://discord.haliacraft.com'; // discord invite link
        var particles = true; // true / false ( to enable or disable particles)
</script>


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
		                <div class="logo"><a href="/"><img src="{$LOGO_IMAGE}"></a></div>
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
    <div class="ui secondary {$DEFAULT_REVAMP_NAVBAR_EXTRA_CLASSES} small menu" id="navbar">
      <div class="ui container">
	  
<div id="main">
	<button class="openbtn" id="openbtn" onclick="openNav()">☰</button>  
  </div>
	 
<div id="mySidebar" class="sidebar">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>	 
        {foreach from=$NAV_LINKS key=name item=item}
          {if isset($item.items)}
            <div class="ui pointing dropdown link item">
              <span class="text">{$item.icon} {$item.title}</span> <i class="dropdown icon"></i>
              <div class="menu">
                <div class="header">{$item.title}</div>
                {foreach from=$item.items item=dropdown}
                  {if isset($dropdown.separator)}
                    <div class="divider"></div>
                  {else}
                    <a class="item" href="{$dropdown.link}" target="{$dropdown.target}">{$dropdown.icon} {$dropdown.title}</a>
                  {/if}
                {/foreach}
              </div>
            </div>
          {else}
            <a class="item{if isset($item.active)} active{/if}" href="{$item.link}" target="{$item.target}">{$item.icon} {$item.title}</a>
          {/if}
        {/foreach}
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
		</div>
        <div class="right menu">
          {foreach from=$USER_SECTION key=name item=item}
            {if isset($item.items)}
              {if ($name == "account")}
                <a class="ui medium image label" data-toggle="popup" data-position="bottom right" id="button-{$name}">{$item.icon} {$item.title}</a>
              {else}
                <a class="ui small default icon button" data-toggle="popup" data-position="bottom right" id="button-{$name}">{$item.icon}</a>
              {/if}
              <div class="ui wide basic popup">
                <h4 class="ui header">{$item.title}</h4>
                <div class="ui relaxed link list" id="list-{$name}">
                  {foreach from=$item.items item=dropdown}
                    {if isset($dropdown.separator)}
                      <div class="ui divider"></div>
                    {else}
                      <a class="item" href="{$dropdown.link}" target="{$dropdown.target}">{$dropdown.icon} {$dropdown.title}</a>
                    {/if}
                  {/foreach}
                </div>
                {if !empty($item.meta)}
                  <div class="ui link list">
                    <div class="ui divider"></div>
                    <a class="item" href="{$item.link}">{$item.meta}</a>
                  </div>
                {/if}
              </div>
            {else}
              {if ($name == "panel")}
                <a class="ui small primary icon button" href="{$item.link}" target="{$item.target}">{$item.icon}</a>
              {elseif ($name == "register")}
                <a class="ui small primary button" href="{$item.link}" target="{$item.target}">{$item.title}</a>
              {else}
                <a class="ui small default button" href="{$item.link}" target="{$item.target}">{$item.title}</a>
              {/if}
            {/if}
          {/foreach}
        </div>
      </div>
    </div>


    
  <div class="ui container">

    {if isset($NEW_UPDATE)}
      {if $NEW_UPDATE_URGENT eq true}
        <div class="ui negative icon message" id="update-message">
      {else}
        <div class="ui info icon message" id="update-message">
          <i class="close icon"></i>
      {/if}
      <a href="{$UPDATE_LINK}">
        <i class="download icon"></i>
      </a>
        <div class="content">
          <div class="header">{$NEW_UPDATE}</div>
          <ul class="list">
            <li>{$CURRENT_VERSION}</li>
            <li>{$NEW_VERSION}</li>
          </ul>
        </div>
      </div>
    {/if}

    {if !empty($ANNOUNCEMENTS)}
      {foreach from=$ANNOUNCEMENTS item=$ANNOUNCEMENT}
        <div class="ui icon message announcement" id="announcement-{$ANNOUNCEMENT->id}" style="background-color:{$ANNOUNCEMENT->background_colour}; color:{$ANNOUNCEMENT->text_colour}">
          {if $ANNOUNCEMENT->closable}<i class="close icon"></i>{/if}
          {if isset($ANNOUNCEMENT->icon)}
           <i class="{$ANNOUNCEMENT->icon}"></i>
          {/if}
          <div class="content">
            <div class="header">{$ANNOUNCEMENT->header}</div>
            <p>{$ANNOUNCEMENT->message|htmlspecialchars_decode}</p>
          </div>
        </div>
      {/foreach}
    {/if}

    {if isset($MUST_VALIDATE_ACCOUNT)}
      <div class="ui message">
        {$MUST_VALIDATE_ACCOUNT}
      </div>
    {/if}


	<script>
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

</script>

<script>
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
</script>