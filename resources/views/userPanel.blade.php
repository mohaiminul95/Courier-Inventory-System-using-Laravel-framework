<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>
  
  <!-- start: Meta -->
  <meta charset="utf-8">
  <title>Courier Service</title>
  <meta name="description" content="Metro Admin Template.">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <!-- end: Meta -->
  
  <!-- start: Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- end: Mobile Specific -->
  
  <!-- start: CSS -->
  <link id="bootstrap-style" href="{{ asset('public/backend/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/backend/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
  <link id="base-style" href="{{ asset('public/backend/css/style.css') }}" rel="stylesheet">
  <link id="base-style-responsive" href="{{ asset('public/backend/css/style-responsive.css') }}" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  <!-- end: CSS -->
  

  <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="css/ie.css" rel="stylesheet">
  <![endif]-->
  
  <!--[if IE 9]>
    <link id="ie9style" href="css/ie9.css" rel="stylesheet">
  <![endif]-->
    
  <!-- start: Favicon -->
  <link rel="shortcut icon" href="{{ URL::to('public/backend/img/favicon.ico') }}">
  <!-- end: Favicon -->
  
    
    
    
</head>

<body>
    <!-- start: Header -->
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.html"><span>Metro</span></a>
                
        <!-- start: Header Menu -->
        <div class="nav-no-collapse header-nav">
          <ul class="nav pull-right">
            <li class="dropdown hidden-phone">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="halflings-icon white warning-sign"></i>
              </a>
              <ul class="dropdown-menu notifications">
                <li class="dropdown-menu-title">
                  <span>You have 11 notifications</span>
                  <a href="#refresh"><i class="icon-repeat"></i></a>
                </li> 
                              <li>
                                    <a href="#">
                    <span class="icon blue"><i class="icon-user"></i></span>
                    <span class="message">New user registration</span>
                    <span class="time">1 min</span> 
                                    </a>
                                </li>
                <li>
                                    <a href="#">
                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                    <span class="message">New comment</span>
                    <span class="time">7 min</span> 
                                    </a>
                                </li>
                <li>
                                    <a href="#">
                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                    <span class="message">New comment</span>
                    <span class="time">8 min</span> 
                                    </a>
                                </li>
                <li>
                                    <a href="#">
                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                    <span class="message">New comment</span>
                    <span class="time">16 min</span> 
                                    </a>
                                </li>
                <li>
                                    <a href="#">
                    <span class="icon blue"><i class="icon-user"></i></span>
                    <span class="message">New user registration</span>
                    <span class="time">36 min</span> 
                                    </a>
                                </li>
                <li>
                                    <a href="#">
                    <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                    <span class="message">2 items sold</span>
                    <span class="time">1 hour</span> 
                                    </a>
                                </li>
                <li class="warning">
                                    <a href="#">
                    <span class="icon red"><i class="icon-user"></i></span>
                    <span class="message">User deleted account</span>
                    <span class="time">2 hour</span> 
                                    </a>
                                </li>
                <li class="warning">
                                    <a href="#">
                    <span class="icon red"><i class="icon-shopping-cart"></i></span>
                    <span class="message">Transaction was canceled</span>
                    <span class="time">6 hour</span> 
                                    </a>
                                </li>
                <li>
                                    <a href="#">
                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                    <span class="message">New comment</span>
                    <span class="time">yesterday</span> 
                                    </a>
                                </li>
                <li>
                                    <a href="#">
                    <span class="icon blue"><i class="icon-user"></i></span>
                    <span class="message">New user registration</span>
                    <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                                <a>View all notifications</a>
                </li> 
              </ul>
            </li>
            <!-- start: Notifications Dropdown -->
            <li class="dropdown hidden-phone">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="halflings-icon white tasks"></i>
              </a>
              <ul class="dropdown-menu tasks">
                <li class="dropdown-menu-title">
                  <span>You have 17 tasks in progress</span>
                  <a href="#refresh"><i class="icon-repeat"></i></a>
                </li>
                <li>
                                    <a href="#">
                    <span class="header">
                      <span class="title">iOS Development</span>
                      <span class="percent"></span>
                    </span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                    <span class="header">
                      <span class="title">Android Development</span>
                      <span class="percent"></span>
                    </span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                    <span class="header">
                      <span class="title">Django Project For Google</span>
                      <span class="percent"></span>
                    </span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
                <li>
                                    <a href="#">
                    <span class="header">
                      <span class="title">SEO for new sites</span>
                      <span class="percent"></span>
                    </span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                    <span class="header">
                      <span class="title">New blog posts</span>
                      <span class="percent"></span>
                    </span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
                <li>
                                <a class="dropdown-menu-sub-footer">View all tasks</a>
                </li> 
              </ul>
            </li>
            <!-- end: Notifications Dropdown -->
            <!-- start: Message Dropdown -->
            <li class="dropdown hidden-phone">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="halflings-icon white envelope"></i>
              </a>
              <ul class="dropdown-menu messages">
                <li class="dropdown-menu-title">
                  <span>You have 9 messages</span>
                  <a href="#refresh"><i class="icon-repeat"></i></a>
                </li> 
                              <li>
                                    <a href="#">
                    <span class="avatar"><img src="{{ URL::to('backend/img/avatar.jpg') }}" alt="Avatar"></span>
                    <span class="header">
                      <span class="from">
                          Łukasz Holeczek
                         </span>
                      <span class="time">
                          6 min
                        </span>
                    </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                    <span class="avatar"><img src="img/avatar2.jpg" alt="Avatar"></span>
                    <span class="header">
                      <span class="from">
                          Megan Abott
                         </span>
                      <span class="time">
                          56 min
                        </span>
                    </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                    <span class="avatar"><img src="img/avatar3.jpg" alt="Avatar"></span>
                    <span class="header">
                      <span class="from">
                          Kate Ross
                         </span>
                      <span class="time">
                          3 hours
                        </span>
                    </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                <li>
                                    <a href="#">
                    <span class="avatar"><img src="img/avatar4.jpg" alt="Avatar"></span>
                    <span class="header">
                      <span class="from">
                          Julie Blank
                         </span>
                      <span class="time">
                          yesterday
                        </span>
                    </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                    <span class="avatar"><img src="img/avatar5.jpg" alt="Avatar"></span>
                    <span class="header">
                      <span class="from">
                          Jane Sanders
                         </span>
                      <span class="time">
                          Jul 25, 2012
                        </span>
                    </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                <li>
                                <a class="dropdown-menu-sub-footer">View all messages</a>
                </li> 
              </ul>
            </li>
            <!-- end: Message Dropdown -->
            <li>
              <a class="btn" href="#">
                <i class="halflings-icon white wrench"></i>
              </a>
            </li>
            <!-- start: User Dropdown -->
            <li class="dropdown">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="halflings-icon white user"></i> Łukasz Holeczek
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown-menu-title">
                  <span>Account Settings</span>
                </li>
                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
              </ul>
            </li>
            <!-- end: User Dropdown -->
          </ul>
        </div>
        <!-- end: Header Menu -->
        
      </div>
    </div>
  </div>
  <!-- start: Header -->
  
    <div class="container-fluid-full">
    <div class="row-fluid">
        
      <!-- start: Main Menu -->
      <div id="sidebar-left" class="span2">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="{{ URL::to('userpanel') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet">Add Agent</span></a></li> 
            <li><a href="{{ URL::to('add_order') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet">Add Order</span></a></li>
            <li><a href="{{ URL::to('view_company') }}"><i class="icon-envelope"></i><span class="hidden-tablet">All Agents</span></a></li>
            <li><a href="{{ URL::to('all_orders') }}"><i class="icon-envelope"></i><span class="hidden-tablet">All Orders</span></a></li>
            <li><a href="{{ URL::to('pending_orders') }}"><i class="icon-envelope"></i><span class="hidden-tablet">All Pending Orders</span></a></li>
            <li><a href="{{ URL::to('shipped_orders') }}"><i class="icon-envelope"></i><span class="hidden-tablet">All Shipped Orders</span></a></li>

            
          </ul>
        </div>
      </div>
      <!-- end: Main Menu -->
      
      <noscript>
        <div class="alert alert-block span10">
          <h4 class="alert-heading">Warning!</h4>
          <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
        </div>
      </noscript>
      
     @yield('content')
  
  <footer>

    <p>
      <span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
      <span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Metro</a></span>
    </p>

  </footer>
  
  <!-- start: JavaScript-->

    <script src="{{ asset('public/backend/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery-migrate-1.0.0.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery-ui-1.10.0.custom.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.ui.touch-punch.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/modernizr.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/bootstrap.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.cookie.js') }}"></script>
  
    <script src='{{ asset('public/backend/js/fullcalendar.min.js') }}'></script>
  
    <script src='{{ asset('public/backend/js/jquery.dataTables.min.js') }}'></script>

    <script src="{{ asset('public/backend/js/excanvas.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.flot.resize.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.chosen.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.uniform.min.js') }}"></script>
    
    <script src="{{ asset('public/backend/js/jquery.cleditor.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.noty.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.elfinder.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.raty.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.iphone.toggle.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.uploadify-3.1.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.gritter.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.imagesloaded.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.masonry.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.knob.modified.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/jquery.sparkline.min.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/counter.js') }}"></script>
  
    <script src="{{ asset('public/backend/js/retina.js') }}"></script>

    <script src="{{ asset('backend/js/custom.js') }}"></script>
   
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


  <!-- end: JavaScript-->




<script>
  @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

  
    switch(type){
      case 'info':
             toastr.info("{{ Session::get('message') }}");
             break;
          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;
          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;
          case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>








  
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
