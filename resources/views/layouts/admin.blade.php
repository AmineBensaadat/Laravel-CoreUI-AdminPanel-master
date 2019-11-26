<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('global.site_title') }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
<header class="app-header navbar">
<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
<span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="#">
<img class="navbar-brand-full" src="img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
<img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
</a>
<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
<span class="navbar-toggler-icon"></span>
</button>
<ul class="nav navbar-nav d-md-down-none">
<li class="nav-item px-3">
<a class="nav-link" href="#">GYm 1</a>
</li>
<li class="nav-item px-3">
<a class="nav-link" href="#">Gym 2</a>
</li>
<li class="nav-item px-3">
<a class="nav-link" href="#">Gym 3</a>
</li>
<li class="nav-item px-3">

</li>
</ul>
<ul class="nav navbar-nav ml-auto">
<li class="nav-item dropdown d-md-down-none show">
<a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
<i class="icon-bell"></i>
<span class="badge badge-pill badge-danger">5</span>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
<div class="dropdown-header text-center">
<strong>You have 5 notifications</strong>
</div>
<a class="dropdown-item" href="#">
<i class="icon-user-follow text-success"></i> New user registered</a>
<a class="dropdown-item" href="#">
<i class="icon-user-unfollow text-danger"></i> User deleted</a>
<a class="dropdown-item" href="#">
<i class="icon-chart text-info"></i> Sales report is ready</a>
<a class="dropdown-item" href="#">
<i class="icon-basket-loaded text-primary"></i> New client</a>
<a class="dropdown-item" href="#">
<i class="icon-speedometer text-warning"></i> Server overloaded</a>
<div class="dropdown-header text-center">
<strong>Server</strong>
</div>
<a class="dropdown-item" href="#">
<div class="text-uppercase mb-1">
<small>
<b>CPU Usage</b>
</small>
</div>
<span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span>
<small class="text-muted">348 Processes. 1/4 Cores.</small>
</a>
<a class="dropdown-item" href="#">
<div class="text-uppercase mb-1">
<small>
<b>Memory Usage</b>
</small>
</div>
<span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
</span>
<small class="text-muted">11444GB/16384MB</small>
</a>
<a class="dropdown-item" href="#">
<div class="text-uppercase mb-1">
<small>
<b>SSD 1 Usage</b>
</small>
</div>
<span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
</span>
<small class="text-muted">243GB/256GB</small>
</a>
</div>
</li>
<li class="nav-item dropdown d-md-down-none">
<a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
<i class="icon-list"></i>
<span class="badge badge-pill badge-warning">15</span>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
<div class="dropdown-header text-center">
<strong>You have 5 pending tasks</strong>
</div>
<a class="dropdown-item" href="#">
<div class="small mb-1">Upgrade NPM &amp; Bower
<span class="float-right">
<strong>0%</strong>
</span>
</div>
<span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</span>
</a>
<a class="dropdown-item" href="#">
<div class="small mb-1">ReactJS Version
<span class="float-right">
<strong>25%</strong>
</span>
</div>
<span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span>
</a>
<a class="dropdown-item" href="#">
<div class="small mb-1">VueJS Version
<span class="float-right">
<strong>50%</strong>
</span>
</div>
<span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</span>
</a>
<a class="dropdown-item" href="#">
<div class="small mb-1">Add new layouts
<span class="float-right">
<strong>75%</strong>
</span>
</div>
<span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</span>
</a>
<a class="dropdown-item" href="#">
<div class="small mb-1">Angular 2 Cli Version
<span class="float-right">
<strong>100%</strong>
</span>
</div>
<span class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</span>
</a>
<a class="dropdown-item text-center" href="#">
<strong>View all tasks</strong>
</a>
</div>
</li>
<li class="nav-item dropdown d-md-down-none">
<a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
<i class="icon-envelope-letter"></i>
<span class="badge badge-pill badge-info">7</span>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
<div class="dropdown-header text-center">
<strong>You have 4 messages</strong>
</div>
<a class="dropdown-item" href="#">
<div class="message">
<div class="py-3 mr-3 float-left">
<div class="avatar">
<img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
<span class="avatar-status badge-success"></span>
</div>
</div>
<div>
<small class="text-muted">John Doe</small>
<small class="text-muted float-right mt-1">Just now</small>
</div>
<div class="text-truncate font-weight-bold">
<span class="fa fa-exclamation text-danger"></span> Important message</div>
<div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="message">
<div class="py-3 mr-3 float-left">
<div class="avatar">
<img class="img-avatar" src="fff/img/avatars/6.jpg" alt="aa>
<span class="avatar-status badge-warning"></span>
</div>
</div>
<div>
<small class="text-muted">John Doe</small>
<small class="text-muted float-right mt-1">5 minutes ago</small>
</div>
<div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
<div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="message">
<div class="py-3 mr-3 float-left">
<div class="avatar">
<img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
<span class="avatar-status badge-danger"></span>
</div>
</div>
<div>
<small class="text-muted">John Doe</small>
<small class="text-muted float-right mt-1">1:52 PM</small>
</div>
<div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
<div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="message">
<div class="py-3 mr-3 float-left">
<div class="avatar">
<img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
<span class="avatar-status badge-info"></span>
</div>
</div>
<div>
<small class="text-muted">John Doe</small>
<small class="text-muted float-right mt-1">4:03 PM</small>
</div>
<div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
<div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
</div>
</a>
<a class="dropdown-item text-center" href="#">
<strong>View all messages</strong>
</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
<img class="img-avatar" src="http://localhost/Laravel-CoreUI-AdminPanel-master/img/avatars/6.jpg" alt="ff">
</a>
<div class="dropdown-menu dropdown-menu-right">
<div class="dropdown-header text-center">
<strong>Account</strong>
</div>
<a class="dropdown-item" href="#">
<i class="fa fa-bell-o"></i> Updates
<span class="badge badge-info">42</span>
</a>
<a class="dropdown-item" href="#">
<i class="fa fa-envelope-o"></i> Messages
<span class="badge badge-success">42</span>
</a>
<a class="dropdown-item" href="#">
<i class="fa fa-tasks"></i> Tasks
<span class="badge badge-danger">42</span>
</a>
<a class="dropdown-item" href="#">
<i class="fa fa-comments"></i> Comments
<span class="badge badge-warning">42</span>
</a>
<div class="dropdown-header text-center">
<strong>Settings</strong>
</div>
<a class="dropdown-item" href="#">
<i class="fa fa-user"></i> Profile</a>
<a class="dropdown-item" href="#">
<i class="fa fa-wrench"></i> Settings</a>
<a class="dropdown-item" href="#">
<i class="fa fa-usd"></i> Payments
<span class="badge badge-dark">42</span>
</a>
<a class="dropdown-item" href="#">
<i class="fa fa-file"></i> Projects
<span class="badge badge-primary">42</span>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<i class="fa fa-shield"></i> Lock Account</a>
<a class="dropdown-item" href="#">
<i class="fa fa-lock"></i> Logout</a>
</div>
</li>
</ul>
<button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
<span class="navbar-toggler-icon"></span>
</button>
<button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
<span class="navbar-toggler-icon"></span>
</button>
</header>

    <div class="app-body">
        @include('partials.menu')
        <main class="main">


            <div style="padding-top: 20px" class="container-fluid">

                @yield('content')

            </div>


        </main>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(function() {
  let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
  let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
  let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
  let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
  let printButtonTrans = '{{ trans('global.datatables.print') }}'
  let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
  };

  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages.{{ app()->getLocale() }}
    },
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }, {
        orderable: false,
        searchable: false,
        targets: -1
    }],
    select: {
      style:    'multi+shift',
      selector: 'td:first-child'
    },
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [
      {
        extend: 'copy',
        className: 'btn-default',
        text: copyButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'csv',
        className: 'btn-default',
        text: csvButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excel',
        className: 'btn-default',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'pdf',
        className: 'btn-default',
        text: pdfButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn-default',
        text: printButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'colvis',
        className: 'btn-default',
        text: colvisButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      }
    ]
  });

  $.fn.dataTable.ext.classes.sPageButton = '';
});

    </script>
    @yield('scripts')
</body>

</html>