<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>test message</title>
</head>
<body>
  
  <?php
  if(isset($_POST['email'])) {

      // EDIT THE 2 LINES BELOW AS REQUIRED
      $email_to = "andree@hccollege.co.za";
      $email_subject = "Evaluation";

      function died($error) {
          // your error code can go here
          echo "We are very sorry, but there were error(s) found with the form you submitted. ";
          echo "These errors appear below.<br /><br />";
          echo $error."<br /><br />";
          echo "Please go back and fix these errors.<br /><br />";
          die();
      }

      // validation expected data exists
      if(!isset($_POST['name']) ||
          !isset($_POST['student_number']) ||
          !isset($_POST['tutor']) ||
          !isset($_POST['course']) ||
          !isset($_POST['answer1']) ||
          !isset($_POST['answer2']) ||
          !isset($_POST['answer3']) ||
          !isset($_POST['answer4']) ||
          !isset($_POST['answer5']) ||
          !isset($_POST['answer6']) ||
          !isset($_POST['answer7']) ||
          !isset($_POST['answer8']) ||
          !isset($_POST['answer9']) ||
          !isset($_POST['answer10']) ||
          !isset($_POST['answer11']) ||
          !isset($_POST['answer12']) ||
          !isset($_POST['answer13']) ||
          !isset($_POST['answer14']) ||
          !isset($_POST['answer15']) ||
          !isset($_POST['answer16']) ||
          !isset($_POST['answer17']) ||
          !isset($_POST['answer18']) ||
          !isset($_POST['answer19']) ||
          !isset($_POST['answer20']) ||
          !isset($_POST['answer21']) ||
          !isset($_POST['comments'])) {
          died('We are sorry, but there appears to be a problem with the form you submitted.');
      }

      $name = $_POST['name']; // required
      $student_number = $_POST['student_number']; // required
      $tutor = $_POST['tutor']; // required
      $course = $_POST['course']; // not required
      $answer1 = $_POST['answer1']; // not required
      $answer2 = $_POST['answer2']; // not required
      $answer3 = $_POST['answer3']; // not required
      $answer4 = $_POST['answer4']; // not required
      $answer5 = $_POST['answer5']; // not required
      $answer6 = $_POST['answer6']; // not required
      $answer7 = $_POST['answer7']; // not required
      $answer8 = $_POST['answer8']; // not required
      $answer9 = $_POST['answer9']; // not required
      $answer10 = $_POST['answer10']; // not required
      $answer11 = $_POST['answer11']; // not required
      $answer12 = $_POST['answer12']; // not required
      $answer13 = $_POST['answer13']; // not required
      $answer14 = $_POST['answer14']; // not required
      $answer15 = $_POST['answer15']; // not required
      $answer16 = $_POST['answer16']; // not required
      $answer17 = $_POST['answer17']; // not required
      $answer18 = $_POST['answer18']; // not required
      $answer19 = $_POST['answer19']; // not required
      $answer20 = $_POST['answer20']; // not required
      $answer21 = $_POST['answer21']; // not required
      $comments = $_POST['comments']; // required


      $email_message = "Form details below.\n\n";
        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
        }

      $email_message .= "Name: ".clean_string($name)."\n";
      $email_message .= "Student Number: ".clean_string($student_number)."\n";
      $email_message .= "Tutor: ".clean_string($tutor)."\n";
      $email_message .= "Course: ".clean_string($course)."\n";
      $email_message .= "Comments: ".clean_string($comments)."\n";
      $email_message .= "Answer: ".clean_string($answer1)."\n";
      $email_message .= "Answer: ".clean_string($answer2)."\n";
      $email_message .= "Answer: ".clean_string($answer3)."\n";
      $email_message .= "Answer: ".clean_string($answer4)."\n";
      $email_message .= "Answer: ".clean_string($answer5)."\n";
      $email_message .= "Answer: ".clean_string($answer6)."\n";
      $email_message .= "Answer: ".clean_string($answer7)."\n";
      $email_message .= "Answer: ".clean_string($answer8)."\n";
      $email_message .= "Answer: ".clean_string($answer9)."\n";
      $email_message .= "Answer: ".clean_string($answer10)."\n";
      $email_message .= "Answer: ".clean_string($answer11)."\n";
      $email_message .= "Answer: ".clean_string($answer12)."\n";
      $email_message .= "Answer: ".clean_string($answer13)."\n";
      $email_message .= "Answer: ".clean_string($answer14)."\n";
      $email_message .= "Answer: ".clean_string($answer15)."\n";
      $email_message .= "Answer: ".clean_string($answer16)."\n";
      $email_message .= "Answer: ".clean_string($answer17)."\n";
      $email_message .= "Answer: ".clean_string($answer18)."\n";
      $email_message .= "Answer: ".clean_string($answer19)."\n";
      $email_message .= "Answer: ".clean_string($answer20)."\n";
      $email_message .= "Answer: ".clean_string($answer21)."\n";

  // create email headers
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);
  ?>

  <!-- include your own success html here -->

  Thank you for contacting us. We will be in touch with you very soon.

  <?php

  }
  ?>

<!-- place your own success html below -->

<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
	<title>Thank You</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container center clearfix">

                    <div class="heading-block center">
                        <h1>Thank you for your time and input</h1>
                        <span>We will utilize this data to improve your experiance at HC College</span>
                    </div>

                    <p><img src="images/thank_you_2.jpg" alt="Image"></img>
</p>

                    <a href="index.html" class="button button-3d button-xlarge button-rounded button-amber">&lArr; Back to Home Page</a>

                </div>

            </div>

        </section><!-- #content end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>

</body>
</html>
<?php
}
die();
?>
</body>

</html>
