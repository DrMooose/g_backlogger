<!DOCTYPE html>
    <head>
        <title> <!--api game title--> </title>
        <link rel="stylesheet" type="text/css" href="../styling/selected_style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>

        <?php include "../components/top.html" ?>

        <div class="content">
            <div class="pic">
                <img id="image" src="https://images.igdb.com/igdb/image/upload/t_1080p/co1rft.jpg">
                <button> <h4><a href="../pages/login.php"> + add to list </a></h4>  </button>
            </div>

            <div class="game_info">
                <h5>Title: Cyberpunk 2077</h5>
                <h5>Platform: Google Stadia, Xbox One, PlayStation 5, Xbox Series X and Series S, Microsoft Windows</h5>
                <h5>Genre: Role-Playing, Action RPG, Action RPG</h5>
                <h5>Release: December 10, 2020</h5>
                <h5>Developers: CD Projekt Red Studio</h5>
                <h5>Publishers: CD Projekt Red Studio</h5>
            </div>

            <div class="post">
                <h5>Recent Post/Reviews</h5>
                <hr>
                <div style="display: flex;">
                    <h5>User Post</h5>
                </div>
                <input type="text" placeholder="Enter Text" style="margin: 80px 650px;">
            </div>
        </div>

        <?php include "../components/foot.html" ?>
    </body>
</html>