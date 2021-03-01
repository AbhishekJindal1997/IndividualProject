<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<a href="index.php">Home</a>
<a href="store.php">Book Store</a>

<h1>Check out page</h1>
    
</body>
</html>


<?php   

require("mysqli_connect.php");

$cookie_name = "clickedIem";

 $value=$_GET['id'];
$cookie_value = $value;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


$q = "SELECT * FROM bookinventory where idBooks = '$value'";
$result = mysqli_query($dbc, $q) or die(mysql_error());



if (!$result){
    echo "ERROR: " . mysqli_error($dbc);
}

while ($row = mysqli_fetch_assoc($result)){

    
     
         echo  $row['title'] . "<br>";  
         echo "quantity "  . $row['quantity'] ;
     }

?>


