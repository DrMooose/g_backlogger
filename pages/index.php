<!DOCTYPE html>
    <head>
        <title>mygamelog.online</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styling/home_style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <!---load header file--->
            <?php include "../components/top.html" ?>

            <!---show popular and new content--->
            <div class="content">
               
                <div class="popular">
                    <h2>Popular Games</h2>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="https://blog.playstation.com/tachyon/2020/09/50382753728_4bd6b35aa4_k.jpg?resize=1088,612&crop_strategy=smart" class="d-block mx-auto" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Genshin Impact</h1>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="https://images.hdqwalls.com/download/best-nature-image-1440x900.jpg" class="d-block mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="..." class="d-block mx-auto" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                <div class="new_games">
                    <h2>New Games</h2>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="https://img.youtube.com/vi/XSc17QXxfyU/maxresdefault.jpg" class="d-block mx-auto" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Baldur's Gate 3</h1>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="https://images.hdqwalls.com/download/best-nature-image-1440x900.jpg" class="d-block mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="..." class="d-block mx-auto" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <!---load footer file--->
            <?php include "../components/foot.html" ?>
        </div>
        <script scr="script.js"></script>
    </body>
</html>
