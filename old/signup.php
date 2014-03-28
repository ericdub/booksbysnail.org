<?php 
	// is this a re-order?
	if ( (int)$_GET['reorder'] === 1 ) {
		$subject = '[BBS REORDER]';
	} else {
		$subject = '[BBS SIGNUP]';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Books by Snail | Daniel Boone Regional Library </title>
<link href="global.css" rel="stylesheet" type="text/css" />
<link href="snail.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'/>
<?php include('google-analytics.php')  ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://www.dbrl.org/files/jscript/jquery_example/jquery.example.min.js"></script>

<script type="text/javascript">
$().ready(function() {
	$("#month").example("MM", {className: 'form-example'});
		$("#day").example("DD", {className: 'form-example'});
		$("#year").example("YYYY", {className: 'form-example'});
	$('#LCNc').example('21269012345678', {className: 'form-example'});
	$('#LCNc').blur(function() {				  						 
			$('#LCNc').val( $('#CARDNUM').val().replace(/ /g,"") );			
	});
	$('#LCNp').example('21269012345678', {className: 'form-example'});
	$('#LCNp').blur(function() {				  						 
			$('#LCNp').val( $('#CARDNUM').val().replace(/ /g,"") );			
	});
	
	<?php 
	if ($subject == '[BBS SIGNUP]') {
	echo '$("#form1").submit(function() {
      		if ($("#childname").val().length > 0 &&
				$("#PHONE").val().length > 0 &&
				$("#ZIP").val().length > 0) {        		
        			return true;
      		}
      		alert("Don\'t forget to enter your name, phone number, ZIP code and library card number.");
      		return false;
    	});';
	} else {
		echo '$("#form1").submit(function() {
      		if ($("#childname").val().length > 0 &&
				$("#LCNc").val().length > 0) {        		
        			return true;
      		}
      		alert("Don\'t forget to enter your name, phone number, ZIP code and library card number.");
      		return false;
    	});';
	};
	
		?>			
});
</script>

</head>
<body>

<div id="wrap">
<div id="head">
 <ul>
  <li><a href="http://www.booksbysnail.org/" style="margin-left:10px; border-left: solid 1px #FFF">Home</a></li>
  <li><a href="http://www.dbrl.org">DBRL Home</a></li>
  <li><a href="http://kids.dbrl.org">DBRL Kids</a></li>
  <li><a href="http://teens.dbrl.org">DBRL Teen</a></li>
  <li><a href="http://www.dbrl.org/outreach">Outreach &amp; Bookmobile</a></li>
  <li><a href="http://catalog.dbrl.org/" target="_blank">Catalog</a></li>  
 </ul>
 <div class="clear"></div>
</div>
<div class="clear"></div>

<div id="snail-form">

    <img src="images/snail-postcard-sm.jpg" alt="Books by Snail"  width="84" height="147"  class="stamp"/>
 
  
  <p><strong>Tell us what books you&rsquo;d like to start with or check some categories you like and we&rsquo;ll choose some for you.</strong> We&rsquo;ll check out up to 3 books and mail them to you. When you&rsquo;re done reading, you&rsquo;ll send us the books back in our mailbag along with your request for more, all for free. <strong>We will send books May 29 through July 25, 2014.</strong> We&rsquo;ll also send you all the materials and rewards you get when you sign up for Summer Reading.</p>
  <p>Books by Snail is for all students in kindergarten through twelfth grade at the following Missouri schools: Auxvasse, Callaway Hills, Hallsville, Harrisburg, Hatton-McCredie, Kingdom City, Mokane, New Bloomfield, North Elementary, Sturgeon, and Williamsburg. For more information, call 1-800-324-4806 or <a href="http://www.dbrl.org/contact?c=bbs">e-mail us</a>.</p>
  <p><strong>Fill out the form below to sign up or request more books.</strong> <em>(The library will <strong>not</strong> share your personal information.)</em> </p>
  <div class="clear"></div>	
  <form action="http://www.dbrl.org/mail/" method="post" id="form1">
 
  <input type="hidden" name="recipients" value="bbs" />
  <input type="hidden" name="good_url" id="good_url" value="http://www.booksbysnail.org/confirm.php" />
  <input type="hidden" name="subject" id="subject" value="<?=$subject?>" />
<!--  <input type="hidden" name="mail_options" id="mail_options" value="PlainTemplate=snail-request.txt,TemplateMissing=" />-->
  <input type="hidden" name="env_report" id="env_report" value="REMOTE_ADDR,HTTP_USER_AGENT" />
  <?php if ($subject == '[BBS SIGNUP]') {
  echo '<input type="hidden" name="required" id="required" value="realname,PHONE" />';
  
   } 


   ?>

   
  <fieldset id="about-block">
  <legend>About Yourself</legend>
  <?php 
  if ($subject == '[BBS SIGNUP]') {
  echo'<label for="realname">Parent\'s Name *</label>
   <input name="realname" id="realname" type="text" value="" size="30" /><br />';
  }
  ?>
 
  <label for="childname">Child's Name *</label>
  <input name="childname" id="childname" type="text" value="" size="30" /><br />
  
   <?php 
  if ($subject == '[BBS SIGNUP]') {
  echo '
  <label for="GENDER">Gender</label>
  <select name="GENDER" id="GENDER">
    <option selected="selected">Choose one</option>
    <option value="Girl">Girl</option>
    <option value="Boy">Boy</option>
  </select><br />
  <label for="month">Date of Birth</label>
        <input name="month" type="text" id="month" size="2" maxlength="2" />
        /
        <input name="day" type="text" id="day" size="2" maxlength="2" />
        /
        <input name="year" type="text" id="year" size="4" maxlength="4" /><br />
  <label for="ADDRESS">Street Address</label>
  <input name="ADDRESS" id="ADDRESS" type="text" value="" size="50" /><br />
  <label for="TOWN">Town</label>
  <input name="TOWN" id="TOWN" type="text" value="" size="12"/><br />
  <label for="ZIP">ZIP Code *</label>
  <input name="ZIP" id="ZIP" type="text" value="" maxlength="5"  size="5"/><br />
  <label for="COUNTY">County</label>
  <select name="COUNTY" id="COUNTY">
    <option value="Boone">Boone</option>
    <option value="Callaway">Callaway</option>
    <option value="OtherCounty">Other</option>
  </select><br />
  <label for="PHONE">Phone *</label>
  <input name="PHONE" id="PHONE" type="text" value=""  size="15" />
  <br />
  <label for="email">E-mail</label>
  <input name="email" id="email" type="text" value="" size="30" /><small> (optional)</small><br />
  <label for="GRADE">What grade will you be in next year?</label>
  <select name="GRADE" id="GRADE">
    <option value="KINDER" selected="selected">Kindergarten</option>
    <option value="1ST">1st</option>
    <option value="2ND">2nd</option>
    <option value="3RD">3rd</option>
    <option value="4TH">4th</option>
    <option value="5TH">5th</option>
    <option value="6TH">6th</option>
    <option value="7TH">7th</option>
    <option value="8TH">8th</option>
    <option value="9TH">9th</option>
    <option value="10TH">10th</option>
    <option value="11TH">11th</option>
    <option value="12TH">12th</option>
  </select><br />
 <label for="SCHOOL">Which school do you go to?</label>
  <select name="SCHOOL" id="SCHOOL">
    <option selected="selected">Choose one</option>
    <option value="AUX">Auxvasse Elementary</option>
    <option value="HILLS">Callaway Hills, Holts Summit</option>
    <option value="HALL">Hallsville</option>
    <option value="HARRIS">Harrisburg</option>
    <option value="HATTON">Hatton-McCredie Elementary</option>
    
    <option value="NEWBLOOM">New Bloomfield</option>
     <option value="NORTHCALHS">North Callaway High School</option>  
     <option value="NORTH">North Elementary, Holts Summit</option>  
     <option value="MOKANE">South Callaway, Mokane</option>
   <option value="STURG">Sturgeon</option>
    <option value="WILL">Williamsburg Elementary</option>
    
   </select><br /> 
  <p>Do you have a library card? If so, what is your card number?</p>';
  
  }
  ?>
  <label for="LCNc">Child's library card number<br />
 </label>
  <input name="LCNc" id="LCNc" type="text" value="" size="18" maxlength="14" />
 <?php 
  if ($subject == '[BBS SIGNUP]') {
  echo '
  <br />
  
  <label for="LCNp">Parent\'s library card number</label>
  <input name="LCNp" id="LCNp" type="text" value="" size="18" maxlength="14" /><br />
    <p style="font-size:0.8em;"><em>By registering for this program, I understand that my child&rsquo;s check-outs will be recorded for the duration of the summer in order to improve our book recommendations for your child.</em></p> ';
  }
	?>
  </fieldset>

  <fieldset id="what-read">
  <legend>What You Like to Read</legend>
  
  <p><em>Check anything that interests you.</em></p>
  
  <div class="check-group">
	  <input name="FICTION" id="FICTION" type="checkbox" value="Fiction" /><label for="FICTION">Fiction</label><br />
	  <input name="NONFICTION" id="NONFICTION" type="checkbox" value="Nonfiction" /><label for="NONFICTION">Nonfiction</label>
  </div>
  <div class="check-group-long"> 
      <input name="PICTURE_READTO" id="PICTURE_READTO" type="checkbox" value="Yes" /><label for="PICTURE-READTO">Picture books that someone will read to me.</label><br /> 
	  <input name="PICTURE_TOREAD" id="PICTURE_TOREAD" type="checkbox" value="Yes" /><label for="PICTURE_TOREAD">Picture books that I can try reading by myself or with some help.</label><br />
	  <input name="CHAPTER_PICTURES" id="CHAPTER_PICTURES" type="checkbox" value="Yes" /><label for="CHAPTER-PICTURES">Chapter books with pictures.</label><br />
	  <input name="CHAPTER_NOPICTURES" id="CHAPTER_NOPICTURES" type="checkbox" value="Yes" /><label for="CHAPTER-NOPICTURES">Chapter books with few or no pictures.</label><br />
  </div>
  
  <div class="clear"></div>
  
  	<p>&nbsp;</p>
  	<p><strong>I would like to read books with these themes or topics: <br />
  	  (Check up to 5.)</strong></p>
	
	<div class="check-group">
		<input name="Adventure" id="Adventure" type="checkbox" value="Yes" /><label for="Adventure">Adventure</label><br />
		<input name="Animals" id="Animals" type="checkbox" value="Yes" /><label for="Animals">Animals</label><br />
        <input name="Award" id="Award" type="checkbox" value="Yes" /><label for="Award">Award Winners</label><br />
		<input name="Crafts_Hobbies" id="Crafts_Hobbies" type="checkbox" value="Yes" /><label for="Crafts_Hobbies">Crafts &amp; Hobbies</label><br />		
        <input name="Fairy_Folktales" id="Fairy_Folktales" type="checkbox" value="Yes" /><label for="Fairy_Folktales">Fairytales &amp; Folk tales</label><br />
	</div>
  	<div class="check-group">
    	<input name="Fantasy" id="Fantasy" type="checkbox" value="Yes" /><label for="Fantasy">Fantasy</label><br /> 	
		<input name="Funny_Stories" id="Funny_Stories" type="checkbox" value="Yes" /><label for="Funny_Stories">Funny Stories</label><br />
		<input name="Graphic_Novels" id="Graphic_Novels" type="checkbox" value="Yes" /><label for="Graphic_Novels">Graphic Novels</label><br />
        <input name="Historical_Fiction" id="Historical_Fiction" type="checkbox" value="Yes" /><label for="Historical Fiction">Historical Fiction</label><br />
        <input name="Love" id="Love" type="checkbox" value="Yes" /><label for="Love">Love Stories</label><br />
	</div>
  	<div class="check-group"> 
    	<input name="Mysteries" id="Mysteries" type="checkbox" value="Yes" /><label for="Mysteries">Mysteries</label><br />
		<input name="Scary_Stories" id="Scary_Stories" type="checkbox" value="Yes" /><label for="Scary_Stories">Scary Stories</label><br />
		<input name="Science_Fiction" id="Science_Fiction" type="checkbox" value="Yes" /><label for="Science_Fiction">Science Fiction</label><br />
		<input name="Science_Nature" id="Science_Nature" type="checkbox" value="Yes" /><label for="Science_Nature">Science &amp; Nature</label><br />
        <input name="Sports" id="Sports" type="checkbox" value="Yes" /><label for="Sports">Sports</label><br />			
	</div>
		
	<div class="clear"></div>


    <p>&nbsp;<br /><br /></p>
    <div id="book-list">
    <p><strong>I would like to read the following books:</strong></p>
  
	<table width="70%" border="0" cellspacing="0" cellpadding="0" id="book-request">
	  <tr>
		<th scope="col">Title</th>
		<th scope="col">Author</th>
	  </tr>
	  <tr>
		<td><input type="text" name="T1" alt="Title1" size="35" /></td>
		<td><input type="text" name="A1" alt="Author1" size="25" /></td>
	  </tr>
	 <tr>
		<td><input type="text" name="T2" alt="Title2" size="35" /></td>
		<td><input type="text" name="A2" alt="Author2" size="25" /></td>
	  </tr>
	  <tr>
		<td><input type="text" name="T3" alt="Title3" size="35" /></td>
		<td><input type="text" name="A3" alt="Author3" size="25" /></td>
	  </tr>
	  <tr>
		<td><input type="text" name="T4" alt="Title4" size="35" /></td>
		<td><input type="text" name="A4" alt="Author4" size="25" /></td>
	  </tr>
	</table>
    </div>
  
  <div class="clear"></div>

  </fieldset>
  
 
 
 <input class="sign-up" type="submit" value="   Submit   " /> 
 
  </form>
</div>
 <div class="clear"></div>
</div>

  <?php include ('footer.php')?>
</body>
</html>
