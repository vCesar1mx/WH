<?php
/* Smarty version 3.1.39, created on 2022-02-06 07:30:55
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ff792f903400_32440235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b68124a1f4a8ebb39155c7d6654d3496ba3ed37d' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/error.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ff792f903400_32440235 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['RTL']->value;?>
>

<head>

    <meta charset="<?php echo $_smarty_tpl->tpl_vars['LANG_CHARSET']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
">

    <!-- Page Title -->
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>

    <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BOOTSTRAP']->value;?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CUSTOM']->value;?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['FONT_AWESOME']->value;?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PRISM_CSS']->value;?>
">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['JQUERY']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PRISM_JS']->value;?>
"><?php echo '</script'; ?>
>

</head>

<body>

    <br /><br />
    <div class="container">
        <div class="row">

            <div class="col-md-<?php if ($_smarty_tpl->tpl_vars['DETAILED_ERROR']->value) {?>12<?php } else { ?>6 offset-md-3<?php }?>">
                <div class="jumbotron">
                    <div style="text-align:<?php if ($_smarty_tpl->tpl_vars['DETAILED_ERROR']->value) {?> left <?php } else { ?> center <?php }?>;">

                        <?php if ($_smarty_tpl->tpl_vars['DETAILED_ERROR']->value) {?>

                            <h4>Uncaught <i><?php echo $_smarty_tpl->tpl_vars['ERROR_TYPE']->value;?>
</i></h4>
                            <h2><kbd><?php echo $_smarty_tpl->tpl_vars['ERROR_STRING']->value;?>
</kbd></h2>
                            <h3>(File: <?php echo $_smarty_tpl->tpl_vars['ERROR_FILE']->value;?>
)</h3>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;?>
</a>

                        <?php } else { ?>

                            <h2><?php echo $_smarty_tpl->tpl_vars['FATAL_ERROR_TITLE']->value;?>
</h2>

                            <h4><?php echo $_smarty_tpl->tpl_vars['FATAL_ERROR_MESSAGE_USER']->value;?>
</h4>

                            <div class="btn-group" role="group" aria-label="...">
                                <button href="#" class="btn btn-primary btn-lg" onclick="javascript:history.go(-1)">
                                    <?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>

                                </button>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['HOME_URL']->value;?>
" class="btn btn-success btn-lg">
                                    <?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>

                                </a>
                            </div>

                        <?php }?>
                    </div>
                </div>
            </div>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['DETAILED_ERROR']->value) {?>

            <br />

            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <div style="text-align:center">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FRAMES']->value, 'frame');
$_smarty_tpl->tpl_vars['frame']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['frame']->value) {
$_smarty_tpl->tpl_vars['frame']->do_else = false;
?>

                                            <button class="tablinks" id="button-<?php echo $_smarty_tpl->tpl_vars['frame']->value['number'];?>
" onclick="openFrame(<?php echo $_smarty_tpl->tpl_vars['frame']->value['number'];?>
)">
                                                <h5>Frame #<?php echo $_smarty_tpl->tpl_vars['frame']->value['number'];?>
</h5>
                                                <sub><?php echo $_smarty_tpl->tpl_vars['frame']->value['file'];?>
:<?php echo $_smarty_tpl->tpl_vars['frame']->value['line'];?>
</sub>
                                            </button>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>

                                    <div class="code">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FRAMES']->value, 'frame');
$_smarty_tpl->tpl_vars['frame']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['frame']->value) {
$_smarty_tpl->tpl_vars['frame']->do_else = false;
?>

                                            <div id="frame-<?php echo $_smarty_tpl->tpl_vars['frame']->value['number'];?>
" class="tabcontent">
                                                <h5>File: <strong><?php echo $_smarty_tpl->tpl_vars['frame']->value['file'];?>
</strong></h5>

                                                <hr>

                                                <?php if ($_smarty_tpl->tpl_vars['frame']->value['code'] != '') {?>

                                                    <pre data-line="<?php echo $_smarty_tpl->tpl_vars['frame']->value['highlight_line'];?>
" data-start="<?php echo ($_smarty_tpl->tpl_vars['frame']->value['start_line']);?>
">
                                                        <code class="language-php line-numbers"><?php echo $_smarty_tpl->tpl_vars['frame']->value['code'];?>
</code>
                                                    </pre>

                                                <?php } else { ?>

                                                    <pre>Cannot read file.</pre>

                                                <?php }?>

                                            </div>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php }?>

    </div>
</body>

<style>

* {
    box-sizing: border-box
}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    max-height: inherit;
}

/* Style the buttons that are used to open the tab content */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 15px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    width: 70%;
}

</style>

<?php echo '<script'; ?>
>
hideAllFrames();

function hideAllFrames() {
    $('.tabcontent').each(function() {
        $(this).css('display', 'none');
    });
}

function removeAllActive() {
    $('.tablinks').each(function() {
        $(this).removeClass('active');
    });
}

$(document).ready(function() {
    openFrame(<?php echo count($_smarty_tpl->tpl_vars['FRAMES']->value)+$_smarty_tpl->tpl_vars['SKIP_FRAMES']->value;?>
)
});

function openFrame(id) {

    hideAllFrames();

    removeAllActive();

    $('#frame-' + id).css('display', 'block');
    $('#button-' + id).addClass('active');
}
<?php echo '</script'; ?>
>

</html>
<?php }
}
