<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration page</title>

</head>

<body>
<table width="100%" border="0" align="center" bordercolor="#FF0000" bgcolor="#FF0000">
  <tr>
    <th colspan="2" bgcolor="#FFFFFF" scope="col">
    <?php
	include("header.php");
	?></th>
  </tr>
  <tr>
    <th width="17" height="189" align="center" valign="top" bgcolor="#FFFFFF" scope="row"><?php
	include("sidelink.php");
	?></th>
    <th width="841" valign="top"  bgcolor="#FFFFFF" scope="row"><table width="748" border="0" align="left" bordercolor="#FFFFFF" bgcolor="#FF0000">
      <tr>
        <th width="742" height="22" bgcolor="#0099FF" scope="col"><div align="left"><span class="style6">Fill in the form to register </span></div></th>
      </tr>
      <tr>
        <th height="276" scope="row"><form id="form1" name="form1" method="post" action="../My%20Last%20Semester/ITN(PHP)/ITN30AT%20project/registered.php">
            <table width="681" border="0">
        </form></th>
      </tr>
      <tr>
        <th scope="col"><div align="left" class="style10">Name</div></th>
        <th scope="col"><div align="left" class="style10">
            <input name="name" type="text" id="name" />
        </div></th>
        <th width="299" rowspan="11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th  scope="col"><div align="left" class="style10">Email</div></th>
        <th  scope="col"><div align="left" class="style10">
            <input name="email" type="text" id="email" />
        </div></th>
      </tr>
      <tr>
        <th  scope="col"><div align="left">Address</div></th>
        <th  scope="col"><div align="left" class="style10">
            <input name="address" type="text" id="address" />
        </div></th>
      </tr>
      <tr>
        <th width="168"  scope="col"><div align="left" class="style10">State</div></th>
        <th width="200"  scope="col"><div align="left" class="style10">
            <input name="state" type="text" id="state" />
        </div></th>
      </tr>
      <tr>
        <th  scope="row"><div align="left" class="style10">Code</div></th>
        <td ><div align="left" class="style10">
            <input name="code" type="password" id="pincode" />
        </div></td>
      </tr>
    </table></th>
  </tr>
    
  
  <tr>
    <th colspan="2" bgcolor="#FFFFFF" scope="row"><?php
	include("footer.php");
	?></th>
  </tr>
</table>
<?
	$uppercase = preg_match('#[A-Z]#', $password);
	$lowercase = preg_match('#[a-z]#', $password);
	$number    = preg_match('#[0-9]#', $password);
	$special   = preg_match('#[\W]{2,}#', $password); 
	$length    = strlen($password) >= 8;

	if(!$uppercase || !$lowercase || !$number || !$special || !$length) {
	  $errorpw = 'Bad Password';
	……………………..
	function is_password($password) 
	{
		return preg_match("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$", $password);
	}
?>
<?php
function is_password($password){
    if (strlen($password) < 6) {
        // too short
        return false;
    }
    if (strlen($password) > 20) {
        // too long
        return false;
    }
    if (!preg_match("/[A-Z]/", $password) {
        // no upper
        return false;
    }
    if (!preg_match("/[a-z]/", $password) {
        // no lower
        return false;
    }
    if (!preg_match("/[0-9]/", $password) {
        // no digit
        return false;
    }
    return true;
}
?>
<?php
	$name = $_POST['name'];
	$nameregex = '/^[a-zA-Z]+\s?[a-zA-Z]+$/';
	if (!preg_match($nameregex, $name)) {
		echo '<font color=red>Please enter a valid name</font>';
	}
	$email = $_POST['email'];
	$emailregex = '/^[a-zA-Z\_\-\.0-9]+\@[a-zA-Z\_\-\.0-9]+$/';
	if (!preg_match($emailegex, $email)) {
		echo '<font color="red">please Enter a valid email id</font>';
	}
	$address = $_POST['address'];
	$addressregex = '/^[0-9a-zA-Z\,\s]+$/';
	if (!preg_match($$addressregex, $address)) {
		echo '<font color="red">please Enter a valid Address</font>';
	}
	$state = $_POST['state'];
	$stateregex = '/^[a-zA-Z]+\s?[a-zA-Z]+$/';
	if (!preg_match($stateregex, $state)) {
		echo '<font color="red">please Enter a valid state name</font>';
	}
	$pincode = $_POST['pincode'];
	$pincoderegex = '/^[a-zA-Z]+\s?[a-zA-Z]+$/';
	if (!preg_match($pincoderegex, $pincode)) {
		echo '<font color="red">please Enter a valid pincode</font>';
	}
?>
</body>
</html>