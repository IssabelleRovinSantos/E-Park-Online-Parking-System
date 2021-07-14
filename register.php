<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("./csb.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .text-align-center {
            text-align: center;
        }

        .text-align-left {
            text-align: left;
        }

        .panel {
            background-color: white;
            padding: 2rem 2rem 5rem 2rem;
            border-radius: 5px;
            box-shadow: 0 0 5px black;
        }
    </style>
</head>

<body>
    <br />
    <center>
    <div class="signup-form">
    <img src="user.jpg" width="200" height="200">
            <h1><b>Don't have an account yet? Register Now!</b></h1>
        <form action="register.php" method="POST">
            <input type="text" placeholder="User Name" class="text">
            <br>
            <br>
            <input type="email" placeholder="Benilde Mail" class="text">
            <br>
            <br>
            <input type="password" placeholder="Password" class="text">
            <br>
            <br>
            <input type="password" placeholder="Confirm Password" class="text">
            <br>
            <br>
            <input type="button" value="Create Account" class="button">
            <br>
            <br>
            <a href="login.php">Already Have a Account</a>
        </form>
    </div>
    </center>
</body>
</html>