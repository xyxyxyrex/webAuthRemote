<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/splash.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="parentWrapper">
    <div class="leftWrapper">
        <div class="textArea">
            <h1>Relax.Brew.Enjoy</h1>
            <h3>A sanctuary of taste and tranquility. Experience a delightful fusion of flavors and ambience at Mellow Brews, where exceptional beverages and delectable cuisine harmoniously converge.</h3>
        </div>
        <img src="assets/imgs/pic15.jpg" class="background-image">
    </div>


    <div class="rightWrapper">
    <div class="loginForm">
        <form action="registerQuery.php" method="POST">
        <div class="logoImage">
            <img src="logoName.png">
            </div>
                <h1>Register an Account:</h1>
                    </br>
            <label for="firstname">First Name</label>
                    </br>
                <input id="firstname" type="text" name="firstname" placeholder="First Name">
                    </br>
            <label for="lastname">Last Name</label>
                    </br>
                <input id="lastname" type="text" name="lastname" placeholder="Last Name">
                    </br>
            <label for="username">Username</label>
                    </br>
                <input id="username" type="text" name="username" placeholder="Enter your username">
                    </br>
            <label for="password">Password</label>
                    </br>
                <input id="password" type="password" name="password" placeholder="Enter your password">
                </br>
                </br>
                </br>
                <input type="submit" name="register">

                <br><br><br><br>
        </form>
    </div>
    </div>
</div>
</body>
</html>