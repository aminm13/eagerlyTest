<!doctype html>
<html class="no-js" lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Het Cultuurgebouw <?php echo the_title() ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="16x16" href="img/16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/32x32.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/144x144.png" />

    <script>if (typeof jQuery.ui == 'undefined') { document.write('<script type="text/javascript" src="js/jquery-ui.min.js"><\/script>') }</script>

    <script type="text/javascript" src="js/modernizr.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">less = { env: 'development' };</script>
    <script type="text/javascript" src="js/less.min.js"></script>

    <!--
    <?php // include 'styles.php'; ?>
    <link rel="stylesheet" href="style.css">
     -->

     <?php 
     
     wp_head();

     ?>


</head>
<body>
<div id="setGrid"></div>

<div id="container">

    <div class="search js-search search-ex">
        <div class="input search-ex">
            <input type="text" class="search-ex" placeholder="wat wil je vinden?" />
            <input type="submit" class="search-ex" value="" />
            <svg x="0px" y="0px" width="50%" height="100%" viewBox="-1 -1 26 26.1"><g id="icon-search">
                    <path id="search" d="M23.5,20.3l-5.7-5.7c0.9-1.4,1.4-3.1,1.4-4.9c0-5.2-4.5-9.7-9.7-9.7C4.2,0,0,4.2,0,9.4s4.5,9.7,9.7,9.7   c1.7,0,3.3-0.5,4.7-1.3l5.8,5.8c0.6,0.6,1.5,0.6,2,0l1.4-1.4C24.2,21.6,24,20.9,23.5,20.3z M2.9,9.4c0-3.6,2.9-6.5,6.5-6.5   s6.8,3.2,6.8,6.8s-2.9,6.5-6.5,6.5S2.9,13,2.9,9.4z" fill="#ef8f8f"></path>
                </g>
            </svg>
        </div>
    </div>

    <div class="hamburger js-hamburger show_mobile show_tablet hide_desktop">
        <div class="icon">
            <svg x="0px" y="0px" width="50%" viewBox="318 18 14 14"><g id="icon-hamburger">
                    <path id="_x3C_Compound_Path_x3E_" d="M331,21h-12v-2h12V21z M331,24h-12v2h12V24z M331,29h-12v2h12V29z" fill="#ef8f8f"></path>
                </g></svg>
        </div>
    </div>

    <header class="mobile-header js-mobile-header show_mobile show_tablet hide_desktop">
        <div class="logo">
            <a href="/">
                <svg x="0px" y="0px" width="20%" viewBox="-1 -1 147 202"><g id="logo">
                        <rect fill="#FFFFFF" width="145" height="200"></rect>
                        <g>
                            <g>
                                <path fill="#99D9F2" d="M18.2,15.6v7.7h9.5v-7.7h3.5v18.3h-3.5v-7.7h-9.5v7.7h-3.5V15.6H18.2z"></path>
                                <path fill="#1D1D1B" d="M61.8,15.6v2.8h-8v4.8h7.7v2.8h-7.7v5.2h8.2v2.8H50.3V15.6H61.8z"></path>
                                <path fill="#9C9B9B" d="M95.5,15.6v2.8h-6.4v15.5h-3.5V18.4h-6.4v-2.8H95.5z"></path>
                                <path fill="#1D1D1B" d="M24.4,48.7c1,0,2,0.1,2.9,0.3c1,0.2,2,0.6,3.1,1.2v3.2c-1.1-0.6-2.1-1.1-3-1.4c-0.9-0.3-1.9-0.4-2.9-0.4     c-1.3,0-2.4,0.3-3.4,0.8c-1,0.5-1.8,1.3-2.4,2.2c-0.6,0.9-0.8,2-0.8,3.2c0,1.2,0.3,2.3,0.8,3.2c0.6,0.9,1.3,1.7,2.3,2.2     c1,0.5,2.1,0.8,3.4,0.8c1,0,1.9-0.1,2.8-0.4c0.9-0.3,2-0.8,3.3-1.5v3.2c-1.1,0.6-2.2,1-3.2,1.3c-1,0.3-2.1,0.4-3.4,0.4     c-1.9,0-3.5-0.4-5-1.1c-1.5-0.7-2.6-1.8-3.5-3.2c-0.8-1.4-1.3-2.9-1.3-4.6c0-1.8,0.4-3.4,1.3-4.8c0.9-1.4,2-2.5,3.6-3.3     C20.8,49,22.5,48.7,24.4,48.7z"></path>
                                <path fill="#9C9B9B" d="M52,48.6v10.5c0,1.1,0.2,1.9,0.5,2.6c0.3,0.6,0.8,1.2,1.6,1.6c0.7,0.4,1.6,0.6,2.5,0.6     c1.1,0,2-0.2,2.7-0.6c0.7-0.4,1.3-0.9,1.6-1.6c0.3-0.7,0.5-1.6,0.5-2.8V48.6H65v10.7c0,2.4-0.7,4.3-2.2,5.6c-1.5,1.3-3.5,2-6.2,2     c-1.7,0-3.1-0.3-4.3-0.9c-1.2-0.6-2.2-1.5-2.8-2.6c-0.6-1.1-1-2.4-1-4V48.6H52z"></path>
                                <path fill="#1D1D1B" d="M87.6,48.6v15.5h8.7v2.8H84.2V48.6H87.6z"></path>
                                <path fill="#9C9B9B" d="M129.4,48.6v2.8h-6.3v15.5h-3.4V51.4h-6.3v-2.8H129.4z"></path>
                                <path fill="#1D1D1B" d="M52.1,81.7v10.5c0,1.1,0.2,1.9,0.5,2.6c0.3,0.6,0.8,1.2,1.6,1.6c0.7,0.4,1.6,0.6,2.6,0.6     c1.1,0,2-0.2,2.7-0.6c0.7-0.4,1.3-0.9,1.6-1.6c0.3-0.7,0.5-1.6,0.5-2.8V81.7H65v10.7c0,2.4-0.7,4.3-2.2,5.6c-1.5,1.3-3.5,2-6.2,2     c-1.7,0-3.1-0.3-4.3-0.9c-1.2-0.6-2.2-1.4-2.8-2.6c-0.6-1.1-1-2.4-1-3.9V81.7H52.1z"></path>
                                <path fill="#EE9092" d="M116.7,81.7v10.5c0,1.1,0.2,1.9,0.5,2.6c0.3,0.6,0.8,1.2,1.6,1.6c0.7,0.4,1.6,0.6,2.5,0.6     c1.1,0,2-0.2,2.7-0.6c0.7-0.4,1.3-0.9,1.6-1.6c0.3-0.7,0.5-1.6,0.5-2.8V81.7h3.5v10.7c0,2.4-0.7,4.3-2.2,5.6     c-1.5,1.3-3.5,1.9-6.2,1.9c-1.7,0-3.1-0.3-4.3-0.9c-1.2-0.6-2.2-1.4-2.8-2.6c-0.6-1.1-1-2.4-1-3.9V81.7H116.7z"></path>
                                <path fill="#80ABBF" d="M21.3,114.6c1.7,0,3.1,0.5,4.1,1.4c1.1,1,1.6,2.2,1.6,3.7c0,1-0.3,1.9-0.8,2.7c-0.5,0.8-1.3,1.4-2.3,1.8     c0.6,0.3,1.1,0.7,1.5,1.3c0.4,0.5,1,1.5,1.7,2.7c1.1,2.2,1.9,3.7,2.4,4.6h-3.9c-0.3-0.4-0.6-1-1.1-1.9c-1-1.9-1.7-3.3-2.2-3.9     c-0.5-0.7-0.9-1.2-1.3-1.4c-0.4-0.3-0.9-0.4-1.5-0.4h-1.3v7.7h-3.5v-18.3H21.3z M20.5,122.4c0.9,0,1.6-0.2,2.1-0.7     c0.5-0.5,0.8-1.1,0.8-1.9c0-0.8-0.3-1.5-0.8-1.9c-0.5-0.4-1.2-0.6-2.2-0.6h-2.2v5.1H20.5z"></path>
                                <path fill="#9C9B9B" d="M57.9,114.7c2.2,0,4.5,0.5,6.7,1.5v3.1c-2.2-1.1-4.4-1.6-6.5-1.6c-1.3,0-2.5,0.3-3.5,0.8     c-1,0.5-1.8,1.3-2.4,2.2c-0.6,1-0.9,2.1-0.9,3.3c0,1.8,0.6,3.3,1.9,4.4c1.2,1.1,2.9,1.7,4.9,1.7c0.6,0,1.1,0,1.6-0.1     c0.5-0.1,1.1-0.3,1.8-0.5v-3h-3v-2.7H65v7.3c-0.9,0.6-2,1.1-3.2,1.4c-1.3,0.3-2.6,0.5-3.9,0.5c-1.9,0-3.6-0.4-5.2-1.2     c-1.6-0.8-2.8-1.9-3.6-3.3c-0.9-1.4-1.3-3-1.3-4.7c0-1.7,0.4-3.3,1.3-4.7c0.9-1.4,2.1-2.5,3.7-3.3     C54.3,115.1,56,114.7,57.9,114.7z"></path>
                                <path fill="#1D1D1B" d="M95.9,114.6v2.8h-8.1v4.8h7.8v2.8h-7.8v5.2H96v2.8H84.3v-18.2H95.9z"></path>
                                <path fill="#9C9B9B" d="M122.7,114.6c1.7,0,3,0.4,4.1,1.3c1.1,0.9,1.6,2,1.6,3.3c0,0.8-0.2,1.6-0.7,2.2c-0.4,0.6-1.1,1.1-1.9,1.5     v0.2c1.3,0.3,2.3,0.9,3,1.7c0.7,0.8,1.1,1.8,1.1,3c0,1-0.3,1.9-0.8,2.7c-0.5,0.8-1.2,1.4-2.2,1.8c-0.9,0.4-2,0.6-3.2,0.6H116     v-18.3H122.7z M121.7,122.2c0.9,0,1.7-0.2,2.2-0.7c0.5-0.4,0.8-1.1,0.8-1.9c0-0.7-0.2-1.3-0.7-1.7c-0.5-0.4-1.1-0.6-2-0.6h-2.5     v4.8H121.7z M122.6,130.1c1.2,0,2.1-0.2,2.7-0.7c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-0.9-1.8c-0.6-0.4-1.4-0.7-2.4-0.7h-3.3v5.2     H122.6z"></path>
                                <path fill="#1D1D1B" d="M24.3,147.6c1.8,0,3.5,0.4,4.9,1.1c1.5,0.8,2.6,1.8,3.5,3.3c0.9,1.4,1.3,3,1.3,4.7c0,1.7-0.4,3.2-1.3,4.6     c-0.8,1.4-2,2.5-3.5,3.3c-1.5,0.8-3.2,1.2-5,1.2c-1.8,0-3.5-0.4-5-1.2c-1.5-0.8-2.7-1.9-3.5-3.3c-0.8-1.4-1.3-2.9-1.3-4.6     c0-1.6,0.4-3.1,1.3-4.6c0.8-1.4,2-2.5,3.5-3.3C20.7,148,22.4,147.6,24.3,147.6z M18.1,156.7c0,1.2,0.3,2.2,0.8,3.2     c0.5,0.9,1.3,1.7,2.2,2.2c1,0.5,2,0.8,3.2,0.8c1.8,0,3.3-0.6,4.5-1.7c1.2-1.1,1.8-2.6,1.8-4.4c0-1.2-0.3-2.2-0.8-3.2     c-0.5-0.9-1.3-1.7-2.2-2.2c-1-0.5-2-0.8-3.2-0.8c-1.2,0-2.3,0.3-3.2,0.8c-1,0.5-1.7,1.2-2.2,2.2     C18.3,154.5,18.1,155.5,18.1,156.7z"></path>
                                <path fill="#F5B885" d="M52,147.6v10.5c0,1.1,0.2,1.9,0.5,2.6c0.3,0.6,0.9,1.2,1.6,1.6c0.7,0.4,1.6,0.6,2.6,0.6     c1.1,0,2-0.2,2.7-0.6c0.8-0.4,1.3-0.9,1.6-1.6c0.3-0.7,0.5-1.6,0.5-2.8v-10.2h3.5v10.7c0,2.4-0.7,4.3-2.2,5.6     c-1.5,1.3-3.5,1.9-6.2,1.9c-1.7,0-3.1-0.3-4.4-0.9c-1.2-0.6-2.2-1.4-2.8-2.6c-0.7-1.1-1-2.4-1-3.9v-10.8H52z"></path>
                                <ellipse fill="#E01F21" cx="121.2" cy="24.7" rx="9.1" ry="9.1"></ellipse>
                                <ellipse fill="#ED7203" cx="23.5" cy="90.8" rx="9.1" ry="9.1"></ellipse>
                                <circle fill="#005680" cx="89.6" cy="90.8" r="9.1"></circle>
                                <circle fill="#2FB3E8" cx="121.1" cy="156.7" r="9.1"></circle>
                                <g>
                                    <path fill="#9C9B9B" d="M79.8,147.6l4.5,11.1l4.7-11.1h2.9l4.7,11.1l4.5-11.1h3.6l-7.4,18.2h-1.2l-5.7-13.3l-5.7,13.3h-1.1      l-7.4-18.2H79.8z"></path>
                                </g>
                            </g>
                            <g>
                                <path fill="#1D1D1B" d="M18.5,177.3h0.7v4.7h-0.7v-2h-2.6v2h-0.7v-4.7h0.7v2h2.6V177.3z"></path>
                                <path fill="#1D1D1B" d="M22.7,177.3h2.6v0.6h-2v1.4h1.9v0.6h-1.9v1.4h2v0.6h-2.7V177.3z"></path>
                                <path fill="#1D1D1B" d="M28.4,177.3h3.9v0.6h-1.6v4.1h-0.7v-4.1h-1.6V177.3z"></path>
                                <path fill="#1D1D1B" d="M44,180.9v0.7c-0.5,0.3-1.1,0.4-1.7,0.4c-0.5,0-1-0.1-1.3-0.3c-0.4-0.2-0.6-0.5-0.9-0.9     c-0.2-0.4-0.3-0.8-0.3-1.2c0-0.7,0.2-1.2,0.7-1.7c0.5-0.5,1.1-0.7,1.8-0.7c0.5,0,1,0.1,1.6,0.4v0.7c-0.5-0.3-1.1-0.5-1.6-0.5     c-0.5,0-1,0.2-1.3,0.5c-0.4,0.3-0.5,0.8-0.5,1.3c0,0.5,0.2,0.9,0.5,1.3c0.3,0.3,0.8,0.5,1.3,0.5C42.9,181.4,43.4,181.2,44,180.9z     "></path>
                                <path fill="#1D1D1B" d="M50.6,177.3h0.7v2.6c0,0.4,0,0.6-0.1,0.8c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.1-0.2,0.2-0.3,0.3     c-0.4,0.3-0.9,0.5-1.4,0.5c-0.6,0-1.1-0.2-1.5-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.2-0.1-0.5-0.1-0.8     v-2.6h0.7v2.6c0,0.4,0.1,0.7,0.2,0.9s0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.2,0.7,0.2c0.4,0,0.7-0.1,1-0.3c0.1-0.1,0.2-0.2,0.3-0.4     c0.1-0.2,0.1-0.4,0.1-0.8V177.3z"></path>
                                <path fill="#1D1D1B" d="M54.8,177.3h0.7v4.1h2.1v0.6h-2.8V177.3z"></path>
                                <path fill="#1D1D1B" d="M59.6,177.3h3.9v0.6h-1.6v4.1h-0.7v-4.1h-1.6V177.3z"></path>
                                <path fill="#1D1D1B" d="M70,177.3h0.7v2.6c0,0.4,0,0.6-0.1,0.8c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.1-0.2,0.2-0.3,0.3     c-0.4,0.3-0.9,0.5-1.4,0.5c-0.6,0-1.1-0.2-1.5-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.2-0.1-0.5-0.1-0.8     v-2.6h0.7v2.6c0,0.4,0.1,0.7,0.2,0.9c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.2,0.7,0.2c0.4,0,0.7-0.1,1-0.3     c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.1-0.4,0.1-0.8V177.3z"></path>
                                <path fill="#1D1D1B" d="M77.4,177.3h0.7v2.6c0,0.4,0,0.6-0.1,0.8c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.1-0.2,0.2-0.3,0.3     c-0.4,0.3-0.9,0.5-1.4,0.5c-0.6,0-1.1-0.2-1.5-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.2-0.1-0.5-0.1-0.8     v-2.6h0.7v2.6c0,0.4,0.1,0.7,0.2,0.9s0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.2,0.7,0.2c0.4,0,0.7-0.1,1-0.3c0.1-0.1,0.2-0.2,0.3-0.4     c0.1-0.2,0.1-0.4,0.1-0.8V177.3z"></path>
                                <path fill="#1D1D1B" d="M81.6,181.9v-4.7h1.2c0.5,0,0.8,0.1,1.1,0.4s0.4,0.5,0.4,0.9c0,0.3-0.1,0.5-0.2,0.7     c-0.1,0.2-0.3,0.3-0.6,0.4c0.1,0.1,0.3,0.2,0.4,0.4c0.1,0.2,0.3,0.5,0.6,0.9c0.2,0.3,0.3,0.5,0.4,0.6l0.2,0.3h-0.8l-0.2-0.3     c0,0,0,0,0-0.1l-0.1-0.2l-0.2-0.3l-0.2-0.4c-0.1-0.2-0.3-0.3-0.4-0.5c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.2-0.1-0.5-0.1h-0.2v2     H81.6z M82.5,177.9h-0.2v1.5h0.3c0.3,0,0.6,0,0.7-0.1c0.1-0.1,0.2-0.1,0.3-0.3c0.1-0.1,0.1-0.2,0.1-0.4c0-0.1,0-0.3-0.1-0.4     c-0.1-0.1-0.2-0.2-0.3-0.3C83.1,177.9,82.8,177.9,82.5,177.9z"></path>
                                <path fill="#1D1D1B" d="M90.8,179.7h1.6v2c-0.6,0.2-1.1,0.4-1.7,0.4c-0.8,0-1.4-0.2-1.8-0.7c-0.5-0.5-0.7-1-0.7-1.7     c0-0.7,0.2-1.3,0.7-1.7c0.5-0.5,1.1-0.7,1.8-0.7c0.3,0,0.5,0,0.7,0.1c0.2,0.1,0.5,0.2,0.9,0.3v0.7c-0.6-0.3-1.1-0.5-1.7-0.5     c-0.5,0-0.9,0.2-1.3,0.5c-0.3,0.3-0.5,0.8-0.5,1.3c0,0.5,0.2,1,0.5,1.3c0.3,0.3,0.8,0.5,1.3,0.5c0.3,0,0.6-0.1,1-0.2l0.1,0v-1     h-0.9V179.7z"></path>
                                <path fill="#1D1D1B" d="M96,177.3h2.6v0.6h-2v1.4h1.9v0.6h-1.9v1.4h2v0.6H96V177.3z"></path>
                                <path fill="#1D1D1B" d="M103.5,181.9H102v-4.7h1.2c0.4,0,0.7,0.1,0.9,0.2c0.2,0.1,0.4,0.2,0.5,0.4c0.1,0.2,0.2,0.4,0.2,0.6     c0,0.5-0.2,0.8-0.7,1c0.3,0.1,0.6,0.2,0.8,0.4c0.2,0.2,0.3,0.5,0.3,0.8c0,0.2-0.1,0.4-0.2,0.6c-0.1,0.2-0.3,0.3-0.5,0.5     C104.2,181.9,103.9,181.9,103.5,181.9z M103.2,177.9h-0.6v1.4h0.4c0.4,0,0.6-0.1,0.8-0.2s0.2-0.3,0.2-0.5     C104.1,178.1,103.8,177.9,103.2,177.9z M103.3,179.9h-0.6v1.5h0.7c0.4,0,0.6,0,0.7-0.1c0.1-0.1,0.2-0.1,0.3-0.3     c0.1-0.1,0.1-0.2,0.1-0.4c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.2-0.2-0.4-0.3C103.8,179.9,103.6,179.9,103.3,179.9z"></path>
                                <path fill="#1D1D1B" d="M110.7,177.2c0.7,0,1.3,0.2,1.8,0.7c0.5,0.5,0.7,1,0.7,1.7c0,0.7-0.2,1.3-0.7,1.7     c-0.5,0.4-1.1,0.7-1.8,0.7c-0.7,0-1.3-0.2-1.8-0.7c-0.5-0.5-0.7-1-0.7-1.7c0-0.7,0.2-1.3,0.7-1.7     C109.4,177.4,110,177.2,110.7,177.2z M110.7,177.9c-0.5,0-1,0.2-1.3,0.5c-0.3,0.3-0.5,0.8-0.5,1.3c0,0.5,0.2,0.9,0.5,1.3     c0.3,0.3,0.8,0.5,1.3,0.5c0.5,0,1-0.2,1.3-0.5c0.3-0.3,0.5-0.8,0.5-1.3c0-0.5-0.2-0.9-0.5-1.2C111.6,178,111.2,177.9,110.7,177.9     z"></path>
                                <path fill="#1D1D1B" d="M119.8,177.3h0.7v2.6c0,0.4,0,0.6-0.1,0.8c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.1-0.2,0.2-0.3,0.3     c-0.4,0.3-0.9,0.5-1.4,0.5c-0.6,0-1.1-0.2-1.5-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.2-0.1-0.5-0.1-0.8     v-2.6h0.7v2.6c0,0.4,0,0.7,0.2,0.9c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.2,0.7,0.2c0.4,0,0.7-0.1,1-0.3     c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.1-0.4,0.1-0.8V177.3z"></path>
                                <path fill="#1D1D1B" d="M130,177.3h0.7l-1.9,4.7h-0.1l-1.5-3.8l-1.5,3.8h-0.1l-1.9-4.7h0.7l1.3,3.2l1.3-3.2h0.6l1.3,3.2     L130,177.3z"></path>
                            </g>
                        </g>
                    </g></svg>
            </a>
        </div>
    </header>

    <div class="mobile-page-nav js-mobile-page-nav show_mobile show_tablet hide_desktop">
        <div class="inner-mobile-page-nav">
            <div class="scroller">
                <div class="inner">
                    <nav>
                        <!-- zelfde menu als in page-aside (zie hieronder)-->

                        <ul>
                            <li>
                                <a href="detail.php" title="Ontdek Het Cultuurgebouw">Ontdek Het Cultuurgebouw</a>
                                <div class="icon"><i class="svg-icon" data-icon="icon-arrow" data-fill="#ef8f8f"></i></div>
                                <div class="submenu js-submenu">
                                    <!-- zelfde menu als op detailpagina -->
                                    <ul>
                                        <li><a href="detail.php">Missie</a></li>
                                        <li><a href="detail.php">ANBI</a></li>
                                        <li><a href="detail.php">Jaarverslagen</a></li>
                                        <li><a href="detail.php">Pers</a></li>
                                        <li><a href="detail.php">Sponsoren</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="active" href="uitgelicht-overzicht.php" title="Uitgelicht">Uitgelicht</a>
                            </li>
                            <li>
                                <a href="verhuur.php" title="Verhuur">Verhuur</a>
                            </li>
                            <li>
                                <a href="detail.php" title="Over ons">Over ons</a>
                            </li>
                            <li>
                                <a href="detail.php" title="Vacatures">Vacatures</a>
                            </li>
                            <li>
                                <a href="detail.php" title="Contact">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="bg-fix"></div>
        </div>
    </div>

    <aside class="page-aside js-page-aside hide_mobile hide_tablet show_desktop">

        <div class="logo">
            <a href="/">
                <svg x="0px" y="0px" width="100%" viewBox="-1 -1 147 202"><g id="logo">
                        <rect fill="#FFFFFF" width="145" height="200"></rect>
                        <g>
                            <g>
                                <path fill="#99D9F2" d="M18.2,15.6v7.7h9.5v-7.7h3.5v18.3h-3.5v-7.7h-9.5v7.7h-3.5V15.6H18.2z"></path>
                                <path fill="#1D1D1B" d="M61.8,15.6v2.8h-8v4.8h7.7v2.8h-7.7v5.2h8.2v2.8H50.3V15.6H61.8z"></path>
                                <path fill="#9C9B9B" d="M95.5,15.6v2.8h-6.4v15.5h-3.5V18.4h-6.4v-2.8H95.5z"></path>
                                <path fill="#1D1D1B" d="M24.4,48.7c1,0,2,0.1,2.9,0.3c1,0.2,2,0.6,3.1,1.2v3.2c-1.1-0.6-2.1-1.1-3-1.4c-0.9-0.3-1.9-0.4-2.9-0.4     c-1.3,0-2.4,0.3-3.4,0.8c-1,0.5-1.8,1.3-2.4,2.2c-0.6,0.9-0.8,2-0.8,3.2c0,1.2,0.3,2.3,0.8,3.2c0.6,0.9,1.3,1.7,2.3,2.2     c1,0.5,2.1,0.8,3.4,0.8c1,0,1.9-0.1,2.8-0.4c0.9-0.3,2-0.8,3.3-1.5v3.2c-1.1,0.6-2.2,1-3.2,1.3c-1,0.3-2.1,0.4-3.4,0.4     c-1.9,0-3.5-0.4-5-1.1c-1.5-0.7-2.6-1.8-3.5-3.2c-0.8-1.4-1.3-2.9-1.3-4.6c0-1.8,0.4-3.4,1.3-4.8c0.9-1.4,2-2.5,3.6-3.3     C20.8,49,22.5,48.7,24.4,48.7z"></path>
                                <path fill="#9C9B9B" d="M52,48.6v10.5c0,1.1,0.2,1.9,0.5,2.6c0.3,0.6,0.8,1.2,1.6,1.6c0.7,0.4,1.6,0.6,2.5,0.6     c1.1,0,2-0.2,2.7-0.6c0.7-0.4,1.3-0.9,1.6-1.6c0.3-0.7,0.5-1.6,0.5-2.8V48.6H65v10.7c0,2.4-0.7,4.3-2.2,5.6c-1.5,1.3-3.5,2-6.2,2     c-1.7,0-3.1-0.3-4.3-0.9c-1.2-0.6-2.2-1.5-2.8-2.6c-0.6-1.1-1-2.4-1-4V48.6H52z"></path>
                                <path fill="#1D1D1B" d="M87.6,48.6v15.5h8.7v2.8H84.2V48.6H87.6z"></path>
                                <path fill="#9C9B9B" d="M129.4,48.6v2.8h-6.3v15.5h-3.4V51.4h-6.3v-2.8H129.4z"></path>
                                <path fill="#1D1D1B" d="M52.1,81.7v10.5c0,1.1,0.2,1.9,0.5,2.6c0.3,0.6,0.8,1.2,1.6,1.6c0.7,0.4,1.6,0.6,2.6,0.6     c1.1,0,2-0.2,2.7-0.6c0.7-0.4,1.3-0.9,1.6-1.6c0.3-0.7,0.5-1.6,0.5-2.8V81.7H65v10.7c0,2.4-0.7,4.3-2.2,5.6c-1.5,1.3-3.5,2-6.2,2     c-1.7,0-3.1-0.3-4.3-0.9c-1.2-0.6-2.2-1.4-2.8-2.6c-0.6-1.1-1-2.4-1-3.9V81.7H52.1z"></path>
                                <path fill="#EE9092" d="M116.7,81.7v10.5c0,1.1,0.2,1.9,0.5,2.6c0.3,0.6,0.8,1.2,1.6,1.6c0.7,0.4,1.6,0.6,2.5,0.6     c1.1,0,2-0.2,2.7-0.6c0.7-0.4,1.3-0.9,1.6-1.6c0.3-0.7,0.5-1.6,0.5-2.8V81.7h3.5v10.7c0,2.4-0.7,4.3-2.2,5.6     c-1.5,1.3-3.5,1.9-6.2,1.9c-1.7,0-3.1-0.3-4.3-0.9c-1.2-0.6-2.2-1.4-2.8-2.6c-0.6-1.1-1-2.4-1-3.9V81.7H116.7z"></path>
                                <path fill="#80ABBF" d="M21.3,114.6c1.7,0,3.1,0.5,4.1,1.4c1.1,1,1.6,2.2,1.6,3.7c0,1-0.3,1.9-0.8,2.7c-0.5,0.8-1.3,1.4-2.3,1.8     c0.6,0.3,1.1,0.7,1.5,1.3c0.4,0.5,1,1.5,1.7,2.7c1.1,2.2,1.9,3.7,2.4,4.6h-3.9c-0.3-0.4-0.6-1-1.1-1.9c-1-1.9-1.7-3.3-2.2-3.9     c-0.5-0.7-0.9-1.2-1.3-1.4c-0.4-0.3-0.9-0.4-1.5-0.4h-1.3v7.7h-3.5v-18.3H21.3z M20.5,122.4c0.9,0,1.6-0.2,2.1-0.7     c0.5-0.5,0.8-1.1,0.8-1.9c0-0.8-0.3-1.5-0.8-1.9c-0.5-0.4-1.2-0.6-2.2-0.6h-2.2v5.1H20.5z"></path>
                                <path fill="#9C9B9B" d="M57.9,114.7c2.2,0,4.5,0.5,6.7,1.5v3.1c-2.2-1.1-4.4-1.6-6.5-1.6c-1.3,0-2.5,0.3-3.5,0.8     c-1,0.5-1.8,1.3-2.4,2.2c-0.6,1-0.9,2.1-0.9,3.3c0,1.8,0.6,3.3,1.9,4.4c1.2,1.1,2.9,1.7,4.9,1.7c0.6,0,1.1,0,1.6-0.1     c0.5-0.1,1.1-0.3,1.8-0.5v-3h-3v-2.7H65v7.3c-0.9,0.6-2,1.1-3.2,1.4c-1.3,0.3-2.6,0.5-3.9,0.5c-1.9,0-3.6-0.4-5.2-1.2     c-1.6-0.8-2.8-1.9-3.6-3.3c-0.9-1.4-1.3-3-1.3-4.7c0-1.7,0.4-3.3,1.3-4.7c0.9-1.4,2.1-2.5,3.7-3.3     C54.3,115.1,56,114.7,57.9,114.7z"></path>
                                <path fill="#1D1D1B" d="M95.9,114.6v2.8h-8.1v4.8h7.8v2.8h-7.8v5.2H96v2.8H84.3v-18.2H95.9z"></path>
                                <path fill="#9C9B9B" d="M122.7,114.6c1.7,0,3,0.4,4.1,1.3c1.1,0.9,1.6,2,1.6,3.3c0,0.8-0.2,1.6-0.7,2.2c-0.4,0.6-1.1,1.1-1.9,1.5     v0.2c1.3,0.3,2.3,0.9,3,1.7c0.7,0.8,1.1,1.8,1.1,3c0,1-0.3,1.9-0.8,2.7c-0.5,0.8-1.2,1.4-2.2,1.8c-0.9,0.4-2,0.6-3.2,0.6H116     v-18.3H122.7z M121.7,122.2c0.9,0,1.7-0.2,2.2-0.7c0.5-0.4,0.8-1.1,0.8-1.9c0-0.7-0.2-1.3-0.7-1.7c-0.5-0.4-1.1-0.6-2-0.6h-2.5     v4.8H121.7z M122.6,130.1c1.2,0,2.1-0.2,2.7-0.7c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-0.9-1.8c-0.6-0.4-1.4-0.7-2.4-0.7h-3.3v5.2     H122.6z"></path>
                                <path fill="#1D1D1B" d="M24.3,147.6c1.8,0,3.5,0.4,4.9,1.1c1.5,0.8,2.6,1.8,3.5,3.3c0.9,1.4,1.3,3,1.3,4.7c0,1.7-0.4,3.2-1.3,4.6     c-0.8,1.4-2,2.5-3.5,3.3c-1.5,0.8-3.2,1.2-5,1.2c-1.8,0-3.5-0.4-5-1.2c-1.5-0.8-2.7-1.9-3.5-3.3c-0.8-1.4-1.3-2.9-1.3-4.6     c0-1.6,0.4-3.1,1.3-4.6c0.8-1.4,2-2.5,3.5-3.3C20.7,148,22.4,147.6,24.3,147.6z M18.1,156.7c0,1.2,0.3,2.2,0.8,3.2     c0.5,0.9,1.3,1.7,2.2,2.2c1,0.5,2,0.8,3.2,0.8c1.8,0,3.3-0.6,4.5-1.7c1.2-1.1,1.8-2.6,1.8-4.4c0-1.2-0.3-2.2-0.8-3.2     c-0.5-0.9-1.3-1.7-2.2-2.2c-1-0.5-2-0.8-3.2-0.8c-1.2,0-2.3,0.3-3.2,0.8c-1,0.5-1.7,1.2-2.2,2.2     C18.3,154.5,18.1,155.5,18.1,156.7z"></path>
                                <path fill="#F5B885" d="M52,147.6v10.5c0,1.1,0.2,1.9,0.5,2.6c0.3,0.6,0.9,1.2,1.6,1.6c0.7,0.4,1.6,0.6,2.6,0.6     c1.1,0,2-0.2,2.7-0.6c0.8-0.4,1.3-0.9,1.6-1.6c0.3-0.7,0.5-1.6,0.5-2.8v-10.2h3.5v10.7c0,2.4-0.7,4.3-2.2,5.6     c-1.5,1.3-3.5,1.9-6.2,1.9c-1.7,0-3.1-0.3-4.4-0.9c-1.2-0.6-2.2-1.4-2.8-2.6c-0.7-1.1-1-2.4-1-3.9v-10.8H52z"></path>
                                <ellipse fill="#E01F21" cx="121.2" cy="24.7" rx="9.1" ry="9.1"></ellipse>
                                <ellipse fill="#ED7203" cx="23.5" cy="90.8" rx="9.1" ry="9.1"></ellipse>
                                <circle fill="#005680" cx="89.6" cy="90.8" r="9.1"></circle>
                                <circle fill="#2FB3E8" cx="121.1" cy="156.7" r="9.1"></circle>
                                <g>
                                    <path fill="#9C9B9B" d="M79.8,147.6l4.5,11.1l4.7-11.1h2.9l4.7,11.1l4.5-11.1h3.6l-7.4,18.2h-1.2l-5.7-13.3l-5.7,13.3h-1.1      l-7.4-18.2H79.8z"></path>
                                </g>
                            </g>
                            <g>
                                <path fill="#1D1D1B" d="M18.5,177.3h0.7v4.7h-0.7v-2h-2.6v2h-0.7v-4.7h0.7v2h2.6V177.3z"></path>
                                <path fill="#1D1D1B" d="M22.7,177.3h2.6v0.6h-2v1.4h1.9v0.6h-1.9v1.4h2v0.6h-2.7V177.3z"></path>
                                <path fill="#1D1D1B" d="M28.4,177.3h3.9v0.6h-1.6v4.1h-0.7v-4.1h-1.6V177.3z"></path>
                                <path fill="#1D1D1B" d="M44,180.9v0.7c-0.5,0.3-1.1,0.4-1.7,0.4c-0.5,0-1-0.1-1.3-0.3c-0.4-0.2-0.6-0.5-0.9-0.9     c-0.2-0.4-0.3-0.8-0.3-1.2c0-0.7,0.2-1.2,0.7-1.7c0.5-0.5,1.1-0.7,1.8-0.7c0.5,0,1,0.1,1.6,0.4v0.7c-0.5-0.3-1.1-0.5-1.6-0.5     c-0.5,0-1,0.2-1.3,0.5c-0.4,0.3-0.5,0.8-0.5,1.3c0,0.5,0.2,0.9,0.5,1.3c0.3,0.3,0.8,0.5,1.3,0.5C42.9,181.4,43.4,181.2,44,180.9z     "></path>
                                <path fill="#1D1D1B" d="M50.6,177.3h0.7v2.6c0,0.4,0,0.6-0.1,0.8c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.1-0.2,0.2-0.3,0.3     c-0.4,0.3-0.9,0.5-1.4,0.5c-0.6,0-1.1-0.2-1.5-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.2-0.1-0.5-0.1-0.8     v-2.6h0.7v2.6c0,0.4,0.1,0.7,0.2,0.9s0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.2,0.7,0.2c0.4,0,0.7-0.1,1-0.3c0.1-0.1,0.2-0.2,0.3-0.4     c0.1-0.2,0.1-0.4,0.1-0.8V177.3z"></path>
                                <path fill="#1D1D1B" d="M54.8,177.3h0.7v4.1h2.1v0.6h-2.8V177.3z"></path>
                                <path fill="#1D1D1B" d="M59.6,177.3h3.9v0.6h-1.6v4.1h-0.7v-4.1h-1.6V177.3z"></path>
                                <path fill="#1D1D1B" d="M70,177.3h0.7v2.6c0,0.4,0,0.6-0.1,0.8c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.1-0.2,0.2-0.3,0.3     c-0.4,0.3-0.9,0.5-1.4,0.5c-0.6,0-1.1-0.2-1.5-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.2-0.1-0.5-0.1-0.8     v-2.6h0.7v2.6c0,0.4,0.1,0.7,0.2,0.9c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.2,0.7,0.2c0.4,0,0.7-0.1,1-0.3     c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.1-0.4,0.1-0.8V177.3z"></path>
                                <path fill="#1D1D1B" d="M77.4,177.3h0.7v2.6c0,0.4,0,0.6-0.1,0.8c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.1-0.2,0.2-0.3,0.3     c-0.4,0.3-0.9,0.5-1.4,0.5c-0.6,0-1.1-0.2-1.5-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.2-0.1-0.5-0.1-0.8     v-2.6h0.7v2.6c0,0.4,0.1,0.7,0.2,0.9s0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.2,0.7,0.2c0.4,0,0.7-0.1,1-0.3c0.1-0.1,0.2-0.2,0.3-0.4     c0.1-0.2,0.1-0.4,0.1-0.8V177.3z"></path>
                                <path fill="#1D1D1B" d="M81.6,181.9v-4.7h1.2c0.5,0,0.8,0.1,1.1,0.4s0.4,0.5,0.4,0.9c0,0.3-0.1,0.5-0.2,0.7     c-0.1,0.2-0.3,0.3-0.6,0.4c0.1,0.1,0.3,0.2,0.4,0.4c0.1,0.2,0.3,0.5,0.6,0.9c0.2,0.3,0.3,0.5,0.4,0.6l0.2,0.3h-0.8l-0.2-0.3     c0,0,0,0,0-0.1l-0.1-0.2l-0.2-0.3l-0.2-0.4c-0.1-0.2-0.3-0.3-0.4-0.5c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.2-0.1-0.5-0.1h-0.2v2     H81.6z M82.5,177.9h-0.2v1.5h0.3c0.3,0,0.6,0,0.7-0.1c0.1-0.1,0.2-0.1,0.3-0.3c0.1-0.1,0.1-0.2,0.1-0.4c0-0.1,0-0.3-0.1-0.4     c-0.1-0.1-0.2-0.2-0.3-0.3C83.1,177.9,82.8,177.9,82.5,177.9z"></path>
                                <path fill="#1D1D1B" d="M90.8,179.7h1.6v2c-0.6,0.2-1.1,0.4-1.7,0.4c-0.8,0-1.4-0.2-1.8-0.7c-0.5-0.5-0.7-1-0.7-1.7     c0-0.7,0.2-1.3,0.7-1.7c0.5-0.5,1.1-0.7,1.8-0.7c0.3,0,0.5,0,0.7,0.1c0.2,0.1,0.5,0.2,0.9,0.3v0.7c-0.6-0.3-1.1-0.5-1.7-0.5     c-0.5,0-0.9,0.2-1.3,0.5c-0.3,0.3-0.5,0.8-0.5,1.3c0,0.5,0.2,1,0.5,1.3c0.3,0.3,0.8,0.5,1.3,0.5c0.3,0,0.6-0.1,1-0.2l0.1,0v-1     h-0.9V179.7z"></path>
                                <path fill="#1D1D1B" d="M96,177.3h2.6v0.6h-2v1.4h1.9v0.6h-1.9v1.4h2v0.6H96V177.3z"></path>
                                <path fill="#1D1D1B" d="M103.5,181.9H102v-4.7h1.2c0.4,0,0.7,0.1,0.9,0.2c0.2,0.1,0.4,0.2,0.5,0.4c0.1,0.2,0.2,0.4,0.2,0.6     c0,0.5-0.2,0.8-0.7,1c0.3,0.1,0.6,0.2,0.8,0.4c0.2,0.2,0.3,0.5,0.3,0.8c0,0.2-0.1,0.4-0.2,0.6c-0.1,0.2-0.3,0.3-0.5,0.5     C104.2,181.9,103.9,181.9,103.5,181.9z M103.2,177.9h-0.6v1.4h0.4c0.4,0,0.6-0.1,0.8-0.2s0.2-0.3,0.2-0.5     C104.1,178.1,103.8,177.9,103.2,177.9z M103.3,179.9h-0.6v1.5h0.7c0.4,0,0.6,0,0.7-0.1c0.1-0.1,0.2-0.1,0.3-0.3     c0.1-0.1,0.1-0.2,0.1-0.4c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.2-0.2-0.4-0.3C103.8,179.9,103.6,179.9,103.3,179.9z"></path>
                                <path fill="#1D1D1B" d="M110.7,177.2c0.7,0,1.3,0.2,1.8,0.7c0.5,0.5,0.7,1,0.7,1.7c0,0.7-0.2,1.3-0.7,1.7     c-0.5,0.4-1.1,0.7-1.8,0.7c-0.7,0-1.3-0.2-1.8-0.7c-0.5-0.5-0.7-1-0.7-1.7c0-0.7,0.2-1.3,0.7-1.7     C109.4,177.4,110,177.2,110.7,177.2z M110.7,177.9c-0.5,0-1,0.2-1.3,0.5c-0.3,0.3-0.5,0.8-0.5,1.3c0,0.5,0.2,0.9,0.5,1.3     c0.3,0.3,0.8,0.5,1.3,0.5c0.5,0,1-0.2,1.3-0.5c0.3-0.3,0.5-0.8,0.5-1.3c0-0.5-0.2-0.9-0.5-1.2C111.6,178,111.2,177.9,110.7,177.9     z"></path>
                                <path fill="#1D1D1B" d="M119.8,177.3h0.7v2.6c0,0.4,0,0.6-0.1,0.8c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.1-0.2,0.2-0.3,0.3     c-0.4,0.3-0.9,0.5-1.4,0.5c-0.6,0-1.1-0.2-1.5-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.2-0.1-0.5-0.1-0.8     v-2.6h0.7v2.6c0,0.4,0,0.7,0.2,0.9c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.2,0.7,0.2c0.4,0,0.7-0.1,1-0.3     c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.1-0.4,0.1-0.8V177.3z"></path>
                                <path fill="#1D1D1B" d="M130,177.3h0.7l-1.9,4.7h-0.1l-1.5-3.8l-1.5,3.8h-0.1l-1.9-4.7h0.7l1.3,3.2l1.3-3.2h0.6l1.3,3.2     L130,177.3z"></path>
                            </g>
                        </g>
                    </g></svg>
            </a>
        </div>

        <nav class="page-nav js-page-nav">
            <ul>
                <li><a href="detail.php" title="Ontdek Het Cultuurgebouw">Ontdek Het Cultuurgebouw<i class="svg-icon" data-icon="icon-arrow" data-fill="#ef8f8f" data-rotate="-90" data-offset="6"></i></a></li>
                <li><a class="active" href="uitgelicht-overzicht.php" title="Uitgelicht">Uitgelicht<i class="svg-icon" data-icon="icon-arrow" data-fill="#ef8f8f" data-rotate="-90" data-offset="6"></i></a></li>
                <li><a href="verhuur.php" title="Verhuur">Verhuur<i class="svg-icon" data-icon="icon-arrow" data-fill="#ef8f8f" data-rotate="-90" data-offset="6"></i></a></li>
            </ul>
        </nav>

        <nav class="aside-footer-nav js-aside-footer-nav">
            <ul>
                <li><a href="detail.php" title="Over ons">Over ons</a></li>
                <li><a href="detail.php" title="Vacatures">Vacatures</a></li>
                <li><a href="detail.php" title="Contact">Contact</a></li>
            </ul>
        </nav>

    </aside>