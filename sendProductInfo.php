<?php

$dbconnect = mysqli_connect("localhost", "root", "", "tarp");

$date1 = date("d-m-Y");
$name = "Rohaan";


$html = '<div style="width:100%">
    <div style="width:80%;margin:auto">
        <h1>CHECKOUT</h1>
        <hr style="width:100%">';

if (0 < ((int)$_GET['number1'])) {

    $insert_sql = "INSERT INTO `products` (`id`, `company_name`, `product_name`, `date`, `qty`, `user_id`) VALUES (
	NULL, 
	'" . mysqli_real_escape_string($dbconnect, $_GET['company_name']) . "',
	'" . mysqli_real_escape_string($dbconnect, $_GET['product1']) . "',
	'" . mysqli_real_escape_string($dbconnect, $date1) . "',
	'" . mysqli_real_escape_string($dbconnect, $_GET['number1']) . "',
	'" . mysqli_real_escape_string($dbconnect, $name) . "'
	);";
    $insert_qry = mysqli_multi_query($dbconnect, $insert_sql);

    $html = $html. '<div style="width:100%;padding:20px">
                <h2 style="display:inline">' . $_GET['product1'] . '</h2>
                <h2 style="float:right;display:inline">10.00$</h2>
                <p>Qty: ' . $_GET['number1'] . '</p>
            </div>
            <hr style="width:100%">';
}

if (0 < ((int)$_GET['number2'])) {

    $insert_sql2 = "INSERT INTO `products` (`id`, `company_name`, `product_name`, `date`, `qty`, `user_id`) VALUES (
	NULL, 
	'" . mysqli_real_escape_string($dbconnect, $_GET['company_name']) . "',
	'" . mysqli_real_escape_string($dbconnect, $_GET['product2']) . "',
	'" . mysqli_real_escape_string($dbconnect, $date1) . "',
	'" . mysqli_real_escape_string($dbconnect, $_GET['number2']) . "',
	'" . mysqli_real_escape_string($dbconnect, $name) . "'
	);";
    $insert_qry2 = mysqli_multi_query($dbconnect, $insert_sql2);

    $html = $html. '<div style="width:100%;padding:20px">

                <h2 style="display:inline">' . $_GET['product2'] . '</h2>
                <h2 style="float:right;display:inline">10.00$</h2>
                <p>Qty: ' . $_GET['number2'] . '</p>
            </div>
            <hr style="width:100%">';
}


if (0 < ((int)$_GET['number3'])) {

    $insert_sql3 = "INSERT INTO `products` (`id`, `company_name`, `product_name`, `date`, `qty`, `user_id`) VALUES (
	NULL, 
	'" . mysqli_real_escape_string($dbconnect, $_GET['company_name']) . "',
	'" . mysqli_real_escape_string($dbconnect, $_GET['product3']) . "',
	'" . mysqli_real_escape_string($dbconnect, $date1) . "',
	'" . mysqli_real_escape_string($dbconnect, $_GET['number3']) . "',
	'" . mysqli_real_escape_string($dbconnect, $name) . "'
	);";
    $insert_qry3 = mysqli_multi_query($dbconnect, $insert_sql3);

    $html = $html. '<div style="width:100%;padding:20px">

                <h2 style="display:inline">' . $_GET['product3'] . '</h2>
                <h2 style="float:right;display:inline">10.00$</h2>
                <p>Qty: ' . $_GET['number3'] . '</p>
            </div>
            <hr style="width:100%">';
}


if (0 < ((int)$_GET['number4'])) {

    $insert_sql4 = "INSERT INTO `products` (`id`, `company_name`, `product_name`, `date`, `qty`, `user_id`) VALUES (
	NULL, 
	'" . mysqli_real_escape_string($dbconnect, $_GET['company_name']) . "',
	'" . mysqli_real_escape_string($dbconnect, $_GET['product4']) . "',
	'" . mysqli_real_escape_string($dbconnect, $date1) . "',
	'" . mysqli_real_escape_string($dbconnect, $_GET['number4']) . "',
	'" . mysqli_real_escape_string($dbconnect, $name) . "'
	);";
    $insert_qry4 = mysqli_multi_query($dbconnect, $insert_sql4);

    $html = $html. '<div style="width:100%;padding:20px">

                <h2 style="display:inline">' . $_GET['product4'] . '</h2>
                <h2 style="float:right;display:inline">10.00$</h2>
                <p>Qty: ' . $_GET['number4'] . '</p>
            </div>
            <hr style="width:100%">';
}

if (0 < ((int)$_GET['number5'])) {

    $insert_sql5 = "INSERT INTO `products` (`id`, `company_name`, `product_name`, `date`, `qty`, `user_id`) VALUES (
	NULL, 
	'" . mysqli_real_escape_string($dbconnect, $_GET['company_name']) . "',
	'" . mysqli_real_escape_string($dbconnect, $_GET['product5']) . "',
	'" . mysqli_real_escape_string($dbconnect, $date1) . "',
	'" . mysqli_real_escape_string($dbconnect, $_GET['number5']) . "',
	'" . mysqli_real_escape_string($dbconnect, $name) . "'
	);";
    $insert_qry5 = mysqli_multi_query($dbconnect, $insert_sql5);

    $html = $html. '<div style="width:100%;padding:20px">

                <h2 style="display:inline">' . $_GET['product5'] . '</h2>
                <h2 style="float:right;display:inline">10.00$</h2>
                <p>Qty: ' . $_GET['number5'] . '</p>
            </div>
            <hr style="width:100%">';
}



$html = $html. '</div>';

echo $html;

 