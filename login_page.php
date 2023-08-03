<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <style>
        html {
            height: 100%;
        }

        h1 {
            font-family: sans-serif;
            font-style: bold;
            font-size: 50pt;
            color: white;
        }

        #title {
            display: inline;
        }

        .float_form {
            float: left;
        }

        .center_form {
            float: center;
        }

        body {
            font-family: sans-serif;
            margin: 0px;
            padding: 0;
            background: linear-gradient(#141e30, #243b55);
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgba(0, 0, 0, .5);
        }

        li {
            display: inline;
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 36px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #E7E7F6;
            color: #030337;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, .5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 30px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }

        .login-box form .anim {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #03e9f4;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }

        .login-box .anim :hover {
            background: #03e9f4;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
        }


        .login-box .anim span {
            position: absolute;
            display: block;
        }

        .login-box .anim span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03e9f4);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .login-box .anim span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #03e9f4);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .login-box .anim span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #03e9f4);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }

        .login-box .anim span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #03e9f4);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }

        a {
            color: white;
            text-decoration: none;
            padding-left: 20px;
        }

        a:hover {
            background-color: white;
            color: #030337;
        }

        form {
            color: white;
        }
    </style>

</head>

<body>
    <!-- top navigation bar -->
    <div>
        <ul>
            <li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
            <li><a href="home_page.php"><i class="fa fa-ship" aria-hidden="true"></i> About Us</a></li>
            <li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
            <li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
        </ul>
    </div>
    <br>
    <br>
    <br>

    <div class="login-box">
        <h2>Login</h2>
        <form action="login_handler.php" method="POST">
            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <strong>User Type:</strong><br>
            <input type='radio' name='user_type' value='Customer' checked />
            Customer<br>
            <input type='radio' name='user_type' value='Administrator' />
            Administrator
            <br>

            <?php
            if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
                echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
            }
            ?>

            <div class="anim">
                <input style="position: relative;
            display: inline-block;
            background: transparent;
            border: none;
            color: #03e9f4;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            letter-spacing: 4px" type="submit" name="Login" value="Login">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </form>
        <br>

        <a style="position: relative;
            display: inline-block;
            background: transparent;
            border: none;
            color: #03e9f4;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;" href="new_user.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
            </svg> Create New User Account?</a>
    </div>


</body>
</body>

</html>