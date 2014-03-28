<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Books by Snail | DBRL</title>
<link href="global.css" rel="stylesheet" type="text/css" />
<link href="snail.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="wrap">
<div id="head">
 <ul>
  <li><a href="http://www.booksbysnail.org/">Home</a></li>
  <li><a href="http://www.dbrl.org/">Daniel Boone Regional Library</a></li>
  <li><a href="http://www.dbrl.org/kids/">DBRL Kids</a></li>
  <li><a href="http://www.dbrl.org/outreach/">Outreach & Bookmobile</a></li>
  <li><a href="http://catalog.dbrl.org/uhtbin/cgisirsi/0/0/0/38/1/X" target="_blank">Catalog</a></li>  
 </ul>
 <div class="clear"></div>
</div>
<div class="clear"></div>

<div id="snail-form">
  <div id="stamp">
    <img src="images/snail-postcard-sm.jpg" alt="Books by Snail"  width="84" height="147" />
  </div>
  
  <p><strong>Tell us what books you&rsquo;d like to start with or check some categories you like and we&rsquo;ll choose some for you. </strong>We&rsquo;ll check out up to 3 books and mail them to you. When you&rsquo;re done reading, you&rsquo;ll send us the 
    books back in our envelope along with your request for more, all for free. We will send books June
    1 through August 9, 2008.</p>
  <p><strong>Fill out the form below to sign up.</strong><br /><em>(The library will not share your personal information.)</em> </p>
  <div class="clear"></div>	
  <form id="snail-form" method="post" action="http://info.dbrl.org/mail/" />
  
  <input type="hidden" name="recipients" value="wd" />
  <input type="hidden" name="good_url" value="http://www.booksbysnail.org/" />
  <input type="hidden" name="subject" id="subject" value="[BBS Request]" />
<!--  <input type="hidden" name="mail_options" value="PlainTemplate=snail-request.txt,TemplateMissing=" />-->
  <input type="hidden" name="env_report" value="REMOTE_ADDR,HTTP_USER_AGENT" />
  <input type="hidden" name="required" value="realname" />
  <input type="hidden" name="detail" value="------" />
  <label for="comments_new" style="display:none"></label><input name="comments_new" type="text" value="" alt="" size="10" style="display:none" />
  
  <fieldset>
  <legend>About Yourself</legend>
  <label for="realname">Name</label>
  <input name="realname" type="text" id="realname" value="" size="50" /><br />
  <label for="address">Street Address</label>
  <input name="address" type="text" value="" size="50" /><br />
  <label for="town">Town</label>
  <input name="town" type="text" value="" size="12"/><br />
  <label for="zip">ZIP Code</label>
  <input name="zip" type="text" value="" maxlength="5"  size="5"/><br />
  <label for="county">County</label>
  <input name="county" type="text" value="" size="10" /><br />
  <label for="phone">Phone</label>
  <input name="phone" type="text" value=""  size="15" /><small> (optional)</small><br />
  <label for="email">E-mail</label>
  <input name="email" type="text" value="" size="30" /><small> (optional)</small><br />
  <label for="card_number">Do you have a library card number? If so, tell us the number on your card:</label>
  <input name="card_number" type="text" value="21269" maxlength="14" /><br />
  <label for="grade">What grade will you be in next year?</label>
  <select name="grade" id="grade" >
    <option value="KINDER" selected="selected">Kindergarten</option>
    <option value="1ST">1st</option>
    <option value="2ND">2nd</option>
    <option value="3RD">3rd</option>
    <option value="4TH">4th</option>
    <option value="5TH">5th</option>
    <option value="6TH">6th</option>
  </select><br />
  </fieldset>

  <fieldset>
  <legend>What You Like to Read</legend>
  <div class="check-group">
	  <input name="FICTION" type="checkbox" value="Yes" /><label for="FICTION">Fiction</label><br />
	  <input name="NONFICTION" type="checkbox" value="Yes" /><label for="NONFICTION">Nonfiction</label><br />
	  <input name="BOOKS-EASY" type="checkbox" value="Yes" /><label for="BOOKS-EASY">Easier books</label><br />
  </div>
  <div class="check-group">  
	  <input name="BOOKS-PICTURES" type="checkbox" value="Yes" /><label for="BOOKS-PICTURES">Books with pictures</label><br />
	  <input name="BOOKS-CHAPTERS" type="checkbox" value="Yes" /><label for="BOOKS-CHAPTERS">Books with chapters</label><br />
	  <input name="BOOKS-ANYLEVEL" type="checkbox" value="Yes" /><label for="BOOKS-ANYLEVEL">Books at any grade level</label><br />
  </div>
  </fieldset>
  
  <fieldset>
  	<legend>I Would Like to Read Books with These Themes or Topics</legend>
	<p><em>Check anything that interests you.</em></p>
	<div class="check-group">
		<input name="Action" type="checkbox" value="Yes" /><label for="Action">Action</label><br />
		<input name="Adventure" type="checkbox" value="Yes" /><label for="Adventure">Adventure</label><br />
		<input name="Animals" type="checkbox" value="Yes" /><label for="Animals">Animals</label><br />
		<input name="Art" type="checkbox" value="Yes" /><label for="Art">Art</label><br />
		<input name="Bedtime & Dreams" type="checkbox" value="Yes" /><label for="Bedtime & Dreams">Bedtime & Dreams</label><br />
		<input name="Biography" type="checkbox" value="Yes" /><label for="Biography">Biography</label><br />
		<input name="Boys’ Interests" type="checkbox" value="Yes" /><label for="Boys’ Interests">Boys’ Interests</label><br />
		<input name="Bugs" type="checkbox" value="Yes" /><label for="Bugs">Bugs</label><br />
		<input name="Cars & Trucks" type="checkbox" value="Yes" /><label for="Cars & Trucks">Cars & Trucks</label><br />
		<input name="Crafts" type="checkbox" value="Yes" /><label for="Crafts">Crafts</label><br />
		<input name="Dinosaurs" type="checkbox" value="Yes" /><label for="Dinosaurs">Dinosaurs</label><br />		
		<input name="Drama" type="checkbox" value="Yes" /><label for="Drama">Drama</label><br />
	</div>
  	<div class="check-group"> 	
		<input name="Fairy & Folk Tales" type="checkbox" value="Yes" /><label for="Fairy & Folk Tales">Fairy & Folk Tales</label><br />
		<input name="Families" type="checkbox" value="Yes" /><label for="Families">Families</label><br />
		<input name="Fantasy" type="checkbox" value="Yes" /><label for="Fantasy">Fantasy</label><br />
		<input name="Funny/Jokes" type="checkbox" value="Yes" /><label for="Funny/Jokes">Funny/Jokes</label><br />
		<input name="Ghost Stories" type="checkbox" value="Yes" /><label for="Ghost Stories">Ghost Stories</label><br />
		<input name="Girls’ Interests" type="checkbox" value="Yes" /><label for="Girls’ Interests">Girls’ Interests</label><br />
		<input name="Health" type="checkbox" value="Yes" /><label for="Health">Health</label><br />
		<input name="History" type="checkbox" value="Yes" /><label for="History">History</label><br />
		<input name="Holidays & Festivals" type="checkbox" value="Yes" /><label for="Holidays & Festivals">Holidays & Festivals</label><br />
		<input name="Legends & Myths" type="checkbox" value="Yes" /><label for="Legends & Myths">Legends & Myths</label><br />
		<input name="Magic" type="checkbox" value="Yes" /><label for="Magic">Magic</label><br />
		<input name="Mysteries/Detective " type="checkbox" value="Yes" /><label for="Mysteries/Detective ">Mysteries/Detective </label><br />
	</div>
  	<div class="check-group"> 
		<input name="Nature" type="checkbox" value="Yes" /><label for="Nature">Nature</label><br />
		<input name="People" type="checkbox" value="Yes" /><label for="People">People</label><br />
		<input name="Poetry" type="checkbox" value="Yes" /><label for="Poetry">Poetry</label><br />
		<input name="Scary Stories" type="checkbox" value="Yes" /><label for="Scary Stories">Scary Stories</label><br />
		<input name="Science" type="checkbox" value="Yes" /><label for="Science">Science</label><br />
		<input name="Sports" type="checkbox" value="Yes" /><label for="Sports">Sports</label><br />
		<input name="Travel" type="checkbox" value="Yes" /><label for="Travel">Travel</label><br />
		<input name="Westerns" type="checkbox" value="Yes" /><label for="Westerns">Westerns</label><br />
		<label for="Other">Other</label><input name="OTHERTHEME" type="text" size="50" /><br />			
	</div>
		
	<div class="clear"></div>
  </fieldset>
  
  <fieldset>
  <legend>I Would Like to Read the Following Books</legend>
  
	<table width="80%" border="0" cellspacing="0" cellpadding="0" id="book-request">
	  <tr>
		<th scope="col">Title</th>
		<th scope="col">Author</th>
	  </tr>
	  <tr>
		<td><input type="text" name="T1" alt="Title1" size="50" /></td>
		<td><input type="text" name="A1" alt="Author1" size="30" /></td>
	  </tr>
	 <tr>
		<td><input type="text" name="T2" alt="Title2" size="50"  /></td>
		<td><input type="text" name="A2" alt="Author2" size="30" /></td>
	  </tr>
	  <tr>
		<td><input type="text" name="T3" alt="Title3" size="50"  /></td>
		<td><input type="text" name="A3" alt="Author3" size="30" /></td>
	  </tr>
	  <tr>
		<td><input type="text" name="T4" alt="Title4" size="50"  /></td>
		<td><input type="text" name="A4" alt="Author4" size="30" /></td>
	  </tr>
	</table>

  </fieldset>
  
 
 
 <input type="submit" value="   Submit   " /> 
 
  </form>
</div>
 <div class="clear"></div>
</div>
<div id="foot">
  <a href="http://www.imls.gov/"><img src="images/IMLS_Logo.gif" width="149" height="55" alt="U.S. Institute of Museum and Library Services" /></a>
  <p>The <strong>Books by Snail</strong> program and school library open hours are made possible by a grant from the <strong>U.S. Institute of Museum and Library Services</strong>. </p>
</div>
  <p id="copy">&copy; 2008 <a href="http://www.dbrl.org/">Daniel Boone Regional Library</a></p>
</body>
</html>