<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>  
  <meta charset="utf-8" />
  <title>{{ Setting::param('site','app_name')['value'] }}</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="{{url()}}/assets/adminFiles/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="{{url()}}/assets/adminFiles/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="{{url()}}/assets/adminFiles/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="{{url()}}/assets/adminFiles/css/icon.css" type="text/css" />
  <link rel="stylesheet" href="{{url()}}/assets/adminFiles/css/font.css" type="text/css" />
  <link rel="stylesheet" href="{{url()}}/assets/adminFiles/css/app.css" type="text/css" />
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
    <section id="content">
    <div class="row m-n">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="text-center m-b-lg">
          <h1 class="h text-white animated fadeInDownBig">404</h1>
        </div>
        <div class="list-group bg-info auto m-b-sm m-b-lg">
          <a href="admin/dashboard" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-home icon-muted"></i> Goto Dashboard
          </a>
          <a href="" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-question icon-muted"></i> Send us a tip
          </a>
          <a href="" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <span class="badge bg-info lt">021-215-584</span>
            <i class="fa fa-fw fa-phone icon-muted"></i> Call us
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>{{ Setting::param('site','app_name')['value'] }} Inc<br>&copy; <?php echo date("Y"); ?></small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <script src="{{url()}}/assets/adminFiles/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="{{url()}}/assets/adminFiles/js/bootstrap.js"></script>
  <!-- App -->
  <script src="{{url()}}/assets/adminFiles/js/app.js"></script>
  <script src="{{url()}}/assets/adminFiles/js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{url()}}/assets/adminFiles/js/app.plugin.js"></script>
</body>
</html>
