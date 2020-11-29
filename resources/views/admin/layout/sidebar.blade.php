 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                       
                        <h2 class="brand-text mb-0">SteelGuide</h2>
                    </a></li>
               
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
               <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Steel Plant Management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('importsteelplant')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Import Steel Plant</span></a>
                        </li>
                        <li><a href="{{url('steelplant')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Steel plant List</span></a>
                        </li>
                         
                    </ul>
                </li>
                 
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
               <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Steel Trader Management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('traderimport')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Import Steel Trader</span></a>
                        </li>
                        <li><a href="{{url('steeltraderlist')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Steel Trader List</span></a>
                        </li>
                         
                    </ul>
                </li>
                 
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
               <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Scrap Generator Management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('scrapgenerator')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Import Scrap Generator</span></a>
                        </li>
                        <li><a href="{{url('scrapgeneratorlist')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Scrap Generator List</span></a>
                        </li>
                         
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Ad Management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('/admin/createad')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Create</span></a>
                        </li>
                        <li><a href="{{url('admin/ad/list')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">List</span></a>
                        </li>
                       <li><a href="{{url('admin/ad/unapproved')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Un Approve Ad</span></a>
                        </li>                        
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Subscribe Plan Management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('createplan')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Create Plan</span></a>
                        </li>
                        <li><a href="{{url('plans')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Plan List</span></a>
                        </li>
                        
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">SMS Management</span></a>
                    <ul class="menu-content">
                       <!--  <li><a href="{{url('message')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Send Custom SMS</span></a>
                        </li> -->
                        <li><a href="{{url('savesms')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Save SMS</span></a>
                        </li>
                         <li><a href="{{url('viewsms')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">View Saved SMS</span></a>
                        </li>
                         <li><a href="{{url('sendsmstoalluser')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Send SMS to all User</span></a>
                        </li>
                        <li><a href="{{url('uploadsmslist')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Upload list</span></a>
                        </li>
                        <li><a href="{{url('sms/history')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Check Histroy</span></a>
                        </li>
                        
                    </ul>
                </li>
                 <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Bids Management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('bidlist')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Latest bids</span></a>
                        </li>
                       
                        
                    </ul>
                </li>
                 <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Product Price Management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('ingt')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Product Prices</span></a>
                        </li>
                       
                        
                    </ul>
                     
                </li>
                  <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">City Management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('addcity')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Add city</span></a>
                        </li>
                         <li><a href="{{url('citylist')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">City List</span></a>
                        </li>
                       
                        
                    </ul>
                </li>
                 
                 <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Inquiry Management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('contactlist')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">All Inquiry</span></a>
                        </li>
                       
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu--