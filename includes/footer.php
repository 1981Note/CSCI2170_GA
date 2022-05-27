<?php
    !defined('INIT_PHPV') && header("Location: ../index.php");

	/*
    Knowledge about direct access to PHP pages is forbidden, only use require
    URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
    Date Accessed: 2021/11/17
    */
?>
        <!--
            Knowledge about footer in bootstrap
            URL: https://getbootstrap.com/docs/5.1/examples/footers/
            Author: Mark Otto, Jacob Thornton, and Bootstrap contributors
            Accessed Date: 2021/11/10
        -->
        
        <!--This part written by Siyuan Chen-->
        <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="index.php?characters" class="nav-link px-2 text-muted">Characters</a></li>
                <li class="nav-item"><a href="index.php?movies" class="nav-link px-2 text-muted">Movies</a></li>
                <li class="nav-item"><a href="index.php?games" class="nav-link px-2 text-muted">Games & Comic Books</a></li>
                <li class="nav-item"><a href="index.php?activities" class="nav-link px-2 text-muted">Activities</a></li>
                <li class="nav-item"><a href="index.php?contact" class="nav-link px-2 text-muted">Contact Us</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2021, Tiger News. All rights reserved.</p>
        </footer>
        </div>
    
        <!--connect js in is folder-->
        <script src="js/script.js"></script>
        <!--connect js library in bootstrap-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	</body>
</html>