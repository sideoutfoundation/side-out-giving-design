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

    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" crossorigin="anonymous"></script>

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
            $('[data-toggle="popover"]').popover()
        });
    </script>

</head>
<body>
    <?php
        // Menu for HTML prototypes.
        include('./inc/pages-menu.php');
    ?>
    <div id="top"></div>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="brand">
                    <img class="logo" src="../img/logo.svg" alt="Side-Out Foundation">
                </div>

                <div class="search">
                    <form id="demo-2">
                        <input type="search" id="search-input" placeholder="Search for a supporting campaign"><img src="../img/search.svg" width="24" height="24"/>
                    </form>
                </div>



                <div class="login-menu personal">
                    <a data-toggle="modal" href="#modal-notifications" class="app-notifications-icon">
                        <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M912 1696q0-16-16-16-59 0-101.5-42.5t-42.5-101.5q0-16-16-16t-16 16q0 73 51.5 124.5t124.5 51.5q16 0 16-16zm816-288q0 52-38 90t-90 38h-448q0 106-75 181t-181 75-181-75-75-181h-448q-52 0-90-38t-38-90q50-42 91-88t85-119.5 74.5-158.5 50-206 19.5-260q0-152 117-282.5t307-158.5q-8-19-8-39 0-40 28-68t68-28 68 28 28 68q0 20-8 39 190 28 307 158.5t117 282.5q0 139 19.5 260t50 206 74.5 158.5 85 119.5 91 88z"/></svg>
                    </a>
                    <div class="dropdown open">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="true" class="dropdown-toggle">
                            <img src="https://www.gravatar.com/avatar/f900ce725ee19829cd21cdbebbe11cd8.jpg?s=200&amp;d=mm" >
                        </a>
                        <ul role="menu" class="dropdown-menu">
                            <li class="dropdown-header">Settings</li>
                            <li class="sublink">
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1152 896q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm512-109v222q0 12-8 23t-20 13l-185 28q-19 54-39 91 35 50 107 138 10 12 10 25t-9 23q-27 37-99 108t-94 71q-12 0-26-9l-138-108q-44 23-91 38-16 136-29 186-7 28-36 28h-222q-14 0-24.5-8.5t-11.5-21.5l-28-184q-49-16-90-37l-141 107q-10 9-25 9-14 0-25-11-126-114-165-168-7-10-7-23 0-12 8-23 15-21 51-66.5t54-70.5q-27-50-41-99l-183-27q-13-2-21-12.5t-8-23.5v-222q0-12 8-23t19-13l186-28q14-46 39-92-40-57-107-138-10-12-10-24 0-10 9-23 26-36 98.5-107.5t94.5-71.5q13 0 26 10l138 107q44-23 91-38 16-136 29-186 7-28 36-28h222q14 0 24.5 8.5t11.5 21.5l28 184q49 16 90 37l142-107q9-9 24-9 13 0 25 10 129 119 165 170 7 8 7 22 0 12-8 23-15 21-51 66.5t-54 70.5q26 50 41 98l183 28q13 2 21 12.5t8 23.5z"/></svg><a href="#" style="cursor: pointer;">Settings</a>
                            </li>

                            <li class="dropdown-header">Support</li>
                            <li class="sublink">
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M640 896q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm384 0q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm384 0q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm384 0q0 174-120 321.5t-326 233-450 85.5q-110 0-211-18-173 173-435 229-52 10-86 13-12 1-22-6t-13-18q-4-15 20-37 5-5 23.5-21.5t25.5-23.5 23.5-25.5 24-31.5 20.5-37 20-48 14.5-57.5 12.5-72.5q-146-90-229.5-216.5t-83.5-269.5q0-174 120-321.5t326-233 450-85.5 450 85.5 326 233 120 321.5z"/></svg><a href="#" style="cursor: pointer;">Support Center</a>
                            </li>
                            <li class="sublink">
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-453-185-242 295q-18 23-49 23-13 0-22-4-19-7-30.5-23.5t-11.5-36.5v-349l864-1059-1069 925-395-162q-37-14-40-55-2-40 32-59l1664-960q15-9 32-9 20 0 36 11z"/></svg><a href="#" style="cursor: pointer;">Contact Us</a>
                            </li>
                            <li class="divider"></li>
                            <li class="sublink">
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M704 1440q0 4 1 20t.5 26.5-3 23.5-10 19.5-20.5 6.5h-320q-119 0-203.5-84.5t-84.5-203.5v-704q0-119 84.5-203.5t203.5-84.5h320q13 0 22.5 9.5t9.5 22.5q0 4 1 20t.5 26.5-3 23.5-10 19.5-20.5 6.5h-320q-66 0-113 47t-47 113v704q0 66 47 113t113 47h312l11.5 1 11.5 3 8 5.5 7 9 2 13.5zm928-544q0 26-19 45l-544 544q-19 19-45 19t-45-19-19-45v-288h-448q-26 0-45-19t-19-45v-384q0-26 19-45t45-19h448v-288q0-26 19-45t45-19 45 19l544 544q19 19 19 45z"/></svg><a href="#" style="cursor: pointer;">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="search-results logged" id="search-results">
                    <span class="caret"></span>
                    <div class="results"><img src="../img/search-white.svg" width="22" height="22"/>Results for <span>"bow"</span></div>
                    <div class="result-options">
                        <div class="result-option">
                            <a class="campaign-link" href= "/campaign.php">
                                <div class="image"><img src="./img/side-out-iconcircle.png" alt=""></div>
                                <div class="content">
                                    <h3>Bowdoin College Voleyball Dig Pink</h3>
                                    <div class="details">Megan M. / Supporting 2018 Dig Pink Schools</div>
                                    <div class="pills bs-component">
                                        <div>
                                            <b>Raised</b><span class="badge badge-pill badge-success">$10</span>
                                        </div>
                                        <div>
                                            <b>Goal</b><span class="badge badge-pill badge-secondary">$1200</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="button-area">
                            <a href= "/campaign.php#donate">
                                    <button type="button" class="btn btn-primary">Donate</button>
                                </a>
                            </div>
                        </div>
                        <div class="result-option">
                            <a class="campaign-link" href= "/campaign.php">
                                <div class="image"><img src="./img/side-out-iconcircle.png" alt=""></div>
                                <div class="content">
                                    <h3>Bowdoin College Voleyball Dig Pink</h3>
                                    <div class="details">Megan M. / Supporting 2018 Dig Pink Schools</div>
                                    <div class="pills bs-component">
                                        <div>
                                            <b>Raised</b><span class="badge badge-pill badge-success">$10</span>
                                        </div>
                                        <div>
                                            <b>Goal</b><span class="badge badge-pill badge-secondary">$1200</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="button-area">
                            <a href= "/campaign.php#donate">
                                    <button type="button" class="btn btn-primary">Donate</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </header><!-- header -->

    <main class="main">
        <div class="container">

