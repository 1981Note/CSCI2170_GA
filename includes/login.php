<?php
    !defined('INIT_PHPV') && header("Location:../index.php");

	/*
    Knowledge about direct access to PHP pages is forbidden, only use require
    URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
    Date Accessed: 2021/11/17
    */
?>
<!--login section-->
<h1 id="login">Login</h1>
<?php
//require files
require_once "includes/db.php";
require_once "includes/functions.php";
/* This page written by Siyuan Chen */

/*
    Knowledge about create sign in form from zybook
    URL: https://learn.zybooks.com/zybook/DALCSCI2170SampangiFall2021/chapter/8/section/1
    Accessed Date: 2021/11/12
*/
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //sanitize the inputs
    $email = sanitizeData($_POST["loginEmail"]);
    $password = sanitizeData($_POST["loginPassword"]);

    //select all email from user login form which is equal to the input
    $SQL = "SELECT * FROM user_login WHERE user_email = '$email'";
    $result = $conn->query($SQL);
    //if the row of result is 0
    if ($result->num_rows == 0) {
        //then header index.php loginerror=true, echo the wrong message
        header("Location: index.php?login&loginerror=true");
        die;
        //if there exist result
    }else{
        $row = $result->fetch_assoc();
        //if email and password is right
        if ($row['user_email'] === $email && password_verify($password, $row['user_password'])){
            //set $_SESSION[] = $row[];
            $_SESSION["email"] = $row['user_email'];
            $_SESSION["password"] = $row['user_password'];
            $_SESSION["id"] = $row['user_id'];

            //header the show=inbox part of index.php
            header("Location: index.php");
            die;
                    //else there exist loginerror message
        }else{
                //else there exist error=true
            header("Location: index.php?login&loginerror=true");
            die;
        }
    }
}


?>

<?php 
		//if get loginerror
		if(isset($_GET["loginerror"])){
			//and the loginerror is true
			if($_GET["loginerror"] === "true"){
				//then echo the sentence for the usersname or password is wrong
				echo "<p class='middleWrong'><strong>***** Wrong username or password. Please try again. &#9785; ***** </strong></p>";
			}
		}
?>

<?php
//if is not set session email which means did not sign in, then give the form
    if (!isset($_SESSION["email"])) {

?>
<!--
    Knowledge about design sign up form using bootstrap
    URL: https://getbootstrap.com/docs/5.1/components/dropdowns/?#accessibility
    URL: https://getbootstrap.com/docs/5.1/layout/columns/
    Accessed Date: 2021/11/15
-->
<div class="container">
    <form id="login-form" class="px-4 py-3" action="index.php?login" method="post">
        <!--email address input part-->
        <div class="col-md-6 offset-md-3 div">
            <label for="Email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="Email" placeholder="email@example.com" name="loginEmail">
        </div>

        <!--password input part-->
        <div class="col-md-6 offset-md-3 div">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" placeholder="Password" name="loginPassword">
        </div>

        <!--sign in part-->
        <div class="div">
            <button type="submit" class="btn btn-primary offset-md-3">Sign in</button>
            <!--if user have not account, he/she can sign up-->
            <a class="offset-md-3" href="index.php?signup">New around here? Sign up</a>
        </div>
    </form>
</div>

<?php
//else if user sign in already, then give the message
    }else{
        echo "<p class='middleRight'><strong>You are already logged in, you need to log out and log in with a new account. &#9787;</strong><p>";
    }

?>
