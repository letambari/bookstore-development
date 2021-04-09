<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4><?php echo $name; ?></h4>
                        <small><?php echo $user_type; ?></small>                        
                    </div>
                    
                    <a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                    <a href="logout.php" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="header">MAIN</li>
            <li> <a href="ec-dashboard.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
            </li>
            
            <li class="header">COMPONENTS</li>
            <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span> </a>
                <ul class="ml-menu">
                    <li class="active"> <a href="ec-dashboard.html">Dashboard</a></li>
                    <li> <a href="ec-product.php">Product</a></li>
                    <li> <a href="ec-product-List.php">Product List</a></li>
                    <li> <a href="insert_product.php">Insert Product</a></li>
                </ul>
            </li>
           
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Finances</span> </a>
                <ul class="ml-menu">
                    <li><a href="invoices.php">Invoices</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                </ul>
            </li>
           
        </ul>
    </div>
</aside>