<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = strval($_GET['q']);

$con = mysqli_connect('localhost','root','root','AnimalHospitalDatabase');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM Employee";
//@HERE make a query that selects staff from employees table
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
echo
"<div class='col-md-4'>
  <div class='box box-widget widget-user'>
    <div class='widget-user-header bg-aqua-gradient' style='background:
    url('') center center;'>
      <h3 class='widget-user-username'>";

//@NAME
echo $row['Employee_Name'] ;


echo
      "</h3>
      <h5 class='widget-user-desc'>";

//@JOB
echo $row['Employee_Type'] ;

echo
      "</h5>
    </div>
    <div class='widget-user-image'>
      <img class='img-circle' src='";

//imageURL
echo $row['Employee_Image'] ;

echo
"' alt='User Avatar'>
    </div>
    <div class='box-footer'>
      <div class='row'>
        <div class='col-sm-4 border-right'>
          <div class='description-block'>
            <h5 class='description-header'>From</h5>
            <span class='description-text'>";

//location
echo $row['Employee_City'] ;
echo ", ";
echo $row['Employee_State'] ;

echo
            "</span>
          </div>
        </div>
        <div class='col-sm-8 border-right'>
          <div class='description-block'>
            <h5 class='description-header'>About</h5>
            <span class='description-text'>";

//description
echo $row['Employee_Description'] ;

echo
            "</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
}

mysqli_close($con);
?>
</body>
</html>
