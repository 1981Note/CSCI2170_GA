<?php
    !defined('INIT_PHPV') && header("Location: ../index.php");

	/*
    Knowledge about direct access to PHP pages is forbidden, only use require
    URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
    Date Accessed: 2021/11/17
    */
?>

<!--Header for sign up page-->
<h1 id="signup">Sign Up</h1>
<!--Connect with require pages-->
<?php
require_once "includes/db.php";
require_once "includes/functions.php";
/* This page written by Siyuan Chen */

/* 
    Knowledge about create account with password hash in zybook
    URL: https://learn.zybooks.com/zybook/DALCSCI2170SampangiFall2021/chapter/8/section/1
    Accessed Date: 2021/11/15

*/
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //sanitize the useremail, password, and confirm password
    $useremail = sanitizeData($_POST["email-address"]);
    $password = sanitizeData($_POST["email-password"]);
    $password2 = sanitizeData($_POST["email-password2"]);

    //sql operation find the user email in user_login table
    $all = "SELECT * FROM user_login WHERE user_email = '$useremail'";
    $result = $conn->query($all);

    //if we can find email in user_login table
    if (mysqli_num_rows($result) > 0){
        //then header a error message email is exist
        header("Location: index.php?signup&signuperror=emailexist");
        die;
        //else if we cannot email in the table which means user did not signUp
    }else{
        //if password that user enter and confirm password user enter is equivalence.
        if ($password === $password2){

            //hash the password
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);
    
            //and insert user email and password to user login
            $sql = "INSERT INTO `user_login`(`user_id`, `user_email`, `user_password`) VALUES (NULL, '$useremail', '$passwordHash')";
    
            //if useremail, password and password2 is not empty
            if (!empty($useremail) && !empty($password) && !empty($password2)){
                //then do the sql step
                $conn->query($sql);
                //echo the information that shows users create account successfully
                echo "<p class='middleRight'><strong> Your account has been created. &#9787;</strong><p>";
                echo "<p class='middleRight'><a href='index.php?login'> Login </a></p>";
                echo "<img src='img/signup.jpg' alt='picture in signup page about Marvel characters' class='centerImg' width='30%' height='30%'>";
                //else header the wrong message shows input cannot be empty
            }else{
                header("Location: index.php?signup&signuperror=cannotempty");
                die;
            }
            die;
            //else password is not same, show the wrong message
        }else{
            header("Location: index.php?signup&signuperror=passwordnotsame");
            die;
        }
    }
}
?>

<?php
//if isset signuperror
if(isset($_GET["signuperror"])){
    //and get email exist 
    if($_GET["signuperror"] === "emailexist"){
        //echo the exist message
        echo "<p class='middleWrong'><strong>***** The email already exists. &#9785; *****</strong></p>";
    //and get cannotempty
    }else if($_GET["signuperror"] === "cannotempty"){
        //echo the cannotempty message
        echo "<p class='middleWrong'><strong>***** Email and password cannot be empty, also you need to confirm password *****</strong></p>";
    //and get password not same
    }else if($_GET["signuperror"] === "passwordnotsame"){
        //echo the password not same message
        echo "<p class='middleWrong'><strong>***** Password is not the same. Please try again. &#9785; *****</strong></p>";
    }
}
?>

<!--
    Knowledge about design sign up form using bootstrap
    URL: https://getbootstrap.com/docs/5.1/components/dropdowns/?#accessibility
    URL: https://getbootstrap.com/docs/5.1/layout/columns/
    Accessed Date: 2021/11/15
-->
<div class="container">
    <form id="signup-form" class="px-4 py-3" method="post" action="index.php?signup">
        <!--input part for email address-->
        <div class="col-md-6 offset-md-3 div">
            <label for="Email" class="form-label">Email address</label>
            <input type="email" name="email-address" class="form-control" id="Email1" placeholder="email@example.com">
        </div>
        <!--input part for password-->
        <div class="col-md-6 offset-md-3 div">
            <label for="Password" class="form-label">Password</label>
            <input type="password" name="email-password" class="form-control" id="Password1" placeholder="Password">
        </div>
        <!--input part for confirm password-->
        <div class="col-md-6 offset-md-3 div">
            <label for="Confirm-Password" class="form-label">Confirm Password</label>
            <input type="password" name="email-password2" class="form-control" id="confirmPassword1" placeholder="Password">
        </div>
        <!--submit button-->
        <div class="div">
            <button type="submit" class="btn btn-primary offset-md-3">Create Account</button>
        </div>
  </form>
</div>