<?php
    !defined('INIT_PHPV') && header("Location:../index.php");

	/*
    Knowledge about direct access to PHP pages is forbidden, only use require
    URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
    Date Accessed: 2021/11/17
    */
    //require pages
    require_once "includes/db.php";
    require_once "includes/functions.php";
?>

<!-- This part written by Siyuan Chen-->

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tiger News</title>
        <!--
            Link css and js and jquery from bootstrap
            URL: https://getbootstrap.com/
            Accessed Date: 2021/11/1
        -->
        <!--link css style files-->
        <link rel="stylesheet" href="css/normalize.css">
	    <link rel="stylesheet" href="css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <!--Link js file-->

        <!-- Link to jQuery library -->
        <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>	
    </head>

	<body>
        <!--
            Knowledge about create header using bootstrap
            URL: https://getbootstrap.com/docs/5.1/examples/headers/#
            Author: Mark Otto, Jacob Thornton, and Bootstrap contributors
            Accessed Date: 2021/11/14
        -->
        
        <header id="header" class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="img/logo.png" alt="logo" width="100" height="80" id="logo">
                    </a>
                    <!--header list which can jump to other page-->

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="index.php" class="nav-link px-2 text-white">HOME</a></li>
                        <li><a href="index.php?characters" class="nav-link px-2 text-white">CHARACTERS</a></li>
                        <li><a href="index.php?movies" class="nav-link px-2 text-white">MOVIES</a></li>
                        <li><a href="index.php?games" class="nav-link px-2 text-white">GAMES & COMIC BOOKS</a></li>
                        <li><a href="index.php?activities" class="nav-link px-2 text-white">ACTIVITIES</a></li>
                        <li><a href="index.php?contact" class="nav-link px-2 text-white">CONTACT US</a></li>
                    </ul>

                    <!--
                        Knowledge about how to create a search bar using javascript
                        URL: https://www.geeksforgeeks.org/search-bar-using-html-css-and-javascript/
                        Accessed Date: 2021/11/15
                    -->
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input id="searchbar" onkeyup="search_key()" type="search" name="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                    </form>

                    <!--
                        Knowledge about how to create an html button that acts like a link
                        https://www.w3docs.com/snippets/html/how-to-create-an-html-button-that-acts-like-a-link.html
                        Accessed Date: 2021/11/14
                    -->
                    <div class="text-end">
                        <!--This part update by Chenwen Wang-->
                        <?php
                        session_start();

                        if (isset($_SESSION["email"])) {
                            $id = $_SESSION["id"];
                            $SQLuser = "SELECT * FROM user_information WHERE login_id = $id";
                            $result2 = $conn->query($SQLuser);
                            if ($result2){
                                while ($row2 = $result2->fetch_assoc()){
                                    $_SESSION["fname"] = $row2['firstname'];
                                    $_SESSION["lname"] = $row2['lastname'];
                                }
                            }
                            //then $firstname is session firstname
                            if(isset($_SESSION["fname"])) {
                                $firstname = $_SESSION["fname"];
                                $lastname = $_SESSION["lname"];
                            } else {
                                $firstname = "Mr.";
                                $lastname = "GUEST";
                            }
                            //then echo the sentence with logout href

                            echo "<div id='welcome'>$firstname $lastname</div>";
                            echo "<button type='button' onclick='location=\"includes/logout.php\"' class='btn btn-danger'>logout</button>";
                        } else{
                        ?>
                        <button type="button" onclick="location.href='index.php?login'" class="btn btn-outline-light me-2">Login</button>
                        <button type="button" onclick="location.href='index.php?signup'" class="btn btn-danger">Sign-up</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </header>