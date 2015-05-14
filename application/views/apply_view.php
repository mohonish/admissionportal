<!DOCTYPE html>
<html>
<head>
  <title>AOT Admission | Apply</title>
</head>
<body>
  <h1>AOT Admission | Apply</h1>
  <?php echo validation_errors(); ?>
  <?php echo form_open('verifyapply'); ?>
    <label for="email">Email:</label>
    <input type="text" size="20" id="email" name="email"/>
    <br/>
    <label for="username">Username:</label>
    <input type="text" size="20" id="username" name="username"/>
    <br/>
    <label for="password">Password:</label>
    <input type="password" size="20" id="password" name="password"/>
    <br/>
    <label for="fname">First Name:</label>
    <input type="text" size="20" id="fname" name="fname"/>
    <br/>
    <label for="lname">Last Name:</label>
    <input type="text" size="20" id="lname" name="lname"/>
    <br/>
    <label for="gname">Guardian's Name:</label>
    <input type="text" size="20" id="gname" name="gname"/>
    <br/>
    <!--
    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob"/>
    <br/>
    -->
    <label for="stream">Select Stream:</label>
    <select>
      <option value="it">IT</option>
      <option value="cse">CSE</option>
      <option value="ece">ECE</option>
      <option value="ee">EE</option>
      <option value="aeie">AEIE</option>
      <option value="me">ME</option>
    </select>
    <br/>
    <input type="submit" value="Submit Application"/>
  </form>
  <p>TBA: Divide form into sections. File Upload feature</p>
</body>
</html>