<!DOCTYPE html>
<html>
<head>
  <title>AOT Admission | Change Password</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>
<body>
  <h1>AOT Admission | Change Password</h1>
  <?php echo validation_errors(); ?>
  <?php echo form_open('verifychangepw'); ?>
    <label for="password">Password:</label>
    <input type="password" size="20" id="password" name="password"/>
    <br/>
    <label for="repassword">Re-type Password:</label>
    <input type="password" size="20" id="repassword" name="repassword"/>
    <br/>
    <input type="submit" value="Login"/>
  </form>
</body>
</html>