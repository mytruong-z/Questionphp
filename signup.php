<!DOCTYPE html>
<html>

<head>
    <title>Form signup</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jsforex.js"></script>
</head>

<body>
    <div class="form">
        <ul class="tab-group">
            <li class="tab active"><a href="signup.php">Sign Up</a></li>
            <li class="tab"><a href="login.php">Log In</a></li>
        </ul>
        <div class="tab-content">
            <h1>Sign Up for Free</h1>
            <form action="dangky.php" method="post">
                <div class="top-row">
                    <div class="field-wrap">
                        <input type="text" name="first_name" required placeholder="First name*">
                    </div>
                    <div class="field-wrap">
                        <input type="text" name="last_name" required placeholder="Last name*">
                    </div>
                </div>
                <div class="field-wrap">
                    <input type="text" name="username" required placeholder="Username*">
                </div>
                <div class="field-wrap">
                    <input type="text" name="email" required placeholder="Email*">
                </div>
                <div class="field-wrap">
                    <input type="password" name="pass" required placeholder="Set a password*">
                </div>
                <input id="submit" type="submit" value="Get Started" class="button button-block">

            </form>
        </div>
    </div>
</body>

</html>