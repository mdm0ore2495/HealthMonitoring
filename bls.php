<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 15px;
  text-align: center;
  background: #FEFFD2;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  height: 100%;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 25%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 75%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: gray;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
<!-- BELOW THIS IS THE TEXT  BOXES-->
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<div class="header">
  <h1>Health Monitoring Application</h1>
  <p>This application will help monitor your wellness! </p>
</div>
<br><br><br><br><br><br>
<!-- BELOW THIS IS THE TEXT  BOXES
<form>
<label for="bls">please enter your bsl:</label>
<input type="number" required> 
</form>
 -->
 
 
<?php
 
$bslArray = array();

for ($counter = 0; $counter <= 6; $counter++){
    $bsl = readline(" please enter your bsl:");
    echo"\n";
    array_push($bslArray,  $bsl);
		 }
//print_r($bslArray);


$dataPoints = array(
	array("y" => $bslArray[0], "label" => "Sunday"),
	array("y" => $bslArray[1], "label" => "Monday"),
	array("y" => $bslArray[2], "label" => "Tuesday"),
	array("y" => $bslArray[3], "label" => "Wednesday"),
	array("y" => $bslArray[4], "label" => "Thursday"),
	array("y" => $bslArray[5], "label" => "Friday"),
	array("y" => $bslArray[6], "label" => "Saturday")
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "bls Over a Week"
	},
	axisY: {
		title: "Number of bls"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 
