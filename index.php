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
        <div id="content" class="container-fluid">
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
                                <button type="button" id="homeEquity" class="btn btn-primary">
                                    <i class="fas fa-home"></i>
                                    <span>Home Equity</span>
                                </button>
                                <button type="button" id="bizLine" class="btn btn-primary" href="#biz_line">
                                    <i class="fas fa-chart-pie"></i>
                                    <span>Small Business Lines</span>
                                </button>
                                <button type="button" id="investServices" class="btn btn-primary" href="#invest_services">
                                    <i class="fas fa-chart-line"></i>
                                    <span>Investment Services</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div id="home_equity" class="modal">
                <div class="modal-content">
                    <div class='modal-header'>
                        <span id="homeEquityClose">&times;</span><br>
                        <h2>Home Equity</h2>
                    </div>
                    <div class="modal-body">
                        <h4><strong>Rate Special</strong></h4>
                        <p>With a Home Equity Loan or Master Line of Credit from Sunshine Bank you're sure to have plenty of sunny options to choose from. Our home equity products give you the flexibility you need while utilizing the hard earned equity in your home. For more information on these rate specials, check out our home equity product page.</p>
                    </div>
                    <div class='modal-footer'>
                        <div class="modal-button-wrapper">
                            <button type="button" class="btn btn-primary modal-button" href="#landing">
                                <span>Learn More</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="biz_line" class="modal">
                <div class="modal-content">
                    <div class='modal-header'>
                        <span id="bizLineClose">&times;</span><br>
                        <h2>Business Lines</h2>
                    </div>
                    <div class="modal-body">
                        <h4><strong>Rate Special</strong></h4>
                        <p>We work with businesses of all shapes and sizes. We will work to understand your business and recommend the best products and services to help you focus on what's important: growing your business. Sunshine Bank has a line of credit to help fund your business. Lines of credit assist businesses in meeting unexpected needs and taking advantage of opportunities.</p>
                    </div>
                    <div class='modal-footer'>
                        <div class="modal-button-wrapper">
                            <button type="button" class="btn btn-primary modal-button" href="#landing">
                                <span>Learn More</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="invest_services" class="modal">
                <div class="modal-content">
                    <div class='modal-header'>
                        <span id="investServicesClose">&times;</span><br>
                        <h2>Investment Services</h2>
                    </div>
                    <div class="modal-body">
                        <h4><strong>Free Consultation</strong></h4>
                        <p>Whatever your level of wealth, or your financial goals, Sunshine Bank can help you create a personalized wealth management plan. With a team-based approach and a single point of contact, our quality advisors can build customized strategies tailored to you needs and goals.</p>
                    </div>
                    <div class='modal-footer'>
                        <div class="modal-button-wrapper">
                            <button type="button" class="btn btn-primary modal-button" href="#landing">
                                <span>Learn More</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid services">
                <h2>What Can Sunshine Do For You?</h2>
                <div class="row">
                    <div class="col-sm">
                        <div class="service_title"><h4>Checking Account Services</h4></div>
                        <div class="info_pics" id="personalBanking">

                        </div>
                    </div>
                    <div class="col-sm">
                    <div class="service_title"><h4>Home Mortgage</h4></div>
                        <div class="info_pics" id="homeMortgage">

                        </div>
                    </div>
                    <div class="col-sm">
                    <div class="service_title"><h4>SBA Lending</h4></div>
                        <div class="info_pics" id="sbaLending">

                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid testimonials">
                <h2>Hear Our Testimonials</h2>
                <div class="row">
                    <div class="col-sm">
                        <div class="info_pics2">
                            <p><em>“For a small family business like us, we needed to have somebody who was responsive to our needs. Sunshine Bank looked at how they could help us solve problems. That was something we didn’t always find, especially with the larger banks.”</em></p>
                            <div class="sources">
                                <p>-Duane Vino, Chair</p>
                                <p class="company-title">Duane's Vino</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="info_pics2">
                            <p><em>"Sunshine Bank offers us a small town feel and small bank intimacy with the resources and depth of a large bank."</em></p>
                            <div class="sources">
                                <p>-Allison Jones</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="info_pics2">
                        <p><em>"They really guided us through the documentation process.  They worked hard to get us the coverage we needed to meet our working capital needs."</em></p>
                            <div class="sources">
                                <p>-Randy Lacore, President</p>
                                <p class="company-title">Randy's Beverage Corp.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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