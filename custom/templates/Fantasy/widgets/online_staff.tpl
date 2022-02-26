<div class="panel-heading"><i class="fas fa-user-shield"></i> {$ONLINE_STAFF}</div>
<div class="ui fluid card" id="widget-online-staff">
  <div class="content">
    <div class="description">
      {if isset($ONLINE_STAFF_LIST)}
        {foreach from=$ONLINE_STAFF_LIST name=online_staff_arr item=user}
          <div class="ui relaxed list">
            <div class="item">
              <img class="ui mini circular image" src="{$user.avatar}" alt="{$user.username}">
              <div class="content">
                <a class="" href="{$user.profile}" data-poload="{$USER_INFO_URL}{$user.id}" style="{$user.style}">{$user.nickname}</a>
                {if $user.title}{$user.title}{else}{$user.group}{/if}
              </div>
            </div>
          </div>
        {/foreach}
      {else}
        {$NO_STAFF_ONLINE}
      {/if}
    </div>
  </div>
  <div class="extra content">
    {$TOTAL_ONLINE_STAFF}
  </div>
</div>