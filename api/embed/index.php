<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Embed Tiny File manager with Bootstrap Template</title>
 <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    
    <div id="wrapper" class="toggled">
      
      <!-- Page Content -->
    <div class="container-fluid">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              Tiny File Manager
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>


        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Config</a>
                </li>
                <li>
                    <a href="#">Editor</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

      <h1 class="mt-5">Embed Tiny File Manager with Bootstrap</h1>
      <p>Web based File Manager in single PHP file, Manage your files efficiently and easily with Tiny File Manager</p>

      <div class="row">
        <div class="col-12">
          <?php
          define('FM_EMBED', true);
          define('FM_SELF_URL', $_SERVER['PHP_SELF']);
          require '../index.php';
          ?>
        </div>
      </div>
    </div>
    <!-- /.container -->
    </div>
   
  </body>
</html>