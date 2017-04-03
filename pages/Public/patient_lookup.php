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
    $sql="SELECT * FROM Pet";
else:
    $sql="SELECT * FROM Pet WHERE Pet_Name = '".$q."'";
endif;
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>ID</th>
<th>Owner Name</th>
<th>Insurance Provider</th>
<th>Name</th>
<th>Weight</th>
<th>Length</th>
<th>Height</th>
<th>Eye Color</th>
<th>Color</th>
<th>Species</th>
<th>Sub-Species</th>
<th>Primary Allergy</th>
<th>Pet Owner DoB</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Pet_SID'] . "</td>";
    echo "<td>" . $row['Pet_OwnerName'] . "</td>";
    echo "<td>" . $row['Pet_InsuranceProviderName'] . "</td>";
    echo "<td>" . $row['Pet_Name'] . "</td>";
    echo "<td>" . $row['Pet_Weight'] . "</td>";
    echo "<td>" . $row['Pet_Length'] . "</td>";
    echo "<td>" . $row['Pet_Height'] . "</td>";
    echo "<td>" . $row['Pet_eyeColor'] . "</td>";
    echo "<td>" . $row['Pet_Color'] . "</td>";
    echo "<td>" . $row['Pet_Species'] . "</td>";
    echo "<td>" . $row['Pet_subSpecies'] . "</td>";
    echo "<td>" . $row['Pet_primaryAllergy'] . "</td>";
    echo "<td>" . $row['Pet_OwnerDOB'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>