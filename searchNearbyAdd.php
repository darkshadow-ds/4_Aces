<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twice</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="address">Address</label>
            <input type="text" id="address" name="address">
        </div>
        <div>
            <label for="lats">Latitude</label>
            <input type="number" step="any" id="lats" name="lats" value="28.690201" required>
        </div>
        <div>
            <label for="longs">Longitude</label>
            <input type="number" step="any" id="longs" name="longs" value="77.306793" required>
        </div>
        <div>
          <button type="submit" id="submit" name="submit">
            Go
          </button>
        </div>
    </form>
    
</body>
</html>



<?php
    
    $link=mysqli_connect("shareddb-y.hosting.stackcp.net","trialSearch-3135394de9","trialSearch@444","trialSearch-3135394de9");
    if(mysqlI_connect_error()){
        echo mysqli_connect_error();
    }
    
    require "vendor/autoload.php"; 
    $geocoder = new \OpenCage\Geocoder\Geocoder('a7ef5fd194eb48c2afcb2a80ba214ed2');
    $result = $geocoder->geocode('Palam New Delhi  ');
  // print_r($result); 
    print_r($result[results][0][bounds][northeast][lat]);
    print_r("\n");
    print_r($result[results][0][bounds][northeast][lng]);


    # set optional parameters
    # see the full list: https://opencagedata.com/api#forward-opt
    #
    $result = $geocoder->geocode('6 Rue Massillon, 30020 Nîmes', ['language' => 'fr', 'countrycode' => 'fr']);
    if ($result && $result['total_results'] > 0) {
    $first = $result['results'][0];
    // print $first['geometry']['lng'] . ';' . $first['geometry']['lat'] . ';' . $first['formatted'] . "\n";
    # 4.360081;43.8316276;6 Rue Massillon, 30020 Nîmes, Frankreich
    } 

    $query="SELECT `latitude`,`longitude` FROM `users`";
    $result=mysqli_query($link,$query);
    $row=mysqli_fetch_all($result);
    // print_r($row);
    if($row>0){
          // print_r($row);
    }

    if(isset($_POST['submit'])){
      $lat=$_POST['lats'];
      $lng=$_POST['longs'];
      $sql ="SELECT * FROM (SELECT *, 
      (
          (
              (
                  acos(
                      sin(( $lat * pi() / 180))
                      *
                      sin(( `latitude` * pi() / 180)) + cos(( $lat * pi() /180 ))
                      *
                      cos(( `latitude` * pi() / 180)) * cos((( $lng - `longitude`) * pi()/180)))
              ) * 180/pi()
          ) * 60 * 1.1515 * 1.609344
      )
  as distance FROM `users`
) `users`
WHERE distance <= 50 
ORDER BY distance LIMIT 200";
      $resultNear=mysqli_query($link,$sql);
    }
    $rowNear=mysqli_fetch_all($resultNear);
    // print_r($row);
    if($rowNear>0){
          print_r($rowNear);
    }    
?>



