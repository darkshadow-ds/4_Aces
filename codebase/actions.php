<?php 
    include("functions.php");
    $error="";



    // Sign In Section
    if($_GET["process"]=="signIn"){
        if(!$_POST["usernameIn"]){
            $error="A Username is required. ";
        }else if(!$_POST["passwordIn"]){
            $error="A Password is required. ";
        }
        if($error!=""){
            echo $error;
            exit();
        }
        // Signing in the user after checking
        $query="SELECT * FROM `users` WHERE `email` = '".mysqli_real_escape_string($link,$_POST['usernameIn'])."' OR `name`='".mysqli_real_escape_string($link,$_POST['usernameIn'])."' LIMIT 1";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_assoc($result);
        if($row['password']==md5(md5($row['id']).$_POST['passwordIn'])){
            echo 1;
            $_SESSION['id']=$row['id'];
        }else{
            $error="Could not find that Username-Password Combination ! Please try Again !";
        }

        if($error!=""){
            echo $error;
            exit();
        }
        
    }







    // Sign Up Section
    if($_GET["process"]=="signUp"){
        if(!$_POST["usernameUp"]){
            $error="A Username is required. ";
        }else if(!$_POST["email"]){
            $error="An Email is required. ";
        }else if(!$_POST["passwordUp"]){
            $error="A Password is required. ";
        }else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)===false){
            $error= "Please enter a Valid email address";
        }

        
        if($error!=""){
            echo $error;
            exit();
        }
        
        // Checking if the Signing Up input email is already taken
        $query="SELECT * FROM `users` WHERE `email` = '".mysqli_real_escape_string($link,$_POST['email'])."' LIMIT 1";
        $result=mysqli_query($link,$query);
        if(mysqli_num_rows($result)>0){
            $error="This Email id is already taken !";
        }else{
            // Siging up if no errors found
            $query="INSERT INTO `users` (`name`,`email`,`password`) VALUES ('".mysqli_real_escape_string($link,$_POST['usernameUp'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['passwordUp'])."')";
            if(mysqli_query($link,$query)){
                $_SESSION['id']=mysqli_insert_id($link);
                // Password Hashing
                $query="UPDATE `users` SET `password` = '".md5(md5($_SESSION['id']).$_POST['passwordUp'])."' WHERE `id`=".$_SESSION['id']." LIMIT 1";
                mysqli_query($link,$query);
                echo 1;
            }else{
                $error="Couldn't Create User - Please try again later ";
            }
        }
        if($error!=""){
            echo $error;
            exit();
        }

    }

    // Profile Set Up ::
    if($_GET["process"]=="profileSetUp"){
        // print_r($_POST);
        // echo $_SESSION['id'];

        // Managing Prsnl Info ::
        
            $existCheck="SELECT `userId` FROM `info` WHERE `userId` = '".mysqli_real_escape_string($link,$_SESSION['id'])."' LIMIT 1";
            $resultEC=mysqli_query($link,$existCheck);
            if(mysqli_num_rows($resultEC)>0){
                $updatingInfo="UPDATE `info`
                    SET `fname`='".mysqli_real_escape_string($link,$_POST['fname'])."',
                        `lname`='".mysqli_real_escape_string($link,$_POST['lname'])."',
                        `career`='".mysqli_real_escape_string($link,$_POST['career'])."',
                        `further`='".mysqli_real_escape_string($link,$_POST['further'])."',
                        `organisation`='".mysqli_real_escape_string($link,$_POST['organisation'])."',
                        `phone`='".mysqli_real_escape_string($link,$_POST['phone'])."',
                        `dob`='".mysqli_real_escape_string($link,$_POST['dob'])."',
                        `bio`='".mysqli_real_escape_string($link,$_POST['bio'])."'
                    WHERE `userId`='".mysqli_real_escape_string($link,$_SESSION['id'])."'";
                $resultInfo=mysqli_query($link,$updatingInfo);
                echo "1"; 
            }else{
                $insertingInfo="INSERT into `info` (`userId`,`fname`,`lname`,`career`,`further`,`organisation`,`phone`,`dob`,`bio`) 
                VALUES ('".mysqli_real_escape_string($link,$_SESSION['id'])."',
                        '".mysqli_real_escape_string($link,$_POST['fname'])."',
                        '".mysqli_real_escape_string($link,$_POST['lname'])."',
                        '".mysqli_real_escape_string($link,$_POST['career'])."',
                        '".mysqli_real_escape_string($link,$_POST['further'])."',
                        '".mysqli_real_escape_string($link,$_POST['organisation'])."',
                        '".mysqli_real_escape_string($link,$_POST['phone'])."',
                        '".mysqli_real_escape_string($link,$_POST['dob'])."',
                        '".mysqli_real_escape_string($link,$_POST['bio'])."')";
                $resultInfo=mysqli_query($link,$insertingInfo);
                echo "1";          
            }

        // Address Geocoding :: 
        require "vendor/autoload.php"; 
        
        $geocoder = new \OpenCage\Geocoder\Geocoder($key);
        $result = $geocoder->geocode($_POST["city"] .','.$_POST["state"].','.$_POST["pin"]);
        if ($result && $result['total_results'] > 0) {
            $first = $result['results'][0];
            // print $first['geometry']['lng'] . ';' . $first['geometry']['lat'] . ';' .$_SESSION['id'] ."\n";
            # 4.360081;43.8316276;6 Rue Massillon, 30020 Nîmes, Frankreich

            $existAdd="SELECT `userId` FROM `address` WHERE `userId` = '".mysqli_real_escape_string($link,$_SESSION['id'])."' LIMIT 1";
            $resultAdd=mysqli_query($link,$existAdd);
            if(mysqli_num_rows($resultAdd)>0){    
                $updatingLatLng="UPDATE `address` 
                SET `city`='".mysqli_real_escape_string($link,$_POST['city'])."',
                    `state`='".mysqli_real_escape_string($link,$_POST['state'])."',
                    `pin`='".mysqli_real_escape_string($link,$_POST['pin'])."',
                    `lat`='".mysqli_real_escape_string($link,$first['geometry']['lat'])."',
                    `lng`='".mysqli_real_escape_string($link,$first['geometry']['lng'])."'
                WHERE `userId`=".$_SESSION['id'];
                $resultLatLng=mysqli_query($link,$updatingLatLng);
                echo "1"; 
            }else{
                $insertingLatLng="INSERT into `address` (`userId`,`city`,`state`,`pin`,`lat`,`lng`) 
                VALUES ('".mysqli_real_escape_string($link,$_SESSION['id'])."',
                        '".mysqli_real_escape_string($link,$_POST['city'])."',
                        '".mysqli_real_escape_string($link,$_POST['state'])."',
                        '".mysqli_real_escape_string($link,$_POST['pin'])."',
                        '".mysqli_real_escape_string($link,$first['geometry']['lat'])."',
                        '".mysqli_real_escape_string($link,$first['geometry']['lng'])."')";
                $resultLatLng=mysqli_query($link,$insertingLatLng);
                echo "1";          
            }
        }else{
            $error="Couldn't Access Location Info - Please try again later ";
        }    
        if($error!=""){
            echo $error;
            exit();
        }
    }



?>