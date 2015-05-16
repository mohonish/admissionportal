<!DOCTYPE html>
<html lang="en">
<head>
  <title>AOT Admission | Apply</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/simple-sidebar.css"); ?>" />
  <!-- Custom Fonts -->
  <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>
<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?php echo base_url('/'); ?>">
                        AOT Admissions
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('/'); ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo base_url('/#programmes'); ?>">Programmes</a>
                </li>
                <li>
                    <a href="<?php echo base_url('/#placements'); ?>">Placements</a>
                </li>
                <li>
                    <a href="<?php echo base_url('/#campus-life'); ?>">Campus Life</a>
                </li>
                <li>
                    <a href="<?php echo base_url('/#faculty'); ?>">Faculty</a>
                </li>
                <li>
                    <a href="<?php echo base_url('/#contact'); ?>">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
                        <h1>Apply</h1>
                        <div class="input-group form-container">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('apply/verifyapplication'); ?>
                        <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?php echo set_value('email'); ?>" data-toggle="tooltip" data-placement="right" title="Enter a valid Email ID. This will be used for all further communication." />
                        <br/><br/>
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?php echo set_value('username'); ?>" data-toggle="tooltip" data-placement="right" title="Must be within 4 to 12 characters" />
                        <br/><br/>
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" />
                        <br/><br/>
                        <input type="password" class="form-control" placeholder="Re-enter Password" id="repassword" name="repassword" />
                        <br/><br/>
                        <input type="text" class="form-control" placeholder="Student's First Name" id="fname" name="fname" value="<?php echo set_value('fname'); ?>" />
                        <br/><br/>
                        <input type="text" class="form-control" placeholder="Student's Last Name" id="lname" name="lname" value="<?php echo set_value('lname'); ?>" />
                        <br/><br/>
                        <input type="text" class="form-control" placeholder="Guardian's Name" id="gname" name="gname" value="<?php echo set_value('gname'); ?>" />
                        <br/><br/>
                        <select name="stream" class="form-control">
                          <option value="it" <?php echo set_select('stream', 'it', TRUE); ?> >IT</option>
                          <option value="cse" <?php echo set_select('stream', 'cse', TRUE); ?> >CSE</option>
                          <option value="ece" <?php echo set_select('stream', 'ece', TRUE); ?> >ECE</option>
                          <option value="ee" <?php echo set_select('stream', 'ee', TRUE); ?> >EE</option>
                          <option value="aei" <?php echo set_select('stream', 'aei', TRUE); ?> >AEIE</option>
                          <option value="me" <?php echo set_select('stream', 'me', TRUE); ?> >ME</option>
                        </select>
                        <br/><br/>
                        <button type="submit" class="btn btn-default">Submit Application</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.js"); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>

</body>

</html>