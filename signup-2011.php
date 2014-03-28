<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Books by Snail | DBRL</title>
<link href="global.css" rel="stylesheet" type="text/css" />
<link href="snail.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://www.dbrl.org/files/jscript/jquery_example/jquery.example.min.js"></script>

<script type="text/javascript">
$().ready(function() {
	$('#LCN').example('21269012345678', {className: 'form-example'});
	$('#LCN').blur(function() {				  						 
			$('#LCN').val( $('#CARDNUM').val().replace(/ /g,"") );			
	});
	
	$("#form1").submit(function() {
      		if ($("#realname").val().length > 0 &&
				$("#PHONE").val().length > 0 &&
				$("#LCN").val().length > 0) {        		
        			return true;
      		}
      		alert("Don't forget to enter your name, phone number and library card number.");
      		return false;
    	});
	
					
});
</script>

</head>
<body>

<div id="wrap">
<div id="head">
 <ul>
  <li><a href="http://www.booksbysnail.org/" style="margin-left:10px; border-left: solid 1px #FFF">Home</a></li>
  <li><a href="http://www.dbrl.org/">DBRL Home</a></li>
  <li><a href="http://www.dbrl.org/kids">DBRL Kids</a></li>
  <li><a href="http://teens.dbrl.org">DBRL Teen</a></li>
  <li><a href="http://www.dbrl.org/outreach">Outreach &amp; Bookmobile</a></li>
  <li><a href="http://catalog.dbrl.org/" target="_blank">Catalog</a></li>  
 </ul>
 <div class="clear"></div>
</div>
<div class="clear"></div>

<div id="snail-form">

    <img src="images/snail-postcard-sm.jpg" alt="Books by Snail"  width="84" height="147"  class="stamp"/>
 
  
  <p><strong>Tell us what books you&rsquo;d like to start with or check some categories you like and we&rsquo;ll choose some for you. </strong>We&rsquo;ll check out up to three books and mail them to you. When you&rsquo;re done reading, you&rsquo;ll send us the books back in our envelope along with your request for more, all for free. We will send books June 1 through August 5, 2011.</p>
  <p>Books by Snail is for all students in kindergarten through eighth grade at the following Missouri schools: Auxvasse, Callaway Hills, Hallsville, Harrisburg, Hatton-McCredie, Mokane, New Bloomfield, North Elementary, Sturgeon, and Williamsburg. For more information, call 1-800-324-4806 or <a href="http://www.dbrl.org/contact?c=bbs">e-mail us</a>.</p>
  <p><strong>Fill out the form below to sign up or request more books.</strong> <em>(The library will <strong>not</strong> share your personal information.)</em> </p>
  <div class="clear"></div>	
  <form action="http://www.dbrl.org/mail/" method="post" id="form1">
 
  <input type="hidden" name="recipients" value="bbs" />
  <input type="hidden" name="good_url" id="good_url" value="http://www.booksbysnail.org/confirm.php" />
  <input type="hidden" name="subject" id="subject" value="[Books by Snail Request]" />
<!--  <input type="hidden" name="mail_options" id="mail_options" value="PlainTemplate=snail-request.txt,TemplateMissing=" />-->
  <input type="hidden" name="env_report" id="env_report" value="REMOTE_ADDR,HTTP_USER_AGENT" />
  <input type="hidden" name="required" id="required" value="realname,PHONE" />
  <input type="hidden" name="mail_options" value="PlainTemplate=booksbysnail.txt,TemplateMissing=" />
   
  <fieldset id="about-block">
  <legend>About Yourself</legend>
  <label for="realname">Name</label>
  <input name="realname" id="realname" type="text" value="" size="30" /><br />
  <label for="gender">Gender</label>
  <select name="GENDER" id="GENDER">
    <option value="Girl">Girl</option>
    <option value="Boy">Boy</option>
  </select><br />
  <label for="ADDRESS">Street Address</label>
  <input name="ADDRESS" id="ADDRESS" type="text" value="" size="50" /><br />
  <label for="TOWN">Town</label>
  <input name="TOWN" id="TOWN" type="text" value="" size="12"/><br />
  <label for="ZIP">ZIP Code</label>
  <input name="ZIP" id="ZIP" type="text" value="" maxlength="5"  size="5"/><br />
  <label for="COUNTY">County</label>
  <input name="COUNTY" id="COUNTY" type="text" value="" size="10" /><br />
  <label for="PHONE">Phone</label>
  <input name="PHONE" id="PHONE" type="text" value=""  size="15" />
  <br />
  <label for="email">E-mail</label>
  <input name="email" id="email" type="text" value="" size="30" /><small> (optional)</small><br />
  <label for="LCN">What is your  library card number?<br />
  <span class="note">(<a href="http://www.dbrl.org/services/library-card" target="_blank">Don't have a library card?</a>)</span></label>
  <input name="LCN" id="LCN" type="text" value="" size="16" maxlength="14" /><br />
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
  </select><br />
 <label for="SCHOOL">Which school do you go to?</label>
  <select name="SCHOOL" id="SCHOOL">
    <option value="AUX" selected="selected">Auxvasse</option>
    <option value="HILLS">Callaway Hills</option>
    <option value="HALL">Hallsville</option>
    <option value="HARRIS">Harrisburg</option>
    <option value="HATTON">Hatton-McCredie</option>
    <option value="MOKANE">Mokane</option>
    <option value="NEWBLOOM">New Bloomfield</option>
    <option value="NORTH">North Elementary</option>    
    <option value="STURG">Sturgeon</option>
    <option value="WILL">Williamsburg</option>
  </select><br />  
  </fieldset>

  <fieldset id="what-read">
  <legend>What You Like to Read</legend>
  
  <p><em>Check anything that interests you.</em></p>
  
  <div class="check-group">
	  <input name="FICTION" id="FICTION" type="checkbox" value="Fiction" /><label for="FICTION">Fiction</label><br />
	  <input name="NONFICTION" id="NONFICTION" type="checkbox" value="Nonfiction" /><label for="NONFICTION">Nonfiction</label><br />
      <input name="BOTH" id="BOTH" type="checkbox" value="Both" /><label for="BOTH">A mix of both</label>
  </div>
  <div class="check-group-long"> 
      <input name="PICTURE_READTO" id="PICTURE_READTO" type="checkbox" value="Yes" /><label for="PICTURE-READTO">Picture books that someone will read to me.</label><br /> 
	  <input name="PICTURE_TOREAD" id="PICTURE_TOREAD" type="checkbox" value="Yes" /><label for="BOOKS-PICTURES">Picture books that I can try reading by myself or with some help.</label><br />
	  <input name="CHAPTER_PICTURES" id="CHAPTER_PICTURES" type="checkbox" value="Yes" /><label for="CHAPTER-PICTURES">Chapter books with pictures.</label><br />
	  <input name="CHAPTER_NOPICTURES" id="CHAPTER_NOPICTURES" type="checkbox" value="Yes" /><label for="CHAPTER-NOPICTURES">Chapter books with few or no pictures.</label><br />
  </div>
  
  <div class="clear"></div>
  
  	<p>&nbsp;</p>
  	<p><strong>I would like to read books with these themes or topics: <br />
  	  (Check five or less.)</strong></p>
	
	<div class="check-group">
		<input name="Adventure" id="Adventure" type="checkbox" value="Yes" /><label for="Adventure">Adventure</label><br />
		<input name="Animals" id="Animals" type="checkbox" value="Yes" /><label for="Animals">Animals</label><br />
		<input name="Bedtime_Stories" id="Bedtime_Stories" type="checkbox" value="Yes" /><label for="Bedtime_Stories">Bedtime stories</label><br />
		<input name="Biography" id="Biography" type="checkbox" value="Yes" /><label for="Biography">Biography</label><br />
		<input name="Cars_Trucks" id="Cars_Trucks" type="checkbox" value="Yes" /><label for="Cars_Trucks">Cars &amp; Trucks</label><br />
		<input name="Crafts_Hobbies" id="Crafts_Hobbies" type="checkbox" value="Yes" /><label for="Crafts_Hobbies">Crafts &amp; Hobbies</label><br />
		<input name="Dinosaurs" id="Dinosaurs" type="checkbox" value="Yes" /><label for="Dinosaurs">Dinosaurs</label><br />		
		<input name="Drawing_Books" id="Drawing_Books" type="checkbox" value="Yes" /><label for="Drawing_Books">Drawing Books</label><br />
        <input name="Fairy_Folktales" id="Fairy_Folktales" type="checkbox" value="Yes" /><label for="Fairy_Folktales">Fairy &amp; Folktales</label><br />
	</div>
  	<div class="check-group"> 	
		<input name="Fantasy" id="Fantasy" type="checkbox" value="Yes" /><label for="Fantasy">Fantasy</label><br />
		<input name="Food_Cookbooks" id="Food_Cookbooks" type="checkbox" value="Yes" /><label for="Food_Cookbooks">Food &amp; Cookbooks</label><br />
		<input name="Graphic_Novels" id="Graphic_Novels" type="checkbox" value="Yes" /><label for="Graphic_Novels">Graphic Novels</label><br />
		<input name="Historical_Fiction" id="Historical_Fiction" type="checkbox" value="Yes" /><label for="Historical Fiction">Historical Fiction</label><br />
		<input name="Humor" id="Humor" type="checkbox" value="Yes" /><label for="Humor">Humor</label><br />
		<input name="Joke_Books" id="Joke_Books" type="checkbox" value="Yes" /><label for="Joke_Books">Joke Books</label><br />
        <input name="Love" id="Love" type="checkbox" value="Yes" /><label for="Love">Love Stories</label><br />
		<input name="Mysteries" id="Mysteries" type="checkbox" value="Yes" /><label for="Mysteries">Mysteries</label><br />
		<input name="Poetry" id="Poetry" type="checkbox" value="Yes" /><label for="Poetry">Poetry</label><br />
	</div>
  	<div class="check-group"> 
		<input name="Scary_Stories" id="Scary_Stories" type="checkbox" value="Yes" /><label for="Scary_Stories">Scary Stories</label><br />
		<input name="Science_Fiction" id="Science_Fiction" type="checkbox" value="Yes" /><label for="Science_Fiction">Science Fiction</label><br />
		<input name="Science_Nature" id="Science_Nature" type="checkbox" value="Yes" /><label for="Science_Nature">Science &amp; Nature</label><br />
        <input name="Seasons_Weather" id="Seasons_Weather" type="checkbox" value="Yes" /><label for="Seasons_Weather">Seasons &amp; Weather</label><br />
        <input name="Sports" id="Sports" type="checkbox" value="Yes" /><label for="Sports">Sports</label><br />
		<label for="OTHERTHEME">Other</label><input name="OTHERTHEME" id="OTHERTHEME" type="text" size="35" /><br />			
	</div>
		
	<div class="clear"></div>


    <p>&nbsp;<br /><br /></p>
    <div id="book-list">
    <p><strong>I know I would like to read the following books:</strong></p>
  
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
  
 
 
 <input type="submit" value="   Submit   " /> 
 
  </form>
</div>
 <div class="clear"></div>
</div>
<div id="foot">
  <a href="http://www.imls.gov/"><img src="images/IMLS_Logo.png" width="150" alt="U.S. Institute of Museum and Library Services" /></a>
  <p>The <strong><a href="http://www.booksbysnail.org/">Books by Snail</a></strong> program and school library open hours at Hallsville, Sturgeon and Blue Ridge Schools are supported by the <strong><a href="http://www.imls.gov/">U.S. Institute of Museum and Library Services</a></strong> under the provisions of the Library Services and Technology Act as administered by the <a href="http://www.sos.mo.gov/library/">Missouri State Library</a>, a division of the <a href="http://www.sos.mo.gov/">Office of the Secretary of State</a>.</p>
</div>
  <p id="copy">&copy; <?=date('Y'); ?> <a href="http://www.dbrl.org/">Daniel Boone Regional Library</a></p>
</body>
</html>