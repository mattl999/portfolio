<?php 

echo "<pre>";
    print_r($_POST);
echo '<pre>';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$message = wordwrap($message, 70, "\r\n");
$formcontent="From: $name \r\n Message: $message";
$recipient = "examplel@gmail.com";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";

$body = "";

$body .= "From: ".$name. "\r\n";
$body .= "From: ".$email. "\r\n";
$body .= "From: ".$message. "\r\n";

// print_r($recipient, $subject, $formcontent, $mailheader);
$success =  mail($recipient, $subject, $formcontent, $mailheader); 

if ($success){ ?>
    <script language="javascript" type="text/javascript">
      alert('Thank you for the message. We will contact you shortly.');
      window.location = 'index.html';
    </script>
    <?php
  }
  else { ?>
      <script language="javascript" type="text/javascript">
        alert('Message failed. Please, send an email to gordon@template-help.com');
        window.location = 'index.html';
      </script>
      <?php
  }
  header('Location: https://gh-pages.d7vvbkfbjghwk.amplifyapp.com');
  ?>



<!-- 
echo "1: ".$recipient, "\r\n2: ".$subject, "\r\n3: ".$formcontent, "\r\n4: ".$mailheader;
// {
    // header("Location:https://gh-pages.d7vvbkfbjghwk.amplifyapp.com"); //Redirect to url if form submitted
// }
// echo "Thank You!";
// ?> -->