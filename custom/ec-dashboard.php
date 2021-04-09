<?php include 'header.php'; ?>
<?php include 'left_sidebar.php'; ?>
<?php //include 'right_sidebar.php'; ?>


<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <ul class="list-unstyled team-info margin-0">
                <li class="m-r-15"><h2>Design Team</h2></li>
                <li>
                    <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                </li>
                <li>
                    <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                </li>
            </ul>                       
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                    <div class="chat-info">
                        <a class="name" href="#">Alexander</a>
                        <span class="datetime">6:12</span>                            
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>
            </ul>
            </div>
            <div class="input-group p-t-15">
                <input type="text" class="form-control" placeholder="Enter text here...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-mail-send"></i>
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<section class="content ecommerce-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>eCommerce Dashboard
                <small class="text-muted">Welcome to Compass</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                    <li class="breadcrumb-item"><a href="ec-dashboard.html">eCommerce</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card tasks_report">
                    <div class="header">
                        <h2><strong>Total</strong> Revenue</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body text-center">
                        <h4 class="m-t-0">Total Sale</h4>
                        <h6 class="m-b-20">2,45,124</h6>
                        <input type="text" class="knob dial1" value="66" data-width="140" data-height="140" data-thickness="0.1" data-fgColor="#00ced1" readonly>
                        <h6 class="m-t-30">Satisfaction Rate</h6>
                        <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
                        <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="45px" data-bar-Width="2" data-bar-Spacing="8" data-bar-Color="#00ced1">3,2,6,5,9,8,7,8,4,5,1,2,9,5,1,3,5,7,4,6</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Total</strong> Income</h2>                        
                    </div>
                    <div class="body">
                        <h3 class="m-b-0">47,012</h3>
                        <small class="displayblock">23% Average <i class="zmdi zmdi-trending-up"></i></small>
                        <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                        data-offset="90" data-width="100%" data-height="60px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                        data-fill-Color="rgba(221,94,137, 0.2)"> 1,2,3,1,4,3,6,4,4,1 </div>                        
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Total</strong> Orders</h2>                        
                    </div>
                    <div class="body">
                        <h3 class="m-b-0">512</h3>
                        <small class="displayblock">18% Average <i class="zmdi zmdi-trending-down"></i></small>
                        <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                        data-offset="90" data-width="100%" data-height="60px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                        data-fill-Color="rgba(128,133,233, 0.2)"> 4,5,2,8,4,8,7,4,8,5</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Total</strong> Visitor</h2>                        
                    </div>
                    <div class="body">
                        <h3 class="m-b-0">1,612</h3>
                        <small class="displayblock">13% Average <i class="zmdi zmdi-trending-up"></i></small>
                        <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                        data-offset="90" data-width="100%" data-height="60px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                        data-fill-Color="rgba(44,168,255, 0.2)">1,5,9,3,5,7,8,5,2,3,5,7</div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Total</strong> Active Users</h2>                        
                    </div>
                    <div class="body">
                        <h3 class="m-b-0">721</h3>
                        <small class="displayblock">17% Average <i class="zmdi zmdi-trending-up"></i></small>
                        <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                        data-offset="90" data-width="100%" data-height="60px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                        data-fill-Color="rgba(0,0,0, 0.2)">8,6,4,2,3,6,5,7,9,8,5,2</div>
                    </div>
                </div>
            </div>                
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Product</strong> Report</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="sales-bars-chart" style="height: 320px;"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="card product-report">
                    <div class="header">
                        <h2><strong>Annual</strong> Report <small><strong>Note:</strong> Contrary to popular belief, Lorem Ipsum is not simply random text.</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="icon l-amber m-b-20"><i class="zmdi zmdi-chart-donut"></i></div>
                                <div class="col-in">
                                    <h3 class="counter m-b-0">$4,516</h3>
                                    <small class="text-muted m-t-0">Sales Report</small>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="icon l-turquoise m-b-20"><i class="zmdi zmdi-chart"></i></div>
                                <div class="col-in">
                                    <h3 class="counter m-b-0">$6,481</h3>
                                    <small class="text-muted m-t-0">Annual Revenue </small>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="icon l-parpl m-b-20"><i class="zmdi zmdi-card"></i></div>
                                <div class="col-in">
                                    <h3 class="counter m-b-0">$3,915</h3>
                                    <small class="text-muted m-t-0">Total Profit</small>
                                </div>
                            </div>
                        </div>
                        <div id="area_chart" class="graph m-t-20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>USA</strong> Sales Report</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-4 col-4 m-b-10">
                                <small class="text-muted">Today</small>
                                <h5 class="m-b-0">256</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <small class="text-muted">This Week</small>
                                <h5 class="m-b-0">621</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <small class="text-muted">This Month</small>
                                <h5 class="m-b-0">981</h5>                                
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                        </div>
                    </div>                    
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>India</strong> Sales Report</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-4 col-4 m-b-10">
                                <small class="text-muted">Today</small>
                                <h5 class="m-b-0">195</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <small class="text-muted">This Week</small>
                                <h5 class="m-b-0">235</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <small class="text-muted">This Month</small>
                                <h5 class="m-b-0">312</h5>                                
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar l-coral" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%;"></div>
                        </div>
                    </div>                    
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Europe</strong> Sales Report</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-4 col-4 m-b-10">
                                <small class="text-muted">Today</small>
                                <h5 class="m-b-0">210</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <small class="text-muted">This Week</small>
                                <h5 class="m-b-0">462</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <small class="text-muted">This Month</small>
                                <h5 class="m-b-0">574</h5>                                
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                        </div>
                    </div>                    
                </div>                
            </div>
        </div>               
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>Top</strong> Selling Country</h2>
                    </div>
                    <div class="body">
                        <div class="row">                            
                            <div class="col-xl-8 col-lg-8 col-md-12">
                                <div id="world-map-markers" class="jvector-map"></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="table-responsive">                                   
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                            <tr>
                                                <th>Contrary</th>
                                                <th>2016</th>
                                                <th>2017</th>
                                                <th>Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>USA</td>
                                                <td>2,009</td>
                                                <td>3,591</td>
                                                <td>7.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>India</td>
                                                <td>1,129</td>
                                                <td>1,361</td>
                                                <td>3.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>2,009</td>
                                                <td>2,901</td>
                                                <td>9.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>954</td>
                                                <td>901</td>
                                                <td>5.71% <i class="zmdi zmdi-trending-down text-warning"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Germany</td>
                                                <td>594</td>
                                                <td>500</td>
                                                <td>6.11% <i class="zmdi zmdi-trending-down text-warning"></i></td>
                                            </tr>
                                            <tr>
                                                <td>UK</td>
                                                <td>1,500</td>
                                                <td>1,971</td>
                                                <td>8.50% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Other</td>
                                                <td>4,236</td>
                                                <td>4,591</td>
                                                <td>9.15% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                            </tr>                                            											
                                        </tbody>
                                    </table>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="card member-card">
                    <div class="header l-blue">
                        <h4 class="m-t-0">Matthew Deo</h4>
                    </div>
                    <div class="member-img">
                        <a href="profile.html" class="">
                            <img class="rounded-circle" src="assets/images/lg/avatar3.jpg"  alt="profile-image">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                    <a title="facebook" href="#">
                                    <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="twitter" href="#">
                                    <i class="zmdi zmdi-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="instagram" href="javascript:void(0);">
                                    <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <h5>98</h5>
                                <small>Item Buy</small>
                            </div>
                            <div class="col-4">
                                <h5>78</h5>
                                <small>Mobile</small>
                            </div>
                            <div class="col-4">
                                <h5>2,046$</h5>
                                <small>Spent</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>New</strong> Customer Ratings </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="row list-unstyled c_review">
                            <li class="col-12">
                                <div class="avatar">
                                    <a href="#"><img class="rounded" src="assets/images/sm/avatar2.jpg" alt="user" width="60"></a>
                                </div>                                
                                <div class="comment-action">
                                    <h6 class="c_name">Hossein Shams</h6>
                                    <p class="c_msg m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                    <div class="badge badge-info">iPhone 8</div>
                                    <span class="m-l-10">
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                    </span>
                                    <small class="comment-date float-sm-right">Dec 21, 2017</small>
                                </div>                                
                            </li>
                            <li class="col-12">
                                <div class="avatar">
                                    <a href="#"><img class="rounded" src="assets/images/sm/avatar3.jpg" alt="user" width="60"></a>
                                </div>                                
                                <div class="comment-action">
                                    <h6 class="c_name">Tim Hank</h6>
                                    <p class="c_msg m-b-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                    <div class="badge badge-info">Nokia 8</div>
                                    <span class="m-l-10">
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                    </span>
                                    <small class="comment-date float-sm-right">Dec 18, 2017</small>
                                </div>                                
                            </li>
                            <li class="col-12">
                                <div class="avatar">
                                    <a href="#"><img class="rounded" src="assets/images/sm/avatar4.jpg" alt="user" width="60"></a>
                                </div>                                
                                <div class="comment-action">
                                    <h6 class="c_name">Maryam Amiri</h6>
                                    <p class="c_msg m-b-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                                    <div class="badge badge-info">Samsung Galaxy S8</div>
                                    <span class="m-l-10">
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                    </span>
                                    <small class="comment-date float-sm-right">Dec 18, 2017</small>
                                </div>                                
                            </li>
                            <li class="col-12">
                                <div class="avatar">
                                    <a href="#"><img class="rounded" src="assets/images/sm/avatar5.jpg" alt="user" width="60"></a>
                                </div>                                
                                <div class="comment-action">
                                    <h6 class="c_name">Gary Camara</h6>
                                    <p class="c_msg m-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    <div class="badge badge-info">HTC U11</div>
                                    <span class="m-l-10">
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                    </span>
                                    <small class="comment-date float-sm-right">Dec 13, 2017</small>
                                </div>                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Recent</strong> Orders</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive members_profiles">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:60px;">#</th>
                                    <th>Name</th>
                                    <th>Item</th>
                                    <th>Address</th>
                                    <th>Quantity</th>                                    
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                    <td>Hossein</td>
                                    <td>IPONE-7</td>
                                    <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                    <td>3</td>
                                    <td><span class="badge badge-success">DONE</span></td>
                                </tr>
                                <tr>
                                    <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                    <td>Camara</td>
                                    <td>NOKIA-8</td>
                                    <td>2595 Pearlman Avenue Sudbury, MA 01776 </td>
                                    <td>3</td>
                                    <td><span class="badge badge-success">DONE</span></td>
                                </tr>
                                <tr>
                                    <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                    <td>Maryam</td>
                                    <td>NOKIA-456</td>
                                    <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                    <td>4</td>
                                    <td><span class="badge badge-success">DONE</span></td>
                                </tr>
                                <tr>
                                    <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                    <td>Micheal</td>
                                    <td>SAMSANG PRO</td>
                                    <td>508 Virginia Street Chicago, IL 60653</td>
                                    <td>1</td>
                                    <td><span class="badge badge-success">DONE</span></td>
                                </tr>
                                <tr>
                                    <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                    <td>Frank</td>
                                    <td>NOKIA-456</td>
                                    <td>1516 Holt Street West Palm Beach, FL 33401</td>
                                    <td>13</td>
                                    <td><span class="badge badge-warning">PENDING</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js -->
<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/flotscripts.bundle.js"></script> <!-- flot charts Plugin Js --> 
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/ecommerce.js"></script>
<script src="assets/js/pages/charts/jquery-knob.min.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/compass/html/ec-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 12:36:07 GMT -->
</html>
