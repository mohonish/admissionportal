<!DOCTYPE html>
<html lang="en">
<head>
  <title>AOT Admission | Dashboard</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/sb-admin.css"); ?>" />
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url("/"); ?>">AOT Admissions</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Hi, <?php echo $username; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url("index.php/home/changepw"); ?>"><i class="fa fa-fw fa-user"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="home/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url("/index.php/home"); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("index.php/home/status"); ?>"><i class="fa fa-fw fa-table"></i> Application Status</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i> Tuition Fees</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i> Help</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("/#contact"); ?>"><i class="fa fa-fw fa-table"></i> Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Application
                            <small>Status</small>
                        </h1>
                        <h2>Your Status:
                            <?php 
                            if($result == '0'){ echo "Under Review."; }
                            if($result == '1'){ echo "Accepted!"; }
                            if($result == '2'){ echo "Rejected."; }
                            ?>
                        </h2>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.js"); ?>"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>

</html>