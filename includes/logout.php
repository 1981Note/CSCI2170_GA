<?php
    !defined('INIT_PHPV') && header("Location:../index.php");

	/*
    Knowledge about direct access to PHP pages is forbidden, only use require
    URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
    Date Accessed: 2021/11/17
    */

    //logout a user 
    /*
     * This session destroy code is used from "Example 1" available on PHP.net
     * URL: https://www.php.net/manual/en/function.session-destroy.php
     * Authors: PHP.net contributors
     * Date: 26-10-2021
     */
    // Initialize the session.
    // If you are using session_name("something"), don't forget it now!
    session_start();

    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();

    header("Location: ../index.php");
    die();