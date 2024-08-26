<!DOCTYPE HTML>
<html>
<head>
  <title>Catering System - Feedback </title>
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
						<li><a href="contact.php" style="text-decoration:none;">Contact</a></li>
                        <li class="active"><a href="feedback.php" style="text-decoration:none;">Feedback</a></li>
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

if (!$link) {
    die('Could not connect ' . mysqli_error());
}

$db_selected = mysqli_select_db($link, "cateringphp");

if (!$db_selected) {
    die('Can\'t use ' . 'cateringphp' . ' database!' . mysqli_error());
}

if (isset($_POST["fullname"]) && isset($_POST["message"])) {
    $fullname = mysqli_real_escape_string($link, $_POST['fullname']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $message = mysqli_real_escape_string($link, $_POST['message']);
	$datetime = date('Y-m-d H:i:s');

    if (!empty($fullname) && !empty($message)) {
        $sql = "INSERT INTO sh_feedback(fullname, email, message, datetime) VALUES ('$fullname', '$email', '$message', '$datetime')";
        $result = mysqli_query($link, $sql);

        if ($result) {
            echo '<div class="bs-callout-info">';
            echo 'Feedback Submitted!';
            echo '</div>';
        } else {
            echo '<div class="bs-callout-danger">';
            echo 'Error: ' . mysqli_error($link);
            echo '</div>';
        }
    }
}

mysqli_close($link);
?>



		 <!---start-content---->
		 <div class="content">
		 	<!---start-contact---->
		 	<div class="contact">
		 		<div class="wrap">
				<div class="section group">							
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Share Your Feedback</h3>
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
						    	<span><label>MESSAGE</label></span>
						    	<span><textarea name="message"> </textarea></span>
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

