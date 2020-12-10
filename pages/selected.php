<!DOCTYPE html>
    <head>
        <title> mygamelog/page </title>
        <link rel="stylesheet" type="text/css" href="../styling/selected_style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main">
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

            <div class="score">
                <h2>Metascore</h2>
                <div class="numb">91</div>
            </div>

            <div class="post">
                <h5>Recent Post/Reviews</h5>
                <hr>
                <h5>User1234 Review</h5>
                <textarea placeholder="Enter Text"></textarea>
                <button class="user_post">POST</button>
                <h5>DrMoose Review</h5>
                <p>Good Game. Well made. Great Graphics. Great story. 10/10. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lacinia lobortis ante, sed sagittis mauris varius non. Proin sit amet orci velit. Maecenas magna ex, facilisis eget scelerisque vel, vulputate imperdiet purus. Curabitur ac purus ut justo porta accumsan et et neque. Pellentesque a semper nulla, vitae egestas mi. Curabitur vel odio rutrum, pharetra nunc quis, aliquam enim. Proin placerat diam pellentesque laoreet efficitur. Etiam consectetur lectus ut velit hendrerit hendrerit. Ut sed ultricies ipsum, ac tincidunt arcu. Donec eu condimentum lectus. Donec hendrerit erat est. Pellentesque quis tortor quam. Phasellus facilisis, diam ut molestie hendrerit, magna dui posuere justo, et maximus libero quam quis libero. Cras at nibh tempor, ullamcorper risus et, semper nisi. In augue metus, malesuada quis blandit id, interdum rhoncus ante. Morbi sollicitudin felis vitae augue finibus consequat.</p>
            </div>
        </div>

        <?php include "../components/foot.html" ?>
        </div>
    </body>
</html>