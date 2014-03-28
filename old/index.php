<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Books by Snail | Daniel Boone Regional Library </title>
<link href="global.css" rel="stylesheet" type="text/css" />
<link href="snail.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css' />

<?php include('google-analytics.php')  ?> 

</head>
<body>
<div id="wrap">
  <div id="head">
 <?php include ('menu.php');?>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <h1><img src="images/snail-postcard-tbubble.png" alt="Books by Snail"  width="198" height="253"  class="stamp" style="margin-bottom:100px; margin-top:50px;"/> Books by Snail </h1>
  <h2>This summer, let the library come to you!</h2>
 

  
  



 
<?php 



if (time() >= mktime(0,0,0,3,24,2014)) {
	echo '<p>Check out library books and participate in Summer Reading through the mail, all for <strong>free</strong>.</p>
    <p>Books by Snail is for all students in kindergarten through twelfth grade at the following schools: <strong>Auxvasse, Callaway Hills, Hallsville, Harrisburg, Hatton-McCredie, Kingdom City, Mokane, New Bloomfield, North Elementary, Sturgeon and Williamsburg</strong>. We will send books May 29 through July 25, 2014.</p>
  <p>To find out more, call the library at 1-800-324-4806  or (573) 443-3161 or <a href="mailto:booksbysnail@dbrl.org">email the Outreach Department</a>. </p>
  <p><a href="signup.php" class="sign-up">Sign me up today!</a>&nbsp;&nbsp;&nbsp;</p></div>
  <div class="clear">';
} else {
	echo '<h4>Sign-up for 2014 will begin on Monday, April 24!<br /></h4>';
	
}

?>



<div class="clear"></div>
</div>

<?php include ('footer.php')?>
</body>
</html>
