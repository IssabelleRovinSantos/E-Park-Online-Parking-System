<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>E-Park : Online Parking System</title>
   

        
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("./csb.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .panel {
            width: 30%;
            height: 100vh;
            background-color: lightgreen;
            /* background-color: powderblue; */
            box-shadow: 0 0 0.6rem black;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .panel-label {
            background-color:lightgreen;
            font-size: 3rem;
            width: 100%;
            padding: 1rem;
            font-weight: bold;
            font-style: italic;
        }

        .content {
            padding: 2rem;
        }

        .label {
            font-size: large;
            font-weight: bold;
        }
        </style>
</head>
<body>
    <div class="panel">
        <label class="container-panel">
        <br/>
        <br/>
    <b><i>E-Park : Online Parking System</i></b></label>
        <div class="content">
            <label class="label"> Don't have an account yet? Register Now!</label>
            <a href="register.php">
                <button class="btn btn-success">
                    Register
                </button>
            </a>
            <br/>
            <br/>
            <br/>
            <label class="label">You may Login here!</label>
            <br/>
            <br/>
            <a href="login.php">
                <button class="btn btn-success">
                    Login
                </button>
            </a>
            <br/>
            <br/>
            <br/>
            <h5>If you are experiencing errors, troubles with the website. Please contact us : </h5>
        </div>
    </div>
</body>
</html>