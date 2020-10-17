<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styling/browse_style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="main">
            <?php include "top.html" ?>

            <div class="content">
                <div class="sidebar">
                    <div class="filters">
                        <h4 style="color: black; padding: 0;">Tags:</h4>
                        <h5 class="t">Action</h5>
                        <h5 class="t">Adventure</h5>
                        <h5 class="t">Fighting</h5>
                        <h5 class="t">Platformer</h5>
                        <h5 class="t">Racing</h5>
                        <h5 class="t">Role-playing</h5>
                        <h5 class="t">Shooter</h5>
                        <h5 class="t">Sports</h5>
                        <h5 class="t">Simulation</h5>
                        <h5 class="t">Strategy</h5>
                    </div>
                </div>

                <div class="list">
                    <div id="card"> <?php include "cards.php" ?> </div>
                    <div id="card"> <?php include "cards.php" ?> </div>
                    <div id="card"> <?php include "cards.php" ?> </div>
                    <div id="card"> <?php include "cards.php" ?> </div>
                    <div id="card"> <?php include "cards.php" ?> </div>
                    <div id="card"> <?php include "cards.php" ?> </div>
                    <div id="card"> <?php include "cards.php" ?> </div>
                    <div id="card"> <?php include "cards.php" ?> </div>
                    <div id="card"> <?php include "cards.php" ?> </div>
                    <div id="card"> <?php include "cards.php" ?> </div>
                    <div id="card"> <?php include "cards.php" ?> </div>
                    <div id="card"> <?php include "cards.php" ?> </div>
                </div>
            </div>

            <?php include "foot.html" ?>
        </div>
    </body>
</html>