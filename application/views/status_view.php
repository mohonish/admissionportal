<!DOCTYPE html>
<html>
<head>
	<title>AOT Admission | Status</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
  	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.js"); ?>"></script>
  	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>
<body>
   	<h1>Application Status</h1>
   	<h2>Welcome <?php echo $username; ?>!</h2>
   	<h4>Status: <?php echo $result; ?>!</h2>
   	<a href="home/logout">Logout</a>
   	<a href="home/changepw">Change Password</a>
	<!-- Next Feature TBD -->
   	<a href="home/status">Application Status</a>
   	<a href="home/edit">Edit Profile</a>
</body>
</html>