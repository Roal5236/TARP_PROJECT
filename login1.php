<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>

    <style type="text/css">
        body {
            background-image: url("farm.jpg");
            background-size: 100%;
            font-family: Lato, sans-serif;
        }

        #mainDiv {
            width: 100%;
        }

        #secDiv {
            background-color: #ffffff;
            width: 40%;
            margin-left: 37.5%;
        }

        #loginButton {
            background-color: #4286f4;
            color: white;
            font-weight: bold;
            text-decoration: none;
        }

        input {
            background-color: white;
            color: black;
            width: 50%;
            height: 30px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #000000;
        }

        a {
            text-decoration: none;
        }

        #button {
            border: 1px solid white;
            border-radius: 30px;
            background-color: black;
            color: white;
            font-weight: bold;
            padding: 5px 25px 5px 25px;
            font-size: 16px;
        }
    </style>

</head>

<body>

    <div id="nav" style="width:100%;background-color:#001f42;height:80px;color:#ffffff">
        <a href="index.php" style="float:left;margin:2%;text-decoration:none; color: #ffffff;"><b>DYNACON</b></a>
        <a href="maps.php" style="float:left;margin:2%;text-decoration:none; color: #ffffff;">Location Based
            Services</a>
        <a href="formz.php" style="float:left;margin:2%;text-decoration:none; color: #ffffff;">Web-Builder</a>
        <a href="search.php" style="text-decoration:none; color: #ffffff;float:left;margin:2%">Search</a>
    </div>

    <br>
    <div style="width:100%">
        <div style="width:30%;margin:auto;background:rgba(255,255,255,0.4);padding:50px;text-align:center;box-shadow:0px 0px 15px 1px grey">

            <h1 style="font-size: 35px;color:black;">Sign Up</h1>
            <br>

            <form action="Register.php" method="post">

                <input type="text" name="username" placeholder="Username" required>

                <p> <input type="password" name="passwordz" required placeholder="Password"></p>

                <p> <input type="text" name="fname" placeholder="First Name" required> </p>

                <p> <input type="text" name="lname" placeholder="Last Name" required> </p>


                <input type="radio" name="typez" value="male" style="height:20px;width:10%">Shopkeeper

                <input type="radio" name="typez" value="female" style="height:20px;width:10%">Customer

                <p><input type="text" name="email" placeholder="Email" required> </p>

                <p> <input id="button" type="submit" value="Register Now!"> </p>
            </form>
        </div>
    </div>

</body>

</html> 