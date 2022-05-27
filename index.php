<?php
    define('INIT_PHPV', true);
	require_once "includes/header.php";
?>
    <main>
        <?php
            /*style the carousel
            URL: https://getbootstrap.com/docs/5.1/examples/carousel/
            Author: Mark Otto, Jacob Thornton, and Bootstrap contributors
            Accessed Date: 2021/11/6*/
            if (!isset($_GET['characters']) && !isset($_GET['movies']) && !isset($_GET['games']) && !isset($_GET['activities']) && !isset($_GET['contact']) && !isset($_GET['login']) && !isset($_GET['signup'])){
        ?>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <!--
                        index picture
                        URL: https://wall.alphacoders.com/big.php?i=327321&lang=Chinese
                        Accessed Date: 2021/11/15
                    -->
                    <img class="bd-placeholder-img" src="img/index-characters.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Characters</h1>
                            <p>You can learn about the character on this page</p>
                            <p><a class="btn btn-lg btn-secondary" href="index.php?characters">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <!--
                        index picture
                        URL: https://wall.alphacoders.com/big.php?i=1097069&lang=Chinese
                        Accessed Date: 2021/11/15
                    -->
                    <img class="bd-placeholder-img" src="img/index-movies.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Movies</h1>
                            <p>You can learn about the movies on this page</p>
                            <p><a class="btn btn-lg btn-secondary" href="index.php?movies">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <!--
                        index picture
                        URL: https://wall.alphacoders.com/big.php?i=789095&lang=Chinese
                        Accessed Date: 2021/11/15
                    -->
                    <img class="bd-placeholder-img" src="img/index-games.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Games & Comic Books</h1>
                            <p>You can learn about the Games & Comic Books on this page</p>
                            <p><a class="btn btn-lg btn-secondary" href="index.php?games">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <!--
                        index picture
                        URL: https://wall.alphacoders.com/big.php?i=929202&lang=Chinese
                        Accessed Date: 2021/11/15
                    -->
                    <img class="bd-placeholder-img" src="img/index-activities.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Activities</h1>
                            <p>You can learn about the activities on this page</p>
                            <p><a class="btn btn-lg btn-secondary" href="index.php?activities">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>

        <hr class="featurette-divider">

        <!--
            style use bootstrap
            https://getbootstrap.com/docs/5.1/examples/blog/
            author: Mark Otto, Jacob Thornton, and Bootstrap contributors
            Accessed Date: 2021/11/6
        -->
        <div class="container">
        <div class="row g-5">
            <div class="col-md-8">
                <section class="index-character-picture">
                    <div class="container">
                        <h2>Characters</h2>
                        <img src="img/Characters/thor.jpg" class="img-thumbnail" alt="thor">
                        <img src="img/Characters/blackwidow.jpg" class="img-thumbnail" alt="blackwidow">
                        <img src="img/Characters/captainA.jpg" class="img-thumbnail" alt="captainA">
                        <img src="img/Characters/hawkeye.jpg" class="img-thumbnail" alt="hawkeye">
                        <img src="img/Characters/wolverine.jpg" class="img-thumbnail" alt="wolverine">
                        <a href="index.php?characters" class="btn btn-light">Learn More</a>

                    </div>
                </section>

                <hr class="featurette-divider">

                <section class="index-movies-picture">
                    <div class="container">
                        <h2>Movies</h2>
                        
                        <img src="img\Movies\IronMan.jpg" class="img-thumbnail" alt="IronMan1-Poster">
                        <img src="img\Movies\Hulk.jpg" class="img-thumbnail" alt="Hulk1-Poster">
                        <img src="img\Movies\IronMan2.jpg" class="img-thumbnail" alt="IronMan2-Poster">
                        <img src="img\Movies\Thor.jpg" class="img-thumbnail" alt="Thor1-Poster">
                        <img src="img\Movies\CaptainAmerica.jpg" class="img-thumbnail" alt="CaptainAmerica1-Poster">
                        <a href="index.php?movies" class="btn btn-light">Learn More</a>

                    </div>
                </section>

                <hr class="featurette-divider">

                <section class="index-games-picture">
                    <div class="container">
                        <h2>Games & Comic Books</h2>
                        <img src="img/Games/Game/BlackPanther.webp" class="img-thumbnail" alt="BlackPanther">
                        <img src="img/Games/Game/Captain.webp" class="img-thumbnail" alt="Captain">
                        <img src="img/Games/Game/IronMan.webp" class="img-thumbnail" alt="IronMan">
                        <img src="img/Games/Game/Thanos.webp" class="img-thumbnail" alt="Thanos">
                        <img src="img/Games/Game/SpiderMan.webp" class="img-thumbnail" alt="SpiderMan">
                        <a href="index.php?games" class="btn btn-light">Learn More</a>
                    </div>
                </section>

                <hr class="featurette-divider">

                <section class="index-activity">
                    <div class="container">
                        <h2>Activities</h2>
                        <h3>Large-scale virtual interactive experience</h3>
                        <p>In the VR image hall, 
                        customers can train, play games, and save the world with superheroes 
                        such as Iron Man and Hulk in Marvel movies.</p>
                        
                        <h3>Wax figures</h3>
                        <p> Customers can take photos of wax figures of superheroes 
                        like Iron Man, Hulk, Thor and Captain America. 
                        Commentator tell the story of these superheroes.</p>

                        <h3>Prize Draw</h3>
                        <p> Every Customer have an chance to entry to 
                        the prize draw and win the poster of superheroes.</p>
                        <a href="index.php?activities" class="btn btn-light">Learn More</a>
                    </div>
                </section>
            </div>


            <div class="col-md-4">
                <div class="position-sticky">
                    <div class="p-4 mb-3 bg-light rounded">
                    
                    <h3>About</h3>
                    <p class="mb-0">Iron Man 6 Group Project</p>
                    </div>

                    <div>
                        <h3>Recent News</h3>

                        <div class="family-news">
                        <div class="news">
                            <div class="news-img">
                            <img src="img/news1.jpg" alt="spider-man: No way Home" class="news-image">
                            </div>

                            <!--
                                picture and content used from marvel.com
                                URL: https://www.marvel.com/articles/movies/spider-man-no-way-home-new-posters-villains
                                Accessed Date: 2021/11/10
                            -->
                            <div class="news-info">
                                <h4 class="news-title">'Spider-Man: No Way Home': New Posters Tease Returning Villains</h4>
                                <h5 class="news-author">BY RACHEL PAIGE</h5>
                                <p class="news-info">All three villains return in Spider-Man: No Way Home, and a trio of newly released posters show Spider-Man coming face to face with these foes — he just might not know it yet.</p>
                                <a href="https://www.marvel.com/articles/movies/spider-man-no-way-home-new-posters-villains" class="btn btn-dark">Learn more about news</a>
                            </div>
                        </div>

                        <div class="news" id="second-news">
                            <div class="news-img">
                            <img src="img/news2.jpeg" alt="ant-man art by mark James Hiblin" class="news-image">
                            </div>
                            <!--
                                picture and content used from marvel.com
                                URL: https://www.marvel.com/articles/movies/ant-man-wasp-kang-quantumania-wraps-filming
                                Accessed Date: 2021/11/10
                            -->
                            <div class="news-info">
                                <h4 class="news-title">‘Ant-Man and The Wasp: Quantumania’ Wraps Filming</h4>
                                <h5 class="news-author">BY CHRISTINE DINH</h5>
                                <p class="news-info">Revealed during The Walt Disney Company’s 2020 Investor Day presentation by Kevin Feige, president, Marvel Studios, and chief creative officer, Marvel Entertainment, the third installment in the Ant-Man franchise sees 2021's Sexiest Man of the Year Paul Rudd reprising his role as Ant-Man (Scott Lang), alongside Evangeline Lilly as Wasp (Hope Van Dyne).</p>
                                <a href="https://www.marvel.com/articles/movies/ant-man-wasp-kang-quantumania-wraps-filming" class="btn btn-dark">Learn more about news</a>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
        </div>

    </div>

        <?php
            }else if (isset($_GET['characters'])){
                require_once "includes/characters.php";
            }else if (isset($_GET['movies'])){
                require_once "includes/movies.php";
            }else if (isset($_GET['games'])){
                require_once "includes/games.php";
            }else if (isset($_GET['activities'])){
                require_once "includes/activities.php";
            }else if (isset($_GET['contact'])){
                require_once "includes/contact.php";
            }else if (isset($_GET['login'])){
                require_once "includes/login.php";
            }else if (isset($_GET['signup'])){
                require_once "includes/signup.php";
            }
        
        ?>

    </main>

<?php
	require_once "includes/footer.php";
?>