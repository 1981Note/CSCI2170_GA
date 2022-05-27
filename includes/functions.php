<?php
    !defined('INIT_PHPV') && header("Location:../index.php");

	/*
    Knowledge about direct access to PHP pages is forbidden, only use require
    URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
    Date Accessed: 2021/11/17
    */
/* Create this file by Siyuan Chen */
/* Use the function from class CSCI2170 */

/*function for sanitizeDate */
function sanitizeData($data) {
    $cleanData = trim($data);
    $cleanData = stripslashes($cleanData);
    $cleanData = htmlspecialchars($cleanData);
    return $cleanData;
}