<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Global CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="plugins/prism/prism.css">
    <link rel="stylesheet" href="plugins/lightbox/dist/ekko-lightbox.min.css">
    <link rel="stylesheet" href="plugins/elegant_font/css/style.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="css/styles.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/prism/prism.js"></script>
    <script type="text/javascript" src="plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="plugins/lightbox/dist/ekko-lightbox.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <title>@yield('page-title')</title>
    @yield('head')
</head>
<body class="body-blue">
    <div class="page-wrapper">
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.html">
                            <span aria-hidden="true" class="fa fa-eye icon"></span>
                            <span class="text-bold">True</span><span class="text-highlight">Sight</span>
                        </a>
                    </h1>
                </div>
                <ol class="breadcrumb">
                    @yield('breadcrumb')
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Components</li>
                </ol>
            </div>
        </header>
        @yield('container')
    </div>
</body>
</html>