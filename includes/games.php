<?php
!defined('INIT_PHPV') && header("Location: ../index.php");

/*
Knowledge about direct access to PHP pages is forbidden, only use require
URL: http://blog.sina.com.cn/s/blog_5816512201009hnx.html
Date Accessed: 2021/11/17
*/
?>
<!-- This part written by Chenwen Wang-->
<main id="Games-container">
    <div id="Games-banner">
        <div class="Games-banner-text">
            <h1>Games & Comic Books</h1>
            <p>Enjoy your shopping experience!</p>
        </div>
        <img src="img/Games/Game/mb_marvel.webp" alt="Games-banner-image">
    </div>

    <div id="card-layout" class="container">
        <h1>Games</h1>
        <hr>
        <div class="row">
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Game/Thanos.webp" class="img-responsive" alt="Thanos image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$839.99</p>
                        <s>$1999.99</s>
                    </div>
                        <p>Thanos the Conqueror Pewter Figurine by Royal Selangor – Limited Edition</p>
                    </div>
                    <button class="btn btn-warning" onclick="popwin()">Buy</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Game/Thor.webp" class="img-responsive" alt="Thor image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$789.99</p>
                        <s>$1999.99</s>
                    </div>
                        <p>Thor God of Thunder Pewter Figurine by Royal Selangor – Limited Edition</p>
                    </div>
                    <button class="btn btn-warning" onclick="popwin()">Buy</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Game/BlackPanther.webp" class="img-responsive" alt="BlackPanther image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$599.99</p>
                        <s>$1999.99</s>
                    </div>
                        <p>Black Panther Pewter Figurine by Royal Selangor – Limited Edition</p>
                    </div>
                    <button class="btn btn-warning" onclick="popwin()">Buy</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Game/Captain.webp" class="img-responsive" alt="Captain image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$789.99</p>
                        <s>$1999.99</s>
                    </div>
                        <p>Captain America Resolute Pewter Figurine by Royal Selangor – Limited Edition</p>
                    </div>
                    <button class="btn btn-warning" onclick="popwin()">Buy</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Game/SpiderMan.webp" class="img-responsive" alt="SpiderMan image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$589.99</p>
                        <s>$1999.99</s>
                    </div>
                        <p>Spider-Man Pewter Figurine by Royal Selangor – Limited Edition</p>
                    </div>
                    <button class="btn btn-warning" onclick="popwin()">Buy</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Game/IronMan.webp" class="img-responsive" alt="IronMan image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$589.99</p>
                        <s>$1999.99</s>
                    </div>
                        <p>Iron Man Pewter Figurine by Royal Selangor – Limited Edition</p>
                    </div>
                    <button class="btn btn-warning" disabled="disabled" onclick="popwin()">Out of stock</button>
                </div>
            </div>
        </div>

        <h1>Comic Books</h1>
        <hr>
        <div class="Comic row">
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Comic/AgeOfUlthron.jpg" class="img-responsive" alt="AgeOfUlthron image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$39.99</p>
                    </div>
                        <p>Age of Ultron #1</p>
                        <p>Bendis, Hitch</p>
                    </div>
                    <button class="btn btn-warning" onclick="popwin()">Buy</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Comic/Deadpool.jpg" class="img-responsive" alt="Deadpool image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$29.99</p>
                    </div>
                        <p>Deadpool Kills the Marvel Universe #3</p>
                        <p>Bunn, Andrews</p>
                    </div>
                    <button class="btn btn-warning" onclick="popwin()">Buy</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Comic/DeadpoolK.jpg" class="img-responsive" alt="DeadpoolK image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$59.99</p>
                        <s>$69.99</s>
                    </div>
                        <p>Deadpool Kills the Marvel Universe #4</p>
                        <p>Bunn, Andrews</p>
                    </div>
                    <button class="btn btn-warning" onclick="popwin()">Buy</button>
                </div>
            </div>
        </div>

        <div class="Comic row">
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Comic/SpiderMan.jpg" class="img-responsive" alt="SpiderMan image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$47.99</p>
                        <s>$49.99</s>
                    </div>
                        <p>Amazing Spider-Man Presents: Anti-Venom - New Ways to Live</p>
                        <p>Wells, Siqueira</p>
                    </div>
                    <button class="btn btn-warning" onclick="popwin()">Buy</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Comic/Wolverine.jpg" class="img-responsive" alt="Wolverine image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$29.99</p>
                    </div>
                        <p>Wolverine: Old Man Logan (2010)</p>
                    </div>
                    <button class="btn btn-warning" onclick="popwin()">Buy</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="core-card container">
                    <img src="img/Games/Comic/Original-Sin.jpg" class="img-responsive" alt="Original image">
                    <div class="intro">
                    <div class="price-tag">
                        <p>$9.99</p>
                        <s>$10.99</s>
                    </div>
                        <p>Original Sin #1</p>
                        <p>Aaron, Tedesco</p>
                    </div>
                    <button class="btn btn-warning" onclick="popwin()">Buy</button>
                </div>
            </div>
        </div>
    </div>
    <div id="thank" class="container">
        <?php
        if (isset($_SESSION["email"])) {
            echo "<h1>Thank for your buying!&#9786</h1>";
        } else {
            echo "<h1>Sorry, please login.</h1>";
            echo "<button type='button' onclick='location.href=\"index.php?login\"' class='btn btn-warning me-2'>Login</button>";
        }
        ?>
        <button class="btn btn-success" onclick="closewin()">Close</button>
    </div>
    <div id="filter"></div>
</main>
<!--Reference:
https://www.cnblogs.com/phper8/p/10724862.html
https://www.shopdisney.com/movies-shows/marvel/?srule=price-high-to-low&start=0&sz=24-->