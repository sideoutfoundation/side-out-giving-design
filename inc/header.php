<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!--  Essential META Tags -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="./img/facebook-1200x630.png">
    <meta property="og:url" content="">

    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="">

    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="apple-touch-icon" href="./img/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" type="image/png" href="./img/favicon-32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./img/favicon-16.png" sizes="16x16">


    <link rel="stylesheet" type="text/css" href="./css/styles.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="./css/styles.css">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'XXXXXXXXXXX', 'auto');
        ga('send', 'pageview');
    </script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>

</head>

<body>

    <?php

        // Menu for HTML prototypes.
        include( './inc/pages-menu.php');

    ?>

    <div id="top"></div>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="brand">
                    <img class="logo" src="../img/logo.svg" alt="Side-Out Foundation">
                </div>

                <div class="search">

                    <div id="search-link" class="search-link">
                        <a href="donate-to-campaign.php" class="search-open"
                        data-tooltip="Find an event. Search and join an event by searching
                        a keyword of school name.">Search</a>
                    </div>

                    <div id="search-form" class="search-form" style="display: none;">
                        <form id="" method="get" action="/">
                            <input type="search" placeholder="Search..." name="s" id="s">
                            <input type="image" src="../img/search.svg" width="24" height="24"
                            id="go" alt="Search" title="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </header><!-- header -->

    <main class="main">
        <div class="container">

