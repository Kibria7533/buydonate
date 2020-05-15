<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Liveselling | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ asset('index3.html') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admindashboard') }}" class="brand-link">
      <img src="{{ asset('dist/img/mylogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Liveselling</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/kibria.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Md golam kibria</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p><button id="main_admin_pannel_body">Dashboard</button>
                
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seller Dashbord</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('/') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Dashboard</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ asset('pages/widgets.html') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            
              <i class="nav-icon fas fa-copy"></i>
              <p  class="nav-link">
                <button id="AM"> Auth Manage</button>
                <i class="fas fa-angle-left right"></i>
               
              </p>
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <i class="far fa-circle nav-icon"></i>
                  <button type="button" id="MA"class="btn btn-secondary">Manage admin</button>
                
              </li>
              <li class="nav-item">
                  <i class="far fa-circle nav-icon"></i>
                  <button type="button" id="MS"class="btn btn-secondary">Manage seller</button>
                
              </li>
              <li class="nav-item">
                  <i class="far fa-circle nav-icon"></i>
                  <button type="button" id="MC"class="btn btn-secondary">Manage customer</button>
                
              </li>

              
              <li class="nav-item">
                <a href="{{ asset('pages/layout/fixed-sidebar.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Al_auth_analysis</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            
              <i class="nav-icon fas fa-copy"></i>
              <p  class="nav-link">
                <button id="CM">Categories</button>
                <i class="fas fa-angle-left right"></i>
               
              </p>
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <i class="far fa-circle nav-icon"></i>
                  <button type="button" id="ALLC"class="btn btn-secondary">All</button>
                
              </li>
              <li class="nav-item">
                  <i class="far fa-circle nav-icon"></i>
                  <button type="button" id="AC"class="btn btn-secondary">ADD</button>
                
              </li>
              <li class="nav-item">
                  <i class="far fa-circle nav-icon"></i>
                  <button type="button" id="CDE"class="btn btn-secondary">Details</button>
                
              </li>

              
              <li class="nav-item">
                <a href="{{ asset('pages/layout/fixed-sidebar.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>analysis</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            
              <i class="nav-icon fas fa-copy"></i>
              <p  class="nav-link">
                <button id="SCM">State&City</button>
                <i class="fas fa-angle-left right"></i>
               
              </p>
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <i class="far fa-circle nav-icon"></i>
                  <button type="button" id="ALLSC"class="btn btn-secondary">All</button>
                
              </li>
              <li class="nav-item">
                  <i class="far fa-circle nav-icon"></i>
                  <button type="button" id="ADDS"class="btn btn-secondary">Add</button>
                
              </li>
              <li class="nav-item">
                  <i class="far fa-circle nav-icon"></i>
                  <button type="button" id="SCDE"class="btn btn-secondary">Details</button>
                
              </li>

              
              <li class="nav-item">
                <a href="{{ asset('pages/layout/fixed-sidebar.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>analysis</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('pages/forms/general.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vedios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/forms/advanced.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comments_vedios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/forms/editors.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pictures</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/forms/validation.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Analytics</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Customer orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ asset('pages/tables/simple.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Check_orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/tables/simple.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>In_process</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/tables/data.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>On_delivay</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/tables/jsgrid.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Done</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Our Purchase
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('pages/tables/simple.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Make_purchase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/tables/data.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>On_the_way</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/tables/jsgrid.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>In_warehouse</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                UI_elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('pages/tables/simple.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/tables/data.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/tables/jsgrid.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dynamic_headings</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Communication_info</li>
          <li class="nav-item">
            <a href="{{ asset('pages/calendar.html') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
               Customer_details
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('pages/gallery.html') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Seller_details
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
              Al_mails_info
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('pages/mailbox/mailbox.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/mailbox/compose.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/mailbox/read-mail.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('pages/examples/invoice.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daily</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/profile.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthly</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/e-commerce.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Yearly</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/projects.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/project-add.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/project-edit.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/project-detail.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/contacts.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('pages/examples/login.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/register.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/forgot-password.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/recover-password.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/lockscreen.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/legacy-user-menu.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/language-menu.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/404.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/500.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/pace.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('pages/examples/blank.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('starter.html') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="{{ asset('https://adminlte.io/docs/3.0') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">Profit/Loss Analysis</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Action</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!--admin manage card-->
    <div id="am" class="card kcard">
  <div class="card-body">
  <h1 style="background-color: #f1f1f1;
  padding: 20px;
  text-align: center;" id="amh">Here  you  can control Admins</h1>
  <button type="button" id="sellerrequestbutton"class="btn btn-secondary">Seller Request</button>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" id="amc1">Name</th>
            <th scope="col"id="amc2">Email</th>
            <th scope="col"id="amc3">Address</th>
            <th scope="col"id="amc4">Mobile No</th>
            <th scope="col"id="amc4">UserType</th>
            <th scope="col"id="amc5">Change Role</th>
            <th scope="col"id="amc5">Dismish</th>
          </tr>
        </thead>
        <tbody id="amtb">
        </tbody>
      </table>

   
  </div>
</div> 
<!--category manage card-->
 <div id="cm"class="card kcard">
  <div class="card-body">
  <h1 style="background-color: #f1f1f1;
  padding: 20px;
  text-align: center;" id="cmh">Manage your Category & Subcategory</h1>
    <button type="button" id="cmhbt"class="btn btn-primary ">Add category</button>
    <button type="button" id="cmcrb"class="btn btn-secondary">Add subcategory</button>
     <div >
      <ul id="cmtb">
      </ul>
       
     </div>

    <div class="modal fade" id="cmm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" id="exampleModalLongTitle">Add  category</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             
            </button>
          </div>
          <div class="modal-body">
                 <form method="POST">
            <div class="row">
              <div class="col">
                <input type="text"name="cateName" class="form-control" placeholder="Enter Capitalize">
              </div>
              <div class="col">
                <button type="submit" id="csbt" class="btn btn-primary ">Add category</button>
              </div>
            </div>
                </form>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <div id="scm"class="card kcard">
  <div class="card-body">
  <h1 style="background-color: #f1f1f1;
  padding: 20px;
  text-align: center;" id="scmh">Manage your State & City</h1>
    <button type="button" id="scmhbt"class="btn btn-primary ">Add state</button>
    <button type="button" id="scmcrb"class="btn btn-secondary">Add city</button>
      <div >
      <ul id="scmtb">
      </ul>
       
     </div>

   <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="sam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">Add state</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="stateName" placeholder="State  name">
    </div>
    <div class="col">
      <button type="button" id="statesave"class="btn btn-primary">Save state</button>
    </div>
  </div>
</form>
      </div>
     
    </div>
  </div>
</div>
  </div>
</div> 
<div class="modal" id="subcategoryadd"tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h class="modal-title">Add  subcategory</h>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Select categories</label>
    <select class="form-control dropdown" name="categories"id="mycategories" class="categories" >
      <option value="">Select option</option> </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Add subcategory name</label>
    <input type="text" class="form-control" name="subcategory" id="subcateadd" placeholder="write subcategory name">
  </div>
  <button type="submit" id="addingsubcategory" class="btn btn-primary">Submit</button>
</form>
      </div>
      
    </div>
  </div>
</div>

<!--adding city-->
<div class="modal" id="cityadd"tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h class="modal-title">Add  city</h>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Select state</label>
    <select class="form-control dropdown" name="categories"id="statelistly" class="categories" >
      <option value="">Select option</option> </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Add city name</label>
    <input type="text" class="form-control" name="city" id="cityname" placeholder="write subcategory name">
  </div>
  <button type="submit" id="addingcity" class="btn btn-primary">Submit</button>
</form>
      </div>
      
    </div>
  </div>
</div>
    
  </div>

  
<!-- /.content -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="https://www.facebook.com/Liveselling-103016791357318/?modal=admin_todo_tour">Liveselling.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script type="text/javascript" src="{{asset('js/myusersmanagement.js')}}"></script>



</body>
@yield('sc')
<script type="text/javascript">
$.ajaxSetup({
        headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'}
    });

$(document).ready(function(){
        $('.kcard').hide();
        
          
           

      //category showing button..click

          $('#CM').click(function(e){
                      e.preventDefault();
                      $('.content').hide();
                      $('.kcard').hide();
                      readcategory();
                   $('#cmh').html('Manage your Category & Subcategory');
                   $('#cm').show();
                 });

        
      //add category modal open
         $('#cmhbt').click(function(e){
              e.preventDefault();
              $('#cmm').modal('show');
            });
             
         //added category save..

         $('#csbt').click(function(e){
                e.preventDefault();
                    var name=$("input[name=cateName]").val();
                   $.ajax({
                      url:'{{route('addcategory')}}',
                      method:'POST',
                      data:{name:name},
                      dataType:'json',
                      success:function(data){
                        readcategory();
                        $('#cmm').modal('hide');
                      }
                    });
                 });
               
  
         //admin dashboard show..

          $('#main_admin_pannel_body').click(function(e){
            e.preventDefault();
            $('.content').show();
            $('.kcard').hide();
          });

          
          

//click on state city managment button..
          $('#SCM').click(function(e){
                   e.preventDefault();
                      $('.content').hide();
                      $('.kcard').hide();
                       $('#scmh').html('Manage your State and City');
                       readstates();
                       $('#scm').show();
                     });

                        
                            
//add state button

          $('#scmhbt').click(function(e){
            e.preventDefault();
             $('#sam').modal('show');
          });


          $('#statesave').click(function(e){
                 e.preventDefault();
                  var stateName=$("input[name=stateName]").val();
                 $.ajax({
                    url:'{{route('addst')}}',
                    method:'POST',
                    data:{stateName:stateName},
                    dataType:'json',
                    success:function(data){
                     
                      $('#sam').modal('hide');
                       readstates();

                    }
                 });
             });
//adding city modal open
          $('#scmcrb').click(function(e){
            e.preventDefault();
            $.ajax({
                            url:"{{route('stateretrive')}}",
                            method:"GET",
                            success: function(data){
                                $('#statelistly').fadeIn();
                               $('#statelistly').html(data);
                               $('#cityadd').modal('show')
                           }
                            });

          });
          
                //add subcategory modal show
                     $('#cmcrb').click(function(){
                      $.ajax({
                            url:"{{route('categoriesretrieve')}}",
                            method:"GET",
                            success: function(data){
                                $('#mycategories').fadeIn();
                               $('#mycategories').html(data);
                               $('#subcategoryadd').modal('show')
                           }
                            });
                        
                     });


                        


//add subcategory 
                        $('#addingsubcategory').click(function(e){
                          e.preventDefault();
                               var subcategory=$("input[name=subcategory]").val();
                               var categoryid=$('#mycategories').val();
                               $.ajax({
                                    url:'{{route('addsubcategory')}}',
                                    data:{
                                      subcategory:subcategory,
                                      categoryid:categoryid

                                    },
                                    method:"POST",
                                    dataType:'json',
                                    success:function(data){
                                      $('#subcategoryadd').modal('hide');
                                      readcategory();
                                      alert('Subcategory Added Succecsfully');
                                    }

                               });
                               

                        });


                        //adding city
                        $('#addingcity').click(function(e){
                          e.preventDefault();
                               var cityname=$("input[name=city]").val();
                               var state=$('#statelistly').val();
                               $.ajax({
                                    url:'{{route('addcity')}}',
                                    data:{
                                      state:state,
                                      cityname:cityname

                                    },
                                    method:"POST",
                                    dataType:'json',
                                    success:function(data){
                                      $('#cityadd').modal('hide');
                                      readstates();
                                      alert('City Added Succecsfully');
                                    }

                               });
                               

                        });





                         
                    
});


          
          


 function readcategory(){
                    $.ajax({
                        url:'{{route('readcategory')}}',
                        metohd:'GET',
                        dataType:'json',
                        success:function(data){
                          $('#cmtb').html(data);
                        }
                    });
                  }
 function readstates(){
                    $.ajax({
                        url:'{{route('readstates')}}',
                        metohd:'GET',
                        dataType:'json',
                        success:function(data){
                          console.log(data);
                          $('#scmtb').html(data);
                        }
                    });
                  }

//showing users
      function showu(id){

         $.ajax({
                 url:'{{route('showu')}}',
                 data:{id:id},
                 method:'POST',
                 success:function(data){
                  $('#amtb').html(data);
                  $('#am').show();
                 }
               });
      }  

      function deleteuser(id,showvalu){
       
        $.ajax({
                 url:'{{route('deleteuser')}}',
                 data:{id:id},
                 method:'POST',
                 success:function(data){
                   showu(showvalu);
                 }
               });
      }     

     function makeadmin(id,showvalu){
        $.ajax({
                 url:'{{route('makeadmin')}}',
                 data:{id:id},
                 method:'POST',
                 success:function(data){
                   showu(showvalu);
                 }
               });

      }    
function makeseller(id,showvalu){
        $.ajax({
                 url:'{{route('makeseller')}}',
                 data:{id:id},
                 method:'POST',
                 success:function(data){
                   showu(showvalu);
                 }
               });

      }    

      function makecustomer(id,showvalu){
        $.ajax({
                 url:'{{route('makecustomer')}}',
                 data:{id:id},
                 method:'POST',
                 success:function(data){
                   showu(showvalu);
                 }
               });

      }    


                 

</script>

</html>
