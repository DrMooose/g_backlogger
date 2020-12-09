<!DOCTYPE html>
    <head>
        <title>mygamelong/login</title>
        <link rel="stylesheet" href="../styling/login_style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="main">
        <?php include "../components/top.html" ?>
        
        <div class="content">
            <div id="login">
                <h2 style="color: #0c493b;">Login</h2>
                <h3>Username:</h3>
                <input type="text" placeholder="User1234">
                <h3>Password:</h3>
                <input type="password" placeholder="Password">
                <br>
                <button class="send"> <a href="profile.php">Login</a> </button>
                <h4>Don't have an account? <a href="#" id="sign" onclick="change1()" style="color: blue;">Sign Up</a>
            </div>

            <div id="sign_up">
                <h2 style="color: #0c493b;">Sign Up</h2>
                <h3>Email:</h3>
                <input type="text" placeholder="email@domain.com">
                <h3>Username:</h3>
                <input type="text" placeholder="User1234">
                <h3>Password:</h3>
                <input type="password" placeholder="Password">
                <br>
                <button class="send"> <a href="profile.php">Sign Up</a> </button>
                <h4>Have an account? <a href="#" id="log" onclick="change2()" style="color: blue;">Login</a>
            </div>
        </div>

        <?php include "../components/foot.html" ?>
    
    </div>
    </body>
    <script>
        function change1() {
            document.getElementById("login").style.display = "none";
            document.getElementById("sign_up").style.display = "block";
        }

        function change2() {
            document.getElementById("login").style.display = "block";
            document.getElementById("sign_up").style.display = "none";
        }
    </script>

</html>