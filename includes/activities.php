<?php
    !defined('INIT_PHPV') && header("Location: ../index.php");

	/*
    Knowledge about direct access to PHP pages is forbidden, only use require
    URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
    Date Accessed: 2021/11/17
    */
?>

<!--This part written by Shihui Gao-->
<section id="activity-page">
    <div class="container">
    <div>
    <h1>Marvel Experience</h1>

    <h2>Organization: Marvel Company</h2>
    <h2>Address: 3098 Cutler Ave, Halifax, NS, Canada</h2>
    <h2>Time: 2021/12/01</h2>
    <h2>Ticket price: $30</h2>
    </div>

    <?php
    //if isset session email then show the search bar
    if (isset($_SESSION["email"])) {
    ?>

    <!--
    This form code to implement search from has been used with some modification from the submission for Assignment 2 by Siyuan Chen in CSCI2170 (Fall 2021).

    Siyuan Chen, Assignment 2: CSCI2170 (Fall 2021), Faculty of Computer Scienece, Dalhousie University. Available online on Gitlab at: https://git.cs.dal.ca/courses/2021-fall/csci-2170/a2/siyuanc/-/blob/master/a2/index.php
    Date accessed: 2021/11/8
    -->
        <form method="POST" action="">
            
        <div class="row justify-content-center" id="activity-search-form">

            <div id="activity-dropdown">
                <select name="select-title-or-content" class="select">
                    <option value="all">Show all interested activity</option>
                    <option value="title">Search by title</option>
                    <option value="content">Search by content</option>
                </select>
            </div>
            
            <div id="activity-input">
                <input type="text" name="keywords-input" placeholder="search activity" id="input-search-activity">
            </div>
        
            <div id="activity-button">
				<input type="submit" id="search" name="activity-search" value="Search">
			</div>
        </div>

        </form>

    <?php
    }
    ?>


    <!--activity create by company-->
    <div>
        <h2>Large-scale virtual interactive experience</h2>
        <p>In the VR image hall, 
        customers can train, play games, and save the world with superheroes 
        such as Iron Man and Hulk in Marvel movies.</p>
        <div id="activities_pictures">
        <img src="img/Activities_img/virtual.jpg"  class="img-fluid"  alt="virtual image" float:left;>
        </div>
        <h2>Wax figures</h2>
        <p> Customers can take photos of wax figures of superheroes 
        like Iron Man, Hulk, Thor and Captain America. 
        Commentator tell the story of these superheroes.</p>
        <div id="activities_pictures">
        <img src="img/Activities_img/Wax_figures.jpg"  class="img-fluid" alt="wax image" float:left;>
        </div>
        <h2>Prize Draw</h2>
        <p> Every Customer have an chance to entry to 
        the prize draw and win the poster of superheroes.</p>
        <div id="activities_pictures">
        <img src="img/Activities_img/prize-box.jpg"  class="img-fluid" alt="virtual image" float:left;>
        </div>
    </div>

    <?php
        /* This part written by Siyuan Chen */
        if(isset($_POST['activity-search']) && isset($_SESSION["email"])){
            
            $allarticles = $_POST['select-title-or-content'];
            $option1 = "all";
            $option2 = "title";
            $option3 = "content";
            
            //if it is first option
            if (strcmp($allarticles,$option1)==0){
                echo "<h3>Search Results: Showing all Interested Activity post by users</h3>";
                $querySQL = "SELECT * FROM activity ORDER BY activity_id ASC";
                $result = $conn->query($querySQL);
                //echo all the result
                //knowledge from CSCI2170 while loop the table
                if($result){
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = $result->fetch_assoc()){
                            echo "<div class='search-background'>";
                            echo "<table>";
                            echo "<tr>";

                            echo "<td class='postActivity'>";
                            echo "<h2>" . $row['activity_name'] . "</h2>";
                            echo "<p>". $row['activity_information'] ."</p>";
                            echo "</td>";
                            //use the icon in bootstrap
                            //URL: https://icons.getbootstrap.com/icons/hand-thumbs-up/
                            //Accessed Date: 2021/11/10
                            echo "<td>";
                            echo "<button id='like_count". $row["activity_id"] . "' type='button' class='btn btn-danger' value='". $row["like_count"] ."' onclick='like_update(". $row["activity_id"] ."); this.onclick=null;'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-hand-thumbs-up' viewBox='0 0 16 16'>
                            <path d='M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z'/>
                            </svg><div id='like". $row["activity_id"] . "'>" . $row['like_count'] . "</div></button>";

                            //use the icon in bootstrap
                            //URL: https://icons.getbootstrap.com/icons/hand-thumbs-down/
                            //Accessed Date: 2021/11/12
                            echo "<button id='dislike_count". $row["activity_id"] . "' type='button' class='btn btn-primary' value='". $row["dislike_count"] ."' onclick='dislike_update(". $row["activity_id"] ."); this.onclick=null;'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-hand-thumbs-down' viewBox='0 0 16 16'>
                            <path d='M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z'/>
                            </svg><div id='dislike". $row["activity_id"] . "'>" . $row['dislike_count'] . "</div></button>";
                            echo "</td>";

                            echo "</tr>";
                            echo "</table>";
                            echo "</div>";
                        }
                    }
                }
                //if row number not bigger than 0, which means row number is 0
            }else if (strcmp($allarticles,$option2)==0){
                echo "<h3>Search Results: Showing activities based on title</h3>";
                $title = $_POST['keywords-input'];
                $querySQL = "SELECT * FROM activity WHERE activity_name LIKE " . "'%" . $title . "%'";
                // Learned SQL like keyword
                // URL: https://www.w3schools.com/sql/sql_ref_like.asp
                // Date Accessed: 12 October 2021
                $result = $conn->query($querySQL);
                //echo all the result
                if($result){
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = $result->fetch_assoc()){
                            echo "<div class='search-background'>";
                            echo "<table>";
                            echo "<tr>";

                            echo "<td class='postActivity'>";
                            echo "<h2>" . $row['activity_name'] . "</h2>";
                            echo "<p>". $row['activity_information'] ."</p>";
                            echo "</td>";
                            
                            echo "<td>";
                            echo "<button id='like_count". $row["activity_id"] . "' type='button' class='btn btn-danger' value='". $row["like_count"] ."' onclick='like_update(". $row["activity_id"] ."); this.onclick=null;'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-hand-thumbs-up' viewBox='0 0 16 16'>
                            <path d='M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z'/>
                            </svg><div id='like". $row["activity_id"] . "'>" . $row['like_count'] . "</div></button>";

                            echo "<button id='dislike_count". $row["activity_id"] . "' type='button' class='btn btn-primary' value='". $row["dislike_count"] ."' onclick='dislike_update(". $row["activity_id"] ."); this.onclick=null;'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-hand-thumbs-down' viewBox='0 0 16 16'>
                            <path d='M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z'/>
                            </svg><div id='dislike". $row["activity_id"] . "'>" . $row['dislike_count'] . "</div></button>";
                            echo "</td>";

                            echo "</tr>";
                            echo "</table>";
                            echo "</div>";
                        }
                    }
                }
            }else if (strcmp($allarticles,$option3)==0){
                echo "<h3>Search Results: Showing activities based on content</h3>";
                $content = $_POST['keywords-input'];
                $querySQL = "SELECT * FROM activity WHERE activity_information LIKE " . "'%" . $content . "%'";
                // Learned SQL like keyword
                // URL: https://www.w3schools.com/sql/sql_ref_like.asp
                // Date Accessed: 12 October 2021
                $result = $conn->query($querySQL);
                //echo all the result
                if($result){
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = $result->fetch_assoc()){
                            echo "<div class='search-background'>";
                            echo "<table>";
                            echo "<tr>";

                            echo "<td class='postActivity'>";
                            echo "<h2>" . $row['activity_name'] . "</h2>";
                            echo "<p>". $row['activity_information'] ."</p>";
                            echo "</td>";
                            
                            echo "<td>";
                            echo "<button id='like_count". $row["activity_id"] . "' type='button' class='btn btn-danger' value='". $row["like_count"] ."' onclick='like_update(". $row["activity_id"] ."); this.onclick=null;'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-hand-thumbs-up' viewBox='0 0 16 16'>
                            <path d='M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z'/>
                            </svg><div id='like". $row["activity_id"] . "'>" . $row['like_count'] . "</div></button>";

                            echo "<button id='dislike_count". $row["activity_id"] . "' type='button' class='btn btn-primary' value='". $row["dislike_count"] ."' onclick='dislike_update(". $row["activity_id"] ."); this.onclick=null;'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-hand-thumbs-down' viewBox='0 0 16 16'>
                            <path d='M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z'/>
                            </svg><div id='dislike". $row["activity_id"] . "'>" . $row['dislike_count'] . "</div></button>";
                            echo "</td>";

                            echo "</tr>";
                            echo "</table>";
                            echo "</div>";
                        }
                    }
                }

            }
        }
    ?>

    
    
<?php
    /* This part written by Siyuan Chen */
    if (!isset($_GET['activity-search']) && isset($_SESSION["email"])){
?>
    <div id="activity-comment">
        <table>
        <?php
        $querySQL = "SELECT * FROM activity ORDER BY activity_id ASC";
        $result = $conn->query($querySQL);
        //echo all the result
        //knowledge from CSCI2170 while loop the table
        if($result){
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()){
                    echo "<tr>";

                    echo "<td class='postActivity'>";
                    echo "<h2>" . $row['activity_name'] . "</h2>";
                    echo "<p>". $row['activity_information'] ."</p>";
                    echo "</td>";
                    
                    echo "<td>";
                    //button for users to click like
                    echo "<button id='like_count". $row["activity_id"] . "' type='button' class='btn btn-danger' value='". $row["like_count"] ."' onclick='like_update(". $row["activity_id"] ."); this.onclick=null;'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-hand-thumbs-up' viewBox='0 0 16 16'>
                    <path d='M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z'/>
                    </svg><div id='like". $row["activity_id"] . "'>" . $row['like_count'] . "</div></button>";

                    //button for users to click dislike
                    echo "<button id='dislike_count". $row["activity_id"] . "' type='button' class='btn btn-primary' value='". $row["dislike_count"] ."' onclick='dislike_update(". $row["activity_id"] ."); this.onclick=null;'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-hand-thumbs-down' viewBox='0 0 16 16'>
                    <path d='M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z'/>
                    </svg><div id='dislike". $row["activity_id"] . "'>" . $row['dislike_count'] . "</div></button>";
                    echo "</td>";

                    echo "</tr>";
                    
                }
            }
        }
        ?>
    
        </table>
    </div>
    
    <?php
    }
    ?>

    <?php
    
    if (isset($_SESSION["email"])) {   
    ?>
    <!--form to submit the users' idea-->
    <!--This part written by Shihui Gao-->
    <div id="background-color-activity">
    <form id="activity-form" action="includes/processactivity.php" method="POST">
        <h2>Interested Activity</h2>
        <input type="text" placeholder="Activity Name" id="activity-name-input" name="activity-name">
        <textarea rows="10" placeholder="Description of activity" id="description-activity" name="activity-information"></textarea>
        <input type="submit" value="SUBMIT" id="submit-activity" name="postActivity">
    </form>
    </div>
    <?php
        }
    ?>

    <?php
    
    ?>

    </div>
</section>