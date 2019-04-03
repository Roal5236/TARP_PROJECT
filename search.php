<?php

$html = '<html>

<head>
<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet"> 
</head>

<body style="margin:0px;width:100%;font-family: Maven Pro, sans-serif;">

    <div id="nav" style="width:100%;background-color:#001f42;height:80px;color:#ffffff">
        <a href="index.php" style="float:left;margin:2%;text-decoration:none; color: #ffffff;"><b>DYNACON</b></a>
        <a href="maps.php" style="float:left;margin:2%;text-decoration:none; color: #ffffff;">Location Based Services</a>
        <a href="formz.php" style="float:left;margin:2%;text-decoration:none; color: #ffffff;">Web-Builder</a>
        <a href="search.php" style="text-decoration:none; color: #ffffff;float:left;margin:2%">Search</a>
    </div>
    <div
        style="width:100%;background:linear-gradient(to bottom right,#2b2c61, #1e1f4d, #001f42, #001124);color:#ffffff;text-align:center;padding: 100px 0px 200px ">

        <h1>What do you want to search today?</h1>
        <form action="search.php" method="GET">
        <input type="text" style="width:60%;padding:20px;border: 1px solid #ffffff;" name="word" placeholder="Type Something Here...">
        </form>
    </div>


    <div style="width:100%;margin-top:100px;height:20%">';

if (isset($_GET['word'])) {
    $word = $_GET['word'];

    $dbconnect = mysqli_connect("localhost", "root", "", "tarp");

    $sql_title = "SELECT * FROM about WHERE Title LIKE '%$word%' OR  Description  LIKE '%$word%' OR  company_name  LIKE '%$word%'";

    $title_query = mysqli_query($dbconnect, $sql_title);


    if (mysqli_num_rows($title_query) != 0) {

            $rs = mysqli_fetch_assoc($title_query);
            $html = $html . '<div style="width:44%;margin:auto;border-right: 1px solid black;float: left;padding-right: 5%">
                <h1 style="float:right">COMPANIES</h1>
                
                <a href="'.  $rs['id'] . '.html"><a href="'.  $rs['id'] . '.html"><div id="container"
                    style="white-space:nowrap;width:80%;height:70px;border:1px solid rgb(122, 122, 122);padding:1%;float: right;border-radius: 5px 5px 0px 0px">

                    <img src="Images/back3.jpg" style="width:70px;height:70px;float: left;" />
                    <h2 style="float:left;margin-left:5%">' . $rs['company_name'] . '</h2>

                </div></a>';

            while ($rs = mysqli_fetch_assoc($title_query)) {

                $html = $html . '<a href="'.   $rs['id'] . '.html"><a href="'.  $rs['id'] . '.html"><div id="container" style="white-space:nowrap;width:80%;height:70px;border:1px solid black;padding:1%;float: right;">

                <img src="Images/' . $rs['back'] . '" style="width:70px;height:70px;float: left;" />
                <h2 style="float:left;margin-left:5%">' . $rs['company_name'] .'</h2>

            </div></a><br><br>';
            }
        }




    $sql_products_1 = "SELECT * FROM about WHERE Product_1  LIKE '%$word%'";
    $products_query_1 = mysqli_query($dbconnect, $sql_products_1);


    if (mysqli_num_rows($products_query_1) != 0) {
            $html = $html . '</div>
            <div style="width:45%;margin:auto;border-left: 1px solid black;float: left;padding-left: 5%">
                    <h1>PRODUCTS</h1>';


            while ($rs2 = mysqli_fetch_assoc($products_query_1)) {

                $html = $html . '<a href="'.   $rs2['id'] . '.html"><div id="container" style="white-space:nowrap;width:50%;height:70px;padding:1%">

                <img src="Images/' . $rs2['product_1_img'] . '"
                    style="width:70px;height:70px;float: left;border:1px solid #ffffff;border-radius:200px" />
                <h2 style="float:left;margin-left:5%">' . $rs2['Product_1'] . '</h2>

            </div></a>';
            }
        }

    $sql_products_2 = "SELECT * FROM about WHERE Product_2  LIKE '%$word%'";
    $products_query_2 = mysqli_query($dbconnect, $sql_products_2);


    if (mysqli_num_rows($products_query_2) != 0) {

            while ($rs2_2 = mysqli_fetch_assoc($products_query_2)) {

                $html = $html . '<a href="'.   $rs2_2['id'] . '.html"><a href="'.  $rs['id'] . '.html"><div id="container" style="white-space:nowrap;width:50%;height:70px;padding:1%">
        
                    <img src="Images/' . $rs2_2['product_2_img'] . '"
                        style="width:70px;height:70px;float: left;border:1px solid #ffffff;border-radius:200px" />
                    <h2 style="float:left;margin-left:5%">' . $rs2_2['Product_2'] . '</h2>
        
                </div></a>';
            }
        }

    $sql_products_3 = "SELECT * FROM about WHERE Product_3  LIKE '%$word%'";
    $products_query_3 = mysqli_query($dbconnect, $sql_products_3);


    if (mysqli_num_rows($products_query_3) != 0) {

            while ($rs2_3 = mysqli_fetch_assoc($products_query_3)) {

                $html = $html . '<a href="'.  $rs2_3['id'] . '.html"><div id="container" style="white-space:nowrap;width:50%;height:70px;padding:1%">
            
                        <img src="Images/' . $rs2_3['product_3_img'] . '"
                            style="width:70px;height:70px;float: left;border:1px solid #ffffff;border-radius:200px" />
                        <h2 style="float:left;margin-left:5%">' . $rs2_3['Product_3'] . '</h2>
            
                    </div></a>';
            }
        }

    $sql_products_4 = "SELECT * FROM about WHERE Product_4  LIKE '%$word%'";
    $products_query_4 = mysqli_query($dbconnect, $sql_products_4);


    if (mysqli_num_rows($products_query_4) != 0) {

            while ($rs2_4 = mysqli_fetch_assoc($products_query_4)) {

                $html = $html . '<a href="'.  $rs2_4['id'] . '.html"><div id="container" style="white-space:nowrap;width:50%;height:70px;padding:1%">
                
                            <img src="Images/' . $rs2_4['product_4_img'] . '"
                                style="width:70px;height:70px;float: left;border:1px solid #ffffff;border-radius:200px" />
                            <h2 style="float:left;margin-left:5%">' . $rs2_4['Product_4'] . '</h2>
                
                        </div></a>';
            }
        }


    $sql_products_5 = "SELECT * FROM about WHERE Product_5  LIKE '%$word%'";
    $products_query_5 = mysqli_query($dbconnect, $sql_products_5);


    if (mysqli_num_rows($products_query_5) != 0) {

        while ($rs2_5 = mysqli_fetch_assoc($products_query_5)) {

            $html = $html . '<a href="'.  $rs2_5['id'] . '.html"><div id="container" style="white-space:nowrap;width:50%;height:70px;padding:1%">
                    
                                <img src="Images/' . $rs2_5['product_5_img'] . '"
                                    style="width:70px;height:70px;float: left;border:1px solid #ffffff;border-radius:200px" />
                                <h2 style="float:left;margin-left:5%">' . $rs2_5['Product_5'] . '</h2>
                    
                            </div></a>';
        }
    }

    $sql_products_6 = "SELECT * FROM about WHERE Product_6  LIKE '%$word%'";
    $products_query_6 = mysqli_query($dbconnect, $sql_products_6);


    if (mysqli_num_rows($products_query_6) != 0) {

            while ($rs2_6 = mysqli_fetch_assoc($products_query_6)) {

                $html = $html . '<a href="'.  $rs2_6['id'] . '.html"><div id="container" style="white-space:nowrap;width:50%;height:70px;padding:1%">
                        
                                    <img src="Images/' . $rs2_6['product_6_img'] . '"
                                        style="width:70px;height:70px;float: left;border:1px solid #ffffff;border-radius:200px" />
                                    <h2 style="float:left;margin-left:5%">' . $rs2_6['Product_6'] . '</h2>
                        
                                </div></a>';
            }
        }


    $html = $html . '</div>

        </div>';

    $html = $html . '<div style="width:100%;height:500px;text-align: center;margin-top:100px;">
                <div style="width:80%;margin:auto">';


    $sql_service = "SELECT * FROM about WHERE Service_1 LIKE '%$word%'";
    $service_query = mysqli_query($dbconnect, $sql_service);



    if (mysqli_num_rows($service_query) != 0) {




        while ($rs3 = mysqli_fetch_assoc($service_query)) {

            $html = $html . '<a href="'.  $rs3['id'] . '.html"><div style="width:30%;float:left;;margin:1%;height:150px;background:url(Images/' . $rs3['product_1_img'] . ');background-size:100% 100%;border-radius:10px;text-align:center;color:#ffffff;">
                <div style="width:100%;height:150px;background:rgba(0,0, 0, 0.4);">
                    <h2 style="margin:2px">' . $rs3['Service_1'] . '</h2>
                    <p>' . $rs3['service_1_des'] . '</p>
                </div>
            </div></a>';
        }
    }


    $sql_service_2 = "SELECT * FROM about WHERE Service_2 LIKE '%$word%'";
    $service_query_2 = mysqli_query($dbconnect, $sql_service_2);



    if (mysqli_num_rows($service_query_2) != 0) {



        while ($rs3_2 = mysqli_fetch_assoc($service_query_2)) {

            $html = $html . '<a href="'.  $rs3_2['id'] . '.html"><div style="width:30%;float:left;;margin:1%;height:150px;background:url(Images/' . $rs3_2['product_2_img'] . ');background-size:100% 100%;border-radius:10px;text-align:center;color:#ffffff;">
                <div style="width:100%;height:150px;background:rgba(0,0, 0, 0.4);">
                    <h2 style="margin:2px">' . $rs3_2['Service_2'] . '</h2>
                    <p>' . $rs3_2['service_2_des'] . '</p>
                </div>
            </div></a>';
        }
    }

    $sql_service_3 = "SELECT * FROM about WHERE Service_3 LIKE '%$word%'";
    $service_query_3 = mysqli_query($dbconnect, $sql_service_3);



    if (mysqli_num_rows($service_query_3) != 0) {


            while ($rs3_3 = mysqli_fetch_assoc($service_query_3)) {

                $html = $html . '<a href="'.  $rs3_3['id'] . '.html"><div style="width:30%;float:left;;margin:1%;height:150px;background:url(Images/' . $rs3_3['product_3_img'] . ');background-size:100% 100%;border-radius:10px;text-align:center;color:#ffffff;">
                <div style="width:100%;height:150px;background:rgba(0,0, 0, 0.4);">
                    <h2 style="margin:2px">' . $rs3_3['Service_3'] . '</h2>
                    <p>' . $rs3_3['service_3_des'] . '</p>
                </div>
            </div></a>';
            }
        }
}

$html = $html . '</div>
        </div>
    </body>

    </html>';



echo $html;
 