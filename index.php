<!DOCTYPE html>
<html>
<head>
  <title>Welcome to the Unit 4</title>
</head>
<body bgcolor="#E066FF">
<h1> This is our Playground Nescot People</h1>
<h2> Database is there </h2>
<?php
$servername="localhost";
$username="root";
$password="anqAyDz6qQXp";
$conn= mysqli_connect($servername,$username,$password);
if (!$conn){
    die("Connection is not working: ". mysqli_connect_error());
}
echo "Hello SQL"."<br>";

$name = "Mohsen";
echo "This is php ". $name."<br>" ;

$sql = "Select *  FROM php1.name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 // output data of each row
 while($row = $result->fetch_assoc()) {
 echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["lastname"]. "<br>";
 }
} else {
 echo "<br>"."0 results";
}
$conn->close();
?>
Name: <input type="text" name="name" value="<?php echo $name;?>">
Name: <input type="text" name="name" value="<?php echo $lname;?>">

</body>
</html> 
