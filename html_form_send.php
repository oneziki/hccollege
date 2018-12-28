<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Enrolment Form</title>
</head>

<body>

<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "info@hccollege.co.za";    
    $email_subject = "Important! Enrolment Form Applicant";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted.";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and make sure you entered the fields correctly.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||       
        !isset($_POST['title']) ||
		!isset($_POST['prefered_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['birth_date']) ||
        !isset($_POST['id_number']) ||
        !isset($_POST['nationality']) ||
        !isset($_POST['citizen_status']) ||
        !isset($_POST['date_of_entry']) ||
        !isset($_POST['home_language']) ||
        !isset($_POST['other_language']) ||
        !isset($_POST['disability']) ||
        !isset($_POST['street']) ||  
        !isset($_POST['suburb']) ||
        !isset($_POST['city']) ||
   	    !isset($_POST['areacode']) ||
   	    !isset($_POST['alt_street']) ||
        !isset($_POST['alt_suburb']) ||
        !isset($_POST['alt_city']) ||
 	    !isset($_POST['alt_areacode']) ||
        !isset($_POST['work_number']) ||
		!isset($_POST['home_number']) ||
		!isset($_POST['cell_number']) ||
		!isset($_POST['alt_work_number']) ||
		!isset($_POST['alt_home_number']) ||
		!isset($_POST['alt_cell_number']) ||
		!isset($_POST['alt_email']) ||
		!isset($_POST['last_high']) ||
		!isset($_POST['high_grade']) ||
		!isset($_POST['register']) ||
		!isset($_POST['study_period']) ||
		!isset($_POST['institution']) ||
		!isset($_POST['module']) ||
		!isset($_POST['nqf_level']) ||
        !isset($_POST['year_completed']) ||
     	!isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted. Please make sure you have filled in all the nessasary fields');       
    }
     
    $first_name = $_POST['first_name']; // required
    $title = $_POST['title'];
    $prefered_name = $_POST['prefered_name']; // not required
    $last_name = $_POST['last_name']; // required
    $birth_date = $_POST['birth_date']; // required
    $id_number = $_POST['id_number']; // required
    $nationality = $_POST['nationality']; // required 
   	$citizen_status = $_POST['citizen_status']; // not required
    $date_of_entry = $_POST['date_of_entry']; // not required
    $home_language = $_POST['home_language']; // not required
    $other_language = $_POST['other_language']; // not required
   	$disability = $_POST['disability']; // not required
    $street = $_POST['street']; // required
	$suburb = $_POST['suburb']; // required
	$city = $_POST['city']; // required
	$areacode = $_POST['areacode']; // required
	$alt_street = $_POST['alt_street']; // required
	$alt_suburb = $_POST['alt_suburb']; // required
	$alt_city = $_POST['alt_city']; // not required
	$alt_areacode = $_POST['alt_areacode']; // not required	
    $work_number = $_POST['work_number']; // not required
 	$home_number = $_POST['home_number']; // not required
 	$cell_number = $_POST['cell_number']; // required
	$alt_work_number = $_POST['alt_work_number']; // not required
 	$alt_home_number = $_POST['alt_home_number']; // not required
 	$alt_cell_number = $_POST['alt_cell_number']; // not required
	$alt_email = $_POST['alt_email']; // not required
	$last_high = $_POST['last_high']; // not required
	$high_grade = $_POST['high_grade']; // not required
	$register = $_POST['register']; // not required
	$study_period = $_POST['study_period']; // not required
	$institution = $_POST['institution']; // not required
	$module = $_POST['module']; // not required
	$nqf_level = $_POST['nqf_level']; // not required
	$year_completed = $_POST['year_completed']; // not required
	    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[_a-zA-Z0-9- ]+$/";  
      if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Surname you entered does not appear to be valid.<br />';
  }
   $string_exp = "/^[_a-zA-Z0-9- ]+$/";   
     if(!preg_match($string_exp,$birth_date)) {
    $error_message .= 'The Date or Birth you entered does not appear to be valid.<br />';
  }
   $string_exp = "/^[_a-zA-Z0-9- ]+$/";  
  if(!preg_match($string_exp,$id_number)) {
    $error_message .= 'The ID Number you entered does not appear to be valid.<br />';
  }
      $string_exp = "/^[_a-zA-Z0-9- ]+$/";  
   if(!preg_match($string_exp,$home_language)) {
    $error_message .= 'The Home Language you entered does not appear to be valid.<br />';
  }
  
 $string_exp = "/^[_a-zA-Z0-9- ]+$/";  
   if(!preg_match($string_exp,$street)) {
   $error_message .= 'The Street you entered does not appear to be valid.<br />';
 }

 $string_exp = "/^[_a-zA-Z0-9- ]+$/";  
  if(!preg_match($string_exp,$suburb)) {
   $error_message .= 'The Suburb you entered does not appear to be valid.<br />';
  }

 $string_exp = "/^[_a-zA-Z0-9- ]+$/";  
   if(!preg_match($string_exp,$city)) {
  $error_message .= 'The City you entered does not appear to be valid.<br />';
  }

 $string_exp = "/^[_a-zA-Z0-9- ]+$/";  
  if(!preg_match($string_exp,$areacode)) {
 $error_message .= 'The Area Code you entered does not appear to be valid.<br />';
 }

   $string_exp = "/^[_a-zA-Z0-9- ]+$/";  
  if(!preg_match($string_exp,$cell_number)) {
    $error_message .= 'The Cell Number you entered does not appear to be valid.<br />';
  }
 
   if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
       
    $email_message .= "------------------------------------"."\r\n";
    $email_message .= "Section A: Student Details"."\r\n";
    $email_message .= "------------------------------------"."\r\n";
    $email_message .= "First Name: ".clean_string($first_name)."\n";
	$email_message .= "Title: ".clean_string($title)."\n";
	$email_message .= "Prefered Name: ".clean_string($prefered_name)."\n";    
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Date of Birth: ".clean_string($birth_date)."\n";
    $email_message .= "Id Number: ".clean_string($id_number)."\n";
    $email_message .= "Nationality: ".clean_string($nationality)."\n";
   	$email_message .= "Citizen Status: ".clean_string($citizen_status)."\n";
    $email_message .= "Foreign Student: Date of Entry: ".clean_string($date_of_entry)."\n";
    $email_message .= "Home Language: ".clean_string($home_language)."\n";
	$email_message .= "Second Language: ".clean_string($other_language)."\n";
	$email_message .= "Disability: ".clean_string($disability)."\n";
	$email_message .= "------------------------------------"."\r\n";
	$email_message .= "Physical Address"."\r\n";
	$email_message .= "------------------------------------"."\r\n";
	$email_message .= "Street: ".clean_string($street)."\n";
    $email_message .= "Suburb: ".clean_string($suburb)."\n";
    $email_message .= "City: ".clean_string($city)."\n";
    $email_message .= "Area Code: ".clean_string($areacode)."\n";
	$email_message .= "------------------------------------"."\r\n";
	$email_message .= "Postal Address"."\r\n";
	$email_message .= "------------------------------------"."\r\n";
	$email_message .= "PO BOX Number: ".clean_string($alt_street)."\n";
    $email_message .= "Suburb: ".clean_string($alt_suburb)."\n";
    $email_message .= "City: ".clean_string($alt_city)."\n";
    $email_message .= "Area Code: ".clean_string($alt_areacode)."\n";
	$email_message .= "------------------------------------"."\r\n";
	$email_message .= "Contact Details"."\r\n";
	$email_message .= "------------------------------------"."\r\n";
	$email_message .= "Work Number: ".clean_string($work_number)."\n";
	$email_message .= "Home Number: ".clean_string($home_number)."\n";
	$email_message .= "Cell Number: ".clean_string($cell_number)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Alternative Work Number: ".clean_string($alt_work_number)."\n";
	$email_message .= "Alternative Home Number: ".clean_string($alt_home_number)."\n";
	$email_message .= "Alternative Cell Number: ".clean_string($alt_cell_number)."\n";
	$email_message .= "Alternative Email: ".clean_string($alt_email)."\n";
	$email_message .= "Last High School Attended: ".clean_string($last_high)."\n";
	$email_message .= "Highest Grade: ".clean_string($high_grade)."\n";
	$email_message .= "------------------------------------"."\r\n";
	$email_message .= "Section B: Course Information"."\r\n";
	$email_message .= "------------------------------------"."\r\n";
	$email_message .= "Course Registered: ".clean_string($register)."\n";
	$email_message .= "Study Period: ".clean_string($study_period)."\n";
	$email_message .= "Institution: ".clean_string($institution)."\n";
	$email_message .= "Module: ".clean_string($module)."\n";
	$email_message .= "NQF Level: ".clean_string($nqf_level)."\n";
	$email_message .= "Year Completed: ".clean_string($year_completed)."\n";
	$email_message .= "Person Paying: ".clean_string($payment)."\n";
	$email_message .= "Payment Method: ".clean_string($payment_method)."\n";
	$email_message .= "title: ".clean_string($title_2)."\n";
  	$email_message .= "------------------------------------"."\r\n";
      $email_message .= "Additional Comments: ".clean_string($comments)."\n";
        
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
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
                        <h1>Thank you for completing our Online Application Form</h1>
                        <span>HC College will contact you shortly</span>
                    </div>

                    <p><img src="images/thank_you.jpg" alt="Image"></img>
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
