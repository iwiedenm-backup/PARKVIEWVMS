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
if ($q == "*"):
    $sql="SELECT * FROM PetOwner";
else:
    $sql="SELECT * FROM PetOwner WHERE PetOwner_Name = '".$q."'";
endif;
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>DOB</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip Code</th>
<th>Preferred Language</th>
<th>Email Address</th>
<th>Phone Number</th>
<th>Active Client</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['PetOwner_Name'] . "</td>";
    echo "<td>" . $row['PetOwner_DOB'] . "</td>";
    echo "<td>" . $row['PetOwner_Address'] . "</td>";
    echo "<td>" . $row['PetOwner_City'] . "</td>";
    echo "<td>" . $row['PetOwner_State'] . "</td>";
    echo "<td>" . $row['PetOwner_zipCode'] . "</td>";
    echo "<td>" . $row['PetOwner_preferredLanguage'] . "</td>";
    echo "<td>" . $row['PetOwner_emailAddress'] . "</td>";
    echo "<td>" . $row['PetOwner_phoneNumber'] . "</td>";
    echo "<td>" . $row['PetOwner_isActive'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>