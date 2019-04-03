<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
</head>

<body style="font-family: 'Maven Pro', sans-serif;margin:0px">
    <form method="POST" action="WebsiteCreator.php">
        <div id="nav" style="width:100%;background-color:#ffffff;height:70px;color:#000000;box-shadow:0px 0px 5px 10px soild #6d6d6d;position:fixed;z-index:10;padding:1%">
            <img src="Images/logo.jpg" style="float:left;width:10%">
            <input required style="float:left;margin-right:15%;font-size:20px" placeholder="Dynacon" name="company">

            <p style="float:left;margin:2%"><a href="index.php" style="text-decoration: none">Home</a></p>
            <p style="float:left;margin:2%">Products</p>
            <p style="float:left;margin:2%">Services</p>
            <p style="float:left;margin:2%">Location</p>
            <p style="float:left;margin:2%">Contact Info</p>

            <p style="color:#ffffff;padding:1%;background-color:rgba(255, 6, 156, .9);;float: right;;border:2px solid rgba(252, 111, 0, .93);border-radius:2px;margin-right:3%">
                LOGIN</p>
            <p style="color: rgba(252, 111, 0, .93);;padding:1%;;float: right;;border: 2px solid rgba(252, 111, 0, .93);border-radius:2px;margin-left:1%">
                REGISTER</p>
        </div>


        <div style="width:95%;margin:auto;background:url('Images/back3.jpg')">
            <div style="width:100%;background:rgba(0,0,0,0.5);text-align: center;padding:150px 0px 250px 0px;color:#ffffff;margin:auto">
                <input required style="font-size:70px;" placeholder="Title" name="Title"><br><br>
                <textarea style="width:52%;height:12%" placeholder="Description" name="Description"></textarea>

                <br><br>
                <div id="buttons" style="width:70%;margin:auto">
                    <input required style="padding:2%;background-color:#ffffff;;float:left;border: 2px solid #4453a8;border-radius:2px;margin-left:30%" placeholder="eg. GET STARTED" name="button1">

                    <input required style="padding:2%;;float:left;border: 2px solid #4453a8;border-radius:2px;margin-left:3%" placeholder="Ex. PLATFORM
                    OVERVIEW" name="button2">
                </div>
                <br><br><br><br>
                <input required style="font-size:30px;" placeholder="Background Image" name="back"><br><br>

            </div>
        </div>

        <div style="width:100%;height:800px;background:linear-gradient(135deg, rgba(252, 111, 0, .93) 29%, rgba(255, 6, 156, .9)), linear-gradient(180deg, #fc6f00, #fc6f00);">

            <div style="width:40%;height:200px;padding:2%;float:left;margin:3%;border-radius: 10px;color:#ffffff">
                <h1 style="font-size:40px;font-weight: 1000">You Can Enjoy The
                    Best Services Offered</h1>
                <p>The greatest advances of civilization, whether in architecture or painting, in science and literature, in
                    industry or agriculture, have never come from centralized government.</p>
            </div>

            <div style="width:40%;height:200px;padding:2%;float:left;border: 1px soild black;background: #ffffff;margin:3%;border-radius: 10px">
                <img src="Images/1.png" style="width:10%;"><br><br>
                <input required style="font-size:20px" placeholder="Service 1" name="service_1"><br>
                <textarea style="width:100%" placeholder="Service 1 Description" name="service_1_des"></textarea>
            </div>


            <div style="width:40%;height:200px;padding:2%;float:left;border: 1px soild black;background: #ffffff;margin:3%;border-radius: 10px">
                <img src="Images/2.png" style="width:10%"><br><br>
                <input required style="font-size:20px" placeholder="Service 2" name="service_2"><br>
                <textarea style="width:100%" placeholder="Service 2 Description" name="service_2_des"></textarea>
            </div>


            <div style="width:40%;height:200px;padding:2%;float:left;border: 1px soild black;background: #ffffff;margin:3%;border-radius: 10px">
                <img src="Images/3.png" style="width:10%"><br><br>
                <input required style="font-size:20px" placeholder="Service 3" name="service_3"><br>
                <textarea style="width:100%" placeholder="Service 3 Description" name="service_3_des"></textarea>
            </div>

        </div>

        <div style="width:100%;margin-left:4%;height:800px;margin-bottom:100px">
            <div style="width:100%;height:300px">

                <h1 style="font-size:38px;text-align:center">PRODUCTS</h1>

                <div style="text-align:center;width:90%;margin:auto;height:400px">

                    <div style="width:30%;float:left;;margin:1%;position: relative;height:350px;background:url('Images/p1.jpg');background-size:100% 100%;border-radius:10px;padding-bottom: %">
                        <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">
                            <div style="width:47%;margin:auto;height:100px;margin-left:33%;padding-top:5px">
                                <input required style="font-size:20px" name="product_1" placeholder="Product 1">
                                <input required style="font-size:20px" name="product_1_price" placeholder="Product 1 Price">
                                <input required style="font-size:20px" name="product_1_img" placeholder="Product 1 Image">
                            </div>
                        </div>
                    </div>

                    <div style="width:30%;float:left;;margin:1%;position: relative;height:350px;background:url('Images/p2.jpg');background-size:100% 100%;border-radius:10px">
                        <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">

                            <div style="width:47%;margin:auto;height:100px;margin-left:33%;padding-top:5px">
                                <input required style="font-size:20px" name="product_2" placeholder="Product 2">
                                <br>
                                <input required style="font-size:20px" name="product_2_price" placeholder="Product 2 Price">
                                <br>
                                <input required style="font-size:20px" name="product_2_img" placeholder="Product 2 Image">
                            </div>
                        </div>
                    </div>


                    <div style="width:30%;float:left;;margin:1%;position: relative;height:350px;background:url('Images/p3.jpg');background-size:100% 100%;border-radius:10px">
                        <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">

                            <div style="width:47%;margin:auto;height:100px;margin-left:33%;padding-top:5px">
                                <input required style="font-size:20px" name="product_3" placeholder="Product 3">
                                <input required style="font-size:20px" name="product_3_price" placeholder="Product 3 Price">
                                <input required style="font-size:20px" name="product_3_img" placeholder="Product 3 Image">
                            </div>
                        </div>
                    </div>

                </div>





                <div style="width:100%;height:300px">
                    <div style="text-align:center;width:90%;margin:auto;height:500px">
                        <div style="width:30%;float:left;position: relative;height:350px;background:url('Images/p4.jpeg');background-size:100% 100%;border-radius:10px">
                            <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">

                                <div style="width:47%;margin:auto;height:100px;margin-left:33%;padding-top:5px">
                                    <input required style="font-size:20px" name="product_4" placeholder="Product 4">
                                    <input required style="font-size:20px" name="product_4_price" placeholder="Product 4 Price">
                                    <input required style="font-size:20px" name="product_4_img" placeholder="Product 4 Image">
                                </div>
                            </div>
                        </div>


                        <div style="width:30%;float:left;;margin:1%;position: relative;height:350px;background:url('Images/p5.jpg');background-size:100% 100%;border-radius:10px">
                            <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">

                                <div style="width:47%;margin:auto;height:100px;margin-left:33%;padding-top:5px">
                                    <input required style="font-size:20px" name="product_5" placeholder="Product 5">
                                    <input required style="font-size:20px" name="product_5_price" placeholder="Product 5 Price">
                                    <input required style="font-size:20px" name="product_5_img" placeholder="Product 5 Image">
                                </div>
                            </div>
                        </div>


                        <div style="width:30%;float:left;;margin:1%;position: relative;height:350px;background:url('Images/p6.jpg');background-size:100% 100%;border-radius:10px">
                            <div style="position:absolute;top:263px;background:rgba(255,255,255,0.8);width:100%;margin:0px">

                                <div style="width:47%;margin:auto;height:100px;margin-left:33%;padding-top:5px">
                                    <input required style="font-size:20px" name="product_6" placeholder="Product 6">
                                    <input required style="font-size:20px" name="product_6_price" placeholder="Product 6 Price">
                                    <input required style="font-size:20px" name="product_6_img" placeholder="Product 6 Image">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <center>
            <input required style="font-size:30px;width:60%" placeholder="Enter Latitude, Longitude" name="latlang">
        </center>
        <iframe src="maps2.html" style="margin:0px;width:100%;height:300px;overflow:hidden;border:none"></iframe>

        <footer>
            <div style="width:100%;color:#65666b;background-color:#ffffff;height:250px;">
                <div style="width:90%;margin-left:13%;">
                    <div style="width:30%;float:left;margin:1%">
                        <div style="width:100%">
                            <img src="Images/logo.jpg" style="float:left;width:30%">
                            <h2 style="color:#000000;float:left">Dynacom</h2>
                        </div><br><br><br>
                        <p>To design is much more than simply to assemble,<br>
                            to order, or even to edit: it is to add placeholder and meaning, <br>
                            to illuminate, to simplify, to clarify, <br>
                            to modify, to dignify, <br>
                            to dramatize, to persuade, <br>
                            and perhaps even to amuse. </p>

                        <p style="color:#000000"><b>- Anonymous</b></p>
                    </div>

                    <div style="width:15%;float:left;margin:1%">
                        <h2 style="color:#000000">Services</h2>
                        <p>View Products</p>
                        <p>Location Based Services</p>
                        <p>Search</p>
                        <p>Trend Analysis</p>
                    </div>

                    <div style="width:20%;float:left;margin:1%">
                        <h2 style="color:#000000">Contact Info</h2>
                        <p>POC: <input required name="poc" placeholder="Ex. Mr Robot"></p>
                        <hr style="width:80%;float:left"><br>
                        <p><b>Email:</b> <input required name="email" placeholder="Ex. xyz@gmail.com"></p>
                        <p><b>Phone:</b> <input required name="phno" placeholder="Ex. +91 76543210"></p>
                        <p><b>Fax:</b> <input required name="fax" placeholder="Ex. +98 76543210"></p>
                    </div>

                    <div style="width:20%;float:left;margin:1%">
                        <h2 style="color:#000000">Address</h2>

                        <textarea style="width:100%;height:100px" placeholder="Dynacon, Tarp Project,VIT Chennai,Vandlur-Kelambakkam road,Chennai,Tamil Nadu" name="Address"></textarea>
                        <br><br>
                        <input required name="state" placeholder="State">


                        <input required name="zipcode" placeholder="Ex. 600048">

                        <input required type="submit" value="submit">
                    </div>
                </div>
            </div>

        </footer>
    </form>
</body>

</html> 