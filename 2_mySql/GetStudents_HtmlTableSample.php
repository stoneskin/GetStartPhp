
<?php require 'dbconfig.php' ?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid;
}
th {
  background-color: #cccccc;
}
table {
  width: 80%;
  border-collapse: collapse;
}
</style>
</head>
<body>
  <h1>Test table of students</h1>
 
<?php

$sql = "SELECT `Id`, `Name`,`gender`,`age` FROM `students` WHERE age>18;";
$result = $conn->query($sql);
?>

<?php
if ($result->num_rows > 0) { 
    // output data of each row
?>

  <table>
   <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Gender</th>
    <th>age</th>
   </tr>
<?php
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. " ". $row["gender"]. " ". $row["age"]. " " . "<br>";

?>
  <tr>
    <td><?php echo $row["Id"]; ?></td>
    <td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
  </tr>
<?php
  }
?>
 </table>
<?php
  
} else {
  echo "<p>0 results</p>";
}
$conn->close();
?>

</body>
</html>