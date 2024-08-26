<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering System - Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style>
        body {
            font-family: 'Open Sans', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .background-wrapper {
            background-image: url('images/food12.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            overflow: hidden;
        }

        .header {
            background-color: rgba(51, 51, 51, 1); /* Semi-transparent dark background for the header */
            color: #fff;
            padding: 10px 0;
        }

        .logo {
            font-size: 29px;
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .content-section {
            color: #fff;
            padding: 50px 0;
            background-color: rgba(248, 248, 248, 0); /* Semi-transparent light background for the content */
        }

        .content-section h2 {
        color: #fff; /* Change this color to your desired font color */
        font-size: 36px;
        font-weight: bold; /* Make the text bold */
        margin-bottom: 20px;
        text-align: center;
        background-color: rgba(255, 255, 255, 0); /* Semi-transparent white background for the text */
        padding: 10px; /* Add padding for better readability */
        border-radius: 10px; /* Add border-radius for a rounded look */
    }


        .content-section p {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background for the text */
            padding: 20px; /* Add padding for better readability */
            border-radius: 10px; /* Add border-radius for a rounded look */
        }

        .content-section img {
            max-width: 100%;
            height: auto;
            margin: 20px auto;
            display: block;
        }
    </style>
    <script src="js/respond.js"></script>
</head>

<body>
    <div class="background-wrapper">
        <div class="header">
            <div class="wrap">
            <div class="top-header">
                <div class="logo">
                    Catering Ordering System
                </div>
                <div class="clear"> </div>
            </div>
            <div class="top-nav">
                <div class="top-nav-left">
                    <ul>
                        <li class="active"><a href="home.php" style="text-decoration:none;">Home</a></li>
                        <li><a href="order.php" style="text-decoration:none;">Order</a></li>
                        <li><a href="contact.php" style="text-decoration:none;">Contact</a></li>
                        <li><a href="feedback.php" style="text-decoration:none;">Feedback</a></li>
                        <li><a href="index.php" style="text-decoration:none;">Admin</a></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
            </div>
        </div>

        <div class="content-section">
            <div class="container">
                <h2>Welcome to Catering Ordering System</h2>
                <p>
                Our catering services go beyond the ordinary to create an immersive dining experience that captivates all the senses.
                From the initial consultation to the final presentation, our team is dedicated to providing personalized service, ensuring that your unique preferences and requirements are met with precision.
                We understand that every event is distinctive, and our diverse menu options cater to various culinary preferences and dietary needs.
                Moreover, our commitment to sustainability is reflected in our sourcing practices, promoting eco-friendly choices without compromising on taste.
                Trust us to not only meet but exceed your expectations, making your event a gastronomic celebration that lingers in the memories of your guests.
                Elevate your occasions with the excellence of our catering services.
                </p>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
