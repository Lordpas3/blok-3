<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet"/>
    <link href="/default.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/fonts.css" rel="stylesheet" type="text/css" media="all"/>

    <!--[if IE 6]>
    <link href="default_ie6.css" rel="stylesheet" type="text/css"/><![endif]-->

</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="/home">Pascal van der Maden</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{Request::is('/') ? 'current_page_item' : ''}}"><a href="/" accesskey="1"
                                                                               title="">Homepage</a></li>
                <li class="{{Request::is('profile') ? 'current_page_item' : ''}}"><a href="/profile" accesskey="2"
                                                                                     title="">Profile</a></li>
                <li class="{{Request::is('dashboard') ? 'current_page_item' : ''}}"><a href="/dashboard" accesskey="3"
                                                                                       title="">Dashboard</a></li>
                <li class="{{Request::is('motivatie') ? 'current_page_item' : ''}}"><a href="/motivatie" accesskey="4"
                                                                                       title="">Motivatie</a></li>
                <li class="{{Request::is('beroepsbeeld') ? 'current_page_item' : ''}}"><a href="/beroepsbeeld"
                                                                                          accesskey="5" title="">Beroepsbeeld</a>
                </li>
                <li class="{{Request::is('articles') ? 'current_page_item' : ''}}"><a href="/articles" accesskey="6"
                                                                                      title="">Articles</a></li>
            </ul>
        </div>
    </div>
    @yield('header')
</div>
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                @yield('title')
            </div>
            @yield('content')
            {{--			<p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>--}}
        </div>
        <div id="sidebar">
            <ul class="style1">
                    <li class="first">
                        <h3>
                            temp
                        </h3>
                        <p><a href="#">temp</a></p>
                    </li>
            </ul>
            <div id="stwo-col">
                <div class="sbox1">
                    <h2>Etiam rhoncus</h2>
                    <ul class="style2">
                        <li><a href="#">Semper quis egetmi dolore</a></li>
                        <li><a href="#">Quam turpis feugiat dolor</a></li>
                        <li><a href="#">Amet ornare hendrerit lectus</a></li>
                        <li><a href="#">Quam turpis feugiat dolor</a></li>
                    </ul>
                </div>
                <div class="sbox2">
                    <h2>Integer gravida</h2>
                    <ul class="style2">
                        <li><a href="#">Semper quis egetmi dolore</a></li>
                        <li><a href="#">Quam turpis feugiat dolor</a></li>
                        <li><a href="#">Consequat lorem phasellus</a></li>
                        <li><a href="#">Amet turpis feugiat amet</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="copyright" class="container">
    <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a
            href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
