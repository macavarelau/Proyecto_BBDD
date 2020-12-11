<html>
<head>
<title>Mapa</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
</head>
<body>
<?php echo '<p>Hello World</p>'; ?>
<?php
    $lat = -33.5;
    $long = -70.5;
    $marker_list = [
        ["lat" => -33.4,
        "long" => -70.5],
        ["lat" => -33.6,
        "long" => -70.5],
        ["lat" => -33.5,
        "long" => -70.6],
    ];
?>

<div id="mapid" style="height: 500px"></div>
</body>
  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>

  <script>
  var map = L.map('mapid').setView([<?php echo $lat ?>, <?php echo $long ?>], 10);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);
  
    <?php foreach($marker_list as $marker) {
        echo
        'L.marker([' . $marker["lat"] . "," . $marker["long"] . ']).addTo(map);';
        } ?>
  </script>

</html>