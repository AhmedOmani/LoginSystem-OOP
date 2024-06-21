<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        
        <div class="title-text">
            <div class="title login">Login Form</div>

            <div class="title signup">Signup Form</div>
        </div>


    <div class="form-container">
       
        <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
        </div>

        <div class="form-inner">
            <form action = "includes/login-inc.php" method="POST" class= "login">
                <div class="field">
                    <input type="text" name = "username" placeholder="Username" required>
                </div>

                <div class="field">
                    <input type="password" name = "password" placeholder="Password" required>
                </div>

                <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" name = "submit" value="Login">
                </div>
                
                <div class="signup-link">Not a member? <a href="">Signup now</a></div>
            </form>

            <form action="includes/signup-inc.php" method="POST" class="signup">
                <div class = "field">
                    <input type="text" placeholder="Username" name = "username" required>
                </div>

                <div class="field">
                    <input type="email" placeholder="Email Address" name = "email" required>
                </div>

                <div class="field">
                    <input type="password" placeholder="Password" name = "password" required>
                </div>

                <div class="field">
                    <input type="password" placeholder="Confirm password" name = "Reppassword" required>
                </div>

                <div class="field btn">
                    <div class="btn-layer"></div>
                        <input type="submit" name = "submit" value="Signup">
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
</body>

</html>