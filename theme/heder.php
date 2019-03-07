<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <link rel="icon" href="favicon.ico">
    <!-- JqueryUI -->
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- Awesome font icons -->
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" media="screen">
    <!-- Owlcoursel -->
    <link rel="stylesheet" type="text/css" href="../css/owl-coursel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../css/owl-coursel/owl.transitions.css">
    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="../css/magnific-popup/magnific-popup.css">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">
    <!-- Fw -->
    <link rel="stylesheet" type="text/css" href="../css/fw.css" media="screen">
</head>
<body class="bg-white">
<div class="preloader">
    <i class="fa fa-spinner"></i>
</div>
<header>
    <div class="container">
        <!-- Top menu -->
        <div class="row m-t-15">
            <div class="col-sm-2 col-md-4 hidden-xs">
                <div class="cloud-3"></div>
            </div>
            <div class="col-sm-4 col-md-3">

            </div>

        </div>
        <div class="row">
            <div class="col-sm-12 col-md-2">
                <!-- Logo -->
                <a href="#" class="logo">
                    <img src="../images/logo.png" alt="logo">
                </a>
            </div>
            <div class="col-sm-12 col-md-10">
                <!-- Menu -->
                <div class="main-menu">
                    <nav class="navbar navbar-default menu">
                        <div class="container-fluid p-0">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Lorem ipsum dolor</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse p-0" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav pull-right m-r-40 m-r-sm-0 m-r-xs-0">
                                    <li class="active">
                                        <a href="index.php">Главная</a>
                                    </li>
                                    <li><a href="about.htm">О нас</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Каталог</a>
                                        <ul class="dropdown-menu">

                                            <?  $qwery = mysql_query('SELECT * FROM catalog') or die(mysql_error());
                                            $mass = mysql_fetch_array($qwery);
                                            do{

                                                printf ('
												<li><a href="catalog.php?img=%s">%s</a></li>
													'
                                                    ,$mass['directory'],$mass['name']);
                                            }while ($mass = mysql_fetch_array($qwery));
                                            ?>

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs & Events</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog_1.htm">Blog 1 col</a></li>
                                            <li><a href="blog_2.htm">Blog 2 col</a></li>
                                            <li><a href="blog_3.htm">Blog 3 col</a></li>
                                            <li><a href="blog_4.htm">Blog left sidebar</a></li>
                                            <li><a href="blog_detail.htm">Blog detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="error_404.htm">Error_404</a></li>
                                            <li><a href="login.htm">Login</a></li>
                                            <li><a href="register.htm">Register</a></li>
                                            <li><a href="contact.htm">Contact us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
