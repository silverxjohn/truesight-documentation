<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Global CSS -->
    <link rel="stylesheet" href="docs/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="docs/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="docs/plugins/prism/prism.css">
    <link rel="stylesheet" href="docs/plugins/lightbox/dist/ekko-lightbox.min.css">
    <link rel="stylesheet" href="docs/plugins/elegant_font/css/style.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="docs/css/styles.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="docs/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="docs/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="docs/plugins/prism/prism.js"></script>
    <script type="text/javascript" src="docs/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="docs/plugins/lightbox/dist/ekko-lightbox.min.js"></script>
    <script type="text/javascript" src="docs/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="docs/js/main.js"></script>

    <title>@yield('page-title')</title>
    @yield('head')
</head>
<body class="body-blue">
    <div class="page-wrapper">
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="#">
                            {{--<span aria-hidden="true" class="fa fa-eye icon"></span>--}}
                            {{--<span class="text-bold">True</span><span class="text-highlight">Sight</span>--}}
                            <img class="img-responsive" src="images/logo.png" style="margin-left: 0px;"/>
                        </a>
                    </h1>
                </div>
                <ol class="breadcrumb">
                    @yield('breadcrumb')
                    <li><a href="#">Home</a></li>
                    <li class="active">Documentation</li>
                </ol>
            </div>
        </header>
        @yield('container')
    </div>
</body>
</html>
