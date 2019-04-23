<!DOCTYPE html>
<html lang="en">

<head>
    <title>Domestic Abuse</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="headerandfooter.css">


</head>

<body class="body">
    <!-- navbar body -->
    <div class="navbar">
        <a href="contact.html"><i class="fa fa-fw fa-phone"></i>Contact</a>
        <a href="News.html"><i class="fa fa-fw fa-book"></i>News</a>
        <a href="Home.html"><i class="fa fa-fw fa-home"></i>Home</a>
    </div>

    
    <?php if (isset($_POST['form_submitted'])): ?>

<?php if (!isset($_POST['agree'])): ?>

    <p>You have not completed our form.<br><br>
       Please <a href="contact.html">retry</a></p>

    <?php else: ?>

        <center><h2>Thank you <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];?>!
        </h2><center>

        <center><p>Your message has been received. We will reply to your
        email address <b><?php echo $_POST['Email']; ?></b> as soon as possible.</p></center>

        <p> Go to the <a href="main.html">homepage</a></p>

    <?php endif; ?>

    <?php else: ?>
</p>
</center>
<?php endif; ?>


<footer class="footer">
        <a href="https://www.facebook.com/STOP-DOMESTIC-VIOLENCE-355786656012/"><i class="fa fa-facebook-official"></i></a>
        <a href="https://twitter.com/hashtag/domesticabuse?lang=en"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/company/oasis-domestic-abuse-service"><i class="fa fa-linkedin"></i></a>

    </footer>

</body>

</html>