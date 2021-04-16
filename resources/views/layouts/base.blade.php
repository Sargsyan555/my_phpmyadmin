<?php
$all_databases = \App\Models\Databases::all();
$all_databases = \App\Models\Databases::all();
?>
    <!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from demo.phpmyadmin.net/master-config/index.php?route=/server/databases by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 14:43:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="referrer" content="no-referrer">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style id="cfs-style">html{display: none;}</style>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="icon" href="https://demo.phpmyadmin.net/master-config/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://demo.phpmyadmin.net/master-config/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://demo.phpmyadmin.net/master-config/themes/pmahomme/jquery/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://demo.phpmyadmin.net/master-config/js/vendor/codemirror/lib/codemirror.css?v=5.2.0-dev">
    <link rel="stylesheet" type="text/css" href="https://demo.phpmyadmin.net/master-config/js/vendor/codemirror/addon/hint/show-hint.css?v=5.2.0-dev">
    <link rel="stylesheet" type="text/css" href="https://demo.phpmyadmin.net/master-config/js/vendor/codemirror/addon/lint/lint.css?v=5.2.0-dev">
    <link rel="stylesheet" type="text/css" href="https://demo.phpmyadmin.net/master-config/themes/pmahomme/css/theme.css?v=5.2.0-dev">
    <link rel="stylesheet" type="text/css" href="https://demo.phpmyadmin.net/master-config/themes/pmahomme/css/printview.css?v=5.2.0-dev" media="print" id="printcss">
    <title>demo.phpmyadmin.net / phpMyAdmin demo - MySQL | phpMyAdmin 5.2.0-dev</title>
    <script data-cfasync="false" type="text/javascript" src="https://demo.phpmyadmin.net/master-config/js/vendor/jquery/jquery.min.js?v=5.2.0-dev"></script>
    <script data-cfasync="false" type="text/javascript" src="https://demo.phpmyadmin.net/master-config/js/dist/cross_framing_protection.js?v=5.2.0-dev"></script>
    <script data-cfasync="false" type="text/javascript" src="https://demo.phpmyadmin.net/master-config/js/dist/navigation.js?v=5.2.0-dev"></script>


    @yield('style')
    <link rel="stylesheet" href="{{asset('assets/css/hierarchical.css')}}" type="text/css">

</head>
<body>
<div id="pma_navigation" data-config-navigation-width="240" style="width: 240px;">
    <div id="pma_navigation_resizer" style="left: 240px; width: 3px;"></div>
    <div id="pma_navigation_collapser" title="Hide panel" style="left: 240px;">←</div>
    <div id="pma_navigation_content">
        <div id="pma_navigation_header">

            <div id="pmalogo">
                <a href="/">
                    <img id="imgpmalogo" src="https://demo.phpmyadmin.net/master-config/themes/pmahomme/img/logo_left.png" alt="phpMyAdmin">
                </a>
            </div>

            <div id="navipanellinks">
                <a href="" title="Home"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Home" alt="Home" class="icon ic_b_home"></a>

                <a class="logout disableAjax" href="" title="Empty session data"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Empty session data" alt="Empty session data" class="icon ic_s_loggoff"></a>

                <a href="./url.php?url=https%3A%2F%2Fdocs.phpmyadmin.net%2Fen%2Flatest%2Findex.html" title="phpMyAdmin documentation" target="_blank" rel="noopener"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="phpMyAdmin documentation" alt="phpMyAdmin documentation" class="icon ic_b_docs"></a>

                <a href="http://localhost/phpmyadmin/doc/html/index.html" title="MySQL Documentation" target="_blank" rel="noopener noreferrer"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="MySQL Documentation" alt="MySQL Documentation" class="icon ic_b_sqlhelp"></a>

                <a id="https://dev.mysql.com/doc/refman/5.7/en/" href="#" title="Navigation panel settings"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Navigation panel settings" alt="Navigation panel settings" class="icon ic_s_cog"></a>

                    <a id="pma_navigation_reload" href="#" title="Reload navigation panel"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Reload navigation panel" alt="Reload navigation panel" class="icon ic_s_reload"></a>
            </div>


            <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Loading…" alt="Loading…" style="visibility: hidden; display:none" class="icon ic_ajax_clock_small throbber">
        </div>
        <div id="pma_navigation_tree" class="list_container synced highlight autoexpand" style="height: 509px;">
            <div id="pma_navigation_tree_content" style="height: 423.15px;">
                <ul>
                    <li class="first new_database italics">
                        <div class="block">
                            <i class="first"></i>
                        </div><div class="block second">
                            <a href="index.php?route=/server/databases&amp;server=2">
                                <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="" alt="" class="icon ic_b_newdb">
                            </a>
                        </div>
                        <a class="hover_show_full" href="db" title="New">New</a>
                        <div class="clearfloat"></div></li>
                    @foreach($all_databases as $db)
                        <li class="database">
                            <div class="block"><i></i><b></b>
                                <a type="button">
                                    <span class="hide paths_nav" data-apath="cm9vdA==.ZGJzc2c=" data-vpath="cm9vdA==.ZGJzc2c=" data-pos="0" ></span>
                                    <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" data-id="{{$db->id}}" class="expander icon ic_b_plus" style="">
                                </a>
                            </div>
                            <div class="block second">
                                <a>
                                    <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db">
                                </a>
                            </div>
                            <a href="db_structure?db={{$db->id}}" title="Structure">{{$db->new_db}}</a>
                            <div class="clearfloat"></div>
                            <div class="list_container toggle_table">
                            </div>
                        </li>

                    @endforeach
                </ul>
            </div>


        </div>
    </div>
</div>
<div id="floating_menubar"></div>
{{--Nav top--}}
<nav id="server-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="" alt="" class="icon ic_s_host">
            <a >
                Server: phpMyAdmin demo - MySQL
            </a>
        </li>

    </ol>
</nav>
{{--Menu--}}
<div id="topmenucontainer" class="menucontainer">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation" aria-controls="navbarNav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul id="topmenu" class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link text-nowrap" href="/db">
                        <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Databases" alt="Databases" class="icon ic_s_db">&nbsp;Databases
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-nowrap" href="/sql">
                        <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif"  class="icon ic_b_sql">&nbsp;SQL
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<span id="page_nav_icons">
      <span id="lock_page_icon"></span>
      <span id="page_settings_icon">
        <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Page-related settings" alt="Page-related settings" class="icon ic_s_cog">
      </span>
      <a id="goto_pagetop" href="#"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Click on the bar to scroll to top of page" alt="Click on the bar to scroll to top of page" class="icon ic_s_top"></a>
    </span>


@yield('content')



<div id="pma_demo">
    <div class="alert alert-primary" role="alert">
        <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="" alt="" class="icon ic_s_notice">         <a href="https://demo.phpmyadmin.net/master-config/index.php?route=/&amp;lang=en">phpMyAdmin Demo Server:</a>
        Git information missing!
    </div>
</div>
</body>
<script src="{{asset('assets/js/script.js')}}"></script>
@yield('scripts')
</html>

