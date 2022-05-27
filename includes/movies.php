<?php
    !defined('INIT_PHPV') && header("Location: ../index.php");

	/*
    Knowledge about direct access to PHP pages is forbidden, only use require
    URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
    Date Accessed: 2021/11/17
    */
?>
<!--
    1. Posters and movie-information used in movies.php
    URL: https://www.listchallenges.com/complete-list-of-marvel-movies-in-release-order
    Date accessed: Dec 05, 2021

    2. Characters name used in movies.php
    URL: https://www.marvel.com/characters
    Date accessed: Dec 05, 2021

    3. How to make responsive page using display:none and div
    URL: https://stackoverflow.com/questions/18890053/php-conditions-depending-on-window-width-media-queries
    Date accessed: Dec 05, 2021
--->
<!--This page written by Yiyun Gong-->
<div id="title_container">
<h1 id="movie_h1">MOVIE</h1>
</div>

<div id="laptop-view">
    <div class="movie_row">

        <div class="movie_container">
            <img src="img/Movies/IronMan.jpg" class="movie_poster" alt="IronMan1-Poster">
            <div class="movie_info">
                <h2 class="movie_h2">Iron Man</h2>
                <h3 class="movie_h3">Iron Man</h3>
                <h3 class="movie_h3">(Tony Stark)</h3>
                <h4 class="movie_h4">2008</h4>
            </div>
        </div>

        <div class="movie_container">
            <img src="img/Movies/Hulk.jpg" class="movie_poster" alt="Hulk1-Poster">
            <div class="movie_info">
                <h2 class="movie_h2">The Incredible Hulk</h2>
                <h3 class="movie_h3">Hulk</h3>
                <h3 class="movie_h3">(Bruce Banner)</h3>
                <h4 class="movie_h4">2008</h4>
            </div>
        </div>

        <div class="movie_container">
            <img src="img/Movies/IronMan2.jpg" class="movie_poster" alt="IronMan2-Poster">
            <div class="movie_info">
                <h2 class="movie_h2">Iron Man 2</h2>
                <h3 class="movie_h3">Iron Man & Whiplash</h3>
                <h3 class="movie_h3">(Tony Stark) & (Ivan Vanko)</h3>
                <h4 class="movie_h4">2010</h4>
            </div>
        </div>

        <div class="movie_container">
            <img src="img/Movies/Thor.jpg" class="movie_poster" alt="Thor1-Poster">
            <div class="movie_info">
                <h2 class="movie_h2">Thor</h2>
                <h3 class="movie_h3">Thor</h3>
                <h4 class="movie_h4">2011</h4>
            </div>
        </div>

        <div class="movie_container">
            <img src="img/Movies/CaptainAmerica.jpg" class="movie_poster" alt="CaptainAmerica1-Poster">
            <div class="movie_info">
                <h2 class="movie_h2">Captain America: </h2>
                <h2 class="movie_h2">The First Avenger</h2>
                <h3 class="movie_h3">Captain America & Red Skull</h3>
                <h3 class="movie_h3">(Steve Rogers) & (Adolf Hitler)</h3>
                <h4 class="movie_h4">2011</h4>
            </div>
        </div>
    </div>

    <div class="movie_row" >
        <div class="movie_container">
            <img src="img/Movies/Avengers.jpg" class="movie_poster" alt="Avengers-Poster">
            <div class="movie_info">
                <h2 class="movie_h2">The Avengers</h2>
                <h3 class="movie_h3">Avengers</h3>
                <h4 class="movie_h4">2012</h4>
            </div>
        </div>

        <div class="movie_container">
            <img src="img/Movies/IronMan3.jpg" class="movie_poster" alt="IronMan3-Poster">
            <div class="movie_info">
                <h2 class="movie_h2">Iron Man 3</h2>
                <h3 class="movie_h3">Iron Man & Mandarin</h3>
                <h3 class="movie_h3">(Tony Stark) & Mandarin</h3>
                <h4 class="movie_h4">2013</h4>
            </div>
        </div>

        <div class="movie_container">
            <img src="img/Movies/Thor2.jpg" class="movie_poster" alt="Thor2-Poster">
            <div class="movie_info">
                <h2 class="movie_h2">Thor: The Dark World</h2>
                <h3 class="movie_h3">Thor & Loki</h3>
                <h4 class="movie_h4">2013</h4>
            </div>
        </div>

        <div class="movie_container">
            <img src="img/Movies/CaptainAmerica2.jpg" class="movie_poster" alt="CaptainAmerica2-Poster">
            <div class="movie_info">
                <h2 class="movie_h2">Captain America: The Winter Soldier</h2>
                <h3 class="movie_h3">Captain America & Winter Soldier</h3>
                <h3 class="movie_h3">(Steve Rogers) & (Bucky Barnes)</h3>
                <h4 class="movie_h4">2014</h4>
            </div>
        </div>

        <div class="movie_container">
            <img src="img/Movies/Guardians.jpg" class="movie_poster" alt="Guardians-Poster">
            <div class="movie_info">
                <h2 class="movie_h2">Guardians of the Galaxy</h2>
                <h3 class="movie_h3">The Guardians of the Galaxy</h3>
                <h4 class="movie_h4">2014</h4>
            </div>
        </div>
    </div>
</div>

<div id="mobile-view">
    <div class="movie_container">
        <img src="img/Movies/IronMan.jpg" class="movie_poster" alt="IronMan1-Poster">
        <div class="movie_info">
            <h2 class="movie_h2">Iron Man</h2>
            <h3 class="movie_h3">Iron Man</h3>
            <h3 class="movie_h3">(Tony Stark)</h3>
            <h4 class="movie_h4">2008</h4>
        </div>
    </div>

    <div class="movie_container">
        <img src="img/Movies/Hulk.jpg" class="movie_poster" alt="Hulk1-Poster">
        <div class="movie_info">
            <h2 class="movie_h2">The Incredible Hulk</h2>
            <h3 class="movie_h3">Hulk</h3>
            <h3 class="movie_h3">(Bruce Banner)</h3>
            <h4 class="movie_h4">2008</h4>
        </div>
    </div>

    <div class="movie_container">
        <img src="img/Movies/IronMan2.jpg" class="movie_poster" alt="IronMan2-Poster">
        <div class="movie_info">
            <h2 class="movie_h2">Iron Man 2</h2>
            <h3 class="movie_h3">Iron Man & Whiplash</h3>
            <h3 class="movie_h3">(Tony Stark) & (Ivan Vanko)</h3>
            <h4 class="movie_h4">2010</h4>
        </div>
    </div>

    <div class="movie_container">
        <img src="img/Movies/Thor.jpg" class="movie_poster" alt="Thor1-Poster">
        <div class="movie_info">
            <h2 class="movie_h2">Thor</h2>
            <h3 class="movie_h3">Thor</h3>
            <h4 class="movie_h4">2011</h4>
        </div>
    </div>

    <div class="movie_container">
        <img src="img/Movies/CaptainAmerica.jpg" class="movie_poster" alt="CaptainAmerica1-Poster">
        <div class="movie_info">
            <h2 class="movie_h2">Captain America: </h2>
            <h2 class="movie_h2">The First Avenger</h2>
            <h3 class="movie_h3">Captain America & Red Skull</h3>
            <h3 class="movie_h3">(Steve Rogers) & (Adolf Hitler)</h3>
            <h4 class="movie_h4">2011</h4>
        </div>
    </div>

    <div class="movie_container">
        <img src="img/Movies/Avengers.jpg" class="movie_poster" alt="Avengers-Poster">
        <div class="movie_info">
            <h2 class="movie_h2">The Avengers</h2>
            <h3 class="movie_h3">Avengers</h3>
            <h4 class="movie_h4">2012</h4>
        </div>
    </div>

    <div class="movie_container">
        <img src="img/Movies/IronMan3.jpg" class="movie_poster" alt="IronMan3-Poster">
        <div class="movie_info">
            <h2 class="movie_h2">Iron Man 3</h2>
            <h3 class="movie_h3">Iron Man & Mandarin</h3>
            <h3 class="movie_h3">(Tony Stark) & Mandarin</h3>
            <h4 class="movie_h4">2013</h4>
        </div>
    </div>

    <div class="movie_container">
        <img src="img/Movies/Thor2.jpg" class="movie_poster" alt="Thor2-Poster">
        <div class="movie_info">
            <h2 class="movie_h2">Thor: The Dark World</h2>
            <h3 class="movie_h3">Thor & Loki</h3>
            <h4 class="movie_h4">2013</h4>
        </div>
    </div>

    <div class="movie_container">
        <img src="img/Movies/CaptainAmerica2.jpg" class="movie_poster" alt="CaptainAmerica2-Poster">
        <div class="movie_info">
            <h2 class="movie_h2">Captain America: The Winter Soldier</h2>
            <h3 class="movie_h3">Captain America & Winter Soldier</h3>
            <h3 class="movie_h3">(Steve Rogers) & (Bucky Barnes)</h3>
            <h4 class="movie_h4">2014</h4>
        </div>
    </div>

    <div class="movie_container">
        <img src="img/Movies/Guardians.jpg" class="movie_poster" alt="Guardians-Poster">
        <div class="movie_info">
            <h2 class="movie_h2">Guardians of the Galaxy</h2>
            <h3 class="movie_h3">The Guardians of the Galaxy</h3>
            <h4 class="movie_h4">2014</h4>
        </div>
    </div>
</div>