<!DOCTYPE html>
<html>
<head>
  <title>AOT Admission | Login</title>
</head>
<body>
  <h1>AOT Admission | Login</h1>
  <?php echo validation_errors(); ?>
  <?php echo form_open('verifylogin'); ?>
    <label for="username">Username:</label>
    <input type="text" size="20" id="username" name="username"/>
    <br/>
    <label for="password">Password:</label>
    <input type="password" size="20" id="password" name="password"/>
    <br/>
    <input type="submit" value="Login"/>
  </form>
</body>
</html>