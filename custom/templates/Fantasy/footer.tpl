    </div>
  </div>
<div class="footer">
    <div class="ui container">
        <div class="f-left">
            <p>Copyright © HaliaCraft 2022. Todos los derechos reservados.</p>
            <span>We are not affiliated with Mojang AB.</span>
            
        </div>
        <div class="f-right">
       <!-- <a href="https://ipolotech.com" target="blank"><img src="https://i.imgur.com/rSVMwVL.png" alt="ipolotech copyright"></a> --></div>
	<!-- *** Do not hide/obscure the following "ipolotech copyright". Your access will be removed! -->
     <!-- Template made by <a href="https://ipolotech.com" target="_blank">Ipolotech.com</a> -->
        </div>
    </div>
</div>

  {if isset($GLOBAL_WARNING_TITLE)}
    <div class="ui medium modal" id="modal-acknowledge">
      <div class="header">
        {$GLOBAL_WARNING_TITLE}
      </div>
      <div class="content">
        {$GLOBAL_WARNING_REASON}
      </div>
      <div class="actions">
        <a class="ui positive button" href="{$GLOBAL_WARNING_ACKNOWLEDGE_LINK}">{$GLOBAL_WARNING_ACKNOWLEDGE}</a>
      </div>
    </div>
  {/if}

  {foreach from=$TEMPLATE_JS item=script}
    {$script}
  {/foreach}
  
  {if isset($NEW_UPDATE) && ($NEW_UPDATE_URGENT != true)}
    <script src="{$TEMPLATE.path}/js/core/update.js"></script>
  {/if}
  
</body>

</html>
