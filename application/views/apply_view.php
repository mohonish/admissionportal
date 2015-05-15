<!DOCTYPE html>
<html>
<head>
  <title>AOT Admission | Apply</title>
</head>
<body>
  <h1>AOT Admission | Apply</h1>
  <?php echo validation_errors(); ?>
  <?php echo form_open('apply/verifyapplication'); ?>
    <label for="email">Email:</label>
    <input type="text" size="20" id="email" name="email" value="<?php echo set_value('email'); ?>" />
    <br/>
    <label for="username">Username:</label>
    <input type="text" size="20" id="username" name="username" value="<?php echo set_value('username'); ?>" />
    <br/>
    <label for="password">Password:</label>
    <input type="password" size="20" id="password" name="password" value="<?php echo set_value('password'); ?>" />
    <br/>
    <label for="password">Re-enter Password:</label>
    <input type="password" size="20" id="repassword" name="repassword" value="<?php echo set_value('repassword'); ?>" />
    <br/>
    <label for="fname">First Name:</label>
    <input type="text" size="20" id="fname" name="fname" value="<?php echo set_value('fname'); ?>" />
    <br/>
    <label for="lname">Last Name:</label>
    <input type="text" size="20" id="lname" name="lname" value="<?php echo set_value('lname'); ?>" />
    <br/>
    <label for="gname">Guardian's Name:</label>
    <input type="text" size="20" id="gname" name="gname" value="<?php echo set_value('gname'); ?>" />
    <br/>
    <label for="dob">Date of Birth:</label>
    <input type="text" size="10" id="dob" name="dob" value="<?php echo set_value('dob'); ?>" />
    <br/>
    <label for="stream">Select Stream:</label>
    <select name="stream">
      <option value="it" <?php echo set_select('stream', 'it', TRUE); ?> >IT</option>
      <option value="cse" <?php echo set_select('stream', 'cse', TRUE); ?> >CSE</option>
      <option value="ece" <?php echo set_select('stream', 'ece', TRUE); ?> >ECE</option>
      <option value="ee" <?php echo set_select('stream', 'ee', TRUE); ?> >EE</option>
      <option value="aei" <?php echo set_select('stream', 'aei', TRUE); ?> >AEIE</option>
      <option value="me" <?php echo set_select('stream', 'me', TRUE); ?> >ME</option>
    </select>
    <br/>
    <input type="submit" value="Submit Application"/>
  </form>
  <p>TBA: Divide form into sections.</p>
</body>
</html>