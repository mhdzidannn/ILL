<html lang="en">
<head>
<title>Domestic abuse</title>
<link rel="stylesheet" href="headerandfooter.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/ico" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkGMelTfTu7G-M1MqrnUpb9nsYNfBVY-FekwsPPbGbcdeN6tW0" />
</head>
<body class="body">
<!-- navbar body -->
    <div class="navbar">
        <a href="Donate.html"><i class="fa fa-fw fa-money"></i>Donate</a>
        <a href="contact.html"><i class="fa fa-fw fa-phone"></i>Contact</a>
        <a href="news.html"><i class="fa fa-fw fa-book"></i>News</a>
        <a href="main.html"><i class="fa fa-fw fa-home"></i>Home</a>
        
    </div>

<?php
   if( $_POST["firstname"] && $_POST["lastname"] && $_POST['country'] && $_POST['story'] ) {
      echo "<p><center>Hello ". $_POST['firstname']. " ".$_POST['lastname'];
      
      echo "<br><center><p>From ".$_POST['country'];
      
      echo "<br><center><p>".$_POST['story'];
	echo "<br><center><p>Thanks for sharing your story :)";
      
      
   }
?>

<div>
<footer class="footer">
        <a href="https://www.facebook.com/STOP-DOMESTIC-VIOLENCE-355786656012/"><i class="fa fa-facebook-official"></i></a>
        <a href="https://twitter.com/hashtag/domesticabuse?lang=en"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/company/oasis-domestic-abuse-service"><i class="fa fa-linkedin"></i></a>

    </footer>
</div>
</body>
 
</html>
