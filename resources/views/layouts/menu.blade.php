 <!-- BEGIN HEADER -->
            <header class="page-header">
                <nav class="navbar mega-menu" role="navigation">
                    <div class="container-fluid">
                        <div class="clearfix navbar-fixed-top">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="toggle-icon">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                            </button>
                            <!-- End Toggle Button -->
                            <!-- BEGIN LOGO -->
                            <a id="index" class="page-logo" href="url('/home')">
                                <img src="{{asset("layout/img/logo.png")}}" alt="Logo"> </a>
                            <!-- END LOGO -->
                            <!-- BEGIN SEARCH -->
                           {{--  <form class="search" action="extra_search.html" method="GET">
                                <input type="name" class="form-control" name="query" placeholder="Search...">
                                <a href="javascript:;" class="btn submit">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form> --}}
                            <!-- END SEARCH -->
                            <!-- BEGIN TOPBAR ACTIONS -->
                            <div class="topbar-actions">
                                <!-- Deal Notifications -->
                                    <div class="btn-group-notification btn-group" id="header_notification_bar">
                                    <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="icon-bell"></i>
                                        <span class="badge">7</span>
                                    </button>
                                    <ul class="dropdown-menu-v2">
                                        <li class="external">
                                            <h3>
                                                <span class="bold">{{sizeof(Auth::user()->recived_message()->get())}}</span> notifications</h3>
                                            <a href="#">view all</a>
                                        </li>
                                        <li>
                                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                                
                                                @foreach (Auth::user()->recived_message()->get() as $message) 
                                                @if(!is_null($message))
                                                      
                                                    @if($message->type==0)   
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-success">
                                                                    <i class="fa fa-plus"></i>
                                                                </span> New Deal  for {{ $message->book()->first()->name }}
                                                                        By {{ $message->sender()->first()->name}} 
                                                                </span>
                                                           
                                                        </a>
                                                    </li>
                                                    @elseif($message->type==1)   
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-success">
                                                                    <i class="fa fa-plus"></i>
                                                                </span> Deal Cancled for{{ $message->book()->first()->name}} 
                                                                         By 
                                                                </span>
                                                            
                                                        </a>
                                                    </li>
                                                    @elseif($message->type==2)   
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-success">
                                                                    <i class="fa fa-plus"></i>
                                                                </span> Deal Cancled for {{ $message->book()->first()->name}}
                                                                         By You
                                                                </span>
                                                        </a>
                                                    </li>
                                                    @elseif($message->type==3)   
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-success">
                                                                    <i class="fa fa-plus"></i>
                                                                </span> Deal Completed By You {{ $message->book()->first()->name}}
                                                                 </span>
                                                           
                                                        </a>
                                                    </li>
                                                    @endif
                                                @endif
                                                @endforeach
                                          
                                            </ul><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(99, 114, 131);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
                                        </li>
                                    </ul>
                                </div>

                                <!-- End of notifications
                                <!-- BEGIN USER PROFILE -->
                                <div class="btn-group-img btn-group">
                                    <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <span>Hi, {{Auth::user()->name}}</span>
                                        {{-- <img src="{{asset("layout/img/avatar1.jpg")}}" alt=""> --}} </button>
                                    <ul class="dropdown-menu-v2" role="menu">
                                        <li>
                                            <a href="{{route("users.edit",['id'=>Auth::user()->id])}}">
                                                <i class="icon-user"></i> My Profile                                               
                                            </a>
                                              
                                        </li>                          
                                                             

                                        <li class="divider"> </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-lock"></i> Lock Screen </a>

                                        </li>
                                        <li>
                                            <a href="{{url("logout")}}">
                                                <i class="icon-key"></i> Log Out </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END USER PROFILE -->
                              
                            </div>
                            <!-- END TOPBAR ACTIONS -->
                        </div>
                        <!-- BEGIN HEADER MENU -->
                        <div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                                <!--  Dashboard  menu -->
                                <li class="dropdown dropdown-fw  {{set_active(['dashbaord*','home'],'active open selected')}}">
                                    <a href="{{ route('dashboard.index') }}" class="text-uppercase">
                                        <i class="icon-home"></i> Home </a>
                                    {{-- <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="active">
                                            <a href="{{ route('dashboard.index') }}">
                                                <i class="icon-bar-chart"></i> Dashboard </a>
                                        </li>
                                    
                                    </ul> --}}
                                </li>
                                <!-- Selling Menu -->
                                <li class="dropdown dropdown-fw  {{set_active(['sells*'],'active open selected')}}">
                                    <a href="{{ route('sells.index') }}" class="text-uppercase">
                                        <i class="icon-home"></i> Sell </a>
                                   {{--  <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="active">
                                            <a href="{{ route('sells.index') }}">
                                                <i class="icon-bar-chart"></i> Inventory </a>
                                        </li> --}}
                                    {{--     <li>                                            
                                            <a href="{{ route('sells.index') }}">
                                                <i class="icon-bar-chart"></i> List The Sold Books </a>
                                        </li>
                                         <li>                                            
                                            <a href="{{ route('sells.index') }}">
                                                <i class="icon-bar-chart"></i> List The Books Under Deal </a>
                                        </li>
                                         <li>                                            
                                            <a href="{{ route('sells.index') }}">
                                                <i class="icon-bar-chart"></i> List The Rest Books </a>
                                        </li> --}}
                                    
                                    {{-- </ul> --}}
                                </li>
                                <!-- Searching Menu -->
                                <li class="dropdown dropdown-fw {{set_active('purchases*','active open selected')}} ">
                                    <a href="{{ route('purchases.index') }}" class="text-uppercase">
                                        <i class="icon-home"></i> Get A Book </a>
                                    {{-- <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="active">
                                            <a href="{{ route('purchases.index') }}">
                                                <i class="icon-bar-chart"></i> Purchases </a>
                                        </li> --}}
                                       {{--  <li>                                            
                                            <a href="{{ route('dashboard.index') }}">
                                                <i class="icon-bar-chart"></i> List The Purchased Books </a>
                                        </li>
                                         <li>                                            
                                            <a href="{{ route('dashboard.index') }}">
                                                <i class="icon-bar-chart"></i> List The Books Under Deal </a>
                                        </li>
                                         <li>                                            
                                            <a href="{{ route('dashboard.index') }}">
                                                <i class="icon-bar-chart"></i> List The Whish List Books </a>
                                        </li> --}}
                                    
                                   {{--  </ul> --}}
                                </li>
                                <!-- Search Menu -->
                                <li class="dropdown more-dropdown">
                                    <a href="javascript:;" class="text-uppercase"> More </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">List For Subjec Codes</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!--/container-->
                </nav>
            </header>
            <!-- END HEADER -->