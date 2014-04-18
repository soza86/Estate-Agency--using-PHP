<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Administration Area</title>
  </head>
  <body>
    <h1>Administration Area</h1>
    <h2>Welcome <?php echo $username; ?>!</h2>
	<a href='<?php echo site_url('main/vendors')?>'>Go To Adminstration Tools</a><br/><br/>
    <a href='<?php echo site_url('Login')?>'>Logout</a>
  </body>
</html>
