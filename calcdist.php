<?php

$company_arr = array();;
$dist_arr = array();
$back_arr = array();
$ind = array();


function distance($lat1, $lon1, $lat2, $lon2, $unit)
{

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
    return ($miles * 0.8684);
  } else {
    return $miles;
  }
}

$myLat = 12.844119;
$myLong = 80.152745;

$dbconnect = mysqli_connect("localhost", "root", "", "tarp");

$sql = "SELECT * FROM about";

$query = mysqli_query($dbconnect, $sql);


if (mysqli_num_rows($query) != 0) {

  while ($rs = mysqli_fetch_assoc($query)) {
    $loc = explode(",", $rs['LatLang']);

    $lat = (double)$loc[0];
    $long = (double)$loc[1];

    array_push($company_arr, $rs['company_name']);
    array_push($back_arr, $rs['back']);
    array_push($ind, $rs['id']);


    $di = distance($myLat, $myLong, $lat, $long, "K");
    array_push($dist_arr, $di);
  }
}



do {
  $swapped = false;
  for ($i = 0, $c = count($dist_arr) - 1; $i < $c; $i++) {
    if ($dist_arr[$i] > $dist_arr[$i + 1]) {
      list($dist_arr[$i + 1], $dist_arr[$i]) = array($dist_arr[$i], $dist_arr[$i + 1]);
      list($company_arr[$i + 1], $company_arr[$i]) = array($company_arr[$i], $company_arr[$i + 1]);
      list($back_arr[$i + 1], $back_arr[$i]) = array($back_arr[$i], $back_arr[$i + 1]);
      list($ind[$i + 1], $ind[$i]) = array($ind[$i], $ind[$i + 1]);

      $swapped = true;
    }
  }
} while ($swapped);



?>

<!DOCTYPE html>
<html>

<head>
    <style>
        html {
            height: 100%;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">

</head>

<body style="margin:0px;width:100%;font-family: 'Maven Pro', sans-serif;">
    <div style="width:100%">
        <h1 style="float:left">COMPANIES</h1>

        <?php
        $i = 0;
        while ($i < sizeof($company_arr)) {
          echo '<div id="container" style="white-space:nowrap;width:95%;height:70px;border-bottom:1px solid grey;padding:1%;float: right;border-radius: 5px 5px 0px 0px;margin:auto;">

          <img src="Images/' . $back_arr[$i] . '" style="width:70px;height:70px;float: left;" />
          <a href="' . $ind[$i] . '.html" target="_blank"><div style="float:left;margin:0px;margin-left:5%">

              <h2 style="margin:0px;">' . $company_arr[$i]  . '</h2>
              <p>' . (int)$dist_arr[$i] . ' KM</p>

          </div></a>


          </div>';
          $i = $i + 1;
        }

        ?>
    </div>


</body>

</htm l> 