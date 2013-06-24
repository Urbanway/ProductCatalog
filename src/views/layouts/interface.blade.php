<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    @section('css')
        <link rel="stylesheet" href="{{ asset('packages/Davzie/ProductCatalog/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('packages/Davzie/ProductCatalog/css/bootstrap-responsive.min.css') }}">
        <link rel="stylesheet/less" type="text/css" href="{{ asset( 'packages/Davzie/ProductCatalog/css/styles.less' ) }}">
    @show

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{{ asset('packages/Davzie/ProductCatalog/favicon.ico') }}">
    <title>{{ Config::get('ProductCatalog::app.name') }} &gt; @yield('title')</title>
  </head>

  <body class="interface">

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="{{ url('manage') }}">{{ Config::get('ProductCatalog::app.name') }}</a>
          <div class="nav-collapse collapse visible-desktop">
            <ul class="nav">
              <li class="{{ Request::is('manage/products') ? 'active' : '' }}"><a href="{{ url('manage/customers') }}">Products</a></li>
              <li class="{{ Request::is('manage/categories') ? 'active' : '' }}"><a href="{{ url('manage/transactions') }}">Categories</a></li>
              <li class="{{ Request::is('manage/attributes') ? 'active' : '' }}"><a href="{{ url('manage/lessons') }}">Attributes</a></li>
            </ul>
          </div><!--/.nav-collapse -->

          <form class="navbar-search pull-right">
            <input type="text" class="search-query" placeholder="Search products...">
          </form>
          <p class="navbar-text pull-right visible-desktop">
            Logged in as {{ $user->getFullName() }} <small>( <a href="{{ url('/manage/logout') }}" class="navbar-link">logout</a> )</small><span class="icon-bar"></span>
          </p>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="{{ Request::is('manage') ? 'active' : '' }}">
                <a href="{{ url('manage') }}"><span class="icon-home"></span> Dashboard</a>
              </li>
              <li class="nav-header">Site Content</li>
              <li class="{{ Request::is('manage/products') ? 'active' : '' }}">
                <a href="{{ url('manage/products') }}"><span class="icon-th-large"></span> Product Manager</a>
              </li>
              <li class="{{ Request::is('manage/categories') ? 'active' : '' }}">
                <a href="{{ url('manage/categories') }}"><span class="icon-book"></span> Category Manager</a>
              </li>
              <li class="nav-header">Attributes</li>
              <li class="{{ Request::is('manage/customers') ? 'active' : '' }}">
                <a href="{{ url('manage/customers') }}"><span class="icon-certificate"></span> Attributes</a>
              </li>
              <li class="{{ Request::is('manage/plans') ? 'active' : '' }}">
                <a href="{{ url('manage/plans') }}"><span class="icon-th-list"></span> Attribute Sets</a>
              </li>
              <li class="nav-header">Management</li>
              <li class="{{ Request::is('manage/users') ? 'active' : '' }}">
                <a href="{{ url('manage/users') }}"><span class="icon-user"></span> Admin Users</a>
              </li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        @section('content-area')

        @show
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; {{ Config::get('ProductCatalog::app.name') }} {{ date('Y') }}</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    @section('scripts')
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ asset('packages/Davzie/ProductCatalog/js/jquery.js') }}"><\/script>')</script>
        <script src="{{ asset('packages/Davzie/ProductCatalog/js/bootstra.min.js') }}"></script>
        <script src="{{ asset('packages/Davzie/ProductCatalog/js/less.js') }}"></script>
    @show

  </body>
</html>