<?php

require 'partials/header.php';

?>
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
                        <a href="subscribe.php">Checking</a>
                    </li>
                    <li>
                        <a href="subscribe.php">Savings</a>
                    </li>
                    <li>
                        <a href="subscribe.php">Loans</a>
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
                        <a href="subscribe.php">Banking</a>
                    </li>
                    <li>
                        <a href="subscribe.php">Loans</a>
                    </li>
                    <li>
                        <a href="subscribe.php">Services</a>
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
                        <a href="subscribe.php">Trust and Asset Management</a>
                    </li>
                    <li>
                        <a href="subscribe.php">Wealth Advisory Services</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="subscribe.php">
                    <i class="fas fa-sun"></i>
                    About
                </a>
            </li>
            <li>
                <a href="subscribe.php">
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
                        <button type="button" class="btn btn-primary modal-button" href="subscribe.php">
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
                        <button type="button" class="btn btn-primary modal-button" href="subscribe.php">
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
                        <button type="button" class="btn btn-primary modal-button" href="subscribe.php">
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
                    <div class="service_title">
                        <h4>Checking Account Services</h4>
                    </div>
                    <a href="subscribe.php">
                        <div class="info_pics" id="personalBanking"></div>
                    </a>
                </div>
                <div class="col-sm">
                    <div class="service_title">
                        <h4>Home Mortgage</h4>
                    </div>
                    <a href="subscribe.php">
                        <div class="info_pics" id="homeMortgage"></div>
                    </a>
                </div>
                <div class="col-sm">
                    <div class="service_title">
                        <h4>SBA Lending</h4>
                    </div>
                    <a href="subscribe.php">
                        <div class="info_pics" id="sbaLending"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid testimonials">
            <h2>Hear Our Testimonials</h2>
            <!-- TODO: Reveal on Scroll -->
            <div class="row">
                <div class="col-sm">
                    <div class="info_pics2">
                        <p><em>“For a small family business like us, we needed to have somebody who was responsive to our needs. Sunshine Bank looked at how they could help us solve problems. That was something we didn’t always find, especially with the larger banks.”</em></p>
                        <div class="sources">
                            <div>
                                <p class="company-title">Duane's Vino</p>
                                <p>-Duane Vino, Chair</p>
                            </div>
                            <div class="testimonial-image" id="duane"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="info_pics2">
                        <p><em>"Sunshine Bank offers us a small town feel and small bank intimacy with the resources and depth of a large bank."</em></p>
                        <div class="sources">
                            <div>
                                <p>-Allison Jones</p>
                            </div>
                            <div class="testimonial-image" id="allison"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="info_pics2">
                        <p><em>"They really guided us through the documentation process. They worked hard to get us the coverage we needed to meet our working capital needs."</em></p>
                        <div class="sources">
                            <div>
                                <p class="company-title">Randy's Beverage</p>
                                <p>-Randy Lacore, President</p>
                            </div>
                            <div class="testimonial-image" id="randy"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="footer">
            <div id="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Developed by
                <a href="https://jperk224.github.io/" target="_blank">Jeff Perkinson</a>.
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php' ?>