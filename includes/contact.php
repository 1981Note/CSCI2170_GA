<?php
    !defined('INIT_PHPV') && header("Location: ../index.php");

	/*
    Knowledge about direct access to PHP pages is forbidden, only use require
    URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
    Date Accessed: 2021/11/17
    */
?>
<!--The header for contact page-->
<!-- This page written by Siyuan Chen-->
<h1 id="contact">Contact us!</h1>
<?php
//reqire pages
require_once "includes/db.php";
require_once "includes/functions.php";

//if isset submitContact 
if (isset($_POST["submitContact"])){
    //sanitize all the input
    $contactfirstname = sanitizeData($_POST["contact_firstname"]);
    $contactlastname = sanitizeData($_POST["contact_lastname"]);
    $contactemail = sanitizeData($_POST["contact_email"]);
    $contactphone = sanitizeData($_POST["contact_phone"]);
    $contactmessage = sanitizeData($_POST["contact_message"]);

    //if inputs are not empty
    if (!empty($contactfirstname) && !empty($contactlastname) && !empty($contactemail) && !empty($contactphone) && !empty($contactmessage)){
        //then insert to contact form
        $insert = "INSERT INTO `contact`(`contact_id`, `contact_fname`, `contact_lname`, `contact_email`, `contact_phone`, `contact_message`) VALUES (NULL,'$contactfirstname','$contactlastname','$contactemail','$contactphone','$contactmessage')";
        $conn->query($insert);
        header("Location: index.php");
        die;
    }else{
        //else give the error message
        header("Location: index.php?contact&contacterror=empty");
        die;
    }
}
?>

<?php
//if isset contacterror
    if(isset($_GET["contacterror"])){
        if($_GET["contacterror"] === "empty"){
            //echo the message
            echo "<p class='middleWrong'><strong>All field cannot be empty!</strong></p>";
        }
    }
?>

<div class="container">
    <form id="form" class="row g-3" method="post" action="index.php?contact">
        <!--first name part-->
        <div class="col-md-6">
            <label for="fname" class="form-label"><b>FIRST NAME:</b></label>
            <input class="form-control " type="text" id="fname" name="contact_firstname">
        </div>

        <!--last name part-->
        <div class="col-md-6">
            <label for="lname" class="form-label"><b>LAST NAME:</b></label>
            <input class="form-control" type="text" id="lname" name="contact_lastname">
        </div>

        <!--email part-->
        <div class="col-md-6">
            <label for="email" class="form-label"><b>EMAIL:</b></label>
            <input class="form-control" type="text" id="email" name="contact_email">
        </div>

        <!--phone number part-->
        <div class="col-md-6">
            <label for="phone" class="form-label"><b>PHONE NUMBER:</b></label>
            <input class="form-control" type="text" id="phone" name="contact_phone">
        </div>

        <!--message part-->
        <div class="col-12">
            <label for="message" class="form-label"><b>MESSAGE:</b></label>
            <textarea rows="10" class="form-control rounded-0" id="message" name="contact_message"></textarea>
        </div>

        <!--submit button-->
        <button type="submit" id="submit" class="btn btn-primary" name="submitContact"><b>SUBMIT</b></button>
    </form>
</div>

<!--
    This form code to implement contact form has been used with some modification from the submission for Assignment 1 by Siyuan Chen in CSCI2170 (Fall 2021).

    Siyuan Chen, Assignment 1: CSCI2170 (Fall 2021), Faculty of Computer Scienece, Dalhousie University. Available online on Gitlab at: https://git.cs.dal.ca/courses/2021-fall/csci-2170/a1/siyuanc/-/blob/master/A1/contact.php
    Date accessed: 2021/11/10
-->

<!--This website let me know structure of contact form
	URL: https://www.w3schools.com/howto/howto_css_contact_form.asp
	Arthur: getbootstrap.com
	Date accessed: 22-09-2021

	This website used to make form responsive
	https://getbootstrap.com/docs/5.1/forms/layout/
	Arthur: getbootstrap.com
	Date accessed: 22-09-2021

	This website used to make buttons responsive
	https://getbootstrap.com/docs/5.1/components/buttons/
	Arthur: getbootstrap.com
	Date accessed: 22-09-2021
-->