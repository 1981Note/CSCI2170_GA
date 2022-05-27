<?php
    !defined('INIT_PHPV') && header("Location: ../index.php");

	/*
    Knowledge about direct access to PHP pages is forbidden, only use require
    URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
    Date Accessed: 2021/11/17
    */
?>
<?php
    require_once "db.php";
    require_once "functions.php";

    /*
    Knowledge about create like dislike button
    URL: https://www.youtube.com/watch?v=IsnphvHUrxI&t=879s
    Accessed Date: 2021/11/10
    */

    /* This page written by Siyuan Chen */
    
    //if isset type
    if (isset($_GET["type"])){
        if (isset($_GET["id"])){
            $type = $_GET["type"];
            $id = $_GET["id"];

            //if like then like count plus one
            if ($type == "like"){
                $likeUpdate = "UPDATE `activity` SET `like_count` = `like_count` + 1 WHERE `activity_id` = $id";
            }

            //if dislike then dislike count plus one
            if ($type == "dislike"){
                $likeUpdate = "UPDATE `activity` SET `dislike_count` = `dislike_count` + 1 WHERE `activity_id` = $id";
            }
            
            $conn->query($likeUpdate);
            die();
        }
    }

    //if isset postActivity
    if (isset($_POST['postActivity'])){
        //sanitize inputs
        $name = sanitizeData($_POST['activity-name']);
        $information = sanitizeData($_POST['activity-information']);
 
        //if inputs are not empty
        if (!empty($name) && !empty($information)){
            //sent to activity table
            $submit = "INSERT INTO `activity`(`activity_id`, `activity_name`, `activity_information`, `like_count`, `dislike_count`)  VALUES (NULL,'$name','$information','0','0')";
            $conn->query($submit);
        }
        header("Location: index.php");
        die();
    }
?>

