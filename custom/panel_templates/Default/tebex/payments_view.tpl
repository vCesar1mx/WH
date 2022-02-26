{include file='header.tpl'}
<body id="page-top">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    {include file='sidebar.tpl'}

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main content -->
        <div id="content">

            <!-- Topbar -->
            {include file='navbar.tpl'}

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{$PAYMENTS}</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{$PANEL_INDEX}">{$DASHBOARD}</a></li>
                        <li class="breadcrumb-item active">{$BUYCRAFT}</li>
                        <li class="breadcrumb-item active">{$PAYMENTS}</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                {include file='includes/update.tpl'}

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5 style="display:inline">{$VIEWING_PAYMENT}</h5>
                        <div class="float-md-right">
                            <a class="btn btn-primary" href="{$BACK_LINK}">{$BACK}</a>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        {include file='includes/alerts.tpl'}

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <colgroup>
                                    <col span="1" style="width: 50%">
                                    <col span="1" style="width: 50%">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <td><strong>{$IGN}</strong></td>
                                    <td><img src="{$AVATAR}" class="rounded" style="max-height:32px;max-width:32px;" alt="{$IGN_VALUE}"> <a style="{$STYLE}" href="{$USER_LINK}">{$IGN_VALUE}</a></td>
                                </tr>
                                <tr>
                                    <td><strong>{$UUID}</strong></td>
                                    <td>{$UUID_VALUE}</td>
                                </tr>
                                <tr>
                                    <td><strong>{$PRICE}</strong></td>
                                    <td>{$CURRENCY_SYMBOL}{$PRICE_VALUE} ({$CURRENCY_ISO})</td>
                                </tr>
                                <tr>
                                    <td><strong>{$DATE}</strong></td>
                                    <td>{$DATE_VALUE}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <!-- Spacing -->
                <div style="height:1rem;"></div>

                <!-- End Page Content -->
            </div>

            <!-- End Main Content -->
        </div>

        {include file='footer.tpl'}

    </div>
</div>

{include file='scripts.tpl'}

</body>
</html>
