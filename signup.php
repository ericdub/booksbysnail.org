<?php 
  // is this a re-order?
  if ( (int)$_GET['reorder'] === 1 ) {
    $subject = '[BBS REORDER]';
  } else {
    $subject = '[BBS SIGNUP]';
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>Books by Snail Sign-Up | Daniel Boone Regional Library</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dbrl.css">
    
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css' />
    <?php include('google-analytics.php')  ?>
      

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <script type="text/javascript">
$().ready(function() {
  
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

    <?php include('navigation.php');?>

    <div class="container">

      <div class="starter-template">
        
         <div>
         <div class="pull-left"><img src="/images/snail-postcard-350.jpg" class="image-responsive img-rounded"></div>

          <?php 
          if ($subject == '[BBS REORDER]') {
          echo'
          <h1>Reorder today!</h1>
        <p class="lead">
          Don’t stop reading now! The summer is still in full swing and we are happy to send you more Books by Snail! 
        </p>
        <p class="lead">It is important to know that new books are <strong>not</strong> automatically sent upon the return of your mailbag. In order 
        to receive more Books by Snail, you must submit the re-order form below.</p>
        ';
          } else {

             echo '<h1>Sign up today!</h1>
        <p class="lead">Through this program, kids in rural areas can check out books and participate in Summer Reading through the mail.  Any child or teen who attends school in
        Auxvasse, Hallsville, Harrisburg, Hatton, Holts Summit, Kingdom City, Mokane, New Bloomfield, Sturgeon or Williamsburg is eligible.</p>
        <p class="lead"> Tell us what books you&rsquo;d like to start with or we&rsquo;ll choose some for you. You can borrow up to three books and we\'ll mail them to you. 
        When you&rsquo;re done reading, you&rsquo;ll send us the books back along with your request for more, all for free. We\'ll be mailing books May 29 through 
        July 25, 2014.</p>
        <p class="lead">For more information, call 1-800-324-4806 or <a href="http://www.dbrl.org/contact?c=bbs">e-mail us</a>.</p>

        ';

        
          }
          ?>

        


        
  
        </div>

      </div>

   <div class="clearfix"></div>
  <form class="form-horizontal" role="form" action="http://www.dbrl.org/mail/" method="post" id="form1">
 
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
  echo'
<div class="form-group">
  <label for="realname" class="col-sm-2 control-label">Parent\'s Name *</label>
   <div class="col-sm-7"><input name="realname" id="realname" type="text" value=""  class="form-control" /></div>
</div>';
  }
  ?>
 <div class="form-group">
  <label for="childname" class="col-sm-2 control-label">Child's Name *</label>
  <div class="col-sm-7"><input name="childname" id="childname" type="text" value="" class="form-control"/></div>
</div>
  
   <?php 
  if ($subject == '[BBS SIGNUP]') {
  echo '
  <div class="form-group">
  <label for="GENDER" class="col-sm-2 control-label">Gender</label>
  <div class="col-sm-7">
  <select name="GENDER" id="GENDER" class="form-control">
    <option selected="selected">Choose one</option>
    <option value="Female">Female</option>
    <option value="Male">Male</option>
  </select>
  </div>
  </div>
  <div class="form-group" >
   
    <label for="month" class="col-sm-2 control-label">Date of Birth</label>
        <div class="col-sm-7 form-inline">
        <input name="month" type="text" id="month"  maxlength="2" class="form-control" placeholder="MM"  />
        /
        <input name="day" type="text" id="day"  maxlength="2" class="form-control" placeholder="DD" />
        /
        <input name="year" type="text" id="year"  maxlength="4" class="form-control" placeholder="YYYY" />
        </div>
  </div>
       
    

    <div class="form-group" >    
  <label class="col-sm-2 control-label" for="ADDRESS">Street Address</label>
  <div class="col-sm-7"><input name="ADDRESS" id="ADDRESS" type="text" value="" class="form-control"/></div>
  </div>

  <div class="form-group">
  <label for="TOWN" class="col-sm-2 control-label">Town</label>
   <div class="col-sm-7"><input name="TOWN" id="TOWN" type="text" value="" size="12"/ class="form-control"> </div>

  </div>
  
  <div class="form-group" >
  <label for="ZIP" class="col-sm-2 control-label">ZIP Code *</label>
  <div class="col-sm-3"><input name="ZIP" id="ZIP" type="text" value="" maxlength="5"  size="5" class="form-control"/></div>

  </div>
 <div class="form-group" >
   <label for="COUNTY" class="col-sm-2 control-label">County</label>
    <div class="col-sm-3">
    <select name="COUNTY" id="COUNTY" class="form-control">
      <option value="Boone">Boone</option>
      <option value="Callaway">Callaway</option>
      
    </select>
    </div>
  </div>

  <div class="form-group">
  <label for="PHONE" class="col-sm-2 control-label">Phone *</label>
  <div class="col-sm-3"><input name="PHONE" id="PHONE" type="text" value=""  size="15" class="form-control" /></div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-3"><input name="email" id="email" type="text" value="" class="form-control"/><small> (optional)</small></div>
  </div>
  
  <div class="form-group">
  <label for="GRADE" class="col-sm-2 control-label">What grade will you be in next year?</label>
    <div class="col-sm-3">
    <select name="GRADE" id="GRADE" class="form-control">
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
    </select>
    </div>
  </div>


<div class="form-group">
 <label for="SCHOOL" class="col-sm-2 control-label">Which school do you go to?</label>
  <div class="col-sm-3">
  <select name="SCHOOL" id="SCHOOL" class="form-control">
    <option selected="selected">Choose one</option>
    <option value="AUX">Auxvasse Elementary</option>
    <option value="HILLS">Callaway Hills, Holts Summit</option>
    <option value="HALL">Hallsville</option>
    <option value="HARRIS">Harrisburg</option>
    <option value="HATTON">Hatton-McCredie Elementary</option>
    <option value="MOKANE">Mokane</option>
    <option value="NEWBLOOM">New Bloomfield</option>
     <option value="NORTHCALHS">North Callaway High School</option>  
     <option value="NORTH">North Elementary, Holts Summit</option>  
     
   <option value="STURG">Sturgeon</option>
    <option value="WILL">Williamsburg Elementary</option>
    
   </select>
   </div>
</div>   
  <p>Do you have a library card? If so, what is your card number?</p>';
  
  }
  ?>
  <div class="form-group">
  <label for="LCNc" class="col-sm-2 control-label">Child's library card number
 </label>
 <div class="col-sm-5"><input name="LCNc" id="LCNc" type="text" value="" size="18" maxlength="14" class="form-control" placeholder="21269012345678" /></div>
  

  </div>
 <?php 
  if ($subject == '[BBS SIGNUP]') {
  echo '
  
  <div class="form-group">
    <label for="LCNp" class="col-sm-2 control-label">Parent\'s library card number</label>
    <div class="col-sm-5"><input name="LCNp" id="LCNp" type="text" value="" size="18" maxlength="14" class="form-control" placeholder="21269012345678" /></div>
  </div>
    <p style="font-size:0.8em;"><em>By registering for this program, I understand that my child&rsquo;s check-outs will be recorded for the duration of the summer in order to improve our book recommendations for your child.</em></p> ';
  }
  ?>
  </fieldset>

  <fieldset id="what-read">
  <legend>What Would You Like to Read?</legend>
  
  <p><em>Check anything that interests you.</em></p>
  
  <div class="check-group checkbox">
    <input name="FICTION" id="FICTION" type="checkbox" value="Fiction" /><label for="FICTION">Fiction</label><br />
    <input name="NONFICTION" id="NONFICTION" type="checkbox" value="Nonfiction" /><label for="NONFICTION">Nonfiction</label>
  </div>
  <hr />
  <div class="check-group-long checkbox"> 
      <input name="PICTURE_READTO" id="PICTURE_READTO" type="checkbox" value="Yes" /><label for="PICTURE-READTO">Picture books that someone will read to me.</label><br /> 
    <input name="PICTURE_TOREAD" id="PICTURE_TOREAD" type="checkbox" value="Yes" /><label for="PICTURE_TOREAD">Picture books that I can try reading by myself or with some help.</label><br />
    <input name="CHAPTER_PICTURES" id="CHAPTER_PICTURES" type="checkbox" value="Yes" /><label for="CHAPTER-PICTURES">Chapter books with pictures.</label><br />
    <input name="CHAPTER_NOPICTURES" id="CHAPTER_NOPICTURES" type="checkbox" value="Yes" /><label for="CHAPTER-NOPICTURES">Chapter books with few or no pictures.</label><br />
  </div>
  
  <hr />
  <div class="clear"></div>
  
    
    <p><strong>I would like to read books with these themes or topics: <br />
      (Check up to 5.)</strong></p>
  
  <div class="check-group checkbox">
    <input name="Adventure" id="Adventure" type="checkbox" value="Yes" /><label for="Adventure">Adventure</label><br />
    <input name="Animals" id="Animals" type="checkbox" value="Yes" /><label for="Animals">Animals</label><br />
        <input name="Award" id="Award" type="checkbox" value="Yes" /><label for="Award">Award Winners</label><br />
    <input name="Crafts_Hobbies" id="Crafts_Hobbies" type="checkbox" value="Yes" /><label for="Crafts_Hobbies">Crafts &amp; Hobbies</label><br />   
        <input name="Fairy_Folktales" id="Fairy_Folktales" type="checkbox" value="Yes" /><label for="Fairy_Folktales">Fairytales &amp; Folk tales</label><br />
  </div>
    <div class="check-group checkbox">
      <input name="Fantasy" id="Fantasy" type="checkbox" value="Yes" /><label for="Fantasy">Fantasy</label><br />   
    <input name="Funny_Stories" id="Funny_Stories" type="checkbox" value="Yes" /><label for="Funny_Stories">Funny Stories</label><br />
    <input name="Graphic_Novels" id="Graphic_Novels" type="checkbox" value="Yes" /><label for="Graphic_Novels">Graphic Novels</label><br />
        <input name="Historical_Fiction" id="Historical_Fiction" type="checkbox" value="Yes" /><label for="Historical Fiction">Historical Fiction</label><br />
        <input name="Love" id="Love" type="checkbox" value="Yes" /><label for="Love">Love Stories</label><br />
  </div>
    <div class="check-group checkbox"> 
      <input name="Mysteries" id="Mysteries" type="checkbox" value="Yes" /><label for="Mysteries">Mysteries</label><br />
    <input name="Scary_Stories" id="Scary_Stories" type="checkbox" value="Yes" /><label for="Scary_Stories">Scary Stories</label><br />
    <input name="Science_Fiction" id="Science_Fiction" type="checkbox" value="Yes" /><label for="Science_Fiction">Science Fiction</label><br />
    <input name="Science_Nature" id="Science_Nature" type="checkbox" value="Yes" /><label for="Science_Nature">Science &amp; Nature</label><br />
        <input name="Sports" id="Sports" type="checkbox" value="Yes" /><label for="Sports">Sports</label><br />     
  </div>
   <hr /> 
  <div class="clear"></div>


    
    <div id="book-list">
    <p><strong>I would like to read the following books:</strong></p>
  
  <table width="70%" border="0" cellspacing="0" cellpadding="0" id="book-request">
    <tr>
    <th scope="col">Title</th>
    <th scope="col">Author</th>
    </tr>
    <tr>
    <td><input type="text" name="T1" alt="Title1" size="35" class="form-control"/></td>
    <td><input type="text" name="A1" alt="Author1" size="25" class="form-control" /></td>
    </tr>
   <tr>
    <td><input type="text" name="T2" alt="Title2" size="35" class="form-control"/></td>
    <td><input type="text" name="A2" alt="Author2" size="25" class="form-control"/></td>
    </tr>
    <tr>
    <td><input type="text" name="T3" alt="Title3" size="35" class="form-control"/></td>
    <td><input type="text" name="A3" alt="Author3" size="25" class="form-control"/></td>
    </tr>
    
  </table>
    </div>
  
  <div class="clear"></div>

  

  </fieldset>
  
 
 
 <input class="btn btn-primary" type="submit" value="   Submit   " /> 
 
  </form>
  <?php include ('footer.php');?>
</div>
 <div class="clear"></div>
</div>


  

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    
    <script src="js/bootstrap.min.js"></script>
    
    
     
  </body>
</html>