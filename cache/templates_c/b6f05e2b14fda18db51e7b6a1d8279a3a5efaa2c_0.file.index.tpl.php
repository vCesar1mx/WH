<?php
/* Smarty version 3.1.39, created on 2022-01-31 20:18:19
  from '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f8440b307b20_40189909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6f05e2b14fda18db51e7b6a1d8279a3a5efaa2c' => 
    array (
      0 => '/var/www/html3/namelessmc/Nameless-2.0.0-pr12/custom/panel_templates/Default/index.tpl',
      1 => 1633862423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:includes/update.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_61f8440b307b20_40189909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body id="page-top">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


            <!-- Main content -->
            <div id="content">

                <!-- Topbar -->
                <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</h1>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['DIRECTORY_WARNING']->value))) {?>
                    <div class="alert alert-warning">
                        <?php echo $_smarty_tpl->tpl_vars['DIRECTORY_WARNING']->value;?>

                    </div>
                    <?php }?> <?php if (count($_smarty_tpl->tpl_vars['DASHBOARD_STATS']->value)) {?> <?php $_smarty_tpl->_assignInScope('i', 0);?>
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DASHBOARD_STATS']->value, 'stat');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?> <?php if ($_smarty_tpl->tpl_vars['i']->value%4 == 0) {?>
                    </div>
                    <div class="row">
                        <?php }?> <?php echo $_smarty_tpl->tpl_vars['stat']->value->getContent();?>
 <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <?php }?>

                    <div class="row">
                        <div class="col-md-9">
                            <?php if (count($_smarty_tpl->tpl_vars['GRAPHS']->value)) {?>
                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-white"><i class="far fa-chart-bar"></i> <?php echo $_smarty_tpl->tpl_vars['STATISTICS']->value;?>
</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <?php $_smarty_tpl->_assignInScope('i', 0);?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GRAPHS']->value, 'graph', false, 'key');
$_smarty_tpl->tpl_vars['graph']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['graph']->value) {
$_smarty_tpl->tpl_vars['graph']->do_else = false;
?>
                                            <a class="dropdown-item" href="#" onclick="drawChart(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a> <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area" style="height: 100%">
                                        <canvas id="graphDiv"></canvas>
                                    </div>
                                </div>
                            </div>
                            <?php }?> <?php if (count($_smarty_tpl->tpl_vars['MAIN_ITEMS']->value)) {?> <?php $_smarty_tpl->_assignInScope('i', 0);?> <?php $_smarty_tpl->_assignInScope('counter', 0);?>
                            <div class="row justify-content-md-center">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MAIN_ITEMS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> <?php $_smarty_tpl->_assignInScope('width', round((12*$_smarty_tpl->tpl_vars['item']->value->getWidth()),1));?> <?php $_smarty_tpl->_assignInScope('counter', ($_smarty_tpl->tpl_vars['counter']->value+$_smarty_tpl->tpl_vars['width']->value));?> <?php if ($_smarty_tpl->tpl_vars['counter']->value > 12) {?> <?php $_smarty_tpl->_assignInScope('counter', 0);?>
                            </div><br />
                            <div class="row justify-content-md-center">
                                <?php }?>
                                <div class="col-md-<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->getContent();?>
</div>
                                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <?php }?>
                        </div>

                        <div class="col-md-3">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-white"><i class="far fa-newspaper"></i> <?php echo $_smarty_tpl->tpl_vars['NAMELESS_NEWS']->value;?>
</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['NO_NEWS']->value))) {?>
                                    <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['NO_NEWS']->value;?>
</div>
                                    <?php } else { ?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NEWS']->value, 'item', false, NULL, 'newsarray', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_newsarray']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_newsarray']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_newsarray']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_newsarray']->value['total'];
?>
                                    <a href="#" onclick="confirmLeaveSite('<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
')"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                    <br /><small><?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
 | <span data-toggle="tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['date_friendly'];?>
</span></small> <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_newsarray']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_newsarray']->value['last'] : null)) {?>
                                    <hr /><?php }?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
                                </div>
                            </div>

                            <?php if ((isset($_smarty_tpl->tpl_vars['SERVER_COMPATIBILITY']->value))) {?>
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-white"><i class="fas fa-wrench"></i> <?php echo $_smarty_tpl->tpl_vars['SERVER_COMPATIBILITY']->value;?>
</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <?php echo $_smarty_tpl->tpl_vars['NAMELESS_VERSION']->value;?>

                                    <hr /> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COMPAT_SUCCESS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
 <i class="fas fa-check-circle text-success"></i><br /> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php if (count($_smarty_tpl->tpl_vars['COMPAT_ERRORS']->value)) {?>
                                    <hr /> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COMPAT_ERRORS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
 <i class="fas fa-times-circle text-danger"></i><br /> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
                                </div>
                            </div>
                            <?php }?>

                        </div>

                        <!-- End Row -->
                    </div>

                    <!-- Spacing -->
                    <div style="height:1rem;"></div>

                    <!-- End Page Content -->
                </div>

                <!-- End Main Content -->
            </div>

            <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- End Content Wrapper -->
        </div>

        <!-- Confirm leave site modal -->
        <div class="modal fade" id="confirmLeaveSiteModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_LEAVE_SITE']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <a href="#" id="leaveSiteA" class="btn btn-primary" target="_blank"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if (count($_smarty_tpl->tpl_vars['GRAPHS']->value)) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';


        if (currentPanelTheme == "dark") {

        Chart.defaults.global.defaultFontColor = 'rgb(189,189,189)';

        graphs = [
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GRAPHS']->value, 'graph');
$_smarty_tpl->tpl_vars['graph']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['graph']->value) {
$_smarty_tpl->tpl_vars['graph']->do_else = false;
?>
            {
                type: 'line',
                data: {
                    labels: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graph']->value['keys'], 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>'<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
',<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
                    datasets: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graph']->value['datasets'], 'dataset');
$_smarty_tpl->tpl_vars['dataset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataset']->value) {
$_smarty_tpl->tpl_vars['dataset']->do_else = false;
?>
                        {
                            fill: false,
                            borderColor: '<?php echo $_smarty_tpl->tpl_vars['dataset']->value['colour'];?>
',
                            label: '<?php echo $_smarty_tpl->tpl_vars['dataset']->value['label'];?>
',
                            yAxisID: '<?php echo $_smarty_tpl->tpl_vars['dataset']->value['axis'];?>
',
                            lineTension: 0.3,
                            backgroundColor: "rgba(78, 115, 223, 0.05)",
                            pointRadius: 3,
                            pointBackgroundColor: "<?php echo $_smarty_tpl->tpl_vars['dataset']->value['colour'];?>
",
                            pointBorderColor: "<?php echo $_smarty_tpl->tpl_vars['dataset']->value['colour'];?>
",
                            pointHoverRadius: 3,
                            pointHoverBackgroundColor: "<?php echo $_smarty_tpl->tpl_vars['dataset']->value['colour'];?>
",
                            pointHoverBorderColor: "<?php echo $_smarty_tpl->tpl_vars['dataset']->value['colour'];?>
",
                            pointHitRadius: 10,
                            pointBorderWidth: 2,
                            data: [ <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataset']->value['data'], 'data', false, NULL, 'ds', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['total'];
?> <?php echo $_smarty_tpl->tpl_vars['data']->value;
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> ]
                        },
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ]
                },
                options: {
                    scales: {
                        xAxes: [{
                            type: 'time',
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            time: {
                                tooltipFormat: 'MMM D',
                                unit: 'day'
                            }
                        }],
                        yAxes: [
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graph']->value['axes'], 'axis', false, 'key');
$_smarty_tpl->tpl_vars['axis']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['axis']->value) {
$_smarty_tpl->tpl_vars['axis']->do_else = false;
?>
                            {
                                id: '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
',
                                type: 'linear',
                                position: '<?php echo $_smarty_tpl->tpl_vars['axis']->value;?>
'
                            },
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            {
                                gridLines: {
                                    color: "rgb(189,189,189)",
                                    zeroLineColor: "rgb(189,189,189)",
                                    drawBorder: false,
                                    borderDash: [2],
                                    zeroLineBorderDash: [2]
                                }
                            }
                        ]
                    },
                    tooltips: {
                        backgroundColor: "#303030",
                        bodyFontColor: "rgb(189,189,189)",
                        titleMarginBottom: 10,
                        titleFontColor: 'rgb(189,189,189)',
                        titleFontSize: 14,
                        borderColor: '#383838',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10
                    }
                }
            },
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        ];
        } else {

            Chart.defaults.global.defaultFontColor = '#858796';

            graphs = [
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GRAPHS']->value, 'graph');
$_smarty_tpl->tpl_vars['graph']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['graph']->value) {
$_smarty_tpl->tpl_vars['graph']->do_else = false;
?>
            {
                type: 'line',
                data: {
                    labels: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graph']->value['keys'], 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>'<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
',<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
                    datasets: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graph']->value['datasets'], 'dataset');
$_smarty_tpl->tpl_vars['dataset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataset']->value) {
$_smarty_tpl->tpl_vars['dataset']->do_else = false;
?>
                        {
                            fill: false,
                            borderColor: '<?php echo $_smarty_tpl->tpl_vars['dataset']->value['colour'];?>
',
                            label: '<?php echo $_smarty_tpl->tpl_vars['dataset']->value['label'];?>
',
                            yAxisID: '<?php echo $_smarty_tpl->tpl_vars['dataset']->value['axis'];?>
',
                            lineTension: 0.3,
                            backgroundColor: "rgba(78, 115, 223, 0.05)",
                            pointRadius: 3,
                            pointBackgroundColor: "<?php echo $_smarty_tpl->tpl_vars['dataset']->value['colour'];?>
",
                            pointBorderColor: "<?php echo $_smarty_tpl->tpl_vars['dataset']->value['colour'];?>
",
                            pointHoverRadius: 3,
                            pointHoverBackgroundColor: "<?php echo $_smarty_tpl->tpl_vars['dataset']->value['colour'];?>
",
                            pointHoverBorderColor: "<?php echo $_smarty_tpl->tpl_vars['dataset']->value['colour'];?>
",
                            pointHitRadius: 10,
                            pointBorderWidth: 2,
                            data: [ <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataset']->value['data'], 'data', false, NULL, 'ds', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['total'];
?> <?php echo $_smarty_tpl->tpl_vars['data']->value;
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_ds']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> ]
                        },
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ]
                },
                options: {
                    scales: {
                        xAxes: [{
                            type: 'time',
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            time: {
                                tooltipFormat: 'MMM D',
                                unit: 'day'
                            }
                        }],
                        yAxes: [
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graph']->value['axes'], 'axis', false, 'key');
$_smarty_tpl->tpl_vars['axis']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['axis']->value) {
$_smarty_tpl->tpl_vars['axis']->do_else = false;
?>
                            {
                                id: '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
',
                                type: 'linear',
                                position: '<?php echo $_smarty_tpl->tpl_vars['axis']->value;?>
'
                            },
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            {
                                gridLines: {
                                    color: "rgb(234, 236, 244)",
                                    zeroLineColor: "rgb(234, 236, 244)",
                                    drawBorder: false,
                                    borderDash: [2],
                                    zeroLineBorderDash: [2]
                                }
                            }
                        ]
                    },
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        titleMarginBottom: 10,
                        titleFontColor: '#6e707e',
                        titleFontSize: 14,
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10
                    }
                }
            },
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        ];

        }

        function drawChart(i) {
            let canvas = document.getElementById('graphDiv');
            let chart = new Chart(canvas, graphs[i]);
        }

        $(function() {
            drawChart(0);
        });
    <?php echo '</script'; ?>
>
    <?php }?>

    <?php echo '<script'; ?>
 type="text/javascript">
        function confirmLeaveSite(url) {
            $('#leaveSiteURL').html(url);
            $('#leaveSiteA').attr('href', url);
            $('#confirmLeaveSiteModal').modal().show();
        }
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
