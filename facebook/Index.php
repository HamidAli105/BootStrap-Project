<!DOCTYPE html>
 <head>
<title>
Facebook Log In & Sign Up
 </title>

<link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
 <?php
       ('connection.php'); 
  ?>
<body>
<div class="main">
 <div class="upper"> 
   <div class="name">
    <div class="fcbk"><b> Facebook  </b>
    </div>
  </div>
   <div class="menu">
    <div class="menuright"> 
    <form action="New.php" method="post">
	    <div class="eml"> Email or Phone <br />
   <div class="form"> <input name="email" type="text" placeholder="Write Email" size="20" maxlength="30"> </div>
   </div>
    <div class="eml"> Password <br />
   <div class="form"> <input name="password" type="text" placeholder="Write Password" size="20" maxlength="30"> </div>
  </div>    
          
   <div class="log"> <input name="Button" type="submit" value="Log In" class="login">
   </div>
	</form>
            <div class="forgtn"> <a  href="#" class="color"> Forgotten account? </a> 
            </div>
          </div>
      </div>
  </div>
        <div class="medium">
        <div class="mediumleft">
         <div class="mediumwri"> Facebook helps you connect and share with the people in your life. 
         </div>
          <div class="img"> </div>
        </div>
        <div class="mediumright">
        <div class="account"> Create an account</div>
         <div class="free"> It's free and always will be. </div>
       
      <div class="margnfrm">
    <form action="db_insert.php" method="Post" enctype="multipart/form-data">
     <div class="margnfrm">  <input name="fname" type="text" placeholder="First Name" size="18" maxlength="20" class ="firstname"> </div>
   <div class="margnfrm">  <input name="sname" type="text" placeholder="Sure Name" size="18" maxlength="20" class ="firstname"> </div>
   <input name="email" type="email" placeholder="Write Email"
        size="400" maxlength="400" class="email">
        <input name="phnnbr" type="text" placeholder="Write Phone Number"
        size="400" maxlength="400" class="email">
    <input name="password" type="password" placeholder="New Password" size="400" maxlength="400" class="email">
         <div class="birthday"> Birthday: </div> 
         <div class="yearmrgn">
       <div class="year">   
  <select name="date" class="slctlist">
   <option> Days </option>
    <option> 1 </option>
     <option> 2 </option>
      <option> 3 </option>
       <option> 4 </option>
				<option> 5 </option>
				 <option> 6 </option>
				  <option> 7 </option>
					 <option> 8 </option>
					  <option> 9 </option>
					   <option> 10 </option>
					    <option> 11 </option>
					     <option> 12 </option>
					      <option> 13 </option>
					       <option> 14 </option>
					        <option> 15 </option>
					         <option> 16 </option>
					          <option> 16 </option>
					           <option> 17 </option>
					            <option> 18 </option>
					             <option> 19 </option>
					              <option> 20 </option>
					               <option> 21 </option>
					                <option> 22 </option>
					                 <option> 23 </option>
					                  <option> 24 </option>
					                   <option> 25 </option>
					                    <option> 26 </option>
					                     <option> 27 </option>
					                      <option> 28 </option>
					                       <option> 29 </option>
					                        <option> 30 </option>
					                         <option> 31 </option>
          
          </select>
        </div>
         <div class="year">   
          <select name="month" class="slctlist">
           <option> Month </option>
			      <option> Jan </option>
             <option> Feb </option>
			        <option> Mar </option>
               <option> Apr </option>
                <option> May </option>
                 <option> June </option>
				          <option> July </option>
				           <option> Aug </option>
				            <option> Sep </option>
				             <option> Oct </option>
				              <option> Nov </option>
					             <option> Dec </option>
          </select>
        </div>
         <div class="year">   
          <select name="year" class="slctlist">
            <option> Year </option>
			       <option> 2000 </option>
             <option> 2001 </option>
              <option> 2002 </option>
               <option> 2003 </option>
                <option> 2004 </option>
				         <option> 2005 </option>
				          <option> 2006 </option>
				           <option> 2007 </option>
				            <option> 2008 </option>
					           <option> 2009 </option>
					            <option> 2010 </option>
					             <option> 2011 </option>
					              <option> 2012 </option>
						             <option> 2013 </option>
						              <option> 2014 </option>
						               <option> 2015 </option>
						                <option> 2016 </option>
							               <option> 2017 </option>
							                <option> 2018 </option>
							                 <option> 2019 </option>
          </select>
        </div>
     </div>
     
     <div class="provideborn"> Why do I need to provide my<br /> date of birth? </div>
   <div class="radiomrgn"> Gender: Male <input name="gender" type="radio" value="Male"> 
  Female <input name="gender" type="radio" value="Feale">
      </div> 
	 
   <div class="image"> Upload's Images: 
    <input type="file" name="image"> </div>
      <div class="datapolicy"> By clicking Sign up, you agree to our Terms. Data policy and<br />
      Cookie policy. You may receive SMS notifications from us and can out any time.
       </div>
    <div class="signmrgn"> <input name="Button" type="submit" value="Sign up" class="signup"> </div>
      </form>
      <div class="celebirty"> Create a Page for a Celebirty, band or business. </div>
       </div>

</div>

 <link rel="stylesheet" type="text/css" href="js/jquery.js">
 <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
</body>


</html>