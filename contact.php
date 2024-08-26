<!DOCTYPE HTML>
<html>
<head>
  <title>Catering System - Contact </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
 </head>

 <style>
  .logo {
        font-size:29px;
        color:white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
	</style>
  <body>
	<!----start-header----->
	 <div class="header">
	     <div class="wrap">
			<div class="top-header">
				<div class="logo">
					Catering Ordering System
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					<ul>
						<li><a href="home.php" style="text-decoration:none;">Home</a></li>
						<!--<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>-->
						<li><a href="order.php" style="text-decoration:none;">Order</a></li>
                        <li class="active"><a href="contact.php" style="text-decoration:none;">Contact</a></li>
						<li><a href="feedback.php" style="text-decoration:none;">Feedback</a></li>
						<li><a href="index.php" style="text-decoration:none;">Admin</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<!-- <div class="top-nav-right">
					<form>
						<input type="text"><input type="submit" value="" />
					</form>
				</div> -->
				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>
	</div>
   <!----End-header----->
      <?php
$link = mysqli_connect("localhost", "root", "", "cateringphp");
        if(!$link)
        {
            die('Could not connect ' . mysql_error());
        }

        $db_selected = mysqli_select_db($link, "cateringphp");

        if(!$db_selected)
        {
            die('Can\'t use '. 'cateringphp' . ' database!' .  mysql_error());
        }
    
if(isset($_POST["fullname"]) && isset($_POST["mobile"]))
{
    $fullname = mysqli_real_escape_string($link, $_POST['fullname']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $mobile = mysqli_real_escape_string($link, $_POST['mobile']);
    $subject = mysqli_real_escape_string($link, $_POST['subject']);
    $datetime = mysqli_real_escape_string($link, $_POST['datetime']);
    
        if(!empty($fullname) && !empty($email)){
        $sql = "INSERT INTO sh_contact(sh_fullname, sh_email, sh_mobile, sh_subject, sh_datetime) VALUES ('$fullname', '$email', '$mobile', '$subject', '$datetime')";
            $reg =mysqli_query($link, $sql);
            $reg = mysqli_affected_rows($link);

            if($reg > 0)
            {
                echo '<div class="bs-callout-info">';
                echo 'Mail Sent!';
                echo '</div>';
            }
            else
            {
                echo '<div class="bs-callout-danger">';
                echo 'No required field must be left blank. Please check the required fields';
                echo '</div>';
            }
           }
}
?>
		 <!---start-content---->
		 <div class="content">
		 	<!---start-contact---->
		 	<div class="contact">
		 		<div class="wrap">
				<div class="section group">							
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post">
                            <!-- <?php echo var_dump($_REQUEST);?> -->
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="fullname" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="mobile" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="subject"> </textarea></span>
						    </div>
                            <input type="hidden" name="datetime" value="<?php echo time(); ?>">
						   <div>
						   		<span><input type="submit" class="mybutton" value="Submit"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
			  </div>
			</div>
			</div>
		 	<!---End-contact---->
		 <!---End-content---->
	</body>
</html>

