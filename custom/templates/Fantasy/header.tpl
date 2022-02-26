{if "HTML_CLASS"|defined}{assign var="HTMLCLASS" value=" {$smarty.const.HTML_CLASS}"}{/if}
{if "HTML_LANG"|defined}{assign var="HTMLLANG" value=" lang='{$smarty.const.HTML_LANG}'"}{else}{assign var="HTMLLANG" value=" lang='en'"}{/if}
{if "HTML_RTL"|defined && $smarty.const.HTML_RTL eq true}{assign var="HTMLRTL" value=" dir='rtl'"}{/if}
{if "LANG_CHARSET"|defined}{assign var="METACHARSET" value="{$smarty.const.LANG_CHARSET}"}{else}{assign var="METACHARSET" value="utf-8"}{/if}
{if isset($PAGE_DESCRIPTION) && $PAGE_DESCRIPTION|count_characters > 0}{assign var="PAGEDESCRIPTION" value="{$PAGE_DESCRIPTION}"}{else}{assign var="PAGEDESCRIPTION" value=" "}{/if}
{if isset($PAGE_KEYWORDS) && $PAGE_KEYWORDS|count_characters > 0}{assign var="PAGEKEYWORDS" value="{$PAGE_KEYWORDS}"}{else}{assign var="PAGEKEYWORDS" value=" "}{/if}

<!DOCTYPE html>
<html{$HTMLCLASS}{$HTMLLANG}{$HTMLRTL}>
  <head>
    
    <meta charset="{$METACHARSET}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>{$TITLE} &bull; {$smarty.const.SITE_NAME}</title>
    
	{if isset($FAVICON)}
	<link rel="shortcut icon" href="{$FAVICON}" type="image/x-icon" />
	{/if}
  
    <meta name="author" content="{$smarty.const.SITE_NAME}">
    <meta name='description' content='{$PAGEDESCRIPTION}' />
    <meta name='keywords' content='{$PAGEKEYWORDS}' />
  
    <meta property="og:title" content="{$TITLE} &bull; {$smarty.const.SITE_NAME}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{$OG_URL}" />
    <meta property="og:image" content="{$OG_IMAGE}" />
    <meta property='og:description' content='{$PAGEDESCRIPTION}' />
  
	  <!-- Twitter Card Properties -->
    <meta name="twitter:title" content="{$TITLE} &bull; {$smarty.const.SITE_NAME}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:image" content="{$OG_IMAGE}" />

     {if isset($PAGE_DESCRIPTION) && $PAGE_DESCRIPTION|count_characters > 0}
         <meta name="twitter:description" content="{$PAGE_DESCRIPTION}" />
    {/if}
  
    {foreach from=$TEMPLATE_CSS item=css}
      {$css}
    {/foreach}

	{if isset($ANALYTICS_ID)}
	  {literal}
		<script async src="https://www.googletagmanager.com/gtag/js?id={/literal}{$ANALYTICS_ID}{literal}"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', '{/literal}{$ANALYTICS_ID}{literal}');
		</script>
	  {/literal}
    {/if}
	
	
	
	
	
		    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.5.95/css/materialdesignicons.min.css" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
        <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
  </head>

  <body{if $DEFAULT_REVAMP_DARK_MODE} class="dark"{/if} id="page-{if is_numeric($smarty.const.PAGE)}{$TITLE}{else}{$smarty.const.PAGE}{/if}">
