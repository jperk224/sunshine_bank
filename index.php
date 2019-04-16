<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunshine Bank</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Custom CSS -->
    <?= "<link rel='stylesheet' type='text/css' href='css/style.css'>"; ?>

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,200" rel="stylesheet" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Sunshine Bank</h3>
                <strong>SB</strong>
            </div>
            <ul class="list-unstyled components">
                <!-- <p>Clearing the clouds from your financial future.</p> -->
                <li class="active">
                    <a href="#personalSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user"></i>
                        Personal
                    </a>
                    <ul class="collapse list-unstyled" id="personalSubmenu">
                        <li>
                            <a href="#">Checking</a>
                        </li>
                        <li>
                            <a href="#">Savings</a>
                        </li>
                        <li>
                            <a href="#">Loans</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#businessSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-briefcase"></i>
                        Business
                    </a>
                    <ul class="collapse list-unstyled" id="businessSubmenu">
                        <li>
                            <a href="#">Banking</a>
                        </li>
                        <li>
                            <a href="#">Loans</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-chart-line"></i>
                        Investment
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Trust and Asset Management</a>
                        </li>
                        <li>
                            <a href="#">Wealth Advisory Services</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-sun"></i>
                        About
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-phone"></i>
                        Contact
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                </div>
            </nav> -->
            <!-- Full Page Image Header with Vertically Centered Content -->
            <header class="masthead">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fas fa-align-left"></i>
                    <span>Menu</span>
                </button>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                            <h1 class="font-weight-light">Sunshine Bank</h1>
                            <h3 class="lead">Clearing the Clouds from your financial future.</h3>
                            <div id="specials">
                                <button type="button" id="homeEquity" class="btn btn-primary" href="#home_equity">
                                    <i class="fas fa-home"></i>
                                    <span>Home Equity Special</span>
                                </button>
                                <button type="button" id="bizLine" class="btn btn-primary">
                                    <i class="fas fa-chart-pie"></i>
                                    <span>Small Business Lines</span>
                                </button>
                                <button type="button" id="investServices" class="btn btn-primary">
                                    <i class="fas fa-chart-line"></i>
                                    <span>Investment Services</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <article id="home_equity" class="no_article promo">
                <div class=exit-icon><i class="fas fa-times"></i></div>
                <h2>Home Equity</h2>
                <h4><strong>Rate Special</strong></h4> 
                <p>With a Home Equity Loan or Master Line of Credit from Sunshine Bank you're sure to have plenty of sunny options to choose from. Our home equity products give you the flexibility you need while utilizing the hard earned equity in your home. For more information on these rate specials, check out our home equity product page here:</p>
            </article>
            <h1>hello</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore illum quam, exercitationem earum corrupti atque placeat, consequuntur illo magni impedit cum! Deleniti libero porro architecto nihil similique, obcaecati reiciendis enim.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam maiores voluptas consequuntur possimus fuga dolorum eos accusamus in officia non laborum, iure ut nihil, quae dolore molestiae magnam voluptatem. Molestias.</p>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>

</html>