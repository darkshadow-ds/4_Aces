<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>
  <?php if(isset($_SESSION['error'])): ?>
    <p style="color:red; font-weight:600"><?php echo $_SESSION['error']; unset($_SESSION['error']);  ?></p>
  <?php endif ?>
  <?php if(isset($_SESSION['success'])): ?>
    <p style="color:green; font-weight:600"><?php echo $_SESSION['success']; unset($_SESSION['success']);  ?></p>
  <?php endif ?>
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
  session_start();  
    $link=mysqli_connect("shareddb-y.hosting.stackcp.net","trialSearch-3135394de9","trialSearch@444","trialSearch-3135394de9");
    if(mysqlI_connect_error()){
        echo mysqli_connect_error();
    }
    
    require "vendor/autoload.php"; 
    $geocoder = new \OpenCage\Geocoder\Geocoder('a7ef5fd194eb48c2afcb2a80ba214ed2');
    $result = $geocoder->geocode('82 Clerkenwell Road, London');
    // print_r($result);

    # set optional parameters
    # see the full list: https://opencagedata.com/api#forward-opt
    #
    $result = $geocoder->geocode('6 Rue Massillon, 30020 Nîmes', ['language' => 'fr', 'countrycode' => 'fr']);
    if ($result && $result['total_results'] > 0) {
    $first = $result['results'][0];
    // print $first['geometry']['lng'] . ';' . $first['geometry']['lat'] . ';' . $first['formatted'] . "\n";
    # 4.360081;43.8316276;6 Rue Massillon, 30020 Nîmes, Frankreich
    } 

    function back(){
      header("Location:".$_SERVER['HTTP_REFERER']);
      return ;
    }

    $query="SELECT `latitude`,`longitude` FROM `users`";
    $result=mysqli_query($link,$query);
    $row=mysqli_fetch_all($result);
    // print_r($row);
   if($_SERVER['REQUEST_METHOD'] == "POST") {
    if($row>0){
      
      if(($_POST['lats']&&$_POST['longs'])!=NULL){
          $data = nearBy($_POST['lats'],$_POST['longs']);
          print_r($data);
         if ($data) {
          $_SESSION['success'] = "LAts and longs found neaarby ";
          //back();
          return ;
         } 
         $_SESSION['error'] = "No lat long ";
         //back();
      }
    }else{
      $_SESSION['error'] = "User data not found";
      back();
    }
  }

    function nearBy($lat, $lng)
    {
          print_r($lat);
          print_r($lng); 

          $sql="SELECT * FROM `users`";
          //  $sql ="SELECT * FROM (SELECT *, 
          //           (
          //               (
          //                   (
          //                       acos(
          //                           sin(( $lat * pi() / 180))
          //                           *
          //                           sin(( `latitude` * pi() / 180)) + cos(( $lat * pi() /180 ))
          //                           *
          //                           cos(( `latitude` * pi() / 180)) * cos((( $lng - `longitude`) * pi()/180)))
          //                   ) * 180/pi()
          //               ) * 60 * 1.1515 * 1.609344
          //           )
          //       as distance FROM `users`
          //   ) `users`
          //   WHERE distance <= 50 
          //   ORDER BY distance LIMIT 200";
            
            $resultNear=mysqli_query($link,$sql);
                                  
            // try {
        
            //     $stmt->execute();

            // } catch (Exception $e) {

            //     echo json_encode(['sql_error' => $e->getMessage()]);
            // }
            print_r(mysqli_fetch($resultNear));
            echo mysqli_error($link);
        die;
        if (mysqli_num_rows($resultNear) > 0) {
          $rowNear=mysqli_fetch($resultNear);
            // $data= $stmt->fetchAll(PDO::FETCH_OBJ);

            return $rowNear;
        }

        
        // no result found
        return false;

    }







    // include(dirname(__DIR__).'/src/AbstractGeocoder.php');
    // include(dirname(__DIR__).'/src/Geocoder.php');

    // // use OpenCage\Geocoder;

    // $query = "82 Clerkenwell Road, London";
    // $key = getenv('a7ef5fd194eb48c2afcb2a80ba214ed2');
    // $geocoder = new OpenCage\Geocoder\Geocoder($key);
    // $result = $geocoder->geocode($query);
    // print_r($result);
?>



