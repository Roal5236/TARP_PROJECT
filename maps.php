<!DOCTYPE html>
<html>

<head>
    <style>
        html {
            height: 100%;
        }

        #map {
            height: 730px;
            width: 70%;
            float: right;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">

</head>

<body style="margin:0px;width:100%;font-family: 'Maven Pro', sans-serif;">
    <div id="nav" style="width:100%;background-color:#001f42;height:80px;color:#ffffff">
        <a href="index.php" style="float:left;margin:2%;text-decoration:none; color: #ffffff;"><b>DYNACON</b></a>
        <a href="maps.php" style="float:left;margin:2%;text-decoration:none; color: #ffffff;">Location Based Services</a>
        <a href="formz.php" style="float:left;margin:2%;text-decoration:none; color: #ffffff;">Web-Builder</a>
        <a href="search.php" style="text-decoration:none; color: #ffffff;float:left;margin:2%">Search</a>
    </div>

    <div style="width:30%;float:left">
        <iframe src="calcdist.php" style="width:100%;height:700px;border:none"></iframe>
    </div>

    <div id="map"></div>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {
                lat: 12.843055,
                lng: 80.154764
            };
            // The map, centered at Uluru
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });

            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCABTOjB8mc3xD44tT2z_Qtx5wwYISqZYM &callback=initMap">
    </script>
</body>

</html> 