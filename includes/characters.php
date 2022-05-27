<?php
    !defined('INIT_PHPV') && header("Location: ../index.php");

	/*
    Knowledge about direct access to PHP pages is forbidden, only use require
    URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
    Date Accessed: 2021/11/17
    */
?>

<?php
	require_once "includes/header.php";
?>
<!-- This page written by Minglu Gu-->
<!-- characters page-->
<main>
    <div class="character-containter">
        <img id="img1" src="img/Characters/character-banner.jpg" alt="black widow picture">
    </div>

    <br>
    <br>

    <div id="feature">
        <h3 id="char-header">Feature Characters</h3>
    </div>

    <div id="div1">
        <div id="row1">
            <div id="col">
                <div id="img-char">
                    <img src="img/Characters/thor.jpg" class="img img-responsive" alt="Thore image">
                </div>
                <div>
                    <p id="char-page">Thor</p>
                </div>
            </div>
            <div id="col" >
                <div id="img-char">
                    <img src="img/Characters/blackwidow.jpg" class="img img-responsive" alt="Blackwidow image">
                    <p id="char-page">Blackwidow</p>
                </div>
            </div>
            <div id="col" >
                <div id="img-char">
                    <img src="img/Characters/captainA.jpg" class="img img-responsive" alt="Captain America image">
                    <p id="char-page">Captain America</p>
                </div>
            </div>
            <div id="col" >
                <div id="img-char">
                    <img src="img/Characters/green.jpg" class="img img-responsive" alt="Hulk image">
                    <p id="char-page">Hulk</p>
                </div>
            </div>
            <div id="col" >
                <div id="img-char">
                    <img src="img/Characters/wolverine.jpg" class="img img-responsive" alt="Wolverine image">
                    <p id="char-page">Wolverine</p>
                </div>
            </div>
        </div>
    </div>

    <div id="feature">
        <h3 id="char-header">Other Characters</h3>
    </div>

    <div id="div1">
        <div id="row1">
            <div id="col">
                <div id="img-char">
                    <img src="img/Characters/x-23.jpg" class="img img-responsive" alt="x-23 image">
                    <p id="char-page">X-23</p>
                </div>
            </div>
            <div id="col" >
                <div id="img-char">
                    <img src="img/Characters/scarlet-witch.jpg" class="img img-responsive" alt="the Scarlet Witch image">
                    <p id="char-page">the Scarlet Witch</p>
                </div>
            </div>
            <div id="col" >
                <div id="img-char">
                    <img src="img/Characters/hawkeye.jpg" class="img img-responsive" alt="Hawkeye image">
                    <p id="char-page">Hawkeye</p>
                </div>
            </div>
            <div id="col" >
                <div id="img-char">
                    <img src="img/Characters/loki.jpg" class="img img-responsive" alt="Loki image">
                    <p id="char-page">Loki</p>
                </div>
            </div>
            <div id="col" >
                <div id="img-char">
                    <img src="img/Characters/shang-chi.jpg" class="img img-responsive" alt="Shang-chi image">
                    <p id="char-page">Shang-chi</p>
                </div>
            </div>
        </div>
    </div>    

</main>


<?php
	require_once "includes/footer.php";
?>
