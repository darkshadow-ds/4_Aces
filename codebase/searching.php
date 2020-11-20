<?php
    $link=mysqli_connect("shareddb-y.hosting.stackcp.net","shareddb-y.hosting.stackcp.net","dtsq3dgzlg","trialSearch-3135394de9");

?>

<!--
<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>

</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
<style>
.button {
  width:500px;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 150px 400px;
  cursor: pointer;
}
</style>

<script type="text/javascript">
  var x = document.getElementById("demo");
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }
  function showPosition(position) {
  document.getElementById("lats").value+=position.coords.latitude;
  document.getElementById("longs").value+=position.coords.longitude;
}
</script>
</head>
<body onload="getLocation()">
<p id="demo"></p>
<input type="text" name="lats" id="lats">
<input type="text" name="longs" id="longs">

<button class="button">Find People Near U</button>

</body>
</html>
